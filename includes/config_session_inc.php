<?php
ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

// Session cookie settings
session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,   // Set to true if using https
    'httponly' => true,
]);

session_start();

// Regenerate session ID if the user is logged in
if (isset($_SESSION["user_id"])) {
    if (!isset($_SESSION["last_regeneration"])) {
        regenerate_session_id_loggedin();
    } else {
        $interval = 60 * 30; // 30 minutes
        if (time() - $_SESSION["last_regeneration"] >= $interval) {
            regenerate_session_id_loggedin();
        }
    }
} else {
    // If the user is not logged in, regenerate session ID periodically
    if (!isset($_SESSION["last_regeneration"])) {
        regenerate_session_id_loggedin();
    } else {
        $interval = 60 * 30; // 30 minutes
        if (time() - $_SESSION["last_regeneration"] >= $interval) {
            regenerate_session_id();
        }
    }
}

// Function to regenerate session ID for logged-in users
function regenerate_session_id_loggedin() {
    session_regenerate_id(true);  // Regenerate session ID
    $_SESSION["last_regeneration"] = time();  // Update last regeneration time
}

// Function to regenerate session ID for non-logged-in users or guests
function regenerate_session_id() {
    session_regenerate_id(true);  // Regenerate session ID
    $_SESSION["last_regeneration"] = time();  // Update last regeneration time
}
?>
