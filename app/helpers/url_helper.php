<?php
    // Simple page redirect
    function redirect($page){ //not public,not a class, helpers are files full of functions to use for the app
        header('location: ' . URLROOT . '/'. $page);
    }