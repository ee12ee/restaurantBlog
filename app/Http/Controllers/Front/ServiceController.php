<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service()
    {
        $services = Service::query()->get();
        return view('front.pages.service', compact('services'));
    }
}
