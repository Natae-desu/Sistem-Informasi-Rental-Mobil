<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MobilResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "idmobil" => $this->id,
            "merek" => $this->merek,
            "type" => $this->type,
            "tahun" => $this->tahun,
            "bbm" => $this->bbm,
            "harga" => $this->harga,
            "unit" => $this->unit,
        ];
    }
}
