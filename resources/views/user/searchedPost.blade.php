@extends('layouts.user')
@section('title', '検索結果:ghibliwhere ジブリスポット検索・投稿サイト')

@section('content')
    <div class="container">
       
       
       <br/>  <br/>  <br/>  <br/> 
            <h3>検索結果</h3>
            <hr>
        <br/> 
             <div class="mypost">
                            @foreach($posts as $art)
                            <div class="post_block">
                                <table>
                                <tr>
                                
                                    <div class=""> 
                                    <a href="{{ action('User\UserController@show', ['id' => $art->id]) }}">
                                <img src="{{ $art->image }}" width="200" height="200"></a>
                               </div>
                                <div class="osusume_name">
                                {{ str_limit($art->name, 100) }}
                                </div>
                                </tr>
                                
                               
                                
                                </div>
                                </table>
                            </div>
                            @endforeach
                       </div>
                </div>
                
                <div>
                        <img src="/images/footer.PNG" class="footer-image">
                        </div>
    
@endsection