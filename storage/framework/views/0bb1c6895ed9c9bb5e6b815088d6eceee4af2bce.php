
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
            <a href="<?php echo e(Route('latifa')); ?>"><?php echo e(__('home.Home')); ?></a>
            <a href="#projects"><?php echo e(__('home.Projects')); ?></a>
            <a href="#contact"><?php echo e(__('home.Contact us')); ?></a>
            <div class="dropdown da">
                <button class="btn  dropdown-toggle dd" style="color:#cca159 " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                 <?php echo e(Config::get('languages')[App::getLocale()]); ?>

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
    <section></section>


   
    <section class="projects" id="services" >
        <h2 class="title" ><?php echo e(__('home.Doctor\'s sessions')); ?></h2>
        <div class="contant">
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat"><?php echo e(__('home.Filler (sculpting, lips, cheeks, Texas)')); ?></p>
                    <strong class="project-title">
                        <span><?php echo e(__('home.Time')); ?> </span>
                        <div class="more-details"><?php echo e(__('home.20 to 30 minutes')); ?></div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat"><?php echo e(__('home.Botox')); ?></p>
                    <strong class="project-title">
                        <span><?php echo e(__('home.Time')); ?> </span>
                        <div class="more-details"><?php echo e(__('home.20 to 30 minutes')); ?></div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat"><?php echo e(__('home.derma')); ?></p>
                    <strong class="project-title">
                        <span><?php echo e(__('home.Time')); ?> </span>
                        <div class="more-details"><?php echo e(__('home.20 to 30 minutes')); ?></div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat"><?php echo e(__('home.Lipstick')); ?></p>
                    <strong class="project-title">
                        <span><?php echo e(__('home.Time')); ?> </span>
                        <div class="more-details"><?php echo e(__('home.20 to 30 minutes')); ?></div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat"><?php echo e(__('home.Moles and skin tags removal')); ?></p>
                    <strong class="project-title">
                        <span><?php echo e(__('home.Time')); ?> </span>
                        <div class="more-details"><?php echo e(__('home.20 to 30 minutes')); ?></div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat"><?php echo e(__('home.Moles and skin tags removal')); ?></p>
                    <strong class="project-title">
                        <span><?php echo e(__('home.Time')); ?> </span>
                        <div class="more-details"><?php echo e(__('home.20 to 30 minutes')); ?></div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat"><?php echo e(__('home.fat dissolving needles')); ?></p>
                    <strong class="project-title">
                        <span><?php echo e(__('home.Time')); ?> </span>
                        <div class="more-details"><?php echo e(__('home.20 to 30 minutes')); ?></div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat"><?php echo e(__('home.tummy tuck needles')); ?></p>
                    <strong class="project-title">
                        <span><?php echo e(__('home.Time')); ?> </span>
                        <div class="more-details"><?php echo e(__('home.20 to 30 minutes')); ?></div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat"><?php echo e(__('home.Pigmentation and melasma treatment')); ?></p>
                    <strong class="project-title">
                        <span><?php echo e(__('home.Time')); ?> </span>
                        <div class="more-details"><?php echo e(__('home.20 to 30 minutes')); ?></div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat"><?php echo e(__('home.Pigmentation and melasma treatment')); ?></p>
                    <strong class="project-title">
                        <span><?php echo e(__('home.Time')); ?> </span>
                        <div class="more-details"><?php echo e(__('home.20 to 30 minutes')); ?></div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat"><?php echo e(__('home.Tighten the sagging of the upper and lower eyelids')); ?></p>
                    <strong class="project-title">
                        <span><?php echo e(__('home.Time')); ?> </span>
                        <div class="more-details"><?php echo e(__('home.20 to 30 minutes')); ?></div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat"><?php echo e(__('home.Lightening sensitive areas')); ?></p>
                    <strong class="project-title">
                        <span><?php echo e(__('home.Time')); ?> </span>
                        <div class="more-details"><?php echo e(__('home.20 to 30 minutes')); ?></div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat"><?php echo e(__('home.Hair and face plasma PRP device')); ?></p>
                    <strong class="project-title">
                        <span><?php echo e(__('home.Time')); ?> </span>
                        <div class="more-details"><?php echo e(__('home.20 to 30 minutes')); ?></div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat"><?php echo e(__('home.Chemical Peeling & Micro Peeling')); ?></p>
                    <strong class="project-title">
                        <span><?php echo e(__('home.Time')); ?> </span>
                        <div class="more-details"><?php echo e(__('home.20 to 30 minutes')); ?></div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat"><?php echo e(__('home.Scar removal with the Securit Microneedle device')); ?></p>
                    <strong class="project-title">
                        <span><?php echo e(__('home.Time')); ?> </span>
                        <div class="more-details"><?php echo e(__('home.20 to 30 minutes')); ?></div>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-imag">
                    <img src="image/IMG_7047.JPG" alt="" srcset="">
                </div>
                <div class="project-info">
                    <p class="project-cat"><?php echo e(__('home.miso trio')); ?></p>
                    <strong class="project-title">
                        <span><?php echo e(__('home.Time')); ?> </span>
                        <div class="more-details"><?php echo e(__('home.20 to 30 minutes')); ?></div>
                    </strong>
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\latifa2\resources\views/Doctor.blade.php ENDPATH**/ ?>