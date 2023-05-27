<?php 
require ("functions.php");
    $tittle = "Home";
    $students = [
        [
            "nama" => "Ryan Hidayat",
            "npm" => "223040173",
            "email" => "ryan.223040173@mail.unpas.ac.id"
        ],

        [
            "nama" => "Dicky",
            "npm" => "223040150",
            "email" => "dicky.223040150@mail.unpas.ac.id"
        ]
    ];

require ("views/index.view.php");