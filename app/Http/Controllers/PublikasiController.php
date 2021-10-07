<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publikasi;
use App\Models\User;
use App\Models\Category;

class PublikasiController extends Controller
{
    public function index()
    {
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug',request('category'));
            $title = ' di '.$category->name;
        }

        if(request('user')){
            $user = User::firstWhere('username', request('user'));
            $title = ' oleh '.$user->name;
        }

        return view ('dokumen', [
            "title" => "Seluruh Dokumen".$title,
            "active" => "dokumen",
            // "publikasi" => Publikasi::all()
            "publikasi" => Publikasi::latest()->filter(request(['search','category', 'user']))->simplePaginate(7)
        ]);
    }

    public function show($id){
    $data= Publikasi::where('slug', $id)->first();
        return view('post',[
            "title" => "single post" ,
            "active" => "dokumen",
            "publikasi" => $data
        ]);
    }
}
