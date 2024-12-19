<?php
// Secure session settings
ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
    'lifetime' => 1800, // 30 minutes
    'domain' => 'localhost',
    'path' => '/',
    'secure' => false, // Change to true in production with HTTPS
    'httponly' => true,
]);

session_start();

// Session regeneration interval
$interval = 60 * 30; // 30 minutes

// Regenerate session if needed
if (isset($_SESSION["user_id"])) {
    // User is logged in
    if (!isset($_SESSION["last_regeneration"]) || time() - $_SESSION["last_regeneration"] >= $interval) {
        regenerate_session_id(); // Use a generic function
    }
} else {
    // User is not logged in
    if (!isset($_SESSION["last_regeneration"]) || time() - $_SESSION["last_regeneration"] >= $interval) {
        regenerate_session_id();
    }
}

// Function to regenerate session
function regenerate_session_id() {
    session_regenerate_id(true);
    $_SESSION["last_regeneration"] = time();
}

// Debugging (optional, remove in production)
// var_dump($_SESSION);
?>
