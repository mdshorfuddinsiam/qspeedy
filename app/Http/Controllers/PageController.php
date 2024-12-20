<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Believe;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Commitment;
use App\Models\Eventpromo;
use App\Models\Generalsetting;
use App\Models\Latestwork;
use App\Models\Material;
use App\Models\Membership;
use App\Models\Offer;
use App\Models\Welcome;
use App\Models\Service;
use App\Models\Faq;
use App\Models\Concern;
use App\Models\Area;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index(){
    	// $banners = Banner::whereStatus(1)->latest()->get();
    	// $welcome = Welcome::latest()->first();
    	// $offer = Offer::latest()->first();
     //    $memberships = Membership::whereStatus(1)->get();
     //    $latestworks = Latestwork::whereStatus(1)->get();
     //    $commitments = Commitment::whereStatus(1)->get();
    	// return view('frontend.index', compact('banners', 'welcome', 'offer', 'memberships', 'latestworks', 'commitments'));

        $banner = Banner::whereStatus(1)->latest()->first();
        $about = About::first();
        $services = Service::whereStatus(1)->latest()->get();
        $faqs = Faq::whereStatus(1)->latest()->get();
        $concerns = Concern::whereStatus(1)->latest()->get();

        return view('frontend.index', compact('banner', 'about', 'services', 'faqs', 'concerns'));
    }

    public function aboutPage(){
     //    $about = About::latest()->first();
     //    $believes = Believe::whereStatus(1)->get();
    	// return view('frontend.pages.about', compact('about', 'believes'));

        $about = About::first();
        return view('frontend.pages.about', compact('about'));
    }

    public function servicePage(){
        $services = Service::whereStatus(1)->latest()->get();
        return view('frontend.pages.service', compact('services'));
    }

    public function serviceDetailsPage($slug){
        $service = Service::where('slug', $slug)->first();
        $faqs = Faq::whereStatus(1)->latest()->get();
        return view('frontend.pages.service_details', compact('service', 'faqs'));
    }

    public function areaCoverPage($slug){
        $area = Area::where('slug', $slug)->first();
        return view('frontend.pages.area_cover', compact('area'));
    }

    public function contactPage(){
        $generalsetting = Generalsetting::latest()->first();
        return view('frontend.pages.contact', compact('generalsetting'));
    }










    public function eventpromosPage(){
        $eventpromos = Eventpromo::whereStatus(1)->get();
    	return view('frontend.pages.event-promos', compact('eventpromos'));
    }

    public function ourproductsPage(){
        $categories = Category::whereStatus(1)->get();
        $materials = Material::whereStatus(1)->get();
    	return view('frontend.pages.our-products', compact('categories', 'materials'));
    }

    public function blogPage(){
        $blogs = Blog::whereStatus(1)->latest()->get();
        $generalsetting = Generalsetting::latest()->first();
        $data = 'blog';
    	return view('frontend.pages.blog', compact('blogs', 'generalsetting', 'data'));
    }

    public function catWiseProducts($slug, $data){
        $category = Category::with('products')->where('slug', $slug)->whereStatus(1)->first();
        return view('frontend.pages.products', compact('category', 'data'));
    }

    public function matWiseProducts($slug, $data){
        $material = Material::with('products')->where('slug', $slug)->whereStatus(1)->first();
        return view('frontend.pages.products', compact('material', 'data'));
    }

    public function blogDetails(Blog $blog){
        $generalsetting = Generalsetting::latest()->first();
        $blogs = Blog::where('id', '!=', $blog->id)->latest()->limit(3)->get();
        return view('frontend.pages.blog-details', compact('blog', 'generalsetting', 'blogs'));
    }


}
