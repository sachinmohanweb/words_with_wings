<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\Poem;


class HomeController extends Controller
{
    
    public function Index() : View
    {
        $poems = Poem::all();

        return view('index',compact('poems'));
    }

    public function BlogDetails($id) : View
    {
        $poem = Poem::find($id);

        return view('blog_details',compact('poem'));
    }
}
