<h1>Barisan Aritmatika</h1>
<br>
<form  method="POST" action="">
    Masukan Suku Pertama               :  <input type="text" name="na" value="<?=isset($_POST['na']) ? $_POST['na'] : ''?>"><br><br>
    Masukan Beda                 :  <input type="text" name="nb" value="<?=isset($_POST['nb']) ? $_POST['nb'] : ''?>"><br><br>
    Masukan Suku yang ingin dicari:  <input type="text" name="nc" value="<?=isset($_POST['nc']) ? $_POST['nc'] : ''?>"><br><br>
    <input type="submit" name="submit" value="Hasil">
</form>
</p>Hasil
<?php
    if (isset($_POST['submit'])){
        $na = $_POST['na'];
        $nb = $_POST['nb'];
        $nc = $_POST['nc'];
            for ($i=1 ; $i<=$nc; $i++){
                $hasil = $na + ($nb*($i-1));
                echo "<br>".$hasil;
            }
        $hasilsuku = $na + ($nc-1) * $nb;
        echo "<br> <br> Nilai Suku ke- ". $nc;
        echo "<br>".$hasilsuku;
    }
?>
</p>