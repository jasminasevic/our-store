
    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="index.php" data-animate-hover="bounce">
                    <img src="img/os-logo.png" alt="Obaju logo" class="hidden-xs">
                    <img src="img/logo-small.png" alt="Obaju logo" class="visible-xs">
                    <span class="sr-only">Obaju - go to homepage</span>
                </a>
                
            </div>
            <!--/.navbar-header -->

    <?php

$upit = "SELECT * FROM navigation n";

$res = executeQuery($upit);

$novi = array();

foreach ($res as $r) {
    $novi[] = array("id" => intval($r->id_link),
        "title" => $r->name,
        "parent_id" => $r->parent,
        "path" => $r->path,
        "id_link" => $r->id_link,
    );
}

function has_children($rows, $id)
{
    foreach ($rows as $row) {
        if ($row['parent_id'] == $id) {
            return true;
        }
    }
    return false;
}

function build_menu($rows, $parent = 0)
{
    $result = "<ul>";
    foreach ($rows as $row) {
        if ($row['parent_id'] == $parent) {
            $result .= "<li><a href='" . $row['path'] . "&parent=" . $row['parent_id'] . "&category=" . $row['id_link'] . "'>" . $row['title'] . "</a>";
            if (has_children($rows, $row['id'])) {
                $result .= build_menu($rows, $row['id']);
            }

            $result .= "</li>";
        }
    }
    $result .= "</ul>";

    return $result;
}

?>

            <div class="navbar-collapse collapse" id="navigation">
                <div id='cssmenu'>

                <?php echo build_menu($novi); ?>

                </div>

            </div>
            <!--/.nav-collapse -->

            
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->
