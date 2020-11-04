@extends('layouts.user')
@section('title', '写真から探す')

@section('content')
    <div class="image-container">
        
         
        <br>
        <br>
        <br>
        <h3>画像から検索</h3>
    <hr>    
           
           
       
        
                    
                        <ul class="image-box">
                            @foreach($posts as $art)
                                <li>
                                    <a href="{{ action('User\UserController@show', ['id' => $art->id]) }}">
                                    <img src="{{ $art->image }}" class="img">
                                    </a>
                                </li>
                                
                                @if( $art->image1  != null)
                                <li>
                                    <img src="{{ $art->image1 }}" class="img">
                                </li>
                                @endif
                                
                                @if( $art->image2  != null)
                                <li>
                                    <img src="{{ $art->image2 }}" class="img">
                                </li>
                                @endif
                                @if( $art->image3 != null)
                                <li>
                                    <img src="{{ $art->image3 }}" class="img">
                                </li>
                               @endif
                                    
                            @endforeach
                        </ul>
                   
                </div>
                <div>
                        <img src="/images/footer.PNG" class="footer-image">
                        </div>
                <br><br>
    
@endsection