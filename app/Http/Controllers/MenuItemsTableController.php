<?php

namespace App\Http\Controllers;

use App\Models\menu_items_table;
use Illuminate\Http\Request;

class MenuItemsTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cook = new MenuItem();
        $cook->cook_name = $request->cook_name;
        $cook->recipt = $request->recipt;
        $cook->category_id = $request->category_id;

        $cook->save();

        return redirect('/');

    }


    public function view($id){
        $cook = MenuItem()::findOrFail();


        return view('show',['cook' => $cook]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        MenuItem::create(["cook_name"=>$request->input("cook_name"), "recipt"=>$request->input("text"), "category_id"=>$request->input("text")]);
        return redirect()->route("adminindex");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\menu_items_table  $menu_items_table
     * @return \Illuminate\Http\Response
     */
    public function show(menu_items_table $menu_items_table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\menu_items_table  $menu_items_table
     * @return \Illuminate\Http\Response
     */
    public function edit(menu_items_table $menu_items_table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\menu_items_table  $menu_items_table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, menu_items_table $menu_items_table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\menu_items_table  $menu_items_table
     * @return \Illuminate\Http\Response
     */
    public function destroy(menu_items_table $menu_items_table)
    {
        //
    }
}
