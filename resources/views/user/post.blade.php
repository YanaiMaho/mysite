@extends('layouts.user')
@section('title', '私の投稿')

@section('content')
    <div class="container">
       
       
       <br/>  <br/>  <br/>  <br/> 
            <h2>- - - - - - - - - - - - - - - - - - - - - -    My投稿   - - - - - - - - - - - - - - - - - - - - - -</h2>
        <br/> 
             <div class="mypost">
                            @foreach($posts as $art)
                            <div class="post_block">
                                
                                
                                <div class=""> 
                                <img src="{{ $art->image ?? '' }}" width="200" height="200">
                               </div>
                               
                               
                               <div class="post_name">
                                   {{ str_limit($art->name, 100) }}
                                    
                                </div>
                               
                                <div class="post_click">
                                <a href="{{ action('User\UserController@show', ['id' => $art->id]) }}">投稿へ</a>
                                </div>
                               
                               
                
                                
                                 <div>
                                  
                                        <div class="mypost_button1">
                                            <a href="{{ action('User\UserController@edit', ['id' => $art->id]) }}">編集</a>
                                        </div>
                                       
                                        <div class="mypost_button2">
                                            <a href="{{action('User\UserController@delete',['id' => $art->id])}}">消去</a>
                                        </div>
                                    
                                    </div>
                               
                            </div>
                            @endforeach
                       </div>
                </div>
    
@endsection