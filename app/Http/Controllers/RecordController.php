<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Prophecy\Exception\Doubler\ReturnByReferenceException;

class RecordController extends Controller
{

    
    public function __contruct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource in descending order.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Record::all();
        $sorted = $records->sortByDesc('date');

        return view('home', ['records' => $sorted]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('record.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'miles' => ['required', 'string'],
            'date' => ['required', 'string'],
            'notes' => ['nullable', 'string'],
        ]);

        $record = new Record();

        $record->user_id = auth()->user()->id;
        $record->title = $request->title;
        $record->miles = $request->miles;
        $record->date = $request->date;
        $record->notes = $request->notes;

        $record->save();

        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $record = Record::findOrFail($id);
        return view('record.show', ['record' => $record]);
    }
}
