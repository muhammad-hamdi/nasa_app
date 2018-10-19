<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\DisasterResource;
use App\Models\Disaster;
use App\Http\Controllers\Controller;

class DisasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $disasters = Disaster::paginate();

        return DisasterResource::collection($disasters);
    }

    /**
     * Display the specified resource.
     *
     * @param Disaster $disaster
     * @return DisasterResource
     */
    public function show(Disaster $disaster)
    {
        return new DisasterResource($disaster);
    }
}
