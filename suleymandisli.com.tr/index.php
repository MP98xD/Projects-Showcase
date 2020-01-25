<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
    <title>Süleyman DİŞLİ Adapazarı Belediye Başkanı</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <!-- Plug-ins -->
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <!-- Scripts -->
    <?php
		if (!isset($_GET['page'])) { ?>
        	<style type="text/css"> #adapazari_logo {top: -151px;}</style>
			<script>$(document).ready(function(){$("#adapazari_logo").animate({top:'0px'}, 1000);});</script>
    <?php } ?>
</head>
<body>
<!--
	Programmed By: Mosab
	musabbasil@ortakfikir.com
	Web Programmer
-->
<div id="websiteContents">
    <div id="header">
    	<div id="suleyman_photo"></div>
        <div id="suleyman_logo"></div>
        <div id="adapazari_logo"></div>
        <div id="facebook_twitter"></div>
        <div id="searchBox"></div>
        
        <div id="headerMenu">
            <ul>
              <li><a <?php
              			if (!isset($_GET['page'])) {
							echo "class=\"click\"";
						} else {
							echo "href=\"index.php\"";
						}
					?>>ANASAYFA</a></li>
              <li><a <?php
              			if (isset($_GET['page']) && $_GET['page'] == "biyografi") {
							echo "class=\"click\"";
						} else {
							echo "href=\"index.php?page=biyografi\"";
						}
					?>>BİYOGRAFİ</a></li>
              <li><a <?php
			  			if (isset($_GET['page']) && $_GET['page'] == "basinda") {
							echo "class=\"click\"";
						} else {
							echo "href=\"index.php?page=basinda\"";
						}
					?>>BASINDA</a></li>
              <li><a <?php
			  			if (isset($_GET['page']) && $_GET['page'] == "fotoAlbumu") {
							echo "class=\"click\"";
						} else {
							echo "href=\"index.php?page=fotoAlbumu\"";
						}
			  		?>>FOTO GALERİ</a></li>
              <li><a <?php
			  			if (isset($_GET['page']) && $_GET['page'] == "teknikProjeler") {
							echo "class=\"click\"";
						} else {
								echo "href=\"index.php?page=teknikProjeler\"";
						}
			  		?>>TEKNİK PROJELER</a></li>
              <li><a <?php
			  			if (isset($_GET['page']) && $_GET['page'] == "sosyalProjeler") {
							echo "class=\"click\"";
						} else {
							echo "href=\"index.php?page=sosyalProjeler\"";
						}
			  		?>>SOSYAL PROJELER</a></li>
              <li><a <?php
			  			if (isset($_GET['page']) && $_GET['page'] == "ziyaretciDefteri") {
							echo "class=\"click\"";
						} else {
							echo "href=\"index.php?page=ziyaretciDefteri\"";
						}
			  		?>>ZİYARETÇİ DEFTERİ</a></li>
              <li><a <?php
			  			if (isset($_GET['page']) && $_GET['page'] == "iletisim") {
							echo "class=\"click\"";
						} else {
							echo "href=\"index.php?page=iletisim\"";
						}
					?>>İLETİŞİM</a></li>
            </ul>
        </div>
    </div>
    <div id="headerLine"></div>
    <div id="headerLine_down"></div>
    <div class="pageContents">
    	<div id="contents">
			<?php
				if (isset($_GET['page'])) {
					include("includes/" . $_GET['page'] . ".php");
				} else {
					include("includes/anasayfa.php");
				}
            ?>
        </div>
        <div class="clear"></div>
    </div>
</div>
	<div class="footerParent">
        <div class="footer">
            <div class="footerContainer">
                <div id="copyright">Copyright © 2013 Süleyman Dişli</div>
                <div id="footerLinks">
                	<a href="index.php?page=biyografi">BİYOGRAFİ</a>
                    <a href="index.php?page=basinda">BASINDA</a>
                    <a href="index.php?page=fotoAlbumu">FOTO GALERİ</a>
                    <a href="index.php?page=teknikProjeler">TEKNİK PROJELER</a>
                    <a href="index.php?page=sosyalProjeler">SOSYAL PROJELER</a>
                    <a href="index.php?page=ziyaretciDefteri">ZİYARETÇİ DEFTERİ</a>
                    <a href="index.php?page=iletisim">İLETİŞİM</a>
            	</div>
            </div>
        </div>
    </div>
</body>
</html>
