<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

$posts = array();
$postsTitle = 'Recent Posts';

if (isset($_GET['t_id'])) {
  $posts = getPostsByTopicId($_GET['t_id']);
  $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
} else if (isset($_POST['search-term'])) {
  $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
  $posts = searchPosts($_POST['search-term']);
} else {
  $posts = getPublishedPosts();
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Kunjungi Sodonghilir</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="../assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="temp.css">

    <!-- javascript -->
    <script src="../assets/vendors/jquery.min.js"></script>
    <script src="../assets/owlcarousel/owl.carousel.js"></script>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">Semilir Sodonghilir</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link active" href="#tentang-sodonghilir">Tentang Sodonghilir</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="pricing.html">Wisata</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="#review">Review</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog-list.html">Blog Post</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="contact-us.html">Kontak</a></li> -->
                </ul>
            </div>
        </div>
    </nav>
    
    <main class="page landing-page">
        <div class="container">
            <!-- Trigger the modal with a button -->
            <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Large Modal</button> -->
          
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <!-- <h4 class="modal-title">Modal Header</h4> -->
                  </div>
                  <div class="modal-body">
                    <!-- <p>This is a large modal.</p> -->
                    <div class="container">
                        <div class="heading">
                            <h2>Wisata</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="card border-0"><a href="wisata-detail.html"><img class="card-img-top scale-on-hover" src="assets/img/index-sodonghilir/Sodonghilir.png" alt="Card Image"></a>
                                    <div class="card-body">
                                        <h6><a href="wisata-detail.html">Curug Gedus</a></h6>
                                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="card border-0"><a href="#"><img class="card-img-top scale-on-hover" src="assets/img/nature/image2.jpg" alt="Card Image"></a>
                                    <div class="card-body">
                                        <h6><a href="#">Lorem Ipsum</a></h6>
                                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="card border-0"><a href="#"><img class="card-img-top scale-on-hover" src="assets/img/nature/image3.jpg" alt="Card Image"></a>
                                    <div class="card-body">
                                        <h6><a href="#">Lorem Ipsum</a></h6>
                                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="card border-0"><a href="#"><img class="card-img-top scale-on-hover" src="assets/img/nature/image4.jpg" alt="Card Image"></a>
                                    <div class="card-body">
                                        <h6><a href="#">Lorem Ipsum</a></h6>
                                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="card border-0"><a href="#"><img class="card-img-top scale-on-hover" src="assets/img/nature/image5.jpg" alt="Card Image"></a>
                                    <div class="card-body">
                                        <h6><a href="#">Lorem Ipsum</a></h6>
                                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="card border-0"><a href="#"><img class="card-img-top scale-on-hover" src="assets/img/nature/image6.jpg" alt="Card Image"></a>
                                    <div class="card-body">
                                        <h6><a href="#">Lorem Ipsum</a></h6>
                                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Map Modal -->
          <div class="modal fade" id="mapModal" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <!-- <h4 class="modal-title">Modal Header</h4> -->
                </div>
                <div class="modal-body">
                  <!-- <p>This is a large modal.</p> -->
                  <div class="container">
                      <div class="heading">
                          <!-- <h2>Recent Work</h2> -->
                      </div>
                      <div class="row">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63291.27404978693!2d108.0187837700957!3d-7.497826065425761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65fdff661e2659%3A0x401e8f1fc28ca10!2sSodonghilir%2C%20Tasikmalaya%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1628616541699!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                      </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Kunjungi Sodonghilir -->
        <section class="clean-block clean-info dark" id="Kunjungi">
            <div class="container">
                <div class="block-heading">
                    <!-- <h2 class="text-info">Info</h2> -->
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p> -->
                </div>
                <div class="row align-items-center">
                    
                    <div class="col-md-6">
                        <h3>Kunjungi Sodonghilir</h3>
                        <div class="getting-started-info">
                            <p>Sodonghilir, Tasikmalaya memiliki banyak pesona tersembunyi di dalamnya. Telusuri lebih lanjut dan rasakan serunya petualangan di Sodonghilir!</p>
                        </div><button class="btn btn-outline-primary btn-lg" type="button" data-toggle="modal" data-target="#myModal">Telusuri Sodonghilir</button></div>
                        <div class="block-heading"><p></p></div>
                        <div class="col-md-6"><img class="img-thumbnail" src="assets/img/index-sodonghilir/Sodonghilir.png"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tentang Sodonghilir -->
        <section class="clean-block clean-info dark" id="tentang-sodonghilir">
            <div class="container">
                <!-- <div class="block-heading">
                    <h2 class="text-info">Info</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div> -->
                <div class="row align-items-center">
                    <div class="col-md-6"><img class="img-thumbnail" src="assets/img/index-sodonghilir/Creative.png"></div>
                    <div class="col-md-6">
                        <h3>Sodonghilir, Tasikmalaya</h3>
                        <div class="getting-started-info">
                            <p>Sodonghilir merupakan sebuah kecamatan di Kabupaten Tasikmalaya, Provinsi Jawa Barat. Desa Sodonghilir dan Desa Sepatnunggal merupakan 2 dari 12 desa yang terletak di Kecamatan Sodonghilir.</p>
                        </div><button class="btn btn-outline-primary btn-lg" type="button" data-toggle="modal" data-target="#mapModal">Temukan di Peta</button></div>
                </div>
            </div>
        </section>
        <!-- <section></section> -->
        
        <!-- Artikel Terbaru -->
        <section class="clean-block clean-info dark" id="Artikel-Terbaru">
          <div class="container">
              <div class="row align-items-center">
                  
                  <div class="col-md-6">
                      <h3>Artikel Terbaru</h3>
                      <div class="getting-started-info">
                          <p>Sodonghilir, Tasikmalaya memiliki banyak pesona tersembunyi di dalamnya. Telusuri lebih lanjut dan rasakan serunya petualangan di Sodonghilir!</p>
                      </div>
                      <a href="blog-list.html"><button class="btn btn-outline-primary btn-lg" type="button">Selengkapnya</button></a>
                    </div>
                      <div class="block-heading"><p></p></div>
                      
                      <div class="col-md-6">
                        <div class="carousel slide" data-ride="carousel" id="carousel-1">
                          <div class="carousel-inner">
                              <div class="carousel-item active"><a href="https://www.google.com/";">
                                <img class="w-100 d-block" src="assets/img/scenery/image1.jpg" alt="Slide Image" ></a>
                                  <div class="carousel-caption d-none d-md-block">
                                      <h5 style="color: black;">First slide label</h5>
                                      <p>Some representative placeholder content for the first slide.</p>
                                  </div>
                              </div>
                              
                              <div class="carousel-item"><a href="https://www.google.com/" >
                                <img class="w-100 d-block" src="assets/img/scenery/image4.jpg" alt="Slide Image" ></a>
                                <div class="carousel-caption d-none d-md-block">
                                  <h5 style="color: black;">First slide label</h5>
                                  <p>Some representative placeholder content for the first slide.</p>
                                </div>
                              </div>
                              <a href="https://www.google.com/">
                                <div class="carousel-item"><a href="https://www.google.com/">
                                  <img class="w-100 d-block" src="assets/img/scenery/image6.jpg" alt="Slide Image"></a>
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5 style="color: black;">First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                  </div>
                                </div>
                              </a>
                              <div class="carousel-item"><a href="https://www.google.com/">
                                <img class="w-100 d-block" src="assets/img/scenery/image6.jpg" alt="Slide Image"></a>
                                <div class="carousel-caption d-none d-md-block">
                                  <h5 style="color: black;bac">First slide label</h5>
                                  <p>Some representative placeholder content for the first slide.</p>
                                </div>
                              </div>
                          </div>
                          <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button"
                                  data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                          <ol class="carousel-indicators">
                              <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel-1" data-slide-to="1"></li>
                              <li data-target="#carousel-1" data-slide-to="2"></li>
                              <li data-target="#carousel-1" data-slide-to="3"></li>
                          </ol>
                      </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
        <section class="clean-block about-us">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Lihat Keseruan Mereka</h2>
                    <p>Berikut merupakan kumpulan review dari pengunjung tempat wisata Sodonghilir</p>
                </div>
            </div>
        </section>
        <section class="testimonials" id="review">
            <div class="gtco-testimonials">
                <div class="owl-carousel owl-carousel1 owl-theme">
                  <div>
                    <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1572561300743-2dd367ed0c9a?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=300" alt="">
                      <div class="card-body">
                        <h5>Ronne Galle <br />
                          <span> Project Manager </span>
                        </h5>
                        <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                          impedit quo minus id quod maxime placeat ” </p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1588361035994-295e21daa761?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=301" alt="">
                      <div class="card-body">
                        <h5>Missy Limana<br />
                          <span> Engineer </span>
                        </h5>
                        <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                          impedit quo minus id quod maxime placeat ” </p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1575377222312-dd1a63a51638?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=302&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=302" alt="">
                      <div class="card-body">
                        <h5>Martha Brown<br />
                          <span> Project Manager </span>
                        </h5>
                        <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                          impedit quo minus id quod maxime placeat ” </p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="card text-center"><img class="card-img-top" src="https://images.unsplash.com/photo-1549836938-d278c5d46d20?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=303&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=303" alt="">
                      <div class="card-body">
                        <h5>Hanna Lisem<br />
                          <span> Project Manager </span>
                        </h5>
                        <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                          impedit quo minus id quod maxime placeat ” </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                
                <div class="container" style="color: white;">
                    <div class="row row-cols-2 row-cols-lg-3">
                      <div class="col-4 col-lg-2">Column</div>
                      <div class="col-4 col-lg-2">Column</div>
                      <div class="col-4 col-lg-2">Column</div>
                      <div class="col-4 col-lg-2">Column</div>
                      <div class="col-4 col-lg-2">Column</div>
                    </div>
                  </div>

            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2021 Copyright Text</p>
        </div>
    </footer>
    <!-- Basic stylesheet -->
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    
    <!-- Default Theme -->
    <link rel="stylesheet" href="owl-carousel/owl.theme.default.css">
    
    <!-- You can use latest version of jQuery  -->
    <!-- <script src="jquery-3.6.0.min.js"></script> -->
    
    <!-- Include js plugin -->
    <script src="main.js"></script>
    <script src="assets/owl-carousel/owl.carousel.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="main.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
</body>

</html>