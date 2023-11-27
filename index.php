<?php 
// $name = "nikki";
// $income = 200;
// echo "this is $name and her income is $income";


//   $arr = array("nikki" , "hello" , "neha" , "arjun");
//   foreach($arr as $value){
//     echo "$value <br>";
//   }
// function process($marks){
//     $sum = 0;
//     foreach($marks as $value){
//         $sum += $value;
//     }
//     return $sum;
// }

// $arr =  [78 , 33, 99 ,33];
// $summarks = process($arr);
// echo "total marks is : $summarks";

// $d = date(" d S F Y g:i A");
// echo " <br> $d <br>";


// echo date(' <br> l jS \of F Y h:i:s A <br>');

// // Prints: July 1, 2000 is on a Saturday
// echo "<br> July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

// $year = date("Y");
// echo "<br> copyright $year | all reserbveds "
// $color = array(
//     'nikki' => 'red', 
//     'rohan' => 'greeen',
//     'neha' => 'blue',
//     8 => 'this'
// );
// // echo $color[8];
// // echo "<br>";
// // echo $color['rohan'];
// foreach($color as $key => $value){
//     echo "<br> fav color of $key is $value";
// }

// foreach($color as $value){
//     echo "<br> vlaue is $value";
// }



// $mul = array(
//      array(2,9,4,3),
//      array(8 ,9 , 3 , 2),
//      array(4, 3 ,2, 9)
// );

// //echo var_dump($mul);

// for($i = 0 ; $i < count($mul); $i++){
//    for($j=0 ; $j < count($mul[$i]);$j++){
//     echo $mul[$i][$j];
//     echo " ";
//    }
//    echo "<br>";
// }

$a = 99;
function printnum(){
    global $a;
    $a = 100;
    echo " the vlaue of a is :$a";
}



echo "$a";
printnum();
echo var_dump($GLOBALS["a"]);


?>