<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyProfilController extends Controller
{
    public function index($id){
        return '<a href="https://www.educastudio.com">
        https://www.educastudio.com</a>';
    }

    public function products($id){
        return '<a href="https://www.educastudio.com/category/'.$id.'">
        https://www.educastudio.com/category/'.$id.'</a>';
    }

    public function news($id = null){
        if($id == null) return '<a href="https://www.educastudio.com/news">
            https://www.educastudio.com/news</a>';
            return '<a href="https://www.educastudio.com/news/'.$id.'">
            https://www.educastudio.com/news/'.$id.'</a>';
    }

    public function program($id){
        return '<a href="https://www.educastudio.com/program/'.$id.'">
        https://www.educastudio.com/program/'.$id.'</a>';
    }

    public function about($id){
        return '<a href="https://www.educastudio.com/about-us">
        https://www.educastudio.com/about-us</a>';
    }

    public function show($id){
        return '<a href="https://www.educastudio.com/contact-us'.$id.'">
        https://www.educastudio.com/contact-us</a>';
    }

    public function edit($id){
        return '<a href="https://www.educastudio.com/contact-us'.$id.'">
        https://www.educastudio.com/contact-us</a>';
    }

    public function update(Request $request, $id){
        return '<a href="https://www.educastudio.com/contact-us'.$id.'">
        https://www.educastudio.com/contact-us</a>';
    }

    public function destory($id){
        return '<a href="https://www.educastudio.com/contact-us'.$id.'">
        https://www.educastudio.com/contact-us</a>';
    }

}
