

<?php $this->load->view('admin/template/header'); ?>
 <div class="row">
 
 </div>
 <div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">
     <div class="x_panel">
       <div class="x_title">
         <h2>SHIPMENT  </h2>

         <ul class="nav navbar-right panel_toolbox">
            <?php $type = $this->session->userdata('type');
                if($type == 'origin'){ ?>
                  <a href="javascript:void(0)" onClick="add_data();" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Data</a>
                <?php } ?>
           <a href="javascript:void(0)" onClick="reload_table();" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i> Reload</a>
          
         </ul>
         <div class="clearfix"></div>
       </div>


             <div class="x_content">
                         <table id="table_data" class="table table-sm table-striped table-bordered display compact nowrap" cellpadding="0" cellspacing="0">
                           <thead>
                             <tr>
                               <th width="8px">No</th>
                               <th width="180px">DOCUMENT NUMBER</th>
                               <th>SHIPPER NAME</th>
                               <th>CONSIGNEE NAME</th>
                               <th>ORIGIN</th>
                               <th>DESTINATION</th>
                               <th>METHOD</th>
                               <th width="180px">STATUS</th>
                               <th width="8px">ACTION</th>
                             </tr>
                           </thead>
                         </table>
             </div>  
   </div>

</div>
</div>

<!-- /page content -->


<?php $this->load->view('admin/template/footer'); ?>




                    <div class="modal fade " id="modal-message" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title"> STATUS SHIPMENT</h4>
                        </div>
                        <div class="modal-body">

                        <div id="table_status"></div>

                          <form action="javascript:void(0)"  id="form_message"  method="POST">
                              <div class="form-group">
                                  <label for="">Create new status</label>
                                  <input type="hidden" name="document_number" id="document_number">
                                  <textarea class="form-control form-control-danger" name="message" id="" cols="30" rows="6" required></textarea>
                              </div>
                              <div class="form-group">
                              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>

                                  <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-envelope-square"></i> Send</button>
                              </div>
                          </form>

                        
                        </div>
                        <div class="modal-footer">
                        </div>

                      </div>
                    </div>
                  </div>


<script>


function send_to_email(id){
  Swal.fire({
  title: 'Input Email',
  input: 'email',
  inputAttributes: {
    autocapitalize: 'off'
  },
  showCancelButton: true,
  confirmButtonText: 'Send',
  showLoaderOnConfirm: true,
  preConfirm: (email) => {


    alert(email);
    $.ajax({
      "url":"<?= base_url("admin/delivery_package/send_to_email");?>",
      "type":"POST",
      "data":{"id":id, "email":email},
      "beforeSend":function(){
        // allowOutsideClick: () => !Swal.isLoading();
      },
      "success":function(){
          alert("berhasil");
      }
    });

    // return fetch(`//api.github.com/users/${login}`)
    //   .then(response => {
    //     if (!response.ok) {
    //       throw new Error(response.statusText)
    //     }
    //     return response.json()
    //   })
    //   .catch(error => {
    //     Swal.showValidationMessage(
    //       `Request failed: ${error}`
    //     )
    //   })
  },
  
})
// .then((result) => {
//   if (result.value) {
//     Swal.fire({
//       title: `${result.value.login}'s avatar`,
//       imageUrl: result.value.avatar_url
//     })
//   }
// })


}

function add_data(){
  window.location = "<?= base_url('admin/delivery_package/form') ?>";
}

function update(id){
  window.location = "<?= base_url('admin/delivery_package/form') ?>"+"/"+id;
}

var table;
table = $('#table_data').DataTable({ 
      "processing": true, 
      "serverSide": true, 
      "order": [],
      "ajax": {
      "url": "<?php echo site_url('admin/delivery_package/ajax_list')?>",
      "type": "POST"
      },
     
      "columnDefs": [
          { 
          "targets": [ 0 ], 
          "orderable": false, 
          
          },
      ],
       



});

function reload_table(){
  table.ajax.reload();
  
}


function deletes(id){

  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.value) {
      $.ajax({
          url:"<?= base_url('admin/delivery_package/delete_data') ?>",
          type:"POST",
          data:{"id":id},
          success:function(){

            Swal.fire(
              'Deleted!',
              'Your data has been deleted.',
              'success'
            )
            reload_table();
          },
          });

      
    }
  })
 
}


function cek_status(id){
    $('#modal-status').modal("show");
    $.ajax({
          url:"<?= base_url('admin/delivery_package/get_status') ?>",
          type:"POST",
          data:{"id":id},
          dataType:"json",
          success:function(data){
            $("#modal_title1").text(data.document_number);

            $.ajax({
                  url:"<?= base_url('admin/delivery_package/get_conversation') ?>",
                  type:"POST",
                  data:{"document_number_id":data.shipment_id},
                  success:function(data2){
                    $("#conversation").html(data2);
                  },
            });


            var aku = data.status_id;
            if(aku == "1"){
                $("#satu").css("background","green");
                $("#dua").css("background","");
                $("#tiga").css("background","");
                $("#empat").css("background","");
                $("#lima").css("background","");
            }else if(aku == "2"){
                $("#satu").css("background","green");
                $("#dua").css("background","green");
                $("#tiga").css("background","");
                $("#empat").css("background","");
                $("#lima").css("background","");
            }else if(aku == "3"){
                $("#satu").css("background","green");
                $("#dua").css("background","green");
                $("#tiga").css("background","green");
                $("#empat").css("background","");
                $("#lima").css("background","");
            }else if(aku == "4"){
                $("#satu").css("background","green");
                $("#dua").css("background","green");
                $("#tiga").css("background","green");
                $("#empat").css("background","green");
                $("#lima").css("background","");
            }else if(aku == "5"){
                $("#satu").css("background","green");
                $("#dua").css("background","green");
                $("#tiga").css("background","green");
                $("#empat").css("background","green");
                $("#lima").css("background","green");
                
            }

            $("#date1").text(data.origin_create_pickup_date);
            $("#date2").text(data.origin_send_package_date);
            $("#date3").text(data.transit_process_package_date);
            $("#date4").text(data.transit_send_package_date);
            $("#date5").text(data.consignee_received_date);

            $("#shipper").text(data.shipper_name);
            $("#consignee").text(data.consignee_name);
            $("#shippercode").text(data.origin_code);
            $("#consigneecode").text(data.destination_code);

            $("#carton").text(data.carton);
            $("#commodity").text(data.commodity);
            $("#grossweight").text(data.gross_weight);
            $("#volume").text(data.volume);

            $("#det1").text(data.detail1);
            $("#det2").text(data.detail2);
            $("#det3").text(data.detail3);
            $("#det4").text(data.detail3);
            $("#det5").text(data.detail4);


          },
    });

}

function updateStatus(id,status_id){
  if(status_id == '2'){
    var titl = "Release Shipment?";
    var texs = "Control of the shipment will be transfered to DUBAI Office!";
    var titl2 = "Released";
    var has = "Now status will be controlled by DUBAI Office";
  }else if(status_id == '3'){
    var titl = "Accept Shipment?";
    var texs = "This shipment will accepted by DUBAI transit warehouse!";
    var titl2 = "Accepted";
    var has = "Shipment now is under DUBAI Office Control";

  }else if(status_id == '4'){
    var titl = "Release Shipment?";
    var texs = "Control of the shipment will be transfered to CONSIGNEE Office!";
    var titl2 = "Released";
    var has = "Now status will be controlled by Consignee Office";

  }else if(status_id == '5'){
    var titl = "Accept package?";
    var texs = "This shipment will accepted by Consignee !";
    var titl2 = "Accepted";
    var has = "Shipment now is under CONSIGNEE Office Control";

  }
   Swal.fire({
      title: titl,
      text: texs,
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes'
    }).then((result) => {
      if (result.value) {

        $.ajax({
          url:"<?= base_url('admin/delivery_package/change_status') ?>",
          type:"POST",
          data:{"id":id,"status_id":status_id},
          success:function(data){
            Swal.fire(
                ''+titl2+'',
                ' '+has+'.',
                'success'
              );
              reload_table();
          },
    });


      
      }
    })
}


function create_status(id){
  $("#form_message")[0].reset();
  $('.modal-title').text("SHIPMENT STATUS "+id);
  $('#modal-message').modal("show");
  $('#document_number').val(id);
  
  load_table_status(id);
}



$("#form_message").on("submit",function(){
  $.ajax({
           url:"<?= base_url('admin/delivery_package/send_message') ?>",
           type:"POST",
           data:$("#form_message").serialize(),
           beforeSend:function(){
                $("#table_status").text("Loading ...");
            },
           success:function(data){
                  load_table_status(data);
          },

   });
});



function load_table_status(id){
  $("#form_message")[0].reset();
  $('#document_number').val(id);
  
  $.ajax({
           url:"<?= base_url('admin/delivery_package/get_table_status') ?>",
           type:"POST",
           data:{"document_number":id},
           beforeSend:function(){
            $("#table_status").text("Loading ...");
           },
           success:function(data){
             $("#table_status").html(data);
          },

   });

}


function delete_msg(id,dn_id){
  if(confirm("Delete message")){
    $.ajax({
            url:"<?= base_url('admin/delivery_package/delete_message') ?>",
            type:"POST",
            data:{"conv_id":id},
            beforeSend:function(){
              $("#table_status").text("Loading ...");
            },
            success:function(data){
              load_table_status(dn_id);
            },
    });


  }
}

</script>


                <div class="modal fade " id="modal-status" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="modal_title1"></h4>
                        </div>
                        <div class="modal-body">
                                
                          
                  <ul class="timeline">
                  <div class="row">
                    <div class="col-md-6">
                             <div class="panel panel-default">
                                  <div class="panel-heading">
                                    <p>Description of goods</p>
                                  </div>
                                  <div class="panel-body">
                                  <ul class="list-group">
                                    <li class="list-group-item">Carton <div class="badge" id="carton"></div> </li>
                                    <li class="list-group-item">Commodity <div class="badge" id="commodity"></div></li>
                                    <li class="list-group-item">Gross Weight <div class="badge" id="grossweight"></div></li>
                                    <li class="list-group-item">Volume <div class="badge" id="volume"></div></li>
                                  </ul>
                                  </div>
                                </div>
                    </div>
                    <div class="col-md-6">
                            <div class="panel panel-default">
                                  <div class="panel-heading">
                                    <p>Vessel / Flight Detail</p>
                                  </div>
                                  <div class="panel-body">
                                  <ul class="list-group">
                                    <li class="list-group-item" id="det1"> </li>
                                    <li class="list-group-item" id="det2"></li>
                                    <li class="list-group-item" id="det3"></li>
                                    <li class="list-group-item" id="det4"></li>
                                    <li class="list-group-item" id="det5"></li>
                                  </ul>

                                  </div>
                                </div>
                    </div>
                  </div>
                  <li><div class="tldate">Shipment</div></li>

                  <div class="row">
                    <div class="col-md-6">
                             <div class="panel panel-default">
                                  <div class="panel-heading">
                                    <p>Shipper</p>
                                  </div>
                                  <div class="panel-body">
                                    <h5 id="shipper"></h5><small id="shippercode"></small>
                                  </div>
                                </div>
                    </div>
                    <div class="col-md-6">
                            <div class="panel panel-default">
                                  <div class="panel-heading">
                                    <p>Consignee</p>
                                  </div>
                                  <div class="panel-body">
                                  <h5 id="consignee"></h5><small id="consigneecode"></small>

                                  </div>
                                </div>
                    </div>
                  </div>

                  <li><div class="tldate">Track and Trace</div></li>
                      
                      
                      <div id="conversation"></div>
                             
                      
                      
                      
                      </ul>

                                                  
                                                  
                        
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>

                      </div>
                    </div>
                  </div>


                  <style>
                  .timeline {
                      list-style: none;
                      padding: 20px 0 20px;
                      position: relative;
                    }

                    .timeline:before {
                      top: 0;
                      bottom: 0;
                      position: absolute;
                      content: " ";
                      width: 3px;
                      background-color: #eee;
                      left: 50%;
                      margin-left: -1.5px;
                    }

                    .tldate {
                      display: block;
                      width: 200px;
                      background: #414141;
                      border: 3px solid #212121;
                      color: #ededed;
                      margin: 0 auto;
                      padding: 3px 0;
                      font-weight: bold;
                      text-align: center;
                      -webkit-box-shadow: 0 0 11px rgba(0,0,0,0.35);
                    }

                    .timeline li {
                      margin-bottom: 25px;
                      position: relative;
                    }

                    .timeline li:before, .timeline li:after {
                      content: " ";
                      display: table;
                    }
                    .timeline li:after {
                      clear: both;
                    }
                    .timeline li:before, .timeline li:after {
                      content: " ";
                      display: table;
                    }

                    /** timeline panels **/
                    .timeline li .timeline-panel {
                      width: 46%;
                      float: left;
                      background: #fff;
                      border: 1px solid #d4d4d4;
                      padding: 20px;
                      position: relative;
                      -webkit-border-radius: 8px;
                      -moz-border-radius: 8px;
                      border-radius: 8px;
                      -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.15);
                      -moz-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.15);
                      box-shadow: 0 1px 6px rgba(0, 0, 0, 0.15);
                    }

                    /** panel arrows **/
                    .timeline li .timeline-panel:before {
                      position: absolute;
                      top: 26px;
                      right: -15px;
                      display: inline-block;
                      border-top: 15px solid transparent;
                      border-left: 15px solid #ccc;
                      border-right: 0 solid #ccc;
                      border-bottom: 15px solid transparent;
                      content: " ";
                    }

                    .timeline li .timeline-panel:after {
                      position: absolute;
                      top: 27px;
                      right: -14px;
                      display: inline-block;
                      border-top: 14px solid transparent;
                      border-left: 14px solid #fff;
                      border-right: 0 solid #fff;
                      border-bottom: 14px solid transparent;
                      content: " ";
                    }
                    .timeline li .timeline-panel.noarrow:before, .timeline li .timeline-panel.noarrow:after {
                      top:0;
                      right:0;
                      display: none;
                      border: 0;
                    }

                    .timeline li.timeline-inverted .timeline-panel {
                      float: right;
                    }

                    .timeline li.timeline-inverted .timeline-panel:before {
                      border-left-width: 0;
                      border-right-width: 15px;
                      left: -15px;
                      right: auto;
                    }

                    .timeline li.timeline-inverted .timeline-panel:after {
                      border-left-width: 0;
                      border-right-width: 14px;
                      left: -14px;
                      right: auto;
                    }


                    /** timeline circle icons **/
                    .timeline li .tl-circ {
                      position: absolute;
                      top: 23px;
                      left: 50%;
                      text-align: center;
                      background: #6a8db3;
                      color: #fff;
                      width: 35px;
                      height: 35px;
                      line-height: 35px;
                      margin-left: -16px;
                      border: 3px solid #90acc7;
                      border-top-right-radius: 50%;
                      border-top-left-radius: 50%;
                      border-bottom-right-radius: 50%;
                      border-bottom-left-radius: 50%;
                      z-index: 99999;
                    }


                    /** timeline content **/

                    .tl-heading h4 {
                      margin: 0;
                      color: #c25b4e;
                    }

                    .tl-body p, .tl-body ul {
                      margin-bottom: 0;
                    }

                    .tl-body > p + p {
                      margin-top: 5px;
                    }

                    /** media queries **/
                    @media (max-width: 991px) {
                      .timeline li .timeline-panel {
                        width: 44%;
                      }
                    }

                    @media (max-width: 700px) {
                      .page-header h1 { font-size: 1.8em; }
                      
                      ul.timeline:before {
                        left: 40px;
                      }
                      
                      .tldate { width: 140px; }

                      ul.timeline li .timeline-panel {
                        width: calc(100% - 90px);
                        width: -moz-calc(100% - 90px);
                        width: -webkit-calc(100% - 90px);
                      }

                      ul.timeline li .tl-circ {
                        top: 22px;
                        left: 22px;
                        margin-left: 0;

                      }
                      ul.timeline > li > .tldate {
                        margin: 0;
                      }

                      ul.timeline > li > .timeline-panel {
                        float: right;
                      }

                      ul.timeline > li > .timeline-panel:before {
                        border-left-width: 0;
                        border-right-width: 15px;
                        left: -15px;
                        right: auto;
                      }

                      ul.timeline > li > .timeline-panel:after {
                        border-left-width: 0;
                        border-right-width: 14px;
                        left: -14px;
                        right: auto;
                      }
                    }
                  
                  
                  </style>


<script>
       
    
    </script>