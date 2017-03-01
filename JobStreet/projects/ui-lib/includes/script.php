<script src="http://dna.jsstatic.com/js/jquery.js"></script>
<script src="http://dna.jsstatic.com/js/bootstrap.js"></script>
<?php
if(isset($theme)){
	echo' <script src="'.$ProjectCDNHost.'/js/'.$theme.'.js"></script>';
	echo' <script src="'.$ProjectCDNHost.'/select2/select2.js"></script>';
}
?>
<script src="<?php echo $HostURL ?>js/script.js"></script>
<script src="<?php echo $HostURL ?>js/prettify.js"></script>