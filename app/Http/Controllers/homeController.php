<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function __invoke(){
        $customers = Customer::paginate();
        return view('index');
    }
}
