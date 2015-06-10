<?php

/* Includes */
$roots_includes = array(
  'lib/init.php',   // Init file menu config etc.
  'lib/wrapper.php' // Theme Wrapper Class
);



foreach ($roots_includes as $file) {
  if(!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'ooTheme'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

/* Theme Class */
require_once 'lib/classes/class.Site_Theme.php';
$theme = new Site_Theme();
