<?php
session_start();

if (isset($_SESSION['Lusername'])) {
    echo "Welkom, " . htmlspecialchars($_SESSION['Lusername']) . "!";
} else {
    echo "U moet zich registreren.";
}
?>