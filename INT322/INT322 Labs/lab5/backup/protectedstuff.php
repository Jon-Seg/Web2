<?php
session_start();
if(isset($_SESSION['loggedIn']))
{
$loggedIn = $_SESSION['loggedIn'];    
}
else
{
    $loggedIn ='';
}
function redirect($url)
    {
        header("Location: ".$url);
        die();
        exit;
    }
?>
<?php
if($loggedIn == 'FALSE')
{
redirect("login2.php");
}
?>
<html>
  <head>
    <title>Lab 5</title>
  </head>
  <body>
<?php
if($loggedIn == 'TRUE')
{?>
<h1>Welcome</h1>
<?php
}
else
{?>
<p>You are not logged in</p>
<?php }?>
<table>
  <tr>
    <td><a href="logout.php">Logout of session</a></td>
    <td><p><a href="page2.php">Page 2</a></p></td>
</tr>
</table>
</body>
</html>

