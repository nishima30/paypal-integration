@extends('layouts.app111')

@section('content')




<div class="container">
          <h1 class="title">Student Dashboard</h1>
          @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @elseif(Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @endif
          
                <div class="student-dashboard-section">
                 <div class="contact">       
                    <p class="refund-policy">The Student Page of {{ Auth::user()->user_fname ." ".Auth::user()->user_lname }}</p>                           
                    <p class="privacy-policy">You can go to our course or you can make changes if you need to. Whatever you want to do, it's up to you.</p>   
                    <p class="privacy-policy">Take a look around and see what's up before you start.</p> 
                    <p class="privacy-policy">You will be glad that you did ...</p> 
                    <a class="get-certificate" href="{{route('get-certificate') }}" >Get class completion certificate</a>
                 </div>

                 <div class="dashboard-tabs">
                    <a href="{{route('payment') }}"> Go to My Course</a>
                    <a href="{{route('admin.table') }}"> My Table of Contents</a>
                    <a href="{{route('admin.registration') }}"> My Registration Information</a>
                 </div>   
               </div>
         </div>   
     </div>



    @endsection 