<section class="box-body">
    <br>
    <div class="box box-danger">
      <div class="box-header with-border">
      </div>
      <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                  <form action="<?php echo base_url();?>sales/addsalessave" method="POST">
                    <div class="col-xs-6">
                      <label>Date</label>
                      <input type="datetime-local" name="date" id="firstname" class="form-control" placeholder="Enter Date" required >
                    </div>
                    <div class="col-xs-6">
                      <label>POA of the Day</label>
                      <input type="text" name="poa" id="lastname" class="form-control" placeholder="Enter POA of the day" required>
                      <br>
                    </div>
                    <div class="col-xs-6">
                      <label> Institution Name</label>
                      <input type="mail" name="institution" id="useremail" class="form-control" placeholder="Enter Institution Name" required>
                    </div>
                  
                      <div class="col-xs-6">
                      <label>Contact Person Name </label>
                      <input type="text" name="contactperson" id="status" class="form-control" placeholder="Enter Contact person Name" required>
                      <br>
                    </div>
                    
                    
                    <div class="col-xs-6">
                  <label>Contact person Designation</label>
                      <input type="text" name="designation" id="nextfollow" class="form-control" placeholder="Enter Contact person designation" required>

                    </div>
                    <div class="col-xs-6">
                      <label>Contact Person Phone No</label>
                      <input type="number" name="phone" id="additional" class="form-control" placeholder="Enter Contact person Ph no" required>
                      <br>
                    </div>
                    <div class="col-xs-6">
                      <label>Mode of communication</label>
                      <input type="text" name="mode" id="additional" class="form-control" placeholder="Enter Mode of communication" required>
                    </div>
                  
                    <div class="col-xs-6">
                      <label>Potentional Conversion</label>
                      <input type="text" name="potentional" id="additional" class="form-control" placeholder="Enter Potentional conversion" required>
                      <br>
                    </div>
                 
                    <div class="col-xs-6">
                      <label>Next day POA</label>
                      <input type="text" name="nextpoa" id="additional" class="form-control" placeholder="Enter Next day POA" required>
                    <br>
                    </div>
                  
                      <div class="col-xs-12">
                      <label>Note(Describe about the Discussion)</label>
                       <textarea class="form-control" rows="5" id="comment" name="notes" id="additional" class="form-control" placeholder="Describe about the discussion" required></textarea>
                    </div>
   
                        <div class="col-xs-4">
                          <br><br>
                          <input type="submit" value="submit" name="submit" class="btn btn-primary" style="width:44%;">
                          <a href="<?php echo base_url(); ?>sales" class="btn btn-danger" style="width:44%;">Cancel</a>
                          <br><br>
                        </div>
              
                  </form>
            </div>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
</section>
