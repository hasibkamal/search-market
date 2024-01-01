<?php

namespace App\Modules\Frontend\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Backend\Models\Client;
use App\Modules\Backend\Models\Gallery;
use App\Modules\Backend\Models\GalleryCategory;
use App\Modules\Backend\Models\Product;
use App\Modules\Backend\Models\Service;
use App\Modules\Backend\Models\Slider;
use App\Modules\Backend\Models\SpecialOffer;
use App\Modules\Backend\Models\Testimonial;
use App\Modules\User\Models\User;

class HomeController extends Controller
{
    /**
     * @throws \Exception
     */
    public function index()
    {
        $data['sliders'] = Slider::where('is_archive',0)->orderBy('ordering','ASC')->limit(6)->get();
        $data['services'] = Service::where('is_archive',0)->where('status',1)->orderBy('ordering','asc')->get();
        $data['products'] = Product::where('is_archive',0)->orderBy('id','ASC')->limit(8)->get();

        $data['doctors'] = User::join('user_types','user_types.id','=','users.user_type')
            ->where('users.status', 1)->where('users.is_archive',0)
            ->where('users.user_type',config('misc.user_type.doctor'))
            ->limit(4)
            ->get([
                'users.*'
            ]);

        $data['galleryCategories'] = GalleryCategory::rightJoin('gallery','gallery.category_id','=','gallery_categories.id')
            ->where('gallery_categories.is_archive',0)
            ->where('gallery_categories.status', 1)
            ->groupBy('gallery_categories.id')
            ->get([
                'gallery_categories.*'
            ]);

        $data['gallery'] = Gallery::getData()->limit(12)->get([
            'gallery.*',
            'gallery_categories.name'
        ]);

        $data['testimonials'] = Testimonial::getData()->limit(4)->get([
            'testimonials.*'
        ]);

//        $data['clients'] = Client::getData()->limit(12)->get([
//            'clients.*'
//        ]);

        $data['specialOffers'] = SpecialOffer::getData()->limit(3)->get([
            'special_offers.*'
        ]);

//        $data['appearance']= Appearance::where('appearance.is_archive',0)->first();
        return view("Frontend::index",$data);
    }
}
