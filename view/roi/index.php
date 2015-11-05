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

        <form class="form-horizontal" role="form">

            <div class="col-md-3">

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control input-lg" id="firstName" min="1"
                               maxlength="20" placeholder="First Name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control input-lg" id="lastName" min="1"
                               maxlength="20" placeholder="lastName">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="email" class="form-control input-lg" id="email"
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

    </div>


</div>

<script type="text/javascript">
    $(document).ready(function () {
        // var slider = $('#slider').CircularSlider();
        var slider = $('#slider').CircularSlider({
            radius: 120,
            innerCircleRatio: '0.8',
            handleDist: 100,
            min: 0,
            max: 400,
            value: 0,
            clockwise: true,
            labelSuffix: "",
            labelPrefix: "$",
            shape: "Circle",
            touch: true,
            animate: true,
            animateDuration: 360,
            selectable: false,
            slide: function (ui, value) {
                $("#result").html("value:" + value);
                if (value <= 50) {
                    $("#billAdvice").load("data/bill_advice.txt #step1greenSuggestion");
                    $(".jcs-value").css("backgroundColor", "#879652");
                } else if (50 < value && value <= 100) {
                    $("#billAdvice").load("data/bill_advice.txt #step2yellowSuggestion");
                    $(".jcs-value").css("backgroundColor", "##F4B70B");
                } else if (100 < value && value <= 150) {
                    $("#billAdvice").load("data/bill_advice.txt #step3orangeSuggestion");
                    $(".jcs-value").css("backgroundColor", "#F08036");
                } else if (150 < value && value <= 200) {
                    $("#billAdvice").load("data/bill_advice.txt #step4redorangeSuggestion");
                    $(".jcs-value").css("backgroundColor", "#F17126");
                } else if (200 < value && value <= 250) {
                    $("#billAdvice").load("data/bill_advice.txt #step5redSuggestion");
                    $(".jcs-value").css("backgroundColor", "#DC3B26");
                } else if (250 < value && value <= 300) {
                    $("#billAdvice").load("data/bill_advice.txt #step6darkredSuggestion");
                    $(".jcs-value").css("backgroundColor", "red");
                } else if (300 < value) {
                    $("#billAdvice").load("data/bill_advice.txt #step6darkredSuggestion");
                    $(".jcs-value").css("backgroundColor", "red");
                    //                        slider.labelSuffix = "+";
                }
            },
            onSlideEnd: function (ui, value) {
                //alert("value:" + value);
            },
            formLabel: undefined
        });
    });

</script>

