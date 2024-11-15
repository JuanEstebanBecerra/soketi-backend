<?php

namespace SoketiConnection\Infrastructure\ServiceLayer\Controllers;

use App\Events\ProductUpdated;
use Kernel\Infrastructure\Controllers\BaseController;

class SoketiController extends BaseController
{
    public function dispatch()
    {
        ProductUpdated::dispatch("test message");

        return $this->execWithJsonResponse(function () {
            return [
                "message" => "success",
            ];
        });
    }
}
