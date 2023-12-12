<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SiteContactResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'phone_1' => $this->phone_1,
            'email' => $this->email,
            'contact_reason_id' => $this->contact_reason_id,
            'message' => $this->message,
        ];
    }
}
