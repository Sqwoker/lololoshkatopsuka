<?php
SetCookie("lang","en",2147485547);
header('Location: '.getenv("HTTP_REFERER"));
Header("Location: index.php");
exit;
?>