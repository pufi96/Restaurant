<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="images/logo.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-rs-food">
                <ul class="navbar-nav ml-auto">
                    <?php $__currentLoopData = $nav; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="nav-item <?php if(request()->routeIs($link->route)): ?> active <?php endif; ?>">
                            <a class="nav-link" href="<?php echo e(route($link->route)); ?>"><?php echo e($link->nameNav); ?></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if(!Session::has('user')): ?>
                        <li class="nav-item <?php if(request()->routeIs('registration')): ?> active <?php endif; ?>">
                            <a class="nav-link" href="<?php echo e(route('registration')); ?>">Registration</a>
                        </li>
                    <?php endif; ?>
                    <?php if(Session::get('user')): ?>
                        <?php if(Session::get('user')->idRole == 2): ?>
                                <li class="nav-item <?php if(request()->routeIs('menus')): ?> active <?php endif; ?>">
                                    <a class="nav-link" href="<?php echo e(route('menus')); ?>">MenuDB</a>
                                </li>
                                <li class="nav-item <?php if(request()->routeIs('users')): ?> active <?php endif; ?>">
                                    <a class="nav-link" href="<?php echo e(route('users')); ?>">UserDB</a>
                                </li>
                        <?php endif; ?>
                        <li class="nav-item <?php if(request()->routeIs($link->route)): ?> active <?php endif; ?>">
                            <form action="<?php echo e(route('logout')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button class="nav-link btn">Logout</button>
                            </form>
                        </li>
                    <?php else: ?>
                        <li class="nav-item <?php if(request()->routeIs('login')): ?> active <?php endif; ?>">
                            <a class="nav-link " href="<?php echo e(route('login')); ?>">Login</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
<?php /**PATH C:\xampp\htdocs\Restaurants\resources\views/fixed/nav.blade.php ENDPATH**/ ?>