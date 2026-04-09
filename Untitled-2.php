<?php
$servername = "aplikasi_estafet";
$username = "estafet_user";
$password = "Qwerty123$%";
$dbname = "10.11.12.109";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

<img src="http://10.11.12.109/aplikasi_estafet/assets/foto_mahasiswa/2511001_PP.jpg" alt="Mahasiswa 3">
ipk: <input type="text">
Nama: <input type="text" name="name" value="<?php echo $nama;?>">

Tempat_lahir: <input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir;?>">

Tanggal_lahir: <input type="text" name="tanggal_lahir" value="<?php echo $tanggal_lahir;?>">

Nama_program_studi: <textarea name="nama_program_studi" rows="5" cols="40"><?php echo $nama_program_studi?></textarea>

Kepala_program_studi : <textarea name="kepala_program_studi" rows="6" cols="40"><?php echo $kepala_program_studi?></textarea>


Gender:
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="other">Other

<html>
<head>
  <title>Kartu Rencan Studi Pada Semester Genap 2025/2026</title>
</head>
<body>
  <h2>Kimia</h2>
  <table class="table table-info">
        <thead>
            <tr>
                <td></td>
            </tr>
        </thead>
</body>
</html>