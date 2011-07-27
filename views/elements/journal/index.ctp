<?php
$theme_view = APP . 'plugins' . DS . strtolower($activeThemePlugin) . DS .
              'views' . DS . 'elements' . DS .  strtolower($type) . DS . 'index-post.ctp';
if (is_file($theme_view)) {
    $plugin =  $activeThemePlugin;
}
echo $this->element(
    Inflector::underscore($type) . "/index-post",
    array('plugin' => $plugin, 'post' => $post)
);
?>
