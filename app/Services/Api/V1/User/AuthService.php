<?php

namespace App\Services\Api\V1\User;

class AuthService {
    public function login($request)
    {
        if ($token = auth('api')->attempt(['email' => $request->email, 'password' => $request->password])) {
            $data = auth('api')->user();
            $data['token'] = $token;
            return $data;
        } else {
            throw new \Exception('Wrong email or password', 400);
        }
    }
}
