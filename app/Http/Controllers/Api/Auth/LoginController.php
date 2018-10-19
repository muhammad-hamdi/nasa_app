<?php

namespace App\Http\Controllers\Api\Auth;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\UserResource;
use App\Http\Controllers\Api\Controller as BaseController;

class LoginController extends BaseController
{
    /**
     * @param Request $request
     *
     * @return UserResource
     */
    public function login(Request $request)
    {
        $this->validateRequest($request);

        $credentials = $this->credentials($request);

        if (Auth::attempt($credentials)) {
            /** @var User $user */
            $user = $request->user();

            $token = $user->createToken(
                $request->input('device', 'Unkown device'),
                ['*']
            )->accessToken;

            return (new UserResource($user))->additional([
                'token' => $token,
            ]);
        }

        return response([
            'errors' => [
                $this->getUsername() => [trans('auth.failed')],
            ],
        ], Response::HTTP_UNAUTHORIZED);
    }

    /**
     * Get the credentials for the login request.
     *
     * @param $request
     *
     * @return array
     */
    private function credentials($request)
    {
        return [
            $this->getUsername() => $request->input($this->getUsername()),
            'password' => $request->password,
        ];
    }

    /**
     * Get the username field in the database.
     *
     * @return string
     */
    private function getUsername()
    {
        return 'email';
    }

    /**
     * Validate the login request.
     *
     * @param $request
     */
    private function validateRequest($request)
    {
        $this->validate($request, [
            $this->getUsername() => 'required',
            'password' => 'required',
        ]);
    }
}
