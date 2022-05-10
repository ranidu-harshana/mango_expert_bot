<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class UserController extends Controller
{
    public function guest() {
        return view('welcome');
    }
    
    public function index() {
        return view('user.index');
    }

    public function planting_details_pdf() {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('user.planting-details-pdf');
        return $pdf->stream();
    }
}
