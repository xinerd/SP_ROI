Dashboard... <br/>

User info:
<?php



$user = Session::get('user');
echo $user->getId()
    . ' | ' . $user->getUserName()
    . ' | ' . $user->getEmail()
    . ' | ' . $user->getRegTime();


$gifo = new get_guest_info();


echo "<br/>Browser Type：" . $gifo->GetBrowser();
echo "<br/>Language：" . $gifo->GetLang();
echo "<br/>OS：" . $gifo->GetOs();


?>
<p id="demo">Click the button to get your position.</p>

<button onclick="getLocation()">Try It</button>

<div id="mapholder"></div>


<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>


