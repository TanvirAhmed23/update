<!DOCTYPE html>
<html>

<head>
  <title>Thesis Archive</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <link rel="stylesheet" href="brouse.css">
  <script type="module" src="./map.js"></script>
  <script src="drop.js"></script>
</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="#">Browse</a></li>
        <li><a href="upload.php">Upload</a></li>
        <li><a href="#">About</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section class="hero">
      <h1>Browse by Topics</h1>
      <div class="search-container">
        <form method="GET">
          <input type="text" name="title" placeholder="Search PDF files...">
          <button type="submit" class="button"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </section>

    <h1 class="h">Archives</h1>

    <!-- data show -->
    <section>
      <?php
      include("db.php");

      if (isset($_GET['title'])) {
        $title = $_GET['title'];

        // Split the search query into individual words
        $keywords = explode(" ", $title);

        // Construct the SQL query with multiple conditions
        $conditions = [];
        foreach ($keywords as $keyword) {
          $conditions[] = "title LIKE '%$keyword%'";
        }
        $query = "SELECT * FROM storage WHERE " . implode(" OR ", $conditions);
        $result = mysqli_query($conn, $query);

        if ($result->num_rows > 0) {
          echo '<div class="pdf-list">';
          while ($row = mysqli_fetch_assoc($result)) {
            $file_path = "pdfs/" . $row['file'];
            $fullPath = "http://" . $_SERVER['HTTP_HOST'] . $file_path;

            echo '<div class="pdf-card">';
            echo '<div class="pdf-content">';
            echo '<a href="' . $file_path . '" target="_blank" class="pdf-title">' . $row['title'] . '</a>';
            echo '<p class="pdf-author"><b>Author:</b> ' . $row['author'] . '</p>';
            
            echo '<p class="pdf-dept"><b>Department:</b> ' . $row['dept'] . '</p>';
            echo '<p class="pdf-author"><b>ID:<b/>' . $row['roll'] . '</p>';
            echo '<p class="pdf-batch"><b>Batch:</b> ' . $row['batch'] . '</p>';
            echo '<button class="dropdown-btn" onclick="toggleAbstract(this)">Show Abstract</button>';
            echo '<p class="pdf-description abstract" style="display: none;"><b>Abstract:</b> ' . $row['description'] . '</p>';
            echo '<a href="' . $file_path . '" download="' . $row['title'] . '.pdf" style="display: block; margin-top: 10px;"><i class="fas fa-download"></i> click here to download</a>';
            echo '</div>';
            echo '</div>';
          }
          echo '</div>';
        } else {
          echo "No PDF files found";
        }
      } else {
        // Fetch all PDF files from the database
        $sql = "SELECT * FROM storage";
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
          echo '<div class="pdf-list">';
          while ($row = mysqli_fetch_assoc($result)) {
            $file_path = "pdfs/" . $row['file'];
            $fullPath = "http://" . $_SERVER['HTTP_HOST'] . $file_path;

            echo '<div class="pdf-card">';
            echo '<div class="pdf-content">';
            echo '<a href="' . $file_path . '" target="_blank" class="pdf-title">' . $row['title'] . '</a>';
            echo '<p class="pdf-author"><b>Author:</b> ' . $row['author'] . '</p>';
            
            echo '<p class="pdf-dept"><b>Department:</b> ' . $row['dept'] . '</p>';
            echo '<p class="pdf-author"><b>ID:<b/>' . $row['roll'] . '</p>';
            echo '<p class="pdf-batch"><b>Batch:</b> ' . $row['batch'] . '</p>';
            echo '<button class="dropdown-btn" onclick="toggleAbstract(this)">Show Abstract</button>';
            echo '<p class="pdf-description abstract" style="display: none;"><b>Abstract:</b> ' . $row['description'] . '</p>';
            echo '<a href="' . $file_path . '" download="' . $row['title'] . '.pdf" style="display: block; margin-top: 10px;"><i class="fas fa-download"></i> click here to download</a>';
            echo '</div>';
            echo '</div>';
          }
          echo '</div>';
        } else {
          echo "No PDF files found";
        }
      }
      ?>
    </section>
  </main>
  <script>
    function toggleAbstract(btn) {
      var abstract = btn.nextElementSibling;
      abstract.style.display = abstract.style.display === "none" ? "block" : "none";
      btn.innerText = abstract.style.display === "none" ? "Show Abstract" : "Hide Abstract";
    }
  </script>
</body>
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
</html>
