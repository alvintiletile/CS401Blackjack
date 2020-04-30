<!--this page will display data saved into the user's login session-->

<?php 
   session_start();
   if(!isset($_SESSION['id'])){
       echo "ERROR! No session detected. Page restricted." ;
       include('hw4_user_login.php');
       exit();
   }
?>

<!doctype html>
<html>

  <head>
    <title>Welcome to BlackJack!</title>
  </head>

  <header>
      <ul class="navBar">
      <li class="navBar"><a href="hw4_logout_page.php">Log Out</a></li>
      <li class="navBar"><a href="hw4_acct_session.php">Account</a></li>
      <li class="navBar"><a href="hw4_new_user_login.php">New User Reg</a></li>

      </ul>
  </header>

  <body>
    <h1>Welcome to BlackJack!</h1>
    <p>Your data is as follows: <br>
    <br>User Id: <?php echo $_SESSION['id'];?>
    <br>User Name: <?php echo $_SESSION['login_user'];?>
    <br>Account Money: <?php echo $_SESSION['acct_money'];?>
  </body>

</html>