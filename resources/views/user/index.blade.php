{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.user')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'Home:ghibliwhere ジブリスポット検索・投稿サイト')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="main">
          
            



<div class="slider">
<img src="{{ asset('../images/chihiro043.jpg') }}"  alt="" class="slider-img">
<img src="{{ asset('../images/kokurikozaka036.jpg') }}"  alt="" class="slider-img">
<img src="{{ asset('../images/marnie021.jpg') }}"  alt="" class="slider-img">
<img src="{{ asset('../images/thumb-ged025.png') }}"  alt="" class="slider-img">
<img src="{{ asset('../images/thumb-karigurashi047.png') }}"  alt="" class="slider-img">
<img src="{{ asset('../images/thumb-kazetachinu024.png') }}"  alt="" class="slider-img">
<img src="{{ asset('../images/thumb-ponyo006.png') }}"  alt="" class="slider-img">
</div>

                
                
            <br/><br/>
    
            
            
                <h3>----------おすすめから探す----------</h3>
           <div class="box_osusume">
                    <ul class="horizontal_scroll2">  
                
                    
                            @foreach($posts as $art)
                            <div class="post_block">
                                <table>
                                <tr>
                                
                                    <div class=""> 
                                    <a href="{{ action('User\UserController@show', ['id' => $art->id]) }}">
                                <img src="{{ $art->image ?? '' }}" width="200" height="200">
                                </a>
                               </div>
                                <div class="osusume_name">
                                {{ str_limit($art->name, 100) }}
                                </div>
                                </tr>
                                
                               
                                
                                
                                </div>
                                </table>
                            </div>
                            @endforeach
                      
                </ul>
              </div>
            </div>
            
            <div class="indexbox4">
                    <a href="news.html" class="btn-cross">-mapから探す</a>
               
                    <a href="imagesearch" class="btn-cross">写真から探す</a>
                </div>
            
            
          
            
            
            
            
            <div class="indexbox3">
            <h3>----------作品から探す----------</h3>
            <div class="indexbox3_a">
                   
                   <form action="{{ action('User\UserController@animesearch') }}" method="get">
                    
           
                    <ul class="horizontal_scroll">   
                            {{ csrf_field() }}
                            <button class="btn-totoro" type="submit" name="anime" value="totoro">となりのトトロ</button>
                            <button class="btn-naushika" type="submit" name="anime" value="nausika">風の谷のナウシカ</button>
                            <button class="btn-mononoke" type="submit" name="anime" value="mononoke">もののけ姫</button>
                            <button class="btn-rapyuta" type="submit" name="anime" value="rapyuta">天空の城ラピュタ</button>
                            <button class="btn-majo" type="submit" name="anime" value="majotaku">魔女の宅急便</button>
                            <button class="btn-kaonashi" type="submit" name="anime" value="sentochihiro">千と千尋の神隠し</button>
                            <button class="btn-totoro" type="submit" name="anime" value="hauru">ハウルの動く城</button>
                            <button class="btn-totoro" type="submit" name="anime" value="ponyo">崖の上のポニョ</button>
                            <button class="btn-totoro" type="submit" name="anime" value="kaze">風立ちぬ</button>
                            <button class="btn-totoro" type="submit" name="anime" value="gedo">ゲド戦記</button>
                            <button class="btn-totoro" type="submit" name="anime" value="ma-ni-">思い出のマーニー</button>
                            <button class="btn-totoro" type="submit" name="anime" value="kokuriko">コクリコ坂から</button>
                            <button class="btn-totoro" type="submit" name="anime" value="rupan">カリオストロの城</button>
                            <button class="btn-totoro" type="submit" name="anime" value="kurenai">紅の豚</button>
                            <button class="btn-totoro" type="submit" name="anime" value="mimi">耳を澄ませば</button>
                            <button class="btn-totoro" type="submit" name="anime" value="neko">猫の恩返し</button>
                            <button class="btn-totoro" type="submit" name="anime" value="ariettely">借りぐらしのアリエッティ</button>
                            <button class="btn-totoro" type="submit" name="anime" value="otheranime">その他のアニメ</button>
                </ul>
                  </form>
                 
              </div>
            </div>
            
            
            
            
            
            
            
            
            <div class="indexbox3">
            <h3>----------地域から探す----------</h3>
            <div class="indexbox4">
           
           <form action="{{ action('User\UserController@areasearch') }}" method="get">
                    
           
                       
                            {{ csrf_field() }}
                            <button class="btn-circle-stitch2" type="submit" name="area" value="hokkaido">北海道</button>
                            <button class="btn-circle-stitch3" type="submit" name="area" value="tohoku">東北</button>
                            <button class="btn-circle-stitch4" type="submit" name="area" value="hokuriku">北陸</button>
                            <button class="btn-circle-stitch3" type="submit" name="area" value="koushinetsu">甲信越</button>
                            <button class="btn-circle-stitch2" type="submit" name="area" value="kantou">関東</button>
                            <button class="btn-circle-stitch3" type="submit" name="area" value="toukai">東海</button>
                            <button class="btn-circle-stitch2" type="submit" name="area" value="kansai">関西</button>
                            <button class="btn-circle-stitch3" type="submit" name="area" value="sikoku">四国</button>
                            <button class="btn-circle-stitch2" type="submit" name="area" value="chugoku">中国</button>
                            <button class="btn-circle-stitch4" type="submit" name="area" value="kyushu">九州</button>
                            <button class="btn-circle-stitch2" type="submit" name="area" value="okinawa">沖縄</button>
                  </form>
                    
              </div>
            </div>
            
             <div class="indexbox3">
            <h3>----------その他のタグから探す----------</h3>
            <div class="indexbox3_a">
                <form action="{{ action('User\UserController@tagsearch') }}" method="get">
                    <ul class="horizontal_scroll">   
                    {{ csrf_field() }}
                  <button class="btn-mountain" type="submit" name="tag" value="mountain">山</button>
                  <button class="btn-river" type="submit" name="tag" value="river">川</button>
                  <button class="btn-sea" type="submit" name="tag" value="sea">海</button>
                  <button class="btn-city" type="submit" name="tag" value="city">街</button>
                  <button class="btn-scenery" type="submit" name="tag" value="scenery">景色</button>
                  <button class="btn-building" type="submit" name="tag" value="scenery">建物</button>
                  
                  
                    
                   </ul>
              </div>
            </div>
            
        </form>
    </div>
    
    
    
@endsection