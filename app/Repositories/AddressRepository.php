<?php

namespace App\Repositories;

use App\Models\district;
use App\Models\province;


class AddressRepository implements AddressRepositoryInterface
{
    public function province()
    {

        return   province::get()->toArray();
    }
    public function dictrict($id)
    {
        return province::with('districts')->where('name', $id)->get()->toArray();
    }

    public function ward($id)
    {
        return  district::with('wards')->where('name', $id)->get()->toArray();
    }
}
