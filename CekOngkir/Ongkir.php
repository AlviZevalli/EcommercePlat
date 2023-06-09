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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <style>
      .input-group-append {
        margin-left: 10px;
      }
    </style>
  </head>
  <body>

  <div class="jumbotron text-center">
    <h1>Cek Biaya Ongkir</h1>
    <p>Mengecek Ongkos Pengiriman Barang Pembelian</p> 
  </div>
    
  <div class="container">
    <div class="row">

      <div class="col-sm-4">
        <h3>Asal Barang</h3>
        <p>Pilih Provinsi
        <select name="provinsi-asal" onchange="cariKotaAsal(this.value)" class="form-control">
          <option>Pilih Provinsi</option>
          <?php
            foreach ($data->rajaongkir->results as $provinsi) {
              echo '<option value="'.$provinsi->province_id.'">'.$provinsi->province.'</option>';
            }
          ?>
        </select>
        </p>
        <p>Pilih Kota Asal <br>
        <select id="kota-asal" name="kota-asal" class="form-control">
          <option>Pilih Kota</option>
        </select>
        </p>
      </div>

      <div class="col-sm-4">
        <h3>Tujuan Barang</h3>
        <p>Pilih Provinsi
        <select name="provinsi-tujuan" onchange="cariKotaTujuan(this.value)" class="form-control">
          <option>Pilih Provinsi</option>
          <?php
            foreach ($data->rajaongkir->results as $provinsi) {
              echo '<option value="'.$provinsi->province_id.'">'.$provinsi->province.'</option>';
            }
          ?>
        </select>
        </p>
        <p>Pilih Kota Tujuan<br>
        <select id="kota-tujuan" name="kota-tujuan" class="form-control">
          <option>Pilih Kota</option>
        </select>
        </p>
      </div>

      <div class="col-sm-4">
        <h3>Berat Dan Kurir</h3>
        <p>
          Berat Paket (gram): <br/>
          <input id="berat_paket" type="text" name="berat_paket">
        </p>
        <p>
          Pilih Kurir: <br/>
          <select name="kurir" id="kurir" class="form-control">
            <option value="jne">JNE</option>
            <option value="tiki">TIKI</option>
            <option value="pos">POS Indonesia</option>
          </select>
        </p>
      </div>

      <div class="col-sm-12">
        <h3>Cek Ongkos</h3>
        <p>
         <input type="submit" name="Cari" value="Cek Biaya" onclick="cekOngkir()">
        </p> 
        
        <div id="hasil-cek-ongkir">...</div>
        
      </div>


    </div>
  </div>

  <script>

    function cariKotaAsal(id_provinsi){
      var xmlhttp = new XMLHttpRequest();

      xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
          document.getElementById("kota-asal").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET", "http://localhost/EcommercePlat/CekOngkir/cariKota.php?id_provinsi="+id_provinsi, true);
      xmlhttp.send();
    } 

    function cariKotaTujuan(id_provinsi){
      var xmlhttp = new XMLHttpRequest();

      xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
          document.getElementById("kota-tujuan").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET", "http://localhost/EcommercePlat/CekOngkir/cariKota.php?id_provinsi="+id_provinsi, true);
      xmlhttp.send();
    } 

    function cekOngkir(){
      var id_kota_asal = document.getElementById("kota-asal").value;
      var id_kota_tujuan = document.getElementById("kota-tujuan").value;
      var berat_paket = document.getElementById("berat_paket").value;
      var kurir = document.getElementById("kurir").value;

      var xmlhttp = new XMLHttpRequest();

      xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
          document.getElementById("hasil-cek-ongkir").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET", "http://localhost/EcommercePlat/CekOngkir/hargaOngkir.php?id_kota_asal="+id_kota_asal+"&id_kota_tujuan="+id_kota_tujuan+"&berat_paket="+berat_paket+"&kurir="+kurir, true);
      xmlhttp.send();
    }

  </script>
  </body>
</html>
