@extends('layouts.user')
@section('title','ghibliwhere')

@section('content')
    <div class="contents">
       <div class="mypost">
                            @foreach($posts as $art)
                            <div class="post_block">
                                <table>
                                <tr>
                                
                                    <img src="{{ $art->image }}">
                                <a href="{{ action('User\UserController@show', ['id' => $art->id])}}">button</a></a>
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
@endsection