<?php
if(['user'] == 'true')
setcookie('user', 'true', time() - 3600,'/');
else
setcookie('user', 'true', time() + 3600,'/');

header('Location:/');
?>