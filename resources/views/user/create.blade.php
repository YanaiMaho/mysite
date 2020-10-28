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