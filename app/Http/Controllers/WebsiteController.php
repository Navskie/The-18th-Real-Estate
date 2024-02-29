<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function MainPage() {
        return view('/index');
    }

    public function Project() {
        return view('/project');
    }

    public function Brochure() {
        return view('/brochure');
    }

    public function ProjectList() {
        return view('/project-list');
    }
}
