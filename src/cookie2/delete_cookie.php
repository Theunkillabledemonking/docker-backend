<?php
setcookie('username', '', time() - 3600, '/');
setcookie('latee', '', time() - 3600, '/');
setcookie('ice', '', time() - 3600, '/');
header("Location: index.php");
exit;
?>