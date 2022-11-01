<DOCTYPE! html>
    <html lang="en">
    <head>
        <title>Form Tambah</title>
</head>
<body>
    <header>
        <h1>Tarif Parkir</h1>
</header>
<form action= "proses-tambah.php" method="POST">
    <fieldset>
        <p>
        <label for= "jenis_kendaraan"> Jenis Kendaraan : </label>
        <input type= "text" name="jenis_kendaraan"/>
</p>
<p>
    <label for= "tarif"></label>
    <p>Tarif Kendaraan </p>
    <p><input type="radio" name="tarif" value = "2000" /> 2000</p>
    <p><input type="radio" name="tarif" value = "5000" /> 5000</p>
    <p><input type="radio" name="tarif" value = "10000" /> 10000</p>
</p>
<p>
    <input type= "submit" value = "Kirim Data" name="simpan"/>
</p>
</body>
</html>