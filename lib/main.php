<?php
function parseIt($url, $selector){
		$file_content = file_get_contents($url);
	 	$grab_data = phpQuery::newDocument($file_content);
		$data_content = $grab_data->find($selector);
	}

/* Mig */
	$urlMig = 'https://mig.kz/';
	$fileMig = file_get_contents($urlMig);
	 
	$docMig = phpQuery::newDocument($fileMig);
	$tblMigSellUSD = $docMig->find('div.informer > table tr:first-child td:eq(0)');
	$tblMigByuUSD = $docMig->find('div.informer table tr:first-child td:eq(2)');

	$tblMigSellEUR = $docMig->find('div.informer > table tr:nth-child(2) td:eq(0)');
	$tblMigByuEUR = $docMig->find('div.informer table tr:nth-child(2) td:eq(2)');

	$tblMigSellRUS = $docMig->find('div.informer > table tr:nth-child(3) td:eq(0)');
	$tblMigByuRUS = $docMig->find('div.informer table tr:nth-child(3) td:eq(2)');

	$tblMigKZ = $docMig->find('div.external-rates ul.clearfix li:first-child p');


/* Bitcoin */
	$urlBTC = 'https://pokur.su/btc/kzt/1/';
	$file = file_get_contents($urlBTC);
	 
	$doc = phpQuery::newDocument($file);
	$tbl = $doc->find('input.form-control');

/* Qazkom */
	$urlQzk = 'http://www.qazkom.kz/';
	$fileQzk = file_get_contents($urlQzk);
	 
	$docQzk = phpQuery::newDocument($fileQzk);
	$tblQzkSell = $docQzk->find('div#KAZKOM table tbody tr:nth-child(2) td:nth-child(2)');
	$tblQzkBuy = $docQzk->find('div#KAZKOM table tbody tr:nth-child(2) td:nth-child(3)');
	
/* Sberbank */
	$urlSbb = 'http://sberbank.kz/ru/individuals/rates/currencies?show=graded';
	$fileSbb = file_get_contents($urlSbb);
	 
	$docSbb = phpQuery::newDocument($fileSbb);
	$tblSbbByu = $docSbb->find('.quotes_oms_content .quotes_oms_extended_table:nth-child(2) tbody tr:first-child td:eq(1)');
	$tblSbbSell = $docSbb->find('.quotes_oms_content .quotes_oms_extended_table:nth-child(2) tbody tr:first-child td:eq(2)');

/* Halyk */
	$urlHalyk = 'https://kurs-valut.kz/bank/halykbank/karaganda';
	$fileHalyk = file_get_contents($urlHalyk);
	 
	$docHalyk = phpQuery::newDocument($fileHalyk);
	$tblHalykBuy = $docHalyk->find('.table tbody tr:first-child td:eq(3)');
	$tblHalykSell = $docHalyk->find('.table tbody tr:first-child td:eq(4)');
	
	
?>