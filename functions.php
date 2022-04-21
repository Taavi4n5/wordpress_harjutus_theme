<?php
add_filter( 'excerpt_length', function($length) {
    return 25;
}, PHP_INT_MAX );