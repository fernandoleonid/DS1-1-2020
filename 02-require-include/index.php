<?php 
    
    include './header.php';

    $url = $_GET['url'] ?? 'home';

    // echo "{$url}.php";
    include "{$url}.php";
   

    include './footer.php';

?>