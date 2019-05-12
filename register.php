<?php

function sanitizeFormPassword($inputText) {
  $inputText = strip_tags($inputText);
  return $inputText;
}

function sanitizeFormUsername($inputText) {
  $inputText = strip_tags($inputText);
  $inputText = str_replace(" ", "", $inputText);
  return $inputText;
}

function sanitizeFormString($inputText) {
  $inputText = strip_tags($inputText);
  $inputText = str_replace(" ", "", $inputText);
  $inputText = ucfirst(strtolower($inputText));
  return $inputText;
}

if(isset($_POST['loginButton'])) {
  //Login button was pressed

}

if(isset($_POST['registerButton'])) {
  //Register button was pressed
  $username =  sanitizeFormUsername($_POST['username']);
  $firstName = sanitizeFormString($_POST['firstName']);
  $lastName =  sanitizeFormString($_POST['lastName']);
  $email =     sanitizeFormString($_POST['email']);
  $email2 =    sanitizeFormString($_POST['email2']);
  $password =  sanitizeFormPassword($_POST['password']);
  $password2 = sanitizeFormPassword($_POST['password2']);
}

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
        <label for="loginUsername">Password</label>
        <input id="loginPassword" name="loginPassword" type="password" required />
      </p>

      <button type="submit" name="loginButton">LOG IN</button>

    </form>

    <form id="registerForm" action="register.php" method="POST">
      <h2>Create a free account</h2>
      <p>
        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="username" required />
      </p>
      <p>
        <label for="firstName">First Name</label>
        <input id="firstName" name="firstName" type="text" placeholder="First Name" required />
      </p>
      <p>
        <label for="lastName">Last Name</label>
        <input id="lastName" name="lastName" type="text" placeholder="Last Name" required />
      </p>
      <p>
        <label for="email">Email</label>
        <input id="email" name="email" type="email" placeholder="Email" required />
      </p>
      <p>
        <label for="email2">Confirm</label>
        <input id="email2" name="email2" type="email" placeholder="Confirm Email" required />
      </p>
      <p>
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
