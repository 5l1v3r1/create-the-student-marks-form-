<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<form action="" method="POST">
    <b>Not Girişi</b> <hr width="70"; align="left"; />
<table border="5" >

        <tr>
            <td>Öğrencinin Adı :</td>
            <td><input type="text" name="ogr_ad"></td>
        </tr>

            <tr>
                <td>Vize Notu :</td>
                <td><input type="text" name="ogr_vize"></td>
            </tr>
                        <tr>
                            <td>Final Notu :</td>
                            <td><input type="text" name="ogr_final"></td>
                        </tr>

</table>
    <hr width="70"; align="left"; />
    <input style="Margin: 20px" type="submit" name="Gönder" value="gönder" >

</form>



<?php
//error_reporting(0);
if(isset($_POST["Gönder"]))
{

    $baglan = mysqli_connect("localhost", "root", "","notlar");
    if (isset($baglan)) {
        echo "baglantı başarılı";
    } else {
        echo "baglantı basarısız";
    }
    /*$db_select = mysqli_select_db("notlar");
    if (isset($db_select)) {
        echo "db seçimi başarılı";
    } else {
        echo "db seçimi başarılı";
    }*/
    $ad=$_POST["ogr_ad"];
    $vize=$_POST["ogr_vize"];
    $final=$_POST["ogr_final"];
    $ort = ($vize*0.4)+($final*0.6);
    function ortalama_hesaplama($ort)
    {
        if ($ort <= 19) $harf = "ff";
        elseif ($ort <= 29) $harf = "fd";
        elseif ($ort <= 39) $harf = "fd";
        elseif ($ort <= 49) $harf = "dd";
        elseif ($ort <= 59) $harf = "dc";
        elseif ($ort <= 69) $harf = "cc";
        elseif ($ort <= 79) $harf = "cb";
        elseif ($ort <= 89) $harf = "bb";
        elseif ($ort <= 100) $harf = "ba";
        else"bu notun harf karşılığı yoktur";
        return $harf;
    }

    $durum=ortalama_hesaplama($ort);

    $ekle = mysqli_query($baglan,"INSERT INTO ogrenciler(no,adı,vize,final,ortalama,durum) VALUES('2','$ad','$vize','$final','$ort','$durum')");
    if (isset($ekle)) {
        echo "ekleme başarılı";
    } else {
        echo "ekleme başarısız";
    }
mysqli_close($baglan);
}
else{echo "çalışmadı";}





