<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class FormController extends Controller
{
    public function send(Request $request)
    {
        try {
            return view('form');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
