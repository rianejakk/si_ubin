<?php 
    require ('../php/dashboard.php');

    $nama = "";
    $nik = "";
    $mitra_username = "";
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

    //Variabel Checklist
    $pesanError = "";
    $pesanBerhasil = "";

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        
        if (!isset($_GET["id"])) {
            header("location: ../dashboard/data_mitra.php?username=" . urlencode($username));
            exit;
        }

        $nik = $_GET["id"];

        $sql = "SELECT * FROM data_mitra WHERE NIK = '$nik'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        if (!$row) {
            header("location: ../dashboard/data_mitra.php?username=" . urlencode($username));
            exit;
        }

        $nik = $row["NIK"];
        $nama = $row["Nama"];
        $mitra_username = $row["username"];
        $email = $row["Email"];
        $npwp = $row["NPWP"];
        $alamat = $row["Alamat"];
        $tempat_lahir = $row["TempatLahir"];
        $tgl_lahir = $row["TanggalLahir"];
        $jk = $row["JenisKelamin"];
        $agama = $row["Agama"];
        $status_kawin = $row["StatusPerkawinan"];
        $pendidikan = $row["PendidikanTerakhir"];
        $no_hp = $row["NoHandphone"];
        $pekerjaan = $row["Pekerjaan"];
    }
?>

<!DOCTYPE html>
<!-- saved from url=(0055)  -->
<html class="fontawesome-i2svg-active fontawesome-i2svg-complete"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard</title>

    <!-- Bootstrap CSS CDN -->
    <style type="text/css">svg:not(:root).svg-inline--fa{overflow:visible}.svg-inline--fa{display:inline-block;font-size:inherit;height:1em;overflow:visible;vertical-align:-.125em}.svg-inline--fa.fa-lg{vertical-align:-.225em}.svg-inline--fa.fa-w-1{width:.0625em}.svg-inline--fa.fa-w-2{width:.125em}.svg-inline--fa.fa-w-3{width:.1875em}.svg-inline--fa.fa-w-4{width:.25em}.svg-inline--fa.fa-w-5{width:.3125em}.svg-inline--fa.fa-w-6{width:.375em}.svg-inline--fa.fa-w-7{width:.4375em}.svg-inline--fa.fa-w-8{width:.5em}.svg-inline--fa.fa-w-9{width:.5625em}.svg-inline--fa.fa-w-10{width:.625em}.svg-inline--fa.fa-w-11{width:.6875em}.svg-inline--fa.fa-w-12{width:.75em}.svg-inline--fa.fa-w-13{width:.8125em}.svg-inline--fa.fa-w-14{width:.875em}.svg-inline--fa.fa-w-15{width:.9375em}.svg-inline--fa.fa-w-16{width:1em}.svg-inline--fa.fa-w-17{width:1.0625em}.svg-inline--fa.fa-w-18{width:1.125em}.svg-inline--fa.fa-w-19{width:1.1875em}.svg-inline--fa.fa-w-20{width:1.25em}.svg-inline--fa.fa-pull-left{margin-right:.3em;width:auto}.svg-inline--fa.fa-pull-right{margin-left:.3em;width:auto}.svg-inline--fa.fa-border{height:1.5em}.svg-inline--fa.fa-li{width:2em}.svg-inline--fa.fa-fw{width:1.25em}.fa-layers svg.svg-inline--fa{bottom:0;left:0;margin:auto;position:absolute;right:0;top:0}.fa-layers{display:inline-block;height:1em;position:relative;text-align:center;vertical-align:-.125em;width:1em}.fa-layers svg.svg-inline--fa{-webkit-transform-origin:center center;transform-origin:center center}.fa-layers-counter,.fa-layers-text{display:inline-block;position:absolute;text-align:center}.fa-layers-text{left:50%;top:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);-webkit-transform-origin:center center;transform-origin:center center}.fa-layers-counter{background-color:#ff253a;border-radius:1em;-webkit-box-sizing:border-box;box-sizing:border-box;color:#fff;height:1.5em;line-height:1;max-width:5em;min-width:1.5em;overflow:hidden;padding:.25em;right:0;text-overflow:ellipsis;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top right;transform-origin:top right}.fa-layers-bottom-right{bottom:0;right:0;top:auto;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:bottom right;transform-origin:bottom right}.fa-layers-bottom-left{bottom:0;left:0;right:auto;top:auto;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:bottom left;transform-origin:bottom left}.fa-layers-top-right{right:0;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top right;transform-origin:top right}.fa-layers-top-left{left:0;right:auto;top:0;-webkit-transform:scale(.25);transform:scale(.25);-webkit-transform-origin:top left;transform-origin:top left}.fa-lg{font-size:1.33333em;line-height:.75em;vertical-align:-.0667em}.fa-xs{font-size:.75em}.fa-sm{font-size:.875em}.fa-1x{font-size:1em}.fa-2x{font-size:2em}.fa-3x{font-size:3em}.fa-4x{font-size:4em}.fa-5x{font-size:5em}.fa-6x{font-size:6em}.fa-7x{font-size:7em}.fa-8x{font-size:8em}.fa-9x{font-size:9em}.fa-10x{font-size:10em}.fa-fw{text-align:center;width:1.25em}.fa-ul{list-style-type:none;margin-left:2.5em;padding-left:0}.fa-ul>li{position:relative}.fa-li{left:-2em;position:absolute;text-align:center;width:2em;line-height:inherit}.fa-border{border:solid .08em #eee;border-radius:.1em;padding:.2em .25em .15em}.fa-pull-left{float:left}.fa-pull-right{float:right}.fa.fa-pull-left,.fab.fa-pull-left,.fal.fa-pull-left,.far.fa-pull-left,.fas.fa-pull-left{margin-right:.3em}.fa.fa-pull-right,.fab.fa-pull-right,.fal.fa-pull-right,.far.fa-pull-right,.fas.fa-pull-right{margin-left:.3em}.fa-spin{-webkit-animation:fa-spin 2s infinite linear;animation:fa-spin 2s infinite linear}.fa-pulse{-webkit-animation:fa-spin 1s infinite steps(8);animation:fa-spin 1s infinite steps(8)}@-webkit-keyframes fa-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes fa-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.fa-rotate-90{-webkit-transform:rotate(90deg);transform:rotate(90deg)}.fa-rotate-180{-webkit-transform:rotate(180deg);transform:rotate(180deg)}.fa-rotate-270{-webkit-transform:rotate(270deg);transform:rotate(270deg)}.fa-flip-horizontal{-webkit-transform:scale(-1,1);transform:scale(-1,1)}.fa-flip-vertical{-webkit-transform:scale(1,-1);transform:scale(1,-1)}.fa-flip-horizontal.fa-flip-vertical{-webkit-transform:scale(-1,-1);transform:scale(-1,-1)}:root .fa-flip-horizontal,:root .fa-flip-vertical,:root .fa-rotate-180,:root .fa-rotate-270,:root .fa-rotate-90{-webkit-filter:none;filter:none}.fa-stack{display:inline-block;height:2em;position:relative;width:2em}.fa-stack-1x,.fa-stack-2x{bottom:0;left:0;margin:auto;position:absolute;right:0;top:0}.svg-inline--fa.fa-stack-1x{height:1em;width:1em}.svg-inline--fa.fa-stack-2x{height:2em;width:2em}.fa-inverse{color:#fff}.sr-only{border:0;clip:rect(0,0,0,0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.sr-only-focusable:active,.sr-only-focusable:focus{clip:auto;height:auto;margin:0;overflow:visible;position:static;width:auto}</style><link rel="stylesheet" href="./rsc/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="./rsc/style2.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="./rsc/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer="" src="./rsc/solid.js.download" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer="" src="./rsc/fontawesome.js.download" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" class="mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar" style="overflow: visible;"><div id="mCSB_1" class="mCustomScrollBox mCS-minimal mCSB_vertical mCSB_outside" style="max-height: none;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
            <div class="sidebar-header">
                <h3>SI UBIN</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="../dashboard/dashboard.php?username=<?php echo urlencode($username); ?>">Beranda</a>
                </li>
                <li class="active">
                    <a href="../dashboard/data_mitra.php?username=<?php echo urlencode($username); ?>">Data Mitra</a>
                </li>
            </ul>
            <ul class="list-unstyled CTAs">
                <li>
                    <a href="../php/logout.php"><?php echo htmlspecialchars($username); ?> | Log Out</a>
                </li>
            </ul>
        </div></div>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <svg class="svg-inline--fa fa-align-left fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="align-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M288 44v40c0 8.837-7.163 16-16 16H16c-8.837 0-16-7.163-16-16V44c0-8.837 7.163-16 16-16h256c8.837 0 16 7.163 16 16zM0 172v40c0 8.837 7.163 16 16 16h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16zm16 312h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm256-200H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16h256c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16z"></path></svg><!-- <i class="fas fa-align-left"></i> -->
                    </button>
                </div>
            </nav>
            <!-- Konten Disini -->
            <h4>Edit Mitra</h4>
                <div class="container mt-5">
                <ul class="nav nav-tabs" id="myTabs">
                    <li class="nav-item">
                        <a class="nav-link active" id="tab1-tab" data-bs-toggle="tab" href="#tab1">Profil</a>
                    </li>
                </ul>

                <div class="tab-content mt-2">

                    <!-- Konten Tab 1 -->
                    <div class="tab-pane fade show active" id="tab1">
                        <form method="post" action="../php/update_mitra.php">
                            <input type="hidden" value="<?php echo $nik; ?>">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label><h6>Nama Lengkap</h6></label>
                                    <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama; ?>">
                                </div>
                                <div class="form-group">
                                    <label><h6>NIK KTP/Surat Keterangan</h6></label>
                                    <input type="text" class="form-control" name="NIK" value="<?php echo $nik; ?>">
                                </div>
                                <div class="form-group">
                                    <label><h6>Username</h6></label>
                                    <input type="text" class="form-control" name="username" value="<?php echo $mitra_username; ?>">
                                </div>
                                <div class="form-group">
                                    <label><h6>Email</h6></label>
                                    <input type="text" class="form-control" name="email" id="email" value="<?php echo $email; ?>">
                                </div>
                                <div class="form-group">
                                    <label><h6>NPWP</h6></label>
                                    <input type="text" class="form-control" name="npwp" id="npwp" value="<?php echo $npwp; ?>">
                                </div>
                                <div class="form-group">
                                    <label><h6>Alamat</h6></label>
                                    <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $alamat; ?>">
                                </div>
                                <div class="form-group">
                                    <label><h6>Tempat Lahir</h6></label>
                                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="<?php echo $tempat_lahir; ?>">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label><h6>Tanggal Lahir</h6></label>
                                    <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?php echo $tgl_lahir; ?>">
                                </div>
                                <div class="form-group">
                                    <label><h6>Jenis Kelamin</h6></label>
                                    <!-- <input type="text" class="form-control" name="jk" id="jk" value=""> -->
                                    <select name="jk" class="custom-select">
                                    <option value="">- Pilih jenis kelamin -</option>
                                    <option value="Perempuan" <?php if($row['JenisKelamin'] == 'Perempuan') {echo"selected";} ?>>Perempuan</option>
                                    <option value="Laki-laki" <?php if($row['JenisKelamin'] == 'Laki-Laki') {echo"selected";} ?>>Laki-Laki</option>
						            </select>
                                </div>
                                <div class="form-group">
                                    <label><h6>Agama</h6></label>
                                    <!-- <input type="text" class="form-control" name="agama" id="agama" value=""> -->
                                    <select name="agama" class="custom-select">
                                    <option value="">- Pilih Agama -</option>
                                    <option value="Islam" <?php if($row['Agama'] == 'Islam') {echo"selected";} ?>>Islam</option>
                                    <option value="Kristen" <?php if($row['Agama'] == 'Kristen') {echo"selected";} ?>>Kristen</option>
                                    <option value="Katolik" <?php if($row['Agama'] == 'Katolik') {echo"selected";} ?>>Katolik</option>
                                    <option value="Hindu" <?php if($row['Agama'] == 'Hindu') {echo"selected";} ?>>Hindu</option>
                                    <option value="Budha" <?php if($row['Agama'] == 'Budha') {echo"selected";} ?>>Budha</option>
                                    <option value="Konghucu" <?php if($row['Agama'] == 'Konghucu') {echo"selected";} ?>>Konghucu</option>
						            </select>
                                </div>
                                <div class="form-group">
                                    <label><h6>Status Perkawinan</h6></label>
                                    <input type="text" class="form-control" name="status_kawin" id="status_kawin" value="<?php echo $status_kawin; ?>">
                                </div>
                                <div class="form-group">
                                    <label><h6>Pendidikan Terakhir</h6></label>
                                    <input type="text" class="form-control" name="pendidikan" id="pendidikan" value="<?php echo $pendidikan; ?>">
                                </div>
                                <div class="form-group">
                                    <label><h6>Handphone</h6></label>
                                    <input type="text" class="form-control" name="handphone" id="handphone" value="<?php echo $no_hp; ?>">
                                </div>
                                <div class="form-group">
                                    <label><h6>Pekerjaan</h6></label>
                                    <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="<?php echo $pekerjaan; ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    
                        <div class="col-xs-12">
                            <br>
                            <!-- <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                            <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i>Reset</button> -->
                            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                            <a class="btn btn-danger" href="../dashboard/data_mitra.php?username=<?php echo urlencode($username); ?>">Batal</a>
                        </div>
                        <?php 
                            if (!empty($pesanBerhasil)) {
                                echo "
                                <div class='alert alert-success alert-dismissable' role='alert'>
                                    <strong>$pesanBerhasil</strong>
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                            </button>
                                </div>";
                            }
                        ?>
                    </div>
                    </form>
                </div>
            </div>

            <!-- Bootstrap JS (optional, but required for certain features like dropdowns) -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                        
            </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="./rsc/jquery-3.3.1.slim.min.js.download" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="./rsc/popper.min.js.download" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="./rsc/bootstrap.min.js.download" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="./rsc/jquery.mCustomScrollbar.concat.min.js.download"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>
</html>