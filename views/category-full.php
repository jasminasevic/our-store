<div id="all">

<div id="content">
    <div class="container">

        <div class="col-md-12">
            <div class="box info-bar">
                <div class="row">

                    <!-- <div class="col-sm-12 col-md-8  products-number-sort">
                        <div class="row">
                            <form class="form-inline">
                                <div class="col-md-6 col-sm-6">
                                    <div class="products-sort-by">
                                        <strong>Sort by</strong>
                                        <select name="sort-by" class="form-control">
                                            <option>Price</option>
                                            <option>Name</option>
                                            <option>Sales first</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> -->
                </div>
            </div>

            <div class="row products">


            <?php

        $product_category = $_GET['category'];
        $parent = $_GET['parent'];

        // echo $parent ."<br/>";
        // echo $product_category . "<br/>";
        

    if ($parent != "0"):
        $query_prepare = $conn->prepare("SELECT *, p.name AS product_name FROM product p INNER JOIN navigation n
        ON p.parent=n.id_link WHERE n.id_link = :parent AND p.product_category=:product_category"); //Pripremanje upita za izvrsavanje
        $query_prepare->execute(array(":parent" => $parent, "product_category" => $product_category)); // Izvrsavanje upita sa konkretnim parametrom
        $result_post = $query_prepare->fetchAll();

        // var_dump($result_post);

    foreach ($result_post as $res):
    ?>

            <div class="col-md-4 col-sm-6">
                <div class="product">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <a href="category.php?id=<?=$res->id_product;?>">
                                    <img src="<?=$res->image;?>" alt="<?=$res->product_name;?>" class="img-responsive">
                                </a>
                            </div>
                            <div class="back">
                                <a href="category.php?id=<?=$res->id_product;?>">
                                    <img src="<?=$res->image;?>" alt="<?=$res->product_name;?>" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="category.php?id=<?=$res->id_product;?>" class="invisible">
                        <img src="<?=$res->image;?>" alt="<?=$res->product_name;?>" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="detail.html">
                                <?=$res->product_name;?>
                            </a>
                        </h3>
                        <p class="price">$
                            <?php echo $res->price; ?>.00</p>
                        <p class="buttons">
                            <a href="category.php?id=<?=$res->id_product?>" class="btn btn-default">View detail</a>
                        </p>
                    </div>
            <!-- /.text -->
            
            
            <?php $sale = $res->sale;
                if ($sale == 1):
            ?>

                        <div class="ribbon sale">
                            <div class="theribbon">SALE</div>
                            <div class="ribbon-background"></div>
                        </div>

            <?php endif;?>
	
                                <!-- /.ribbon -->

            <?php $new_product = $res->new;
                if ($new_product == 1):
            ?>
                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->
                                <?php endif;?>
                            </div>
                            <!-- /.product -->
                        </div>


            <?php endforeach;?>

        <?php else: ?>
            
        <?php
        // echo $parent;
        // echo "<br/>";
        // $product_category = $_GET['category'];
        // echo $product_category;
        // echo "<br/>";
        
        
        $query_prepare = $conn->prepare("SELECT * FROM product WHERE parent = :par"); //Pripremanje upita za izvrsavanje
        $query_prepare->execute(array(":par" => $product_category)); // Izvrsavanje upita sa konkretnim parametrom
        $result_post = $query_prepare->fetchAll();

        // var_dump($result_post);

        // var_dump($result_post);

        // $result = executeQuery("SELECT * FROM product p");

        foreach ($result_post as $res):
        ?>

	                        <div class="col-md-4 col-sm-6">
	                            <div class="product">
	                                <div class="flip-container">
	                                    <div class="flipper">
	                                        <div class="front">
	                                            <a href="category.php?id=<?=$res->id_product;?>">
	                                                <img src="<?=$res->image;?>" alt="<?=$res->name;?>" class="img-responsive">
	                                            </a>
	                                        </div>
	                                        <div class="back">
	                                            <a href="category.php?id=<?=$res->id_product;?>">
	                                                <img src="<?=$res->image;?>" alt="<?=$res->name;?>" class="img-responsive">
	                                            </a>
	                                        </div>
	                                    </div>
	                                </div>
	                                <a href="category.php?id=<?=$res->id_product;?>" class="invisible">
	                                    <img src="<?=$res->image;?>" alt="<?=$res->name;?>" class="img-responsive">
	                                </a>
	                                <div class="text">
	                                    <h3><a href="detail.html"><?=$res->name;?></a></h3>
	                                    <p class="price">$<?php echo $res->price; ?>.00</p>
	                                    <p class="buttons">
	                                        <a href="category.php?id=<?=$res->id_product?>" class="btn btn-default">View detail</a>
	                                    </p>
	                                </div>
	                                <!-- /.text -->

	                                <?php $sale = $res->sale;
if ($sale == 1):
?>

	                                <div class="ribbon sale">
	                                    <div class="theribbon">SALE</div>
	                                    <div class="ribbon-background"></div>
	                                </div>

	                                    <?php endif;?>
                                <!-- /.ribbon -->

                                <?php $new_product = $res->new;
if ($new_product == 1):
?>
                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->
                                <?php endif;?>
                            </div>
                            <!-- /.product -->
                        </div>

                        <?php endforeach;?>




<?php endif;?>







            </div>
            <!-- /.products -->

            <!-- <div class="pages">

                <ul class="pagination">
                    <li><a href="#">&laquo;</a>
                    </li>
                    <li class="active"><a href="#">1</a>
                    </li>
                    <li><a href="#">2</a>
                    </li>
                    <li><a href="#">3</a>
                    </li>
                    <li><a href="#">4</a>
                    </li>
                    <li><a href="#">5</a>
                    </li>
                    <li><a href="#">&raquo;</a>
                    </li>
                </ul>
            </div> -->


        </div>
        <!-- /.col-md-9 -->

    </div>
    <!-- /.container -->
</div>
<!-- /#content -->
