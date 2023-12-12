<?php $__env->startSection('content'); ?>

<body>
    <div class="table">
        <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>username</th>
                <th>email</th>
                <th>full_name</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>

                <tr>
                    <td><?php echo e($user->id); ?></td>
                    <td><?php echo e($user->username); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    <td><?php echo e($user->full_name); ?></td>
                </tr>

                <?php endforeach; ?>
        </tbody>
    </div>

<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/user3/Documents/peer/Reservapeertutorial/resources/views/User/index.blade.php ENDPATH**/ ?>