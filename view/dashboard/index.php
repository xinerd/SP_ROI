<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div id="wrapper">


    <?php

    $user = Session::get('user');


    //    echo $user->getId()
    //        . ' | ' . $user->getUserName()
    //        . ' | ' . $user->getEmail()
    //        . ' | ' . $user->getRegTime();


    //        $gifo = new get_guest_info();
    //
    //
    //        echo "<br/>Browser Type：" . $gifo->GetBrowser();
    //        echo "<br/>Language：" . $gifo->GetLang();
    //        echo "<br/>OS：" . $gifo->GetOs();
    //
    //
    //        ?>
    <!--        <p id="demo">Click the button to get your position.</p>-->
    <!---->
    <!--        <button onclick="getLocation()">Try It</button>-->
    <!---->
    <!--        <div id="mapholder"></div>-->

    <?php
    require 'sidebar.html';
    require 'main.php';
    ?>


</div>
