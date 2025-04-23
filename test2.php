<?php
function selamla_kisi($kisi = "Ziyaretci")
{
    echo "Selam $kisi <br>";
}
selamla_kisi("Ali");
selamla_kisi();

function notDurumu($puan)
{
    if ($puan >= 50) {
        echo "Gectiniz <br>";
    } else {
        echo "Kaldiniz <br>";
    }
}
?>
<?php
$a = 10;
$b = 20;

function toplama()
{
    global $a, $b;
    echo $a + $b . "<br>";
    // echo $GLOBALS["a"] + $GLOBALS["b"] . "<br>";
}
toplama();
?>

<?php
date_default_timezone_set("Asia/Tokyo");
echo date("d-m-Y H:i:s") . "<br>";

$yarin = strtotime("+1 day");
echo date("d-m-Y ", $yarin) . "<br>";

?>
<?php
$meyveler = ["elma", "armut", "muz", "çilek"];
if (in_array("muz", $meyveler)) {
    echo "Muz var <br>";
} else {
    echo "Muz yok <br>";
}
array_push($meyveler, "kivi", "karpuz");
$sebzeler = ["domates", "test", "patates"];
$tursu = ["salatalik", "sogan", "sarmasik"];
$birlestir = array_merge($meyveler, $sebzeler);
echo $birlestir[5] . "<br>";
sort($birlestir);
print_r($birlestir);
echo "<br>";
?>