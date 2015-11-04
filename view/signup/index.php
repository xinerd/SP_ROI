<?php
/**
 * Project: SP_ROI
 * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
 * Author: XIN MING
 * Since: 11/3/15 5:45 PM
 */

?>
<div class="container">
    <div style="text-align: center;"><h2>Sign Up</h2></div>
    <br>

    <form class="form-horizontal" role="form" method="post" id="reg" action="signup/run"
          onsubmit="return chk_form();">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>

            <div class="col-sm-5">
                <input type="email" class="form-control" id="email" name="email"
                       placeholder="Enter email" maxlength="40">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="userid">Name:</label>

            <div class="col-sm-5">
                <input type="text" class="form-control" id="userid" name="userid"
                       placeholder="Enter user name" maxlength="20">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>

            <div class="col-sm-5">
                <input type="password" class="form-control" id="pwd" name="pwd"
                       placeholder="Enter password" maxlength="20">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="repwd">Re-Password:</label>

            <div class="col-sm-5">
                <input type="password" class="form-control" id="repwd"
                       placeholder="Re-enter password" maxlength="20">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</div>



<script type="text/javascript">
    function chk_form() {
        var email = document.getElementById("email");
        if (email.value == "") {
            alert("enter email before submit！");
            return false;
            //email.focus();
        }
        var userid = document.getElementById("userid");
        if (userid.value == "") {
            alert("enter user name before submit！");
            return false;

        }
        var pwd = document.getElementById("pwd");
        if (pwd.value == "") {
            alert("enter password before submit！");
            return false;
        }
        var repwd = document.getElementById("repwd");
        if (repwd.value == "") {
            alert("enter repassword before submit！");
            return false;
        }
        var preg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/; //match Email
        if (!preg.test(email.value)) {
            alert("Email format is wrong. [*@*.*]！");
            return false;
            //email.focus();
        }
        if (repwd.value != pwd.value) {
            alert("you entered different password.");
            return false;
        }
    }
</script>
