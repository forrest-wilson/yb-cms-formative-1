<?php
    session_start();

    if ($_POST["name"] != "") {
        $_SESSION["name"] = $_POST["name"];
    }

    if ($_POST["email"] != "") {
        $_SESSION["email"] = $_POST["email"];
    }

    header("Location: viewsession.phtml");
?>