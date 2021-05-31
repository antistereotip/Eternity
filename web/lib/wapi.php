<?php

$eng = new ng1np();
$eng->charset = 'utf-8';
$eng->title = 'API';
$eng->sadrzaj = array( 
	array(
	"naslov" => "Wapi Naslov 1",
	"autor" => "Hightech",
	"tema" => "Tema",
	"tekst" => 'Tekst zadate teme hightech do 1000 karaktera'
	),
	array(
	"naslov" => "Wapi Naslov 2",
        "autor" => "Rootwalker",
        "tema" => "Tema",
        "tekst" => 'Tekst zadate teme rootwalker do 1000 karaktera'
	),
	array(
	"naslov" => "Wapi Naslov 3",
        "autor" => "Antistereotip",
        "tema" => "Tema",
        "tekst" => 'Tekst zadate teme antistereotip do 1000 karaktera'
	)
 );

echo $eng->render('up/wapi.tpl');

