<?php

namespace App\Services\Api\V1\User;

class ProfileService
{
    public function profile()
    {
        try {
            $data = auth('api')->user();
            return $data;
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), 400);
        }
    }

    public function updateProfile($request)
    {
        try {
            $data = auth('api')->user();
            $data->update($request->all());
            return $data;
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), 400);
        }
    }
}
