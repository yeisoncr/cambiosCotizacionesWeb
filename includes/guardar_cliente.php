<?php
if (
    empty($_POST["razonSocial"])
    ||

    empty($_POST["telefono"])
    ||

    empty($_POST["email"])
    ||
    


    empty($_POST["tokenCSRF"])
) {
    exit;
}

Utiles::salirSiTokenCSRFNoCoincide($_POST["tokenCSRF"]);
Clientes::nuevo($_POST["razonSocial"], $_POST["telefono"], $_POST["email"]);
Utiles::redireccionar("clientes");
