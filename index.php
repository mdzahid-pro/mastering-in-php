<?php

// if

//if(true | false) {
//    echo "condition passed!";
//}else {
//    echo "failed to passed!";
//}

// if operators
//$age = 18;
//
//if($age >= 18) {
//    echo "You're eligible!";
//    $nid = "Your nid has created!";
//}
//
//echo $nid;

// if else

//if($age >= 18) {
//    echo "You're eligible!";
//    $nid = "Your nid has created!";
//}else {
//    echo "You're not eligible!";
//    $nid = "Your nid hasn't created!";
//}


// shorter if else


//if(false):
//    echo "You have passed this condition.";
//endif;
//
//
//if(false):
//    echo "You have passed this condition.";
//else:
//    echo "You have not passed this condition.";
//endif;

// nested if else

//$age = 20;
//$gender = "female";
//$country = "bangladesh";
//$score = 50;
//
//echo "Your grade is: ";
//
//if($age > 18){
//    if($gender === "male"){
//        if($country === 'bangladesh'){
//           if($score >= 90){
//               echo "A";
//           } elseif ($score >= 80) {
//               echo "B";
//           }elseif ($score >= 70) {
//               echo "C";
//           }elseif ($score >= 60) {
//               echo "D";
//           }else{
//               echo "F";
//           }
//        }else{
//            echo "You're not bangladeshi.";
//        }
//    } else {
//       echo "You're not eligible for grade cause you're not a male.";
//    }
//}

// switch
$value = "male";

//switch($value){
//    case "female":
//    case "male":
//        echo "You're a human";
//    break;
//    case "apple":
//        echo "The fruit is an Apple";
//    break;
//    case "banana":
//        echo "The fruit is an banana.";
//    break;
//    case "orange":
//        echo "The fruit is an orange.";
//    break;
//    case "chicken":
//        echo "The fruit is a chicken.";
//    break;
//    default:
//        echo "Unknown";
//}

// match
$match = match ($value){
    "female", "male" => human(),
    "apple" => "Apple",
    "banana" => "Banana",
    "orange" => "Orange",
    "chicken" => "Chicken",
    default => "Unknown",
};

echo $match;

function human(){
    return "You're a human";
}