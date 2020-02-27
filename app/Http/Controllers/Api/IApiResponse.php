<?php


namespace App\Http\Controllers\Api;


trait IApiResponse
{
    public $data;
    public $meta;

    public function toResponseArray(): array
    {
        return [
            'data' => $this->data,
            'meta' => $this->meta
        ];
    }
}
