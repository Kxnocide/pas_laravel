<?php
    namespace App\Http\Controllers;

    use App\Models\Outfits;
    use Illuminate\Http\Request;

    class OutfitsController extends Controller
    {

        public function index()
        {
            return view('outfits.all', [
                "outfits" => Outfits::all()
            ]);
        }

        public function show($id)
        {
            $outfit = Outfits::findorFail($id);
            return view('Outfits.detail' , [
                "title" => "detail-outfit",
                "outfit" => $outfit
            ]);
        }
    }
?>  