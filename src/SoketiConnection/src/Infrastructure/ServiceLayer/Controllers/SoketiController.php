<?php

namespace SoketiConnection\Infrastructure\ServiceLayer\Controllers;

use App\Events\MessageSent;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Kernel\Infrastructure\Controllers\BaseController;

class SoketiController extends BaseController
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function send_message(Request $request): JsonResponse
    {
        $request->validate([
            'message' => ['array', 'required']
        ]);

        return $this->execWithJsonResponse(function () use ($request) {
            MessageSent::dispatch($request->message);

            return [
                "message" => "success",
            ];
        });
    }
}
