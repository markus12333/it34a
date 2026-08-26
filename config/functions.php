<?php
function redirect($path)
{
    header("Location: " . BASE_URL . "/" . ltrim($path, "/"));
    exit;
}

?>