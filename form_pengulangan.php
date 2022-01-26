<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Soal 3</title>
  </head>
  <body>

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
    <br><br>



    <!--cards-->
    <div class="card text-center" style="max-width:60%; margin: auto">
  <div class="card-header" style="background-color:lightblue">
  <h3>Form Pengulangan</h3>
  </div>
  <div class="card-body" style="background-image:url(https://p4.wallpaperbetter.com/wallpaper/376/241/272/bloodborne-plain-doll-plain-doll-bloodborne-white-hair-kanya-pyi-hd-wallpaper-preview.jpg)">
    <!--Form-->
    <div>
      
    <center>
        <table>
            <tr>
                <td>
                <ol>
                    <h5>
                    <li>Deret Bilangan Ganjil</li>
                    <li>Segitiga Sama Kaki Terbalik</li>
                    <li>Deret Bilangan Kelipatan 3</li>
                    </h5>
                </ol>
                </td>
        </tr>
        </table>
    </center> 
    <hr>

    <form action="" method="POST">
        <br>
        <center>
            <table>
                <tr>
                    <td><b>Pilih &nbsp;</b></td>
                    <td>:</td>
                    <td> <input type="number" name="pilih" > </td>
                </tr>
                <tr>
                    <td><b>Masukan Angka &nbsp;</b></td>
                    <td>:</td>
                    <td> <input type="number" name="angka" > </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" name="simpan">Kirim</button></td>
                </tr>
            </table>
            <br>
            <hr>
        </center>
        </form>
        
    </table>

    <?php

    echo "<div style='margin: 40px auto ; width:fit-content ; color:black'>";
    if (isset($_POST['simpan'])) {
        $pilih = $_POST['pilih'];
        $angka = $_POST['angka'];

        echo '<center>';
        if ($pilih == 1) {
            echo 'Deret Bilangan Ganjil <br><br>';

            for ($i = 1; $i <= $angka; $i += 2) {
                echo "bilangan ke- $i <br>";
            }
        } elseif ($pilih == 2) {
            echo 'Segitiga Sama Kaki Terbalik<br><br>';

            for ($i = 1; $i <= $angka; ++$i) {
                for ($x = 1; $x <= $i; ++$x) {
                    echo '';
                }
                for ($a = $angka; $a >= $i; --$a) {
                    echo '* ';
                }
                echo '<br>';
            }
        } elseif ($pilih == 3) {
            echo 'Deret Bilangan Kelipatan 3 <br><br>';

            for ($i = 3; $i <= $angka; $i += 3) {
                echo "bilangan ke- $i <br>";
            }
        } else {
            echo 'Pilihan Tidak Tersedia';
        }
    }
    echo '</center>';
    echo '</div>';
    ?>
    </div>
    <div class="card-footer text-muted" style="max-height:50px">
        <div align="center">&#10148 XI RPL 3 &#10148 </div>
        <div>Copyright &copy; 2021 by Dmsrmdni_</div>
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
    </div>
  </body>
</html>