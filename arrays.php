<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
$food =["Samosa", " Waffles", "Pizza", "Poutine"];
/*
Print every array element in a new line.
*/

  echo $food[0] . "<br>";
  echo $food[1] . "<br>";
  echo $food[2] . "<br>";
  echo $food[3] . "<br>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/
echo "<ul>
    <li>$food[0]</li>
    <li>$food[1]</li>
    <li>$food[2]</li>
    <li>$food[3]</li>

</ul>";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

$food_assoc = [
    "Samosa" => "Snacks",
    "Waffles" => "Deserts",
    "Pizza"=> "mainCourse",
    "Poutine"=> "Snacks"
 ];


echo $food[0] . " | " . $food_assoc["Samosa"] . "<br>" 
 . $food[1] . " | " . $food_assoc["Waffles"] . "<br>"
 . $food[2] . " | " . $food_assoc["Pizza"] . "<br>"
 . $food[3] . " | " . $food_assoc["Poutine"] . "<br>";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

$food_assoc = [
  "Samosa" => ["type" => "Snacks",
    "origin" => "India"],

 "Waffles" => ["type" => "Deserts",
               "origin" => "Mexico" ],

  "Pizza"=> ["type" => "MainCourse",
            "origin"  => "Italy"],

   "Poutine"=>["type" => "Snacks",
              "origin" => "Canada"]
            ];


echo $food[0]
 . " | " 
 .$food_assoc["Samosa"]["type"]
 . " | " 
 .$food_assoc["Samosa"]["origin"]
 . "<br>" 
 . $food[1]
 . " | " 
 .$food_assoc["Waffles"]["type"]
 . " | " 
 .$food_assoc["Waffles"]["origin"]
  . "<br>" 
 . $food[2]
 . " | " 
 .$food_assoc["Pizza"]["type"]
 . " | " 
 .$food_assoc["Pizza"]["origin"]
  . "<br>" 
 . $food[3]
 . " | "
 .$food_assoc["Poutine"]["type"]
 . " | " 
 .$food_assoc["Poutine"]["origin"]
  ; 


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/

echo
"<table>
  <tr>
    <th>".$food[0]."</th>
    <th>".$food_assoc["Samosa"]["type"]."</th>
    <th>".$food_assoc["Samosa"]["origin"]."</th>
  </tr>

  <tr>
    <th>".$food[1]."</th>
    <th>".$food_assoc["Waffles"]["type"]."</th>
    <th>".$food_assoc["Waffles"]["origin"]."</th>
  </tr>

  <tr>
    <th>".$food[2]."</th>
    <th>".$food_assoc["Pizza"]["type"]."</th>
    <th>".$food_assoc["Pizza"]["origin"]."</th>
  </tr>
  
  <tr>
    <th>".$food[3]."</th>
    <th>".$food_assoc["Poutine"]["type"]."</th>
    <th>".$food_assoc["Poutine"]["origin"]."</th>
  </tr>
</table>"
?>