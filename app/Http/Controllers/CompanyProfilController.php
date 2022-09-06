<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyProfilController extends Controller
{
    public function home(){
        return '<a href="https://www.educastudio.com">
        https://www.educastudio.com</a>'; 
    }
    

    //masuk halaman dulu 
    public function products($id){
        return '<a href="https://www.educastudio.com/category/'.$id.'">
        https://www.educastudio.com/category/'.$id.'</a>';
    }

    //langsung bisa link
    // public function produk()
    // {
    //     return redirect('https://www.educastudio.com/category/marbel-edu-games');
    // }
    // public function produk2()
    // {
    //     return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-game');
    // }
    // public function produk3()
    // {
    //     return redirect('https://www.educastudio.com/category/riri-story-books');
    // }
    // public function produk4()
    // {
    //     return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    // }

    //harus masuk halaman
    public function news($id = null){
        if($id == null) return '<a href="https://www.educastudio.com/news">
            https://www.educastudio.com/news</a>';
            return '<a href="https://www.educastudio.com/news/'.$id.'">
            https://www.educastudio.com/news/'.$id.'</a>';
    }

    //langsung masuk link
    
    // public function berita()
    // {
    //     return redirect('https://www.educastudio.com/news');
    // }
    // public function contoh_berita($id)
    // {
    //     return redirect('https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19');
    // }

    public function program($id){
        return '<a href="https://www.educastudio.com/program/'.$id.'">
        https://www.educastudio.com/program/'.$id.'</a>';
    }

    //langsung link
    // public function karir()
    // {
    //     return redirect('https://www.educastudio.com/program/karir');
    // }
    // public function magang()
    // {
    //     return redirect('https://www.educastudio.com/program/magang');
    // }
    // public function kunjungan_industri()
    // {
    //     return redirect('https://www.educastudio.com/program/kunjungan-industri ');
    // }
    

    public function about(){
        return '<a href="https://www.educastudio.com/about-us">
        https://www.educastudio.com/about-us</a>';
    }

    //langsung link
    // public function about()
    // {
    //     return redirect('https://www.educastudio.com/about-us');
    // }

    public function index(){
        return '<a href="https://www.educastudio.com/contact-us">
        https://www.educastudio.com/contact-us</a>';
    }
    public function create(){
        return '<a href="https://www.educastudio.com/contact-us">
        https://www.educastudio.com/contact-us</a>';
    }
    public function store(Request $request, $id){
        return '<a href="https://www.educastudio.com/contact-us">
        https://www.educastudio.com/contact-us</a>';
    }
    public function show($id){
        return '<a href="https://www.educastudio.com/contact-us">
        https://www.educastudio.com/contact-us</a>';
    }

    public function edit($id){
        return '<a href="https://www.educastudio.com/contact-us">
        https://www.educastudio.com/contact-us</a>';
    }

    public function update(Request $request, $id){
        return '<a href="https://www.educastudio.com/contact-us">
        https://www.educastudio.com/contact-us</a>';
    }

    public function destory($id){
        return '<a href="https://www.educastudio.com/contact-us">
        https://www.educastudio.com/contact-us</a>';
    }

}
