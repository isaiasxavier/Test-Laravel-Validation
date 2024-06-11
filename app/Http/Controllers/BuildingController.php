<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBuildingRequest;
use App\Models\Building;

class BuildingController extends Controller
{
    public function store(StoreBuildingRequest $request)
    {
        Building::create($validator->validated());

        return 'Success';
    }

    // TASK: Customize the validation error message to say "Please enter the name"

    public function create()
    {
        return view('buildings.create');
    }
}
