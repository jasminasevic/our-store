<?php
session_start();

if (isset($_GET['id'])):
    $id = $_GET['id'];

//Ukljucivanje fajla u kom se nalazi konekcija sa bazom
    include "php/connection.php";
    include "views/head.php";
    include "views/header.php";
    include "views/nav.php";

    ?>
							 <?php

    $query_prepare = $conn->prepare("SELECT *, p.name AS product_name FROM  product p INNER JOIN navigation n
	ON p.parent=n.id_link WHERE id_product = :id"); //Pripremanje upita za izvrsavanje
    $query_prepare->execute(array(":id" => $id)); // Izvrsavanje upita sa konkretnim parametrom
    $result_product = $query_prepare->fetch(); // Dohvatanje samo jednog reda kao rezultat

    if (isset($result_product)):
      ?>
							<div id="all">

								<div id="content">
								    <div class="container">

								        <div class="col-md-12">
								            <ul class="breadcrumb">
								                <li><a href="index.php">Home</a>
								                </li>
								                <li><?= $result_product->name; ?></a>
								                </li>
								                <li><?= $result_product->product_name; ?></li>
								            </ul>

								        </div>

								        <div class="col-md-3">


								            <div class="banner">
								                <a href="#">
								                    <img src="img/banner.jpg" alt="sales 2018" class="img-responsive">
								                </a>
								            </div>
								        </div>

								        <div class="col-md-9">

								            <div class="row" id="productMain">
								                <div class="col-sm-6">
								                    <div id="mainImage">
								                        <img src="<?= $result_product->image; ?>" alt="" class="img-responsive">
								                    </div>

								                    
													<?php $sale = $result_product->sale;
													if ($sale == 1):
												?>

															<div class="ribbon sale">
																<div class="theribbon">SALE</div>
																<div class="ribbon-background"></div>
															</div>

												<?php endif;?>

																	<!-- /.ribbon -->

												<?php $new_product = $result_product->new;
													if ($new_product == 1):
												?>
																	<div class="ribbon new">
																		<div class="theribbon">NEW</div>
																		<div class="ribbon-background"></div>
																	</div>
																	<!-- /.ribbon -->
																	<?php endif;?>

								                </div>
								                <div class="col-sm-6">
								                    <div class="box">
								                        <h1 class="text-center"><?= $result_product->product_name; ?></h1>
								                        <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product details, material and sizing</a>
								                        </p>
								                        <p class="price">$<?= $result_product->price; ?>.00</p>

								                    </div>

								                  
								                </div>

								            </div>


								            <div class="box" id="details">
								                <p>
								                    <h4>Product details</h4>
								                    <p><?= $result_product->details?></p>
								                    <h4>Material</h4>
								                    <p><?= $result_product->material?></p>
								                    <h4>Availabe sizes</h4>
								                    <p><?= $result_product->size?></p>
								                    <hr>
								                    <div class="social">
								                        <h4>Show it to your friends</h4>
								                        <p>
								                            <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
								                            <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
								                            <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
								                            <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
								                        </p>
								                    </div>
								            </div>



								        </div>
								        <!-- /.col-md-9 -->
								    </div>
								    <!-- /.container -->
								</div>
								<!-- /#content -->
							</div>
						</div>
					<?php endif;?>


							 <?php
    include "views/footer.php";
endif;
?>