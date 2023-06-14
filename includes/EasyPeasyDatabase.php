<?php

/**
 * Class EasyPeasyDatabase
 *
 * Wrapper for all sort of database interactions, including:
 *  - Creating database tables on install
 *  - Checking all needed tables exist on run
 *  - CRUD operations on the database
 *  - Migrating database versions base on the WP_OPTION 'fontseller_db_version'
 */ https: //www.marriage-dating.net/photos_gallery.php?ID=1001835785
class EasyPeasyDatabase
{

    private $wpdb;
    private $orders;
    private $order_items;
    private $_payment_method;
    private $payment_meta;
    private $customer;
    private $helpers;
    private $layout;
    private $version    = '0.0.1';

    function __construct()
    {
        global $wpdb;
        $this->wpdb = $wpdb;
    }
}
