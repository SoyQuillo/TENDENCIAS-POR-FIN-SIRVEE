 <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #E5E1DA;">
     <!-- Left navbar links -->
     <ul class="navbar-nav">
         <li class="nav-item">
             <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
         </li>
     </ul>
     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">
         <!-- Navbar Search -->
         <div class="user-panel d-flex">
             <div class="image">
                 <a href="#" class="" style="color: #222831; text-decoration:none;"> <strong>{{ Auth::user()->name }}</strong>
                     <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" style="color: #222831">
                         <svg style="height:30px; padding-left:20px " viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                             <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                             <g id="SVGRepo_iconCarrier">
                                 <path d="M18 8L22 12M22 12L18 16M22 12H9M15 4.20404C13.7252 3.43827 12.2452 3 10.6667 3C5.8802 3 2 7.02944 2 12C2 16.9706 5.8802 21 10.6667 21C12.2452 21 13.7252 20.5617 15 19.796" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                             </g>
                         </svg>
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
                 </a>
             </div>
             <div class="info"></div>
         </div>
     </ul>
 </nav>
 <!-- /.navbar -->