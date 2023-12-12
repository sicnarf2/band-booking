<?php $__env->startSection('content'); ?>

    <div class="table">
        <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Trainee_ID</th>
                <th>Full Name</th>
                <th>Course Title</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($trainee as $cor): ?>

                <tr>
                    <td><?php echo e($cor->id); ?></td>
                    <td><?php echo e($cor->user->full_name); ?></td>
                    <td><?php echo e($cor->course->title); ?></td>
                    <td><?php echo e($cor->status); ?></td>
                </tr>

                <?php endforeach; ?>
        </tbody>
    </div>
    <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/user2/Documents/millan/laravel/millan_peertutorial/resources/views/Trainee/index.blade.php ENDPATH**/ ?>