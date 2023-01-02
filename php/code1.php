<?php

// $str="amandeep";

// $age=23;

// $height=5.13;

// echo "<h1>".$str."</h1>";
// echo "<h2>".$age."</h2>";
// echo "<h3>".$height."</h3>";

// $value=array("hp","dell","lenovo","asus");
// echo var_dump($value[1]);

//consonent example here:
// define("games","dragon ball z");
// echo games;

//consonent array:
// define("games",["dragon ball z","wwe smack down pain","god of war"]);
// echo games[1];


//if else condition

// $val=6;
// if($val %2==0 ){
//     echo "it is even: ".$val; 
// }else{
//     echo "it is odd number";
// }

//switch statement

// $fruite="banana";

// switch($fruite){
//     case "mango":
//         echo "your favourite is mango";
//     break;
//     case "banana":
//         echo "your favourite is banana";
//     break;
//     default:
//         echo "faukkt ka time ni h re baba";
// }

// while loop
// $val=2;
// while($val<=10){
//     echo "value is: ".$val."<br>";
//     $val++;
// }

// do while loop
// $val=11;
// do{
//     echo "value is: ".$val."<br>";
// }
// while($val<=10)

// for loop
function abc(){
for($val=1;$val<=10;$val++){
    echo "Number: ".$val."<br>";
}
}

abc();
echo "calling the function again";
abc();
?>
