<?php
for($i=1; $i<=5; $i++){
    echo"Start<br>";

}
for($i=1; $i<=10; $i++){
    echo $i."<br>";
}

for($i=1;$i<=5;$i++){
    echo str_repeat("*",$i).'</br>';

}
for($i=5;$i>=1;$i--){
    echo str_repeat("*",$i).'</br>';

}
$number=5;
for($i=1; $i<=10; $i++){
    $result=$number*$i;
    echo "$number*$i=$result"."<br>";

}

$saving=[1000,3000,6000];
$array=[];
$sum=0;
for($i=0;$i<=count($saving);$i++){
    $sum=$saving[$i]+$sum;
    echo $sum."<br>";
    array_push($array,$sum);
}
print_r($array);

$value=7;
$factorial=1;
for($i=7; $i>=1; $i--){
    $factorial *= $i;

}
echo $factorial."<br>";

for($i=2; $i<=5; $i++){
    for($time=1; $time<=10; $time++){
        $result=$i*$time;
        echo "$i*$time=$result <br>";

    }
    echo "Break<br>";

}

$i=1;
while($i<6){
    echo $i."<br>";
    $i++;

}
$i=1;
do{
    echo $i."<br>";
    $i++;

}while($i<10);

$cars=[
    'Audi',
    'Nissan',
    'BMW'
];
echo"<ul>";
foreach($cars as $car){
    echo "<li>$car</li>"."<br>";
 
}
echo "</ul>";

$routers=[
    [
        'name'=> 'Tp Link',
        'Address'=>'192.168.0.1',
        'Quality'=>'Best',

    ],
    [
        'name'=> 'Tenda',
        'Address'=>'192.168.100.110',
        'Quality'=>'Good',

    ],
    [
        'name'=> 'DLink',
        'Address'=>'192.168.0.1',
        'Quality'=>'Better',

    ],

];

foreach($routers as $router){
    echo $router['name']."<br>";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

  <div class="col-3 mx-auto mt-5">
    <form>
        <label class="w-100">
        Email Address
         <input type="text" class="form-control">
        </label>
        <label class="w-100">
        Password
         <input type="text" class="form-control">
        </label>
        <button class="btn btn-primary mt-2">Log in</button>

    </form>


  </div>

</body>
</html>