<table class="table table-xs table-bordered">
    <thead>
        <td>Name</td>
        <td>Country</td>
        <td>User</td>
        <td>Subject</td>
        <td>Content</td>
        <td>Action</td>
    </thead>
    <tbody>
    <?php foreach($users as $key){?>
    <tr>
        <td><?= $key->name_pt; ?></td>
        <td><?= $key->country; ?></td>
        <td><?= $key->level; ?></td>
        <td><?= $key->subject; ?></td>
        <td><?= $key->content; ?></td>
        <td>
        <?php 
        if($key->user_link == ""){?>
        <a href="javascript:void(0)" onClick="send('<?= $key->name_pt; ?>','<?= $master_id;?>','<?= $key->user_id;?>')" class="btn btn-xs btn-primary"><i class='fa fa-paper-plane'></i> Send</a></td>
       <?php }else{
           echo "Sent";
          }
         ?>
    </tr>
    <?php } ?>
    </tbody>

</table>

<script>

$('#subject').val();
$('#content').val();

function send(name_pt,master_id,user_id){
        var subject = $('#subject').val();
        var content = $('#content').val();
        <?php
		 $type = $this->session->userdata('type');
		if($type == 'admin'){  
			$text2 = "This will send to superadmin ";
		}else{
			$text2 = "This will send to consignee ";

		} ?>
            Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    html: '<strong><?= $text2 ?></strong> .',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Send it!'
                    }).then((result) => {
                    if (result.value) {

                         $.ajax({
                            url:"<?= base_url('admin/booking/sendBooking'); ?>",
                            type:"POST",
                            data:{"master_id":master_id,"user_id":user_id},
                            data : $('#form_sending_booking').serialize() + "&master_id=" +master_id+ "&user_id=" +user_id,
                            beforeSend:function(){
                                Swal.fire({
                                title: 'Please wait ...',
                                html: 'Process <strong></strong> .',
                                timer: 10000,
                                onBeforeOpen: () => {
                                    Swal.showLoading()
                                    timerInterval = setInterval(() => {
                                    Swal.getContent().querySelector('strong')
                                        .textContent = Swal.getTimerLeft()
                                    }, 100)
                                },
                                onClose: () => {
                                    clearInterval(timerInterval)
                                }
                                });
                            },
                            success:function(){
                                Swal.fire({
                                type: 'success',
                                title: 'Your data sent',
                                showConfirmButton: false,
                                timer: 1500
                                })
                                linkto(master_id,'<?= $consignee_id ?>');
                                reload_table();
                            },
                        });
                       
                    }
                    })

}
    // function send(name_pt,master_id,user_id){

    //     Swal.mixin({
    //     input: 'text',
    //     confirmButtonText: 'Next &rarr;',
    //     showCancelButton: true,
    //     progressSteps: ['1', '2', '3']
    //     }).queue([
    //     {
    //         title: 'Field 1'
    //     },
    //     'Field 2',
    //     'Field 3'
    //     ]).then((result) => {
    //     if (result.value ) {

    //         if(result.value['0'] == ''){
    //             Swal.fire({
    //             type: 'error',
    //             title: 'Oops...',
    //             text: 'Field 1 empty !'
    //             })
    //         }
    //         else if(result.value['1'] == ''){
    //             Swal.fire({
    //             type: 'error',
    //             title: 'Oops...',
    //             text: 'Field 2 empty !'
    //             })
    //         }
    //         else if(result.value['2'] == ''){
    //             Swal.fire({
    //             type: 'error',
    //             title: 'Oops...',
    //             text: 'Field 3 empty !'
    //             })
    //         }else {
    //             Swal.fire({
    //                 title: 'Are you sure?',
    //                 text: "You won't be able to revert this!",
    //                 type: 'warning',
    //                 showCancelButton: true,
    //                 confirmButtonColor: '#3085d6',
    //                 cancelButtonColor: '#d33',
    //                 confirmButtonText: 'Yes, Send it!'
    //                 }).then((result) => {
    //                 if (result.value) {

    //                      $.ajax({
    //                         url:"<?= base_url('admin/booking/sendBooking'); ?>",
    //                         type:"POST",
    //                         data:{"master_id":master_id,"user_id":user_id},
    //                         beforeSend:function(){
    //                             Swal.fire({
    //                             title: 'Please wait ...',
    //                             html: 'Processd <strong></strong> .',
    //                             timer: 10000,
    //                             onBeforeOpen: () => {
    //                                 Swal.showLoading()
    //                                 timerInterval = setInterval(() => {
    //                                 Swal.getContent().querySelector('strong')
    //                                     .textContent = Swal.getTimerLeft()
    //                                 }, 100)
    //                             },
    //                             onClose: () => {
    //                                 clearInterval(timerInterval)
    //                             }
    //                             });
    //                         },
    //                         success:function(){
    //                             Swal.fire({
    //                             type: 'success',
    //                             title: 'Your data sent',
    //                             showConfirmButton: false,
    //                             timer: 1500
    //                             })
    //                             linkto(master_id);
    //                         },
    //                     });
                       
    //                 }
    //                 })
    //         }



    //     }
    //     })


    // }





    function sendsss(name_pt,master_id,user_id){
        Swal.fire({
            title: 'Are you sure?',
            text: "Send this booking to "+name_pt,
            type: 'warning',
            showLoaderOnConfirm: true,
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, send it!'
            }).then((result) => {
            if (result.value) {

                $.ajax({
                    url:"<?= base_url('admin/booking/sendBooking'); ?>",
                    type:"POST",
                    data:{"master_id":master_id,"user_id":user_id},
                    success:function(){
                        Swal.fire(
                        'Success!',
                        'Your booking has been sent.',
                        'success'
                        );
                        linkto(master_id);
                    },
                });

               
            }
         });


    }
</script>
