<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index()
  {
     $id=1;
      
          // 検索されたら検索結果を取得する
          $posts = Article::where('user_id', $id)->get();
      
      return view('user.index', ['posts' => $posts]);
      
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
        $art->image = basename($path);
      } else {
          $art->image= null;
      }
      
      
    
      
      if (isset($form['image1'])) {
        $path = $request->file('image')->store('public/image');
        $art->image1 = basename($path);
      } else {
          $art->image1 = null;
      }
      
     if (isset($form['image2'])) {
        $path = $request->file('image')->store('public/image');
        $art->image2= basename($path);
      } else {
          $art->image2= null;
      }
      
      if (isset($form['image3'])) {
        $path = $request->file('image')->store('public/image');
        $art->image3= basename($path);
      } else {
          $art->image3= null;
      }
      
     
      $id=Auth::id();
      $user=Auth::user();
      $art->user_id = $id;
      $art->user_name = $user->name;
      
      

      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);
      unset($form['image1']);
      unset($form['image2']);
      unset($form['image3']);
      unset($form['user_name']);

      // データベースに保存する
      $art->fill($form);
      $art->save();

     
     return redirect('user/index');
    
      // admin/news/createにリダイレクトする
     
  }
   
   
   //投稿を閲覧
   
    
    public function mypost()
  {
       
         $id=Auth::id();
        
      
      
      
          // 検索されたら検索結果を取得する
          $posts = Article::where('user_id', $id)->get();
      
      return view('user.post', ['posts' => $posts]);
     
  }
   
   
   
   
     //投稿を編集
    public function edit(Request $request)
  {
       
      $art = Article::find($request->id);
      if (empty($art)) {
        abort(404);    
      }
      return view('user.edit', ['articles_form' => $art]);
  }
    
    
    //投稿をアップデート
    public function update(Request $request)
  {
      // Validationをかける
      $this->validate($request, Article::$rules);
      // News Modelからデータを取得する
      $art = Article::find($request->id);
      // 送信されてきたフォームデータを格納する
      $articles_form = $request->all();
     
      if (isset($articles_form['image'])) {
        $path = $request->file('image')->store('public/image');
        $art->image= basename($path);
        unset($articles_form['image']);
      } elseif (isset($request->remove)) {
        $art->image= null;
        unset($articles_form['remove']);
      }
      
      
      if (isset($articles_form['image1'])) {
        $path = $request->file('image1')->store('public/image1');
        $art->image1= basename($path);
        unset($articles_form['image1']);
      } elseif (isset($request->remove)) {
        $art->image1= null;
        unset($articles_form['remove']);
      }
      
      
      
      if (isset($articles_form['image2'])) {
        $path = $request->file('image2')->store('public/image2');
        $art->image2= basename($path);
        unset($articles_form['image2']);
      } elseif (isset($request->remove)) {
        $art->image2= null;
        unset($articles_form['remove']);
      }
      
      
      if (isset($articles_form['image3'])) {
        $path = $request->file('image3')->store('public/image3');
        $art->image3= basename($path);
        unset($articles_form['image']);
      } elseif (isset($request->remove)) {
        $art->image3= null;
        unset($articles_form['remove']);
      }
      unset($articles_form['_token']);
      // 該当するデータを上書きして保存する
      $art->fill($articles_form)->save();
      
     return redirect('user/mypost');
  }
   
   
   
    //投稿を消去
    public function delete(Request $request)
    {
      
       //該当するNews Modelを取得
    $art = Article::find($request->id);
    //消去する
    $art->delete();
    return redirect('user/mypost');
    }
    
    
    
    
    
    
    
    
    
    
    
    
    //検索
   
    public function search(Request $request)
  {
    
      $cond_title = $request->input('cond_title');
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Article::where('name', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Article::all();
      }
      return view('user.search', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
  
  
  
  
    //画像で検索
   public function imagesearch(Request $request)
  {
      $cond_title = $request->cond_title;
      
          // それ以外はすべてのニュースを取得する
          $posts = Article::all();
      
      return view('user.images', ['posts' => $posts, 'cond_title' => $cond_title]);
     
  }
    
    
    //animeで検索
    public function animesearch(Request $request){
         $cond_title = $request->anime;
      
          // 検索されたら検索結果を取得する
          $posts = Article::where('anime', $cond_title)->get();
      
      return view('user.searchedPost', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
    
    
    
    //areaで検索
    public function areasearch(Request $request){
         $cond_title = $request->area;
      
          // 検索されたら検索結果を取得する
          $posts = Article::where('area', $cond_title)->get();
      
      return view('user.searchedPost', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
   
   
   
   
    //tagで検索
    public function tagsearch(Request $request){
      $cond_title = $request->tag;
      
          // 検索されたら検索結果を取得する
          $posts = Article::where('tag', $cond_title)->get();
      
      return view('user.searchedPost', ['posts' => $posts, 'cond_title' => $cond_title]);
        
    }
    //mapで検索
    public function mapsearch(){
      
      
          // それ以外はすべてのニュースを取得する
          $posts = Article::all();
      
      return view('user.map', ['posts' => $posts]);
        
    }
    
    
    
    
    
    
    public function show(Request $request){
        $art = Article::find($request->id);
      if (empty($art)) {
        abort(404);    
      }
      return view('user.show', ['articles_form' => $art]);
    }
    
    
    
    
}