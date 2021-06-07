<?php
#---pozivanje klase---#
$eng = new ng1np();
#---varijable---#
$eng->charset = 'UTF-8';
$eng->keywords = 'api, api page, page';
$eng->author = 'hightech';
$eng->description = 'Short description of api page';
$eng->title = 'API';
$eng->sadrzaj = array( 
	array(
	"naslov" => "Api 1",
	"autor" => "Smurf",
	"tema" => "Tema",
	"tekst" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
                    been the industry's standard dummy text ever since the 1500s, when an unknown printer took 
                    a galley of type and scrambled it to make a type specimen book. It has survived not only 
                    five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
	),
	array(
	"naslov" => "Api 2",
        "autor" => "Att4ck",
        "tema" => "Tema",
        "tekst" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
                    been the industry's standard dummy text ever since the 1500s, when an unknown printer took 
                    a galley of type and scrambled it to make a type specimen book. It has survived not only 
                    five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
	),
	array(
	"naslov" => "Api 3",
        "autor" => "AS6",
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
        "naslov" => "Sidebar RW 1",
        "autor" => "Hightech",
        "link" => "https://hightechangel.wordpress.com"
        ),
        array(
        "naslov" => "Sidebar RW 2",
        "autor" => "Rootwalker",
        "link" => "https://seeux.wordpress.com"
        )
);


#---render metoda---#
echo $eng->render('up/api.tpl');

