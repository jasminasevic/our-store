<div id="all">

<div id="content">
    <div class="container">

        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="index.php?page=admin">Admin panel</a>
                </li>
            </ul>
        </div>

        <div class="col-md-3">
            <!-- *** PAGES MENU ***
_________________________________________________________ -->
            <div class="panel panel-default sidebar-menu">

                <div class="panel-heading">
                    <h3 class="panel-title">DELETE</h3>
                </div>

                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked adminNav">
                        <li>
                            <a href="#content1">Users</a>
                        </li>
                        <li>
                            <a href="#content2">Roles</a>
                        </li>
                        <li>
                            <a href="#content3">Blog posts</a>
                        </li>
                        <li>
                            <a href="#content4">Products</a>
                        </li>
                    </ul>

                </div>
                <div class="panel-heading">
                    <h3 class="panel-title">ADD NEW</h3>
                </div>
                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked adminNav">
                        <li>
                            <a href="#editcontent1">User</a>
                        </li>
                        <li>
                            <a href="#editcontent2">Role</a>
                        </li>
                        <li>
                            <a href="#editcontent3">Blog post</a>
                        </li>
                        <li>
                            <a href="#editcontent4">Product</a>
                        </li>
                    </ul>

                </div>
            </div>

            <!-- *** PAGES MENU END *** -->

        </div>

       

        <div class="col-md-9">


        <!-- USER DELETE -->
        <div class="box" id="text-page">
            <div id="content1" class="toggle" style="display:none">

            <?php
                    $upit = "SELECT * FROM user u INNER JOIN roles r ON u.role_id=r.id_role";
                    $users = executeQuery($upit); ?>
                 <div class="table-responsive">   
                    <table class='table'>
                        <thead>
                            <tr>
                                <th scope='col'>First Name</th>
                                <th scope='col'>Last name</th>
                                <th scope='col'>Email (Username)</th>
                                <th scope='col'>Password</th>
                                <th scope='col'>Active</th>
                                <th scope='col'>Role</th>
                                <th scope='col'>Image</th>
                                <th scope='col'>Biography</th>
                                <th scope='col'>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                    <?php
                    foreach($users as $user) : ?>
                        <tr>
                            <td> <?= $user->first_name; ?></td>
                            <td> <?= $user->last_name; ?></td>
                            <td> <?= $user->email; ?></td>
                            <td> <?= $user->pass; ?></td>
                            <td> <?= $user->active; ?></td>
                            <td> <?= $user->role_name; ?></td>
                            <td><img src='<?= $user->image; ?>' width='100px' height='133px' /></td>
                            <td> <?= $user->biography; ?></td>
                            <td> <a href='#' class='delete-user' data-id='<?= $user->id_user; ?>'>DELETE</a></td>
                        </tr>
                    
                <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>


        <!-- END USER DELETE -->


         <!-- ROLE DELETE -->
         <div class="box" id="text-page">

            <div id="content2" class="toggle" style="display:none">

            <?php
                    $upit = "SELECT * FROM roles";
                    $roles = executeQuery($upit); ?>
                <div class="table-responsive">  
                    <table class='table'>
                        <thead>
                            <tr>
                                <th scope='col'>Role ID</th>
                                <th scope='col'>Role Name</th>
                                <th scope='col'>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                    <?php
                    foreach($roles as $role) : ?>
                        <tr>
                            <td> <?= $role->id_role; ?></td>
                            <td> <?= $role->role_name; ?></td>
                            <td> <a href='#' class='delete-role' data-id='<?= $role->id_role; ?>'>DELETE</a></td>
                        </tr>
                    
                <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            </div>
            <!-- END ROLE DELETE -->


         <!-- POST DELETE -->
        <div class="box" id="text-page">

            <div id="content3" class="toggle" style="display:none">

            <?php
                    $upit = "SELECT * FROM post p INNER JOIN user u ON p.user_id=u.id_user";
                    $posts = executeQuery($upit); ?>

                <div class="table-responsive">  
                    <table class='table'>
                        <thead>
                            <tr>
                                <th scope='col'>Title</th>
                                <th scope='col'>Summary</th>
                                <th scope='col'>Text</th>
                                <th scope='col'>User</th>
                                <th scope='col'>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                    <?php
                    foreach($posts as $post) : ?>
                        <tr>
                            <td><strong> <?= $post->post_title; ?></strong></td>
                            <td> <?= $post->post_summary; ?></td>
                            <td> <?= $post->post_text; ?></td>
                            <td> <?= $post->first_name . " " . $post->last_name; ?></td>
                            <td> <a href='#' class='delete-post' data-id='<?= $post->id_post; ?>'>DELETE</a></td>
                        </tr>
                    
                <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- END POST DELETE -->

         <!-- BLOG PRODUCT DELETE -->
        <div class="box" id="text-page">

            <div id="content4" class="toggle" style="display:none">

                <?php
                        $upit = "SELECT *, n.name AS link_name FROM product p INNER JOIN navigation n ON 
                        p.product_category=n.id_link";
                        $products = executeQuery($upit); 
                        // var_dump($products);
                        ?>
                    
                    <div class="table-responsive">
                        <table class='table'>
                            <thead>
                                <tr>
                                    <th class='text-nowrap' scope='col'>Name</th>
                                    <th class='text-nowrap' scope='col'>Price</th>
                                    <th class='text-nowrap' scope='col'>Details</th>
                                    <th class='text-nowrap' scope='col'>Material</th>
                                    <th class='text-nowrap' scope='col'>Size</th>
                                    <th class='text-nowrap' scope='col'>Image</th>
                                    <th class='text-nowrap' scope='col'>Sale</th>
                                    <th class='text-nowrap' scope='col'>New</th>
                                    <th class='text-nowrap' scope='col'>Hot</th>
                                    <th class='text-nowrap' scope='col'>Parent</th>
                                    <th class='text-nowrap' scope='col'>Category</th>
                                    <th class='text-nowrap' scope='col'>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                        <?php
                        foreach($products as $product) : ?>
                            <tr>
                                <td><?= $product->name?></td>
                                <td><?= $product->price?></td>
                                <td><?= $product->details?></td>
                                <td><?= $product->material?></td>
                                <td><?= $product->size?></td>
                                <td><img src='<?= $product->image?>' width='100px' height='133px'/></td>
                                <td><?= $product->sale?></td>
                                <td><?= $product->new?></td>
                                <td><?= $product->hot?></td>
                                <td><?= $product->parent?></td>
                                <td><?= $product->link_name?></td>
                                <td><a href='#' class='delete-product' data-id='<?= $product->id_product; ?>'>DELETE</a></td>
                            </tr>
                        
                    <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
            </div>

        </div>


        <!-- ADD NEW USER -->
        <div class="box" id="text-page">
            <div id="editcontent1" class="toggle" style="display:none">

            <h2>Add new user</h2>

                <form action="<?php echo $_SERVER['PHP_SELF']."?page=admin" ; ?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control" id="tbUserFirstName" name="tbUserFirstName">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" id="tbUserLastName" name="tbUserLastName">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="tbUserEmail" name="tbUserEmail">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" id="tbUserPass" name="tbUserPass">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="active">Active</label></br>
                                <select name="ddlActive">
                                    <option value="1">1</option>
                                    <option value="0">0</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="role">Role</label><br/>
                                <select name="ddlUserRole">
			                        <option value="0"> Select role </option>
                                        <?php
                                            $res_role = executeQuery("SELECT * FROM roles");

                                            foreach($res_role as $role) : ?>
                                            
                                            <option value="<?= $role->id_role; ?>"><?= $role->role_name; ?> </option>
                                            
                                        <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" id="fUserImage" name="fUserImage">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="biography">Biography</label>
                                <textarea id="tbUserBiography" class="form-control" name="tbUserBiography"></textarea>
                            </div>
                        </div>

                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary" name="btnAddUser">Add new user</button>

                        </div>
                    </div>
                    <!-- /.row -->
                </form>

            </div>
        </div>
        <!-- END ADDING NEW USER -->


         <!-- ADD NEW ROLE -->
         <div class="box" id="text-page">
            <div id="editcontent2" class="toggle" style="display:none">

            <h2>Add new role</h2>

                <form action="<?php echo $_SERVER['PHP_SELF']."?page=admin" ; ?>" method="POST">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="role">Role</label>
                                <input type="text" class="form-control" id="tbAddRole" name="tbAddRole">
                            </div>
                        </div>
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary" name="btnAddRole">Add new role</button>

                        </div>
                    </div>
                    <!-- /.row -->
                </form>

            </div>
        </div>
        <!-- END ADDING NEW USER -->


                <!-- ADD NEW POST -->
                <div class="box" id="text-page">
            <div id="editcontent3" class="toggle" style="display:none">

            <h2>Add new post</h2>

                <form action="<?php echo $_SERVER['PHP_SELF']."?page=admin" ; ?>" method="POST">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="postTitle">Post Title</label>
                                <input type="text" class="form-control" id="tbPostTitle" name="tbPostTitle">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="postSUmmary">Summary</label>
                                <input type="text" class="form-control" id="tbPostSummary" name="tbPostSummary">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="postText">Text</label>
                                <textarea id="tbPostText" class="form-control" name="tbPostText"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="role">Author</label><br/>
                                <select name="ddlPostAuthor">
			                        <option value="0"> Select author </option>
                                        <?php
                                            $res_user = executeQuery("SELECT * FROM user");

                                            foreach($res_user as $user) : ?>
                                            
                                            <option value="<?= $user->id_user; ?>"><?= $user->first_name . " " . $user->last_name; ?> </option>
                                            
                                        <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary" name="btnAddPost">Add new user</button>

                        </div>
                    </div>
                    <!-- /.row -->
                </form>

            </div>
        </div>
        <!-- END ADDING NEW POST-->

        <!-- ADD NEW PRODUCT -->
        <div class="box" id="text-page">
            <div id="editcontent4" class="toggle" style="display:none">

            <h2>Add new product</h2>

                <form action="<?php echo $_SERVER['PHP_SELF']."?page=admin" ; ?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="productName">Product Name</label>
                                <input type="text" class="form-control" id="tbProductName" name="tbProductName">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="productPrice">Price</label>
                                <input type="text" class="form-control" id="tbProductPrice" name="tbProductPrice">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="productDetails">Details</label>
                                <input type="text" class="form-control" id="tbProductDetails" name="tbProductDetails">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="productMaterial">Material</label>
                                <input type="text" class="form-control" id="tbProductMaterial" name="tbProductMaterial">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="productSize">Size</label>
                                <input type="text" class="form-control" id="tbProductSize" name="tbProductSize">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="productImage">Image</label>
                                <input type="file" class="form-control" id="fProductImage" name="fProductImage">                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="sale">Sale</label></br>
                                <select name="ddlSale">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="new">New</label></br>
                                <select name="ddlNew">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="hot">Hot</label></br>
                                <select name="ddlHot">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="parent">Parent Category</label><br/>
                                <select name="ddlParent">
                                    <option value="0">Select parent</option>
                                    <option value="2">Men</option>
                                    <option value="3">Ladies</option>
                                </select>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="category">Select category</label><br/>
                                    <select name="ddlProductCategory">
                                        <option value="3"> Select Category</option>
                                        <option value="3"> Men Clothing </option>
                                        <option value="5"> Men Shoes </option>
                                        <option value="7"> Ladies Clothing </option>
                                        <option value="8"> Ladies Shoes </option>
                                        <option value="9"> Ladies Accessories </option> 
                                    </select>
                            </div>
                        </div>

                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary" name="btnAddProduct">Add new product</button>

                        </div>
                    </div>
                    <!-- /.row -->
                </form>

            </div>
        </div>
        <!-- END ADDING NEW USER -->

        
    </div>

        <!-- /.col-md-9 -->
    </div>
    <!-- /.container -->
</div>
<!-- /#content -->


<!-- ADD NEW ROLE TO DATABASE -->

<?php
if(isset($_POST['btnAddRole'])){
	$role = trim($_POST['tbAddRole']);
	$reRole= "/^[A-z0-9\s]{2,50}$/";
	$errors = [];

	if(!preg_match($reRole, $role)){
		$errors[] = "Role name is not ok.";
	}

	
	if(count($errors) > 0){
		
		echo "<ol>";
		
		foreach($errors as $error){
			echo "<li> $error </li>";
		}

		echo "</ol>";
	}
	else {
		$query = $conn->prepare('INSERT INTO roles VALUES (null, :role_name)');
		$query->bindParam(':role_name', $role);
		try {			
            $result = $query->execute();
            echo $result;
			
			if($result){
				echo "Role successfully added.";
			} else {
				echo "Error. Role can not be added.";
			}
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}
}
?>

<!-- END ADDING NEW ROLE TO DATABASE -->


<!-- ADD NEW POST TO DATABASE -->

<?php
if (isset($_POST["btnAddPost"])) {
    $postTitle = trim($_POST['tbPostTitle']);
    $postSummary = trim($_POST['tbPostSummary']);
    $postText = $_POST['tbPostText'];
    $author = $_POST['ddlPostAuthor'];

    # Validacija podataka

    $reTitle = "/^[A-z0-9-_?!\s\']{5,255}$/";
    $reSummary = "/^[A-z0-9\s\.-_]{5,300}$/";

    $errors = [];

    if (!preg_match($reTitle, $postTitle)) {
        $errors[] = "Post title is not ok.";
    }

    if (!preg_match($reSummary, $postSummary)) {
        $errors[] = "Summary is not ok";
    }

    if ($author=="0") {
        $errors[] = "Author has to be selected";
    }

    if (count($errors) > 0) {

        echo "<ol>";

        foreach ($errors as $error) {
            echo "<li> $error </li>";
        }

        echo "</ol>";
    } else { 
        $query = $conn->prepare("INSERT INTO post VALUES (null, :title, :summary, :postText, null, :author)");

        $query->bindParam(':title', $postTitle);
        $query->bindParam(':summary', $postSummary);
        $query->bindParam(':postText', $postText);
        $query->bindParam(':author', $author);

        // $datum = date("Y-m-d H:i:s"); // Dohvatanje trenutnog vremena i kreiranje formata u kom se belezi DATETIME tip kolone iz baze
        // //   $datum = time();
        // $upit_unos->bindParam(':datum', $datum);

        try {
            // izvrsavanje upita
            $result = $query->execute();

            if ($result) {
                echo "Post is successfully added.";
            } else {
                echo "Error. Please try again";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

?>

<!-- END ADDING NEW POST TO DATABASE -->


<!-- ADD NEW USER -->

<?php

if (isset($_POST['btnAddUser'])) {
    $firstName = trim($_POST['tbUserFirstName']);
    $lastName = trim($_POST['tbUserLastName']);
    $email = trim($_POST['tbUserEmail']);
    $pass = $_POST['tbUserPass'];
    $active = $_POST['ddlActive'];
    $userRole = $_POST['ddlUserRole'];
    $userBiography = $_POST['tbUserBiography'];

    $userImage = $_FILES['fUserImage'];

    var_dump($userImage);

    echo "<br/>";
    $fileName = $userImage['name'];
    $fileType = $userImage['type'];
    $fileSize = $userImage['size'];
    $tmpPath = $userImage['tmp_name'];

    $errors = [];

    $reName = "/^[A-Z][a-z]{2,50}$/";
    $rePassword = "/^[\S]{5,}$/";

    $errors = [];

    if (!preg_match($reName, $firstName)) {
        $errors[] = "First name is not ok.";
    }

    if (!preg_match($reName, $lastName)) {
        $errors[] = "Last name is not ok.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email nije ok";
    }

    if (!preg_match($rePassword, $pass)) {
        $errors[] = "Password is not ok.";
    }

    $allowedFormats = array("image/jpg", "image/jpeg", "image/png", "image/gif");

    if (!in_array($fileType, $allowedFormats)) {
        $errors[] = "File type is not ok.";
    }

    if ($fileSize > 3000000) { // 3.000.000B ~ 3MB
        $errors[] = "File size must be less than 3MB.";
    }

    if (count($errors) == 0) {

        $imageName = time() . $fileName;
        $newPath = "img/" . $imageName;


        if (move_uploaded_file($tmpPath, $newPath)) {

            try {

                $pass=md5($pass);
               
                $userInsert = "INSERT INTO user VALUES(null, :firstName, :lastName, :email, :pass, null, :active, :role_id :newPath, :biography)";

                $prepareUserInsert = $conn->prepare($userInsert);

                $prepareUserInsert->bindParam(":firstName", $firstName);
                $prepareUserInsert->bindParam(":lastName", $lastName);
                $prepareUserInsert->bindParam(":email", $email);
                $prepareUserInsert->bindParam(":pass", $pass);
                $prepareUserInsert->bindParam(":active", $active);
                $prepareUserInsert->bindParam(":role_id", $userRole);
                $prepareUserInsert->bindParam(":newPath", $newPath);
                $prepareUserInsert->bindParam(":biography", $userBiography);

                $result= $prepareUserInsert->execute();

                if ($result) {
                    echo "New user has been added successfully!";
                }

            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }

        } else {
            echo "File upload failed!";
        }
    } else {

        echo "<ol>";

        foreach ($errors as $error) {
            echo "<li> $error </li>";
        }

        echo "</ol>";
    }
}
?>

<!-- END ADDING NEW USER -->


<!-- ADD NEW PRODUCT -->

<?php
if (isset($_POST['btnAddProduct'])) {
    $productName = trim($_POST['tbProductName']);
    $productPrice = trim($_POST['tbProductPrice']);
    $productDetails = trim($_POST['tbProductDetails']);
    $material = $_POST['tbProductMaterial'];
    $size = $_POST['tbProductSize'];

    $sale = $_POST['ddlSale'];
    $new = $_POST['ddlNew'];
    $hot = $_POST['ddlHot'];
    $parent = $_POST['ddlParent']; 

    $productCategory = $_POST['ddlProductCategory'];

    $productImage = $_FILES['fProductImage'];

    $fileName = $productImage['name'];
    $fileType = $productImage['type'];
    $fileSize = $productImage['size'];
    $tmpPath = $productImage['tmp_name'];

    $errors = [];

    $reProductName = "/^[A-Za-z0-9\s]+$/";
    $reProductPrice = "/^[0-9]{1,30}$/";
    $reMaterialAndDetails = "/^[A-Z][a-z0-9\s.,-_]*$/";
    $reSize ="/^[A-z.,0-9\s]*$/";


    $errors = [];

    if (!preg_match($reProductName, $productName)) {
        $errors[] = "Product name is not ok.";
    }

    if (!preg_match($reProductPrice, $productPrice)) {
        $errors[] = "Product price is not ok.";
    }

    if (!preg_match($reMaterialAndDetails, $productDetails)) {
        $errors[] = "Materials are not ok.";
    }
    if (!preg_match($reMaterialAndDetails, $material)) {
        $errors[] = "Details are not ok.";
    }

    if (!preg_match($reSize, $size)) {
        $errors[] = "Size is notok.";
    }
    if($parent=="0"){
        $errors[] = "Parent has to be selected.";
    }
    if($productCategory=="0"){
        $errors[] = "Category has to be selected.";
    }

    $allowedFormats = array("image/jpg", "image/jpeg", "image/png", "image/gif");

    if (!in_array($fileType, $allowedFormats)) {
        $errors[] = "File type is not ok.";
    }

    if ($fileSize > 3000000) { // 3.000.000B ~ 3MB
        $errors[] = "File size must be less than 3MB.";
    }

    if (count($errors) == 0) {

        $imageName = time() . $fileName;
        $newPath = "img/" . $imageName;


        if (move_uploaded_file($tmpPath, $newPath)) {

            try {

                
                $productInsert = "INSERT INTO product VALUES(null, :productName, :price, :details, 
                :material, :size, :imagePath, :sale, :new, :hot, NULL, :parent, :category)";

                $prepareProductInsert = $conn->prepare($productInsert);

                $prepareProductInsert->bindParam(":firstName", $productName);
                $prepareProductInsert->bindParam(":price", $productPrice);
                $prepareProductInsert->bindParam(":details", $productDetails);
                $prepareProductInsert->bindParam(":material", $material);
                $prepareProductInsert->bindParam(":size", $size);
                $prepareProductInsert->bindParam(":imagePath", $userRole);
                $prepareProductInsert->bindParam(":sale", $sale);
                $prepareProductInsert->bindParam(":new", $new);
                $prepareProductInsert->bindParam(":hot", $hot);
                $prepareProductInsert->bindParam(":parent", $parent);
                $prepareProductInsert->bindParam(":category", $productCategory);

                $result= $prepareProductInsert->execute();

                if ($result) {
                    echo "New product has been added successfully!";
                }

            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }

        } else {
            echo "File upload failed!";
        }
    } else {

        echo "<ol>";

        foreach ($errors as $error) {
            echo "<li> $error </li>";
        }

        echo "</ol>";
    }
}
?>



<!-- END ADDING NEW PRODUCT -->