<?php
function rootPath($path = '') {
  return __DIR__ . '/' . $path;
}

function loadView($name, $data = '') {
  require rootPath("views/$name.view.php");
}
