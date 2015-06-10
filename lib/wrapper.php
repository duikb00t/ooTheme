<?php

function roots_template_path() {
  return ooTheme_Wrapping::$main_template;
}



class ooTheme_Wrapping {

  // Store the full path to the main template file.
  public static $main_template;

  // Basename of the file.
  public $slug;

  // Array of templates
  public $templates;

  static $base;

  public function __construct($template = 'base.php') {

    $this->slug = basename($template, '.php');
    $this->templates = array($template);

    if(self::$base) {
      $str = substr($template, 0, -4);
      array_unshift($this->templates, sprintf($str . '-%s.php', self::$base));
    }
  }

  static function wrap($main) {
    // Check for other filters returning null
    if (!is_string($main)) {
      return $main;
    }

    self::$main_template = $main;
    self::$base = basename(self::$main_template, '.php');

    if (self::$base === 'index') {
      self::$base = false;
    }

    return new ooTheme_Wrapping();
  }
}
add_filter('template_include', array('ooTheme_Wrapping', 'wrap'), 99);
