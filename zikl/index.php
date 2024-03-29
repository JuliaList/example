<?php
$person = ['name'=>'Victor',
    'age' => 20,
    'hobby' => 'swimming',
    'is_married' => false,
    'pet' => 'cat',
    'pet_name' => 'Barsik'];
$person2 = ['name'=>'Ivan',
    'age' => 30,
    'hobby'=>'box',
    'is_married'=> true,
    'pet'=>'dog',
    'pet_name'=>'Pshik'];
$person3 = ['name'=>'Oleg',
    'age' => 33,
    'hobby'=>'box',
    'is_married'=> true,
    'pet'=>'bird',
    'pet_name'=>'Axax'];
$person4 = ['name'=>'Moris',
    'age' => 56,
    'hobby'=>'dance',
    'is_married'=> true,
    'pet'=>'cat',
    'pet_name'=>'Lola'];
$person5 = ['name'=>'Karalona',
    'age' => 27,
    'hobby'=> 'hockey',
    'is_married'=> true,
    'pet'=> 'snake',
    'pet_name'=> 'Uragan'];
$person6 = ['name'=>'Paul',
    'age' => 30,
    'hobby'=>'socker',
    'is_married'=> false,
    'pet'=>'spider',
    'pet_name'=>'Jol'];
$person7 = ['name'=>'Polo',
    'age' => 20,
    'hobby'=>'dance',
    'is_married'=> true,
    'pet'=>'cat',
    'pet_name'=>'Lol'];
$person8 = ['name'=>'Olya',
    'age' => 32,
    'hobby'=>'dance',
    'is_married'=>false,
    'pet'=>'snake',
    'pet_name'=>'Rosa'];
/**
 * @param array $person
 * @param array $person2
 * @param array $person3
 * @param array $person4
 * @return array
 */
function extracted(array $person, array $person2, array $person3, array $person4)
{
    foreach ($person as $key => $item) {
        echo $key . ': ';
        echo $item . "\n";
    }
    foreach ($person2 as $key => $item) {
        echo $key . ': ';
        echo $item . "\n";
    }
    foreach ($person3 as $key => $item) {
        echo $key . ': ';
        echo $item . "\n";
    }
    foreach ($person4 as $key => $item) {
        echo $key . ': ';
        echo $item . "\n";
    }
    return array($key, $item);
}

list($key, $item) = extracted($person, $person2, $person3, $person4);
list($key, $item) = extracted($person5, $person6, $person7, $person8);