<?php

// function errorkhaba($key) {
//     if(isset( $error[$key])) {
//         return $error[$key];
//     }
// }

/**
 * Valid email
 */
function emailValid($email) {
    if(filter_var($email,FILTER_VALIDATE_EMAIL)) {
        return true;
    }else {
        return false;
    }
}

/**
 * old 
 */
function old($key) {
    return $_POST[$key] ?? '';
}

//clear old
function clearOld() {
    return $_POST = [];
}