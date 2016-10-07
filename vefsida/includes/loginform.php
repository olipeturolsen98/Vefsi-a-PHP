 <?php

 if(isset($_POST['login']))
 {
     $uname = trim(strip_tags($_POST['username']));
     $upass = trim(strip_tags($_POST['password']));

     // Do login from Auth class
     if($user->doLogin($uname,$upass))
     {
         // Sets session on user
         $_SESSION["username"] = $uname;
         // Redirect from Auth class
         $user->redirect('upload.php');
     }
     else
     {
         // if username or password is wrong an error will happen
         $error = "Wrong Details !";
     }
 }
?>

<form method="post" action="">
    <p>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
    </p>
    <p>
        <label for="pwd">Password:</label>
        <input type="password" name="password" id="pwd">
    </p>
    <p>
        <input name="login" type="submit" value="Log in">
    </p>
</form>
