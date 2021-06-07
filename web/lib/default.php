<?php
#---pozivanje klase---#
$eng = new ng1np();

#---varijable---#
$eng->charset = 'UTF-8';
$eng->keywords = 'default, default page, page';
$eng->author = 'hightech';
$eng->description = 'Short description of default page';
$eng->title = 'Default';

$eng->sadrzaj = array( 
	array(
	"naslov" => "Default 1",
	"autor" => "Hightech",
	"tema" => "Tema",
	"tekst" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
		    been the industry's standard dummy text ever since the 1500s, when an unknown printer took 
		    a galley of type and scrambled it to make a type specimen book. It has survived not only 
		    five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
		    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
		    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
	),
	array(
	"naslov" => "Default 2",
        "autor" => "Rootwalker",
        "tema" => "Tema",
        "tekst" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
                    been the industry's standard dummy text ever since the 1500s, when an unknown printer took 
                    a galley of type and scrambled it to make a type specimen book. It has survived not only 
                    five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
	),
	array(
	"naslov" => "Default 3",
        "autor" => "Antistereotip",
        "tema" => "Tema",
        "tekst" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
                    been the industry's standard dummy text ever since the 1500s, when an unknown printer took 
                    a galley of type and scrambled it to make a type specimen book. It has survived not only 
                    five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
	)
);

$eng->strana = array( 
        array(
        "naslov" => "Sidebar HT",
        "autor" => "Hightech",
        "link" => "https://antistereotip.net"
        ),
        array(
        "naslov" => "Sidebar HT 2",
        "autor" => "Rootwalker",
        "link" => "https://usk.rs"
        )
);




#---metoda render---#
echo $eng->render('up/default.tpl');

