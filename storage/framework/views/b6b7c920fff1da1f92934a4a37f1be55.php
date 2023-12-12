<?php $__env->startSection('content'); ?>

    <div class="table">
        <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Course_ID</th>
                <th>Trainor Name</th>
                <th>Title</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($course as $cor): ?>

                <tr>
                    <td><?php echo e($cor->id); ?></td>
                    <td><?php echo e($cor->trainor->user->full_name); ?></td>
                    <td><?php echo e($cor->title); ?></td>
                    <td><?php echo e($cor->description); ?></td>
                </tr>

                <?php endforeach; ?>
        </tbody>
    </div>
    <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/user3/Documents/peer/Reservapeertutorial/resources/views/Course/index.blade.php ENDPATH**/ ?>