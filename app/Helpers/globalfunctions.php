<?php

namespace App\Helpers;

set_exception_handler(function ($exception) {
    echo $exception->getMessage();
});