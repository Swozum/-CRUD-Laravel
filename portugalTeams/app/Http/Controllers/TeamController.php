<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();

        return view('teams.index', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'city' => 'required|max:255',
            'fullname' => 'required|max:255',
            'name' => 'required|max:255',
            'stadiumName' => 'required|max:255'
        ]);
        Team::create($request->all());
        return redirect()->route('teams.index')->with('success','Team created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $team = Team::find($id);
        return view('teams.show', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'city' => 'required|max:255',
            'fullname' => 'required|max:255',
            'name' => 'required|max:255',
            'stadiumName' => 'required|max:255'
        ]);
        $team = Team::find($id);
        $team->update($request->all());
        return redirect()->route('teams.index')->with('success','Team updated successfully. ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Team::find($id);
        $team->delete();
        return redirect()->route('teams.index')->with('success','Team deleted successfully');
    }

    public function create()
    {
        return view('teams.create');
    }
    public function edit($id)
    {
        $team = Team::find($id);
        return view('teams.edit', compact('team'));
    }
}
