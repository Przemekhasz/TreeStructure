<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tree;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Requests\TreeRequest;
use Exception;
use Illuminate\Http\JsonResponse;
class TreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
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
        // TODO add query to old edited parent name
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
        // TODO add deleting confirmed
        if (count($tree->childs) > 0) {
            return view('warnings.warning', [
                'error' => 'Nie można usunąć tego elementu ponieważ znajdują się w nim inne elementy'
            ]);
        }

        $tree->delete();
        // TODO reapir comunicate ajax confirmed
        return redirect('/tree')->with('alert', 'Usunięto!');
        // return response()->json([
        //     'success' => 'Pomyślnie usunięto'
        // ]);
    }
}
