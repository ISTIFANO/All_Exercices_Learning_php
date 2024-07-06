<?php
    // if($_SERVER["REQUEST-METHOD"]=='POST'){
        if(isset($_POST["NV"],$_POST["NP"],$_POST["NA"],$_POST["VD"],$_POST["VA"],$_POST["HD"],$_POST["HA"])){
            $NV=filter_var($_POST["NV"], FILTER_VALIDATE_INT);
            $NP=filter_var($_POST["NP"], FILTER_VALIDATE_INT);
            $NA=filter_var($_POST["NA"], FILTER_VALIDATE_INT);
            if($NV&&$NP&&$NA&&preg_match('/^[a-zA-Z]+$/',$_POST["VD"])&&preg_match('/^[a-zA-Z]+$/',$_POST["VA"])){
                $VD=$_POST["VD"];
                $VA=$_POST["VA"];
                $HD=$_POST["HD"];
                $HA=$_POST["HA"];
                $HD=str_replace("T"," ",$HD);
                $HA=str_replace("T"," ",$HA);
                $HD=$HD.":00";
                $HA=$HA.":00";
                $D1=new DateTime($HD);
                $D2=new DateTime($HA);
                if($D2 > $D1){
                    header("location:http://localhost/OOO/BD/traitement.php?NV=$NV&NP=$NP&NA=$NA&VD=$VD&VA=$VA&HD=$HD&HA=$HA");    
                }
            }
            
            
        }
    // }


?>