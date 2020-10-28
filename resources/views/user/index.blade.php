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
<img src="{{ asset('../images/marnie035.jpg') }}"  alt="" class="slider-img">
<img src="{{ asset('../images/ged025.jpg') }}"  alt="" class="slider-img">
<img src="{{ asset('../images/karigurashi047.jpg') }}"  alt="" class="slider-img">
<img src="{{ asset('../images/kazetachinu024.jpg') }}"  alt="" class="slider-img">
<img src="{{ asset('../images/ponyo006.jpg') }}"  alt="" class="slider-img">
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
                            <button class="btn-totoro" type="submit" name="anime" value="となりのトトロ">となりのトトロ</button>
                            <button class="btn-naushika" type="submit" name="anime" value="風の谷のナウシカ">風の谷のナウシカ</button>
                            <button class="btn-mononoke" type="submit" name="anime" value="もののけ姫">もののけ姫</button>
                            <button class="btn-rapyuta" type="submit" name="anime" value="天空の城ラピュタ">天空の城ラピュタ</button>
                            <button class="btn-majo" type="submit" name="anime" value="魔女の宅急">魔女の宅急便</button>
                            <button class="btn-kaonashi" type="submit" name="anime" value="千と千尋の神隠し">千と千尋の神隠し</button>
                            <button class="btn-totoro" type="submit" name="anime" value="ハウルの動く城">ハウルの動く城</button>
                            <button class="btn-totoro" type="submit" name="anime" value="崖の上のポニョ">崖の上のポニョ</button>
                            <button class="btn-totoro" type="submit" name="anime" value="風立ちぬ">風立ちぬ</button>
                            <button class="btn-totoro" type="submit" name="anime" value="ゲド戦記">ゲド戦記</button>
                            <button class="btn-totoro" type="submit" name="anime" value="思い出のマーニー">思い出のマーニー</button>
                            <button class="btn-totoro" type="submit" name="anime" value="コクリコ坂から">コクリコ坂から</button>
                            <button class="btn-totoro" type="submit" name="anime" value="カリオストロの城">カリオストロの城</button>
                            <button class="btn-totoro" type="submit" name="anime" value="紅の豚">紅の豚</button>
                            <button class="btn-totoro" type="submit" name="anime" value="耳を澄ませば">耳を澄ませば</button>
                            <button class="btn-totoro" type="submit" name="anime" value="猫の恩返し">猫の恩返し</button>
                            <button class="btn-totoro" type="submit" name="anime" value="借りぐらしのアリエッティ">借りぐらしのアリエッティ</button>
                            <button class="btn-totoro" type="submit" name="anime" value="その他のアニメ">その他のアニメ</button>
                </ul>
                  </form>
                 
              </div>
            </div>
            
            
            
            
            
            
            
            
            <div class="indexbox3">
            <h3>----------地域から探す----------</h3>
            <div class="indexbox4">
           
           <form action="{{ action('User\UserController@areasearch') }}" method="get">
                    
           
                       
                            {{ csrf_field() }}
                            <button class="btn-circle-stitch2" type="submit" name="area" value="北海道">北海道</button>
                            <button class="btn-circle-stitch3" type="submit" name="area" value="東北">東北</button>
                            <button class="btn-circle-stitch4" type="submit" name="area" value="北陸">北陸</button>
                            <button class="btn-circle-stitch3" type="submit" name="area" value="甲信越">甲信越</button>
                            <button class="btn-circle-stitch2" type="submit" name="area" value="関東">関東</button>
                            <button class="btn-circle-stitch3" type="submit" name="area" value="東海">東海</button>
                            <button class="btn-circle-stitch2" type="submit" name="area" value="関西">関西</button>
                            <button class="btn-circle-stitch3" type="submit" name="area" value="四国">四国</button>
                            <button class="btn-circle-stitch2" type="submit" name="area" value="中国">中国</button>
                            <button class="btn-circle-stitch4" type="submit" name="area" value="九州">九州</button>
                            <button class="btn-circle-stitch2" type="submit" name="area" value="沖縄">沖縄</button>
                  </form>
                    
              </div>
            </div>
            
             <div class="indexbox3">
            <h3>----------その他のタグから探す----------</h3>
            <div class="indexbox3_a">
                <form action="{{ action('User\UserController@tagsearch') }}" method="get">
                    <ul class="horizontal_scroll">   
                    {{ csrf_field() }}
                  <button class="btn-mountain" type="submit" name="tag" value="山">山</button>
                  <button class="btn-river" type="submit" name="tag" value="川">川</button>
                  <button class="btn-sea" type="submit" name="tag" value="海">海</button>
                  <button class="btn-city" type="submit" name="tag" value="街">街</button>
                  <button class="btn-scenery" type="submit" name="tag" value="景色">景色</button>
                  <button class="btn-building" type="submit" name="tag" value="建物">建物</button>
                  
                  
                    
                   </ul>
              </div>
            </div>
            
        </form>
    </div>
    
    
    
@endsection