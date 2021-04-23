<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function travelContent()
    {
        return view(content.travel);
    }

    public function drinkeatContent()
    {
        return view(content.drinkeat);
    }


    public function wheretogoContent()
    {
        return view(content.wheretogo);
    }

    public function scheduleplaningContent()
    {
        return view(content.scheduleplaning);
    }

    public function contactContent()
    {
        return view(content.contact);
    }
}
