<?php

namespace App\Http\Controllers;

ini_set('memory_limit', '1024M');

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tree;
use Illuminate\Database\Eloquent\Collection;

class TreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $trees  = Tree::all();
        $tree = Tree::where('parent_id', '=', 0)->get();
        $alltree = Tree::pluck('name','id')->all();

        return view('trees.index', [
            'tree' => $tree,
            'trees' => $trees,
            'alltree' => $alltree,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trees = tree::all();

        return view('trees.create', [
            'trees' => $trees,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'parent_id' => 'required',
            'name'  => 'required|min:3|max:255'
        ]);

        $tree = Tree::create([
            'parent_id' => $request->input('parent_id'),
            'name' => $request->input('name')
        ]);

        return redirect('/tree');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $find_id = Tree::find($id)->first();
        $trees = Tree::all();

        return view('trees.edit', [
            'trees' => $trees,
        ])->with('find_id', $find_id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $trees = Tree::where('id', $id)
            ->update([
                'parent_id' => $request->input('parent_id'),
                'name' => $request->input('name')
            ]);

        return redirect('/tree');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tree $tree)
    {
        $tree->delete();

        return redirect('/tree');
    }
}
