
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>


<section class="content-body" style="min-height:450px;">
    
<?php
    $servername = "localhost";
    $username = "business_office";
    $password = "-D5h=2z91-Em";
    $dbname = "business_office";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "SELECT * FROM project_tbl";
    $projects = $conn->query($sql);
?>

<center>
    <?php
        if($this->session->flashdata('project_add_success') != '') 
        {
            echo "<br><h4 style='color:green;' class='flash'>".$this->session->flashdata('project_add_success')."</h4><br>";
        }
        
        if($this->session->flashdata('project_add_failed') != '') 
        {
            echo "<br><h4 style='color:maroon;' class='flash'>".$this->session->flashdata('project_add_failed')."</h4><br>";
        }
        
    ?>
</center>

<div class="row">
    <div class="col-md-1"></div>
	<div class="col-md-10">
		<h3>Projects List</h3>
		
		<table id="projectslisttable" class="table table-bordered table-striped" style="border:2px solid #e2e2e;background-color:#fff;">
          <thead>
            <tr style="background-color:#e2e2e2;">
              <th scope="col"># Sl no.</th>
              <th scope="col">Project Name</th>
              <th scope="col">Country</th>
              <th scope="col">Created Date</th>
            </tr>
          </thead>
          <tbody>
              <?php $slno = 1; ?>
            <?php while($row = $projects->fetch_assoc()) { ?>
                <tr>
                  <td><?php echo $slno++; ?></td>
                  <td><?php echo $row['project_name']; ?></td>
                  <td><?php echo $row['country_name']; ?></td>
                  <td><?php echo $row['created_date']; ?></td>
                </tr>
            <?php } ?>
          </tbody>
        </table>
	</div>
	<div class="col-md-1"></div>
</div>		

</section>

<script>
    $(document).ready(function() {
        $('#projectslisttable').DataTable();
    });
</script>

<script>
$(document).ready(function(){    
    $(".flash").fadeOut(3000);  
});
</script>