<?php
echo "Iniciando loop de pagos...\n";

while (true) {
    echo "Ejecutando polling.php...\n";
    
    include "polling.php";
    
    sleep(10);
}
?>