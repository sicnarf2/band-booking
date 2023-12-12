<?php $__env->startSection('content'); ?>
<?php if(session('message')): ?>
    <div class="alert alert-success"><?php echo e(session('message')); ?></div>
<?php endif; ?>
<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
    <a href="<?php echo e(url('/user/create')); ?>" class="btn btn-primary me-md-2" type="button">
        Add new user
    </button>
    </a>
  </div>
<table class="table table-bordered table-striped table">
    <thead>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Full Name</th>
        <th>Actions</th>
    </thead>
    <tbody>
        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($user->id); ?></td>
            <td><?php echo e($user->username); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td><?php echo e($user->full_name); ?></td>

            <td>

                <button>edit</button>
                <a href="<?php echo e(url('/user/delete'. $user->id)); ?>">
                <button>delete</button>
                </a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/user3/Documents/Reservapeertutorial/resources/views/user.blade.php ENDPATH**/ ?>