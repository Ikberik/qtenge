<?php 
	header('Content-Type: text/html; charset=UTF-8');
	require('lib/phpQuery.php');
	require('lib/main.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>qTenge</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
</head>
<body>
	<header class="bodyWrapper">
		<div class="qLogo">
			<img src="img/logo.svg" alt="qtenge Logo">
		</div>
		<aside>
			<div id="slider">
			  <img src="img/header_banner.jpg" alt="top header banner">
			</div>	    
		</aside>
	</header>
	<section>
		<section class="qTopTitle">
			Курс основных валют
		</section>
		<section class="qTopCurrencyWrapper">
			<article class="qMainBlocks qTopCurrency">
				<div class="qTopCurrencyWrapperTxt">
					<span>АМЕРИКАНСКИЙ ДОЛЛАР</span>
					<img src="img/usd_logo.svg" alt="">
					<p class="qCurrencyTopImg">USD</p>
				</div>
				<div><span>ПРОДАЖА</span><?php echo $tblMigSellUSD; ?></div>
				<div><span>ПОКУПКА</span><?php echo $tblMigByuUSD; ?></div>
			</article>
			<article class="qMainBlocks qTopCurrency">
				<div class="qTopCurrencyWrapperTxt">
					<span>ЕВРО</span>
					<img src="img/eu_logo.svg" alt="">
					<p class="qCurrencyTopImg">EUR</p>
				</div>
				<div><span>ПРОДАЖА</span><?php echo $tblMigSellEUR; ?></div>
				<div><span>ПОКУПКА</span><?php echo $tblMigByuEUR; ?></div>
			</article>
			<article class="qMainBlocks qTopCurrency">
				<div class="qTopCurrencyWrapperTxt">
					<span>РОССИСКИЙ РУБЛЬ</span>
					<img src="img/ru_logo.svg" alt="">
					<p class="qCurrencyTopImg">RUB</p>
				</div>
				<div><span>ПРОДАЖА</span><?php echo $tblMigSellRUS; ?></div>
				<div><span>ПОКУПКА</span><?php echo $tblMigByuRUS; ?></div>
			</article>
		</section>
		<section class="qTopTitle">
			Курс Национального Банка
		</section>
		<section class="qMainCurrency">
			<div class="qCurrencyCur">
				<div class="qMainBlocks qNationalBank">
					<div class="qTopCurrencyWrapperTxt">
						<span class="qSmallspanTitle">АМЕРИКАНСКИЙ ДОЛЛАР</span>
						<img src="img/eu_logo.svg" alt="">
						<p class="qCurrencyTopImg">USD</p>
					</div>
					<div>
						<span class="qSmallspanTitle">ПРОДАЖА</span>
						<?php echo $tblMigKZ; ?>
					</div>
					<div class="qTopCurrencyWrapperTxt">
						<span class="qSmallspanTitle">КАЗАХСТАНСКИЙ ТЕНГЕ</span>
						<img src="img/eu_logo.svg" alt="">
						<p class="qCurrencyTopImg">KZT</p>
					</div>
				</div>
				
				<!-- <article class="qMainBlocks qOtherBanksWrapper">
					<article class="qOtherBanks">
						<img src="img/qazkom.png" alt="qazkom" />
						Qazkom
						<div>
							<?php echo $tblQzkSell." | USD | ".$tblQzkBuy; ?>
						</div>
					</article>
					<article class="qOtherBanks">
						<img src="img/sber.jpg" alt="sber-logo" />
						Сбербанк
						<div>
							<?php echo $tblSbbByu." | USD | ".$tblSbbSell; ?>
						</div>
					</article>
					<article class="qOtherBanks">
						<img src="img/halyk.png" alt="Bitcoin" />
						Halyk bank
						<div>
							<?php echo $tblHalykBuy." | USD | ".$tblHalykSell; ?>
						</div>
					</article>
				</article> -->
			</div>
			<div class="qCurrencyBanner">
				<img src="img/main_banner.jpg" alt="top header banner">
			</div>
		</section>
		<section class="qTopTitle">
			Курс Биткойна
		</section>
		<section class="qBitcoin">
			<img src="img/BTC.png" alt="Bitcoin" />
			<span>1 BTC Биткоин =  <span id="qTopBannerValue"> <?php echo $tbl; ?></span> KZT</span>
			<img src="img/KZ.png" alt="Flag KZ" /> 
			<span>по курсу на <?php echo date("d.m.Y"); ?></span>
		</section>
		<section class="qAdvertisement">
			<img src="img/headerBanner.png" alt="top header banner">
		</section>
		<section class="qCEO">
			<p class="ceo_title">CEO TEXT</p>
			<span class="ceo_text">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis expedita reprehenderit, voluptatem delectus vel sapiente molestiae id accusantium sunt odit assumenda ut praesentium dolore soluta rerum dolores at adipisci aspernatur. Eum a nostrum recusandae nulla? Vitae eaque culpa doloribus, maxime totam expedita! Amet quas, vero neque facere numquam perspiciatis quia soluta necessitatibus debitis recusandae nam excepturi! Modi alias, maiores molestiae hic quos nam ipsum tempore asperiores officiis quia magnam, quo commodi quam fugit omnis nostrum natus porro animi impedit ut eius inventore. Esse unde rerum ullam ad distinctio sequi explicabo nobis, quas est hic voluptatibus incidunt soluta ab blanditiis omnis.
			</span>
		</section> 
	<footer>
		<span>© 2005 - 2017 SF7.</span><br >
		<span>Создание сайта - веб-студия творческой группы "Весна".</span><br >
		<span>8 (727) 266-63-29, 8 (727) 292-12-91, Алматы, ул. Жамбыла, 114/85, уг. ул. Байтурсынова, офис 113/1</span>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<!-- HelloPreload http://hello-site.ru/preloader/ -->
	<!-- HelloPreload http://hello-site.ru/preloader/ --
	<style type="text/css">#hellopreloader>p{display:none;}#hellopreloader_preload{display: block;position: fixed;z-index: 99999;top: 0;left: 0;width: 100%;height: 100%;min-width: 1000px;background: #16a085 url(http://hello-site.ru//main/images/preloads/puff.svg) center center no-repeat;background-size:76px;}</style>
	<div id="hellopreloader"><div id="hellopreloader_preload"></div><p><a href="http://hello-site.ru">Hello-Site.ru. Бесплатный конструктор сайтов.</a></p></div>
	<script type="text/javascript">var hellopreloader = document.getElementById("hellopreloader_preload");function fadeOutnojquery(el){el.style.opacity = 1;var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;if (el.style.opacity <=0.05){ clearInterval(interhellopreloader);hellopreloader.style.display = "none";}},16);}window.onload = function(){setTimeout(function(){fadeOutnojquery(hellopreloader);},1000);};</script>
	<!-- HelloPreload http://hello-site.ru/preloader/ -->
</body>
</html>

