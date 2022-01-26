<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Soal 1</title>
  </head>
  <body
    style="background-image: url(https://fashionsista.co/wallpaper/wallpaper/20201221/wallpaper-hp-warna-hitam-stok-wallpaper-preview.jpg); background-repeat: no-repeat; background-size: cover; color: white">
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
    <br><br>



<!--card-->
<center>
<h2>Syarat Masuk Ke Miko Mall</h2>
<br>
</center>
<center> 
  <div class="row" style="padding-left:490px" >
  <div class="col-sm-6">
    <div class="card" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRoNXP8pvQkpNIZXdiVqq170IgWfOM_T8aYoA&usqp=CAU);">
      <div class="card-body">
            <center>
              
              <!--form-->
              <form method="POST" action="" >
                    <table style="color : black" cellpadding="5px">
                        <tr>
                            <td><b>Nama Anda &nbsp;</b></td>
                            <td>:</td>
                            <td><input type="text" name="nama"></td>
                        </tr>
                        <tr>
                        <td><b>Status Vaksin &nbsp;</b></td>
                            <td>:</td>
                            <td>
                              <select name="vaksin" >
                                <option value="==Sudah Di Vaksin==" >---Sudah Di Vaksin---</option>
                                <option value="==Belum Di Vaksin==">---Belum Di Vaksin---</option>
                            </select>
                        </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                              <input type="submit" class="btn btn-primary" name="simpan" value="Kirim">
                              <input type="reset" class="btn btn-danger" name="reset" value="Hapus">
                            </td>
                        </tr>
                    </table>
              </form>
              
            </center> 

      </div>
    </div>
  </div>
  </center>




<!--Php-->
<?php if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $vaksin = $_POST['vaksin'];

    echo '<center><br><br>';
    if ($vaksin == '==Sudah Di Vaksin==') {
        echo "<table>
    <tr>
        <td>Nama Anda &nbsp;</td>
        <td>:</td>
        <td>&nbsp;$nama</td>
    </tr>
    <tr>
        <td>Status Vaksin &nbsp;</td>
        <td>:</td>
        <td>&nbsp;Sudah Di Vaksin</td>
    </tr>
</table>";
        echo '<br><br>';
        echo '<h3><b><i>Di Izinkan</i></b></h3>';
    } elseif ($vaksin == '==Belum Di Vaksin==') {
        echo "<table>
    <tr>
        <td>Nama Anda &nbsp;</td>
        <td>:</td>
        <td>&nbsp;$nama</td>
    </tr>
    <tr>
        <td>Status Vaksin &nbsp;</td>
        <td>:</td>
        <td>&nbsp;Belum Di Vaksin</td>
    </tr>
</table>";

        echo '<br><br>';
        echo '<h3><b><i>Tidak Di Izinkan</i></b></h3>';

        echo "<a href='https://www.pedulilindungi.id/login' target='_blank'><u>Silahkan Daftar Disini</u>";
    } else {
        echo 'Masukan data kembali';
    }
    echo '</center>';
}
?>











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