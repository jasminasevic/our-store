    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="index.php?page=home">Home</a>
                        </li>
                        <li>New account / Sign in</li>
                    </ul>

                </div>

                <div class="col-md-6">
                    <?php
                        if (isset($_SESSION['user'])):
                            echo "<h3>You are now logged in.</h3>";
                    ?>
                    <?php else: ?>
                    <div class="box" id="registerForm">
                        <h1>New account</h1>
                        <p class="lead">Not our registered customer yet?</p>
                        <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                        <p class="text-muted">If you have any questions, please feel free to <a href="index.php?page=contact">contact us</a>, our customer service center is working for you 24/7.</p>

                        <hr>

                        <form action="<?=$_SERVER['PHP_SELF'] . '?page=register'?>" method="post" onsubmit="return registration();">
                            <div class="form-group">
                                <label for="name">First name</label><span class="star">*</span>
                                <input type="text" class="form-control" id="regFirstName" name="regFirstName">
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last name</label><span class="star">*</span>
                                <input type="text" class="form-control" id="regLastName" name="regLastName">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label><span class="star">*</span>
                                <input type="text" class="form-control" id="regEmail" name="regEmail">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label><span class="star">*</span>
                                <input type="password" class="form-control" id="regPassword" name="regPassword">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" name="btnRegister"><i class="fa fa-user-md"></i> Register</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box">
                        <hr>
                            <h1>Login</h1>
                            <p class="lead">Already our customer?</p>
                        <p class="text-muted">Please enter your email and password to login to your account.</p>

                        <form action="php/login.php" method="post">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control login-input" id="logEmail" name="logEmail">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control login-input" id="logPassword" name="logPassword">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" name="btnLogin"><i class="fa fa-sign-in"></i> Log in</button>
                            </div>
                        </form>
                            <?php endif;?>

                            <?php
if (isset($_SESSION['errors'])):
    echo "<div class='text-center'><br/>
	                                            <strong>Please enter valid email and password.</strong>
	                                        </div>";
    unset($_SESSION['errors']);
    ?>
	                            <?php endif;?>

                    </div>
                </div>


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->