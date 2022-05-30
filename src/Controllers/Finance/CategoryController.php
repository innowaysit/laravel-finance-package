<?php

namespace Innowaysit\Finance\Controllers\Finance;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Innowaysit\Finance\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $categories = Category::with('user')->paginate(10);
        return view('finance::categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('finance::categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\View
     */
    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name,
            'type' => $request->type,
            'status' => $request->status,
            'created_by' => Auth::user()->id ?? null,
        ]);

        return back()->withSuccess('Category created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Innowaysit\Finance\Models\Category  $category
     * @return \Illuminate\Contracts\View\View
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Innowaysit\Finance\Models\Category  $category
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Category $category)
    {
        return view('finance::categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Innowaysit\Finance\Models\Category  $category
     * @return \Illuminate\Contracts\View\View
     */
    public function update(Request $request, Category $category)
    {
        $category->update([
            'name' => $request->name,
            'type' => $request->type,
            'status' => $request->status,
        ]);

        return back()->withSuccess('Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Innowaysit\Finance\Models\Category  $category
     * @return \Illuminate\Contracts\View\View
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return back()->withSuccess('Category deleted');
    }
}
