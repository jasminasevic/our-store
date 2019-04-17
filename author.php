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

    $query_prepare = $conn->prepare("SELECT * FROM user WHERE id_user = :id"); //Pripremanje upita za izvrsavanje
    $query_prepare->execute(array(":id" => $id)); // Izvrsavanje upita sa konkretnim parametrom
    $result_user = $query_prepare->fetch(); // Dohvatanje samo jednog reda kao rezultat

    if (isset($result_user)):
      ?>
							<div id="all">

								<div id="content">
								    <div class="container">

								        <div class="col-md-12">
								            <ul class="breadcrumb">
								                <li><a href="index.php">Home</a>
								                </li>
								                <li>Author</a>
								                </li>
								                <li><?= $result_user->first_name . " " . $result_user->last_name ?></li>
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
								                        <img src="<?= $result_user->image; ?>" alt="<?= $result_user->first_name . " " . $result_user->last_name ?> portrait" class="img-responsive">
								                    </div>

								                    
												

								                </div>
								                <div class="col-sm-6">
								                    <div class="box">
								                        <h1 class="text-center"><?= $result_user->first_name . " " . $result_user->last_name ?></h1>
								                        <p><?= $result_user->biography; ?></p>

								                    </div>

								                  
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