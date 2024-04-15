<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormationRequest;
use App\Http\Requests\UpdateFormationRequest;
use App\Models\Formation;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Formation::with('user')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormationRequest $request)
    {
        //
        $user = auth()->user();
        $request->merge(['user_id' => $user->id]);
        return Formation::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Formation $formation)
    {
        //
        return $formation;
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFormationRequest $request, Formation $formation)
    {
        //
        $formation->update($request->all());
        return $formation;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formation $formation)
    {
        //
        $formation->delete();
        return response()->json(['message' => 'Formation deleted']);
    }
}
