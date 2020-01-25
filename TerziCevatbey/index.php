<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
    <title>Terzi Cevatbey</title>
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <link href="css/iletisim.css" rel="stylesheet" type="text/css" />
    <link href="css/nasilYapilir.css" rel="stylesheet" type="text/css" />
    <link href="css/hizmet.css" rel="stylesheet" type="text/css" />
    
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/easySlider1.7.js"></script>
    <script type="text/javascript" src="js/initMenuPics.js"></script>
</head>
<body <?
	$page = $_GET["page"];
	if ($page == "hizmetler" || $page == "nasilYapilir") { ?> class="white" <? }
	else { ?> class="blue" <? }
?> id="body">
<table id="outerTable">
	<tr><td>
        <div id="header">
            <img src="images/logo.png" width="162" height="62" />
            <div id="text">
                    <p id="headerText">Güzel Giyinmek Güzel Görünmektir...</p>
                    <a href="#"><img src="images/facebook.gif" width="11" height="20" id="facebookLink" /></a>
                    <a href="#"><img src="images/twitter.gif" width="26" height="20" /></a>
            </div>
        </div>
    </td></tr>
	<tr><td id="menu">
        <div>
            <ul>
                <li id="anaSayfa"><a href="index.php"><p>ANASAYFA</p></a></li>
                <li id="kurumsal"><a href="index.php?page=kurumsal"><p>KURUMSAL</p></a></li>
                <li id="belgelerimiz"><a href="index.php?page=belgeler"><p>BELGELERİMİZ</p></a></li>
                <li id="hizmetlerimiz"><a href="index.php?page=hizmetler"><p>HİZMETLERİMİZ</p></a></li>
                <li id="nasilYapilir"><a href="index.php?page=nasilYapilir"><p>NASIL YAPILIR ?</p></a></li>
                <li id="iletisim"><a href="index.php?page=iletisim"><p>İLETİŞİM</p></a></li>
            </ul>
		</div>
	</td></tr>
    <?php
		$page = $_GET["page"];
		
		if ($page) {
			include 'libs/' . $page . '.php';
		}
		else {
			include 'libs/' . 'home.php';
		}
	?>
</table>
</body>
</html>