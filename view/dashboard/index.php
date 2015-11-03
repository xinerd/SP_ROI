User info:
<?php
$user = Session::get('user');
echo $user->getId()
    . ' | ' . $user->getUserName()
    . ' | ' . $user->getEmail()
    . ' | ' . $user->getRegTime();
?>
<br/>
Dashboard... Logged in only..