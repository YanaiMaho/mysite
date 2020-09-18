@extends('layouts.user')
@section('title', '新規投稿')

@section('content')
 
                <h2>ニュース新規作成</h2>
                <form action="{{ action('User\UserController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    
                    
                       <div class="contents">
                        
                        <div class="create-box" >
                        <label class="col-md-2">名前</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                        
                        
                       <div class="create-box" >
                        <label class="col-md-2">コメント</label>
                        <textarea class="form-control" name="comment" rows="10">{{ old('comment') }}</textarea>
                        </div>
                        
                        
                        <div class="create-box" >
                         <label class="col-md-2">住所</label>
                         <textarea class="form-control" name="address" rows="3">{{ old('address') }}</textarea>
                        </div>
                        
                        
                        
                         <div class="create-box">
                        <label class="col-md-2">作品タグ</label>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value="totoro">となりのトトロ
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value="nausika">風の谷のナウシカ
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value="mononoke">もののけ姫
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value="rapyuta">天空の城ラピュタ
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value="mazyotaku">魔女の宅急便
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value="kurenainobuta">紅の豚
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value="rupan">カリオストロの城
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value="sentochihiro">千と千尋の神隠し
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value="hauru">ハウルの動く城
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value="mimiwosumaseba">耳を澄ませば
                            </div>
                            
                        </div>
                        
                        <div class="create-box" >
                         <label class="col-md-2">地域</label>  
                         <input type="radio" name="area" value="hokkaido">北海道
                         <input type="radio" name="area" value="touhoku">東北
                         <input type="radio" name="area" value="kanto">関東
                         <input type="radio" name="area" value="chubu">中部
                         <input type="radio" name="area" value="kinki">近畿
                         <input type="radio" name="area" value="chugoku">中国
                         <input type="radio" name="area" value="sikoku">四国
                         <input type="radio" name="area" value="kyushu">九州
                         <input type="radio" name="area" value="okinawa">沖縄
                        </div>
                         
                        <div class="create-box" >
                        <label class="col-md-2">その他のタグ</label>
                        <div class="create-radio3">
                            <input type="radio" name="tag" value="mountain">山
                            </div>
                        <div class="create-radio3">
                            <input type="radio" name="tag" value="river">川
                            </div>
                        <div class="create-radio3">
                            <input type="radio" name="tag" value="sea">海
                            </div>
                        <div class="create-radio3">
                            <input type="radio" name="tag" value="city">街
                            </div>
                        <div class="create-radio3">
                            <input type="radio" name="tag" value="scenery">景色
                            </div>
                        </div>
                        
                        <div class="create-box" >
                        <label class="col-md-2">メイン画像</label>
                        
                            <input type="file" class="form-control-file" name="image">
                            
                         <label class="col-md-2">画像1</label>
                        
                            <input type="file" class="form-control-file" name="image1">
                         <label class="col-md-2">画像2</label>
                        
                            <input type="file" class="form-control-file" name="image2">
                         <label class="col-md-2">画像3</label>
                        
                            <input type="file" class="form-control-file" name="image3">
                            
                        </div>
                      
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
           </div>
           @endsection