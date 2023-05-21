<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MahasiswaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'Nim'=>$this->Nim,
            'Nama'=>$this->Nama,
            'kelas_id'=>$this->kelas_id,
            //'Prodi'=>$this->Prodi,
            'Jurusan'=>strtoupper($this->Jurusan),
            'No_Handphone'=>$this->No_Handphone,

        ];
    }
}
