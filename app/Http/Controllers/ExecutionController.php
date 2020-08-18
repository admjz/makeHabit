<?php

namespace App\Http\Controllers;

use App\Models\Execution;
use Illuminate\Http\Request;

class ExecutionController extends Controller
{
    private $execution;

    public function __construct(Execution $ExecutionInstance)
    {
        $this->execution = $ExecutionInstance;
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
        $this->execution->fill($inputs)->save();
        return back();
    }
}
