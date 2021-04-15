<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flashy;
use App\Models\Brand;
use App\Models\Slider;
use App\Models\Shop;
use App\Models\Product;

class SearchController extends Controller
{
    public function index(){

    	request()->validate([

    		'search' => 'required',
    	]);

        $search = request()->input('search');
    	if($search == ""){


            flashy()->error("Veuillez saisir un mot clé pour votre recherche");
            return back();
        }

        $begining = microtime(true);

        request()->validate([

            'search' => 'required|string',
        ]);

        $search = request()->input('search');

        $arraySearch = explode(' ', $search);

        for($i = 0; $i < sizeof($arraySearch); $i++) {

            $results = Product::inRandomOrder()->where('name', 'like', "%$arraySearch[$i]%")
                    ->orWhere('feature', 'like', "%$arraySearch[$i]%")
                    ->orWhere('description', 'like', "%$arraySearch[$i]%")
                    ->paginate(12);

            $resultTotal = Product::where('name', 'like', "%$arraySearch[$i]%")
                    ->orWhere('feature', 'like', "%$arraySearch[$i]%")
                    ->orWhere('description', 'like', "%$arraySearch[$i]%")
                    ->get();

            $shops = Shop::inRandomOrder()
                ->orwhere('domain', 'like', "%$arraySearch[$i]%")
                ->orwhere('name', 'like', "%$arraySearch[$i]%")
                ->paginate(4);

            if($results[$i]) break;
        }

        $resultTotal2 = Brand::where('name', 'like', "%$search]%")
                            ->get();

        for($i = 0; $i < sizeof($arraySearch); $i++) {

            $shopSearch = Shop::orwhere('name', 'like', "%$arraySearch[$i]%")
                    ->orwhere('domain', 'like', "%$arraySearch[$i]%")
                    ->paginate(5);

            $resultTotal3 = Shop::where('name', 'like', "%$arraySearch[$i]%")
                    ->orwhere('domain', 'like', "%$arraySearch[$i]%")
                    ->get();

            if($shopSearch[$i]) break;
        }

        $title = 'Rechercher';
        $sliders = Slider::inRandomOrder()->paginate(1);

        $finish = microtime(true);

        $time = $begining - $finish;

        return view('/pages/search',
        compact('search', 'results', 'title','sliders','time', 'resultTotal','shops','shopSearch','resultTotal2','resultTotal3'));

        // $title = 'Rechercher';

    }
}
