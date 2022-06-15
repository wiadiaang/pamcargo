<?php $this->load->view('admin/template/header'); ?>
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Schedule </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <!-- <a href="javascript:void(0)" onClick="add_data();" class="btn btn-primary btn-sm">Add Data</a> -->
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                        <div class="x_content">

                        <form id="form_data" class="form-horizontal form-label-left" method="POST"  enctype="multipart/form-data">

                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Departure Origin <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="hidden" id="schedule_id" name="schedule_id" value="<?= isset($schedule->schedule_id) ? $schedule->schedule_id : ''; ?>" class="form-control col-md-7 col-xs-12" >
                                <select id="departure_id" name="departure_id"  class="form-control">
                                    <option> Select Departure </option>
                                    <?php
                                        $sql1 = $this->db->query("SELECT * FROM departure")->result_array();
                                        foreach($sql1 as $key ){
                                    ?>
                                                <option value="<?php echo $key['departure_id']; ?>"><?php echo $key['departure_name']; ?></option>
                                 <?php } ?>  
                                </select>
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Destination <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="arrive_id" name="arrive_id"  class="form-control">
                                    <option> Select Destination </option>
                                    <?php
                                        $data = $this->db->query("SELECT * FROM arrive")->result_array();
                                        foreach($data as $key ){
                                    ?>
                                                <option value="<?php echo $key['arrive_id']; ?>"><?php echo $key['arrive_name']; ?></option>
                                 <?php } ?> 
                                </select>
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Via <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="via_id" name="via_id"  class="form-control">
                                    <option> Select Via </option>
                                    <?php
                                        $data = $this->db->query("SELECT * FROM via")->result_array();
                                        foreach($data as $key ){
                                    ?>
                                                <option value="<?php echo $key['via_id']; ?>"><?php echo $key['via_name']; ?></option>
                                 <?php } ?> 
                                </select>
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Feeder Vessel <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="feeder_vessel_id" name="feeder_vessel_id"  class="form-control">
                                    <option> Select Feeder Vessel </option>
                                    <?php
                                        $data = $this->db->query("SELECT * FROM vessel")->result();
                                        foreach($data as $key ){
                                    ?>
                                     <option value="<?php echo $key->vessel_id; ?>"><?php echo $key->vessel_name; ?></option>
                                 <?php } ?> 
                                </select>
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Voyage <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="voyage_feeder" name="voyage_feeder" class="form-control" >
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Mother Vessel <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="mother_vessel_id" name="mother_vessel_id" class="form-control">
                                    <option> Select Mother Vessel name </option>
                                    <?php
                                        $data = $this->db->query("SELECT * FROM vessel")->result_array();
                                        foreach($data as $key ){
                                    ?>
                                                <option value="<?php echo $key['vessel_id']; ?>"><?php echo $key['vessel_name']; ?></option>
                                 <?php } ?> 
                                </select>
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Voyage <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="voyage_mother" name="voyage_mother"   class="form-control" >
                                <input type="hidden" id="feeder_vessel_name" name="feeder_vessel_name" class="form-control" >
                                <input type="hidden" id="mother_vessel_name" name="mother_vessel_name" class="form-control" >
                                
                            </div>
                          
                            </div>
                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Closing time for delivery <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="closing_time_for_delivery" name="closing_time_for_delivery" value=""  class="form-control" >
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">ETD Departure <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="etd_departure" name="etd_departure" class="form-control" >
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">ETD Transit Airport <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="etd_transit_airport" name="etd_transit_airport" class="form-control" >
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">ETA <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="eta" name="eta" class="form-control" >
                            </div>
                            </div>
                            

                             <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Transit Time <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="transit_time" name="transit_time" class="form-control" >
                            </div>
                            </div> 

                            <div class="ln_solid"></div>
                            <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <a href="javascript:void(0)" id="backTable" class="btn btn-primary" >Cancel</a>
                                <button id="btn_save" class="btn btn-success">Save </button>
                            </div>
                            </div>

                            </form>

                        </div>  
                </div>
              </div>
					
          </div>
        </div>


<?php $this->load->view('admin/template/footer'); ?>


 <script>

    <?php 
        if($id != ''){ ?>

        $('#schedule_id').val("<?= $schedule->schedule_id; ?>");
        $('#departure_id').val("<?= $schedule->departure_id; ?>");
        $('#arrive_id').val("<?= $schedule->arrive_id; ?>");
        $('#via_id').val("<?= $schedule->via_id; ?>");
        $('#feeder_vessel_id').val("<?= $schedule->feeder_vessel_id; ?>");
        $('#voyage_feeder').val("<?= $schedule->voyage_feeder; ?>");
        $('#mother_vessel_id').val("<?= $schedule->mother_vessel_id; ?>");
        $('#voyage_mother').val("<?= $schedule->voyage_mother; ?>");
        $('#feeder_vessel_name').val("<?= $schedule->feeder_vessel_name; ?>");
        $('#mother_vessel_name').val("<?= $schedule->mother_vessel_name; ?>");
        $('#closing_time_for_delivery').val("<?= $schedule->closing_time_for_delivery; ?>");
        $('#etd_departure').val("<?= $schedule->etd_departure; ?>");
        $('#etd_transit_airport').val("<?= $schedule->etd_transit_airport; ?>");
        $('#eta').val("<?= $schedule->eta; ?>");
        $('#transit_time').val("<?= $schedule->transit_time; ?>");

       <?php }
    
    ?>
       
        
    $('#feeder_vessel_id').on('change',function(){
            var fvi = $( "#feeder_vessel_id option:selected" ).text();
              $('#feeder_vessel_name').val(fvi);

    });

    $('#mother_vessel_id').on('change',function(){
            var fvi = $( "#mother_vessel_id option:selected" ).text();
        $('#mother_vessel_name').val(fvi);

    });
                            

    $('#backTable').on('click',function(){
        window.location = "<?= base_url('admin/schedule') ?>";
    }); 

    $('#btn_save').click(function(){
                $('#form_data').ajaxForm({
                    url:"<?php echo base_url('admin/schedule/save_schedule')?>",
                    type: 'POST',
                //   data:{"userfile":userfile},
                    success: function(resp) {
                        window.location = "<?= base_url('admin/schedule') ?>";
                    },
                });   


    });

</script>
