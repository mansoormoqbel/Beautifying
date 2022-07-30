
<?php if (isset($component)) { $__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Header::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Header::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3)): ?>
<?php $component = $__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3; ?>
<?php unset($__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3); ?>
<?php endif; ?>
    <header>
        <div class="b">
        <a href="#" class="logo"> <img src="images/logo.png" alt="" width="120" height="100" srcset=""> </a>   
            
        </div>
        <nav class="nav">
            <a href="#services"><?php echo e(__('home.Services')); ?></a>
            <a href="#projects"><?php echo e(__('home.Projects')); ?></a>
            <a href="#contact"><?php echo e(__('home.Contact us')); ?></a>
            <div class="dropdown da">
                <button class="btn  dropdown-toggle dd" style="color:#cca159 " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-language"> </i> <?php echo e(Config::get('languages')[App::getLocale()]); ?>

                </button>
                <ul class="dropdown-menu"  aria-labelledby="dropdownMenuButton1">
                    
                    <?php $__currentLoopData = Config::get('languages'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($lang != App::getLocale()): ?>
                        <li><span class="nav"> <a class="dropdown-item" href="<?php echo e(route('lang.switch', $lang)); ?>"> <?php echo e($language); ?></a></span></li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
    </header>


<section class="main">
        <div >
            <h2><?php echo e(__('home.Hello, I am ')); ?> <br> <span><?php echo e(__('home.Latifa clinics')); ?>  </span> </h2>
            <h3> <?php echo e(__('home.This is where beauty begins')); ?> </h3>
            <a href="#projects" class="main-btn"> <?php echo e(__('home.view my work')); ?> </a>
            <!-- <div class="social-icons" >
                <a href="#"> <i class="fa-brands fa-linkedin"> </i></a>
                <a href="#"><i class="fa-brands fa-github"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div> -->
        </div>
    </section>
    <section class="projects" id="services" >
        <h2 class="title" ><?php echo e(__('home.Services')); ?></h2>
        <div class="contant">
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat"><?php echo e(__('home.Doctor\'s sessions')); ?></p>
                    <strong class="project-title">
                        <span><?php echo e(__('home.Time')); ?> </span>
                        <a href="<?php echo e(Route('Doctor')); ?>" class="more-details"><?php echo e(__('home.More Details')); ?></a>
                        
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7071.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat"><?php echo e(__('home.Skin Care')); ?></p>
                    <strong class="project-title">
                        <span><?php echo e(__('home.Time')); ?> </span>
                        <a href="<?php echo e(Route('Skin')); ?>" class="more-details"><?php echo e(__('home.More Details')); ?></a>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7079.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat"><?php echo e(__('home.Skin Care')); ?></p>
                    <strong class="project-title">
                        <span><?php echo e(__('home.Time')); ?> </span>
                        <a href="" class="more-details"><?php echo e(__('home.More Details')); ?></a>
                    </strong>
                </div>
            </div>
        </div>
    </section>
    <section class="cards" id="projects" >
        <h2 class="title" ><?php echo e(__('home.projects')); ?></h2>
        <div class="contant">
            <div class="card1" >
                <div class="project-imag1">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="info" >
                    <h3><?php echo e(__('home.Let your beauty glow')); ?></h3>
                   
                </div>
            </div>
            <div class="card1" >
                <div class="project-imag1">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="info" >
                    <h3><?php echo e(__('home.Let your beauty glow')); ?></h3>
                   
                </div>
            </div>
            <div class="card1" >
                <div class="project-imag1">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="info" >
                    <h3><?php echo e(__('home.Let your beauty glow')); ?></h3>
                   
                </div>
            </div>
            <div class="card1" >
                <div class="project-imag1">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="info" >
                    <h3><?php echo e(__('home.Let your beauty glow')); ?></h3>
                   
                </div>
            </div>
            <div class="card1" >
                <div class="project-imag1">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="info" >
                    <h3><?php echo e(__('home.Let your beauty glow')); ?></h3>
                   
                </div>
            </div>
           
            
           
        </div>
    </section>
   
    <section class="cards contact" id="contact">
        <h2 class="title" ><?php echo e(__('home.Contact us')); ?></h2>
        <div class="contant"> 
            <div class="card" >
                <div class="icon" >
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="info" >
                    <h3><?php echo e(__('home.phone')); ?></h3>
                    <p> <?php echo e(__('home.+962/7********')); ?></p>
                </div>
            </div>  
            <div class="card" >
                <div class="icon" >
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="info" >
                    <h3><?php echo e(__('home.Email')); ?></h3>
                    
                    <a href="mailto:inof@latifa.com">inof@latifa.com</a>
                </div>
            </div>
        </div>
    </section>


<?php if (isset($component)) { $__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Footer::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Footer::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf)): ?>
<?php $component = $__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf; ?>
<?php unset($__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\latifa2\resources\views/latifa.blade.php ENDPATH**/ ?>