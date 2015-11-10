<div id="wrapper">

    <?php
    $user = Session::get('user');

    if ($this->main == DASHBOARD_INDEX) {
        require 'sidebar.php';
        require 'main.php';
    } elseif ($this->main == DASHBOARD_MONITOR) {
        require 'sidebar.php';
        require 'monitor.php';
    } else {
        require 'sidebar.php';
        require 'error.php';
    }
    ?>

</div>
