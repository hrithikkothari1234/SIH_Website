<?php
    require_once("includes/sessions.php");
    $_SESSION["admin_id"] = null;
    $_SESSION["admin_name"] = null;
    $_SESSION["client_id"] = null;
    $_SESSION["client_name"] = null;
    session_destroy();
    Header("Location: index.php");
?>
