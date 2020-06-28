<?php require_once ('application/views/kotak/kotak.php') ?>
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

    <div class="row" id="form_pembelian">
      <div class="col-lg-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Master modul</h3>

            <div class="box-tools pull-right">
            <?php
              $sesi = from_session('level');
              if ($sesi == '1' || $sesi == '2' || $sesi == '3' || $sesi == '6') {
                echo button('load_silent("master/modul/form/base","#modal")','Add New modul','btn btn-success');
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
                <th>Nama modul</th>
                <th>keterangan</th>
                <th>Modul</th>
                <th>tipe</th>
                <th>ukuran</th>
                <th>Act</th>
              </thead>
              <tbody>
          <?php 
          $i = 1;
          foreach($modyar->result() as $row): ?>
          <tr>
            <td align="center"><?=$i++?></td>
            <td align="center"><?=$row->nama_modul?></td>
            <td align="center"><?=$row->keterangan?></td>
            <td align="center" ><?=$row->modul ?></td>
            <td align="center"><?=$row->tipe?></td>
            <td align="center"><?=$row->ukuran?></td>
            <td align="center">
            <?php
              $sesi = from_session('level');
              if ($sesi == '1' || $sesi == '2' || $sesi == '3' || $sesi == '6') {
                echo button('load_silent("master/modul/form/sub/'.$row->id.'","#modal")','','btn btn-info fa fw fa-edit','data-toggle="tooltip" title="Edit"');
                
              } else {
                # code...
              }
              ?>
              <a href="<?= site_url('master/modul/delete/'.$row->id) ?>" class="btn btn-danger fa fw fa-trash" onclick="return confirm('Anda Yakin Ingin Menghapus Kategori Alat dan Bahan Ini ?')"></a>
              <a href="<?=base_url(''.$row->modul)?>" class="btn btn-info fa fw fa-download" target="_blank"></a>
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
