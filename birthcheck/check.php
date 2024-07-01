<?php

$birth = $_POST['birth'];
$date = substr($_POST['birth'],8, 2 );
$month = substr($_POST['birth'],5, 2 );
$year = substr($_POST['birth'],0, 4 );
$today = date('d.m.Y');
echo $today;
echo "<br>";
// echo $birth, date('Y');
echo "<br>";
echo $date, date('d');
echo "<br>";
echo $month, date('m');
echo "<br>";
echo $year, date('Y');

echo "<hr>";
echo time();
echo "<hr>";

echo date('d')-$date;
echo "<br>";
echo date('m')-$month;
echo "<br>";
echo date('Y')-$year;


$originalTime = new DateTimeImmutable("$year-$month-$date");
$targedTime = new DateTimeImmutable( date('Y-m-d'));
$interval = $originalTime->diff($targedTime);
echo $interval->format("%H:%I:%S (Полных дней: %a)"), "\n";



try{
    if($year > date('Y')){
        throw new Exception("");
    }
}catch(Exception $e){
    echo $e->getMessage();
    die();
}

?>