<?php

function MAIL_NVLP($fromname, $fromaddress, $toname, $toaddress, $subject, $message)
{
	$headers= "Content-type: text/html; charset=iso-8859-9\n";
	$headers .= "X-Priority: 3\n";
	$headers .= "X-MSMail-Priority: Normal\n";
	$headers .= "X-Mailer: php\n";
	$headers .= "From: \"".$fromname."\" <".$fromaddress.">\n";
	return mail($toaddress, $subject, $message, $headers);
}

	// Formdan gelen iceigi mail'e aktar
	// ***************************************************************************************************
	$from_name = $_REQUEST['AD'].' '.$_REQUEST['SOYAD']; // Kimden - Adi
	$from_mail = $_REQUEST['EPOSTA']; // Kimden - email adresi
	$to_name   = 'Name';
	$to_mail   = 'test@example.com';
	$subject   = "Subject - Mesaj"; //Mail Konusu
	
	//Mail Basligini Belirle
	$message = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>'.$subject.'</title>
</head><body>';
	
	$message .= $subject."\r\n\r\n";
	
	//Formdan gelen icerigi aktar
	$message .= '<table width="613" border="0" cellspacing="2" cellpadding="2" bgcolor="#F7F7F7">';
	
	foreach ($_POST as $key => $val)
	{
		if ($val) 
		{		  
			if ($key!="Submit" && $key!="form_ad") // Submitse isleme koyma
			{
				$kword = ucwords(str_replace("_", " ", $key));
				
				$message .= '<tr>';
				$message .= '  <td width="173" bgcolor="#F1EDED">'. $kword . '</td>';
				$message .= '  <td width="8">:</td>';
				$message .= '  <td width="417">'. $val . '</td>';
				$message .= '</tr>';
			}
		}
	}
	
	$message .= '</table></body></html>';
	
	MAIL_NVLP($from_name, $from_mail, $to_name, $to_mail, $subject, $message);
?><script>
alert("Mailiniz Elimize Ulasmistir... Tesekkur ederiz...");
var browser_type=navigator.appName;
var browser_version=parseInt(navigator.appVersion);
//if NS 6
if (browser_type=="Netscape"&&browser_version>=5)
window.location.replace("iletisim.html");
//if IE 4+
else if (browser_type=="Microsoft Internet Explorer"&&browser_version>=4)
window.location.replace("iletisim.html");
//if NS4+
else if (browser_type=="Netscape"&&browser_version>=4)
window.location.replace("iletisim.html");
//Default goto page (NOT NS 4+ and NOT IE 4+)
else
window.location="iletisim.html";
</script>