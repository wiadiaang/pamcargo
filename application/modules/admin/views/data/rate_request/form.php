

<?php $this->load->view('admin/template/header'); ?>

<div class="clearfix"></div>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Form Rate Request</h2>
        <div class="clearfix"></div>
      </div>
            <div class="x_content">


            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Contact Information</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask">

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                          <label for="">Contact Name</label>
                        <input type="text" value="<?= $data->contact_name; ?>" class="form-control has-feedback-left"  >
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <label for="">Company Name</label>

                        <input type="text" value="<?= $data->contact_phone; ?>" class="form-control">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <label for="">Contact Phone</label>

                        <input type="text" value="<?= $data->contact_email; ?>" class="form-control has-feedback-left" >
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <label for="">Company Phone</label>

                        <input type="text" value="<?= $data->contact_company; ?>" class="form-control">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <label for="">Contact Email</label>

                        <input type="text" value="<?= $data->contact_company_phone; ?>" class="form-control has-feedback-left" >
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <label for="">Company Country</label>

                        <input type="text" value="<?= $data->contact_company_location; ?>" class="form-control">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>

                    </form>
                    </div>
                </div>
                </div>
                </div>

                
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Shipment Information</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask">

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <label for="">Incoterm</label>  
                      <input type="text" value="<?= $data->incoterm; ?>" class="form-control has-feedback-left"  >
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <label for="">Weight</label>  
                      <input type="text" value="<?= $data->weight; ?>" class="form-control" id="inputSuccess3">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <label for="">Volume</label>  
                      <input type="text" value="<?= $data->volume; ?>" class="form-control has-feedback-left" >
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <label for="">Commodity</label>  
                      <input type="text" value="<?= $data->commodity; ?>" class="form-control">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>

                    </form>
                    </div>
                </div>
                </div>
                </div>


            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Measurement</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask">

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <label for="">Width</label>  
                      <input type="text" value="<?= $data->width; ?>" class="form-control has-feedback-left"  >
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <label for="">Height</label>  
                      <input type="text" value="<?= $data->height; ?>" class="form-control" id="inputSuccess3">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <label for="">Length</label>  
                      <input type="text" value="<?= $data->length; ?>" class="form-control has-feedback-left" >
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      <label for="">Pieces</label>  
                      <input type="text" value="<?= $data->pieces; ?>" class="form-control">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>

                    </form>
                    </div>
                </div>
                </div>
                </div>


            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Route</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask">

                      <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                      <label for="">Origin</label>  
                      <input type="text" value="<?= $data->origin; ?>" class="form-control has-feedback-left"  >
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                      <label for="">Destination</label>  
                      <input type="text" value="<?= $data->destination; ?>" class="form-control" id="inputSuccess3">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                      <label for="">Via</label>  
                      <input type="text" value="<?= $data->via; ?>" class="form-control has-feedback-left" >
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                      </div>


                    </form>
                    </div>
                </div>
                </div>
                </div>


            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Misc</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask">

                      <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                      <label for="">Ready date</label>  
                      <input type="text" value="<?= $data->date; ?>" class="form-control has-feedback-left"  >
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                      <label for="">Delivery Address</label>  
                      <input type="text" value="<?= $data->address; ?>" class="form-control" id="inputSuccess3">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                      <label for="">Remark</label>  
                      <input type="text" value="<?= $data->remark; ?>" class="form-control has-feedback-left" >
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                      </div>


                    </form>
                    </div>
                </div>
                </div>
                </div>


                <a href="javascript:void(0)" id="back" class="btn btn-primary">Back</a>



            </div>  
    </div>
  </div>

        
</div>
</div>
<!-- /page content -->


<?php $this->load->view('admin/template/footer'); ?>


<script>

    $('#back').on('click',function(){
        window.location = "<?= base_url('admin/rate_request')?>";
    });


</script>
