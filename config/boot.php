<?php
//DATABASE CONFIGURATIONS (change to the correct values)
define("DB_SERVER", 'localhost');
define("DB_USERNAME", 'root');
define("DB_PASS", ''); 
define("DB_DBASE", 'university');

//-----------DO NOT CHANGE ------------------------

//SERVER CONFIGURATIONS (It is not recommended change this values)
define("BASE_PATH",'localhost');
define("BASE_MODELS",'/Modelos');
define("BASE_CONTROLLERS",'/controladores');
define("BASE_VIEWS",'/Vistas');
define("BASE_CLASSES",'/clases');
define("BASE_CONFIG",'/config');
define("BASE_LIBS",'/public/Lib');


//load the folders
$folders = [BASE_CLASSES , BASE_MODELS, BASE_CONTROLLERS,BASE_LIBS];
foreach ($folders as $folder) {   
    
    foreach (glob(".{$folder}/*.php") as $file) {
        require  $file;
    }    
}


 