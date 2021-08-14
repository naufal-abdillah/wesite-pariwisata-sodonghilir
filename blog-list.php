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
                    <li class="nav-item"><a class="nav-link" href="index.php#tentang-sodonghilir">Tentang Sodonghilir</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="pricing.html">Wisata</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="index.php#review">Review</a></li>
                    <li class="nav-item"><a class="nav-link active" href="blog-list.php">Blog Post</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="contact-us.html">Kontak</a></li> -->
                </ul>
            </div>
        </div>
    </nav>
    <main class="page blog-post-list">
        <section class="clean-block clean-blog-list dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Blog Post List</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="block-content">
                    <!-- <?php foreach ($posts as $post): ?>
                        <div class="post clearfix">
                            <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post-image">
                            <div class="post-preview">
                                <h2><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
                                <i class="far fa-user"> <?php echo $post['username']; ?></i>
                                &nbsp;
                                <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                                <p class="preview-text">
                                    <?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?>
                                </p>
                                <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More</a>
                            </div>
                        </div>    
                    <?php endforeach; ?> -->
                    <?php foreach ($posts as $post): ?>
                        <div class="clean-blog-post">
                        <div class="row">
                            <div class="col-lg-5"><img class="rounded img-fluid" src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>"></div>
                            <div class="col-lg-7">
                                <h3><?php echo $post['title']; ?></h3>
                                <div class="info"><span class="text-muted"><?php echo date('F j, Y', strtotime($post['created_at'])); ?> by&nbsp;<a href="#"><?php echo $post['username']; ?></a></span></div>
                                <p><?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?></p><a href="blog-post.php?id=<?php echo $post['id']; ?>"><button class="btn btn-outline-primary btn-sm" type="button">Read More</button></a></div>
                            </div> 
                        </div>





                        <!-- <div class="post clearfix">
                            <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post-image">
                            <div class="post-preview">
                                <h2><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
                                <i class="far fa-user"> <?php echo $post['username']; ?></i>
                                &nbsp;
                                <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                                <p class="preview-text">
                                    <?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?>
                                </p>
                                <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More</a>
                            </div>
                        </div>     -->
                    <?php endforeach; ?>
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