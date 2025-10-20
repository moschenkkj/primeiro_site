<?php
$port = 8000;
echo "Servidor PHP iniciado em https://localhost:$port\n";
exec(command:"php -S localhost:$port -t public");
?>
