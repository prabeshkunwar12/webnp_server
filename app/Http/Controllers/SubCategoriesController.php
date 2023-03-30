<?php

namespace App\Http\Controllers;

use App\Models\SubCategories;
use App\Models\Categories;
use App\Http\Requests\StoreSubCategoriesRequest;
use App\Http\Requests\UpdateSubCategoriesRequest;

class SubCategoriesController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubCategoriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubCategoriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategories  $subCategories
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategories $subCategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategories  $subCategories
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategories $subCategories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubCategoriesRequest  $request
     * @param  \App\Models\SubCategories  $subCategories
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubCategoriesRequest $request, SubCategories $subCategories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategories  $subCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategories $subCategories)
    {
        //
    }

    //returns all subcategories in the database
    public function getAllSubCategories()
    {
        $categories = null;
        $categories = Categories::orderBy('id', 'asc')
        ->get();
        
        return $categories;
    } 

    public function getSubCategoriesByCategory(Categories $category)
    {
        $subCategories = null;
        $subCategories = SubCategories::orderBy('id', 'asc')
        ->where('categories_id', $category->id)
        ->get();
        
        return $subCategories;
    } 

    // returns the category of subcategory
    public function category(SubCategories $subCategories)
    {
        return $subCategories->category();
    }
}
