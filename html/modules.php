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

  function modChrome_sidebar_events( $module, &$params, &$attribs )
  {
    $module->title = JText::_( 'TPL_TSB2017_MOD_EVENTS' );
    modChrome_sidebar( $module, $params, $attribs );
  }

  function modChrome_sidebar_partners( $module, &$params, &$attribs )
  {
    $module->title = JText::_( 'TPL_TSB2017_MOD_PARTNERS' );
    modChrome_sidebar( $module, $params, $attribs );
  }
?>

