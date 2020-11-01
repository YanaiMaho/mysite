@extends('layouts.user')
@section('title', 'ghibliwhere ジブリスポット検索・投稿サイト')

@section('content')
    <div class="container">
       
       
       <br/>  <br/>  <br/>   
       
       
       
                       <h3>{{ $articles_form->name }}</h3>
            
            <br/>

            <p class="show-p">
            <a href="gazou1.jpg" data-lightbox="group" ><img src="{{ $articles_form->image ?? '' }}" class="show-image"></a>
            </p>
            <br>
            <p class="show-p">
            <a href="gazou1.jpg" data-lightbox="group"><img src="{{ $articles_form->image1 ?? '' }}" class="show-subimage"></a>
            <a href="gazou1.jpg" data-lightbox="group"><img src="{{ $articles_form->image3 ?? '' }}" class="show-subimage"></a>
            <a href="gazou1.jpg" data-lightbox="group"><img src="{{ $articles_form->image3 ?? '' }}" class="show-subimage"></a>
             </p>
             <br>
    
 
                      <table border="" class="show-table">
                        <tr class="tr1">
                       <td>
                        名称
                       </td>
                       <td class="td-content">
                       {{ $articles_form->name }}
                       </td>
                       </tr>
                       
                       <tr class="tr2">
                       <td>
                       コメント
                        </td>
                        <td class="td-content">
                        {{ $articles_form->comment }}
                       </td>
                       </tr>
                      
                      
                        <tr class="tr3">
                         <td>
                         住所
                         </td>
                         <td class="td-content">
                        {{ $articles_form->address }}
                         </td>
                        </tr>
                        
                       
                        <tr class="tr1">
                       
                        <td>ホームページ</td>
                         <td class="td-content">{{ $articles_form->homepage }}</td>
                
                        </tr>
                        
                       <tr class="tr1">
                        <td>関連アニメ</td>
                        <td class="td-content">{{ $articles_form->anime }}</td>
                        </tr>
                        
                        <tr class="tr1">
                        <td>タグ</td>
                        <td class="td-content">{{ $articles_form->tag}}</td>
                        </tr>
                        
                         <tr class="tr1">
                        <td>投稿者</td>
                        <td class="td-content">{{ $articles_form->user_name}}</td>
                        </tr>
                        
                        
                      
                        </table>
                        
                        
                        <br><br><br>
                        <div>
                        <img src="/images/footer.PNG" class="footer-image">
                        </div>
                        
  
        
         
             
    
@endsection