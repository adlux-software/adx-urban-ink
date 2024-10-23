<?php

namespace App\Http\Controllers;

use App\Models\Policy;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function show($slug)
    {
        $policy = Policy::where('slug', $slug)->firstOrFail();
        return view('policy', compact('policy'));
    }
}
