<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>    
	<link href="css/number_slideshow.css" rel="stylesheet" type="text/css"></link>
    <!-- Scripts -->
	<script type="text/livescript" src="js/menu.js"></script>
</head>
<body <?php
	if ($_GET['muze'] == "duzce" || !$_GET['muze']) {echo "class='BGduzce'";}
	if ($_GET['muze'] == "sakarya") {echo "class='BGsakarya'";}
	if ($_GET['muze'] == "bolu") {echo "class='BGbolu'";}
	if ($_GET['muze'] == "kocaeli") {echo "class='BGkocaeli'";}
?>>
<!--
	Programmed By: Mosab
	musabbasil@ortakfikir.com
	Web Programmer
-->
<div id="websiteContents">
    <div id="header">
        <div id="ab_upperlogo"></div>
        <div id="headerText">Bu Proje Avrupa Birliği ve Türkiye Cumhuriyeti tarafından ortaklaşa finanse edilmektedir.</div>
        <div id="headerMenu">
            <ul>
              <li class="menuHover click"><a href="index.htm"><img src="images/standard/menu_icon.png" width="27" height="27" /><p>ANA SAYFA</p></a></li>
              <li class="menuNormal"><a href="galeriler.php"><img src="images/standard/menu_icon.png" width="27" height="27" /><p>GALERİLER</p></a></li>
              <li class="menuNormal"><a><img src="images/standard/menu_icon.png" width="27" height="27" /><p>MÜZELER</p></a></li>
              <li class="menuNormal"><a href="dergiler.htm"><img src="images/standard/menu_icon.png" width="27" height="27" /><p>DERGİLER</p></a></li>
              <li class="menuNormal"><a href="iletisim.htm"><img src="images/standard/menu_icon.png" width="27" height="27" /><p>İLETİŞİM</p></a></li>
            </ul>
        </div>
    </div>
    <div id="muzelerPageContents" class="pageContents">
    	<div id="muzeler_header_text">MÜZELERİMİZ</div>
        <hr color="#5A5748" width="940" size="1" style="margin: 10px 17px 0 30px;" />
        <div id="muzeler_header_menu">
        	<?php
				if ($_GET['muze']) {
					$muze = $_GET['muze'];
					$allowedMuze = array("duzce" , "sakarya" , "bolu" , "kocaeli");
					foreach ($allowedMuze as $thisMuze) {
						if ($muze == $thisMuze) {
							$MuzeFound = true;
							break;
						}
					}
					if (isset($MuzeFound)) {include("muzeler/" . $_GET['muze'] . ".php");}
					else {include("muzeler/duzce.php");}
					}
				else {include("muzeler/duzce.php");}
			?>
        </div>
        <div class="footer">
            <div class="footerImg"></div>
            <div class="copyright"><p>© 2013 - Tüm hakları saklıdır.</p></div>
        </div>
    </div>
</div>
</body>
</html>
