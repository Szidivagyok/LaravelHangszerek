<?php

namespace App\Http\Controllers;

use App\Models\Instrument;
use Illuminate\Http\Request;

class InstrumentController extends Controller
{
    public function index()
    {
        return response()->json(Instrument::all());
    }
    public function show($id)
    {
        $i = Instrument::find($id);
        return $i ? response()->json($i) : response()->json(['message' => 'Not found'], 404);
    }
    public function store(Request $r)
    {
        return response()->json(Instrument::create($r->all()), 201);
    }
    public function update(Request $r, $id)
    {
        $i = Instrument::find($id);
        if (!$i) return response()->json(['message' => 'Not found'], 404);
        $i->update($r->all());
        return response()->json($i);
    }
    public function destroy($id)
    {
        $i = Instrument::find($id);
        if (!$i) return response()->json(['message' => 'Not found'], 404);
        $i->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
