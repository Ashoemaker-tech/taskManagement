<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('welcome');
    }

    /**
     * Task functionality is handled within the livewire components.
     * Which can be found in App/Http/Livewire
     */
    
}
