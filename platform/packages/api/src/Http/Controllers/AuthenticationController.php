<?php

namespace Botble\Api\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Botble\Api\Facades\ApiHelper;
use Botble\Api\Http\Requests\LoginRequest;
use Botble\Api\Http\Requests\RegisterRequest;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthenticationController extends Controller
{
    public function register(RegisterRequest $request, BaseHttpResponse $response)
    {
        $request->merge(['password' => Hash::make($request->input('password'))]);

        $request->merge(['name' => $request->input('first_name') . ' ' . $request->input('last_name')]);

        $user = ApiHelper::newModel()->create($request->only([
            'first_name',
            'last_name',
            'name',
            'email',
            'phone',
            'password',
        ]));

        if (ApiHelper::getConfig('verify_email')) {
            $token = Hash::make(Str::random(32));

            $user->email_verify_token = $token;

            /**
             * @var User $user
             */
            $user->sendEmailVerificationNotification();
        } else {
            $user->confirmed_at = Carbon::now();
        }

        $user->save();

        return $response
            ->setMessage(__('Registered successfully! We emailed you to verify your account!'));
    }

    /**
     * Login
     *
     * @bodyParam login string required The email/phone of the user.
     * @bodyParam password string required The password of user to create.
     *
     * @response {
     * "error": false,
     * "data": {
     *    "token": "1|aF5s7p3xxx1lVL8hkSrPN72m4wPVpTvTs..."
     * },
     * "message": null
     * }
     *
     * @group Authentication
     */
    public function login(LoginRequest $request, BaseHttpResponse $response)
    {
        if (Auth::guard(ApiHelper::guard())->attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ])) {
            $token = $request->user(ApiHelper::guard())->createToken($request->input('token_name', 'Personal Access Token'));

            return $response
                ->setData(['token' => $token->plainTextToken]);
        }

        return $response
            ->setError()
            ->setCode(422)
            ->setMessage(__('Email or password is not correct!'));
    }

    /**
     * Logout
     *
     * @group Authentication
     * @authenticated
     */
    public function logout(Request $request, BaseHttpResponse $response)
    {
        if (! $request->user()) {
            abort(401);
        }

        $request->user()->tokens()->delete();

        return $response
            ->setMessage(__('You have been successfully logged out!'));
    }
}
