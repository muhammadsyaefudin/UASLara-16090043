<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function userhome(){
        $artikel = Artikel::orderBy('id','DESC')->where('status','1')->paginate(4);
        $headers = Artikel::orderBy('id', 'DESC')->where('status','1')->paginate(3);
        $popular = Artikel::orderBy('id', 'DESC')->where('status','1')->paginate(6);
        return view('pages-user.home',compact('artikel','headers', 'popular'));
    }

    public function artikeldetail($slug){
        $artikel = Artikel::where('slug', $slug)->first();
        $headers = Artikel::where('slug', $slug);
        $popular = Artikel::orderBy('id', 'DESC')->where('status', '1')->paginate(6);
        return view('pages-user.detail',compact('artikel','headers', 'popular'));
    }

    public function usernews(){
        $artikel = Artikel::orderBy('id','DESC')->where('status','1')->paginate(4);
        $headers = Artikel::orderBy('id', 'DESC')->where('status','1')->paginate(3);
        $popular = Artikel::orderBy('id', 'DESC')->where('status','1')->paginate(6);
        return view('pages-user.news',compact('artikel','headers', 'popular'));
    }

    public function slide(){
//        $artikel = Artikel::where('status','1')->get();
//        return view('page-user.home',compact('artikel', 'headers'));
    }
}
