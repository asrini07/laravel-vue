<?php

namespace App\Http\Controllers;
use App\Employe;

use Illuminate\Http\Request;

class EmployeController extends Controller
{
    //
    public function getData(){
        $employe=Employe::paginate(20);

        return response()->json([
            'model'=>$employe
        ]);
    }
}
