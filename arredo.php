<?php 
    require_once __DIR__ . '/partials/themeplate/head.php';
    require_once __DIR__ . '/partials/classes/item/item.php';
    require_once __DIR__ . '/partials/classes/item/extends/mobile.php';
?>

<body>

<h1>ARREDAMENTO</h1>

<?php
    //ARREDAMENTO
    $mobile1= new Mobile(rand(0,1000), 'KULLEN', 'Cassettiera', 'IKEA', 25, ['BIANCO', 'NERO']);
    
    var_dump($mobile1);
    
    try{
        $mobile1->set_size(35,49,'3');
        echo $mobile1->get_size();
    }catch(Exception $e){
        echo 'Error: ' . $e->getMessage();
    }


?>
<br>
<a href="http://localhost/php-intro/es9%20PHP%20OOP%20Extends">users >></a>
    
</body>
</html>