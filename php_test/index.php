<?php
   session_start();

   $accessToken = $_SESSION('my_access_token_accessToken')
?>
<html>
<head>
</head>
<body>


  <?php
  echo '<p>access token:</p>';
  echo '<p><code>' .$accessToken. '</code></p>';
  echo '<br />';

  if ($accessToken != "") {
    echo '<p>Logged in!</p>';
  } else {
    echo '<p><a href="https://github.com/login/oauth/authorize?client_id=0512b3d00db691f699d7>Sign in with github</a></p>"';
  }
?>
</body>
</html>
