<form method="post">
<input type="radio" name="kleur" value="rood">Rood
<input type="radio" name="kleur" value="groen">Groen
<input type="radio" name="kleur" value="blauw">Blauw
<input type="radio" name="kleur" value="roze">Roze
<br><br><input type="submit" name="instellen" value="Instellen">
</form>

<style type="text/css">
    body{
        background-color:red;
    }
 
</style>
<?php

if(isset($_POST['kleur'])) {
    $kleur = $_POST['kleur'];

    if($kleur == "rood"){
        echo "<style>body{background-color: red;}</style>";
   
    }else if($kleur == "groen"){
        echo "<style>body{background-color: green;}</style>";

    }else if($kleur == "blauw"){
        echo "<style>body{background-color: blue;}</style>";

    }else if($kleur == "roze"){
        echo "<style>body{background-color: pink;}</style>";

    }

}

?>
