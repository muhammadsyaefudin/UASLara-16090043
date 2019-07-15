<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SportNewsController extends Controller
{
    public function userhome(){
        $artikel = Artikel::orderBy('id','DESC')->where('status','1')->paginate(4);
        $headers = Artikel::orderBy('id', 'DESC')->where('status','1')->paginate(3);
        $popular = Artikel::orderBy('id', 'DESC')->where('status','1')->paginate(6);
        return view('sportnews.sporthome',compact('artikel','headers', 'popular'));
    }

    public function artikeldetail($slug){
        $artikel = Artikel::where('slug', $slug)->first();
        $headers = Artikel::where('slug', $slug);
        $popular = Artikel::orderBy('id', 'DESC')->where('status', '1')->paginate(6);
        return view('sportnews.detail',compact('artikel','headers', 'popular'));
    }

    public function usernews(){
        $artikel = Artikel::orderBy('id','DESC')->where('status','1')->paginate(4);
        $headers = Artikel::orderBy('id', 'DESC')->where('status','1')->paginate(3);
        $popular = Artikel::orderBy('id', 'DESC')->where('status','1')->paginate(6);
        return view('sportnews.news',compact('artikel','headers', 'popular'));
    }
}
