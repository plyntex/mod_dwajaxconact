<?php
defined('_JEXEC') or die;

require_once __DIR__ . '/helper.php';

$doc = JFactory::getDocument();

// Include assets
$doc->addStyleSheet(JURI::root()."modules/mod_dwajaxcontact/assets/css/style.css");
$doc->addScript(JURI::root()."modules/mod_dwajaxcontact/assets/js/script.js");

// Include Recaptcha asset
if ($params->def('recaptcha', 1)){
    $doc->addScript('https://www.google.com/recaptcha/api.js');
}

require JModuleHelper::getLayoutPath('mod_dwajaxcontact', $params->get('layout', 'default'));
