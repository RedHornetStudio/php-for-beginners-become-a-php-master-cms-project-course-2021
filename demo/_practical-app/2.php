<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		


		<?php

		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		Step 2: Add the two variables and display the sum with echo:


		Step3: Make 2 Arrays with the same values, one regular and the other associative

		Step4: Make a constant and set it to the value of PHP. and use an echo to print it out */

    $number1 = 10;
    $number2 = 20;
    echo $number1 + $number2;
    echo '<br>';
    echo '<br>';

    $numbers = [10, 20, 30, 40];
    $numbersAssoc = ['first_number' => 10, 'second_number' => 20, 'third_number' => 30, 'fourth_number' => 40];
    print_r($numbers);
    echo '<br>';
    print_r($numbersAssoc);
    echo '<br>';

    define('MY_CONSTANT', 'PHP');
    echo MY_CONSTANT;

		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>