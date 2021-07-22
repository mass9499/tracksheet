<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_inovice.css">
<style>
    
   @media print {
  body * {
    visibility: hidden;
  }
  #section-to-print, #section-to-print * {
    visibility: visible;
  }
  #section-to-print {
    position: absolute;
    left: 0;
    top: 0;
  }
}
 
    
</style>

<div class="box" style="background-color:#fff;">
<section class="content-body">
     
    <div class="col-md-12"><br>
        <div class="row">
            <div class="col-md-6">
                <?php if(getadd('tasks') == '1') { ?>
                
                    <div class="panel panel-default">
                      <div class="panel-heading" style="font-size: 20px; font-weight:bold;">
                            Quotation
                          <center> <?php if($this->session->flashdata('add_task_response') != '') { echo $this->session->flashdata('add_task_response'); } ?> </center>
                          
                          
                          
                          <input type="button" onclick="window.location.href = 'https://business360.co.in/officemanagement/Quationandinvoice/addqutn';" class="btn btn-primary pull-right" name="submit" value="Add" style="margin-top:-30px;">
                      </div>
                      <div class="panel-body" style="overflow-x:scroll;">
                          
                        <form method="POST" action="<?php echo site_url('Quationandinvoice/index') ?>" >
                            <input type="hidden" class="form-control" id="userid" name="userid" value="<?php echo $userid; ?>">
                            <table class="table table-bordered table-striped" style="background-color:#fff;">
                              <thead>
                                <tr style="background-color:#e2e2e2;">
                                  <th class="text-center" scope="col">Date</th>
                                  <th scope="col">Project Name</th>
                                 
                                  
                                  
                                  <th class="text-center" scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td><input type="date" class="form-control" name="taskdate" value="<?php echo date('Y-m-d'); ?>" readonly style="margin-top:20px;height:35px;text-align:center;" required></td>
                                  <td>
                                      <select class="form-contro" name="projectid"  id="projectid" required style="margin-top:20px;height:35px;">
                                          <option value=""> Select Project </option>
                                          <?php foreach($projects as $project) { ?>
                                            <option value="<?php echo $project['project_id']; ?>"> <?php echo $project['project_name']; ?> </option> 
                                          <?php } ?>
                                      </select>
                                  </td>
                                  <!--<td><textarea rows="3" class="form-control" name="taskname" required></textarea></td>-->
                                 
                                      <input type="hidden" name="billing" value="invoice" >
                                  <!--<td><textarea rows="3" class="form-control" name="taskstatus"></textarea></td>-->
                                  
                                  <td><input type="submit" class="btn btn-success" name="submit" value="Print" style="margin-top:20px;"></td>
                                </tr>
                              </tbody>
                            </table>
                        </form>
                        </div>
                    </div>
                <?php } ?>
                
        	
            </div>
            
    <!--invoice page -->
            
             <div class="col-md-6">
                <?php if(getadd('tasks') == '1') { ?>
                
                    <div class="panel panel-default">
                      <div class="panel-heading" style="font-size: 20px; font-weight:bold;">
                           Invoice
                          <center> <?php if($this->session->flashdata('add_task_response') != '') { echo $this->session->flashdata('add_task_response'); } ?> </center>
                          <!--<input type="submit" class="btn btn-primary pull-right" name="submit" value="Add" style="margin-top:-30px;">-->
                      </div>
                      <div class="panel-body" style="overflow-x:scroll;">
                        <form method="POST" action="<?php echo site_url('Quationandinvoice/invoice') ?>" >
                            <input type="hidden" class="form-control" id="userid" name="userid" value="<?php echo $userid; ?>">
                            <table class="table table-bordered table-striped" style="background-color:#fff;">
                              <thead>
                                <tr style="background-color:#e2e2e2;">
                                  <th class="text-center" scope="col">Date</th>
                                  <th scope="col">Project Name</th>
                                 
                                  
                                  
                                  <th class="text-center" scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td><input type="date" class="form-control" name="taskdate" value="<?php echo date('Y-m-d'); ?>" readonly style="margin-top:20px;height:35px;text-align:center;" required></td>
                                  <td>
                                      <select class="form-contro" name="projectid"  id="projectid" required style="margin-top:20px;height:35px;">
                                          <option value=""> Select Project </option>
                                          <?php foreach($projects as $project) { ?>
                                            <option value="<?php echo $project['project_id']; ?>"> <?php echo $project['project_name']; ?> </option> 
                                          <?php } ?>
                                      </select>
                                  </td>
                                  
                              
                                 
                                  <td><input type="submit" class="btn btn-success" name="submit" value="Print" style="margin-top:20px;"></td>
                                </tr>
                              </tbody>
                            </table>
                        </form>
                        </div>
                    </div>
                <?php } ?>
                
        	
            </div>
            
            
            
            
            
        </div>		
    </div>
    
    </section>
    
    
    <?php //  if(!empty($quation_tasks)){  ?>
    <!--<section class="">-->


    <!--<button type="button" value="Print Div" onclick="myFunctionprint()"  class="btn btn-info pull-right" style="matrgin-right:10px !important;"><i class="fa fa-print" aria-hidden="true"></i></button>-->
    
    
    <!--<button type="button" value="Print Div"  onclick="printpdf()"  class="btn btn-info pull-right" style="matrgin-right:10px !important;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></i></button>-->
    
    <!--<div id="section-to-print" style="background:white;" class="col-md-12"><br>-->
    <!--    <div class="row">-->
           
                
    <!--            <div  class="container" style="width:100%;">-->
                    
    <!--                 <div style="background:#01A8EE;" class="jumbotron">-->
    <!--                 <h1>Afluence Softtech</h1>      -->
    <!--                 </div> -->
                      
    <!--                  <div class="row">-->
    <!--                      <div style="margin-left:50px;" class="pull-left">-->
    <!--                     <p><?php echo $quation_tasksname['project_name']; ?></p>-->
    <!--                 <p><?php echo $quation_tasksname['country_name']; ?></p> -->
    <!--                  </div>-->
                          
    <!--                       <div style="margin-right:120px;" class="pull-right">-->
                               
    <!--                     <p>Date :<?php echo $quation_tasksdate; ?></p>-->
    <!--                     <p>Quate # :<?php echo $quation_tasksname['unique_id']; ?></p>-->
                         
                         
    <!--                 </div>-->
    <!--                  </div>-->
                      
                      
                      
                      
    <!--                  <div style="margin-left:30px;" class="row">-->
                          
    <!--                      <h1>Afluence Logo</h1>-->
                          
    <!--                  </div>-->
    <!--                  <br><br>-->
    <!--                  <div style="margin-left:30px;"  class="row">-->
                          
    <!--                      <p><b><u> Quote for Flyango Web and App Development </u></b></p>-->
                          
    <!--                  </div>-->
                      
    <!--                  <div class="row">-->
                          
    <!--                      <table  id="" class="table table-bordered" style="width:90%;margin-left:40px;">-->
    <!--                            <thead>-->
    <!--                              <tr>-->
    <!--                                <th><center>Description</center></th>-->
    <!--                                <th><center>Hours</center></th>-->
    <!--                                <th><center>cost(INR)</center></th>-->
                                    
    <!--                              </tr>-->
    <!--                            </thead>-->
                                
                                <!--<tbody style="border:none;">-->
                                        <?php //
                                     //    if (empty($quation_tasks)) {
                                            ?>
                                                            
                                            <?php
                                    //    } else {
                                      //      $count = 1;
                                        //    foreach ($quation_tasks as $quation) {
                                                ?>
                                                <!--<tr>-->
                                                    
    <!--                                                <td style=" border: none;"><?php echo $quation['task_name']; ?></td>-->
    <!--                                                <td style=" "><input type="text" value="<?php echo $quation['task_hours']; ?>"></td>-->
    <!--                                                <td style=" "></td>-->
   
                                                <!--</tr>-->
                                                <?php
                                      //          $count++;
                                        //    } 
                                            ?>
                                           <!--<td><input type="text" value="" placeholder="Total hours"> &nbsp; <input type="text" value="" placeholder="type your cost"></td>    -->
                                    <?php
                                    // }
                                        ?>
                                    <!--</tbody>-->
                                
                                
                                
                                
                                
                                
                                
                                
    <!--                          </table>-->
                        <?php // } ?>
    <!--                  </div>-->
                      
                      
    <!--                  <div id="elementH"></div>-->
    <!--            </div>-->
                
                
                    

            
            
            
            
            
        		
    <!--</div>-->
    <!--</div>-->
    
    
    <?php   if(!empty($quation_tasks)){  ?>
    <section class="">


           <div id="section-to-print" style="background:white;" class="col-md-12"><br>
                <div id="invoice">
                
                    <div class="toolbar hidden-print">
                        <div class="text-right">
                            
                                <button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
                            <button type="button" value="Print Div" onclick="myFunctionprint()"   class="btn btn-info pull-right" style="matrgin-right:10px !important;"><i class="fa fa-file-pdf-o"></i> Export as PDF</button>
                        </div>
                        <hr>
                    </div>
                    <div class="invoice overflow-auto">
                        <div style="">
                            <header>
                                <div class="row">
                                    <div class="col">
                                        <a target="_blank" href="#">
                                            <img src="<?php echo site_url();?>assets/new_images/logo1.jpg" data-holder-rendered="true" />
                                            </a>
                                    </div>
                                    <div class="col company-details">
                                        <h2 class="name">
                                            <a target="_blank" href="#">
                                          Afluence softech
                                            </a>
                                        </h2>
                                      
                                        <div>0422-4951544</div>
                                        <div>info@afluencesoftech.com</div>
                                    </div>
                                </div>
                            </header>
                            <main>
                                <div class="row contacts">
                                    <div class="col invoice-to">
                                        <div class="text-gray-light">INVOICE TO:</div>
                                        <h2 class="to"><?php echo $quation_tasksname['client_name']; ?></h2>
                                        <div class="address"><?php echo $quation_tasksname['client_address']; ?></div>
                                        <!--<div class="email"><a href="">john@example.com</a></div>-->
                                    </div>
                                    <div class="col invoice-details">
                                        <h3 class="invoice-id">INVOICE</h3>
                                        
                                        <div class="date">Project: <?php echo $quation_tasksname['project_name']; ?></div>
                                        <div class="date">Invoice no:<input type="text" style="border:none;width: 10%;"></div>
                                        <div class="date">Date of Invoice: <?php echo $quation_tasksdate; ?></div>
                                    
                                    </div>
                                </div>
                                <table class="table-responsive" border="0" cellspacing="0" cellpadding="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th class="text-left">DESCRIPTION</th>
                                            <th class="text-right">HOURS</th>
                                            <th class="text-right">HOUR PRICE</th>
                                            <th class="text-right">TOTAL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php 
                                         if (empty($quation_tasks)) {
                                            ?>
                                                            
                                            <?php
                                        } else {
                                            $count = 1;
                                            $total = 0;
                                            foreach ($quation_tasks as $quation) {
                                                
                                                $time = $quation['task_hours'];
                                                $costperhours = $time * $quation['hourly_cost'] ;
                                                
                                                $total = $total + $costperhours;
                                                
                                                ?>
                                            
                                        <tr>
                                            <td class="no"><?php echo $count++; ?></td>
                                            <td class="text-left"><h3>
                                               <?php echo $quation['task_name']; ?>
                                            </td>
                                            <td class="unit"><?php echo $quation['task_hours'];?></td>
                                            <td class="qty"><?php echo $quation['hourly_cost'];?></td>
                                            <td class="total"><?php echo $costperhours ;?></td>
                                        </tr>
                                       <?php } ?>
                                  
                                    </tbody>

                                    
                                    
                                    <tfoot>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td colspan="2">SUBTOTAL</td>
                                            <td>₹<?php echo $total; ?>.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td colspan="2">TAX <?php echo $quation['taxper'];?>%</td>
                                            <td>₹<?php $tax = $total/100 ; echo $taxtotal = $tax * $quation['taxper'];  ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td colspan="2">GRAND TOTAL</td>
                                            <td>₹<?php echo $grandtotal = $taxtotal + $total; ?></td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <!--<div class="thanks">Thank you!</div>-->
                                <div class="notices">
                                    <div>NOTICE:</div>
                                    <div class="notice">
                                            <?php echo $quation_tasksname['additional_comments_step1']; ?>
                                    </div>
                                </div>
                            </main>
                            <footer>
                                 No.27, Sundaram Brothers Layout, Trichy Road, Ramanathapuram, Coimbatore, Tamilnadu 641045
                            </footer>
                        </div>
                        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
                        <div></div>
                    </div>
                                                        <?php } ?>
                </div>
             </div>       
    
    
                        
    
            
    </section>    
    
    <?php } ?>
    

    
</div>



<script>
 $(document).ready( function () {
    $('#projectslisttable').DataTable();
} );
</script>

<script>
$(document).ready(function(){    
    $(".flash").fadeOut(3000);  
});
</script>

<script>
    function edit_butt_clicked(dis) {
        var rowid = dis.getAttribute('data-row');
        
        $(".taskstatusinput").hide();
        $(".savebutt").hide();
        $(".closebutt").hide();
        
        $(".taskstatusecho").show();
        $(".editbutt").show();
        
        $("#taskstatusecho-"+rowid).hide();
        $("#editbutt-"+rowid).hide();
        
        $("#taskstatusinput-"+rowid).show();
        $("#savebutt-"+rowid).show();
        $("#closebutt-"+rowid).show();
    }
</script>

<script>
    function close_butt_clicked(dis) {
        var rowid = dis.getAttribute('data-row');
        
        $(".taskstatusinput").hide();
        $(".savebutt").hide();
        $(".closebutt").hide();
        
        $(".taskstatusecho").show();
        $(".editbutt").show();
        
    }
</script>

<script>
    function save_butt_clicked(dis) {
        var rowid = dis.getAttribute('data-row');
        var taskid = dis.getAttribute('data-taskid');
        var taskstatus = $("#taskstatusinput-"+rowid).val();
        var url = "<?php echo base_url(); ?>tasks/edit_task_ajax";
        
        $.ajax({
            type: "POST",
            url: url,
            data: {taskid:taskid,taskstatus:taskstatus},
            success: function(response)
            {
                if(response == 1) {
                    $("#taskstatusecho-"+rowid).html(taskstatus);
                    
                    $(".taskstatusinput").hide();
                    $(".savebutt").hide();
                    $(".closebutt").hide();
                    
                    $(".taskstatusecho").show();
                    $(".editbutt").show();
                } else {
                    $(".taskstatusinput").hide();
                    $(".savebutt").hide();
                    $(".closebutt").hide();
                    
                    $(".taskstatusecho").show();
                    $(".editbutt").show();
                }
            }
        });
        
        
    }
</script>

<script>
    $("#projectid").change(function(){
        var def = "<option value=''> ~ Select Task ~ </option>";
        $("#taskname").html(def);
        
    //   var userid = $("#userid").val();
      
        var projectid = $("#projectid").val();
        url = "<?php echo base_url(); ?>tasks/get_project_tasks";
            
        $.ajax({
            type: "POST",
            url: url,
            data: {project_id:projectid},
            success: function(response)
            {
                var obj = JSON.parse(response);
                
                obj.forEach(function(res) {
                    var options = "<option>"+res.task_desc+"</option>";
                    $("#taskname").append(options);
                });
                
            }
        });
        
    });
</script>

<script>
function myFunctionprint() {
  window.print();
}

</script> 
<!-- jQuery library -->
<script src="js/jquery.min.js"></script>

<!-- jsPDF library -->
<script src="js/jsPDF/dist/jspdf.min.js"></script>
<script>


   
   function printpdf() {
  var doc = new jsPDF();
var elementHTML = $('#section-to-print').html();
var specialElementHandlers = {
    '#elementH': function (element, renderer) {
        return true;
    }
};
doc.fromHTML(elementHTML, 15, 15, {
    'width': 170,
    'elementHandlers': specialElementHandlers
});

// Save the PDF
doc.save('sample-document.pdf');
    
}
   
</script>

<script>
   function genPDF() {
	
	var doc = new jsPDF();
	
    var specialElementHandlers = {
        '#hidediv' : function(element,render) {return true;}
    };
    
    doc.fromHTML($('#section-to-print').get(0), 20,20,{
                 'width':500,
        		'elementHandlers': specialElementHandlers
    });
	
	doc.save('Test.pdf');
	
} 

 $('#printInvoice').click(function(){
            Popup($('.invoice')[0].outerHTML);
            function Popup(data) 
            {
                window.print();
                return true;
            }
        });
    
</script>
