<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

// ------------------------------------------------------------------------

/**
 * ol 相关模型
 * @author      Ralf
 */
class Ol_load_model extends CI_Model {
	public $ci;
	
	public function __construct() {
		parent::__construct();
		$this->ci = &get_instance();
		$this->ci->load->helper('ip');
	}

	/**
	* 	2个表中保证不插入同单号的数据
	*	发生任何主动和被动异常，都会终止程序，抛出错误页面
	*/
	public function insertDouble($checkedData) {

		try {
			$re_load = $this->db->select('id, orderno')->where('orderno', $checkedData['forderno'])->get('ol_load')->result() ? true : false;
			$re_deposit_record = $this->db->select('fid, fcode')->where(array('fbegindate >=' => date("Y-m-d", strtotime("-1 day", time())) . " 00:00:00", 'fbegindate <=' => date('Y-m-d', time()) . " 23:59:59", 'fcode' => $checkedData['forderno']))->get('ol_deposit_record')->result() ? true : false;


			if ($re_load || $re_deposit_record) {
				log_message('error', '请求用户IP:' . get_real_ip() . '   错误信息2002: ' . '该笔交易已经无效，请刷新页面重新申请!');
				show_error('错误信息2002: ' . '该笔交易已经无效，请刷新页面重新申请!', 403);
			} else {
				$this->db->trans_begin();

				$datetime = date('Y-m-d H:i:s', time());
				$this->db->insert('ol_load', array('orderno' => $checkedData['forderno'],
					'bankcode' => $checkedData['fbankcode'],
					'bankid' => $checkedData['fbankid'],
					'pay_id' => $checkedData['fonlineid'],
					'pay_name' => $checkedData['fonlinecode'],
					'user_id' => $checkedData['fuserid'],
					'user_name' => $checkedData['fusercode'],
					'load_amount' => $checkedData['famount'],
					'load_fee' => 0,
					'trans_key' => '',
					'trans_time' => $datetime
				));

				$this->db->insert('ol_deposit_record', array('fcode' => $checkedData['forderno'],
					'fuserid' => $checkedData['fuserid'],
					'fusercode' => $checkedData['fusercode'],
					'ftype' => 16,
					'fmoney' => $checkedData['famount'],
					'factmoney' => $checkedData['famount'],
					'fbankid' => $checkedData['fbankid'],
					'fstatus' => 1,
					'fbegindate' => $datetime,
					'fupdateuser' => 'admin',
					'fdepositbonus' => $checkedData['fdepositbonus'],
					'fbrand' => 2
				));

				if ($this->db->trans_status() === FALSE) {
					$this->db->trans_rollback();
					log_message('error', '请求用户IP:' . get_real_ip() . '   错误信息2003: ' . '事务异常，请刷新页面重新申请!');
					show_error('错误信息2003: ' . '事务异常，请刷新页面重新申请!', 403);
				}
				else {
					$this->db->trans_commit();
				}
			}
		} catch (Exception $e) {
			log_message('error', '请求用户IP:' . get_real_ip() . '   错误信息2001: ' . $e->getMessage());
			show_error('错误信息2001: ' . $e->getMessage(), 403);
		}
	}

	//将第一方传来的merchantid 和key保存至db  第三方回调时再取出
	public function setMerchantKey($mid, $mkey) {
		if (!$this->db->select('*')->where('fmerchantid', $mid)->get('ol_merchant')->result()) {
			$this->db->insert('ol_merchant', ['fmerchantid' => $mid, 'fmerchantkey' => $mkey]);
		}
	}
	public function getMerchantKey($mid) {
		$re = $this->db->select('*')->where('fmerchantid', $mid)->get('ol_merchant')->result();
		return isset($re[0]->fmerchantkey) ? $re[0]->fmerchantkey : '';
	}


	public function successUpdate($updateArrLoad, $whereArrLoad, $updateArrDepo, $whereArrDepo) {
		$this->db->trans_begin();
		$this->db->where($whereArrLoad)->update('ol_load',$updateArrLoad);
		$this->db->where($whereArrDepo)->update('ol_deposit_record',$updateArrDepo);
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			log_message('error', '请求用户IP:' . get_real_ip() . '   错误信息2003: ' . '事务异常at successUpdate');
			return false;
		}
		else {
			$this->db->trans_commit();
			return true;
		}
	}

	public function toldUpdate($orderno) {
		return $this->db->where('orderno', $orderno)->where('copied',0)->update('ol_load', ['copied'=>1]);		
	}

	public function isCopied($orderno) {
		return $this->db->select('id, orderno')->where(['orderno'=>$orderno, 'copied'=>1])->where_in('load_status', [1,2])->get('ol_load')->result() ? true : false;	
	}

	public function getDeposit($where) {
		return $this->db->where($where)->get('ol_deposit_record')->result();	
	}

	public function getLoadStatus($orderno) {
		$secondDup = $this->db->select('id, orderno,load_status')->where(['orderno'=>$orderno])->get('ol_load')->result();

		//-1 表示没有这条记录
		return $secondDup ? $secondDup[0]->load_status : '-1';
	}

}