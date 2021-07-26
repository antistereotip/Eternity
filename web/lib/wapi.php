<?php
#---pozivanje klase---#
$eng = new ng1np();
#---varijable---#
$eng->charset = 'UTF-8';
$eng->keywords = 'wapi, wapi page, page';
$eng->author = 'hightech';
$eng->description = 'Short description of wapi page';
$eng->title = 'WAPI';
$eng->sadrzaj = array( 
	array(
	"naslov" => "Wapi 1",
	"autor" => "Root",
	"tema" => "Tema",
	"tekst" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
                    been the industry's standard dummy text ever since the 1500s, when an unknown printer took 
                    a galley of type and scrambled it to make a type specimen book. It has survived not only 
                    five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
	),
	array(
	"naslov" => "Wapi 2",
        "autor" => "Avalon",
        "tema" => "Tema",
        "tekst" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
                    been the industry's standard dummy text ever since the 1500s, when an unknown printer took 
                    a galley of type and scrambled it to make a type specimen book. It has survived not only 
                    five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
	),
	array(
	"naslov" => "Wapi 3",
        "autor" => "Seeux",
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
        "naslov" => "Sidebar AS 1",
        "autor" => "Hightech",
        "link" => "https://antistereotip.github.io/ng1np.html"
        ),
        array(
        "naslov" => "Sidebar AS 2",
        "autor" => "Rootwalker",
        "link" => "https://antistereotip.github.io"
        )
);

#---render metoda---#
echo $eng->render('up/wapi.tpl');

