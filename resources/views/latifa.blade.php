
<x-header/>
    <header>
        <div class="b">
        <a href="#" class="logo"> <img src="images/logo.png" alt="" width="120" height="100" srcset=""> </a>   
            
        </div>
        <nav class="nav">
            <a href="#services">{{__('home.Services')}}</a>
            <a href="#projects">{{__('home.Projects')}}</a>
            <a href="#contact">{{__('home.Contact us')}}</a>
            <div class="dropdown da">
                <button class="btn  dropdown-toggle dd" style="color:#cca159 " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-language"> </i> {{ Config::get('languages')[App::getLocale()] }}
                </button>
                <ul class="dropdown-menu"  aria-labelledby="dropdownMenuButton1">
                    
                    @foreach (Config::get('languages') as $lang => $language)
                        @if ($lang != App::getLocale())
                        <li><span class="nav"> <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a></span></li>
                        @endif
                    @endforeach
                </ul>
            </div>
    </header>


<section class="main">
        <div >
            <h2>{{__('home.Hello, I am ')}} <br> <span>{{__('home.Latifa clinics')}}  </span> </h2>
            <h3> {{__('home.This is where beauty begins')}} </h3>
            <a href="#projects" class="main-btn"> {{__('home.view my work')}} </a>
            <!-- <div class="social-icons" >
                <a href="#"> <i class="fa-brands fa-linkedin"> </i></a>
                <a href="#"><i class="fa-brands fa-github"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div> -->
        </div>
    </section>
    <section class="projects" id="services" >
        <h2 class="title" >{{__('home.Services')}}</h2>
        <div class="contant">
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat">{{__('home.Doctor\'s sessions')}}</p>
                    <strong class="project-title">
                        <span>{{__('home.Time')}} </span>
                        <a href="{{Route('Doctor')}}" class="more-details">{{__('home.More Details')}}</a>
                        
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7071.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat">{{__('home.Skin Care')}}</p>
                    <strong class="project-title">
                        <span>{{__('home.Time')}} </span>
                        <a href="{{Route('Skin')}}" class="more-details">{{__('home.More Details')}}</a>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7079.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat">{{__('home.Skin Care')}}</p>
                    <strong class="project-title">
                        <span>{{__('home.Time')}} </span>
                        <a href="" class="more-details">{{__('home.More Details')}}</a>
                    </strong>
                </div>
            </div>
        </div>
    </section>
    <section class="cards" id="projects" >
        <h2 class="title" >{{__('home.projects')}}</h2>
        <div class="contant">
            <div class="card1" >
                <div class="project-imag1">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="info" >
                    <h3>{{__('home.Let your beauty glow')}}</h3>
                   
                </div>
            </div>
            <div class="card1" >
                <div class="project-imag1">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="info" >
                    <h3>{{__('home.Let your beauty glow')}}</h3>
                   
                </div>
            </div>
            <div class="card1" >
                <div class="project-imag1">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="info" >
                    <h3>{{__('home.Let your beauty glow')}}</h3>
                   
                </div>
            </div>
            <div class="card1" >
                <div class="project-imag1">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="info" >
                    <h3>{{__('home.Let your beauty glow')}}</h3>
                   
                </div>
            </div>
            <div class="card1" >
                <div class="project-imag1">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="info" >
                    <h3>{{__('home.Let your beauty glow')}}</h3>
                   
                </div>
            </div>
           
            
           
        </div>
    </section>
   
    <section class="cards contact" id="contact">
        <h2 class="title" >{{__('home.Contact us')}}</h2>
        <div class="contant"> 
            <div class="card" >
                <div class="icon" >
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="info" >
                    <h3>{{__('home.phone')}}</h3>
                    <p> {{__('home.+962/7********')}}</p>
                </div>
            </div>  
            <div class="card" >
                <div class="icon" >
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="info" >
                    <h3>{{__('home.Email')}}</h3>
                    
                    <a href="mailto:inof@latifa.com">inof@latifa.com</a>
                </div>
            </div>
        </div>
    </section>


<x-footer/>