<?php
    
    $use=$_POST["cusu"];
    $psw=$_POST["cpas"];

    if($use=="Ruben" and $psw=="1234"){ 
        
        header("Location:16-Ruben.php?vrub=si");
        
    }else if ($use=="Amaia" and $psw=="1212"){
        
        header("Location:16-Amaia.php?vama=si");
        
    }else{

        header("Location:16-form.php?ventrada=no");
    }

    
?>