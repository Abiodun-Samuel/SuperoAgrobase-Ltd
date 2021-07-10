<?php $__env->startSection('content'); ?>
    <section id="hya-student">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-4 my-2">
                    <div class="card">
                        <div class="card-header">My Dashboard</div>
                        <div class="card-body dashboard">
                            <?php if(!empty(auth()->user()->hyacademy) && auth()->user()->hyacademy !== null): ?>
                                <h5>Admission Details:</h5>
                                <hr>
                                <p><span>Add No: </span> <?php echo e(auth()->user()->hyacademy->admission_no); ?></p>
                                <p><span>Name: </span> <?php echo e(auth()->user()->hyacademy->name); ?></p>
                                <p><span>Email: </span> <?php echo e(auth()->user()->email); ?></p>
                                <p><a href="<?php echo e(url('/images/HYAcademy/' . auth()->user()->hyacademy->name . '.pdf')); ?>"
                                        download> <u class="text-danger">Download</u> </a> your admission letter</P>

                                <div class="mt-4">
                                    <a class="hya-class" href="https://chat.whatsapp.com/GZPPN5XoSDXGtmoBcNPNYr"
                                        target="_blank"><u class="text-danger"> Online Class </u> </a>
                                </div>
                            <?php else: ?>
                                <p> You are not a registered student. <a href="<?php echo e(route('academy.register')); ?>">Register
                                        Now</a>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 my-2">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-3">
                            <div class="card">
                                <div class="card-header"> Course Outline </div>
                                <div class="card-body">
                                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <p> <b>Week <?php echo e($course->week); ?>: </b> <?php echo e($course->topic); ?> <br>
                                            <?php if(!empty($course->material)): ?>
                                                <a href="<?php echo e(url('/images/HYAcademy/course/' . $course->material)); ?>"
                                                    download>Download</a>
                                            <?php endif; ?>
                                        </p>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-3">
                            <div class="card">
                                <div class="card-header"> Events / Notitifications </div>
                                <div class="card-body">
                                    <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <p> <?php echo e($new->news); ?> <br>
                                            <small class="text-danger"> By <?php echo e($new->user->name); ?>, Uploaded
                                                <?php echo e($new->created_at->diffForHumans()); ?></small>
                                        </p>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-3">
                            <div class="card">
                                <div class="card-header"> Submit Assignment </div>
                                <div class="card-body">

                                    <form action="<?php echo e(route('academy.assignment')); ?>" method="post"
                                        enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <?php if(session('assignment')): ?>
                                            <div class="alert alert-success">
                                                <p><?php echo e(session('assignment')); ?></p>
                                            </div>
                                        <?php endif; ?>

                                        <?php $__errorArgs = ['assignment_file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="alert alert-danger"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                        <label for="assignment_file"> Upload file
                                            <em>(Format:pdf,docx,doc,jpeg,jpg. Max size:2048)</em></label>
                                        <input type="file" class="w-100 my-2" name="assignment_file" id="assignment_file">

                                        <input class="w-100" type="submit" value="Submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-3">
                            <div class="card">
                                <div class="card-header"> Send Message</div>
                                <div class="card-body">
                                    <form action="<?php echo e(route('academy.message')); ?>" method="post"
                                        enctype="application/x-www-form-urlencoded">
                                        <?php echo csrf_field(); ?>

                                        <?php if(session('studentmessage')): ?>
                                            <div class="alert alert-success">
                                                <p><?php echo e(session('studentmessage')); ?></p>
                                            </div>
                                        <?php endif; ?>

                                        <?php $__errorArgs = ['student_message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="alert alert-danger"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <label for="student_message"> Message </label>
                                        <textarea class="w-100 my-2" name="student_message" id="student_message" cols="30"
                                            rows="2">  <?php echo e(old('student_message')); ?></textarea>
                                        <input class="w-100" type="submit" value="Send">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abiod\Desktop\Laravel-Projects\superoinc\resources\views\HYAcademy\students.blade.php ENDPATH**/ ?>