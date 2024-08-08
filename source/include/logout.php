<?php
session_start(); // Start the session

function logout()
{
    // Destroy all session data
    session_unset(); // Unset all session variables
    session_destroy(); // Destroy the session itself

    // Redirect to the login page or another page
    header("Location:test_connection.php");
    exit();
}

// Call the logout function
logout();