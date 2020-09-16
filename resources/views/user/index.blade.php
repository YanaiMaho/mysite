{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.user')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'Home')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="main">
          
            <div class="cp_cssslider">
	<div class="cp_slidewrapper">
		<div class="cp_slide_item"><img src="images/img1.jpg"></div>
		<div class="cp_slide_item"><img src="images/img2.jpg"></div>
	</div>
</div>
            <div class="search">
            <div class="search-bar">
                            <input type="text" class="form-control" name="cond_title" >
                        </div>
                        <div class="search-bottun">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                       </div>
                </div>
            
            <div class="indexbox1">
                <h3>----------おすすめから探す----------</h3>
            <div class="index-favor">
                <div class="favor-nav">
                 <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                </div>
            </div>
            </div>
            
            
            <div class="indexbox2">
                <div class="indexbox2_1">
                    <a href="news.html">----------mapから探す----------</a>
                </div>
                
                 <div class="indexbox2_2">
                    <a href="news.html">写真から探す</a>
                </div>
            </div>
            
            <div class="indexbox3">
            <h3>----------作品から探す----------</h3>
            <div class="indexbox3_a">
                    <a href="#" class="btn-flat-border">となりのトトロ</a>
                    <a href="#" class="btn-flat-border">風の谷のナウシカ</a>
                    <a href="#" class="btn-flat-border">天空の城　ラピュタ</a>
                    <a href="#" class="btn-flat-border">もののけ姫</a>
                    <a href="#" class="btn-flat-border">千と千尋の神隠し</a>
                    <a href="#" class="btn-flat-border">カリオストロの城</a>
                    <a href="#" class="btn-flat-border">ハウルの動く城</a>
                    <a href="#" class="btn-flat-border">崖の上のポニョ</a>
                    <a href="#" class="btn-flat-border">魔女の宅急便</a>
                    <a href="#" class="btn-flat-border">風立ちぬ</a>
                    <a href="#" class="btn-flat-border">紅の豚</a>
                    <a href="#" class="btn-flat-border">かりぐらしのアリエッティ</a>
                    <a href="#" class="btn-flat-border">耳をすませば</a>
              </div>
            </div>
            
            <div class="indexbox3">
            <h3>----------地域から探す----------</h3>
            <div class="indexbox3_a">
            <a href="" class="btn btn--orange">北海道</a>
            <a href="" class="btn btn--orange">東北</a>
            <a href="" class="btn btn--orange">関東</a>
            <a href="" class="btn btn--orange">中部</a>
            <a href="" class="btn btn--orange">近畿</a>
            <a href="" class="btn btn--orange">中国</a>
            <a href="" class="btn btn--orange">四国</a>
            <a href="" class="btn btn--orange">九州</a>
            <a href="" class="btn btn--orange">沖縄</a>
                    
              </div>
            </div>
            
             <div class="indexbox3">
            <h3>----------その他のタグから探す----------</h3>
            <div class="indexbox3_a">
                    <a href="#" class="btn-flat-dashed-border">山</a>
                    <a href="#" class="btn-flat-dashed-border">川</a>
                    <a href="#" class="btn-flat-dashed-border">海</a>
                    <a href="#" class="btn-flat-dashed-border">街</a>
                    <a href="#" class="btn-flat-dashed-border">景色</a>
                    <a href="#" class="btn-flat-dashed-border">君の名は</a>
                    <a href="#" class="btn-flat-dashed-border">BUTTON</a>
              </div>btn-st
            </div>
            
            
    </div>
    
    
    
@endsection