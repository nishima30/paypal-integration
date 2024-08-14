@extends('layouts.app111')

@section('content')



        <div class="container payment11">
          <h1 class="title">Payment Gateway</h1>
          @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @php
                Session::forget('success');
                @endphp
            @elseif(Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @endif
                <div class="student-dashboard-section">
                  <div class="payment-section">
                    <div class="payments">
                     <div class="paypal-payment">
                     <h4>Paypal Payment</h4>
                         <p>We accept secure Paypal payments. To pay for course click button "Pay Now" below. You will be forwarded to paypal secure payment page where you will be able to complete payment. After payment you will receive access to course content.</p>
                          <form method="post" action="{{route('paypal') }}">
                          @csrf
                            <div class="paypal-payment-btn">
                                <input type="hidden" name="price" value="17.95">
                                <input type="hidden" name="product_name" value="Mature Driver">
                                <input type="hidden" name="quantity" value="1">
                        
                                <input type="submit" value="Pay Now">
                           </div>
                         </form>
                         
                     </div>
                   </div>
                   <div class="payments">
                      <div class="paypal-payment">
                        <h4>Credit Card Payment</h4>
                         <p>We accept secure credit card payments. To pay for course click button "Pay with card" below. You will be forwarded to paypal secure payment page where you will be able to complete payment. After payment you will receive access to course content.</p>
                          <form>
                            <div class="paypal-payment-btn">
                           
                                  <!-- <input id="pay-card" type="submit" value="Pay With Card"> -->
                              <a href = "{{ route('pay.card') }}"><button id="pay-card" type="button">Pay With Card</button></a>
                              </div>
                         </form>
                     </div>
                   </div>
                   <div class="payments">
                      <div class="paypal-payment">
                        <h4>Other Payment</h4>
                         <p>If you want to pay in some other way, you can very easily. Just call us at 800-574-5643 and we will give you your own access code to continue without waiting. We will work out the payment later. Thanks.</p>
                         <form>
                          <div class="payment-input">
                                <label>Access Code</label>
                                <input type="text" name="token">
                                <input type="submit" value="Confirm">
                         </div>
                         </form>
                     </div>
                   </div>
                 </div>
                 <div class="dashboard-tabs payment">
                    <a href="{{ route('auth.logout') }}"> Exit The Course</a>
                    <a href="{{route('contact.show') }}"> Contact Us</a>
                    <a href="{{ route('dashboard.show') }}"> Student Home</a>
                 </div>   
               </div>
         </div> 
</div>  
    


    <style>
      .dashboard-tabs.payment a {
    width: 130px;
    margin-top: 20px;
   }

   /* .container.payment11 {
    width: 80%;
     } */

     .payment-section {
    margin-top: 20px;
    }


    </style>


   
@endsection 