<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WorkerResource extends JsonResource
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
            'worker_name' => $this->worker_name,
            'worker_email' => $this->worker_email,
            'is_online' => $this->is_online,
            'created-at' => $this->created_at->format('Y-m'),
        ];
    }
}
