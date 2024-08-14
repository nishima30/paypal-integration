<div class="wrapper">
			<!--sidebar start-->
			<div class="sidebar">
				<div class="sidebar-menu">

                <a href="{{ route('home') }}" class="sidebar-brand" style="justify-content: space-around;" target="_blank">
            <span class="sidebar-nav-mini-hide">
                <strong>over55</strong> HOME
               </span>
               </a>

                    <div class="sidebar-user">
					<center class="profile">
						<img src="{{ asset('asset/images/right-image.png') }}" alt="">
						<div class="sidebar-user-name" style="width: 100%;text-align:center;">OVER55 MATURE DRIVING COURSE</div>
					</center>
                      </div>
					<li class="item">
						<a href="{{ route('dashboard.show') }}" class="menu-btn">
							<i class="fas fa-desktop"></i><span>Dashboard</span>
						</a>
					</li>
					
					<li class="item">
						<a href="{{ route('student-data') }}"  class="menu-btn">
                        <i class="fa-solid fa-graduation-cap"></i><span>Student Data</span>
						</a>
					</li>
                     
                    <li class="item">
						<a href="{{ route('admin.registration') }}"  class="menu-btn">
                        <i class="fa-solid fa-graduation-cap"></i><span>Registration Info</span>
						</a>
					</li>

                    <li class="item">
						<a href="{{ route('admin.table') }}"  class="menu-btn">
                        <i class="fa-solid fa-graduation-cap"></i><span>Course Contents</span>
						</a>
					</li>

                    <li class="item">
						<a href="{{ route('contact.show') }}"  class="menu-btn">
                        <i class="fa-solid fa-graduation-cap"></i><span>Contact Us</span>
						</a>
					</li>

					<li class="item">
						<a href="{{ route('payment.admin') }}"  class="menu-btn">
                        <i class="fa-solid fa-graduation-cap"></i><span>Pay For Course</span>
						</a>
					</li>
                   


				</div>
			</div>
			<!--sidebar end-->
			

<style>
	.sidebar-user {
    background: rgba(255, 255, 255, 0.1);
    padding-bottom: 30px;
    padding-left: 30px;
    padding-right: 30px;
    padding-top: 30px;
}
</style>