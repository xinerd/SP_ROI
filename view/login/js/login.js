/**
 * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
 * Created by xinerd on 10/5/15.
 */
function chk_login() {
    var email = document.getElementById("email");
    if (email.value == "") {
        alert("enter email before submit！");
        return false;
        //email.focus();
    }

    var pwd = document.getElementById("pwd");
    if (pwd.value == "") {
        alert("enter password before submit！");
        return false;
    }

    var preg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/; //match Email
    if (!preg.test(email.value)) {
        alert("Email format is wrong. [*@*.*]！");
        return false;
        //email.focus();
    }
}