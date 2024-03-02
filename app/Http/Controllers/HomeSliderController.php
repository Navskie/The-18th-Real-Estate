<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeSliderController extends Controller
{
    public function Amenities() {
        return view('/admin/section/amenities_section');
    }

    public function Units() {
        return view('/admin/section/units_section');
    }

    public function DoorStep() {
        return view('/admin/section/doorstep_section');
    }

    public function Testimonial() {
        return view('/admin/section/testimonial_section');
    }

    public function Footer() {
        return view('/admin/section/footer_section');
    }
}
