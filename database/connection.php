<?php
require 'config.php';
$con = mysqli_connect(HOST, USER, PWD, DB);
if (!$con) {
  echo 'error while connection db';
  die();
}
