<?php
    //header("HTTP/1.1 403 Forbidden");
    //header("Status: 403 Forbidden");
    //echo "Default page.";
echo json_encode($_SERVER, JSON_PRETTY_PRINT);
