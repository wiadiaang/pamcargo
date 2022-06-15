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
            <h1></h1>
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
            <span class="active"></span>
         </li>
      </ul>
      <div class="row">
         <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
               <div class="portlet-title">
                  <div class="caption font-dark">
                     <i class="icon-users font-dark"></i>
                     <span class="caption-subject bold uppercase">Maps</span>
                  </div>
                  <div class="tools">
                     <div class="btn-group">
                     </div>
                  </div>
               </div>
               <div class="portlet-body">
                  <div class="form-group">
                     <label >From</label>
                     <select name="prop" onchange="ajaxkota(this.value)" id="prop" class="form-control">
                        <?php 
                           foreach($provinsi as $row){
                           ?>
                        <option value="<?php echo $row->province_id; ?>"><?php echo $row->name; ?></option>
                        <?php } ?>
                     </select>
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
                  <input type='hidden' class="form-control" name="lat_sender" id='lat' readonly>
                  <input type='hidden' class="form-control" name="lng_sender" id='lng' readonly>
                  <input id="searchInput" class="controls" type="text" placeholder="Enter a location">
                  <div id='map_canvas'></div>
                  <div id="current">
                     <p>Marker dropped: Current Lat:18.103 Current Lng:80.274</p>
                  </div>
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
     
     google.maps.event.addListener(myMarker, 'dragend', function(evt) {
       geocodePosition(myMarker.getPosition());
       document.getElementById('current').innerHTML = '<p>Marker dropped: Current Lat: ' + evt.latLng.lat().toFixed(3) + ' Current Lng: ' + evt.latLng.lng().toFixed(3) + '</p>';
     });
     google.maps.event.addListener(myMarker, 'dragstart', function(evt) {
       document.getElementById('current').innerHTML = '<p>Currently dragging marker...</p>';
     });
     map.setCenter(myMarker.position);
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
           // document.getElementById('location').value = place.formatted_address;
           // document.getElementById('lat').value = place.geometry.location.lat();
           // document.getElementById('lon').value = place.geometry.location.lng();
       });
  
</script>