<?php

namespace App\Http\Controllers;

use App\Models\Habit;
use App\Models\Execution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HabitController extends Controller
{
    private $habit;

    public function __construct(Habit $HabitInstance)
    {
        $this->middleware('auth');
        $this->habit = $HabitInstance;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habits = $this->habit->where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        $executions = Execution::get();
        return view('habit.index', compact('habits', 'executions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('habit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        $inputs['user_id'] = Auth::id();
        $this->habit->fill($inputs)->save();
        return redirect()->route('habit.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $habit_id
     * @return \Illuminate\Http\Response
     */
    public function show($habitId)
    {
        $habit = $this->habit->find($habitId);
        $executions = Habit::find($habitId)->executions->sortByDesc('created_at');
        return view('/habit/show', compact('habit', 'executions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($habitId)
    {
        $habit = $this->habit->find($habitId);
        return view('/habit/edit', compact('habit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $habitId)
    {
        $inputs = $request->all();
        $this->habit->find($habitId)->fill($inputs)->save();
        return redirect()->route('habit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($habitId)
    {
        $this->habit->find($habitId)->delete();
        return redirect()->route('habit.index');
    }
}
