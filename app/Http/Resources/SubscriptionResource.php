<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SubscriptionResource extends JsonResource
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
            'rising' => $this->rising,
            'startDate' => $this->startDate,
            'endDate' => $this->endDate,
            'frequency' => $this->frequency,
            
        ];
    }
}
