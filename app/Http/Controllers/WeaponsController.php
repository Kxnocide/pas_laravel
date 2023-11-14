<?php

    namespace App\Http\Controllers;

    use App\Models\Weapons;
    use Illuminate\Http\Request;

    class WeaponsController extends Controller
    {
        public function index()
        {
            return view('weapons.all', [
                "weapons" => Weapons::all()
            ]);
        }

        public function show($id)
        {
            $weapon = Weapons::findorFail($id);
            return view('Weapons.detail' , [
                "title" => "detail-weapon",
                "weapon" => $weapon
            ]);
        }
    }

?>