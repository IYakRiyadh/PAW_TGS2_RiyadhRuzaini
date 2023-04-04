<!-- @format -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />

  <link rel="stylesheet" href="style.css" />

  <title>Tugas 2</title>
</head>

<body>
  <div class="container">
    <nav class="navbar">
      <div class="container-lg justify-content-center">
        <a class="navbar-brand" href="#">
          <span>Tugas 2</span>
          <br />
          <span>Pengembangan Aplikasi Web</span>
        </a>
      </div>
    </nav>
  </div>

  <div class="container">
    <form method="GET">
      <div class="row mt-4 justify-content-center">
        <h2 class="judul mb-1 text-center">Form Input</h2>
        <div class="col-md-4">
          <div class="input-group">
            <label class="input-group-text" for="inputGroupSelect01">Makanan</label>
            <select class="form-select" id="makanan" name="makanan">
              <option>Pilih...</option>
              <option id="op" value="Mie Instan">Mie Instan</option>
              <option id="op" value="Mie Ayam">Mie Ayam</option>
              <option id="op" value="Soto Madura">Soto Madura</option>
              <option id="op" value="Sop Sapi">Sop Sapi</option>
            </select>
          </div>
          <div class="input-group form-input2 justify-content-between">
            <label>Jumlah Makanan </label>
            <span> :</span>
            <input type="number" name="jumlah_makanan" id="jumlah_makanan" value="0" />
          </div>
          <div class="input-group form-input3 justify-content-between">
            <label>Harga Makan </label>
            <span>:</span>
            <input id="harga_makan" type="text" name="harga_makan" />
          </div>
          <div id="btn" class="col-md-6 justify-content-center mt-4">
            <input type="submit" name="btn" value="Bayar">
          </div>
        </div>

        <div class="col-md-4">
          <div class="input-group">
            <label class="input-group-text" for="inputGroupSelect01">Minuman</label>
            <select class="form-select" id="minuman" name="minuman">
              <option>Pilih...</option>
              <option id="op" value="Air Mineral" aria-selected="Air Mineral">Air Mineral</option>
              <option id="op" value="Es Teh" aria-selected="Es Teh">Es Teh</option>
              <option id="op" value="Es Jeruk" aria-selected="Es Jeruk">Es Jeruk</option>
              <option id="op" value="Josua" aria-selected="Josua">Josua</option>
            </select>
          </div>
          <div class="input-group form-input2 justify-content-between mb-2">
            <label>Jumlah Minum </label>
            <span> :</span>
            <input type="number" name="jumlah_minum" id="jumlah_minum" value="0" />
          </div>
          <div class="input-group form-input3 justify-content-between">
            <label>Harga Minum </label>
            <span>:</span>
            <input id="harga_minum" type="text" name="harga_minum" />
          </div>
        </div>
      </div>
    </form>

    <div class="container-sm m-3">
      <div class="mydividers"></div>
    </div>

    <?php
    if (isset($_GET['btn'])) {

      $makanan = $_GET['makanan'];
      $minuman = $_GET['minuman'];
      $jumlahMakan = $_GET['jumlah_makanan'];
      $jumlahMinum = $_GET['jumlah_minum'];
      $hargaMakan = $_GET['harga_makan'];
      $hargaMinum = $_GET['harga_minum'];
      $jum = $jumlahMakan + $jumlahMinum;
      $valHarga = $hargaMinum + $hargaMakan;


      echo "<div class='tabel col-md-6 justify-content-center text-center m-auto'>
        <table class='table table-success table-striped-columns' border='1'>
          <thead>
            <tr>
              <th scope='col'>Pesanan</th>
              <th scope='col'>Jumlah</th>
              <th scope='col'>Harga</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>$makanan</td>
              <td>$jumlahMakan</td>
              <td>$hargaMakan</td>
            </tr>
            <tr>
              <td>$minuman</td>
              <td>$jumlahMinum</td>
              <td>$hargaMinum</td>
            </tr>
            <tr>
              <td colspan='2'><strong>Harga Total</strong></td>
              <td>$valHarga</td>
            </tr>
          </tbody>
        </table>
      </div>";
    }
    ?>
  </div>
  <!-- js -->
  <!-- <script src="index.js"></script> -->

  <!-- js Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

<!-- Makanan -->
<!-- value="13500"
value="14000"
value="17000"
value="20000" -->

<!-- minuman -->
<!-- value="5000"
value="3500"
value="4500"
value="7500" -->

</html>