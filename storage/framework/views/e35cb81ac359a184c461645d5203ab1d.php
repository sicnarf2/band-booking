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
            <?php foreach($trainee as $trainee): ?>

                <tr>
                    <td><?php echo e($trainee->id); ?></td>
                    <td><?php echo e($trainee->user->full_name); ?></td>
                    <td><?php echo e($trainee->course->title); ?></td>
                    <td><?php echo e($trainee->status); ?></td>
                </tr>

                <?php endforeach; ?>
        </tbody>
    </div>
    <?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/user3/Documents/Reservapeertutorial/resources/views/trainee.blade.php ENDPATH**/ ?>