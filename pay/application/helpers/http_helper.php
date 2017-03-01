<?php
if (!function_exists('http_request')) {
	function http_request($url, $method = 'GET', $api_key = '', $data = '', $cookie = '', $refer = '') {
		$header = '';
		$body = '';
		$newcookie = '';
		if (preg_match('/^http:\/\/(.*?)(\/.*)$/', $url, $reg)) {
			$host = $reg[1];
			$path = $reg[2];} else {log_message('error', "URL($url)zxhralferror!");return;}
		$http_host = $host;
		if (preg_match('/^(.*):(\d+)$/', $host, $reg)) {
			$host = $reg[1];
			$port = $reg[2];} else {
			$port = 80;
		}

		$fp = fsockopen($host, $port, $errno, $errstr, 30);
		if (!$fp) {
			log_message('error', "$errstr ($errno)\n");
		} else {
			fputs($fp, "$method $path HTTP/1.1\r\n");
			fputs($fp, "Host: $http_host\r\n");
			if ($refer != '') {
				fputs($fp, "Referer: $refer\r\n");
			}

			if ($cookie != '') {
				fputs($fp, "Cookie: $cookie\r\n");
			}

			fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n");
			fputs($fp, "Content-length: " . strlen($data) . "\r\n");
			fputs($fp, "REST-TB-API-KEY: " . $api_key . "\r\n");
			fputs($fp, "Connection: close\r\n\r\n");
			fputs($fp, $data . "\r\n\r\n");
			$header_body = 0;
			$chunked_format = 0;
			$chunked_len = 0;
			while (!feof($fp)) {
				$str = fgets($fp);
				//$len=hexdec($str);        if ($header_body==1) {echo ">>$str\t$len\n";        $str=fread($fp,$len);echo $str;}
				if ($header_body == 1) {
					if ($chunked_format) {
						if ($chunked_len <= 0) {
							$chunked_len = hexdec($str);
							if ($chunked_len == 0) {
								break;
							} else {
								continue;
							}

						} else {
							$chunked_len -= strlen($str);
							if ($chunked_len <= 0) {
								$str = trim($str);
							}

							//elseif ($chunked_len==0) fgets($fp);
						}
					}
					$body .= $str;
				} else if ($str == "\r\n") {
					$header_body = 1;
				} else {
					$header .= $str;
					if ($str == "Transfer-Encoding: chunked\r\n") {
						$chunked_format = 1;
					}

					if (preg_match('|Set-Cookie: (\S+)=(\S+);|', $str, $reg)) {
						$newcookie .= ($newcookie == '' ? '' : '; ') . $reg[1] . '=' . $reg[2];
					}

				}
			}
			fclose($fp);
		}
		//$GLOBALS['TRAFFIC']+=414+strlen($url)+strlen($data)+strlen($header)+strlen($body);
		if (preg_match('/^Location: (\S+)\r\n/m', $header, $reg)) {
			if (substr($reg[1], 0, 1) != '/') {
				$path = substr($path, 0, strrpos($path, '/') + 1);
				$path .= $reg[1];
			} else {
				$path = $reg[1];
			}

			if ($newcookie) {
				$cookie = $newcookie;
			}

			return http_request('http://' . $http_host . $path, 'GET', '', $cookie, $url);
		}
		return array($body, $header, $newcookie);
	}
}