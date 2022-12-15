<form method="post">
<P>getal 1<input type="number" name="getal1" value="2"></P><br>
<br><input type="radio" name="rekenen" value="optellen">optellen
<input type="radio" name="rekenen" value="aftrekken">aftrekken
<input type="radio" name="rekenen" value="vermenigvuldigen">Vermenigvuldigen
<input type="radio" name="rekenen" value="delen">Delen<br><br>
<P>getal 2<input type="number" name="getal2" value="2"></P><br>
<br><input type="submit" name="Berekenen" value="Berekenen">

</form>
<?php

if(isset($_POST['rekenen'])){
  
    $waarde = $_POST['rekenen'];
    $getal1 = $_POST['getal1'];
    $getal2 = $_POST['getal2'];


    if($waarde == "optellen"){
        $som = $getal1 + $getal2;
        echo  "$getal1 + $getal2 = $som";

    } 
    else if($waarde == "aftrekken"){
        $som = $getal1 - $getal2;
        echo  "$getal1 - $getal2 = $som";
    
    } else if($waarde == "vermenigvuldigen"){
        $som = $getal1 * $getal2;
        echo  "$getal1 x $getal2 = $som";
    
    } else if($waarde == "delen"){
        $som = $getal1 / $getal2;
        echo  "$getal1 : $getal2 = $som";
    }
}
?>
