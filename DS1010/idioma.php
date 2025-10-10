<?php

function Mensagem($idioma)
{

    switch ($idioma) {

        case "es";
            echo "<script>
            alert(!Bienvenido!)
            </script>";
            break;

        case "en";
            echo "<script>
            alert(Welcome!)
            </script>";
            break;

        case "pt-br";
            echo "<script>
            alert(Bem-Vindo!)
            </script>";
            break;

    }

}


$idioma = "pt-br";

Mensagem($idioma);

?>