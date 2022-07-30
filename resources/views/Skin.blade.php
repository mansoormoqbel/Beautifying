
<x-header/>
    <style>
        #projects{
            background-color: #823257;
            
        }
        section{
            padding: 50px 100px;
        }

    </style>
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
                 {{ Config::get('languages')[App::getLocale()] }}
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
    <section></section>


   
    <section class="projects" id="services" >
        <h2 class="title" >{{__('home.Doctor\'s sessions')}}</h2>
        <div class="contant">
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat">{{__('home.Filler (sculpting, lips, cheeks, Texas)')}}</p>
                    <strong class="project-title">
                        <span>{{__('home.Time')}} </span>
                        <div class="more-details">{{__('home.20 to 30 minutes')}}</div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat">{{__('home.Botox')}}</p>
                    <strong class="project-title">
                        <span>{{__('home.Time')}} </span>
                        <div class="more-details">{{__('home.20 to 30 minutes')}}</div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat">{{__('home.derma')}}</p>
                    <strong class="project-title">
                        <span>{{__('home.Time')}} </span>
                        <div class="more-details">{{__('home.20 to 30 minutes')}}</div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat">{{__('home.Lipstick')}}</p>
                    <strong class="project-title">
                        <span>{{__('home.Time')}} </span>
                        <div class="more-details">{{__('home.20 to 30 minutes')}}</div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat">{{__('home.Moles and skin tags removal')}}</p>
                    <strong class="project-title">
                        <span>{{__('home.Time')}} </span>
                        <div class="more-details">{{__('home.20 to 30 minutes')}}</div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat">{{__('home.Moles and skin tags removal')}}</p>
                    <strong class="project-title">
                        <span>{{__('home.Time')}} </span>
                        <div class="more-details">{{__('home.20 to 30 minutes')}}</div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat">{{__('home.fat dissolving needles')}}</p>
                    <strong class="project-title">
                        <span>{{__('home.Time')}} </span>
                        <div class="more-details">{{__('home.20 to 30 minutes')}}</div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat">{{__('home.tummy tuck needles')}}</p>
                    <strong class="project-title">
                        <span>{{__('home.Time')}} </span>
                        <div class="more-details">{{__('home.20 to 30 minutes')}}</div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat">{{__('home.Pigmentation and melasma treatment')}}</p>
                    <strong class="project-title">
                        <span>{{__('home.Time')}} </span>
                        <div class="more-details">{{__('home.20 to 30 minutes')}}</div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat">{{__('home.Pigmentation and melasma treatment')}}</p>
                    <strong class="project-title">
                        <span>{{__('home.Time')}} </span>
                        <div class="more-details">{{__('home.20 to 30 minutes')}}</div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat">{{__('home.Tighten the sagging of the upper and lower eyelids')}}</p>
                    <strong class="project-title">
                        <span>{{__('home.Time')}} </span>
                        <div class="more-details">{{__('home.20 to 30 minutes')}}</div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat">{{__('home.Lightening sensitive areas')}}</p>
                    <strong class="project-title">
                        <span>{{__('home.Time')}} </span>
                        <div class="more-details">{{__('home.20 to 30 minutes')}}</div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat">{{__('home.Hair and face plasma PRP device')}}</p>
                    <strong class="project-title">
                        <span>{{__('home.Time')}} </span>
                        <div class="more-details">{{__('home.20 to 30 minutes')}}</div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat">{{__('home.Chemical Peeling & Micro Peeling')}}</p>
                    <strong class="project-title">
                        <span>{{__('home.Time')}} </span>
                        <div class="more-details">{{__('home.20 to 30 minutes')}}</div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat">{{__('home.Scar removal with the Securit Microneedle device')}}</p>
                    <strong class="project-title">
                        <span>{{__('home.Time')}} </span>
                        <div class="more-details">{{__('home.20 to 30 minutes')}}</div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat">{{__('home.miso trio')}}</p>
                    <strong class="project-title">
                        <span>{{__('home.Time')}} </span>
                        <div class="more-details">{{__('home.20 to 30 minutes')}}</div>
                    </strong>
                </div>
            </div>
            
        </div>
    </section>
    
   
    


<x-footer/>