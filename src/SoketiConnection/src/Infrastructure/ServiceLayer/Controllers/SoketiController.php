<?php

namespace SoketiConnection\Infrastructure\ServiceLayer\Controllers;

use App\Events\ProjectUpdated;
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
            'projectId' => ['integer', 'required'],
            'content' => ['array', 'required']
        ]);

        return $this->execWithJsonResponse(function () use ($request) {

            ProjectUpdated::dispatch(
                $request->get('projectId'),
                $request->get('content')
            );

            return [
                "message" => "success",
            ];
        });
    }
}
