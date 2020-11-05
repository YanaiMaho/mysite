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
                            <input type="radio" name="anime" value='mononoke' {{ old('anime','mononoke') == 'mononoke' ? 'checked' : '' }}>
                            <label for="mononoke">もののけ姫</label>
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value='mononoke' {{ old('anime','mononoke') == 'mononoke' ? 'checked' : '' }}>
                            <label for="mononoke">もののけ姫</label>
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value='totoro' {{ old('anime','totoro') == 'totoro' ? 'checked' : '' }}>
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
                            <input type="radio" name="anime" value='mononoke' {{ old('anime','mononoke') == 'mononoke' ? 'checked' : '' }}>
                            <label for="mononoke">もののけ姫</label>
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value='mononoke' {{ old('anime','mononoke') == 'mononoke' ? 'checked' : '' }}>
                            <label for="mononoke">もののけ姫</label>
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value='totoro' {{ old('anime','totoro') == 'totoro' ? 'checked' : '' }}>
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
                            <input type="radio" name="anime" value='mononoke' {{ old('anime','mononoke') == 'mononoke' ? 'checked' : '' }}>
                            <label for="mononoke">もののけ姫</label>
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value='mononoke' {{ old('anime','mononoke') == 'mononoke' ? 'checked' : '' }}>
                            <label for="mononoke">もののけ姫</label>
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value='mononoke' {{ old('anime','mononoke') == 'mononoke' ? 'checked' : '' }}>
                            <label for="mononoke">もののけ姫</label>
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value='mononoke' {{ old('anime','mononoke') == 'mononoke' ? 'checked' : '' }}>
                            <label for="mononoke">もののけ姫</label>
                            </div>
                            
                            
                        </div>
                       
                        
                        
                        
                            
                            
                            
                        <hr>
                        
                         
                        <label class="col-md-2">地域</label>  
                        <div class="create-box" >
                         
                         
                            <div class="create-radio1">
                         <input type="radio" name="area" value='hokkaido' {{ old('area','hokkaido') == 'area' ? 'hokkaido' : '' }}>
                            <label for="hokkaido">北海道</label>
                            </div>
                            
                            <div class="create-radio1">
                        <input type="radio" name="area" value='tohoku' {{ old('area','tohoku') == 'area' ? 'tohoku' : '' }}>
                            <label for="tohoku">東北</label>
                            </div>
                            
                            <div class="create-radio1">
                        <input type="radio" name="area" value='hokuriku' {{ old('area','hokuriku') == 'area' ? 'hokuriku' : '' }}>
                            <label for="hokuriku">北陸</label>
                            </div>
                            
                            <div class="create-radio1">
                        <input type="radio" name="area" value='koushinetsu' {{ old('area','koushinetsu') == 'area' ? 'koushinetsu' : '' }}>
                            <label for="koushinetsu">甲信越</label>
                            </div>
                            
                            <div class="create-radio1">
                        <input type="radio" name="area" value='kantou' {{ old('area','kantou') == 'area' ? 'kantou' : '' }}>
                            <label for="kantou">関東</label>
                            </div>
                        
                        </div>
                         
                         <hr>
                         
                         
                         <label class="col-md-2">その他のタグ</label>
                        <div class="create-box2" >
                        
                        <div class="create-radio1">
                            <input type="radio" name="tag" value='mountain' {{ old('tag','mountain') == 'tag' ? 'mountain' : '' }}>
                            <label for="mountain">山</label>
                            </div>
                        <div class="create-radio1">
                            <input type="radio" name="tag" value='river' {{ old('tag','river') == 'tag' ? 'river' : '' }}>
                            <label for="river">川</label>
                            </div>
                        <div class="create-radio1">
                           <input type="radio" name="tag" value='sea' {{ old('tag','sea') == 'tag' ? 'sea' : '' }}>
                            <label for="sea">海</label>
                            </div>
                        <div class="create-radio1">
                            <input type="radio" name="tag" value='city' {{ old('tag','city') == 'tag' ? 'city' : '' }}>
                            <label for="city">山</label>
                            </div>
                        <div class="create-radio1">
                          <input type="radio" name="tag" value='scenery' {{ old('tag','scenery') == 'tag' ? 'scenery' : '' }}>
                            <label for="scenery">景色</label>
                            </div>
                        <div class="create-radio1">
                          <input type="radio" name="tag" value='building' {{ old('tag','building') == 'tag' ? 'building' : '' }}>
                            <label for="scenery">建物</label>
                            </div>
                        </div>
                        
                        <hr>
                        
                        
                         <div class="create-box3" >
                        <label class="col-md-2">メイン画像</label>
                        <br>
                        <ul>
                        <li class="create-box3-li">
                            
                        <img src="{{ $art->image ?? '' }}" width="200" height="200">
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
                            
                        <img src="{{ $art->image1 ?? '' }}" width="200" height="200">
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
                            
                        <img src="{{ $art->image2 ?? '' }}" width="200" height="200">
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
                            
                        <img src="{{ $art->image3 ?? '' }}" width="200" height="200">
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