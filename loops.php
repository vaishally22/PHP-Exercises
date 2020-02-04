<?php
/*
+---+
| 1 |
+---+
Use while-loop to print the numbers 1 to 10.
*/
	$number = 1;

	while ($number <= 10) {
		echo "$number ";
		$number++;
	}
	;

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Use the PHP function range(start, end, step) 
to create array of numbers 5 to 100 with the step 5 
(example: 5, 10, 15, ...)
*/

	$Fifth = range(5,100,5);

	print_r($Fifth);

	echo "<br>";
/*
Use for-loop and if-statement to print all odd numbers.
How to check if a number is odd or even? 
Divide it by 2, and if there is a remainder, the number is odd. 
Use modulus operator (outputs the remainder after division), 
for example: 
1 % 2 = 1 -> odd number
2 % 2 = 0 -> even number
3 % 2 = 1 -> odd number
4 % 2 = 0 -> even number
*/

	 $even= "";
	 $odd= "";

	for ($Fifth = 0; $Fifth <= 100; $Fifth += 5) {
	    if ($Fifth%2==0) {
	    $even.=$Fifth."  ";
	    } else {
	    $odd.=$Fifth." "; 
		}
	}

echo "$odd";

// for ($byFives=0; $byFives < ; $byFives++) { 
// };

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

	$favFood = array('burger','samosa','donut','manchurian');

	print_r($favFood);

	echo "<br><br>";

/*
Use while-loop to print array elements (every food in a new row).
*/
	$a = 0;

	while ($a === 0) {
		echo "$favFood[0]"."<br>";
		$a ++;
		echo "$favFood[1]"."<br>";
		$a ++;
		echo "$favFood[2]"."<br>";
		$a ++;
		echo "$favFood[3]"."<br>";
		$a ++;
	}
	echo "<br>";

/*
Use for-loop to print array elements (every food in a new row).
*/

	for ($a = 0; $a <= 3; $a ++) { 
		if ($a === 0) {

			echo "$favFood[0]"."<br>";

		} else if ($a === 1) {

			echo "$favFood[1]"."<br>";

		} else if ($a === 2) {

			echo "$favFood[2]"."<br>";

		} else {

			echo "$favFood[3]"."<br>";
		}
	}
	echo "<br>";

/*
Use foreach-loop to print array elements (every food in a new row).
*/

	foreach ($favFood as $b) {

		echo "$b <br>";
	}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Print the array from task 3 as unordered list. Printing has to be done inside the for-loop.
Before looping, you need to print the opening list-tag <ul>
After looping, you need to print the closing list-tag </ul>
*/
	$c = 0;

	echo "<ul>";

	for ($c = 0; $c <= 3; $c ++) { 

		if ($c === 0) {

			echo "<li>$favFood[0]</li>";

		} else if ($c === 1) {

			echo "<li>$favFood[1]</li>";

		} else if ($c === 2) {

			echo "<li>$favFood[2]</li>";

		} else {

			echo "<li>$favFood[3]</li>";
		}
	}
	echo "</ul>";

	// task separator
	echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
The array from task 3 is turned into associative array. 
The meal courses are broken down based on the type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
$food_assoc = [
  "pizza" => [
    "type" => "main course",
    "origin" => "Italy"
  ],
  "cheesesake" => [
    "type" => "desert",
    "origin" => "Greece"
  ]
]
So, food_assoc is an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin.
*/

	$food_assoc = [

		"burger" => [
	    	"type" => "fast food",
	    	"origin" => "Italy"
	  	],

	  	"samosa" => [
	    	"type" => "snack",
	    	"origin" => "India"
	  	],

	  	"donut" => [
	  		"type" => "desert",
	    	"origin" => "Greece"
	  	], 

	  	"manchurian" => [
	  		"type" => "snack",
	    	"origin" => "China"
	  	]
	];

/*
Loop through $food_assoc and use print_r() to print the entire meal course 
(entire array that includes type and origin).
*/

print_r($food_assoc);

/*
Loop through $food_assoc and print the meal names (keys of $food_assoc)
as unordered list-items. Loop through the current meal (inner loop through sub-array) 
and print the type and origin as nested list items (see the example below).
*/

	echo "<br><br> My favorite meals: 

	<ul>";

	foreach ($food_assoc as $a => $a_val) {

	    echo "<li>" . $a . "</li>
	    <ul>" . "<li>" . $a_val['type'] . "</li>
	    <li>" . $a_val['origin'] . "</li>
	    </ul>";
	}
	
	echo "</ul>";

// The final printing should look like this:
// My favourite meals

//     pizza
//         type: main course
//         origin: Italy
//     cheesesake
//         type: desert
//         origin: Greece
?>