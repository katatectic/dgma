<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;

class CarsController extends Controller
{
    public function getAllCars() {
        $cars_obj = new Cars();
        $cars = $cars_obj->orderBy('year', 'asc')->paginate(2);
        return view('cars', ['cars' => $cars]);
    }

    public function deleteCars($id) {
        $cars_obj = new Cars();
        $cars = $cars_obj->where('id', $id)->delete();
        return redirect()->route('cars');
    }
}
