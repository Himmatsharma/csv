<?php $__env->startSection('content'); ?>

<section class="form3 cid-spXmYdSD8D" id="form3-r">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-12">
                <div class="image-wrapper">
                    <img class="w-100" src="assets/images/features6.jpg" alt="Mobirise">
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1 mbr-form" data-form-type="formoid">

                <form action="<?php echo e(route('login')); ?>" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="kTUKFQDzKbP2mgO+wMJaDmrzhG9oxDMKGkpsy5WO04GnbhtdW76O+LUrM6cxfHr4j91/yRjGulA4ZOgSBxTG54hhalmDAU7Peq3ztCCZ65oZWOjQNXtN5bmA9Z4qyg4a">
                    <?php echo csrf_field(); ?>
                    <div class="row">

                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out
                            the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some
                            problem!</div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h1 class="mbr-section-title mb-4 display-2"><strong>Login Form</strong></h1>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class="mbr-text mbr-fonts-style mb-4 display-7"></p>
                        </div>

                        <div class="col-lg-12 col-md col-sm-12 form-group" data-for="email">
                            <input type="email" name="email" placeholder="Password" data-form-field="email" class="form-control" value="<?php echo e(old('email')); ?>" id="email-form3-r">
                        </div>

                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <div data-for="password" class="col-lg-12 col-md col-sm-12 form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <input type="password" name="password" placeholder="password" data-form-field="password" class="form-control" value="" id="name-form3-r">
                        </div>

                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                         <button type="submit" class="btn btn-primary">
                             <?php echo e(__('Login')); ?>

                         </button>

                        <?php if(Route::has('password.request')): ?>
                            <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                 <?php echo e(__('Forgot Your Password?')); ?>

                            </a>
                        <?php endif; ?>
                        </div>
                    </div>

                    </div>
                </form>
            </div>
            <div class="offset-lg-1"></div>
        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.hig', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\hig\resources\views/auth/login.blade.php ENDPATH**/ ?>