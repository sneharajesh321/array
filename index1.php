<?php
 $names = ['Aravinth','Santoshi','Mani','Ravi']; // normal Array

//  $cars = array(
//    [
//     'name' => 'BMW',
//     'color' => 'red'
//    ],
//    [
//        'name' => 'AUDI',
//        'color' => 'pink'
//    ],
//    [
//     'name' => 'BENZ',
//     'color' => 'blue'
// ]
//  );

   for($i=0; $i<count($names); $i++){
        echo '<p>'.$names[$i].'</p>';
   }

// foreach($names as $name){
//     echo '<p>'.$name.'</p>';
// }

// foreach($cars as $car) {
//     echo '<p style="color:'.$car["color"].'">'.$car['name'].'</p>';
// //    if($car['color'] == 'pink'){
// //         echo '<p style="color:'.$car["color"].'">'.$car['name'].'</p>';
// //    } else {
// //     echo '<p>'.$car['name'].'</p>';
// //    }
// }


// $today = 6;

// if($today != 6) {
//     echo 'today is set...';
// } else {
//     echo 'not woking...';
// }


// function Percent($a,$b){
//     return ($a + $b) / 5;
// }

// echo Percent(50,40)."</br>";
// echo Percent(5,45);

// $name = '';

// if(empty($name)){
//     echo 'is empty';
// } else {
//     echo 'not set name';
// }

?>
