<div id="wrapper">

    <?php
    $user = Session::get('user');
    require 'sidebar.php';
    if ($this->main == DASHBOARD_INDEX) {
        require 'main.php';
    } elseif ($this->main == DASHBOARD_COMMENTS) {
        require 'comments.php';
    } elseif ($this->main == DASHBOARD_DEALS) {
        require 'deals.php';
    } elseif ($this->main == DASHBOARD_ORDERS) {
        require 'orders.php';
    } elseif ($this->main == DASHBOARD_MONITOR) {
        require 'monitor.php';
    } else {
        require 'error.php';
    }
    ?>

</div>
