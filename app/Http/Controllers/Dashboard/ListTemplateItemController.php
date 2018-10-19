<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\Dashboard\ListTemplateItemRequest;
use App\Models\ListTemplate;
use App\Models\ListTemplateItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\DocBlock\Tags\Link;
use vendor\project\StatusTest;

class ListTemplateItemController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param ListTemplateItemRequest $request
     * @param ListTemplate $listTemplate
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ListTemplateItemRequest $request, ListTemplate $listTemplate)
    {
        $listTemplate->items()->create($request->all());

        $this->flash('created');

        return redirect()->route('dashboard.list_templates.show', $listTemplate);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ListTemplateItem $list_template_item)
    {
//        dd($list_template_item);
        return view('dashboard.list_template_items.show', compact('list_template_item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ListTemplateItem $list_template_item)
    {
        return view('dashboard.list_template_items.edit', compact('list_template_item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ListTemplateItemRequest $request, ListTemplateItem $listTemplateItem)
    {
//        dd($request->all());
        $listTemplateItem->update($request->all());

        $this->flash('updated');

        return redirect()->route('dashboard.list_templates.show', $listTemplateItem->listTemplate);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListTemplateItem $listTemplateItem)
    {
        $listTemplate = $listTemplateItem->listTemplate;
        $listTemplateItem->delete();

        $this->flash('deleted');

        return redirect()->route('dashboard.list_templates.show', $listTemplate);
    }
}
