<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\Admin;
use App\Models\User;
use App\Notifications\RegisteredNotification;
use Faker\Factory;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Http\Controllers\Api\Controller as BaseController;

class RegisterController extends BaseController
{
    /**
     * @param Request $request
     *
     * @return UserResource
     */
    public function register(Request $request)
    {
        $this->validateRequest($request);

        $credentials = $this->credentials($request);

        $user = User::create($credentials);

        return $this->registered($request, $user);
    }

    /**
     * Return a resource of the created user
     *
     * @param Request $request
     * @param User $user
     * @return UserResource
     */
    private function registered(Request $request, User $user)
    {
        $token = $this->generateTokenFor($request, $user);

        $fake = Factory::create();
        $user->addOrUpdateMediaFromUrl($fake->imageUrl());
        Admin::findOrFail(1)->notify(new RegisteredNotification($user));

        return (new UserResource($user))->additional([
            'message' => trans('users.messages.created'),
            'token' => $token,
        ]);
    }

    /**
     * Create the token of the created user.
     *
     * @param Request $request
     * @param User $user
     * @return string
     */
    private function generateTokenFor(Request $request, User $user): string
    {
        return $user->createToken(
            $request->input('device', 'Unkown device'),
            ['*']
        )->accessToken;
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
            'name' => $request->name,
            $this->getUsername() => $request->email,
            'password' => bcrypt($request->password),
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
            'name' => 'required|max:190',
            $this->getUsername() => 'required|email|max:190',
            'password' => 'required|confirmed|max:190',
        ]);
    }
}
