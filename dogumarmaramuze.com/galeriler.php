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
    <link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
    <!-- Scripts -->
	<script type="text/livescript" src="js/menu.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.lightbox-0.5.min.js"></script>
    <script type="text/javascript">
		$(function() {
			$('#galeriler table tr td a').lightBox();
		});
    </script>
</head>
<body>
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
              <li class="menuNormal"><a><img src="images/standard/menu_icon.png" width="27" height="27" /><p>GALERİLER</p></a></li>
              <li class="menuNormal"><a href="muzeler.php"><img src="images/standard/menu_icon.png" width="27" height="27" /><p>MÜZELER</p></a></li>
              <li class="menuNormal"><a href="dergiler.htm"><img src="images/standard/menu_icon.png" width="27" height="27" /><p>DERGİLER</p></a></li>
              <li class="menuNormal"><a href="iletisim.htm"><img src="images/standard/menu_icon.png" width="27" height="27" /><p>İLETİŞİM</p></a></li>
            </ul>
        </div>
    </div>
    <div id="galerilerPageContents" class="pageContents">
    	<div id="galeriler_header_text">BİTİNYA UYGARLIĞI FOTOĞRAF GALERİSİ</div>
        <hr color="#5A5748" width="940" size="1" style="margin: 10px 17px 0 30px;" />
        <div id="galeriler_header_menu">
			<?php
				if ($_GET['galeri']) {
					$galeri = $_GET['galeri'];
					$allowedGaleri = array("gladyatorler" , "gunluk" , "inanc" , "olum" , "saglik" , "savas" , "tiyatro");
					foreach ($allowedGaleri as $thisGaleri) {
						if ($galeri == $thisGaleri) {
							$galeriFound = true;
							break;
						}
					}
					if (isset($galeriFound)) {include("galeriler/" . $_GET['galeri'] . ".php");}
					else {include("galeriler/gunluk.php");}
					}
				else {include("galeriler/gunluk.php");}
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
