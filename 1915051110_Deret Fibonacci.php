<h1> Deret Fibonacci </h1>
<form method="POST">
    Masukan Deret Ke-1   : <input type="text" name="a" value="<?=isset($_POST['a']) ? $_POST['a'] : ''?>"><br><br>
    Masukan Deret Ke-2   : <input type="text" name="b" value="<?=isset($_POST['b']) ? $_POST['b'] : ''?>"><br><br>
    Masukan Jumlah Deret yang Ditampilkan    : <input type="text" name="c" value="<?=isset($_POST['c']) ? $_POST['c'] : ''?>"><br><br>
    <input type="submit" name= "submit" value="Hasil">
</form>
<?php
if (isset($_POST["submit"])){
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
echo "Hasil Perhitungan <br> <br>";
echo "Deret Pertama = ".$a ."<br>";
echo "Deret Kedua   = ". $b ."<br> <br>" ; 
echo $c. " Hasil Deret Fibonacci <br>";
for ($i=0 ; $i<$c; $i++){
    $hasil = $a + $b;
    echo "<br>".$hasil;

    $a = $b;
    $b = $hasil;
}
}
?>