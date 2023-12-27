<?php
function rootPath($path = '') {
  return __DIR__ . '/' . $path;
}

function loadView($name, $data = '') {
  require rootPath("views/$name.view.php");
}

function loadPartial($name) {
  require rootPath("partials/$name.php");
}
