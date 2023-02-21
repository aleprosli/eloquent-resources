<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\DeviceResource;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->website,
            'email_verified_at' => $this->number_of_employees,
            'phone_number' => $this->phone_number,
            'devices' => DeviceResource::collection($this->devices),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
