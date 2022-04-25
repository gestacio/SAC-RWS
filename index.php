<?php
if (http_response_code() == 404) {
    header("location: login/inicio_sesion.php");
}
header("Location: login/inicio_sesion.php");
?>