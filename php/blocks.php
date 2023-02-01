
// Something, lol


<?php
	function secondaryHeader(){
		echo '
			<nav class="header__nav">
        		<a href="../index.php"><img src="../images/header&footer/logo.png" alt="Логотип" class="header__logo"></a>
        		<ul class="header__list">
        		    <li>
        		        <a href="./aboutus.php" class="header__link" id="aboutusheader">про нас</a>
        		    </li>
        		    <li><a href="./tabir.php" class="header__link">табір</a></li>
        		    <li>
        		        <a href="./event.php" class="header__link" id="eventheader" onclick="eventHeader()">заходи</a>
        		    </li>
        		    <li>
        		        <a href="./merch.php" class="header__link" id="merchheader">мерч</a>
        		        <!--<a href="#" class="header__link" id="merchheader2">одяг</a>
        		        <a href="#" class="header__link" id="merchheader3">аксесуари</a>
        		        <a href="#" class="header__link" id="merchheader4">книги</a>-->
        		    </li>
        		    <li><a href="#" class="header__link">допомога</a></li>
        		    <li><a href="#" class="header__link">комерційні заходи</a></li>
        		</ul>
    		</nav>
		';
	}

	function secondaryFooter(){
		echo '
			<footer class="footer wow fadeInUp">
        		<div class="footer-block">
        		    <div class="footer__col">
        		        <nav class="footer__nav">
        		            <ul class="footer__list">
        		                <li><a href="https://www.youtube.com/channel/UCROFrx6_3YVPx2pKHyY8C2w" class="footer__link"><img
        		                            src="../images/header&footer/yt-link.png" alt=""></a></li>
        		                <li><a href="https://www.tiktok.com/@pokluk.yary?_t=8VGQqhNHl7G&_r=1" class="footer__link"><img
        		                            src="../images/header&footer/tt-link.png" alt=""></a></li>
        		                <li><a href="https://t.me/PoklykYaru" class="footer__link">
        		                        <img src="../images/header&footer/tg-link.png" alt=""></a></li>
        		                <li><a href="https://www.facebook.com/poklyk.yaru" class="footer__link"><img
        		                            src="../images/header&footer/fc-link.png" alt=""></a></li>
        		                <li><a href="https://www.instagram.com/poklyk.yaru/" class="footer__link"><img
        		                            src="../images/header&footer/inst-link.png" alt=""></a></li>
        		            </ul>
        		        </nav>
        		    </div>
        		    <div class="footer__col">
        		        <h3 class="footer__adress">2972 Westheimer Rd. Santa Ana, Illinois 85486 </h3>
        		        <h3 class="footer__adress">(207) 555-0119</h3>
        		        <h3 class="footer__adress">(207) 555-0119</h3>
        		    </div>
        		</div>
        		<div class="footer-block">
        		    <h3 class="footer__license">ГО “Поклик яру”    2020-2021. Всі права захищені</h3>
        		    <h3 class="footer__license">Дизайн сайту Olha Skarzhynets, графічний дизайн Катя Вспишка, верстка сайту Дон</h3>
        		</div>
    		</footer>
		';
	}
