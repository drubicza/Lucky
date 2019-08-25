<?php
function nabila($a, $data, $bee)
{
    $body = '{"data":"'.$data.'","v":"0"}';
    $ch   = curl_init();

    curl_setopt($ch, CURLOPT_URL, "http://point.shortvideo3.top/v1/users/points");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

    $headers   = array ();
    $headers[] = "Content-Type: application/json; charset=utf-8";
    $headers[] = "User-Agent: LuckyDog/1.1.4";
    $headers[] = "BeeAuthorization: ".$bee."";

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    return $result;
}

print "Super Lucky WHEEL - Lucky Dog\n";
print "Thanks To : Muhammad Ikhsan Aprilyadi\n\n";

echo "Data : ";
$data = trim(fgets(STDIN));

echo "BeeAuthorization : ";
$bee = trim(fgets(STDIN));

echo "Jumlah : ";
$jum = trim(fgets(STDIN));
echo "\n";

for ($a = 2; $a < $jum; $a++) {
    sleep (2);
    $oce = nabila($a, $data, $bee);
    echo "".$oce."\n";
}
?>
