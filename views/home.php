

    <div id="all">

<div id="content">

    <div class="container">
        <div class="col-md-12">
            <div id="main-slider">
                <?php

                    $result = executeQuery("SELECT * FROM main_slider");
                    //var_dump($result);

                    foreach($result as $img) :
                ?>
                <div class="item">
                    <img src="<?= $img->path_slider; ?>" alt="<?= $img->alt_slider; ?>" class="img-responsive">
                </div>
                <?php endforeach;?>
                  
            </div>
            <!-- /#main-slider -->
        </div>
    </div>

    <!-- *** ADVANTAGES HOMEPAGE ***
_________________________________________________________ -->
    <div id="advantages">

        <div class="container">
            <div class="same-height-row">
                    <?php 
                        $result = executeQuery("SELECT * from advantages LIMIT 3");
                        foreach($result as $advantage) :
                    ?>
                <div class="col-sm-4">
                    <div class="box same-height clickable">
                        <div class="icon">
                            <i class="<?= $advantage->bkg_icon; ?>"></i>
                        </div>

                        <h3>
                            <a href="#"><?= $advantage->title ?></a>
                        </h3>
                        <p><?= $advantage->text ?></p>

                       
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /#advantages -->

    <!-- *** ADVANTAGES END *** -->

    <!-- *** HOT PRODUCT SLIDESHOW ***
_________________________________________________________ -->
    <div id="hot">

        <div class="box">
            <div class="container">
                <div class="col-md-12">
                    <h2>Hot this week</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="product-slider">


            <?php 
                $upit = "SELECT * FROM product WHERE hot = 1";
                $hot_products = executeQuery($upit);
                
                foreach($hot_products as $hot_product):
               
            ?>


                <div class="item">
                    <div class="product">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front">
                                    <a href="category.php?id=<?= $hot_product->id_product ?>">
                                        <img src="<?= $hot_product->image ?>" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="category.php?id=<?= $hot_product->id_product ?>">
                                        <img src="<?= $hot_product->image ?>" alt="" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="category.php?id=<?= $hot_product->id_product ?>" class="invisible">
                            <img src="<?= $hot_product->image ?>" alt="" class="img-responsive">
                        </a>
                        <div class="text">
                            <h3>
                                <a href="category.php?id=<?= $hot_product->id_product ?>"><?= $hot_product->name?></a>
                            </h3>
                            <p class="price">
                                $<?= $hot_product->price?>.00</p>
                        </div>
                        <!-- /.text -->

                        <?php $sale = $hot_product->sale;
                            if ($sale == 1):
                        ?>

                            <div class="ribbon sale">
                                <div class="theribbon">SALE</div>
                                <div class="ribbon-background"></div>
                            </div>

                            <?php endif;?>

                            <!-- /.ribbon -->

                            <?php $new_product = $hot_product->new;
                                if ($new_product == 1):
                            ?>
                            <div class="ribbon new">
                                <div class="theribbon">NEW</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->
                            <?php endif;?>

                        <!-- /.ribbon -->
                    </div>
                    <!-- /.product -->
                </div>

                <?php endforeach;?>

 

            </div>
            <!-- /.product-slider -->
        </div>
        <!-- /.container -->

    </div>
    <!-- /#hot -->

    <!-- *** HOT END *** -->

              <!-- *** BLOG HOMEPAGE ***
 _________________________________________________________ -->

 <div class="box text-center" data-animate="fadeInUp">
                <div class="container">
                    <div class="col-md-12">
                        <h3 class="text-uppercase">From our blog</h3>

                        <p class="lead">What's new in the world of fashion? <a href="index.php?page=blog">Check our latest stories!</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="col-md-12" data-animate="fadeInUp">
                   
                        <!-- POSTS - READ MORE -->
                   <?php
                        $upit = "SELECT * FROM post p INNER JOIN user u ON p.user_id = u.id_user ORDER BY p.publishing_date DESC LIMIT 2";
                        $posts = executeQuery($upit);
                    ?>

                    
                    <div id="blog-homepage" class="row">
                        <?php foreach($posts as $post) : ?>
                        <div class="col-sm-6">
                            <div class="post">
                                <h4><?= $post -> post_title; ?></a></h4>
                                <p class="author-category">By <a href="author.php?id=<?= $post->id_user; ?>"><?= $post->first_name . " " . $post->last_name; ?></a></p>
                                <hr>
                                <p class="intro"><?= $post->post_summary?></p>
                                <p class="read-more"><a href="post.php?id=<?= $post->id_post; ?>" class="btn btn-primary">Continue reading</a>
                                </p>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                    <!-- /#blog-homepage -->
                </div>
            </div>
            <!-- /.container -->

            <!-- *** BLOG HOMEPAGE END *** -->

</div>
<!-- /#content -->

