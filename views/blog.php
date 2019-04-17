    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-sm-12">
                    <ul class="breadcrumb">

                        <li><a href="index.php">Home</a>
                        </li>
                        <li>Blog listing</li>
                    </ul>
                </div>

                <!-- *** LEFT COLUMN ***
		     _________________________________________________________ -->

                <div class="col-sm-9" id="blog-listing">

                    <div class="post">

                        <?php
                            $result = executeQuery("SELECT * FROM post p INNER JOIN user u ON p.user_id=u.id_user ORDER BY p.publishing_date DESC");
                         
                            foreach($result as $res) :
                           
                        ?>

                        <h2><a href="post.php?id=<?= $res->id_post; ?>"><?= $res->post_title; ?></a></h2>
                        <p class="author-category">By <a href="author.php?id=<?= $res->id_user; ?>"><?= $res->first_name . " " . $res->last_name; ?></a>
                        </p>
                        <hr>
                        <p class="date-comments">
                            <i class="fa fa-calendar-o"></i> <?php $publ_date = $res->publishing_date;
                            $publ_date = explode(" ", $publ_date);
                            echo $publ_date[0];

                            ?>
                        </p>
                        <p class="intro"><?= $res->post_summary; ?></p>
                        <p class="read-more"><a href="post.php?id=<?= $res->id_post?>" class="btn btn-primary">Continue reading</a>
                        </p>

                            <?php endforeach; ?>
                    </div>


                    



                </div>
                <!-- /.col-md-9 -->

                <!-- *** LEFT COLUMN END *** -->


                <div class="col-md-3">

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
