<?php

// DISPLAY ERROR IN DEVELOPMENT MODE.
error_reporting(-1);
ini_set("display_errors", 1);

// CALLBACK MESSAGE
$my_handler_error = function (int $errType, string $errMessage, string $errFile, int $errLine) {
    switch ($errType) {
        case E_USER_ERROR:
            echo "ERROR " . $errMessage . "WAS HANDLER ON FILE " . $errFile . "AT LINE " . $errLine;
            break;
        case E_USER_WARNING:
            echo "ERROR " . $errMessage . "WAS HANDLER ON FILE " . $errFile . "AT LINE " . $errLine;
            break;
        case E_USER_NOTICE:
            echo "ERROR " . $errMessage . "WAS HANDLER ON FILE " . $errFile . "AT LINE " . $errLine;
            break;
        default:
            echo "ERROR " . $errMessage;
            break;
    }
};
