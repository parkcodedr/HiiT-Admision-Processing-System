<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <link href="images/bsulogo.png" rel="icon">

  <link href="css/all.css" rel="stylesheet">
  <title>Comfort University of Technology| Home</title>
</head>

<body>

  <div class="container-fluid image-header">
    <a href="#" class="navbar-brand ">
      <img src="images/bsulogo.png" class="img-fluid">
    </a>
    <h2 class=" text-white text-center">COMFORT UNIVERSITY OF TECHNOLOGY</h2>
    <h6 class="text-center h4">P.M.B 2002, ABUJA FCT</h6>
  </div>
  <?php
  include_once('layout/nav.php');
  ?>
  <main class="container">
    <div class="row">
      <section class="col-md-8">
        <div id="carouselSlider" class="carousel slide mt-2" data-bs-ride="carousel">

          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselSlider" data-bs-slide-to="0" aria-current="true" class="active">
            </button>

            <button type="button" data-bs-target="#carouselSlider" data-bs-slide-to="1" aria-label="Slide 2">

            </button>
            <button type="button" data-bs-target="#carouselSlider" data-bs-slide-to="2" aria-label="Slide 3">

            </button>
            <button type="button" data-bs-target="#carouselSlider" data-bs-slide-to="3" aria-label="Slide 4">

            </button>
            <button type="button" data-bs-target="#carouselSlider" data-bs-slide-to="4" aria-label="Slide 5">

            </button>
          </div>

          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/slide6.jpg" class="d-block w-100 img-thumbnail" alt="slide 1">
            </div>
            <div class="carousel-item">
              <img src="images/slide9.jpg" class="d-block w-100 img-thumbnail" alt="slide 2">
            </div>
            <div class="carousel-item">
              <img src="images/slide10.jpg" class="d-block w-100 img-thumbnail" alt="slide 3">
            </div>
            <div class="carousel-item">
              <img src="images/slide11.jpg" class="d-block w-100 img-thumbnail" alt="slide 2">
            </div>
            <div class="carousel-item">
              <img src="images/slide12.jpg" class="d-block w-100 img-thumbnail" alt="slide 2">
            </div>


          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>

          <button class="carousel-control-next" type="button" data-bs-target="#carouselSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>

        </div>



      </section>
      <aside class="col-md-4 ">
        <p class="h4 text-center primary-color">Portal News</p>
        <ul class="list-group">
          <li class="list-group-item">
            <a href="#">2021/2022 Addmission List</a>
          </li>
          <li class="list-group-item">
            <a href="#">2021/2022 Academic Calender</a>
          </li>
          <li class="list-group-item">
            <a href="#">2019/2020 Convocation Ceremony</a>
          </li>
          <li class="list-group-item">
            <a href="#">School fees E-Payment portal launched</a>
          </li>
          <li class="list-group-item">
            <a href="#">2022/2023 Post UTME Time table</a>
          </li>
        </ul>

      </aside>

      <div class="banner bg-light mt-5 p-5 ">
        <div class="row">
          <div class="col-md-3">
            <h4 class="primary-color">University Life</h4>
            <p class="text-muted">Overall in here</p>
          </div>
          <div class="col-md-3">
            <h4 class="primary-color">Graduation</h4>
            <p class="text-muted">Getting a Degree</p>
          </div>
          <div class="col-md-3">
            <h4 class="primary-color">Athletics</h4>
            <p class="text-muted">Sport Clubs</p>
          </div>
          <div class="col-md-3">
            <h4 class="primary-color">Social Life</h4>
            <p class="text-muted">Overall in here</p>
          </div>
        </div>
      </div>
      <section class="principals row p-4">

        <div class="col-md-4">
          <div class="card" style="width:18rem;">
            <div class="card-img-top">
              <img class="img-fluid" src="images/vc.jpg">
            </div>

            <div class="card-body">
              <h6 class="card-title">
                Vice Chancellor
              </h6>
              <div class="card-text">
                Prof Gregory Iyke Ibe, PhD, OFR
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-4">
          <div class="card" style="width:18rem;">
            <div class="card-img-top">
              <img class="img-fluid" src="images/dva.jpg">
            </div>

            <div class="card-body">
              <h6 class="card-title">
                Deputy Vice Chancellor Academic
              </h6>
              <div class="card-text">
                Prof. Florence Banku Obi
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card" style="width:18rem;">
            <div class="card-img-top">
              <img class="img-fluid" src="images/dvc.jpg">
            </div>

            <div class="card-body">
              <h6 class="card-title">
                Deputy Vice Chancellor Admin
              </h6>
              <div class="card-text">
                Professor Kabiru Bala
              </div>
            </div>
          </div>
        </div>

      </section>

      <div class=" newsletter row bg-light p-4 mb-5">
        <div class="col-md-4">
          <p class="h3 primary-color">Sign up for our newsletter</p>
        </div>
        <div class="col-md-8">
          <div class="input-group">
            <input type="text" class="form-control p-3" placeholder="Enter Your Email">
            <button class="btn bg-main text-white p-3">Sign Up</button>
          </div>
        </div>
      </div>


    </div>
  </main>
  <?php include_once('layout/footer.php'); ?>

  <script type="text/javascript" src="js/bootstrap.bundle.min.js">
  </script>
</body>

</html>