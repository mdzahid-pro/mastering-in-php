<?php

function view(string $path): string
{
    ob_start();
    require "$path.php";

    return ob_get_clean();
}

ob_start();
require "layout.php";
$layout = ob_get_clean();

echo (str_replace("@content", view('service'), $layout));