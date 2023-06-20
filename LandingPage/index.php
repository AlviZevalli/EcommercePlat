

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="parallax.js/parallax.js/parallax.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <!--Header-->
    <header id="header" class="parallax-window">
      <div class="cursor"></div>
      <div class="cursor2"></div>
      <div class="header-slider">
        <img src="gambar/gambarHeader1.jpg" alt="Slide 1">
        <img src="gambar/gambarHeader2.jpg" alt="Slide 1">
        <img src="gambar/gambarHeader3.jpg" alt="Slide 1">
      </div>
      <nav>
        <h1 class="Logo">
          <a href="/">LokaArt</a>
        </h1>
        <a href="/EcommercePlat/Login/SignIn.php" class="btnSignup">Sign Up</a>
      </nav>
      <div class="headertitle fade">
        <div class="animated-text">
          Art | <span></span>
          <p>"Menemukan Kesenian dalam Setiap Sudut"</p>
      </div>
      </div>     
      <div class="headerbottom">
        <p id="currentDate" class="tanggal" class="bulan"></p>
        <ul class="socialmedia">
          <li><a href="">Instagram.</a></li>
          <li><a href="">GitHub.</a></li>
        </ul>
      </div>
    </header>

    <!--About-->
    <section id="about">
      <div class="aboutcontainer">
        <div class="image">
          <div class="image-box">
            <img src="gambar/Gelas.jpg" alt="image">
            <h2 class="Jdl">Gelas</h2>
          </div>
            <div class="image-box">
            <img src="gambar/Guci.jpg" alt="image">
            <h2 class="Jdl">Guci</h2>
          </div>
            <div class="image-box">
            <img src="gambar/patung.jpg" alt="image">
            <h2 class="Jdl">Patung</h2>
          </div>
            <div class="image-box">
            <img src="gambar/tas.jpg" alt="image">
            <h2 class="Jdl">Tas</h2>
          </div>
        </div>
        <div class="aboutinfo">
          Selamat datang di dunia seni yang penuh keajaiban! 
          Rasakan keindahan dan inovasi dalam setiap goresan 
          karya seni yang luar biasa ini. Jadilah bagian dari
           perjalanan yang memukau ini, terhubunglah dengan keunikan 
           dan keindahan ini. Mari bergandengan tangan dalam petualangan
           seni yang penuh kesenian!
        </div>
      </div>
    </section>

    <!--Footer-->
    <footer>
      Karya Seni Lokal Yang
      <h2>Beragam</h2>
    </footer>
    <script>
      var cursor = document.querySelector(".cursor");
      var cursor2 = document.querySelector(".cursor2");
      document.addEventListener("mousemove",function(e){
        cursor.style.cssText = cursor2.style.cssText = "left: " + e.clientX + "px; top: " + e.clientY + "px;";
      });
    </script>
</body>
</html>
