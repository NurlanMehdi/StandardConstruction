<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PageController extends Controller
{
    public function index()
    {
        $servicesData = config('servicesData');
        return view('index', compact( 'servicesData'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $servicesData = config('servicesData');
        return view('pages.services', compact( 'servicesData'));
    }

    public function products()
    {
        return view('pages.products');
    }

    public function projects()
    {
        return view('pages.projects');
    }

    public function customers()
    {
        $logoDir = public_path('assets/images/customers'); 

        $logos = File::files($logoDir);
        $imageExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        $logos = array_filter($logos, function($file) use ($imageExtensions) {
            return in_array($file->getExtension(), $imageExtensions);
        });

        return view('pages.customers', compact('logos'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function serviceDetail($id) 
    {
        // Load the services data from the config file
        $servicesData = config('servicesData');
        // Check if the ID exists in the data
        if (array_key_exists($id, $servicesData)) {
            $service = $servicesData[$id];
            
            // Get all services except the one with the provided ID
            $otherServices = array_filter($servicesData, function($key) use ($id) {
                return $key !== $id;
            }, ARRAY_FILTER_USE_KEY);
            
        } else {
            // Handle the case where the ID does not exist
            abort(404); // or return a default service, or show an error message
        }
    
        // Pass the service data and other services to the view
        return view('pages.servicedetail', compact('service', 'otherServices'));
    }
    

}
