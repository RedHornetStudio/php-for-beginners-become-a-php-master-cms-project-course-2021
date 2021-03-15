<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<?php

function func1() {
  echo 'Text from func1';
}

function func2() {
  echo 'Text from func2';
}

function callTwoFunction() {
  func1();
  echo '<br><br>';
  func2();
}

callTwoFunction();

?>

</body>
</html>