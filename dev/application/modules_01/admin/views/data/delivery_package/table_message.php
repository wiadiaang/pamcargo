<table id="tbl_mes" class="table table-sm table-bordered " cellpadding="0" cellspacing="0">
<thead>
    <th width="150px">Time</th>
    <th>Message</th>
    <th>User</th>
    <th width="20">Delete</th>
</thead>
<tbody>
    <?php
        foreach($data as $key){
    ?> 
    <tr>
        <td><?= $key->create_date ?></td>
        <td><?= $key->message ?></td>
        <td><?= $key->user_type ?></td>
        <td>
            <?php 
                if($key->user_create == $this->session->userdata('user_id') ){ ?>
                      <a href="javascript:void(0)" onClick="delete_msg('<?= $key->conv_id; ?>','<?= $key->document_number_id; ?>')"><i class="fa fa-trash"></i></a>
              <?php  }
            ?>
      
        
        </td>
    </tr>
<?php } ?>
</tbody>

</table>

<script>


    // $('#tbl_mes').DataTable();
    $('#tbl_mes').DataTable( {
        "searching": false,
        // "lengthChange": false,
        "ordering": false,
        "lengthMenu": [[3, 6, 12, -1], [3, 6, 12, "All"]]
     
    } );


   


</script>