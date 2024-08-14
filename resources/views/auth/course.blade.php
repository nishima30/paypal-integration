@extends('layouts.app')

@section('content')

<script src= 
        "https://www.google.com/recaptcha/api.js" async defer> 
    </script> 
<div id="loader" class="loader"></div>
<div class="container">
            <h1 class="title">Registration Information</h1>
        <div class="main-section">    
                            <div class="form-section">    
                                <h3 class="login-title">Create Your Login</h3>
                                 <form class="registration-form"  action="{{route('auth.register') }}" method="post">
                                 @csrf
                                        <div class="form-input">
                                          <label>* First Name:</label>
                                          <input type="text"  name="fname">
                                          <span class = "text-danger">
                                            @error('fname')
                                                {{$message}}
                                            @enderror
                                            </span>
                                        </div>
                                        <div class="form-input">
                                          <label>Middle Initial:</label>
                                          <input type="text" id ="mname" name="mname">
                                       </div>  
                                        <div class="form-input">
                                          <label>* Last Name:</label>
                                          <input type="text"  name="lname">
                                          <span class = "text-danger">
                                            @error('lname')
                                                {{$message}}
                                            @enderror
                                            </span>
                                        </div>
                                         <div class="form-input email">
                                          <label>* Email:</label>
                                          <input type="text"  name="email"> <span class="moreinfo">More info</span>
                                          <span class = "text-danger">
                                          @error('email')
                                                {{$message}}
                                            @enderror
                                            </span>
                                        </div> 
                                        <div class="form-input numbers">
                                          <label>* Phone Number:</label>
                                          <input type="text" id ="Phone" name="number11" maxlength="3" pattern="\d{3}">
                                          <input type="text" id ="Phone11" name="number12" maxlength="4" pattern="\d{4}">
                                          <input type="text" id ="Phones" name="number13"  maxlength="4" pattern="\d{4}">
                                       </div>   

                                       <div class="form-input date">
                                          <label>* Date Of Birth:</label>
                                            <select id="date" name="date">
                                                  <option value="...">Day</option>
                                                  @foreach ($days as $day)
                                                    <option value="{{ $day }}">{{ $day }}</option>
                                                @endforeach
                                                  <!-- <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option> -->
                                            </select> 
                                            <select id="month" name="month">
                                                  <option value="...">Month</option>
                                                  @foreach ($months as $month)
                                                      <option value="{{ $month }}">{{ $month }}</option>
                                                  @endforeach
                                                  <!-- <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option> -->
                                            </select>
                                            <select id="years" name="years">
                                                  <option value="...">Year</option>
                                                  @foreach ($years as $year)
                                                      <option value="{{ $year }}">{{ $year }}</option>
                                                  @endforeach
                                                  <!-- <option value="1990">1990</option>
                                                  <option value="1992">1991</option>
                                                  <option value="1993">1992</option> -->
                                            </select>
                                       </div>
                                              <div class="border-line"></div>
                                       <div class="form-input license-state">
                                          <label>* Driver's License State:</label>
                                            <select id="license" name="licenseState">
                                                  <option value="...">...</option>
                                                  <option value="xyz">xyz</option>
                                                  <option value="xyz">xyz</option>
                                                  <option value="xyz">xyz</option>
                                            </select>
                                            <span class = "text-danger">
                                              @error('licenseState')
                                                {{$message}}
                                            @enderror
                                            </span>
                                            </div>
                                            

                                       <div class="form-input date licensenumber">
                                          <label>* Driver's License Number:</label>
                                          <input type="text" id ="licensenumber" name="licensenumber">
                                          <p>Do not include any spaces or dashes</p>
                                          <span class = "text-danger">
                                              @error('licensenumber')
                                                {{$message}}
                                            @enderror
                                            </span>
                                       </div>  
                                       <div class="border-line"></div>
                                         <div class="form-input date licensenumber user">
                                          <label>* User Name:   </label>
                                          <!-- <input type="text" id ="licensenumber" name="licensenumber"> -->
                                          <input type="text" id="username" name="username">
                                          <p>User Name must be at least 8 characters, no more than 36 characters.</p>
                                          <span class = "text-danger">
                                          @error('username')
                                                {{$message}}
                                            @enderror
                                            </span>
                                        </div>

                                       <div class="form-input date licensenumber user password">
                                          <label>* Password:  </label>
                                          <!-- <input type="password" id ="licensenumber" name="licensenumber"> -->
                                          <input type="password" id="password" name="password">
                                          <p>Password must be at least 6 characters,
                                              no more than 16 characters.</p>
                                              <span class = "text-danger">
                                              @error('password')
                                                {{$message}}
                                            @enderror
                                            </span>
                                       </div>

                                       <div class="form-input date licensenumber user password confirm">
                                          <label>* Confirm password: </label>
                                          <!-- <input type="text" id ="licensenumber" name="licensenumber"> -->
                                          <input type="password" id="password_confirmation" name="password_confirmation">
                                          <span class = "text-danger">
                                          @error('password_confirmation')
                                                {{$message}}
                                            @enderror
                                            </span>
                                       </div>

                                       <div class="border-line"></div>


                                       <div class="form-input address">  <label>* Address</label> 
                                        <input type="text"  name="address">  </div> 
                                        <div class="form-input city">  
                                            <label>* City</label>  
                                            <input type="text"  name="city"> 
                                        </div> 
                                       <div class="form-input states">  
                                        <label>* State</label> 
                                         <select id="statse" name="states">
                                                 <option value="...">...</option>
                                                  <option value="xyz">xyz</option>
                                                  <option value="xyz">xyz</option>
                                                  <option value="xyz">xyz</option>
                                            </select> 
                                        </div>
                                       <div class="form-input zipcode">  
                                        <label>* Zip Code</label>  
                                        <input type="text"  name="zipcode"> 
                                      </div>   

                                      <div class="border-line"></div>


                                       <div class="form-input find-us">                                         
                                         <label>How did you find out<br> about us?</label> <select id="find" name="find">
                                                 <option value="...">...</option>
                                                  <option value="referral from someone">referral from someone</option>
                                                  <option value="Referral from an Insurance company">Referral from an Insurance company</option>
                                                  <option value="Google">Google</option>
                                                  <option value="Bing">Bing</option>
                                                  <option value="DMV website">DMV website</option>
                                                  <option value="Radio advertisement">Radio advertisement</option>
                                                  <option value="TV advertisement">TV advertisement</option>
                                                  <option value="Newspaper or magazine article">Newspaper or magazine article</option>
                                                  <option value="TESTIMONIALS PAGE">TESTIMONIALS PAGE</option>
                                            </select> 
                                            <p>How did you find our website?</p>
                                        </div>
                                        <div class="form-input captcha">
                                        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                             <!-- <img src="{{ asset('asset/images/captcha.png') }}" /> -->
                                             
                                             <div class="g-recaptcha" data-name="g-token" data-sitekey="6LfAb5gpAAAAAPO3Sa2gEvH3p3xARh_SlyeHymm4">
                                             
                                             </div>
                                             <span class="text-success">{{ session('success_message') }}</span>
                                             <span class="text-danger">{{ $errors->first('g-token') }}</span>
                                            
                                          </div>
                                      <div class="btn"> <img src="{{ asset('asset/images/submiticon.png') }}" />
                                      <input id="secure-login-btn" class="secure-login-btn" type="submit" value="SIGN UP">
                                      <!-- <button type="submit">SIGN UP</button> -->
                                      </div>
                                      <img class="mirrorimage" src="{{ asset('asset/images/btnmerror.png') }}" />
                                </form>
                            </div>
                  <div class="order-section">
                    <div class="order-summary-section">
                        <div class="order">
                            <p class="order-heading">Order Summary</p>
                            <p class="secure-payment">SECURE ONLINE PAYMENT <img class="cartimg" src="{{ asset('asset/images/cartimg.png') }}" /></p>
                        </div>  
                        <div class="course">
                            <p class="course-name">Course Fee - Mature Driver</p>
                            <p class="course-price">$17.95</p>
                        </div> 
                         <div class="course">
                            <p class="course-name">Regular Mail Delivery</p>
                            <p class="course-price free">FREE</p>
                        </div>  

                        <div class="shipping-text">
                            <p class="shipping">Expedited shipping is available to purchase at the end of the course.</p>
                        </div>

                         <div class="course">
                            <p class="course-price"><img class="totalcartimg" src="{{ asset('asset/images/cartimg.png') }}" /> Total</p>
                            <p class="course-price">$17.95</p>
                        </div> 
                    </div>
                    <img class="privacy" src="{{ asset('asset/images/img_privacyguarantee 1.png') }}" />
                </div>
           </div>
         </div> 





         <script>
    
    $(document).ready(function () {
        
        var jsonPath = "{{ asset('json/states_hash.json') }}";

        var selectBox = $('#statse');
        var selectBox11 = $('#license');

        selectBox.empty();
        selectBox11.empty();

        
        selectBox.append($('<option>', {
            value: '...',
            text: '...'
        }));

        selectBox11.append($('<option>', {
            value: '...',
            text: '...'
        }));

        
        $.getJSON(jsonPath, function (data) {
         $.each(data, function (key, value) {
                selectBox.append($('<option>', {
                    value: key,
                    text: value
                }));
                selectBox11.append($('<option>', {
                    value: key,
                    text: key
                }));
            });
        });
    });
</script>


<style>
          
  .secure-login-btn:hover {
      cursor: pointer; 
  }


  .loader {
      border: 20px solid #f3f3f3; /* Light grey */
      border-top: 20px solid #3498db; /* Blue */
      border-radius: 50%;
      width: 100px;
      height: 100px;
      animation: spin 1s linear infinite;
      position: fixed;
      top: 40%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 9999; /* Ensure the loader appears above other elements */
      display: none; /* Hide loader by default */
  }

  @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
  }

  </style>


  <script>
  $(document).ready(function () {
      $('#secure-login-btn').click(function () {
          $('#loader').show();
      });
  });

  </script>


         
         
        



@endsection 