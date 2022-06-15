<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=pengaduan.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
<h3>ASPIRASI YANG SUDAH DI JAWAB</h3>

                                    <table border="1" width="100%">
                                        <thead>
                                            <tr>
                                                <th width="20px">No</th>
                                           			<th>Identitas Pengirim</th>
                                                  	<th>Media</th>
												    <th>Pesan</th>
                                                    <th>Jawaban</th>
                                                    <th>Tanggal Aspirasi</th>
                                                    <th>Tanggal Jawab</th>
                                                    <th>Status</th>
                                                    <th>Opd</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $start = 0;
                                                  foreach ($selesai as $row)
           										 {
                                            ?>
                                            <tr>   
                                                <td width="20px"><?php echo ++$start ?></td>
                                                <td><?php echo $row->nama; ?></td>
                                                <td>Web</td>
                                                <td><?php echo $row->pengaduan; ?></td>
                                                <td><?php echo $row->jawaban; ?></td> 
                                                <td><?php echo $row->datetime; ?></td>
                                                <td><?php echo $row->dates; ?></td>
                                                <td><?php echo $row->status; ?></td>
                                                <td><?php echo $row->nama_opd; ?></td>
                                            </tr>
                                            <?php  } ?>
                                        </tbody>
                                    </table>

<h3>ASPIRASI YANG BELUM DI JAWAB</h3>

<table border="1" width="100%">
                                        <thead>
                                            <tr>
                                                <th width="20px">No</th>
                                           			<th>Identitas Pengirim</th>
                                                  	<th>Media</th>
												    <th>Pesan</th>
                                                    <th>Jawaban</th>
                                                    <th>Tanggal</th>
                                                    <th>Status</th>
                                                    <th>Opd</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $start = 0;
                                                  foreach ($belum as $row)
           										 {
                                            ?>
                                            <tr>   
                                                <td width="20px"><?php echo ++$start ?></td>
                                                <td><?php echo $row->nama; ?></td>
                                                <td>Web</td>
                                                <td><?php echo $row->pengaduan; ?></td>
                                                <td><?php echo $row->jawaban; ?></td> 
                                                <td><?php echo $row->datetime; ?></td>
                                                <td><?php echo $row->status; ?></td>
                                                <td><?php echo $row->nama_opd; ?></td>
                                            </tr>
                                            <?php  } ?>
                                        </tbody>
                                    </table>
                                