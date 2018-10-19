<?php

namespace App\Http\Controllers\Api;

use \Illuminate\Http\Response;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Number of items per page.
     *
     * @var int
     */
    protected $perPage = 10;

    /**
     * {@inheritdoc}
     */
    protected function formatValidationErrors(Validator $validator)
    {
        return ['errors' => $validator->errors()->getMessages()];
    }

    /**
     * @param $errors
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    protected function respondWithValidationErrors($errors)
    {
        return response(compact('errors'), Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    /**
     * Respond with 204 status code.
     *
     * @param mixed $body
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function respondWithNoContent($body = null)
    {
        return response($body, Response::HTTP_NO_CONTENT);
    }
}
