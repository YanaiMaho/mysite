<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;


class UserController extends Controller
{
    public function index()
  {
      return view('user.index');
  }
    
    
    
    
    
    //新規投稿画面表示
    public function add()
  {
      return view('user.create');
  }
  //新規投稿する
 

public function create(Request $request)
  {
     
// Varidationを行う
      $this->validate($request, Article::$rules);

      $art = new Article;
      $form = $request->all();

      // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $art->image_path = basename($path);
      } else {
          $art->image_path = null;
      }
      
      if (isset($form['image1'])) {
        $path = $request->file('image1')->store('public/image1');
        $art->image1_path = basename($path);
      } else {
          $art->image1_path = null;
      }
      
     if (isset($form['image2'])) {
        $path = $request->file('image2')->store('public/image2');
        $art->image2_path = basename($path);
      } else {
          $art->image2_path = null;
      }
      
      if (isset($form['image3'])) {
        $path = $request->file('image3')->store('public/image3');
        $art->image3_path = basename($path);
      } else {
          $art->image3_path = null;
      }

      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);
      unset($form['image1']);
      unset($form['image2']);
      unset($form['image3']);

      // データベースに保存する
      $art->fill($form);
      $art->save();

     
     
     return redirect('admin/news/create');
      // admin/news/createにリダイレクトする
     
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
