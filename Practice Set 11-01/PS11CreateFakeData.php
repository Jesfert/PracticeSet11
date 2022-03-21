<?php

require('vendor/autoload.php');
$faker = Faker\Factory::create();
$conn = mysqli_connect("localhost","root","","practiceset11");

if(!$conn)
{   
die(mysqli_error());
}  

for ($i=0; $i <= 99; $i++){   
$sql = "INSERT INTO practiceset11.userAccount(email, lastName, firstName, userName, password) values('".$faker->email."','".$faker->lastName."', '".$faker->firstName."', '".$faker->userName."', '".$faker->password."')";     

mysqli_query($conn, $sql);
}

?>