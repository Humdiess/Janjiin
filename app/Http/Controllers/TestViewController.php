<?php

namespace App\Http\Controllers;
use App\Models\Service;

use Illuminate\Http\Request;

class TestViewController extends Controller
{
    public function main() {
        $events = Service::latest()->paginate(5);

        return view('dashboard', compact('events'));
    }
}
