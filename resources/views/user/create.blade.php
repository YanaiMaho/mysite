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
                        <input type="text" class="form-control" name="title" value="">
                        </div>
                        
                        
                       <div class="create-box" >
                        <label class="col-md-2">コメント</label>
                        <textarea class="form-control" name="body" rows="10"></textarea>
                        </div>
                        
                        
                        <div class="create-box" >
                         <label class="col-md-2">住所</label>
                         <textarea class="form-control" name="body" rows="3"></textarea>
                        </div>
                        
                         <div class="create-box">
                        <label class="col-md-2">作品タグ</label>
                            <div class="create-radio1">
                            <input type="radio" name="trigger" value="facebook">となりのトトロ
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="trigger" value="twitter">風の谷のナウシカ
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="trigger" value="hatebu">もののけ姫
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="trigger" value="syoukai">天空の城ラピュタ
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="trigger" value="syoukai">魔女の宅急便
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="trigger" value="syoukai">紅の豚
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="trigger" value="syoukai">カリオストロの城
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="trigger" value="syoukai">千と千尋の神隠し
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="trigger" value="syoukai">ハウルの動く城
                            </div>
                            <div class="create-radio1">
                            <input type="radio" name="trigger" value="syoukai">耳を澄ませば
                            </div>
                            
                        </div>
                        
                        <div class="create-box" >
                         <label class="col-md-2">地域</label>  
                         <input type="radio" name="trigger" value="syoukai">北海道
                         <input type="radio" name="trigger" value="syoukai">東北
                         <input type="radio" name="trigger" value="syoukai">関東
                         <input type="radio" name="trigger" value="syoukai">中部
                         <input type="radio" name="trigger" value="syoukai">近畿
                         <input type="radio" name="trigger" value="syoukai">中国
                         <input type="radio" name="trigger" value="syoukai">四国
                         <input type="radio" name="trigger" value="syoukai">九州
                         <input type="radio" name="trigger" value="syoukai">沖縄
                        </div>
                         
                        <div class="create-box" >
                        <label class="col-md-2">その他のタグ</label>
                        <div class="create-radio3">
                            <input type="radio" name="trigger" value="syoukai">山
                            </div>
                        <div class="create-radio3">
                            <input type="radio" name="trigger" value="syoukai">川
                            </div>
                        <div class="create-radio3">
                            <input type="radio" name="trigger" value="syoukai">海
                            </div>
                        <div class="create-radio3">
                            <input type="radio" name="trigger" value="syoukai">街
                            </div>
                        <div class="create-radio3">
                            <input type="radio" name="trigger" value="syoukai">景色
                            </div>
                        </div>
                        
                        <div class="create-box" >
                       
                            
                        
                   
                        <label class="col-md-2">メイン画像</label>
                        
                            <input type="file" class="form-control-file" name="image">
                            
                         <label class="col-md-2">画像1</label>
                        
                            <input type="file" class="form-control-file" name="image">
                         <label class="col-md-2">画像2</label>
                        
                            <input type="file" class="form-control-file" name="image">
                         <label class="col-md-2">画像3</label>
                        
                            <input type="file" class="form-control-file" name="image">
                            
                        </div>
                      
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
           </div>
           @endsection