
                        
  
        
         
             
    






<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
         {{-- 後の章で説明します --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        <title>@yield('title')</title>

       

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
       
        <link href="{{ secure_asset('css/index.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するCSSを読み込みます --}}
        <link href="{{ secure_asset('css/user.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/a.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/b.css') }}" rel="stylesheet">
       
       
       <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>

     
    </head>
  
  
  
  
    <body>
        
       
  
    
     
        

   
         
          
     
    
      
      
   


       <header class="header-4">
  <div class="header-inner">
    <div class="logo">
      <h1>GhibliWhere</h1>
    </div>
    <nav class="header-nav">
        
      <div class="header-nav-item">
          
           <a href="index"><li class="header-nav-item-li">ホーム</li></a>
            <a href="mypost"><li class="header-nav-item-li">my投稿</li></a>
          <a href="create"><li class="header-nav-item-li">新規投稿</li></a>
        
        <form class="form2" action="{{ action('User\UserController@search') }}" method="get">
                    
            
                            <input type="text" class="form2-input" name="cond_title" value= "{{ $cond_title ?? '' }}">
                      
                       
                            {{ csrf_field() }}
                            <input type="submit" class=""form2-button"" value="検索">
                            
                           
                
                      
    </form>
      </div>
      <div class="header-nav-item">
            @guest
            <li class="header-nav-item-li">
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        {{-- ログインしていたらユーザー名とログアウトボタンを表示 --}}
                        @else
                           
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                
                           </div>
                         
                            @endguest   
  
      </div>
    </nav>
  </div>
</header>
         
                 
                        
                       
   
    

         
                
                       
                     
                

            <main class="py-4">
                <div class="main">
                 <div class="container">
       
       
       <br/>  <br/>  <br/>   
       
       
       
                       <h3>{{ $articles_form->name }}</h3>
            
            <br/>
            
            
            

            <p class="show-p">
            <a href="{{ $articles_form->image ?? '' }}" data-lightbox="group"><img src="{{ $articles_form->image ?? '' }}" class="show-image"></a>
            </p>
            <br>
            <p class="show-p">
                   
                                @if( $articles_form->image1  != null)
            <a href="{{ $articles_form->image1 ?? '' }}" data-lightbox="group"><img src="{{ $articles_form->image1 ?? '' }}" class="show-subimage"></a>
             @endif
                                
                                @if( $articles_form->image2  != null)
            <a href="{{ $articles_form->image2 ?? '' }}" data-lightbox="group"><img src="{{ $articles_form->image2 ?? '' }}" class="show-subimage"></a>
             @endif
                                
                                @if( $articles_form->image3  != null)
            <a href="{{ $articles_form->image3 ?? '' }}" data-lightbox="group"><img src="{{ $articles_form->image3 ?? '' }}" class="show-subimage"></a>
             @endif
             </p>
             <br>
    
 
                      <table border="" class="show-table">
                        <tr class="tr1">
                       <td>
                        名称
                       </td>
                       <td class="td-content">
                       {{ $articles_form->name }}
                       </td>
                       </tr>
                       
                       <tr class="tr2">
                       <td>
                       コメント
                        </td>
                        <td class="td-content">
                        {{ $articles_form->comment }}
                       </td>
                       </tr>
                      
                      
                        <tr class="tr3">
                         <td>
                         住所
                         </td>
                         <td class="td-content">
                        {{ $articles_form->address }}
                         </td>
                        </tr>
                        
                       
                        <tr class="tr1">
                       
                        <td>ホームページ</td>
                         <td class="td-content">{{ $articles_form->homepage }}</td>
                
                        </tr>
                        
                       <tr class="tr1">
                        <td>関連アニメ</td>
                        <td class="td-content">{{ $articles_form->anime }}</td>
                        </tr>
                        
                        <tr class="tr1">
                        <td>タグ</td>
                        <td class="td-content">{{ $articles_form->tag}}</td>
                        </tr>
                        
                         <tr class="tr1">
                        <td>投稿者</td>
                        <td class="td-content">{{ $articles_form->user_name}}</td>
                        </tr>
                        
                        
                      
                        </table>
                        
                        
                        <br><br>
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmvcMTyhzgcWPqN4Qnx_b8NUvSeagLhdc&callback=initMap" async></script>
<script type="text/javascript">
  var map;
  var marker;
  var geocoder;
  function initMap() {
    geocoder = new google.maps.Geocoder();
    geocoder.geocode({
    'address': '{{ $articles_form->address }}' //住所
    }, function(results, status) { 
      if (status === google.maps.GeocoderStatus.OK) {
      map = new google.maps.Map(document.getElementById('gmap'), {
        center: results[0].geometry.location,
        zoom: 17 //ズーム
     });
    marker = new google.maps.Marker({
    position: results[0].geometry.location,
    map: map
    });
    infoWindow = new google.maps.InfoWindow({
    content: '{{ $articles_form->name }}'
    });
    marker.addListener('click', function() {
      infoWindow.open(map, marker); 
    });
    } else { 
      alert(status);
    }
  });
}
</script>
<div id="gmap"></div>
                        <br>
                        <div>
                        <img src="/images/footer.PNG" class="footer-image">
                        </div>
                </div>
            </main>
        
        <footer>
                <p><small>&copy; 2020</small></p>
        </footer>
        
    </body>
</html>