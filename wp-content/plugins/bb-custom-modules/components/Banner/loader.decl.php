<?php

add_action('init', function() {
    if (class_exists("FLBuilder")) {
        require_once('bb-banner.php');
    }
});