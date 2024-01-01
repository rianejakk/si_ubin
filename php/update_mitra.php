<?php
    // require ('connect.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_admin";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo '<script>console.log("Connection successful");</script>';
}

        //Variabel Input
        $nik = $_POST["NIK"];
        $nama = $_POST["nama"];
        $mitra_username = $_POST["username"];
        $email = $_POST["email"];
        $npwp = $_POST["npwp"];
        $alamat = $_POST["alamat"];
        $tempat_lahir = $_POST["tempat_lahir"];
        $tgl_lahir = $_POST["tgl_lahir"];
        $jk = $_POST["jk"];
        $agama = $_POST["agama"];
        $status_kawin = $_POST["status_kawin"];
        $pendidikan = $_POST["pendidikan"];
        $no_hp = $_POST["handphone"];
        $pekerjaan = $_POST["pekerjaan"];

        do {
            // Isi semua kolom
        if (   empty($nama)
                || empty($nik)
                || empty($mitra_username)
                || empty($email)
                || empty($npwp)
                || empty($alamat)
                || empty($tempat_lahir)
                || empty($tgl_lahir)
                || empty($jk)
                || empty($agama)
                || empty($status_kawin)
                || empty($pendidikan)
                || empty($no_hp)
                || empty($pekerjaan)
            
                ) {
                $pesanError = "Ada kolom yang harus diisi";
            }

            else {
            
            // Masukkan ke dalam database
            $sql = "UPDATE data_mitra
                    SET Nama = '$nama',
                        username = '$mitra_username',
                        Email = '$email',
                        NPWP = '$npwp',
                        Alamat = '$alamat',
                        TempatLahir = '$tempat_lahir',
                        TanggalLahir = '$tgl_lahir',
                        JenisKelamin = '$jk',
                        Agama = '$agama',
                        StatusPerkawinan = '$status_kawin',
                        PendidikanTerakhir = '$pendidikan',
                        NoHandphone = '$no_hp',
                        Pekerjaan = '$pekerjaan'
                    WHERE NIK = '$nik'
                    ";

            $result = $conn->query($sql);
            
            if (!$result) {
                $pesanError = "Data tidak valid";
                break;
            }

            $pesanBerhasil = "Data berhasil diubah";
            header("location: ../dashboard/data_mitra.php?username=" . urlencode($username));
            exit;
        }
    } while (false);
?>