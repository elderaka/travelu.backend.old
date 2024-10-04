<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Logging;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $menu = 'Dashboard';
        $data = [];
        return view('admin.dashboard.index',compact('data'));
    }
}
