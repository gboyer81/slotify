<?php
  include("includes/classes/Account.php");

  $account = new Account();

  include("includes/handlers/register-handler.php");
  include("includes/handlers/login-handler.php");
?>

<html>
<head>
  <title>Welcome to slotify!</title>
</head>
<body>
  <div id="inputContainer" >
    <form id="loginForm" action="register.php" method="POST">
      <h2>Login to your account</h2>
      <p>
        <label for="loginUsername">Username</label>
        <input id="loginUsername" name="loginUsername" type="text" placeholder="username" required />
      </p>
      <p>
        <label for="loginPassword">Password</label>
        <input id="loginPassword" name="loginPassword" type="password" required />
      </p>

      <button type="submit" name="loginButton">LOG IN</button>

    </form>

    <form id="registerForm" action="register.php" method="POST">
      <h2>Create a free account</h2>
      <p>
        <p><?php echo $account->getError("Your username must be between 5 and 25 characters"); ?></p>
        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="username" required />
      </p>
      <p>
        <p><?php echo $account->getError("Your first name must be between 2 and 25 characters"); ?></p>
        <label for="firstName">First Name</label>
        <input id="firstName" name="firstName" type="text" placeholder="First Name" required />
      </p>
      <p>
        <p><?php echo $account->getError("Your last name must be between 2 and 25 characters"); ?></p>
        <label for="lastName">Last Name</label>
        <input id="lastName" name="lastName" type="text" placeholder="Last Name" required />
      </p>
      <p>
        <p><?php
          echo $account->getError("Your emails do not match!");
          echo $account->getError("Your email is invalid!");
        ?></p>
        <label for="email">Email</label>
        <input id="email" name="email" type="email" placeholder="Email" required />
      </p>
      <p>
        <label for="email2">Confirm</label>
        <input id="email2" name="email2" type="email" placeholder="Confirm Email" required />
      </p>
      <p>
        <p><?php
          echo $account->getError("Passwords do not match!");
          echo $account->getError("Your password can only contain letters and numbers!");
          echo $account->getError("Password must be between 5 and 30 characters!");
        ?></p>
        <label for="password">Password</label>
        <input id="password" name="password" type="password" required />
      </p>
      <p>
        <label for="password2">Confirm</label>
        <input id="password" name="password2" type="password" required />
      </p>

      <button type="submit" name="registerButton">Register</button>

    </form>
  </div>
</body>
</html>
