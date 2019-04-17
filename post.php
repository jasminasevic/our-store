<?php
session_start();

if(isset($_GET['id'])) :
    $id = $_GET['id'];


//Ukljucivanje fajla u kom se nalazi konekcija sa bazom
include "php/connection.php";
include "views/head.php";
include "views/header.php";
include "views/nav.php";

?>
 <?php 



 $query_prepare =$conn->prepare("SELECT * FROM post p INNER JOIN user u ON p.user_id=u.id_user WHERE id_post = :id"); //Pripremanje upita za izvrsavanje
 $query_prepare->execute(array(":id"=>$id)); // Izvrsavanje upita sa konkretnim parametrom
 $result_post = $query_prepare->fetch(); // Dohvatanje samo jednog reda kao rezultat

 if(isset($result_post)):
     // var_dump($result_post); 

     ?>

     <div id="all">

     <div id="content">
        <div class="container">
     
             <div class="col-sm-12">
     
                 <ul class="breadcrumb">
     
                     <li>
                         <a href="index.php">Home</a>
                     </li>
                     <li>
                         <a href="index.php?page=blog">Blog</a>
                     </li>
                     <li>Blog post</li>
                 </ul>
             </div>
     
             <div class="col-sm-9" id="blog-post">
     
     
                <div class="box">
     
                     <h1><?= $result_post->post_title ?></h1>
                     <p class="author-date">By
                         <a href="#"><?= $result_post->first_name . " " . $result_post->last_name ?></a> | 
                         <?php $publishing_date = explode(" ",$result_post->publishing_date); 
                            echo $publishing_date[0];
                        ?></p>
                     <p class="lead"><?= $result_post->post_summary ?></p>
     
                        <div id="post-content">
                             <p><?= $result_post->post_text; ?></p>
                        </div>

                    </div>
                        <!-- /.box -->
                </div>
                    <!-- /#blog-post -->

                    <div class="col-md-3">


                        <!-- *** BLOG MENU END *** -->

                        <div class="banner">
                            <a href="#">
                                <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                            </a>
                        </div>
                    </div>


                </div>
                <!-- /.container -->
            </div>
            <!-- /#content -->
        </div>
    </div>
 <?php endif; ?>


 <?php 
 include "views/footer.php";
 endif;
 ?>