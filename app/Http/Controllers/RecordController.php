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
     * @return \Illuminate\Routing\Redirector
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

    /**
     * Display record sort form
     * 
     * @return \Illuminate\Http\Response
     */
    public function sort()
    {
        return view('record.sort');
    }

    /**
     * Sort records
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSort(Request $request)
    {
        $request->validate([
            'fromDate' => ['required', 'string'],
            'toDate' => ['required', 'string']
        ]);

        $from = $request->fromDate;
        $to = $request->toDate;

        $records = Record::all();
        $sortedRecords = $records->whereBetween('date', [$from, $to]);
        return view('record.sort', ['sortedRecord' => $sortedRecords]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
