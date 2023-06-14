<?php
/*
Plugin Name: EasyPeasyCommerce
Plugin URI:  http://easypeasycommerce.com
Description: Simple ecommerce plugin - really simple
Version:     0.0.1
Author:      John Anderson/Weirdspace
Author URI:  https://weirdspace.com
Copyright:   Copyright 2023 Weirdspace
Text Domain: easypeasycommerce
*/
defined('ABSPATH') or die('Access denied.');

define('EP_CORE', dirname(__FILE__));
define('EP_INCLUDES', EP_CORE . '/includes/');
define('EP_TEMPLATES', EP_CORE . '/templates/');

// Temporary label
define('EP_product_label', 'Ticket');
define('EP_product_label_plural', 'Tickets');
define('EP_product_taxonomy_label', 'Ticket Type');
define('EP_product_taxonomy_label_plural', 'Ticket Types');

// Test minimum requirements
require_once(EP_INCLUDES . 'EasyPeasyCommercePlugin.php');

if (!EasyPeasyCommercePlugin::test()) {
    // echo error
    exit();
}
EasyPeasyCommercePlugin::initialise();

require_once(EP_INCLUDES . "EasyPeasyDatabase.php");
require_once(EP_INCLUDES . "EasyPeasyCustomPosts.php");
