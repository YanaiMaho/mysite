@extends('layouts.user')

@section('title', '新規投稿:ghibliwhere ジブリスポット検索・投稿サイ')

@section('content')
 
              
                <form action="{{ action('User\UserController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    
                    
                       <div class="contents">
                           <br/>
                           <h2>投稿する</h2>
    
                            <br/>
                            <br/>
                            <label class="col-md-2">名前</label>
                        <div class="create-box" >
                        
                        <input type="text" class="form-name" name="name" value="{{ old('name') }}">
                        </div>
                         <hr>
                        
                         <label class="col-md-2">住所</label>
                         <div class="create-box" >
                        
                         <textarea class="form-address" name="address" rows="3">{{ old('address') }}</textarea>
                        </div>
                        <hr>
                        
                         <label class="col-md-2">ホームページ</label>
                         <div class="create-box" >
                        
                         <textarea class="form-address" name="homepage" rows="3">{{ old('homepage') }}</textarea>
                        </div>
                        <hr>
                        
                        <label class="col-md-2">コメント</label>
                       <div class="create-box" >
                        
                        <textarea class="form-comment" name="comment" rows="30">{{ old('comment') }}</textarea>
                        </div>
                         <hr>
                        
                        
                       
                        
                        
                        <label class="col-md-2">作品タグ</label>
                         <div class="create-box">
                        
                            <div class="create-radio1">
                            <input type="radio" name="anime" value='となりのトトロ' {{ old('anime','となりのトトロ') == 'となりのトトロ' ? 'checked' : '' }}>
                            <label for="となりのトトロ">となりのトトロ</label>
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value='nausika' {{ old('anime','nausika') == 'nausika' ? 'checked' : '' }}>
                            <label for="nausika">風の谷のナウシカ</label>
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value='mononoke' {{ old('anime','mononoke') == 'mononoke' ? 'checked' : '' }}>
                            <label for="mononoke">もののけ姫</label>
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value='天空の城ラピュタ' {{ old('anime','天空の城ラピュタ') == '天空の城ラピュタ' ? 'checked' : '' }}>
                            <label for="天空の城ラピュタ">天空の城ラピュタ</label>
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value='魔女の宅急' {{ old('anime','魔女の宅急') == '魔女の宅急' ? 'checked' : '' }}>
                            <label for="魔女の宅急">魔女の宅急便</label>
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value='千と千尋の神隠し' {{ old('anime','千と千尋の神隠し') == '千と千尋の神隠し' ? 'checked' : '' }}>
                            <label for="千と千尋の神隠し">千と千尋の神隠し</label>
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value='ハウルの動く城' {{ old('anime','ハウルの動く城') == 'ハウルの動く城' ? 'checked' : '' }}>
                            <label for="ハウルの動く城">ハウルの動く城</label>
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value='崖の上のポニョ' {{ old('anime','崖の上のポニョ') == '崖の上のポニョ' ? 'checked' : '' }}>
                            <label for="崖の上のポニョ">崖の上のポニョ</label>
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="風立ちぬ" value='風立ちぬ' {{ old('anime','風立ちぬ') == '風立ちぬ' ? 'checked' : '' }}>
                            <label for="風立ちぬ">風立ちぬ</label>
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value='ゲド戦記' {{ old('anime','ゲド戦記') == 'ゲド戦記' ? 'checked' : '' }}>
                            <label for="ゲド戦記">ゲド戦記</label>
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value='思い出のマーニー' {{ old('anime','思い出のマーニー') == '思い出のマーニー' ? 'checked' : '' }}>
                            <label for="思い出のマーニー">思い出のマーニー</label>
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value='コクリコ坂から' {{ old('anime','コクリコ坂から') == 'コクリコ坂から' ? 'checked' : '' }}>
                            <label for="コクリコ坂から">コクリコ坂から</label>
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value='カリオストロの城' {{ old('anime','カリオストロの城') == 'カリオストロの城' ? 'checked' : '' }}>
                            <label for="カリオストロの城">カリオストロの城</label>
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value='紅の豚' {{ old('anime','紅の豚') == '紅の豚' ? 'checked' : '' }}>
                            <label for="紅の豚">紅の豚</label>
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value='耳を澄ませば' {{ old('anime','耳を澄ませば') == '耳を澄ませば' ? 'checked' : '' }}>
                            <label for="耳を澄ませば">耳を澄ませば</label>
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value='猫の恩返し' {{ old('anime','猫の恩返し') == '猫の恩返し' ? 'checked' : '' }}>
                            <label for="猫の恩返し">猫の恩返し</label>
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value='借りぐらしのアリエッティ' {{ old('anime','借りぐらしのアリエッティ') == '借りぐらしのアリエッティ' ? 'checked' : '' }}>
                            <label for="借りぐらしのアリエッティ">借りぐらしのアリエッティ</label>
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value='その他のアニメ' {{ old('anime','その他のアニメ') == 'その他のアニメ' ? 'checked' : '' }}>
                            <label for="その他のアニメ">その他のアニメ</label>
                            </div>
                            
                            
                        </div>
                        <hr>
                        
                        
                        <label class="col-md-2">地域</label>  
                        <div class="create-box" >
                         
                         
                            <div class="create-radio1">
                         <input type="radio" name="area" value='北海道' {{ old('area','北海道') == 'area' ? '北海道' : '' }}>
                            <label for="北海道">北海道</label>
                            </div>
                            
                            <div class="create-radio1">
                        <input type="radio" name="area" value='東北' {{ old('area','東北') == 'area' ? '東北' : '' }}>
                            <label for="東北">東北</label>
                            </div>
                            
                            <div class="create-radio1">
                        <input type="radio" name="area" value='北陸' {{ old('area','北陸') == 'area' ? '北陸' : '' }}>
                            <label for="北陸">北陸</label>
                            </div>
                            
                            <div class="create-radio1">
                        <input type="radio" name="area" value='甲信越' {{ old('area','甲信越') == 'area' ? '甲信越' : '' }}>
                            <label for="甲信越">甲信越</label>
                            </div>
                            
                            <div class="create-radio1">
                        <input type="radio" name="area" value='関東' {{ old('area','関東') == 'area' ? '関東' : '' }}>
                            <label for="関東">関東</label>
                            </div>
                            
                            <div class="create-radio1">
                        <input type="radio" name="area" value='東' {{ old('area','東') == 'area' ? '東' : '' }}>
                            <label for="東">東海</label>
                            </div>
                            
                            <div class="create-radio1">
                        <input type="radio" name="area" value='関西' {{ old('area','関西') == 'area' ? '関西' : '' }}>
                            <label for="関西">関西</label>
                            </div>
                            
                            <div class="create-radio1">
                        <input type="radio" name="area" value='四国' {{ old('area','四国') == 'area' ? '四国' : '' }}>
                            <label for="四国">四国</label>
                            </div>
                            
                            <div class="create-radio1">
                        <input type="radio" name="area" value='中国' {{ old('area','中国') == 'area' ? '中国' : '' }}>
                            <label for="中国">中国</label>
                            </div>
                            
                            <div class="create-radio1">
                        <input type="radio" name="area" value='九州' {{ old('area','九州') == 'area' ? '九州' : '' }}>
                            <label for="九州">九州</label>
                            </div>
                            
                            <div class="create-radio1">
                        <input type="radio" name="area" value='沖縄' {{ old('area','沖縄') == 'area' ? '沖縄' : '' }}>
                            <label for="沖縄"></label>
                            </div>
                        
                        </div>
                         
                         <hr>
                         
                         
                         <label class="col-md-2">その他のタグ</label>
                        <div class="create-box2" >
                        
                        <div class="create-radio1">
                            <input type="radio" name="tag" value='山' {{ old('tag','山') == 'tag' ? '山' : '' }}>
                            <label for="山">山</label>
                            </div>
                        <div class="create-radio1">
                            <input type="radio" name="tag" value='川' {{ old('tag','川') == 'tag' ? '川' : '' }}>
                            <label for="川">川</label>
                            </div>
                        <div class="create-radio1">
                           <input type="radio" name="tag" value='海' {{ old('tag','海') == 'tag' ? '海' : '' }}>
                            <label for="海">海</label>
                            </div>
                        <div class="create-radio1">
                            <input type="radio" name="tag" value='街' {{ old('tag','街') == 'tag' ? '街' : '' }}>
                            <label for="街">街</label>
                            </div>
                        <div class="create-radio1">
                          <input type="radio" name="tag" value='景色' {{ old('tag','景色') == 'tag' ? '景色' : '' }}>
                            <label for="景色">景色</label>
                            </div>
                        <div class="create-radio1">
                          <input type="radio" name="tag" value='建物' {{ old('tag','建物') == 'tag' ? '建物' : '' }}>
                            <label for="建物">建物</label>
                            </div>
                        </div>
                        
                        <hr>
                        
                        <div class="create-box" >
                       <ul class="create-image">
                           <li>
                        <label class="col-md-2">メイン画像</label>
                        
                            <input type="file" class="form-control-file" name="image">
                            </li>
                            <li>
                            
                         <label class="col-md-2">サブ画像1</label>
                        
                            <input type="file" class="form-control-file" name="image1">
                            </li>
                            <li>
                         <label class="col-md-2">サブ画像2</label>
                        
                            <input type="file" class="form-control-file" name="image2">
                            </li>
                            <li>
                         <label class="col-md-2">サブ画像3</label>
                        
                            <input type="file" class="form-control-file" name="image3">
                            </li>
                            
                            </ul>
                        </div>
                        
                        <hr>
                      
                    {{ csrf_field() }}
                    <input type="submit" class="btn" value="更新">
                </form>
           </div>
           @endsection