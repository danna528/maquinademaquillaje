<?php
// polling.php
// Revisa los pagos en Mercado Pago y comunica al Arduino

// ⚡ Configuración de Mercado Pago
$access_token = "TU_ACCESS_TOKEN"; // poné tu token aquí
$external_reference = "EXPENDEDORA01"; // identificador de tu máquina/producto

// 1. Consulta a Mercado Pago
$url = "https://api.mercadopago.com/v1/payments/search?sort=date_created&criteria=desc&external_reference=" . $external_reference;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer $access_token"
]);
$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);

// 2. Revisa si hay pagos
if (!empty($data["results"])) {
    $pago = $data["results"][0]; // último pago

    if ($pago["status"] === "approved") {
        echo "✅ Pago aprobado detectado. Liberando producto...\n";

        // 3. Comunicar con Arduino
        $puerto = (stripos(PHP_OS, "WIN") === 0) ? "COM3" : "/dev/ttyUSB0"; 
        // ⚠ Cambiá COM3 por el puerto correcto en Windows
        // ⚠ En Raspberry normalmente es /dev/ttyUSB0 o /dev/ttyACM0

        $arduino = fopen($puerto, "w");
        if ($arduino) {
            fwrite($arduino, "1"); // manda señal de venta
            fclose($arduino);
            echo "📤 Señal enviada al Arduino.\n";
        } else {
            echo "⚠ Error: No se pudo abrir el puerto serie.\n";
        }
    } else {
        echo "ℹ Último pago no aprobado (estado: {$pago["status"]}).\n";
    }
} else {
    echo "ℹ No hay pagos registrados todavía.\n";
}
?>