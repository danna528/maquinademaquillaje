<?php
$access_token = "TU_ACCESS_TOKEN";
$external_reference = "EXPENDEDORA01"; 
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

if (!empty($data["results"])) {
    $pago = $data["results"][0];

    if ($pago["status"] === "approved") {
        echo "Pago aprobado detectado. Liberando producto...\n";
        $puerto = (stripos(PHP_OS, "WIN") === 0) ? "COM3" : "/dev/ttyUSB0"; 
        $arduino = fopen($puerto, "w");
        if ($arduino) {
            fwrite($arduino, "1");
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