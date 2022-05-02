<?php
	function veriTabaninaBaglan($veriTabani){
		$db=new mysqli("localhost","root","",$veriTabani);
	 	$db->set_charset("utf8");
	 	return $db;
	}

	function tekliIcerikAl($anaBolumIndex){
		$db=veriTabaninaBaglan("odev");
		$sorgu="select icerik,linkId from icerikler where anaBolumIndex=$anaBolumIndex";
	 	$sonuc=$db->query($sorgu);
	 	$kayit=$sonuc->fetch_assoc();
	 	return $kayit["icerik"];
	}

	function cokluIcerikAl($anaBolumIndex){
		$db=veriTabaninaBaglan("odev");
		$sorgu="select icerik,linkId from icerikler where anaBolumIndex=$anaBolumIndex";
	 	$sonuc=$db->query($sorgu);
	 	return $sonuc;
	}

	function linkAl($linkId){
		$db=veriTabaninaBaglan("odev");
		$sorgu="select linkler.sayfa from linkler where linkler.linkId=$linkId";
	 	$sonuc=$db->query($sorgu);
	 	$kayit=$sonuc->fetch_assoc();
	 	return $kayit["sayfa"];
	}
?>