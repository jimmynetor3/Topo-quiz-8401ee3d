<?php 

$landen = array('japan' => 'tokyo' ,
                'mexico' => 'mexico city' ,
                'USA' => 'd.c',
 'India' => 'New Delhi',  
'Zuid-Korea' => 'Seoul',
'China' => 'Peking',
'Nigeria' => 'Abuja',
'Argentina' => 'Buenos Aires',
'Egypt' => 'Cairo',
'UK' => 'London',
'belgie' => 'Maar alee das bestaat toch nie.',
'drenthe' => 'Wil je niet schelden?',
 );
$score = array();

foreach ($landen as $land => $stad) {
$antwoord1 = readline('wat is de hoofdstad van ' . $land . PHP_EOL);

if ($antwoord1 == $stad) {
 echo "correct" . PHP_EOL;
 array_push($score, array('correct1'));
}else {
	echo "het correcte antwoord is ". $stad . PHP_EOL;
}

}
echo count($score) . ' ' . "van de 10 goed";


 ?>