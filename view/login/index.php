<div style="text-align: center;"><h1>Login</h1></div>

<!-- login form -->
<form class="form-horizontal" role="form" method="post" action="login/run"
      onsubmit="return chk_login();">
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>

        <div class="col-sm-5">
            <input type="email" class="form-control" id="email" name="login"
                   placeholder="Enter email">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Password:</label>

        <div class="col-sm-5">
            <input type="password" class="form-control" id="pwd" name="password"
                   placeholder="Enter password">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>
</form>
<!-- end of login form -->