<?php
if(isset($_GET['controller']) && !empty($_GET['controller']) ) {

    if (file_exists(CONTROLLERS."$_GET[controller]Controller.php")) {
        require_once CONTROLLERS."$_GET[controller]Controller.php";

        $class = $_GET['controller'];


        if (isset($_GET['method']) && !empty($_GET['method'])){

            if(class_exists($class) && method_exists($class, $_GET['method'])){
                $cl = new $class;
                $cl->$_GET['method']();
            } else {
                header("Location:".HOST."404.html");
            }

        } else {
            if(class_exists($class) && method_exists($class,'display')){
                $cl = new $class;
                $cl->display();
            } else {
                header("Location:".HOST."404.html");
            }
        }


    } else {
        header("Location:".HOST."404.html");
    }

} else {
    require_once CONTROLLERS."mainController.php";
    $class = new main;
    $class->display();
}

?>