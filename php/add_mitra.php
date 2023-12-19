<?php
    // Inisiasi variabel input
    $nama = "";
    $nik = "";
    $username = "";
    $email = "";
    $npwp = "";
    $alamat = "";
    $tempat_lahir = "";
    $tgl_lahir = "";
    $jk = "";
    $agama = "";
    $status_kawin = "";
    $pendidikan = "";
    $no_hp = "";
    $pekerjaan = "";
    // $nama_bank = "";
    // $no_rekening = "";
    // $pemilik_rekening = "";
    // $merk_hp = "";
    // $tipe_hp = "";
    // $catatan = "";

    // Inisiasi variabel checklist

    //Variabel Checklist
    $pesanError = "";
    $pesanBerhasil = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        //Variabel Input
        $nik = $_POST["NIK"];
        $nama = $_POST["Nama"];
        $username = $_POST["username"];
        $email = $_POST["Email"];
        $npwp = $_POST["NPWP"];
        $alamat = $_POST["Alamat"];
        $tempat_lahir = $_POST["Tempat Lahir"];
        $tgl_lahir = $_POST["Tanggal Lahir"];
        $jk = $_POST["Jenis Kelamin"];
        $agama = $_POST["Agama"];
        $status_kawin = $_POST["Status Perkawinan"];
        $pendidikan = $_POST["Pendidikan Terakhir"];
        $no_hp = $_POST["No Handphone"];
        $pekerjaan = $_POST["Pekerjaan"];
        // $sensus_penduduk = isset($_POST["sensus_penduduk"]) ? 1 : 0;
        // echo $sensus_penduduk;
        // $sensus_pertanian = isset($_POST["sensus_pertanian"]) ? 1 : 0;
        // echo $sensus_pertanian;
        // $sensus_ekonomi = isset($_POST["sensus_ekonomi"]) ? 1 : 0;
        // echo $sensus_ekonomi;
        // $survei_sen = isset($_POST["survei_sen"]) ? 1 : 0;
        // echo $survei_sen;
        // $survei_akn = isset($_POST["survei_akn"]) ? 1 : 0;
        // echo $survei_akn;
        // $survei_biaya_hidup = isset($_POST["survei_biaya_hidup"]) ? 1 : 0;
        // echo $survei_biaya_hidup;
        // $capi = isset($_POST["capi"]) ? 1 : 0;
        // echo $capi;
        // $nama_bank = $_POST["Nama Bank"];
        // $no_rekening = $_POST["Nomor Rekening"];
        // $pemilik_rekening = $_POST["Nama Pemilik Rekening"];
        // $hp_android = isset($_POST["hp_android"]) ? 1 : 0;
        // echo $hp_android;
        // $merk_hp = $_POST["Merk HP"];
        // $tipe_hp = $_POST["Tipe HP"];
        // $kendaraan_bermotor = isset($_POST["kendaraan_bermotor"]) ? 1 : 0;
        // echo $kendaraan_bermotor;
        // $bisa_motor = isset($_POST["bisa_motor"]) ? 1 : 0;
        // echo $bisa_motor;
        // $laptop = isset($_POST["laptop"]) ? 1 : 0;
        // echo $laptop;
        // $op_pc = isset($_POST["op_pc"]) ? 1 : 0;
        // echo $op_pc;
        // $catatan = $_POST["Catatan"];
        // $hubungan_kerja_lain = isset($_POST["hubungan_kerja_lain"]) ? 1 : 0;
        // echo $hubungan_kerja_lain;

        // Variabel file
        // Foto KTP
        // $ktp = $_FILES['foto_ktp'];
        // $ktp_name = $ktp['name'];
        // $ktp_tmp = $ktp['tmp_name'];
        
        // $ktp_data = file_get_contents($ktp);
        
        // // Foto Ijazah
        // $ijazah = $_FILES['ijazah'];
        // $ijazah_name = $ijazah['name'];
        // $ijazah_tmp = $ijazah['tmp_name'];
        
        // $ijazah_data = file_get_contents($ijazah);

        do {
            // Isi semua kolom
            if (   empty($nama)
                || empty($nik)
                || empty($username)
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
                // || empty($nama_bank)
                // || empty($no_rekening)
                // || empty($pemilik_rekening)
                ) {
                $pesanError = "Ada kolom yang harus diisi";
                break;
            }
            
            // Masukkan ke dalam database
            $sql = "INSERT INTO data_mitra (
                    NIK,
                    Nama,
                    username,
                    Email,
                    NPWP,
                    Alamat,
                    Tempat Lahir,
                    Tanggal Lahir,
                    Jenis Kelamin,
                    Agama,
                    Status Perkawinan,
                    Pendidikan Terakhir,
                    No Handphone,
                    Pekerjaan
                    )

                    VALUES (
                        '$nik',
                        '$nama',
                        '$username',
                        '$email',
                        '$npwp',
                        '$alamat',
                        '$tempat_lahir',
                        '$tgl_lahir',
                        '$jk',
                        '$agama',
                        '$status_kawin',
                        '$pendidikan',
                        '$no_hp',
                        '$pekerjaan',
                    )";

            $result = $conn->query($sql);
            
            if (!$result) {
                $pesanError = "Data tidak valid";
                break;
            }
            
            // Kosongkan kolom setelah berhasil
            // $nama = "";
            // $nip = "";
            // $jabatan = "";
            
            $pesanBerhasil = "Data berhasil ditambahkan";

        } while (false);
    }
?>