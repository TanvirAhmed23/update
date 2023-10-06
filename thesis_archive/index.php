<!DOCTYPE html>
<html>

<head>
  <title>Thesis Archive</title>
  
  <link rel="stylesheet" href="browse.php">
  <!-- Add Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- Add Bootstrap JS and jQuery (required) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="index.css">
  <script type="module" src="./map.js"></script>
</head>

<body>
  <header>
    <nav>
      <ul>
        <li class="active"><a href="#">Home</a></li>
        <li><a href="browse.php">Browse</a></li>
        <li><a href="upload.php">Upload</a></li>
        <li><a href="about.html">About</a></li>

      </ul>
    </nav>
  </header>
  <main>
    <section class="hero">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/drone_view_of_nstu.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block text-container">
              <h1>Welcome to ICE Thesis Archive</h1>
              <p>At Thesis Archive Central, we are dedicated to preserving and sharing the wealth of academic knowledge that fuels innovation and learning worldwide. Our platform serves as a secure haven for researchers, students, and academic institutions seeking a reliable and accessible repository for theses and research papers.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/Central_Libray_Building.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block text-container">
              <h1>Explore Our Vast Collection and Contribute Your Expertise</h1>
              <p>Dive into a treasure trove of meticulously curated theses spanning a wide range of disciplines and research topics. Join a thriving academic community by sharing your own research contributions and theses, contributing to the collective advancement of knowledge.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/fountain_pen.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block text-container">
              <h1>Empowering the Future of Education</h1>
              <p>Thesis Archive Central is more than just a digital repository; it's a catalyst for academic growth and collaboration. We believe that by connecting scholars, students, and institutions, we can elevate the world's collective understanding of the world.
              Welcome to a place where academia meets innovation, where knowledge knows no boundaries. Explore, engage, and embark on your academic journey with us.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <section class="features">

      <div class="feature">
        <img src="images/book.jpg" alt="Feature 1">
        <h2>Honors Thesis and Projects</h2>
        <p>Find theses on a wide range of topics, from science and engineering to social sciences and humanities.</p>
        <a href="#" class=button>Click Here</a>
      </div>


      <div class="feature">
        <img src="images/up1.jpg" alt="Feature 2">
        <h2>Masters Thesis and Projects</h2>
        <p>Upload your thesis paper in just a few clicks, and make it accessible to researchers and students worldwide.
        </p>
        <a href="#" class=button>Click Here</a>
      </div>

      <div class="feature">
        <img src="images/grey-world-map_1053-431 (1).avif" alt="Feature 3">
        <h2>Published Papers</h2>
        <p>Gain visibility and recognition for your research by making it accessible to a global audience of scholars
          and students.</p>
        <a href="#" class=button>Click Here</a>
      </div>
    </section>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY" defer></script> -->


  </main>
  <footer>
    
      <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.2927268774956!2d91.10019587453291!3d22.791614724909063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3754af712aaac0b7%3A0x4bab3d112f6b6f3f!2sNoakhali%20Science%20and%20Technology%20University!5e0!3m2!1sen!2sbd!4v1685567695518!5m2!1sen!2sbd" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="footer-content">
      <ul class="footer-social-icons">
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
      </ul>

      <div class="footer-info">
        <span>Contact us: example@example.com</span>
        <br>
        <span>Phone: 01782535335</span>
      </div>
    </div>
    <div class="footer-credits">
      &copy; 2023 Thesis Archive. All rights reserved.
    </div>
    <!-- java script -->
    <script src="script.js"></script>
  </footer>

  <script>(g => { var h, a, k, p = "The Google Maps JavaScript API", c = "google", l = "importLibrary", q = "__ib__", m = document, b = window; b = b[c] || (b[c] = {}); var d = b.maps || (b.maps = {}), r = new Set, e = new URLSearchParams, u = () => h || (h = new Promise(async (f, n) => { await (a = m.createElement("script")); e.set("libraries", [...r] + ""); for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]); e.set("callback", c + ".maps." + q); a.src = `https://maps.${c}apis.com/maps/api/js?` + e; d[q] = f; a.onerror = () => h = n(Error(p + " could not load.")); a.nonce = m.querySelector("script[nonce]")?.nonce || ""; m.head.append(a) })); d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n)) })
      ({ key: "AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg", v: "beta" });</script>

</body>

</html>