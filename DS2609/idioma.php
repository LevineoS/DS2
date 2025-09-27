<?php

$idioma = "pt-br";

if ($idioma == "en") {
    echo "Welcome!";
} elseif ($idioma == "es") {
    echo "!Bienvenido!";
} else {
    echo "Bem-vindo!";
}

//Em outro lugar, com outro idioma
$idioma2 = "es";

if ($idioma2 == "en") {
    echo "Welcome!";
} elseif ($idioma2 == "es") {
    echo "!Bienvenido!";
} else {
    echo "Bem-vindo!";
}

?>

<?php

function Idiomas($idioma = "en" || $idioma = "es" || $idioma = "pt-br"){

    return $idioma;

} 



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Idioma </title>
</head>
<body>
    
    <div class="campos">

    <div>

        <label>Idioma:</label><br>
        <input type="text" placeholder="Informe seu idioma" name="idioma"><br>
        
      </div>

    </div>


</body>
</html>