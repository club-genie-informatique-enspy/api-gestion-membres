<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MeetingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'label' => $this->label,
            'description' => $this->description,
            'date' => $this->date,
            'duration' => $this->duration,
            'owner' => $this->owner,
            'userId' => $this->userId,
            
        ];
    }
}
