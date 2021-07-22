  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <div class="container-fluid"><br>
            
            <h4 style="color:grey;"><b>Minutes of Meeting Date and Time: <i><?php echo date('d-M-Y - h:i a', strtotime($discussion['discussion_datetime'])); ?></i></b></h4>
            
            <?php if(!empty($discussion_projects)) { ?>
                <?php foreach($discussion_projects as $project_disc) { ?>
                    <div class="panel panel-info" id="original_panel">
                      <div class="panel-heading">
                            <h5>
                                <b>Type of Meeting: </b><?php echo ucfirst($project_disc['discussion_type']); ?>
                                <?php if($project_disc['project_name'] != '') { ?>
                                    &nbsp; &nbsp; | &nbsp; &nbsp; 
                                    <b>Institution Name: </b><?php echo ucfirst($project_disc['project_name']); ?>
                                <?php } ?>
                            </h5>
                              <?php /* if(!empty($projects)) { ?>
                                <?php $projectname = ""; ?>
                                  <?php foreach($projects as $project) { ?>
                                    <?php if($project['project_id'] == $project_disc['proj_id']) { $projectname = $project['project_name']; ?> <?php } ?>
                                  <?php } ?>
                                  Institution name: <b><?php echo $projectname; ?></b>
                              <?php } */ ?>
                      </div>
                      <div class="panel-body">
                        <?php echo $project_disc['discussion_note']; ?>
                      </div>
                      <div class="panel-footer">
                        <b>Assigned Users: </b>  
                        <?php foreach($project_disc['users'] as $key => $user) { ?>
                            <?php echo ' &nbsp; &nbsp; '.$user['first_name'].' &nbsp; &nbsp; '; ?> |
                        <?php } ?>
                      </div>
                    </div>
                <?php } ?>
            <?php } ?>
        
            <hr style="border:2px solid #dddddd;">
            <center>
                <a href="<?php echo base_url(); ?>discussions" class="btn btn-danger">Cancel</a>
            </center>
        </form>
    </div>
