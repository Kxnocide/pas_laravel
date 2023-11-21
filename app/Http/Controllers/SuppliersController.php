<?php
    namespace App\Http\Controllers;

 use App\Models\supplier;
use App\Models\Suppliers;
use Illuminate\Http\Request;

    class SuppliersController extends Controller
    {

        public function index()
        {
            return view('suppliers.all', [
                "suppliers" => Suppliers::all()
            ]);
        }

        public function show($id)
        {
            $supplier = Suppliers::findorFail($id);
            return view('Suppliers.detail', [
                "title" => "detail-suppliers",
                "supplier" => $supplier,
            ]);
        }
    }
