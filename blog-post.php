<?php include("path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php');

if (isset($_GET['id'])) {
  $post = selectOne('posts', ['id' => $_GET['id']]);
}
$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);
$image = html_entity_decode($post['image']);
$author = "anononymous";
$temps = getPublishedPosts();
foreach ($temps as $temp){
    if($temp["id"]==$_GET['id']){
        $author = $temp['username'];
    }
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
        <div class="container"><a class="navbar-brand logo" href="index.php">Semilir Sodonghilir</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php#tentang-sodonghilir">Tentang Sodonghilir</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="pricing.html">Wisata</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="index.php#review">Review</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog-list.php">Blog Post</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#Artikel-Terbaru">Artikel Terbaru</a></li> -->
                    <!-- <li class="nav-item"><a class="nav-link" href="contact-us.html">Kontak</a></li> -->
                </ul>
            </div>
        </div>
    </nav>

    <main class="page blog-post">
        <section class="clean-block clean-post dark">
            <div class="container">
                <div class="block-content">
                    <div class="post-image" style="background-image:url(&quot;<?php echo BASE_URL . '/assets/images/' . $image; ?>&quot;);"></div>
                    <!-- <?php echo BASE_URL . '/assets/images/' . $image; ?> -->
                    <div class="post-body">
                        <h1 class="post-title"><?php echo $post['title']; ?></h3>
                        
                        <div class="post-info"><span><i class="far fa-user"> <?php echo $author; ?></i></span><span><i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i></span></div>
                        <div class="main-content-wrapper">
                            
                            <?php echo html_entity_decode($post['body']); ?>
                            

                            <!-- <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i> -->
                            <!-- <div class="main-content single">
                                
                            <div class="post-content">
                                
                            </div>

                            </div> -->
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
    <script src="jquery-3.6.0.min.js"></script>
    
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