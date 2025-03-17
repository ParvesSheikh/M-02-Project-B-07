<?php


$questions = [
    ["question" => "What is 2+2 ?", "correct" => "4"],
    ["question" => "What is 20*2 ?", "correct" => "40"],
    ["question" => "What is 20/2 ?", "correct" => "10"]
] ;

$answer = [] ;
foreach($questions as $index => $item){
    echo $index+1 .". ".$item['question'].PHP_EOL ;
    $answer[] = trim((string)readline("Your answer : ")) ;
}

function quiz($questions,$answer){
    $score = 0 ;
    foreach($questions as $index => $item){
        if($answer[$index] === $item['correct']){
            $score++ ;
        }
    }
    return $score ;
}
$score = quiz($questions,$answer) ;
echo "You scored {$score} out of ". count($questions). "."."\n" ;

if($score === count($questions)){
    echo "Excellent Job\n" ;
}elseif($score >= 1){
    echo "Good Perform\n" ;
}else{
    echo "Better luck next time\n" ;
}


