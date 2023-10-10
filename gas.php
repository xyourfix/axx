<?php
$url = 'https://cms-pokemonar.mcdonalds.co.id/api/nso-ar/claim-offers/b02d4bcb-fdbd-4fb8-9d4e-1797f066c069';

$data = array(
    'email' => 'deco.de.fikri@gmail.com',
    'device_id' => '7C18228C-38C4-4FDC-8925-91DE3E92CF71'
);

$headers = array(
    'Host: cms-pokemonar.mcdonalds.co.id',
    'Accept: application/json, text/plain, /',
    'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjllMzFhOTM3NmMyZDMzYzU3NWRmMjJkYTZhZDBmNjUxYjk4NThmZWQ3NDNmN2Q5ZTk2YWU5MTcxNzY3YWU1MzdkMzdlZmU5YjY4ZDI5N2U1In0.eyJhdWQiOiIxMiIsImp0aSI6IjllMzFhOTM3NmMyZDMzYzU3NWRmMjJkYTZhZDBmNjUxYjk4NThmZWQ3NDNmN2Q5ZTk2YWU5MTcxNzY3YWU1MzdkMzdlZmU5YjY4ZDI5N2U1IiwiaWF0IjoxNjk2OTI1NTQ5LCJuYmYiOjE2OTY5MjU1NDksImV4cCI6MTcyODU0Nzk0OSwic3ViIjoiIiwic2NvcGVzIjpbXX0.aw12UW4Q--ms6Z6JRv1bQ2kBV3pbh5sBYi4S53bSYcNYvTeBltyMcp0HiCW8piorZk0tJ54pMPDfU7-GzbeFQZ6kQ9OKaZezzOstIEURexANsQ1bSiLQUWY9j7bAeNMfv0RMhI9YXH3A4pOtsfb4DNtVvKTJvn6K5V726eKLICgMh9GG8g-9JKqjFXk-Bi7VI5VYWxU91U108KOrvwfGfOXBbtN5hAL3pkOQSs1j_CaqAhIh_7gxB3lVcLDfcen1S5rzgbw_MfvrSXEVO4QGqe2LkffajSNCi3MLqqmP9TiJoeJU0rQc9gxapbZznfIefzMnKXI5eDBkFnU5fTTfQXmSoSBfL8Wk4WcP944vYWFnkI2nlorqVNVUTL9Jm-9LTIc7EWMLGhSEi6lavFw8MRkHg34xaA0dwM08CMVBvOFathgMlUV9Cf9RijuLHUFLeQ4SS3L2ZrhV2E3SDWGab8QnFWcV8XfyWc1txzRQagZteEt2U4bj2dHjVfk2ajzEKdXdn2TpVttYostgfGAPpfSkahfKAeLvkth_FsKYbP_xfoKlNUAEMj1d__08VFpvcTs9UeUB0YWmLwtOJW_gZboQcs7i7N4BqqKvNZsfPYsVwUDvjEx1Om7aq67lkcfzL2LmeZkQ0gPeFw0OAGvOTcrCSU0WgPv31xrpIhBHm6Y',
    'Sec-Fetch-Site: same-site',
    'Accept-Language: id-ID,id;q=0.9',
    'Sec-Fetch-Mode: cors',
    'Origin: https://games.mcdonalds.co.id',
    'User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_6_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148',
    'Referer: https://games.mcdonalds.co.id/',
    'Connection: keep-alive',
    'Sec-Fetch-Dest: empty',
    'Content-Type: application/json',
);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);

if ($response === false) {
    echo 'Curl error: ' . curl_error($ch);
} else {
    echo 'Response: ' . $response;
}

curl_close($ch);
?>
