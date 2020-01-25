<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
    <title>M�LENYUM HAVALANDIRMA - HAVALANDIRMA & �ZOLASYON S�STEMLER�NDE G�VEN�L�R ��Z�M ORTA�INIZ</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <script type="text/livescript" src="js/menu.js"></script>
    <meta name="keywords" content="HAVALANDIRMA, S�STEMLER�, DO�ALGAZA, UYUMLU, FABR�KA, VE, S�TE, BACA, S�STEMLER�, BACA, F�L�TRE, S�STEMLER�, TOZ, TOPLAMA, S�STEMLER�, -, �ZOLASYON, S�STEMLER� DAVLUMBAZ, HAVALANDIRMA, S�STEMLER�, MERKEZ�, �KL�MLEND�RME, S�STEMLER�, SA�, KAPLAMA, S�STEMLER�" />
    <meta name="description" content="HAVALANDIRMA & �ZOLASYON<br />S�STEMLER�NDE G�VEN�L�R ��Z�M ORTA�INIZ" />
    <link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<!--
	Programmed By: Mosab
	musabbasil@ortakfikir.com
	Web Programmer
-->
<div id="pageContents">
    <div id="header">
        <a href="index.htm"><img src="images/logo.png" width="286" height="66" alt="MILENYUM HAVALANDIRMA" /></a>
        
        <div id="headerMenu">
            <ul>
              <li id="hakkimizda" class="menuNormal"><a href="kurumsal.htm"><img src="images/headerHomeIcon.png" width="29" height="27" /><p>KURUMSAL</p></a></li>
              <li id="urunlerimiz" class="menuNormal"><a href="urunlerimiz.htm"><img src="images/headerUrunlerimizIcon.png" width="28" height="27" /><p>�R�NLER�M�Z</p></a></li>
              <li id="hizmetlerimiz" class="menuNormal"><a href="hizmetlerimiz.htm"><img src="images/headerHizmetlerimizIcon.png" width="30" height="30" /><p>H�ZMETLER�M�Z</p></a></li>
              <li id="fotogaleri" class="menuNormal"><a href="fotogaleri.htm"><img src="images/headerFotogaleriIcon.png" width="33" height="25" /><p>FOTO GALERI</p></a></li>
              <li id="iletisim" class="menuHover click"><a><img src="images/headerIletisimIcon.png" width="32" height="22" /><p>�LET���M</p></a></li>
            </ul>
        </div>
    </div>
    <div id="bannerIL" class="banner"></div>
	<div id="contactUs">
    	<div>
            <img src="images/mail.png" width="32" height="33" style="margin: 0 8px 0 16px;" />
            <font style="margin-top: 7px;">bilgi@milenyumhavalandirma.com</font>
    
            <img src="images/tel.png" width="32" height="32" style="margin-left: 64px; margin-right: 12px;" />
            <font>Tel&nbsp;&nbsp;&nbsp;&nbsp;: 0 (282) 651 99 21<br />Faks : 0 (282) 651 99 22</font>
    
            <img src="images/address.png" width="32" height="32" style="margin-left: 64px; margin-right: 17px;" />
            <font>H�d�ra�a Mah. Gazi �e�me Sk.<br />No: 11/A&nbsp;&nbsp;�orlu / TEK�RDA�</font>
		</div>
    </div>
    
    <div id="inputs">
    	<form name="mailMilenyum" method="post" action="iletisim.php?send=send">
    	<table id="leftSide">
        	<tr><td><div class="inputsBG"><p>�sim - Soyisim*</p></div><input type="text" name="Name" /></td></tr>
			<tr><td><div class="inputsBG"><p>Telefon*</p></div><input type="tel" name="Tel" /></td></tr>
			<tr><td><div class="inputsBG"><p>E-Posta*</p></div><input type="email" name="Email" /></td></tr>
		</table>
        <table id="rightSide">
        	<tr><td><div id="mesajDiv"><p id="mesaj">Mesaj*</p></div><textarea name="Message"></textarea></td></tr>
            <tr><td>
            	<div style="margin-top: 15px;">
                    <font id="requiredText">Doldurumas� zorunlu alanlar*</font>
                    <input type="submit" value="G�NDER" id="submit" />
                </div>
            </td></tr>
        </table>
        </form>
    </div>
    
    <div class="footer" style="margin-top: 60px;">
        <hr width="958px" size="1px" color="#004179" />
        <font style="font-family: arimo, serif; color: #004179; font-size: 12px; margin-left: 300px;">T�m haklar� Milenyum Havaland�rma Ltd. �ti�ye attir. Copyright 2013</font>
        <hr width="958px" size="1px" color="#004179" />
	</div>
</div>
<?php
$page = $_GET['send'];
if ($page == "send") {
	$uName = $_POST['Name'];
	$uTel = $_POST['Tel'];
	$uEmail = $_POST['Email'];
	$uMessage = $_POST['Message'];
	if(isset($uName, $uTel, $uEmail, $uMessage)){
		if(empty($uName)){
			$errors[] = "L�tfen isiminiz ve soyisiminiz girin.";
		}
		if(empty($uTel)){
			$errors[] = "L�tfen telefonunuz girin.";
		}
		//Validate Sender Email
		if(empty($uEmail)){
			$errors[] = "L�tfen do�ru e-posta adresi girin.";
		}else if(strlen($uEmail) > 347) {
			$errors[] = "E-post ��k �z�n. L�tfen do�ru e-posta adresi girin.";
		}else if(filter_var($uEmail, FILTER_VALIDATE_EMAIL) === false) {
			$errors[] = "L�tfen do�ru e-posta adresi girin.";
		}else{
			$uEmail = htmlentities($uEmail);
		}
		//Validate The Message Body
		if(empty($uMessage)){
			$errors[] = "L�tfen mesaj girin.";
		}else{
			$body = "Milenyumhavalandirma.com" . "<br /><br />" . "�sim-soyisim: {$uName}" . "<br />" . "Telefon: {$uTel}" . "<br />" . "E-Posta: {$uEmail}" . "<br />" . "Mesaj: {$uMessage}";
		}
	}
	if (empty($errors) && !isset($errors)) {
		include 'class.phpmailer.php';
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPAuth = true;
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->SMTPSecure = 'tls';
		
		//If your server has smtp, you have add this remove abow!
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->Username = 'milenyumhavalandirma59@gmail.com';//your gmail address
		$mail->Password = 'milenyum2013';//your gmail password
		$mail->SetFrom($mail->Username, 'milenyumhavalandirma');
		$mail->AddAddress('bilgi@milenyumhavalandirma.com', 'Alicinin Adi');//receiver mail address
		$mail->CharSet = 'iso-8859-9';
		$mail->Subject = '�leti�im sayfas�ndan mesaj�n�z var';
		$mail->MsgHTML($body);
		if($mail->Send()) {
			?><script type="text/javascript">alert("Mail g�nderildi!");</script><?php
		}
	} else {
		?><script type="text/javascript">alert("<?php echo $errors[0] ?>");</script><?php
	}
}
?>
</body>
</html>
