@extends('layouts.user')
@section('title', 'ghibliwhere ジブリスポット検索・投稿サイト')

@section('content')
    <div class="container">
       
       
       <br/>  <br/>  <br/>  <br/> 
            
            
            <img src="{{ $articles_form->image ?? '' }}" width="300" height="300">
         <img src="{{ $articles_form->image1 }}">
         <img src="{{ $articles_form->image2 }}">
         <img src="{{ $articles_form->image3 }}">
 
        
                       <h3>{{ $articles_form->name }}</h3>
                      
                        <div class="create-box" >
                         <label class="col-md-2">住所</label>
                         <div class="show_content">{{ $articles_form->address }}</div>
                        </div>
                        
                       <div class="create-box" >
                        <label class="col-md-2">コメント</label>
                        <div class="show_content">{{ $articles_form->comment }}</div>
                        </div>
                        
                        <div class="create-box" >
                         <label class="col-md-2">ホームページ</label>
                         <div class="show_content">{{ $articles_form->homepage }}</div>
                        </div>
                        
                        <div class="create-box" >
                        <label class="col-md-2">関連アニメ</label>
                        <div class="show_content">{{ $articles_form->anime }}</div>
                        </div>
                        
                        <div class="create-box" >
                        <label class="col-md-2">タグ</label>
                        <div class="show_content">{{ $articles_form->tag}}</div>
                        </div>
                        
                         <div class="create-box" >
                        <label class="col-md-2">投稿者</label>
                        <div class="show_content">{{ $articles_form->user_name}}</div>
                        </div>
                        
                        
                        
        
         
             
    
@endsection