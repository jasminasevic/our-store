<body>

    <!-- *** TOPBAR ***
 _________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="col-md-12" data-animate="fadeInDown">
                <ul class="menu">

                    <?php
                        if(isset($_SESSION['user'])):
                    ?>
                    <li>
                        <a href="php/logout.php">Logout</a>
                    </li>
                    <li>
                        <a href="index.php?page=questionnaire">Questionnaire</a>
                    </li>
                        <?php else: ?>
                    <li>
                        <a href="index.php?page=register">Login</a>
                    </li>
                    <li>
                        <a href="index.php?page=register">Register</a>
                    </li>
                        <?php endif; ?>
                    <li>
                        <a href="index.php?page=contact">Contact</a>
                    </li>
                    <li>
                        <a href="author.php?id=1">Author</a>
                    </li>
                    <li>
                        <a href="documentation.pdf">Documentation</a>
                    </li>
                    <?php 
                        $user = $_SESSION['user'];
                        if($user->role_name=="admin"): ?>
                    <li>
                        <a href="index.php?page=admin">Admin panel</a>
                    </li>
                        <?php endif; ?>
                </ul>
            </div>
        </div>

   

    </div>

    <!-- *** TOP BAR END *** -->