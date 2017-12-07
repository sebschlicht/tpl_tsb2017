<?php
/**
 * @package JabLab.Site
 * @subpackage Templates.Responsive
 *
 * @copyright Copyright (C) 2017 - JabLab GbR., Inh. Sebastian Schlicht und Markus Münzel. All rights reserved.
 */
defined( '_JEXEC') or die;

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

$params   = $app->getTemplate(true)->params;
$sitename = $app->get('sitename');
$tmplDir = $this->baseurl . '/templates/' . $this->template;

// load Fonts
//$doc->addStyleSheet("https://fonts.googleapis.com/css?family=Raleway:200,300,400,800");
$doc->addStyleSheet("https://fonts.googleapis.com/css?family=Oswald");
$doc->addStyleSheet("https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css");

// add stylesheets
//JHtml::_('bootstrap.loadCss');
$doc->addStyleSheet("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/template.css');

// add JavaScript
//$doc->addScript('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
JHtml::_('bootstrap.framework');
//$doc->addScript($this->baseurl . '/media/jui/js/bootstrap.min.js');
$doc->addScript($tmplDir . '/js/template.js');

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="<?php echo $this->baseurl . '/templates/' . $this->template; ?>/favicon.png" />
  <jdoc:include type="head" />
</head>

<body>
  <!-- top bar -->
  <?php if ($this->countModules('topmenu') || $this->countModules('search')) : ?>
  <div class="topbar-wrapper">
    <div class="topbar container">
      <div class="row">
        <div class="topbar-menu col-xs-12 col-sm-9">
          <jdoc:include type="modules" name="topmenu" style="xhtml" />
        </div>
        <div class="topbar-search col-xs-6 col-sm-3">
          <jdoc:include type="modules" name="search" style="xhtml" />
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  
  <!-- header -->
  <nav class="header-wrapper navbar navbar-default">
    <div class="container">
      <!-- brand and menu toggle -->
      <div class="row">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed open-menu" data-toggle="collapse" data-menu="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only"><?php echo JText::_('TPL_TSB2017_TOGGLE_MENU'); ?></span>
            <span class="icon-bar upper-icon-bar"></span>
            <span class="icon-bar middle-icon-bar"></span>
            <span class="icon-bar lower-icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $this->baseurl; ?>/">
            <div class="navbar-logo">
              <img src="<?php echo $tmplDir; ?>/images/logo.png" alt="TSB" />
            </div>
            <div class="navbar-title hidden-xs hidden-sm hidden-md">
              <img src="<?php echo $tmplDir; ?>/images/title.png" alt="Turnerschaft Bendorf" />
            </div>
          </a>
        </div>

        <!-- menu and other toggleable content -->
        <div class="collapse navbar-right navbar-collapse" id="bs-example-navbar-collapse-1">
          <?php // requires menu class suffix ' navbar-nav' ?>
          <jdoc:include type="modules" name="mainmenu" style="none" />
        </div>
        <div id="isXs" class="visible-xs-block"></div>
      </div>
    </div>
  </nav>
  
  <!-- slider -->
  <?php if ($this->countModules('slider')) : ?>
  <div class="container-fluid">
    <div class="row">
      <div id="slider" class="col-xs-12">
        <jdoc:include type="modules" name="slider" style="xhtml" />
      </div>
    </div>
  </div>
  <?php endif; ?>
  
  <!-- intro menu -->
  <?php if ($this->countModules('intro')) : ?>
  <div class="container">
    <div class="row">
      <div id="intro" class="col-xs-12">
        <jdoc:include type="modules" name="intro" style="xhtml" />
      </div>
    </div>
  </div>
  <?php endif; ?>
  
  <!-- content wrapper -->
  <div id="content-wrapper" class="container">
    <div class="row">
      <!-- content -->
      <main id="content" class="col-xs-12 col-md-8 pull-right" role="main">
        <jdoc:include type="modules" name="content-before" style="xhtml" />
        <jdoc:include type="message" />
        <jdoc:include type="component" />
        <jdoc:include type="modules" name="content-after" style="none" />
      </main>
      <!-- sidebar -->
      <div id="sidebar" class="col-xs-12 col-md-4 pull-left">
        <jdoc:include type="modules" name="sidebar" style="sidebar" />
      </div>
    </div>
  </div>

  <!-- footer -->
  <?php if ($this->countModules('footer')) : ?>
  <div id="footer-wrapper" class="container-fluid">
    <div id="footer" class="container">
      <div class="row">
        <footer role="contentinfo">
          <?php // requires module suffix ' col-xs-?' ?>
          <jdoc:include type="modules" name="footer" style="xhtml" />
        </footer>
      </div>
    </div>
  </div>
  <?php endif; ?>
  
  <div class="debug">
    <jdoc:include type="modules" name="debug" style="none" />
  </div>
</body>
</html>