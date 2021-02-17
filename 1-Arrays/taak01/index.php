<!DOCTYPE html>
<html>
<body>
    

    <?php

    $student1 = array(
        "voornaam" =>"Piet",
        "achternaam" =>"Janssen",
        "leeftijd" =>"16",
        "klas" =>"9A"
    );
    $student2 = array(
        "voornaam" =>"Els",
        "achternaam" =>"Gees",
        "leeftijd" =>"17",
        "klas" =>"9B"
    );
    $student3 = array(
        "voornaam" =>"Peter",
        "achternaam" =>"Visser",
        "leeftijd" =>"18",
        "klas" =>"9C"
    );

    echo "deze student heet ". $student1["voornaam"]." ". $student1["achternaam"]. " en is ". $student1["leeftijd"]. " jaar ". " en zit in klas ". $student1["klas"];



?>
</body>
</html>