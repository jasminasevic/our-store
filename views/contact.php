   <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Contact</li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** PAGES MENU ***-->



                    <div class="banner">
                        <a href="#">
                            <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-9">


                    <div class="box" id="contact">
                        <h1>Contact</h1>

                        <p class="lead">Are you curious about something? Do you have some kind of problem with our products?</p>
                        <p>Please feel free to contact us, our customer service center is working for you 24/7.</p>

                        <hr>

                        <div class="row">
                            <div class="col-sm-4">
                                <h3><i class="fa fa-map-marker"></i> Address</h3>
                                <p>Knez Mihailova
                                    <br>11000
                                    <br>Belgrade
                                    <br>
                                    <strong>Serbia</strong>
                                </p>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <h3><i class="fa fa-phone"></i> Call center</h3>
                                <p class="text-muted">This number is toll free if calling from Serbia otherwise we advise you to use the electronic form of communication.</p>
                                <p><strong>+38111 222 333 444</strong>
                                </p>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <h3><i class="fa fa-envelope"></i> Electronic support</h3>
                                <p class="text-muted">Please feel free to write an email to us if you have any further questions.</p>
                                <ul>
                                    <li><strong><a href="mailto:">info@fakeemail.com</a></strong>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.col-sm-4 -->
                        </div>
                        <!-- /.row -->

                        <hr>
                        <h2>Contact form</h2>

                        <form action="<?php echo $_SERVER['PHP_SELF']."?page=contact" ; ?>" method="POST" onsubmit="return checkContactForm();">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">First Name</label><span class="star"> * </span>
                                        <input type="text" class="form-control" id="tbFirstName" name="tbFirstName">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Last Name</label><span class="star"> * </span>
                                        <input type="text" class="form-control" id="tbLastName" name="tbLastName">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label><span class="star"> * </span>
                                        <input type="text" class="form-control" id="tbEmail" name="tbEmail">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="subject">Subject</label><span class="star"> * </span>
                                        <input type="text" class="form-control" id="tbSubject" name="tbSubject">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="message">Message</label><span class="star"> * </span>
                                        <textarea id="tbMessage" class="form-control" name="tbMessage"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary" name="btnSubmit"><i class="fa fa-envelope-o"></i> Send message</button>

                                </div>
                            </div>
                            <!-- /.row -->
                        </form>


                    </div>


                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->

   
