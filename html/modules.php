<?php 
  function modChrome_sidebar( $module, &$params, &$attribs ) 
  {
    if (isset( $attribs['headerLevel'] )) 
    {
      $headerLevel = $attribs['headerLevel'];
    } else {
      $headerLevel = 3;
    }
    
    echo '<div class="module-item' .$params->get( 'moduleclass_sfx' ) .'" >';
    
    if ($module->showtitle) 
    {
      echo '<h' .$headerLevel .'>' .$module->title .'</h' .$headerLevel .'>';
    }
    echo '<div class="content">' . $module->content . '</div>';
    
    echo '</div>';
  }
?>

