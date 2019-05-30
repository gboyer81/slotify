<?php
  include("includes/config.php");
  include("includes/classes/Account.php");
  include("includes/classes/Constants.php");

  $account = new Account($con);

  include("includes/handlers/register-handler.php");
  include("includes/handlers/login-handler.php");

  function getInputValue($name) {
    if(isset($_POST[$name])) {
      echo $_POST[$name];
    }
  }
?>

<html>
<head>
  <title>Welcome to slotify!</title>
</head>
<body>
  <div id="inputContainer" >

    <!-- LOGIN FORM ------------------------------------------------------------------------------------>

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

    <!-- REGISTER FORM --------------------------------------------------------------------------------->

    <form id="registerForm" action="register.php" method="POST">
      <h2>Create a free account</h2>
      <p>
        <p><?php echo $account->getError(Constants::$usernameCharacters); ?></p>
        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="username" value="<?php getInputValue('username'); ?>" required />
      </p>
      <p>
        <p><?php echo $account->getError(Constants::$firstNameCharacters); ?></p>
        <label for="firstName">First Name</label>
        <input id="firstName" name="firstName" type="text" placeholder="First Name" value="<?php getInputValue('firstName'); ?>" required />
      </p>
      <p>
        <p><?php echo $account->getError(Constants::$lastNameCharacters); ?></p>
        <label for="lastName">Last Name</label>
        <input id="lastName" name="lastName" type="text" placeholder="Last Name" value="<?php getInputValue('lastName'); ?>" required />
      </p>
      <p>
        <p><?php
          echo $account->getError(Constants::$emailsDoNotMatch);
          echo $account->getError(Constants::$emailInvalid);
        ?></p>
        <label for="email">Email</label>
        <input id="email" name="email" type="email" placeholder="Email" value="<?php getInputValue('email'); ?>" required />
      </p>
      <p>
        <label for="email2">Confirm</label>
        <input id="email2" name="email2" type="email" placeholder="Confirm Email" value="<?php getInputValue('email2'); ?>" required />
      </p>
      <p>
        <p><?php
          echo $account->getError(Constants::$passwordsDoNotMatch);
          echo $account->getError(Constants::$passwordAlphaNumeric);
          echo $account->getError(Constants::$passwordsCharacters);
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
