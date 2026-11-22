<?php

session_start();

session_destroy();

header("Location: /gamestorePHPversion/index.php");
exit();

?>