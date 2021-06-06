<?php 
    require_once __DIR__ . '/partials/themeplate/head.php';
    require_once __DIR__ . '/partials/classes/user/user.php';
    require_once __DIR__ . '/partials/classes/user/extends/employe.php';
?>

<body>

    <h1>USERS</h1>

    <?php
        //USERS
        $user1 = new User('Luca', 'Rossi', 'lucarossi@gmail.it', 34, true);
        $user2 = new User('Marco', 'Bianchi', 'marcobianchi@gmail.it', 23);
        
        var_dump($user1);
        var_dump($user2);

        //EMPLOYES
        $employe1 = new Employe('Macio', 'Capatonda', 'email@email.boh', 'un pò', 'altissimo', 'ieri scorso');
        $employe2= new Employe('Andrea', 'Darta', 'andreadarta@gmail.it', 26, 4, '12-04-2010');

        var_dump($employe1);
        var_dump($employe2);

    ?>

    <a href="http://localhost/php-intro/es9%20PHP%20OOP%20Extends/arredo.php">arredamento >></a>
    
</body>
</html>