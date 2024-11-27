<?php
/**
 * Plugin Name: AI Topic Suggest Plugin
 * Description: AI Topic Suggest Plugin.
 * Version: 1.0.0
 * Author: Naveenkumar C
 * License: GPL-2.0-or-later
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Autoload dependencies using Composer
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
    require __DIR__ . '/vendor/autoload.php';
}

use TopicSuggestions\Admin\SettingsPage;
use TopicSuggestions\Admin\SuggestTopics;

