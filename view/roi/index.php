<?php
/**
 * Project: SP_ROI
 * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
 * Author: XIN MING
 * Since: 11/4/15 5:30 PM
 */
?>

<!--<link rel="stylesheet" href="css/universal.css"/>-->
<!-- circular -->


<div class="container">
    <div style="text-align: center;"><h2>ROI Caculator</h2></div>

    <div class="row">
        <div class="col-md-3">
            <div id="slider">
            </div>
            <!--<div id="result">-->
            <!--</div>-->

            <div id="billAdvice">
            </div>
        </div>

        <form class="form-horizontal" role="form" method="post" id="reg" action="report/general"
              onsubmit="return chk_form();">
            <div class="col-md-3">

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control input-lg" name="firstName"
                               id="firstName" min="1"
                               maxlength="20" placeholder="First Name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control input-lg" id="lastName"
                               name="lastName" min="1"
                               maxlength="20" placeholder="lastName">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="email" class="form-control input-lg" id="email" name="email"
                               placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="number" class="form-control input-lg" id="phone" min="1"
                               maxlength="11"
                               placeholder="Phone">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="number" class="form-control input-lg" id="zipCode" min="1"
                               maxlength="5"
                               placeholder="zipCode">
                    </div>
                </div>

            </div>


            <div class="col-md-3">
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control input-lg" id="homeAddress" min="1"
                               placeholder="homeAddress">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-sm-12">
                        <input type="text" class="form-control input-lg" id="state" min="1"
                               placeholder="state">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-sm-12">
                        <input type="text" class="form-control input-lg" id="city" min="1"
                               placeholder="city">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control input-lg" id="roofShade" min="1"
                               placeholder="roof shade">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control input-lg" id="isOwner" min="1"
                               placeholder="Do you own the home">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-1 ">
                        <button type="submit"
                                class="btn btn-primary btn-lg">&nbsp;Send me a
                            free quote now&nbsp;
                        </button>
                    </div>
                </div>

            </div>


        </form>

        <span class='st_sharethis_large' displayText='ShareThis'></span>
        <span class='st_facebook_large' displayText='Facebook'></span>
        <span class='st_twitter_large' displayText='Tweet'></span>
        <span class='st_linkedin_large' displayText='LinkedIn'></span>
        <span class='st_pinterest_large' displayText='Pinterest'></span>
        <span class='st_email_large' displayText='Email'></span>

    </div>


</div>

<script type="text/javascript">
    function chk_form() {
//        var email = document.getElementById("email");
//        if (email.value == "") {
//            alert("enter email before submit！");
//            return false;
//        }
        return true;
    }
</script>