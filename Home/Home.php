<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Ecommerce</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <h1 class="Logo">
            <a href="/EcommercePlat/LandingPage/">LokaArt</a>
          </h1>
        <ul class="menu">
            <li><a href="" class="active"></a></li>
            <li><a href="" >New Arrivals</a></li>
            <li><a href="/EcommercePlat/CekOngkir/Ongkir.php" >Cek Ongkir</a></li>
            <li><a href="" >Account</a></li>
            <li><a href=""><i class="fa-solid fa-cart-shopping"></i></a></li>
        </ul>

        <div class="menu-btn">
            <i class="fa fa-bars"></i>
        </div>
    </nav>

    <section class="content">
        <div class="text-container">
            <div class="text">
                <h1>New Arrivals Art</h1>
                <p>Dapatkan Produk Kesenian Terbaru Dari Para Seniman Indonesia</p>
                <button class="btn">Beli Sekarang</button>
            </div>
            <div class="image-container">
                <img src="gambar/shopping.png" alt="Shopping Image">
            </div>
        </div>
    </section>
    
    <h1 class="pheading">Our Hot Sale Art Right Now</h1>

    <section class="sec">
        <div class="products">
            <!--Card 1-->
            <div class="card">
                <div class="img"><img src="Gambar/1.png" alt=""></div>
                <div class="title">Vas Emas Model Ayam</div>
                <div class="desc">Vas emas model emas yang dibuat dengan bahan kaca</div>
                <div class="box">
                    <div class="harga">Rp.150.000</div>
                    <button class="btn" onclick="redirectToProductDetail('1')">Beli</button>
                </div>
            </div>

            <!--Card 2-->
            <div class="card">
                <div class="img"><img src="Gambar/2.png" alt=""></div>
                <div class="title">Vas Kaca Merah</div>
                <div class="desc">Vas kaca merah dengan motif bunga-bunga </div>
                <div class="box">
                    <div class="harga">Rp.125.000</div>
                    <button class="btn" onclick="redirectToProductDetail('2')">Beli</button>
                </div>
            </div>
            
            <!--Card 3-->
            <div class="card">
                <div class="img"><img src="Gambar/3.png" alt=""></div>
                <div class="title">Vas Tanah Liat</div>
                <div class="desc">Vas dengan bahan tanah liat dibuat oleh tangan asli seniman Indonesia</div>
                <div class="box">
                    <div class="harga">Rp.100.000</div>
                    <button class="btn" onclick="redirectToProductDetail('3')">Beli</button>
                </div>
            </div>

            <!--Card 4-->
            <div class="card">
                <div class="img"><img src="Gambar/4.png" alt=""></div>
                <div class="title">Gelas Bambu</div>
                <div class="desc">Salah satu gelas berbahan bambu tradisional</div>
                <div class="box">
                    <div class="harga">Rp.50.000</div>
                    <button class="btn" onclick="redirectToProductDetail('4')">Beli</button>
                </div>
            </div>


            <!--Card 5-->
            <div class="card">
                <div class="img"><img src="Gambar/5.png" alt=""></div>
                <div class="title">Satu Set Teko Teh dan Gelas</div>
                <div class="desc">Satu set teko teh dengan berbahan dasar tanah liat</div>
                <div class="box">
                    <div class="harga">Rp.120.000</div>
                    <button class="btn" onclick="redirectToProductDetail('5')">Beli</button>
                </div>
            </div>


            <!--Card 6-->
            <div class="card">
                <div class="img"><img src="Gambar/6.png" alt=""></div>
                <div class="title">Vas Keramik Dengan Motif Tumbuhan</div>
                <div class="desc">Vas besar dengan motif tanaman</div>
                <div class="box">
                    <div class="harga">Rp.150.000</div>
                    <button class="btn" onclick="redirectToProductDetail('6')">Beli</button>
                </div>
            </div>

            <!--Card 7-->
            <div class="card">
                <div class="img"><img src="Gambar/shopping.png" alt=""></div>
                <div class="title">Vas Kaca Putih Limited Edition Special Anniversary 10Th Paul Kusuma</div>
                <div class="desc">Vas dengan bahan kaca khusus yang dibuat langsung oleh tangan asli Paul Kusuma sebagai tanda kasih sayang</div>
                <div class="box">
                    <div class="harga">Rp.1.000.000</div>
                    <button class="btn" onclick="redirectToProductDetail('7')">Beli</button>
                </div>
            </div>
        </div>
    </section>
    <script src="https://kit.fontawesome.com/cc52547201.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="script.js"></script>
    
    <script>
        function redirectToProductDetail(productId) {
            // Assuming you want to redirect to a PHP file with the product ID as a query parameter
            window.location.href = 'product.php?id=' + productId;
        }
    </script>
    </script>
</body>
</html>
