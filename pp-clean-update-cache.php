<?php
/**
 * Plugin Name: PublishPress Clean Update Cache
 * Plugin URI: https://publishpress.com/
 * Description: Clean the update cache to force look for new updates.
 * Author: PublishPress
 * Author URI: https://publishpress.com
 * Version: 0.1.0
 */

global $wpdb;

$wpdb->query("DELETE FROM {$wpdb->options} WHERE option_name LIKE 'edd_sl_%' OR option_name = '_site_transient_update_plugins';");