<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Soal 2</title>
  </head>
  <body
    style="background-image: url(https://fashionsista.co/wallpaper/wallpaper/20201221/wallpaper-hp-warna-hitam-stok-wallpaper-preview.jpg); background-repeat: no-repeat; background-size: cover;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: black; max-height:80px " >
        <a class="navbar-brand" href="login.html">
            <img src="https://smkassalaambandung.sch.id/img/logo-custom.png" width="100" height="80" alt="">
        </a>
        <a class="navbar-brand" href="#" style="color: white;">Dmsrmdni_</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" style="margin-left:290px">
                <li class="nav-item">
                        <a class="nav-link" href="beranda.html" style="color:grey;"><b> Beranda </b></a>
                    </li>
                <li class="nav-item active">
                    <a class="nav-link" href="vaksin.php" style="color: grey;"><b> Soal 1 </b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gaji.php" style="color:grey;"><b> Soal 2 </b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="form_pengulangan.php" style="color: grey;"><b> Soal 3 </b></a>
                </li>
            </ul>
        </div>
    </nav>
    <br>





    <<!--cards-->
<div class="card text-center" style="max-width:50%; margin:auto">
  <div class="card-header" style="background-color: lightgreen">
  <h3>Penggajihan Karyawan</h3>
  </div>
  <div class="card-body" style="background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfnqhS_m6PJCgHvEOYa_V-t_0aDUaJPqP9dZRM3QY65KLnEAvsTIZFNwRx-8B80e8ibFw&usqp=CAU);">
  <h4>PT. Selalu Makmur Jaya </h4>
  <center>
        <!--form-->
        <div class="card" style="max-width:90%">
          <div class="card-body">
          <form method="POST" action="">
            <table>
                <tr>
                    <td>Nama Bendahara</td>
                    <td>:</td>
                    <td><input type="text" name="bendahara"></td>
                </tr>
                <tr>
                    <td>Nama Karyawan</td>
                    <td>:</td>
                    <td><input type="text" name="karyawan"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" value="Laki-Laki">laki-laki
                        <input type="radio" name="jk" value="Perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Gaji</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal"></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>
                     <select name="jabatan" >
                        <option value="Direktur" >Direktur</option>
                        <option value="Manager">Manager</option>
                        <option value="Sekertaris">Sekertaris</option>
                        <option value="Karyawan">Karyawan</option>
                        <option value="OB">OB</option>
                    </select>
                </td>
                <tr>
                    <td>Pendidikan terakhir</td>
                    <td>:</td>
                    <td>
                     <select name="pendidikan" >
                        <option value="sd">SD</option>
                        <option value="smp">SMP</option>
                        <option value="sma">SMA</option>
                        <option value="s1">S1</option>
                        <option value="s2">S2</option>
                    </select>
                </td>
                </tr>
                <tr>
                <tr>
                    <td>Status Pegawai</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="status" value="tetap"><b>Tetap</b>
                        <input type="radio" name="status" value="kontrak"><b>Kontrak</b>
                </tr>
                </td>
                </tr>
                <tr>
                    <td>lembur</td>
                    <td>:</td>
                    <td><input type="number" name="lembur"> Hari/ Rp. 20.000</td>
                </tr>
                <tr>
                    <td>Potongan BPJS</td>
                    <td>:</td>
                    <td><input type="number" name="bpjs"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value="Kirim"></td>
                </tr>
            </table>
        </form>
        <br>
        <hr>

        <?php
echo "<div style='margin: 40px auto ; width:fit-content'>";
if (isset($_POST['simpan'])) {
    $bendahara = $_POST['bendahara'];
    $karyawan = $_POST['karyawan'];
    $jk = $_POST['jk'];
    $tanggal = $_POST['tanggal'];
    $jabatan = $_POST['jabatan'];
    $pendidikan = $_POST['pendidikan'];
    $status = $_POST['status'];
    $bpjs = $_POST['bpjs'];
    $lembur = $_POST['lembur'];

    /* Jabatan*/

    if ($jabatan == 'Direktur') {
        $gaji = 10000000;
    } elseif ($jabatan == 'Manager') {
        $gaji = 7500000;
    } elseif ($jabatan == 'Sekertaris') {
        $gaji = 5000000;
    } elseif ($jabatan == 'Karyawan') {
        $gaji = 3000000;
    } elseif ($jabatan == 'OB') {
        $gaji = 1500000;
    } else {
        echo 'Jabatan Tidak Ada';
    }

    /* Pendidikan Terakhir*/
    if ($pendidikan == 'sd') {
        $tunjangan = 200000;
    } elseif ($pendidikan == 'smp') {
        $tunjangan = 500000;
    } elseif ($pendidikan == 'sma') {
        $tunjangan = 1000000;
    } elseif ($pendidikan == 's1') {
        $tunjangan = 1500000;
    } elseif ($pendidikan == 's2') {
        $tunjangan = 2000000;
    } else {
        echo 'Masukan Ulang';
    }

    /*Status*/
    if ($status == 'tetap') {
        $bonus = 500000;
    } elseif ($status == 'kontrak') {
        $bonus = 0;
    }

    $vakasi = $lembur * 20000;
    $total_gaji = ($gaji + $tunjangan + $vakasi + $bonus) - $bpjs;

    echo '<center><h3>Struk Gaji Karyawan</center></h3>';
    echo '<hr>';
    echo "<p align='right'>Tanggal : $tanggal</p>";
    echo "<table>

    <tr>
        <td><i><b>Gaji Pokok</b></i><br><hr></td>
    </tr>
    <tr>
        <td>Nama Karyawan &nbsp;</td>
        <td>:</td>
        <td>&nbsp; $karyawan</td>
    </tr>
    <tr>
        <td>Jenis Kelamin &nbsp;</td>
        <td>:</td>
        <td>&nbsp; $jk </td>
    </tr>
    <tr>
        <td>Pendidikan Terakhir &nbsp;</td>
        <td>:</td>
        <td>&nbsp; $pendidikan</td>
    </tr>
    <tr>
        <td>Jabatan &nbsp;</td>
        <td>:</td>
        <td>&nbsp; $jabatan</td>
    </tr>
    <tr>
        <td>Gaji &nbsp;</td>
        <td>:</td>
        <td>&nbsp; $gaji</td>
    </tr>

    <tr>
        <td><br><i><b>Tunjangan</b></i><br><hr></td>
    </tr>

    <tr>
        <td>Tunjangan Pendidikan &nbsp;</td>
        <td>:</td>
        <td>&nbsp; $pendidikan</td>
    </tr>
    <tr>
        <td>Vakasi Lambur &nbsp;</td>
        <td>:</td>
        <td>&nbsp; $vakasi </td>
    </tr>
    <tr>
        <td>Bonus Status Kerja &nbsp;</td>
        <td>:</td>
        <td>&nbsp; $status</td>
    </tr>
    <tr>

    <tr>
        <td><br><i><b>Potongan</b></i><br><hr></td>
    </tr>
    <tr>
        <td>Potongan BPJS &nbsp;</td>
        <td>:</td>
        <td>&nbsp; $bpjs</td>
    </tr>
    <tr>
        <td>Total Gaji &nbsp;</td>
        <td>:</td>
        <td>&nbsp; $total_gaji</td>
    </tr>
</table>";
    echo '<br>';
    echo "<p align='right'>Bendahara : $bendahara</p>";
}
echo '</div>';
?>
    </center> 
    <br>
    <div class="card-footer text-muted" style="max-height:50px">
        <div align="center">&#10148 XI RPL 3 &#10148 </div>
        <div>Copyright &copy; 2021 by Dmsrmdni_</div>
  </div>
  </div>
</div>
          </div>
        </div>
        



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>
