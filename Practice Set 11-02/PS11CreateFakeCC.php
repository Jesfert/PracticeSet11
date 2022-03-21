<?php

require('vendor/autoload.php');
$faker = Faker\Factory::create();
$conn = mysqli_connect("localhost","root","","practiceset11");

if(!$conn)
{   
die(mysqli_error());
}  

for ($i=0; $i <= 20; $i++){   
$sql = "INSERT INTO practiceset11.creditcard(creditCardType, creditCardNumber, creditCardExpirationDate, userIdNumber) values('".$faker->creditCardType."','".$faker->creditCardNumber."', '".$faker->creditCardExpirationDate."', '".$faker->idNumber."')";     

mysqli_query($conn, $sql);
}

?>