<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop</title>
    <link rel="stylesheet" href="{{ asset('style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
</head>   
<body>
    <header class="header">
        <h1 class="logo">Coffe <span>Shope</span></h1>

        <nav class="navbar">
            <a href="#">Home</a>
            <a href="#about">About</a>
            <a href="#skill">Product</a>
            <a href="#portfolio">Komentar</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <section id="home" class="home">
        <div class="home-content">
            <h3>Welcome to</h3>
            <h1>Coffee Shope</h1>
            <h3> Great Coffee & Cozy Moments <span class="text"></span></h3>
            <p>At Coffee House, we believe that a great cup of coffee brings people together. </p>
            
            <div class="home-sci">
                <a href="#"><i class="bx bxl-facebook"></i></a>
                <a href="#"><i class="bx bxl-instagram"></i></a>
                <a href="#"><i class="bx bxl-whatsapp"></i></a>
                <a href="#"><i class="bx bxl-tiktok"></i></a>
            </div>
            <a href="#about" class="btn-box">More About Me</a>
            <a href="#about" class="btn-boox">More About Me</a>
        </div>
    </section>

    <section id="about" class="about-section">
        <div class="container">
            <h2 class="section-title">Tentang Kami</h2>
            <div class="about-content">
                <div class="about-image">
                    <img src="{{ asset('img/coffe.jpg')}}" alt="Tentang Coffee Shop">
                </div>
                <div class="about-text">
                    <h3>Selamat Datang di Coffee Shop</h3>
                    <p>Coffee Shop adalah tempat di mana aroma kopi segar dan suasana nyaman berpadu. Kami berdedikasi untuk menyajikan kopi berkualitas tinggi dengan bahan pilihan terbaik.</p>
                    <p>Dengan berbagai varian kopi dari berbagai penjuru dunia, kami menghadirkan pengalaman yang tidak terlupakan bagi para pecinta kopi. Kami percaya bahwa secangkir kopi yang baik dapat memberikan kebahagiaan di setiap tegukan.</p>
                    <p>Kunjungi kami dan nikmati momen istimewa bersama teman, keluarga, atau untuk sekadar menikmati waktu sendiri.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section id="produk" class="produk-section">
        <div class="container">
            <h2 class="section-title">Produk Kami</h2>
            <div class="produk-container">
                <div class="produk-card">
                    <img src="cappuccino.jpg" alt="Cappuccino">
                    <h3>Cappuccino</h3>
                    <p>Rp 25.000</p>
                    <p>Kopi dengan susu berbusa yang lembut.</p>
                    <button class="buy-button">Beli</button>
                </div>
                <div class="produk-card">
                    <img src="espresso.jpg" alt="Espresso">
                    <h3>Espresso</h3>
                    <p>Rp 20.000</p>
                    <p>Kopi pekat dengan rasa kuat.</p>
                    <button class="buy-button">Beli</button>
                </div>
                <div class="produk-card">
                    <img src="latte.jpg" alt="Latte">
                    <h3>Latte</h3>
                    <p>Rp 30.000</p>
                    <p>Perpaduan espresso dan susu yang creamy.</p>
                    <button class="buy-button">Beli</button>
                </div>
                <div class="produk-card">
                    <img src="latte.jpg" alt="Latte">
                    <h3>Latte</h3>
                    <p>Rp 30.000</p>
                    <p>Perpaduan espresso dan susu yang creamy.</p>
                    <button class="buy-button">Beli</button>
                </div>
            </div>
        </div>
    </section>

    <section id="comentar" class="comentar-section">
        <div class="container">
            <h2 class="section-title">Comentar</h2>
            <div class="customer-comments">
                <h3>Customer Reviews</h3>
                <div class="comments-container">
                  <div class="comment">
                    <p>"Great coffee, friendly staff!" - Alex</p>
                  </div>
                  <div class="comment">
                    <p>"The ambiance is amazing, perfect for working." - Sarah</p>
                  </div>
                  <div class="comment">
                    <p>"Loved the iced latte, will definitely return!" - John</p>
                  </div>
                  <!-- Add more comments here -->
                </div>
              </div>
              
        </div>
    </section>

    <section id="contact" class="contact">
        <h2 class="section-title">Contact</h2>
        <form action="#" method="post" class="contact-form">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Pesan:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            
            <button type="submit">Kirim</button>
        </form>
    </section>

</body>
<footer class="footer-section">
    <div class="footer-container">
      <div class="footer-about">
        <h1>Coffee <span>Shop</span></h1>
        <p>Your trusted partner for creative and modern web solutions.</p>
      </div>
      <div class="footer-links">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Product</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class="footer-contact">
        <h3>Contact Us</h3>
        <p>Email: info@daraya.id</p>
        <p>Phone: +62 812-3456-7890</p>
        <p>Address: Jakarta, Indonesia</p>
      </div>
      <div class="footer-social">
        <h3>Follow Us</h3>
        <div class="social-icons">
          <a href="#"><i class="bx bxl-facebook-circle"></i></a>
          <a href="#"><i class="bx bxl-instagram"></i></a>
          <a href="#"><i class="bx bxl-linkedin"></i></a>
          <a href="#"><i class="bx bxl-twitter"></i></a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2025 coffeshope.id | All rights reserved.</p>
    </div>
  </footer>
</html>
