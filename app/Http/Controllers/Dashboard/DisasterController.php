<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\DisasterRequest;
use App\Models\Disaster;

class DisasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disasters = Disaster::paginate();

        return view('dashboard.disasters.index', compact('disasters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.disasters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DisasterRequest $request)
    {
        $disaster = Disaster::create($request->all());

        $disaster->addOrUpdateMediaFromRequest('image');

        $this->flash('created');

        return redirect()->route('dashboard.disasters.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Disaster $disaster
     * @return \Illuminate\Http\Response
     */
    public function show(Disaster $disaster)
    {
        return view('dashboard.disasters.show', compact('disaster'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Disaster $disaster
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Disaster $disaster)
    {
        return view('dashboard.disasters.edit', compact('disaster'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param DisasterRequest $request
     * @param Disaster $disaster
     * @return \Illuminate\Http\Response
     */
    public function update(DisasterRequest $request, Disaster $disaster)
    {
        $disaster->update($request->all());

        $disaster->addOrUpdateMediaFromRequest('image');

        $this->flash('updated');

        return redirect()->route('dashboard.disasters.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Disaster $disaster
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Disaster $disaster)
    {
        $disaster->delete();

        $this->flash('deleted');

        return redirect()->route('dashboard.disasters.index');
    }
}
