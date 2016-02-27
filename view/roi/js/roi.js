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