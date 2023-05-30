<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Pusat Konser</title>

      <link rel="shortcut icon" href="layouts/assets/img/logo.ico" type="image/x-icon">
      <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>

<body>

      <aside>

            <header>
                  <img src="layouts/assets/img/logo.png" class="brand">
                  <div class="user">Welcome To Konser Asyik</div>
            </header>

            <nav>
                  <ul>
                        <li>
                              <a href="index.php">
                                    <img class="icon" src="layouts/assets/img/menus.png" alt=""> BERANDA
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=artis_tampil">
                                    <img class="icon" src="layouts/assets/img/menus.png" alt=""> ARTIS
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=tiket_tampil">
                                    <img class="icon" src="layouts/assets/img/menus.png" alt=""> TIKET
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=sponsor_tampil">
                                    <img class="icon" src="layouts/assets/img/menus.png" alt=""> SPONSOR
                              </a>
                        </li>
                  </ul>
            </nav>

      </aside>

      <main>
            <article>
                  <?php

                  require_once "vendor/autoload.php";
                  require_once "inc/Koneksi.php";

                  if (isset($_GET['hal'])) {
                        require $_GET['hal'] . ".php";
                  } else {
                        require "main.php";
                  }
                  ?>
            </article>

            <footer>
                  Copyright &copy; 2023. Designed by M.Hafi Isfahan I.
            </footer>
      </main>

</body>

</html>