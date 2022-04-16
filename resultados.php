<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm your register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="lg:text-2xl font-sans justify-center text-center">

<section class="lg:h-28 lg:pt-12 lg:pb-24 lg:max-w-none lg:justify-center bg-gray-600">

<p class="font-bold lg:text-3xl text-white">Confirm your register</p>

</section>

<section class="font-bold lg:mt-24 lg:pb-20">

<?php

if( empty($_POST["nombre1"] ) || empty( $_POST["nombre3"] ) || empty($_POST["calle1"] ) || empty($_POST["ciudad"] ) || empty($_POST["codigozip"] ) || empty($_POST["numero"] ) || empty($_POST["email"] ) || empty($_POST["phone"] ) || empty($_POST["citizen"] ) || empty($_POST["dualcitizen"] ) || empty($_POST["fechadenac"] ) || empty($_POST["enterprise"] ) || empty($_POST["ingresos"] ) || empty($_POST["housingpayment"] ) ) {
  echo "You must answer the mandatory questions (*)";
} else {
  echo "Welcome ".$_POST["nombre1"]."<br>";
  echo "Your email address is: ".$_POST["email"]."<br>";
  echo "Your date of birth is: ".$_POST["fechadenac"]."<br>";
  echo "Your primary phone number is: ".$_POST["numero"]."<br>";
  echo "Your city is: ".$_POST["ciudad"]."<br>";
  echo "Your state is: ".$_POST["estados"]."<br>";
  echo "Your ZIP code is: ".$_POST["codigozip"]."<br>";
  echo "We will take care of your application in just a few minutes"."<br>";
}
?>

</section>

<a href="./proyecto.php" class="lg:text-2xl text-red-700">Go Back</a>

</body>
</html>