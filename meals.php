<?php
require_once('component.php');
require_once('createDB.php');
$database = new CreateDb(dbname: "productDB", tablename: "productTB");
?>


<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="en">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Add to Cart</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
  <meta name="description" content="This is an example dashboard created using build-in elements and components.">
  <meta name="msapplication-tap-highlight" content="no">
  <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/81f8329302.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
</head>

<!-- custom css -->
<link rel="stylesheet" href="./styles/index.css">
<link rel="stylesheet" href="./styles/style.css">
<link rel="stylesheet" href="./styles/preloader.css">
<link rel="stylesheet" href="./styles/userstyle.css">

<body>

  <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    <div class="app-header header-shadow">
      <div class="app-header__logo">
        <h2 class="text-center">Add to Cart</h2>
      </div>
 
      <div class="app-header__content">
        <div class="app-header-left">
          <div class="search-wrapper">
            <div class="input-holder"></div>
          </div>
          <ul class="header-menu nav">
          </ul>
        </div>
      </div>
    </div>

    <div class="app-main">
      <div class="app-sidebar sidebar-shadow">
        
        <div class="app-header__logo">
          <div class="logo-src"></div>
          <div class="header__pane ml-auto">
            <div>
              <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
          </div>
        </div>

        <div class="app-header__mobile-menu">
          <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
          </div>
        </div>

        <div class="app-header__menu">
          <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
              <span class="btn-icon-wrapper">
                <i class="fa fa-ellipsis-v fa-w-6"></i>
              </span>
            </button>
          </span>
        </div>

        <div class="scrollbar-sidebar">
          <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
              <li class="app-sidebar__heading">Categories</li>
              <li>
                <a href="meals.php" class="mm-active">
                  <i class="fa-solid fa-shop"></i>Shop
                </a>
              </li>   
            </ul>
          </div>
        </div>
      </div>

      <div class="app-main__outer">
        <div class="app-main__inner">
          <div class="app-page-title">
            <main class="main-container">
              <div class="products" id="products">
                <?php
                    $result = $database->getData();
                    while ($row = mysqli_fetch_assoc($result)) {
                      component($row['product_name'], $row['product_price'], $row['product_image']);
                    }
                ?>
              </div>

              <section class="section">
                <h2 class="text-center">Cart</h2>
                <div class="cart"></div>
              </section>

            </main>
          </div>
        </div>
      </div>

</body>
<script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js"></script>
<script type="text/javascript" src="./JS/main.js"></script>

</html>

