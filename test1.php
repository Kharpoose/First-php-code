<?php
echo "Merhaba <br>";
?>
<?
$isim = "Cagri";
$yas = 24;
$boy = 1.84;
$ogrenciMi = false;

echo "AD: $isim <br>";
echo "Yas: $yas <br>";
echo "Boy: $boy m<br>";
echo "Ogrenci mi? " . ($ogrenciMi ? "Evet" : "Hayir");
echo "<br>"
?>


<?php
// diziler

$colors = ["Red", "Green", "Blue"];
echo $colors[0];
echo "<br>";
echo $colors[2];
echo "<br>";
?>

<?php

$kisi = [
    "Isim" => "Cagri",
    "Yas" => "24",
    "Meslek" => "Allah",
];

echo "Ad: " . $kisi["Isim"] . "<br>";
echo "Meslek: " . $kisi["Meslek"] . "<br>";
?>

<?php
$colors = ["red", "green", "blue"];;
foreach ($colors as $color) {
    echo $color . "<br>";
}
?>

<?php
$kisi = [
    "Isim" => "Cagri",
    "Meslek" => "Allahin allahi",
    "Yas" => "Allahtan buyuk",
];
foreach ($kisi as $anahtar => $deger) {
    echo "$anahtar: $deger <br>";
}
?>

<?php
$city = ["ankara", "konya", "kyoto", "Tokyo"];
foreach ($city as $c) {
    echo $c . "<br>";
}
?>

<?php
$tayyip = [
    "Adi" => "rte",
    "yasi" => "31",
    "meslek" => "diktator"
];
foreach ($tayyip as $a => $b) {
    echo "$a: $b <br>";
}
?>

<?php
$yas = 31;
if ($yas >= 18) {
    echo "Resitsin baba" . "<br>";
    echo $yas . "<br>";
}
?>
<?php
$gun = "çarşamba";

switch ($gun) {
    case "pazartesi":
        echo "Haftanın ilk günü";
        break;
    case "çarşamba":
        echo "Haftanın ortası <br>";
        break;
    case "cuma":
        echo "Haftanın son iş günü";
        break;
    default:
        echo "Hafta sonu!";
}
?>

<?php
function kareAl($sayi)
{
    return $sayi * $sayi;
}

$sonuc = kareAl(sayi: 5);
echo "5'in karesi: " . kareAl(5) . "<br>";
echo "5 in karesi $sonuc " . "<br>";
?>

<form method="get">
    Adiniz: <input type="text" name="ad">
    <button type="submit"> gonder</button>
</form>

<?php
if (isset($_GET["ad"])) {
    $ad = $_GET["ad"];
    echo "Merhaba $ad! <br>";
}
?>

<form method="POST">
    Ad: <input type="text" name="ad">
    <button type="submit">Gönder</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["ad"])) {
        echo "Ad boş olamaz!";
    } else {
        $ad = htmlspecialchars($_POST["ad"]);
        echo "Hoş geldin, $ad! <br>";
    }
}
?>
<?php

$f = fopen("test.txt", "w");
fwrite($f, "Merhaba dünya!");
fclose($f);
?>
<?php
$f = fopen("test.txt", "r");
$icerik = fread($f, filesize("test.txt"));
fclose($f);
echo $icerik;
?>

<form method="post">
    Input: <input type="text" name="in">
    <button type="submit">Send</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["in"])) {
        echo "Input is empty!" . "<br>";
    } else {
        $ad = htmlspecialchars($_POST["in"]);
        $x = fopen("input.txt", "a");
        fwrite($x, $ad . "\n");
        fclose($x);
        echo $ad . "<br>";
        echo file_get_contents("input.txt") . "<br>";
    }
}
?>
<?php
$Renkler = ["Kırmızı", "Yeşil", "Mavi"];
$Renkler[] = "Sarı";
echo count($Renkler) . "<br>";
?>

<form method="post">
    in: <input type="text" name="deneme1">
    <button type="submit">Send</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["deneme1"])) {
        echo "Input is empty!" . "<br>";
    } else {
        $veri = htmlspecialchars($_POST["deneme1"]);

        // Dosyaya ekle
        $dosya = fopen("array.txt", "a");
        fwrite($dosya, $veri . PHP_EOL);
        fclose($dosya);

        // Dosyanın içeriğini göster
        echo "<strong>Dosya içeriği:</strong><br><pre>" . file_get_contents("array.txt") . "</pre>";
    }
}
?>