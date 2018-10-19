<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\TutorialRequest;
use App\Http\Resources\TutorialResource;
use App\Http\Resources\UserResource;
use App\Models\Disaster;
use App\Models\Tutorial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class TutorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Disaster $disaster
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(Disaster $disaster)
    {
        $tutorials = $disaster->tutorials()->paginate();

        return TutorialResource::collection($tutorials);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TutorialRequest $request
     * @param Disaster $disaster
     * @return TutorialResource
     */
    public function store(TutorialRequest $request, Disaster $disaster)
    {
        $tutorial = auth()->user()->tutorials()->create(array_merge($request->all(), [
            'disaster_id' => $disaster->id
        ]));

        return new TutorialResource($tutorial);
    }

    /**
     * Display the specified resource.
     *
     * @param Tutorial $tutorial
     * @return UserResource
     */
    public function show(Tutorial $tutorial)
    {
        return new UserResource($tutorial);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TutorialRequest $request
     * @param Tutorial $tutorial
     * @return TutorialResource
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(TutorialRequest $request, Tutorial $tutorial)
    {
        $this->authorize('update', $tutorial);

        $tutorial->update($request->all());

        return new TutorialResource($tutorial);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Tutorial $tutorial
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(Tutorial $tutorial)
    {
        $this->authorize('delete', $tutorial);

        $tutorial->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
