<!DOCTYPE html>
<html>
<head>
    <title>Yeni Dosya Oluştur ve Metin Yaz</title>
    <link rel="stylesheet" href="style.css">
</head>



<body>
    <form method="post" action="index.php">
        <textarea name="metin" id="metin" cols="30" rows="10" placeholder="Metin giriniz ( Turkce Karakter Kullanmayiniz... ) "></textarea>
        <div>
            <input type="submit" value="Gönder">
        </div>
    </form>



    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $metin = $_POST["metin"];
        
        if (!empty($metin)) {
            $dosyaAdi = uniqid("dosya_", true) . ".txt"; // Rastgele dosya adı oluştur
            $dosyaIcerik = $metin;
            
            file_put_contents($dosyaAdi, $dosyaIcerik);
            echo "Yeni dosya oluşturuldu ve metin dosyaya yazıldı. Dosya Linki: <a href='$dosyaAdi'>$dosyaAdi</a>";
        } else {
            echo "Lütfen metin girin.";
        }
    }
    ?>
</body>
</html>
