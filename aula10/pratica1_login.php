<?php

session_start();
setcookie("usuario", $_SESSION["usuarios"], time() + 60 * 5, "/");
if (!isset($_SESSION["usuarios"])) {
    $_SESSION["usuarios"] = $_POST ["usuarios"];
}

if (!isset($_SESSION["data"])) {
    $_SESSION["data"] = date('d-m-Y H:i:s');
}
$_POST ["usuarios"];

echo "olá " . $_SESSION["usuarios"] . "<br>";
echo "olá " . $_SESSION["data"];

?>
