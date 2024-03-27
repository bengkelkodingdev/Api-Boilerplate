<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\BaseApiController as Controller;
use App\Http\Requests\Api\V1\User\UpdateProfileRequest;
use App\Http\Resources\Api\V1\User\ProfileResource;
use App\Services\Api\V1\User\ProfileService;

class ProfileController extends Controller
{
    public function profile(ProfileService $profileService)
    {
        try {
            $data = $profileService->profile();

            $data = new ProfileResource($data, 'Success Get Profile');
            return $this->respond($data);
        } catch (\Exception $e) {
            return $this->ApiExceptionError($e->getMessage());
        }
    }

    public function updateProfile(UpdateProfileRequest $request, ProfileService $profileService)
    {
        try {
            $data = $profileService->updateProfile($request);

            $data = new ProfileResource($data, 'Success Update Profile');
            return $this->respond($data);
        } catch (\Exception $e) {
            return $this->ApiExceptionError($e->getMessage());
        }
    }
}
