<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IssueRegistryController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('admin.Project.IssueRegistryCreate');
    }
}
