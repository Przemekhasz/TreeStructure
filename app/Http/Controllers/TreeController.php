<?php

namespace App\Http\Controllers;

use App\Models\Tree;
use App\Http\Requests\TreeRequest;
use Exception;

class TreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trees = Tree::all();
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
     * @param  \App\Http\Requests\TreeRequest  $request
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TreeRequest $request)
    {
        $validated = $request->validated();

        $tree = Tree::create([
            'parent_id' => $validated = $request->input('parent_id'),
            'name' => $validated = $request->input('name')
        ]);

        return redirect('/tree')->with('alert', 'Dodano!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $find_id = Tree::findOrFail($id);

        $tree = Tree::where('parent_id', '=', 0)->get();

        $trees = Tree::all();

        return view('trees.edit', [
            'trees' => $trees,
            'tree' => $tree,
        ])->with('find_id', $find_id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\TreeRequest  $request
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TreeRequest $request, $id)
    {
        $validated = $request->validated();

        $trees = Tree::where('id', $id)
            ->update([
                'parent_id' => $validated = $request->input('parent_id'),
                'name' => $validated = $request->input('name')
            ]);

        return redirect('/tree')->with('alert', 'Zaktualizowano!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tree $tree)
    {
        if ($tree->id == 1) {
            return view('warnings.warning', [
                'error' => 'Nie można usunąć tego elementu'
            ]);
        }

        // if parent has childs, delete parent and childs
        if (count($tree->childs) > 0) {
            $tree->childs->each->delete();
        }

        $tree->delete();

        return redirect('/tree')->with('alert', 'Usunięto!');
    }
}
