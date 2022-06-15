<?php $this->load->view('admin/template/header'); ?>


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.css"></script> -->

        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>SHIPMENT GENERAL INFORMATION </h2>
                    <ul class="nav navbar-right panel_toolbox"></ul>
                    <div class="clearfix"></div>
                  </div>
                        <div class="x_content">

                        <form id="form_data" class="form-horizontal form-label-left" method="POST"  enctype="multipart/form-data">

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" >DOCUMENT NUMBER<span class="required"></span>
                            </label>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <input type="hidden" name="shipment_id" id="shipment_id" value="" class="form-control col-md-7 col-xs-12" >
                                <input type="text"  name="document_number" maxlength="15" required value="" class="form-control col-md-7 col-xs-12 " >
                            </div>
                            </div>


                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" >SHIPPER NAME<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text"  required name="shipper_name" value="" class="form-control col-md-7 col-xs-12" >
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" >CONSIGNEE NAME<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text"  required name="consignee_name" value="" class="form-control col-md-7 col-xs-12" >
                            </div>
                            </div>

                            
                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" >ORIGIN<span class="required"></span>
                            </label>
                            <div class="col-md-3 col-sm-3 col-xs-12">

                                <select id="origin" name="origin"  class="form-control col-md-7 col-xs-12 " >
                                       <option value="">Origin</option>
                                </select>
                            </div>

                            <div class="col-md-1 col-sm-1 col-xs-1">
                                <label for="">Code </label>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-12">
                                <input type="text" name="origin_code" class="form-control">
                            </div>


                            </div>

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" >Destination<span class="required"></span>
                            </label>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <select id="destination" name="destination"  class="form-control col-md-7 col-xs-12 " >
                                       <option value="">Destination</option>
                                </select>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-1">
                                <label for="">Code </label>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-12">
                                <input type="text" name="destination_code" class="form-control">
                            </div>





                            </div>

                           

                          
                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" >METHOD<span class="required"></span>
                            </label>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                                <select name="method" id="method" class="form-control col-md-2 col-xs-12">
                                  <option value="AIR FREIGHT">AIR FREIGHT</option>
                                  <option value="SEA FREIGHT">SEA FREIGHT</option>
                                  <option value="SEA AIR">SEA AIR</option>
                                </select>
                            </div>
                            </div>


                            <div class="x_title">
                              <h2>DESCRIPTION OF GOODS </h2>
                              <ul class="nav navbar-right panel_toolbox"></ul>
                              <div class="clearfix"></div>
                           </div>

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" >CARTON<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="carton" required value="" class="form-control col-md-7 col-xs-12" >
                            </div>
                            </div>

                            
                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" >COMMODITY<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="commodity" required value="" class="form-control col-md-7 col-xs-12" >
                            </div>
                            </div>
                            
                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" >GROSS WEIGHT<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="gross_weight" required value="" class="form-control col-md-7 col-xs-12" >
                            </div>
                            </div>


                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" >VOLUME<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="volume" required value="" class="form-control col-md-7 col-xs-12" >
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" >NOTE<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea name="note"  cols="30" rows="5" class="form-control col-md-7 col-xs-12" id="note" ></textarea>
                            </div>
                            </div>


    
                            <div class="x_title">
                              <h2>VESSEL / FLIGHT DETAIL </h2>
                              <ul class="nav navbar-right panel_toolbox"></ul>
                              <div class="clearfix"></div>
                           </div>

                           <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" ><span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="detail1"  value="" class="form-control col-md-7 col-xs-12" >
                            </div>
                            </div>

                           <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" ><span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="detail2"  value="" class="form-control col-md-7 col-xs-12" >
                            </div>
                            </div>

                           <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" ><span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="detail3"  value="" class="form-control col-md-7 col-xs-12" >
                            </div>
                            </div>

                           <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" ><span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="detail4"  value="" class="form-control col-md-7 col-xs-12" >
                            </div>
                            </div>

                           <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12" ><span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="detail5"  value="" class="form-control col-md-7 col-xs-12" >
                            </div>
                            </div>


                            <div class="ln_solid"></div>
                            <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <a href="javascript:void(0)" id="backTable" class="btn btn-danger btn-sm" ><i class="fa fa-close"></i> Cancel</a>
                                <button id="btn_save" class="btn btn-success btn-sm"><i class="fa fa-check "></i> Save</button>
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
    $type = $this->session->userdata("type"); 
    if($type == 'transit' || $type == 'consignee'){ ?>

          $("input[name='document_number']").attr("disabled","");
          $("input[name='shipper_name']").attr("disabled","");
          $("input[name='consignee_name']").attr("disabled","");
          $("#origin").attr("disabled","");
          $("#destination").attr("disabled","");
          $("input[name='origin_code']").attr("disabled","");
          $("input[name='destination_code']").attr("disabled","");
          $("#method").attr("disabled","");

          $("input[name='carton']").attr("disabled","");
          $("input[name='commodity']").attr("disabled","");
          $("input[name='gross_weight']").attr("disabled","");
          $("input[name='volume']").attr("disabled","");
          $("#note").attr("disabled","");

   <?php }
?>


$("#menu_shipment").addClass("active");

$("#shipment_id").val("<?= isset($data->shipment_id) ? $data->shipment_id : ''?>");
$("#vehicle").val("<?= isset($data->vehicle) ? $data->vehicle : 'By Plane'?>");

CKEDITOR.replace( 'editor1' );
$('#backTable').on('click',function(){
    window.location = "<?= base_url('admin/delivery_package') ?>";
}); 
$('#btn_save').click(function(){
          var userfile = $('#userfile').val();
                $('#form_data').ajaxForm({
                  url:"<?php echo base_url('admin/delivery_package/save_delivery_package')?>",
                  type: 'POST',
                  data:{"userfile":userfile},
                  success: function(resp) {
                    if(resp == 'dn'){
                      alert("Document number has used ");
                    }else{
                      window.location = "<?= base_url('admin/delivery_package') ?>";

                    }
                  },
              });   
    
    });

    $.ajax({
        url:"<?php echo base_url('admin/delivery_package/get_consignee')?>",
        type: 'POST',
        success: function(data) {
            $("#consignee").html(data);
        },
    });   

    var origin = "<?= isset($data->origin) ? $data->origin : ''?>";
    $.ajax({
        url:"<?php echo base_url('admin/delivery_package/get_country')?>",
        type: 'POST',
        data:{"origin":origin},
        success: function(data) {
            $("#origin").html(data);
        },
    });   
    $.ajax({
        url:"<?php echo base_url('admin/delivery_package/get_country')?>",
        type: 'POST',
        data:{"origin":"<?= isset($data->destination) ? $data->destination : ''?>"},
        success: function(data) {
            $("#destination").html(data);
        },
    });   
    var dn = "<?= isset($data->shipment_id) ? $data->shipment_id : ''?>";
    $.ajax({
        url:"<?php echo base_url('admin/delivery_package/get_shipment')?>",
        type: "POST",
        dataType: "JSON",
        data:{"document_number":dn},
        success: function(data) {
          $("input[name='document_number']").val(data.document_number);
          $("input[name='shipper_name']").val(data.shipper_name);
          $("input[name='consignee_name']").val(data.consignee_name);
          $("input[name='origin']").val(data.origin);
          $("input[name='destination']").val(data.destination);
          $("input[name='origin_code']").val(data.origin_code);
          $("input[name='destination_code']").val(data.destination_code);
          $("#method").val(data.method);
        }
    });   

    $.ajax({
        url:"<?php echo base_url('admin/delivery_package/get_description')?>",
        type: "POST",
        dataType: "JSON",
        data:{"document_number":"<?= isset($document_number) ? $document_number : ''?>"},
        success: function(data) {
          $("input[name='carton']").val(data.carton);
          $("input[name='commodity']").val(data.commodity);
          $("input[name='gross_weight']").val(data.gross_weight);
          $("input[name='volume']").val(data.volume);
          $("#note").text(data.note);
        
        }
    });   

    $.ajax({
        url:"<?php echo base_url('admin/delivery_package/get_vfd')?>",
        type: "POST",
        dataType: "JSON",
        data:{"document_number":"<?= isset($document_number) ? $document_number : ''?>"},
        success: function(data) {
          $("input[name='detail1']").val(data.detail1);
          $("input[name='detail2']").val(data.detail2);
          $("input[name='detail3']").val(data.detail3);
          $("input[name='detail4']").val(data.detail4);
          $("input[name='detail5']").val(data.detail5);
        }
    });   

</script>

