<?php


	

    $siter=@file_get_contents("http://www.haberturk.com/havadurumu/T%C3%BCrkiye/Sakarya");
	
	$resim = explode('<div style="width:130px; height:100px; float:left; font-family:Arial, Helvetica, sans-serif; font-size:20px; font-weight:bold; color:#003259; padding: 0px 0px 0px 5px"><img src="',$siter);
	$resim = explode('" /></div>',$resim[1]);
	

	
	$derece = explode('<div style="width:93px; float:right; height: 30px;font-family:Arial, Helvetica, sans-serif; font-size:40px; color:#c50000; padding: 20px 10px 0px 0px; text-align:right; line-height: 1.5em;height: 60px;">',$siter);
	$derece = explode('</div>',$derece[1]);
	
	
	
	
	
	
?>
<img src="http://www.haberturk.com<?= $resim[0];  ?>" height="60" align="absmiddle" /><br /><font style="font-family:Arial, Helvetica, sans-serif">Sakarya <span style="font-size:30px;"><?= $derece[0];  ?> &deg;</span> </font>
