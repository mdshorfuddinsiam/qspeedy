<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Generalsetting;
use App\Models\Product;
use Illuminate\Http\Request; // or any other model you're searching

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Perform search (this is just an example, adjust to your needs)
        $products = Product::where('title', 'like', "%$query%")
            ->orWhere('description', 'like', "%$query%")
            ->get();

        $data = 'search';

        return view('frontend.pages.products', compact('products', 'data'));
    }

    public function searchBlogs(Request $request)
    {
        $query = $request->input('query');

        // Perform search (this is just an example, adjust to your needs)
        $searchBlogs = Blog::where('title', 'like', "%$query%")
            ->orWhere('short_description', 'like', "%$query%")
            ->orWhere('long_description', 'like', "%$query%")
            ->get();

        $generalsetting = Generalsetting::latest()->first();
        $data = 'search-blog';

        return view('frontend.pages.blog', compact('searchBlogs', 'generalsetting', 'data'));
    }


}
