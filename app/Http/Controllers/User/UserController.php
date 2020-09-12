<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
  {
      return view('admin.user.index');
  }
    
    
    
    
    
    //新規投稿画面表示
    public function add()
  {
      return view('admin.user.create');
  }
  //新規投稿する
  public function create()
    {
        return redirect('admin/user/create');
    }

   
   
     //投稿を編集
    public function edit()
    {
        return view('admin.user.edit');
    }
    //投稿をアップデート
    public function update()
    {
        return redirect('admin//edit');
    }
    //投稿を消去
    public function delete()
    {
        return redirect('admin/profile/edit');
    }
    
    
    
    
    
    
    //お気に入り登録
    public function favor()
    {
        
    }
    //お気に入り消去
     public function deletefavor()
    {
        
    }
    //お気に入り表示
    public function indexfavor(){
        
    }
    
    
    
    
    //検索
    public function search(){
        
    }
    //画像で検索
    public function imagesearch(){
        
    }
    //animeで検索
    public function animesearch(){
        
    }
    //tagで検索
    public function tagsearch(){
        
    }
    //mapで検索
    public function mapsearch(){
        
    }
    
    
    
    
    public function show(){
        
    }
    
    
    
    
}
