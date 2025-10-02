<?php
// Membuat array kemudian diencode ke JSON
$buah = array("Apel","Mangga","Jeruk","Semangka","Pisang");

echo "Hasil JSON Encode:<br>";
echo json_encode($buah);
echo "<br><br>";
?>

<?php
// JSON string berisi data buah
$json_string = '{
    "tropis": "Mangga",
    "subtropis": "Apel",
    "musiman": "Durian"
}';

// Decode JSON ke PHP Object
$obj = json_decode($json_string);

echo "Decode ke PHP Object:<br>";
echo "Buah tropis: " . $obj->tropis . "<br>";
echo "Buah subtropis: " . $obj->subtropis . "<br>";
echo "Buah musiman: " . $obj->musiman . "<br><br>";
?>

<?php
// JSON string berisi data buah
$json_string = '{
    "tropis": "Mangga",
    "subtropis": "Apel",
    "musiman": "Durian"
}';

// Decode ke bentuk PHP Array
$arr = json_decode($json_string, true);

echo "Decode ke PHP Array:<br>";
echo "Buah tropis: " . $arr["tropis"] . "<br>";
echo "Buah subtropis: " . $arr["subtropis"] . "<br>";
echo "Buah musiman: " . $arr["musiman"] . "<br>";
?>
