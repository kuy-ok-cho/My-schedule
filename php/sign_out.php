<?php

  session_start();
  unset($_SESSION['usercode']);

  echo "
    <script>
      location.href='/myschedule/index.php';
    </script>
  ";

?>