@extends('layouts.app111')

@section('content')

<div class="container">
          <h1 class="title">Student Registartion Information</h1>
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
                    <p class="refund-policy">Your Personal Information <a class="edit" href="{{route('register.edit') }}">(edit)</a></p>
                    <div class="student-information">                           
                      <div class="student-regis-info">
                        <h4>Your email:</h4> 
                        <span>{{ $student->email }}</span>    
                      </div>   
                      <div class="student-regis-info">
                        <h4>Your name:</h4> 
                        <span>{{ $student->user_fname ." ".$student->user_lname }}</span>
                      </div> 
                      <div class="student-regis-info">         
                        <h4>Your mailing address:</h4> 
                        <span>{{ $student->user_address ." ".$student->user_city." ".$student->user_state." ".$student->user_zipcode }}</span>
                        <!-- <span>xyz sdvsdvsdb, GA, 15555</span> -->
                      </div> 
                      <div class="student-regis-info">
                        <h4>Your phone:</h4> 
                        <span>{{ $student->user_phone }}</span>
                      </div> 
                      <div class="student-regis-info">
                        <h4>Your driver's license:</h4> 
                        <span>{{ $student->license_number }}</span>  
                      </div>
                    </div>
                 </div>
                 <div class="dashboard-tabs">
                    <a href="#"> Exit The Course</a>
                    <a href="{{route('contact.view') }}"> Contact Us</a>
                    <a href="{{route('dashboard.show') }}"> Student Home</a>
                 </div>   
               </div>
</div>   


@endsection 