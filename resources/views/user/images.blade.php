@extends('layouts.user')
@section('title', '写真から探す')

@section('content')
    <div class="container">
        
         
        
           
           
       
        
                    <table class="table table-dark">
                        <tbody>
                            @foreach($posts as $art)
                                
                                    <img src="{{ $art->image }}">
                                    <img src="{{ $art->image1 }}">
                                    <img src="{{ $art->image2 }}">
                                    <img src="{{ $art->image3 }}">
                                    
                            @endforeach
                        </tbody>
                    </table>
                </div>
    
@endsection