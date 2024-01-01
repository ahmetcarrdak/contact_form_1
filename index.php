<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adısanlar Deri</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form">
    <div class="logo">
        <img src="logo.jpeg" alt="resim bulunamadı">
    </div>
    <form action="odeme_noktasi.php" method="post">
        <div class="input_group">
            <input type="text" placeholder="İsim Soyisim" name="firstname">
        </div>
        <div class="input_group">
            <input type="tel" placeholder="Telefon Numarası" name="tel">
        </div>
        <div class="input_group">
            <input type="email" placeholder="Mail Adresi" name="mail">
        </div>
        <div class="input_group">
            <textarea name="address" id="" cols="30" rows="10" placeholder="Adres"></textarea>
        </div>
        <div class="input_group">
            <button type="submit">Gönder</button>
        </div>
    </form>
</div>

</body>
</html>