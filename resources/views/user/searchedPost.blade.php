@extends('layouts.user')
@section('title', 'ghibliwhere')

@section('content')
    <div class="container">
       
       
       <br/>  <br/>  <br/>  <br/> 
            <h2>-  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -    検索結果   -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -  -</h2>
        <br/> 
             <div class="mypost">
                            @foreach($posts as $art)
                            <div class="post_block">
                                <table>
                                <tr>
                                
                                    <div class=""> 
                                    <a href="{{ action('User\UserController@show', ['id' => $art->id]) }}">
                                <img src="{{ $art->image ?? '' }}" width="200" height="200"></a>
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
    
@endsection