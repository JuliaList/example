<?php
$person = ['name'=>'Victor',
    'age' =>20,
    'hobby'=>'swimming',
    'is_married'=>false,
    'pet'=>'cat',
    'pet_name'=>'Barsik'];
$person2 = ['name'=>'Ivan',
    'age' =>30,
    'hobby'=>'box',
    'is_married'=>true,
    'pet'=>'dog',
    'pet_name'=>'Pshik'];
$person3 = ['name'=>'Oleg',
    'age' =>33,
    'hobby'=>'box',
    'is_married'=>true,
    'pet'=>'bird',
    'pet_name'=>'Axax'];
$person4 = ['name'=>'Moris',
    'age' =>56,
    'hobby'=>'dance',
    'is_married'=>true,
    'pet'=>'cat',
    'pet_name'=>'Lola'];
$person5 = ['name'=>'Karalona',
    'age' =>27,
    'hobby'=>'hockey',
    'is_married'=>true,
    'pet'=>'snake',
    'pet_name'=>'Uragan'];
$person6 = ['name'=>'Paul',
    'age' =>30,
    'hobby'=>'socker',
    'is_married'=>false,
    'pet'=>'spider',
    'pet_name'=>'Jol'];
$person7 = ['name'=>'Polo',
    'age' =>20,
    'hobby'=>'dance',
    'is_married'=>true,
    'pet'=>'cat',
    'pet_name'=>'Lol'];
$person8 = ['name'=>'Olya',
    'age' =>32,
    'hobby'=>'dance',
    'is_married'=>false,
    'pet'=>'snake',
    'pet_name'=>'Rosa'];
$persons = [['name'=>'Victor',
    'age' =>20,
    'hobby'=>'swimming',
    'is_married'=>false,
    'pet'=>'cat',
    'pet_name'=>'Barsik',
    'cars' => ['Volga', 'Vw']],
    ['name'=>'Ivan',
    'age' =>30,
    'hobby'=>'box',
    'is_married'=>true,
    'pet'=>'dog',
    'pet_name'=>'Pshik'],
    ['name'=>'Oleg',
    'age' =>33,
    'hobby'=>'box',
    'is_married'=>true,
    'pet'=>'bird',
    'pet_name'=>'Axax'],
    ['name'=>'Moris',
    'age' =>56,
    'hobby'=>'dance',
    'is_married'=>true,
    'pet'=>'cat',
    'pet_name'=>'Lola'],
    ['name'=>'Karalona',
    'age' =>27,
    'hobby'=>'hockey',
    'is_married'=>true,
    'pet'=>'snake',
    'pet_name'=>'Uragan'],
    ['name'=>'Paul',
        'age' =>30,
        'hobby'=>'socker',
        'is_married'=>false,
        'pet'=>'spider',
        'pet_name'=>'Jol'],
    ['name'=>'Polo',
        'age' =>20,
        'hobby'=>'dance',
        'is_married'=>true,
        'pet'=>'cat',
        'pet_name'=>'Lol'],
    ['name'=>'Olya',
        'age' =>32,
        'hobby'=>'dance',
        'is_married'=>false,
        'pet'=>'snake',
        'pet_name'=>'Rosa']
];
foreach ($persons as $person) {
    echo print_r ($person['name'], true);

}

