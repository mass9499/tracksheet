<div class="container">
    <form action="<?php echo base_url();?>tasks/tasks_add" method="post">
        <div class="row">
            <div class="col-md-6">
                <label>Project</label>
                <input type="text" name="tasks_project" class="form-control" required >
            </div>
            <div class="col-md-6">
                <label>Task</label>
                <input type="text" name="tasks_name" class="form-control" required >
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Time</label>
                <input type="time" name="tasks_time" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label>Date</label>
                <input type="date" name="tasks_date" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Assigned By</label>
                <input type="text" name="tasks_assigned_by" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label>Status</label>
                <select name="tasks_status" class="form-control" required>
                    <option name="Pending">~~Select~~</option>
                    <option name="Pending">Pending</option>
                    <option name="Completed">Completed</option>
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <center><input type="submit" class="btn btn-primary"></center>
            </div>
        </div>
    </form>
</div>