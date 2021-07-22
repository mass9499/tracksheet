<div class="container">
    <table class="table table-striped">
        <tr>
            <th>#</th>
            <th>Project Name</th>
            <th>Task Name</th>
            <th>Time</th>
            <th>Date</th>
            <th>Assigned by</th>
            <th>status</th>
        </tr>
        <?php foreach($tasks as $key => $task): ?>
        <tr>
            <td><?php echo $key + 1;?></td>
            <td><?php echo $task['tasks_project'];?></td>
            <td><?php echo $task['tasks_name'];?></td>
            <td><?php echo $task['tasks_time'];?></td>
            <td><?php echo $task['tasks_date'];?></td>
            <td><?php echo $task['tasks_assigned_by'];?></td>
            <td><?php echo $task['tasks_status'];?></td>
        </tr>    
        <?php endforeach; ?>

    </table>
</div>