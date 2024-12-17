<?php
ini_set('session.use_only_cookies', 1); 
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true,
]);

session_start();

// Debugging - check session variables
var_dump($_SESSION);

if (isset($_SESSION["user_id"])) {
    if (!isset($_SESSION["last_regeneration"])) {
        regenerate_session_id_loggedin();
    } else {
        $interval = 60 * 30;
        if (time() - $_SESSION["last_regeneration"] >= $interval) {
            regenerate_session_id_loggedin();
        }
    }
} else {
    if (!isset($_SESSION["last_regeneration"])) {
        regenerate_session_id_loggedin();
    } else {
        $interval = 60 * 30;
        if (time() - $_SESSION["last_regeneration"] >= $interval) {
            regenerate_session_id();
        }
    }
}

function regenerate_session_id_loggedin() {
    if (isset($_SESSION["user_id"])) {
        session_regenerate_id(true);
        $_SESSION["last_regeneration"] = time();
    } else {
        // Debugging - check the session state
        echo "Session variable 'user_id' is not set!<br>";
        var_dump($_SESSION);  // Check the session data
        die("Invalid session state. Please log in again.");
    }
}

function regenerate_session_id() {
    session_regenerate_id(true);
    $_SESSION["last_regeneration"] = time();
}
?>
