<!DOCTYPE HTML>
<html>

<head>
    <title>KYUCUBLOG</title>
    <link rel="icon" type="image/png" href="images/logoicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Style Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <!--RESET SCSS-->
    <link rel="stylesheet" href="css/reset.css">
    <!--BOOTSTRAP CSS-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <!--MEDIA QUERIES-->
    <link rel="stylesheet" href="css/mq..css">
    <!--FONT AWESOME-->
    <script src="js/lib/all.js"></script>
    <!--OWL CSS-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link href="css/animate.min.css" rel="stylesheet">
    <script src="js/lib/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <style type="text/css">
        .bs-example {
            margin: 20px;
        }

        @media screen and (min-width: 768px) {

            .dropdown:hover .dropdown-menu,
            .btn-group:hover .dropdown-menu {
                display: block;
            }

            .dropdown-menu {
                margin-top: 0;
            }

            .dropdown-toggle {
                margin-bottom: 2px;
            }

            .navbar .dropdown-toggle,
            .nav-tabs .dropdown-toggle {
                margin-bottom: 0;
            }
        }
    </style>
</head>

<body>
    <?php require 'includes/nav.php'  ?>
    <div class="header-bottom">
        <div class="container">
            <div class="logo">
                <h1 class="text-success"> KYU-CU BLOG</h1>
                <p><label class="of"></label>Serving God With Fervent Worship<label class="on"></label></p>
            </div>
        </div>
    </div>
    <!--  Main Section -->
    <section>
        <div class="container my-4 ">

            <div class="row">
                <!-- Articles-->
                <div id="main-col" class="col-md-9 col-lg-9 rounded ">
                    <div class="w3ls px-2  row">
                        <?php
                            if (isset($_GET['id'])):
                                $urlID= $_GET['id'];
                                
                                $artOBJ = new  ARTICLE();
                                $article = $artOBJ->getArtSpecificWhere($urlID);
                                if ($article ==  false) {
                                    echo ' <script>  
                                    window.location.href = "blog.php";
                                    </script>
                                    ';
                                }
                                $txt = 'Hi, Check out my latest Article on Kirinyaga University CU Website https://kyucu.co.ke/article.php?id='. $article['article_id'];
                                $txt = urlencode($txt);
                                $url = 'https://wa.me/?text='. $txt;
                                // echo print_r($article);

                        ?> 

                        <article class="tc-ch wow fadeInDown mt-2 w-100" data-wow-duration=".8s" data-wow-delay=".2s">
                            <div class="tch-img">
                                <img src="user/includes/images/<?php echo $article['articleimg']  ?>"
                                    class="img-responsive article-img" alt="">
                            </div>
                            <h3><?php echo  $article['article_tittle']; ?>
                            </h3>
                            <h6 class="text-capitalize font-weight-bold">By <?php echo  $article['user_fname']; echo " "; echo  $article['user_lname'];?>
                                
                              <span class="timeago1"> <?php echo  $article['article_pub_date']; ?></span>.
                            </h6>
                            <!-- Like Buttons And Comments -->
                            <div class="d-flex">
                                <div class="mx-3 comment"><span> <i  class="far fa-comment-alt"></i> </span><span id="coment_count">4</span> </div>
                                <div class="mx-3"><span> <i id="<?php echo $urlID ?>" onclick="react(this,<?php echo $urlID ?>)" class="fas fa-thumbs-up"></i> <span id="count">4</span> </span> </div>
                                <span id="loginfirst" class=""></span>
            
                            </div>
                            <div class="readmore" style="overflow:hidden">
                            <?php echo  $article['article_text']; ?>
                            </div>
                            <!-- View More Share -->
                            <div class="d-flex justify-content-between">
                                <!-- <div class="d-inline">
                                    <button class="btn btn-sm btn-outline-success">Read More</button>
                                </div> -->


                                <!-- Social Media  -->
                                <div class="d-inline">
                                    <div class="row">
                                        <div class="d-inline font-weight-bold "> Share On</div>
                                    </div>
                                    <div class="row">
                                        <a href="<?php echo $url   ?>"  class="d-inline" target="_blank"> <i class="fab fa-whatsapp-square fa-2x"></i></a>
                                    </div>


                                </div>
                            </div>

                            <!-- Comment  form-->
                            <form method="POST" id="comment_form">
                                <input type="hidden" name="artid"
                                    value=" <?php echo $article['article_id']  ?>">
                                <div class="form-group">
                                    <textarea name="comment_content" id="comment_content" class="form-control"
                                        placeholder="Enter Comment" rows="5" required></textarea>
                                </div>
                                <div class="form-group">
                                <input type="hidden" id="comment_id" name="comment_id" value="0">
                                    <button id="submit" class="btn btn-success" name="comment">Submit</button>

                            </form>
                            <span id="comment_message" class="d-flex" style="display: inline-block!important">  </span> <br>
                            <!-- All comments of th arcile will be shown here -->
                            <div id="display_comment">
                                <div class="row flex-row">
                                    <!-- <div class="col-1"><img loading="lazy" src="user/images/userimgs/user.jpg"
                                            class="img-fluid rounded-circle" alt=""></div> -->
                                            <!-- comment -->
                                    <div class="col-11">
                                        <div class="row p-0 m-0 flex-column ">
                                            <div class="col px-0 "><span class="text-primary">Felix Omuok </span> <span class="font-weight-lighter font-italic">2019 WED</span> </div>
                                            <div class="col px-0"> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                </div>
                                                <div class="col px-0 d-flex justify-content-end"> <input class="btn btn-primary btn-sm py-0" type="submit" value="Reply"> </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row flex-row" style="margin-left:30px">
                                    <!-- <div class="col-1"><img loading="lazy" src="user/images/userimgs/user.jpg"
                                            class="img-fluid rounded-circle" alt=""></div> -->
                                            <!-- comment -->
                                    <div class="col-11">
                                        <div class="row p-0 m-0 flex-column ">
                                            <div class="col px-0 "><span class="text-primary">Felix Omuok </span> <span class="font-weight-lighter font-italic">2019 WED</span> </div>
                                            <div class="col px-0"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora quas id dicta natus neque repellendus nemo. Blanditiis quia sed expedita quas sit repudiandae, quos mollitia. Voluptas minus quisquam vero laboriosam. Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                </div>
                                                <div class="col px-0 d-flex justify-content-end"> <input class="btn btn-primary btn-sm py-0" type="submit" value="Reply"> </div>
                                        </div>
                                    </div>

                                </div>


                            </div>


                        </article>


                        <div class="clearfix"></div>
                    </div>
                    <?php endif ?>
                </div>

                <!-- Resent Article Section -->
                <div id="article" class="col-md-3 col-lg-3 ">
                    <div class="blo-top1 bg-light rounded px-2">

                        <div class="tech-btm">

                            <div class="search-1 wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
                                <form action="#" method="post">
                                    <input type="search" name="Search" value="Search" onfocus="this.value = '';"
                                        onblur="if (this.value == '') {this.value = 'Search';}" required="">
                                    <input type="submit" value=" ">
                                </form>
                            </div>
                            <h4>Recent Posts </h4>
                            <?php
                            $artRecentOBJ = new  ARTICLE();
                            $recents = $artRecentOBJ->getArtResent();
                            foreach ($recents as $recent):?>
                            <div class="blog-grids wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
                                <div class="blog-grid-left">
                                    <a
                                        href="article.php?id=<?php  echo $recent['article_id']; ?>"><img
                                            loading="lazy"
                                            src="user/includes/images/<?php echo $recent['articleimg']  ?>"
                                            alt=""></a>
                                </div>
                                <div class="blog-grid-right">

                                    <h6><a
                                            href="article.php?id=<?php  echo $recent['article_id']; ?>"><?php echo   $recent['article_tittle']; ?></a>
                                    </h6>
                                </div>
                                <div class="clearfix"> </div>
                            </div>

                            <?php endforeach?>



                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- foote -->
    <?php require 'includes/footer.php' ?>
    <script src="js/lib/jquery-3.2.1.min.js"></script>
    <script src="js/lib/popper.min.js"></script>
    <script src="js/lib/bootstrap.min.js"></script>
    <script src="js/lib/timeago.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/readmore-js@2.2.1/readmore.min.js"></script>
    <script src="js/app/article.js"></script>

    
    <div class="modal fade" id="login-request" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Welcome</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <a href="user/login.php" type="button" class="btn btn-secondary" >Log in</a>
        <a href="user/signup.php" class="btn btn-primary">Register</a>
      </div>
     
    </div>
  </div>
</div>

</body>

</html>