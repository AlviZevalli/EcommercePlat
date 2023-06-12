<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "key: c31cb9924057a91e82e5ee17273c280e"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $data = json_decode($response);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cek Ongkir LokaArt</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body class="dark-mode">
  <nav class="navbar">
    <h1 class="Logo">
      <a href="/LandingPage/index.html">LokaArt</a>
    </h1>

    <ul class="menu-left">
      <li><a href="/EcommercePlat/Home/">New Arrivals</a></li>
      <li><a href="/EcommercePlat/CekOngkir/Ongkir/">Cek Ongkir</a></li>
      <li><a href="">Account</a></li>
      <li><a href=""><i class="fa-solid fa-cart-shopping"></i></a></li>
    </ul>
  </nav>

  <div class="jumbotron text-center dark-mode">
    <h1>Cek Biaya Ongkir</h1>
    <p>Mengecek Ongkos Pengiriman Barang Pembelian</p>
  </div>

  <div class="container dark-mode">
    <div class="row">
      <div class="col-sm-4">
        <h3>Asal Barang</h3>
        <div class="form-group">
          <label for="provinsi-asal">Pilih Provinsi</label>
          <select name="provinsi-asal" id="provinsi-asal" onchange="cariKotaAsal(this.value)" class="form-control dark-mode">
            <option>Pilih Provinsi</option>
            <?php
            foreach ($data->rajaongkir->results as $provinsi) {
              echo '<option value="' . $provinsi->province_id . '">' . $provinsi->province . '</option>';
            }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="kota-asal">Pilih Kota Asal</label>
          <select id="kota-asal" name="kota-asal" class="form-control dark-mode">
            <option>Pilih Kota</option>
          </select>
        </div>
      </div>

      <div class="col-sm-4">
        <h3>Tujuan Barang</h3>
        <div class="form-group">
          <label for="provinsi-tujuan">Pilih Provinsi</label>
          <select name="provinsi-tujuan" id="provinsi-tujuan" onchange="cariKotaTujuan(this.value)" class="form-control dark-mode">
            <option>Pilih Provinsi</option>
            <?php
            foreach ($data->rajaongkir->results as $provinsi) {
              echo '<option value="' . $provinsi->province_id . '">' . $provinsi->province . '</option>';
            }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="kota-tujuan">Pilih Kota Tujuan</label>
          <select id="kota-tujuan" name="kota-tujuan" class="form-control dark-mode">
            <option>Pilih Kota</option>
          </select>
        </div>
      </div>

      <div class="col-sm-4">
        <h3>Berat Dan Kurir</h3>
        <div class="form-group">
          <label for="berat-paket">Berat Paket (gram)</label>
          <input id="berat-paket" type="text" name="berat_paket" class="form-control dark-mode">
        </div>
        <div class="form-group">
          <label for="kurir">Pilih Kurir</label>
          <select name="kurir" id="kurir" class="form-control dark-mode">
            <option value="jne">JNE</option>
            <option value="tiki">TIKI</option>
            <option value="pos">POS Indonesia</option>
          </select>
        </div>
      </div>

      <div class="col-sm-12">
        <h3>Cek Ongkos</h3>
        <div class="form-group">
          <input type="submit" name="Cari" value="Cek Biaya" onclick="cekOngkir()" class="btn btn-primary dark-mode">
        </div>
        <div id="hasil-cek-ongkir"></div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
  <script>
    function cariKotaAsal(id_provinsi) {
      var xmlhttp = new XMLHttpRequest();

      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("kota-asal").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET", "http://localhost/EcommercePlat/CekOngkir/cariKota.php?id_provinsi=" + id_provinsi, true);
      xmlhttp.send();
    }

    function cariKotaTujuan(id_provinsi) {
      var xmlhttp = new XMLHttpRequest();

      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("kota-tujuan").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET", "http://localhost/EcommercePlat/CekOngkir/cariKota.php?id_provinsi=" + id_provinsi, true);
      xmlhttp.send();
    }

    function cekOngkir() {
      var id_kota_asal = document.getElementById("kota-asal").value;
      var id_kota_tujuan = document.getElementById("kota-tujuan").value;
      var berat_paket = document.getElementById("berat-paket").value;
      var kurir = document.getElementById("kurir").value;

      var xmlhttp = new XMLHttpRequest();

      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("hasil-cek-ongkir").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET", "http://localhost/EcommercePlat/CekOngkir/hargaOngkir.php?id_kota_asal=" + id_kota_asal + "&id_kota_tujuan=" + id_kota_tujuan + "&berat_paket=" + berat_paket + "&kurir=" + kurir, true);
      xmlhttp.send();
    }
  </script>
  <script src="https://kit.fontawesome.com/cc52547201.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</body>
</html>
