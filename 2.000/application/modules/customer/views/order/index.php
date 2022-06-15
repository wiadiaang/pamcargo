<style type="text/css">
   .overlay-hitam {
   z-index: 1;display: block;position: absolute;height: 100%;top: 0;left: 0;right: 0;background: rgba(0, 0, 0, 0.5);
   }
   .content-name {
   position: absolute;bottom:5%;left: 8%;transform: translate(-8%,0);z-index: 5;
   }
   .content-name h3 {
   color: #fff;
   font-weight: 400;
   }
   .content-spot {
   background: rgba(0,172,227,0.5);
   position: absolute;top:0;right: 0;z-index: 5;
   padding: 5px 15px 5px 15px;
   text-align: right;
   }
   .content-spot h3 {
   color: #fff;
   font-weight: 400;
   }
   .gm-style-mtc {
   display: none;
   }
   #map_canvas {
   width: 100%;
   height: 500px;
   }
   #searchInput {
   background-color: #fff;
   font-family: Roboto;
   font-size: 15px;
   font-weight: 300;
   margin-left: 12px;
   padding: 0 11px 0 13px;
   text-overflow: ellipsis;
   width: 80%;
   }
   #searchInput:focus {
   border-color: #4d90fe;
   }
   #current {
   padding-top: 25px;
   }
   .controls {
   margin-top: 10px;
   border: 1px solid transparent;
   border-radius: 2px 0 0 2px;
   box-sizing: border-box;
   -moz-box-sizing: border-box;
   height: 32px;
   outline: none;
   box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
   }
</style>
<div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Order</h1>
                        </div>
                        <div class="page-toolbar">
                            <!-- BEGIN THEME PANEL -->
                        </div>
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>admin/Dashboard"><?php echo $this->lang->line('home'); ?></a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Order</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-users font-dark"></i>
                                        <span class="caption-subject bold uppercase">Order</span>
                                    </div>
                                    <div class="tools">

                                    </div>
                                </div>
                                <div class="portlet-body">
                                       <form>
                                           
                                                <div class="form-group">
                                                    <label >From</label>
                                                    <select name="prop" id="prop" onchange="ajaxkota(this.value)" class="form-control">
                                                    <?php 
                                                            foreach($provinsi as $row){
                                                            ?>
                                                                <option value="<?php echo $row->province_id; ?>"><?php echo $row->name; ?></option>
                                                            <?php } ?>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label >To</label>
                                                    <select name="prop2" id="prop2" onchange="ajaxkota2(this.value)" class="form-control">
                                                            <?php 
                                                                foreach($provinsi as $row){
                                                            ?>
                                                                    <option value="<?php echo $row->province_id; ?>"><?php echo $row->name; ?></option>
                                                            <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-6">
                                                        <div class="caption font-dark"> 
                                                            <span class="caption-subject bold uppercase">Pengirim/Sender</span>
                                                        </div>
                                                        <hr>

                                                        <div class="form-group">
                                                            <label >Nama Pengirim (Sender Name)*</label>
                                                            <input type="text" name="sender_name" class="form-control" placeholder="Nama Lengkap Pengirim"> 
                                                        </div>

                                                        <div class="form-group">
                                                            <label >Email</label>
                                                            <input type="email" name="sender_email" class="form-control" placeholder="Email Pengirim"> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label >Telepon (Phone)*</label>
                                                            <input type="text" name="sender_phone" class="form-control" placeholder="Telepon Pengirim"> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label >Alamat (Address)*</label>
                                                            <textarea class="form-control" name="sender_address" placeholder="Alamat Pengirim"> </textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label >Nama Gedung/Kompleks*</label>
                                                            <input type="text" name="sender_gedung_kompleks" class="form-control" placeholder="Nama Gedung/Kompleks Pengirim"> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label >Lokasi Detail Gedung/Kompleks*</label>
                                                            <textarea class="form-control" name="sender_address_gedung_kompleks" placeholder="Lokasi Detail Gedung/Kompleks Pengirim"> </textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label  class="control-label"><i class="fa fa-map-marker icon text-default-lter"></i>&nbsp;Kota/Kab <span class="required-field">*</span></label>
                                                            <select name="kota" class="form-control" id="kota" onchange="ajaxkec(this.value)">
                                                                <option value="">Pilih Kota</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label  class="control-label"><i class="fa fa-map-marker icon text-default-lter"></i>&nbsp;Kecamatan <span class="required-field">*</span></label>
                                                            <select name="kec" id="kec" class="form-control" onchange="ajaxkel(this.value)">
                                                                <option value="">Pilih Kecamatan</option>
                                                            </select>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label  class="control-label"><i class="fa fa-map-marker icon text-default-lter"></i>&nbsp;Kelurahan/Desa <span class="required-field">*</span></label>
                                                            <select name="kel" class="form-control" id="kel" onchange="showCoordinate();">
                                                                <option value="">Pilih Kelurahan/Desa</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label  class="control-label"><i class="fa fa-map-marker icon text-default-lter"></i>&nbsp;Kode Pos (Postal Code)* <span class="required-field">*</span></label>
                                                            <input type="text" name="sender_postal_code" id="postal_code" class="form-control" placeholder="Kode Pos (Postal Code)"> 
                                                        </div>
                                                        <input type='hidden' class="form-control" name="lat_sender" id='lat' readonly>
                                                        <input type='hidden' class="form-control" name="lng_sender" id='lng' readonly>
                                                      
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="caption font-dark"> 
                                                            <span class="caption-subject bold uppercase">Penerima/Consignee</span>
                                                        </div>
                                                        <hr>

                                                        <div class="form-group">
                                                            <label >Nama Pengirim (Consignee Name)*</label>
                                                            <input type="text" name="consignee_name" class="form-control" placeholder="Nama Lengkap Pengirim"> 
                                                        </div>

                                                        <div class="form-group">
                                                            <label >Email</label>
                                                            <input type="email" name="sender_email" class="form-control" placeholder="Email Pengirim"> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label >Telepon (Phone)*</label>
                                                            <input type="text" name="consignee_phone" class="form-control" placeholder="Telepon Pengirim"> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label >Alamat (Address)*</label>
                                                            <textarea class="form-control" name="consignee_address" placeholder="Alamat Pengirim"> </textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label >Nama Gedung/Kompleks*</label>
                                                            <input type="text" name="consignee_gedung_kompleks" class="form-control" placeholder="Nama Gedung/Kompleks Pengirim"> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label >Lokasi Detail Gedung/Kompleks*</label>
                                                            <textarea class="form-control" name="consignee_address_gedung_kompleks" placeholder="Lokasi Detail Gedung/Kompleks Pengirim"> </textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label  class="control-label"><i class="fa fa-map-marker icon text-default-lter"></i>&nbsp;Kota/Kab <span class="required-field">*</span></label>
                                                            <select name="kota_receive" class="form-control" id="kota2" onchange="ajaxkec2(this.value)">
                                                                <option value="">Pilih Kota</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label  class="control-label"><i class="fa fa-map-marker icon text-default-lter"></i>&nbsp;Kecamatan <span class="required-field">*</span></label>
                                                            <select name="kec_receive" id="kec2" class="form-control" onchange="ajaxkel2(this.value)">
                                                                <option value="">Pilih Kecamatan</option>
                                                            </select>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label  class="control-label"><i class="fa fa-map-marker icon text-default-lter"></i>&nbsp;Kelurahan/Desa <span class="required-field">*</span></label>
                                                            <select name="kel_receive" class="form-control" id="kel2" onchange="showCoordinate2();">
                                                                <option value="">Pilih Kelurahan/Desa</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label  class="control-label"><i class="fa fa-map-marker icon text-default-lter"></i>&nbsp;Kode Pos (Postal Code)* <span class="required-field">*</span></label>
                                                            <input type="text" name="postal_code_receive" id="postal_code2ss" class="form-control" placeholder="Kode Pos (Postal Code)"> 
                                                        </div>
                                                        <input type='hidden' class="form-control" name="lat_receive" id='lat2' readonly>
                                                        <input type='hidden' class="form-control" name="lng_receive" id='lng2' readonly>
                                                        
                                                    </div>
                                                </div>

                                                <div class="col-md-12" >
                                                    <div class="caption font-dark"> 
                                                        <span class="caption-subject bold uppercase">Informasi Pengiriman/Shipping Information</span>
                                                    </div>
                                                        <hr>
                                                    <div class="col-md-4 form-group">
                                                        <label class="control-label">Barang (Goods)*</label>
                                                        <select name="code_goods" class="form-control">
                                                            <option>Pilih Barang</option>
                                                            <?php foreach($barang as $row){ ?>
                                                                <option value="<?php echo $row->code_goods; ?>"><?php echo $row->code_goods; ?> - <?php echo $row->name_goods1; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <label class="control-label">Jumlah Barang (Qty)*</label>
                                                        <input type="number" class="form-control" name="qty" placeholder="Qty">
                                                    </div>

                                                    <div class="col-md-4 form-group">
                                                        <label class="control-label">Nilai Barang (Goods Value)*</label>
                                                        <input type="number" class="form-control" name="googs_value" placeholder="Nilai Barang (Goods Value)">
                                                    </div>
                                                    <div class="col-sm-3 form-group">
                                                        <label  class="control-label">Weight<span class="required-field">*</span></label>
                                                        <input name="weight" type="text" class="form-control" id="parcel_weight_1" value="" onblur="ShowTotalParcelWeightAmountList(document.booking_shipment_first_step)" onkeyup="checkMaximumValueForBookingFirstStep(this.value,'weight',1)" placeholder="  Kg" onclick="clear_weight()">
                                                    </div>
                                                    
                                                    <div class="col-sm-3 form-group">
                                                        <label  class="control-label">Length<span class="required-field">*</span></label>
                                                        <input name="lenght" class="form-control" type="text" id="parcel_girth_1" value="" onkeyup="checkMaximumValueForBookingFirstStep(this.value,'girth',1)" onclick="clear_girth()" placeholder="  Length in cm">
                                                    </div>
                                                    
                                                    <div class="col-sm-3 form-group">
                                                        <label  class="control-label">Width<span class="required-field">*</span></label>
                                                        <input name="width" class="form-control" type="text" id="parcel_width_1" value="" onkeyup="checkMaximumValueForBookingFirstStep(this.value,'width',1)" onclick="clear_width()" placeholder="  Width in cm">
                                                    </div>
                                                    
                                                    <div class="col-sm-3 form-group">
                                                        <label class="control-label">Height<span class="required-field">*</span></label>
                                                        <input name="height" class="form-control" type="text" id="parcel_height_1" value="" onclick="clear_height()" onkeyup="checkMaximumValueForBookingFirstStep(this.value,'height',1)" placeholder="  Height in cm">
                                                        <input name="parcel_contents_1" id="parcel_contents_1" type="hidden">
                                                    </div>
                                                </div>

                                                <input type="hidden" id="mpstype" value="0">
                                                <a href="javascript:void(0)" id="show_map" class="btn btn-info">Show Map</a> <a href="javascript:void(0)" id="hide_map" style="display:none;" class="btn btn-danger">Hide Map</a>
                                                <div class="col-md-12" id="divmap" >
                                                    <input id="searchInput" class="controls" type="text" placeholder="Enter a location">
                                                    <div id='map_canvas'></div>
                                                    <div id="current">
                                                        <p>Marker dropped: Current Lat:-6.360 Current Lng:107.081</p>
                                                    </div>
                                                </div>

                                                <div class="form-group" style="margin-top:50px;">               
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                        </form>
                                    
                                   
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAWE8BwPOPM7rjec74EZ1E1OjEqT25HQJk&sensor=false&libraries=places"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>daerah/ajax_daerah2.js"></script>

<script type="text/javascript">
$("#divmap").slideUp();
var markersArray = [];
   var map = new google.maps.Map(document.getElementById('map_canvas'), {
     zoom: 5,
     center: new google.maps.LatLng(-6.360, 107.081),
     mapTypeId: google.maps.MapTypeId.ROADMAP
   });
   
   var input = document.getElementById('searchInput');
       map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
   
       var autocomplete = new google.maps.places.Autocomplete(input);
       autocomplete.bindTo('bounds', map);
       var infowindow = new google.maps.InfoWindow();
   
   
   var myMarker = new google.maps.Marker({
     position: new google.maps.LatLng(-6.360, 107.081),
     draggable: true
   });
   markersArray.push(myMarker);
   
   google.maps.event.addListener(myMarker, 'dragend', function(evt) {
     document.getElementById('current').innerHTML = '<p>Marker dropped: Current Lat: ' + evt.latLng.lat().toFixed(3) + ' Current Lng: ' + evt.latLng.lng().toFixed(3) + '</p>';
   });
   google.maps.event.addListener(myMarker, 'dragstart', function(evt) {
     document.getElementById('current').innerHTML = '<p>Currently dragging marker...</p>';
   });
   map.setCenter(myMarker.position);
   myMarker.setMap(map);
   
   function getLocation() {
     if (navigator.geolocation) {
       navigator.geolocation.getCurrentPosition(showPosition);
     } else {
       x.innerHTML = "Geolocation is not supported by this browser.";
     }
   }
   
   function showPosition(position) {
       
     document.getElementById('current').innerHTML = '<p>Marker dropped: Current Lat: ' + position.coords.latitude + ' Current Lng: ' + position.coords.longitude + '</p>';
     var myMarker = new google.maps.Marker({
       position: new google.maps.LatLng(position.coords.latitude, position.coords.longitude),
       draggable: true
     });

     markersArray.push(myMarker);
     
     google.maps.event.addListener(myMarker, 'dragend', function(evt) {
       geocodePosition(myMarker.getPosition());
       var check = $("#mpstype").val();
       if(check == "1"){
        document.getElementById("lat").value=evt.latLng.lat().toFixed(3);
        document.getElementById("lng").value=evt.latLng.lng().toFixed(3);
       }else if(check == "2")
       {
        document.getElementById("lat2").value=evt.latLng.lat().toFixed(3);
        document.getElementById("lng2").value=evt.latLng.lng().toFixed(3);
       } 
       document.getElementById('current').innerHTML = '<p>Marker dropped: Current Lat: ' + evt.latLng.lat().toFixed(3) + ' Current Lng: ' + evt.latLng.lng().toFixed(3) + '</p>';
     });
     google.maps.event.addListener(myMarker, 'dragstart', function(evt) {
       document.getElementById('current').innerHTML = '<p>Currently dragging marker...</p>';
     });
     map.setCenter(myMarker.position);
     map.setZoom(17);
     myMarker.setMap(map);
   }
   
   function geocodePosition(pos) {
     geocoder.geocode({
       latLng: pos
     }, function(responses) {
       if (responses && responses.length > 0) {
           document.getElementById('searchInput').value = responses[0].formatted_address;
       } else {
           document.getElementById('searchInput').value = "Cannot determine address at this location";
       }
     });
   }
   
   autocomplete.addListener('place_changed', function() {
           infowindow.close();
           myMarker.setVisible(false);
           var place = autocomplete.getPlace();
           if (!place.geometry) {
               window.alert("Autocomplete's returned place contains no geometry");
               return;
           }
     
           // If the place has a geometry, then present it on a map.
           if (place.geometry.viewport) {
               map.fitBounds(place.geometry.viewport);
           } else {
               map.setCenter(place.geometry.location);
               map.setZoom(17);
           }
           // myMarker.setIcon(({
           //     url: place.icon,
           //     size: new google.maps.Size(71, 71),
           //     origin: new google.maps.Point(0, 0),
           //     anchor: new google.maps.Point(17, 34),
           //     scaledSize: new google.maps.Size(35, 35)
           // }));
           myMarker.setPosition(place.geometry.location);
           myMarker.setVisible(true);
       
           var address = '';
           if (place.address_components) {
               address = [
                 (place.address_components[0] && place.address_components[0].short_name || ''),
                 (place.address_components[1] && place.address_components[1].short_name || ''),
                 (place.address_components[2] && place.address_components[2].short_name || '')
               ].join(' ');
           }
       	map.setOptions({draggable: true});
           infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
           infowindow.open(map, myMarker);
         
           //Location details
           for (var i = 0; i < place.address_components.length; i++) {
               if(place.address_components[i].types[0] == 'postal_code'){
                   // document.getElementById('postal_code').innerHTML = place.address_components[i].long_name;
               }
               if(place.address_components[i].types[0] == 'country'){
                   // document.getElementById('country').innerHTML = place.address_components[i].long_name;
               }
           }
           var check = $("#mpstype").val();
            if(check == "1"){
                document.getElementById("lat").value=place.geometry.location.lat();
                document.getElementById("lng").value=place.geometry.location.lng();
            }else if(check == "2")
            {
                document.getElementById("lat2").value=place.geometry.location.lat();
                document.getElementById("lng2").value=place.geometry.location.lng();
            } 
           // document.getElementById('location').value = place.formatted_address;
           // document.getElementById('lat').value = place.geometry.location.lat();
           // document.getElementById('lon').value = place.geometry.location.lng();
       });
function clearOverlays() {
  for (var i = 0; i < markersArray.length; i++ ) {
    markersArray[i].setMap(null);
  }
  markersArray.length = 0;
}
</script>

<script>

$( "#show_map" ).click(function() {
 
   $("#divmap").slideDown();
  $("#hide_map").slideDown();
  $("#show_map").slideUp();
});

$( "#hide_map" ).click(function() {
 
 $("#divmap").slideUp();
$("#hide_map").slideUp();
$("#show_map").slideDown();
});
</script>


             

