<form method="post">
Bedrag excuslief BTW <input type="text" name="amount" value="100"><br>
<br>
<input type="radio" name="btw" value="9">9% <br>
<input type="radio" name="btw" value="21">21% <br>
<input type="radio" name="btw" value="31">31% <br>

<br>
<p><input type="submit" name="omzetten" value="omzetten"></p>
</form>

<?php


if(isset($_POST) and isset($_POST['btw'])){

    $btw = $_POST['btw'];
    $bedrag = $_POST['amount'];
    $som = (($bedrag /100) * $btw )  + $bedrag;

    echo "Bedrag inclusief ". $btw ."% BTW : &euro; " . $som;
    
}

?>