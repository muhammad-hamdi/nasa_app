<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\Dashboard\ListTemplateRequest;
use App\Models\Disaster;
use App\Models\ListTemplate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_templates = ListTemplate::paginate();

        return view('dashboard.list_templates.index', compact('list_templates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disasters = Disaster::pluck('name', 'id');

        return view('dashboard.list_templates.create', compact('disasters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ListTemplateRequest $request)
    {
        ListTemplate::create($request->all());

        $this->flash('created');

        return redirect()->route('dashboard.list_templates.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ListTemplate $list_template)
    {
        return view('dashboard.list_templates.show', compact('list_template'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ListTemplate $list_template)
    {
        return view('dashboard.list_templates.edit', compact('list_template'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ListTemplateRequest $request, ListTemplate $listTemplate)
    {
        $listTemplate->update($request->all());

        $this->flash('updated');

        return redirect()->route('dashboard.list_templates.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListTemplate $listTemplate)
    {
        $listTemplate->delete();

        $this->flash('deleted');

        return redirect()->route('dashboard.list_templates.index');
    }
}
