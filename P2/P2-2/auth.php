<?php

$valid_passwords = array ("mario" => "qwerty", "juan" => "123456");
$valid_users = array_keys($valid_passwords);

$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];

$validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);

if (!$validated) {
  header('WWW-Authenticate: Basic realm="My Realm"');
  header('HTTP/1.0 401 Unauthorized');
  die ("Not authorized");
}

// If it arrives here, it is a valid user.
echo "<p>Welcome $user.</p>";
echo "<p>Congratulation, you are into the system.</p>";
