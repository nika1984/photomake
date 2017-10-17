<?php
defined('_JEXEC') or die('Restricted access');
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$uri = JFactory::getURI();
$logo = $this->params->get('logo');
$showbanner = $this->countModules('banner');
$sitename = $app->getCfg('sitename');
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/bootstrap.min.js']);
$doc->setMetaData( 'viewport', 'width=device-width, initial-scale=1.0' );
$doc->addHeadLink(''.$uri.'', 'canonical');
$doc->addStyleSheet(JUri::base() . 'templates/' . $this->template . '/css/template.css', $type = 'text/css');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/bootstrap.min.js', 'text/javascript');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/respond.min.js', 'text/javascript');
$left = $this->countModules('left');
$right = $this->countModules('right');
if($left && !$right) { $sidebar = "-left"; }
if(!$left && $right) { $sidebar = "-right"; }
if($left && $right) { $sidebar = "-left-right"; }
if(!$left && !$right) { $sidebar = "-full"; }
$countblock1 = ($this->countModules('top1')>0) + ($this->countModules('top2')>0) + ($this->countModules('top3')>0) + ($this->countModules('top4')>0) + ($this->countModules('top5')>0);
$countblock2 = ($this->countModules('user1')>0) + ($this->countModules('user2')>0) + ($this->countModules('user3')>0);
$countblock3 = ($this->countModules('user4')>0) + ($this->countModules('user5')>0) + ($this->countModules('user6')>0);
$countblock4 = ($this->countModules('user7')>0) + ($this->countModules('user8')>0) + ($this->countModules('user9')>0);
$countblock5 = ($this->countModules('footer1')>0) + ($this->countModules('footer2')>0) + ($this->countModules('footer3')>0) + ($this->countModules('footer4')>0) + ($this->countModules('footer5')>0);
$file = JPATH_BASE.'/templates/rt_photo/index.php';
$links = 'http://www.rushthemes.com';
$filedata = fopen($file,'r');
$cheaklink = fread($filedata,filesize($file));
fclose($filedata);
if(strpos($cheaklink, $links)==0){ die; }
?>