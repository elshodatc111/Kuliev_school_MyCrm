<?php

namespace App\Http\Controllers\Techer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TecherController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        return "Techer";
    }
}
