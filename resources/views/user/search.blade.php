@extends('layouts.user')
@section('title','検索結果:ghibliwhere ジブリスポット検索・投稿サイト')

@section('content')
    <div class="contents">
       <div class="mypost">
                            @foreach($posts as $art)
                            <div class="post_block">
                                <table>
                                <tr>
                                
                                   
                                    
                                <a href="{{ action('User\UserController@show', ['id' => $art->id])}}"> <img src="{{ $art->image }}"></a>
                                </tr>
                                <br/>
                                <tr>
                                  
                                   {{ str_limit($art->name, 100) }}
                                    
                                </tr>
                                <br/>
                                <br/>
                                </table>
                            </div>
                            @endforeach
                       </div>
        
     </div>  
     <div>
                        <img src="/images/footer.PNG" class="footer-image">
                        </div>
@endsection