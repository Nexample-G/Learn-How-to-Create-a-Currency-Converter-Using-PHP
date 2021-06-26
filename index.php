<?php
	$VIA = "https://www.google.com/";
	$internet = @fopen($VIA,"r");
	if($internet){
	$CRN = "USD";
	$TOC = "INR";
	$AMT = '1';
	$V = 'search?q='.$VIA.$CRN."+to+".$TOC;
	$SPLIT = preg_split('/\D\s(.*?)\s=\s/',@file_get_contents($V));
	$EXRATE = substr($SPLIT[1],0,7);
	$CVM = $AMT*$EXRATE;
	echo $EXRATE.' <br>'.$CVM.' '.$CRN.' To '.$TOC.'<br>';
	}
?>
