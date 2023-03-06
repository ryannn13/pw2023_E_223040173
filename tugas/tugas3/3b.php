<?php 

    function urutanAngka($angka){
        $a=1;
        for ($x=1; $x <= $angka ; $x++) { 
            for ($z=1; $z <= $x ; $z++) { 
                echo $a ." ";
                $a++;
            }
            echo "<br>";
        }
    }
    echo urutanAngka(5);
?>