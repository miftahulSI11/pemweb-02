<?php
// Array index
$animals = ['Kambing', 'Kucing', 'Ayam'];

// akses array
foreach($animals as $animal){
    echo $animal. '<br>';
}

// array assosiatif
$student = [
    'name' => 'Miftahul',
    'major' => 'informatics',
    'age' => 20
];

echo $student['name'];