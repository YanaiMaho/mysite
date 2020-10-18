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
                         <h2>- - - - - - - - - - - - - - - - - - - - - -    投稿を編集   - - - - - - - - - - - - - - - - - - - - - -</h2>
                        
                        <div class="create-box" >
                        <label class="col-md-2">名前</label>
                        <input type="text" class="form-control" name="name" value="{{ $articles_form->name }}">
                        </div>
                        
                        
                       <div class="create-box" >
                        <label class="col-md-2">コメント</label>
                        <textarea class="form-control" name="comment" rows="10">{{ $articles_form->comment }}</textarea>
                        </div>
                        
                        
                        <div class="create-box" >
                         <label class="col-md-2">住所</label>
                         <textarea class="form-control" name="address" rows="3">{{ $articles_form->address }}</textarea>
                        </div>
                        
                        
                        
                         <div class="create-box">
                        <label class="col-md-2">作品タグ</label>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value='totoro' {{ old('anime','totoro') == 'totoro' ? 'checked' : '' }}>
                            <label for="totoro">となりのトトロ</label>
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value='nausika' {{ old('anime','nausika') == 'nausika' ? 'checked' : '' }}>
                            <label for="nausika">風の谷のナウシカ</label>
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="anime" value='mononoke' {{ old('anime','mononoke') == 'mononoke' ? 'checked' : '' }}>
                            <label for="mononoke">もののけ姫</label>
                            </div>
                            
                            
                        </div>
                        
                        <div class="create-box" >
                         <label class="col-md-2">地域</label>  
                         
                         <input type="radio" name="area" value='hokkaido' {{ old('area','hokkaido') == 'area' ? 'hokkaido' : '' }}>
                            <label for="hokkaido">北海道</label>
                        <input type="radio" name="area" value='tohoku' {{ old('area','tohoku') == 'area' ? 'tohoku' : '' }}>
                            <label for="tohoku">東北</label>
                        <input type="radio" name="area" value='kanto' {{ old('area','kanto') == 'area' ? 'kanto' : '' }}>
                            <label for="kanto">関東</label>
                        
                        </div>
                         
                        <div class="create-box" >
                        <label class="col-md-2">その他のタグ</label>
                        <div class="create-radio3">
                            <input type="radio" name="tag" value='mountain' {{ old('tag','mountain') == 'tag' ? 'mountain' : '' }}>
                            <label for="mountain">山</label>
                            </div>
                        <div class="create-radio3">
                            <input type="radio" name="tag" value='river' {{ old('tag','river') == 'tag' ? 'river' : '' }}>
                            <label for="river">川</label>
                            </div>
                        <div class="create-radio3">
                           <input type="radio" name="tag" value='sea' {{ old('tag','sea') == 'tag' ? 'sea' : '' }}>
                            <label for="sea">海</label>
                            </div>
                        <div class="create-radio3">
                            <input type="radio" name="tag" value='city' {{ old('tag','city') == 'tag' ? 'city' : '' }}>
                            <label for="city">山</label>
                            </div>
                        <div class="create-radio3">
                          <input type="radio" name="tag" value='scenery' {{ old('tag','scenery') == 'tag' ? 'scenery' : '' }}>
                            <label for="scenery">景色</label>
                            </div>
                        </div>
                        
                        <div class="create-box" >
                        <label class="col-md-2">メイン画像</label>
                        <input type="file" class="form-control-file" name="image">
                        設定中: {{ $articles_form->image}}
                        <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                        </div>
                                    
                                
                       <div class="create-box" >
                        <label class="col-md-2">画像1</label>
                        <input type="file" class="form-control-file" name="image1">
                        設定中: {{ $articles_form->image1}}
                        <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                        </div>
                        
                        
                        <div class="create-box" >
                        <label class="col-md-2">画像2</label>
                        <input type="file" class="form-control-file" name="image2">
                        設定中: {{ $articles_form->image2}}
                        <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                        </div>
                            
                        
                        
                        <div class="create-box" >
                        <label class="col-md-2">画像3</label>
                        <input type="file" class="form-control-file" name="image3">
                        設定中: {{ $articles_form->image3}}
                        <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                        </div>
                           
                            
                         
                        <input type="hidden" name="id" value="{{ $articles_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        
                  
                        
                      
                </form>
               
            
@endsection