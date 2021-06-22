<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="dalyko aprasymas" />
    <meta name="robots" content="index, follow" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Exo&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles/style.css" />
    <title>Document</title>
  </head>
  <body>
    <header class="main-header">
      <nav>
        <a href="#" id="logo"> <img src="img/logo.png" alt="" /> </a>
      </nav>
    </header>
    <main>
      <section class="courses-container">
        <h3>Naujausi kursai</h3>
        <div class="cards-container">
          <div class="card">
            <div class="card-img">
              <img src="img/php.jpg" alt="php course image" />
            </div>
            <div class="card-info">
              <a href="#">PHP Pagrindai</a>
              <h4>Autorius</h4>
              <hr />
              <?php
               $mysqli = mysqli_connect("localhost", "root", "", "students");
               if (mysqli_connect_errno()) {
                   exit();
               } else {
                 $sql = "SELECT * from course where ID = 3";
                 $res = mysqli_query($mysqli, $sql);
                 if($res) {
                   while($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                     echo '<p>';
                     echo $newArray['Kurso trumpas aprašymas'];
                     echo '</p>';
                   }
                 } 
               }
              ?>
              <hr />
              <div class="reviews-container">
                <div class="stars">
                  <div class="count">4</div>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
                <div class="comments-container">
                  <i class="fas fa-comment"></i>
                  <?php
                    $mysqli = mysqli_connect("localhost", "root", "", "students");
                    if (mysqli_connect_errno()) {
                        exit();
                    } else {
                      $sql = "SELECT * from course where ID = 1";
                      $res = mysqli_query($mysqli, $sql);
                      if($res) {
                        while($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                          echo $newArray['Kurso populiarumas'];
                        }
                      } 
                    }
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-img">
              <img src="img/css.jpg" alt="css course image" />
            </div>
            <div class="card-info">
              <a href="#">HTML/CSS Įvadas</a>
              <h4>Autorius</h4>
              <hr />
              <?php
               $mysqli = mysqli_connect("localhost", "root", "", "students");
               if (mysqli_connect_errno()) {
                   exit();
               } else {
                 $sql = "SELECT * from course where ID = 1";
                 $res = mysqli_query($mysqli, $sql);
                 if($res) {
                   while($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                     echo '<p>';
                     echo $newArray['Kurso trumpas aprašymas'];
                     echo '</p>';
                   }
                 } 
               }
              ?>
              <hr />
              <div class="reviews-container">
                <div class="stars">
                  <div class="count">4</div>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
                <div class="comments-container">
                  <i class="fas fa-comment"></i>
                  <?php
                    $mysqli = mysqli_connect("localhost", "root", "", "students");
                    if (mysqli_connect_errno()) {
                        exit();
                    } else {
                      $sql = "SELECT * from course where ID = 2";
                      $res = mysqli_query($mysqli, $sql);
                      if($res) {
                        while($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                          echo $newArray['Kurso populiarumas'];
                        }
                      } 
                    }
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-img">
              <img src="img/git.jpg" alt="git course image" />
            </div>
            <div class="card-info">
              <a href="#">Pažintis su GIT</a>
              <h4>Autorius</h4>
              <hr />
              <?php
               $mysqli = mysqli_connect("localhost", "root", "", "students");
               if (mysqli_connect_errno()) {
                   exit();
               } else {
                 $sql = "SELECT * from course where ID = 2";
                 $res = mysqli_query($mysqli, $sql);
                 if($res) {
                   while($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                     echo '<p>';
                     echo $newArray['Kurso trumpas aprašymas'];
                     echo '</p>';
                   }
                 } 
               }
              ?>
              <hr />
              <div class="reviews-container">
                <div class="stars">
                  <div class="count">3</div>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
                <div class="comments-container">
                  <i class="fas fa-comment"></i>
                  <?php
                    $mysqli = mysqli_connect("localhost", "root", "", "students");
                    if (mysqli_connect_errno()) {
                        exit();
                    } else {
                      $sql = "SELECT * from course where ID = 3";
                      $res = mysqli_query($mysqli, $sql);
                      if($res) {
                        while($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                          echo $newArray['Kurso populiarumas'];
                        }
                      } 
                    }
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-img">
              <img src="img/js.jpg" alt="javascript course image" />
            </div>
            <div class="card-info">
              <a href="#">JavaScript Žaliems</a>
              <h4>Autorius</h4>
              <hr />
              <?php
               $mysqli = mysqli_connect("localhost", "root", "", "students");
               if (mysqli_connect_errno()) {
                   exit();
               } else {
                 $sql = "SELECT * from course where ID = 5";
                 $res = mysqli_query($mysqli, $sql);
                 if($res) {
                   while($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                     echo '<p>';
                     echo $newArray['Kurso trumpas aprašymas'];
                     echo '</p>';
                   }
                 } 
               }
              ?>
              <hr />
              <div class="reviews-container">
                <div class="stars">
                  <div class="count">5</div>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <div class="comments-container">
                  <i class="fas fa-comment"></i>
                  <?php
                    $mysqli = mysqli_connect("localhost", "root", "", "students");
                    if (mysqli_connect_errno()) {
                        exit();
                    } else {
                      $sql = "SELECT * from course where ID = 4";
                      $res = mysqli_query($mysqli, $sql);
                      if($res) {
                        while($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                          echo $newArray['Kurso populiarumas'];
                        }
                      } 
                    }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="form-container">
        <h3>Sekite Naujienas</h3>
        <p>
          Norite gauti pranešimus apie naujus kursus? Užsisakykite mūsų
          naujienlaiškį!
        </p>
        <div class="success-section"></div>
        <form action="">
          <label for="name">Vardas</label>
          <input type="text" id="firstname" name="firstname" />
          <label for="email">El. paštas</label>
          <input type="email" id="email" name="email" />
          <button type="submit" id="submit-btn">Užsisakyti</button>
        </form>
      </section>
    </main>
    <footer>
      <p>&copy; 2021 Airidas Smirnovas</p>
    </footer>
      <div class="stars-modal hidden">
        <form action="stars.php" method="POST">
          <label for="selectStars">Įvertinimas:</label>
          <select name="starsSelext" id="starsSelect">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
          <button type="submit" id="starsSubmit">pateikti</button>
        </form>
        <div class="modal-exit">&times</div>
      </div>
      <div class="shadow hidden"></div>
    <script
      src="https://kit.fontawesome.com/02b15b49ba.js"
      crossorigin="anonymous"
    ></script>
    <script src="js/script.js"></script>
  </body>
</html>
