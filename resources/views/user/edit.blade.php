@extends('layouts.user')
@section('title', '投稿の編集:ghibliwhere ジブリスポット検索・投稿サイト')

@section('content')

                <form action="{{ action('User\UserController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    
                                           <div class="contents">
                                               <br>
                                               
                                               <h2>投稿を編集</h2>
                               <hr>
                        
                        
                         
                            <br/>
                            <label class="col-md-2">名前</label>
                        <div class="create-box" >
                        
                        <input type="text" class="form-name" name="name" value="{{ $articles_form->name }}">
                        </div>
                         <hr>
                         
                         
                         <label class="col-md-2">住所</label>
                         <div class="create-box" >
                        
                         <textarea class="form-address" name="address" rows="3">{{ $articles_form->address}}</textarea>
                        </div>
                        <hr>
                        
                         <label class="col-md-2">ホームページ</label>
                         <div class="create-box" >
                        
                         <textarea class="form-address" name="homepage" rows="3">{{ $articles_form->homepage }}</textarea>
                        </div>
                        <hr>
                        
                        <label class="col-md-2">コメント</label>
                       <div class="create-box" >
                        
                        <textarea class="form-comment" name="comment" rows="30" col="100">{{ $articles_form->comment}}</textarea>
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
                            <input type="radio" name="anime" value='風立ちぬ' {{ old('anime','風立ちぬ') == '風立ちぬ' ? 'checked' : '' }}>
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
                            <input type="radio" name="anime" value='その他' {{ old('anime','その他') == 'その他' ? 'checked' : '' }}>
                            <label for="その他">その他</label>
                            </div>
                            
                            
                        </div>
                       
                        
                        
                        
                            
                            
                            
                        <hr>
                        
                         
                        <label class="col-md-2">地域</label>  
                        <div class="create-box" >
                         
                         
                                 
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
                        
                        
                         <div class="create-box3" >
                        <label class="col-md-2">メイン画像</label>
                        <br>
                        <ul>
                        <li class="create-box3-li">
                            
                        @if ($art->image)
                        <img src="{{ $art->image }}" width="200" height="200">
                        @endif
                        </li>
                        
                         <li class="create-box3-li"><input type="file" class="form-control-file" name="image"></li>
                        <li class="create-box3-li"><label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label></li>
                        </ul>
                        </div>
                        
                       
                         <div class="create-box3" >
                        <label class="col-md-2">画像1</label>
                        <br>
                        <ul>
                        <li class="create-box3-li">
                            
                        @if ($art->image1)
                        <img src="{{ $art->image1 }}" width="200" height="200">
                        @endif
                        </li>
                        
                         <li class="create-box3-li"><input type="file" class="form-control-file" name="image1"></li>
                        <li class="create-box3-li"><label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label></li>
                        </ul>
                        </div>
                        
                        
                        <div class="create-box3" >
                        <label class="col-md-2">画像2</label>
                        <br>
                        <ul>
                        <li class="create-box3-li">
                        @if ($art->image2)
                        <img src="{{ $art->image2 }}" width="200" height="200">
                        @endif
                        </li>
                        
                         <li class="create-box3-li"><input type="file" class="form-control-file" name="image2"></li>
                        <li class="create-box3-li"><label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label></li>
                        </ul>
                        </div>
                        
                        
                        <div class="create-box3" >
                        <label class="col-md-2">画像3</label>
                        <br>
                        <ul>
                        <li class="create-box3-li">
                            
                        @if ($art->image3)
                        <img src="{{ $art->image3 }}" width="200" height="200">
                        @endif
                        </li>
                        
                         <li class="create-box3-li"><input type="file" class="form-control-file" name="image3"></li>
                        <li class="create-box3-li"><label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label></li>
                        </ul>
                        </div>
                        
                        <hr>
                                
                       
                        
                        
                        
                            
                        
                        
                        
                           
                            
                         
                        <input type="hidden" name="id" value="{{ $articles_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        
                  
                        
                      
                </form>
               
            
@endsection