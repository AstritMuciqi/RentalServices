<?php
include_once "DbConfig.php";
include_once "Crud.php";

$data_array = [
    'car_start' => "2005-11-03",
    'car_end' => "2005-11-04",
    'car_name' => 'bmw',
];

$crud = new Crud();

// $crud->create($data_array, 'cars');
// // getdbconnection();
// $results = $crud->read('SELECT * FROM cars ');
// var_dump($results);
// $crud->update('UPDATE cars SET car_name = "AUDI" WHERE car_id = 8 ');
   $crud->delete('DELETE from cars where car_id = 8');

?>