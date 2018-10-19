<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\Dashboard\TutorialRequest;
use App\Models\Disaster;
use App\Models\Tutorial;
use App\Http\Controllers\Controller;

class TutorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutorials = Tutorial::paginate();

        return view('dashboard.tutorials.index', compact('tutorials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disasters = Disaster::pluck('name', 'id');

        return view('dashboard.tutorials.create', compact('disasters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TutorialRequest $request)
    {
        Tutorial::create($request->all());

        $this->flash('created');

        return redirect()->route('dashboard.tutorials.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tutorial $tutorial)
    {
        return view('dashboard.tutorials.show', compact('tutorial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tutorial $tutorial)
    {
        return view('dashboard.tutorials.edit', compact('tutorial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TutorialRequest $request, Tutorial $tutorial)
    {
        $tutorial->update($request->all());

        $this->flash('updated');

        return redirect()->route('dashboard.tutorials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tutorial $tutorial)
    {
        $tutorial->delete();

        $this->flash('deleted');

        return redirect()->route('dashboard.tutorials.index');
    }
}
