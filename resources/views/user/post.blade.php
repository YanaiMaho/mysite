@extends('layouts.user')
@section('title', '投稿:ghibliwhere ジブリスポット検索・投稿サイト')

@section('content')
    <div class="container">
       
       
       <br/>  <br/>  <br/>  <br/> 
            <h2>投稿</h2>
            <hr>
        <br/> 
             <div class="mypost">
                            @foreach($posts as $art)
                            <div class="post_block">
                                
                                
                                
                               
                               
                                <a href="{{ action('User\UserController@show', ['id' => $art->id]) }}"><img src="{{ $art->image ?? '' }}" width="200" height="200"></a>
                                
                               
                               
                               <div class="post_name">
                                   {{ str_limit($art->name, 100) }}
                                    
                                </div>
                               
                                
                               
                               
                
                                
                                 <div>
                                  
                                        <div class="mypost_button1">
                                            <a href="{{ action('User\UserController@edit', ['id' => $art->id]) }}">編集</a>
                                        </div>
                                       
                                        <div class="mypost_button1">
                                            <a href="{{action('User\UserController@delete',['id' => $art->id])}}">消去</a>
                                        </div>
                                    
                                    </div>
                               
                            </div>
                            @endforeach
                       </div>
                      <div>
                        <img src="/images/footer.PNG" class="footer-image">
                        </div>
                </div>
    
@endsection