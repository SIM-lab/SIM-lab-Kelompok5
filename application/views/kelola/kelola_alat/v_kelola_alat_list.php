<?php require_once ('application/views/kotak/kotak.php') ?>
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

    <div class="col-lg-12">
        <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Kelola Alat</h3>

            <div class="box-tools pull-right">
            <?php
                $sesi = from_session('level');
                if ($sesi == '1'|| $sesi == '4') {
                echo button('load_silent("kelola/kelola_alat/form/base","#modal")','Tambah kelola alat','btn btn-success');
                } else {
                # code...
                }
                ?>
            </div>
            </div>
            <div class="box-body">
            <table width="100%" id="tableku" class="table table-striped">
                <thead>
                    <th>No</th>
                    <th>Nama Alat</th>
                    <th>Nama Satuan</th>
                    <th>Jenis</th>
                    <th>Merk</th>
                    <th>Stok</th>
                    <th>Kondisi</th>
                    <th>Act</th>
                </thead>
                <tbody>
                <?php 
                $i = 1;
                foreach($kelola_alat->result() as $row):?>
                    <tr>
                        <td align="center"><?=$i++?></td>
                        <td align="center"><?=$row->nama_alat?></td>
                        <td align="center"><?=$row->nama?></td>
                        <td align="center"><?=$row->jenis?></td>
                        <td align="center"><?=$row->merk?></td>
                        <td align="center"><?=$row->stok?></td>
                        <td align="center"><?=$row->kondisi?></td>
                        <td align="center">
                        <?php
                        $sesi = from_session('level');
                        if ($sesi == '1' || $sesi == '4') {
                            echo button('load_silent("kelola/kelola_alat/form/sub/'.$row->id.'","#modal")','','btn btn-info fa fw fa-edit','data-toggle="tooltip" title="Edit"');
                        } else {
                            # code...
                        }
                        ?>
                        <?php
                         $sesi = from_session('level');
                        if ($sesi == '1' || $sesi == '4') {
                        echo button('load_silent("kelola/kelola_alat/delete/'.$row->id.'","#content")','','btn btn-danger fa fw fa-trash','data-toggle="tooltip" title="Hapus"');
                         } else {
                         # code...
                         }
                        ?>   
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
            </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
  $(document).ready(function() {
    var table = $('#tableku').DataTable( {
      "ordering": false,
    } );
  });
</script>