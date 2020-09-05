<?php

namespace Modules\Edu\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
      //  $user= parent::toArray($request);
        $user=[];
        $user['id']=$this->id;
        $user['icon']=$this->icon;
        $user['name']=$this->name;
        return $user;
    }
}
