<?php
#---pozivanje klase---#
$eng = new ng1np();
#---definisanje varijabli---#
$eng->charset = 'utf-8';
$eng->title = 'API';
$eng->sadrzaj = array( 
	array(
	"naslov" => "Default Naslov 1",
	"autor" => "Hightech",
	"tema" => "Tema",
	"tekst" => 'Tekst zadate teme hightech do 1000 karaktera'
	),
	array(
	"naslov" => "Default Naslov 2",
        "autor" => "Rootwalker",
        "tema" => "Tema",
        "tekst" => 'Tekst zadate teme rootwalker do 1000 karaktera'
	),
	array(
	"naslov" => "Default Naslov 3",
        "autor" => "Antistereotip",
        "tema" => "Tema",
        "tekst" => 'Tekst zadate teme antistereotip do 1000 karaktera'
	)
 );

#---pozivanje render metode---#
echo $eng->render('up/default.tpl');
