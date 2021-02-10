<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index() {
        //Get data from DB in here and pass it to the view
        $products = Product::with('category')->orderByDesc('created_at')->get();
        return view('index.index', [ 
           'products'=>$products,
           'text'=>'Products'
        ]);
    }

    public function search(Request $request) {
        $searchQuery = $request->get('searchTextInput');
        $searchOption = $request->get('searchOption');
        if ($searchOption == 'category') {
            $searchResult = Product::with('category')->whereHas('category', function ($query) use ($searchQuery) {
                $query->where('name', 
                'LIKE', '%'.$searchQuery.'%');
            })->get();
          }
          else {
            $searchResult = Product::with('category')->where('name', 'LIKE',
            '%'.$searchQuery.'%')->get();
          };
        return view('index.search', [
        'products' => $searchResult
        ]);
        }
}
