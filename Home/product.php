<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>eCommerce Product Detail</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="productdetail.css">
</head>

<body>
<nav class="navbar">
    <h1 class="Logo">
      <a href="/LandingPage/index.html">LokaArt</a>
    </h1>

    <ul class="menu-left">
      <li><a href="/EcommercePlat/Home/">New Arrivals</a></li>
      <li><a href="/EcommercePlat/CekOngkir/Ongkir.php">Cek Ongkir</a></li>
      <li><a href="">Account</a></li>
      <li><a href=""><i class="fa-solid fa-cart-shopping"></i></a></li>
    </ul>
  </nav>

    <section class="content">
    <?php
    // Function to get product details by ID
    function getProductDetails($productId) {
        // Sample product details array
        $products = array(
            '1' => array(
                'name' => 'Vas Emas Model Ayam',
                'description' => 'Vas emas model emas yang dibuat dengan bahan kaca',
                'price' => 'Rp 150.000',
                'image' => 'Gambar/1.png',
                'thumbnail' => 'Gambar/1.png'
            ),
            '2' => array(
                'name' => 'Vas Kaca Merah',
                'description' => 'Vas kaca merah dengan motif bunga-bunga',
                'price' => 'Rp 125.000',
                'image' => 'Gambar/2.png',
                'thumbnail' => 'Gambar/2.png'
            ),
            '2' => array(
                'name' => 'Vas Kaca Merah',
                'description' => 'Vas kaca merah dengan motif bunga-bunga',
                'price' => 'Rp 125.000',
                'image' => 'Gambar/2.png',
                'thumbnail' => 'Gambar/2.png'
            ),
            '3' => array(
                'name' => 'Vas Tanah Liat',
                'description' => 'Vas dengan bahan tanah liat dibuat oleh tangan asli seniman Indonesia',
                'price' => 'Rp 100.000',
                'image' => 'Gambar/3.png',
                'thumbnail' => 'Gambar/3.png'
            ),
            '4' => array(
                'name' => 'Gelas Bambu',
                'description' => 'Salah satu gelas berbahan bambu tradisional',
                'price' => 'Rp 50.000',
                'image' => 'Gambar/4.png',
                'thumbnail' => 'Gambar/4.png'
            ),
            '5' => array(
                'name' => 'Satu Set Teko Teh dan Gelas',
                'description' => 'Satu set teko teh dengan berbahan dasar tanah liat',
                'price' => 'Rp 120.000',
                'image' => 'Gambar/5.png',
                'thumbnail' => 'Gambar/5.png'
            ),
            '6' => array(
                'name' => 'Vas Keramik Dengan Motif Tumbuhan',
                'description' => 'Vas besar dengan motif tanaman',
                'price' => 'Rp 150.000',
                'image' => 'Gambar/6.png',
                'thumbnail' => 'Gambar/6.png'
            ),
            '7' => array(
                'name' => 'Vas Kaca Putih Limited Edition Special Anniversary 10Th Paul Kusuma',
                'description' => 'Vas dengan bahan kaca khusus yang dibuat langsung oleh tangan asli Paul Kusuma sebagai tanda kasih sayang',
                'price' => 'Rp 1.000.000',
                'image' => 'Gambar/shooping.png',
                'thumbnail' => 'Gambar/shooping.png'
            ),
            // Add more products as needed
        );

        // Check if the product ID exists in the array
        if (isset($products[$productId])) {
            return $products[$productId];
        } else {
            return false; // Product not found
        }
    }

    // Check if the product ID is provided as a query parameter
    if (isset($_GET['id'])) {
        $productId = $_GET['id'];

        // You can use the product ID to fetch the product details from your database or any other data source
        $product = getProductDetails($productId);

        // Display the product details
        if ($product) {
            echo '
            <div class="container">
                <div class="card">
                    <div class="container-fliud">
                        <div class="wrapper row">
                            <div class="preview col-md-6">
                                
                                <div class="preview-pic tab-content">
                                  <div class="tab-pane active" id="pic-1"><img src="' . $product['image'] . '" /></div>
                                  <!-- Add more tab-panes for additional images if needed -->
                                </div>
                                <ul class="preview-thumbnail nav nav-tabs">
                                  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="' . $product['thumbnail'] . '" /></a></li>
                                  <!-- Add more list items for additional thumbnails if needed -->
                                </ul>
                                
                            </div>
                            <div class="details col-md-6">
                                <h3 class="product-title">' . $product['name'] . '</h3>
                                <div class="rating">
                                    <div class="stars">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <span class="review-no">41 reviews</span>
                                </div>
                                <p class="product-description">' . $product['description'] . '</p>
                                <h4 class="price">current price: <span>' . $product['price'] . '</span></h4>
                                <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                                <h5 class="sizes">sizes:
                                    <span class="size" data-toggle="tooltip" title="small">s</span>
                                    <span class="size" data-toggle="tooltip" title="medium">m</span>
                                    <span class="size" data-toggle="tooltip" title="large">l</span>
                                    <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
                                </h5>
                                <h5 class="colors">colors:
                                    <span class="color orange" data-toggle="tooltip" title="Not In store"></span>
                                    <span class="color green"></span>
                                    <span class="color blue"></span>
                                </h5>
                                <div class="action">
                                    <button class="add-to-cart btn btn-default" type="button">add to cart</button>
                                    <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ';
        } else {
            echo '<p>Product not found.</p>';
        }
    } else {
        echo '<p>No product ID provided.</p>';
    }
    ?>
    </section>

</body>
</html>
