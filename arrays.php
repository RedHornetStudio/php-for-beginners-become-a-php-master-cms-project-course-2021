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

// old version how to asssign array
$numberList = array(25, 4, 3, '123', '<h1>Hello</h1>');
print_r($numberList);
echo '<br>';
echo '<br>';

// new version how to assign array
$numberList = [25, 4, 3, '123', '<h1>Hello</h1>'];
print_r($numberList);
echo '<br>';
echo '<br>';

echo $numberList[2];

?>

</body>
</html>