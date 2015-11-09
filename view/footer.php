<?php
/**
 * Project: SP_ROI
 * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
 * Author: XIN MING
 * Since: 11/1/15 1:08 PM
 */

?>

<!--<hr/>-->

<nav class="navbar navbar-inverse ">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Investor</a>
        </div>
        <div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Privacy Policy | Trademark | Terms Of Use |
                        Careers</a></li>
                <li><a href="#">© Copyright 2015 UML</a></li>

            </ul>
        </div>
    </div>
</nav>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<?php
if (isset($this->js)) {
    foreach ($this->js as $js) {
        echo '<script type="text/javascript" src="' . URL . 'view/' . $js . '"></script>';
    }
}
?>


</body >
</html >