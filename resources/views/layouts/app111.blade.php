@include('partials.header111')

@include('partials.sidebar')

<div class="main-page-section">
@yield('content') 
</div>

<!-- <script src="{{ asset('asset/js/custom.js') }}"></script> -->

<style>





.sidebar {
    width: 18%;
    float: left; 
    background-color: #f2f2f2; 
   
}


/* Header11 */
.header-section {
    width: 82%;
    background-color: #333;
    color: #fff; 
    padding: 20px;
    float: right;
    background-color: unset;
}

/* Main content */
.main-page-section {
    width: 82%;
    float: right; 
    padding: 20px; 
}

.footer-section{
    width: 82%;
    float: right;
}

.footer-section {
    clear: both; 
}

h1.title {
   padding-bottom: 20px;
}

.contact {
    padding-top: 15px;
}

p.refund-policy {
    padding-bottom: 15px;
}

.dashboard-tabs {
    padding-top: 15px;
}

.student-regis-info {
    padding-bottom: 20px;
}

h3.about-title {
    padding-bottom: 15px;
    padding-top :15px;
}



@media(max-width:992px){
	.sidebar {
    width: 40%; 
}
.header-section {
    width: 60%;
}
.main-page-section {
   width: 60%;
}
.footer-section{
   width: 60%;
}
}
</style>


@include('partials.footer')