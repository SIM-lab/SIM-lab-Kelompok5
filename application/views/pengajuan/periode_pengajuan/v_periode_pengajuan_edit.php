<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php $row = fetch_single_row($edit); ?>

<div class="box-body big">
    <?php echo form_open('',array('name'=>'faddmenugrup','class'=>'form-horizontal','role'=>'form'));?>

        <?php echo form_hidden('id',$row->id); ?>

        <div class="form-group">
            <label class="col-sm-4 control-label">Periode</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'periode_pengajuan','class'=>'form-control', 'readonly'=>'readonly','value'=>$row->periode_pengajuan));?>
            <?php echo form_error('periode_pengajuan');?>
            <span id="check_data"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Semester</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'semester','value'=>$row->semester,'class'=>'form-control'));?>
            <?php echo form_error('semester');?>
            </div>
        </div>    

        <div class="form-group">
            <label class="col-sm-4 control-label">Bulan</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'bulan','value'=>$row->bulan,'class'=>'form-control'));?>
            <?php echo form_error('bulan');?>
            </div>
        </div>        

        <div class="form-group">
            <label class="col-sm-4 control-label">Tahun</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'tahun','value'=>$row->tahun,'class'=>'form-control'));?>
            <?php echo form_error('tahun');?>
            </div>
        </div>    

        <div class="form-group">
            <label class="col-sm-4 control-label">Sumber Pendanaan</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'sumber_pendanaan','value'=>$row->sumber_pendanaan,'class'=>'form-control'));?>
            <?php echo form_error('sumber_pendanaan');?>
            </div>
        </div>    
        <div class="form-group">
            <label class="col-sm-4 control-label">Pajak</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'pajak','value'=>$row->pajak,'class'=>'form-control'));?>
            <?php echo form_error('pajak');?>
            </div>
        </div>    


        <div class="form-group">
            <label class="col-sm-4 control-label">Status Pengajuan</label>
            <select class="col-sm-8" name ='status_pengajuan'>
          <option value ='Sudah Disetujui'>Sudah Disetujui</option>
          <option value ='Belum Disetujui'>Belum Disetujui</option>
          <option value ='Sudah Terdistribusikan'>Sudah Terdistribusikan</option>
          <option value ='Pendanaan Sudah Turun'>Pendanaan Sudah Turun</option>
          </select>
        </div>

        <div class="form-group">
        <label class="col-sm-4 control-label">Status</label>
          <select class="col-sm-8" name ='status'>
          <option value ='Ada'>Ada</option>
          <option value ='Tidak Ada'>Tidak Ada</option>
          </select>
        </div>

        
        <div class="form-group">
            <label class="col-sm-4 control-label">Simpan</label>
            <div class="col-sm-8 tutup">
            <?php
            echo button('send_form(document.faddmenugrup,"pengajuan/periode_pengajuan/show_editForm/","#divsubcontent")','Save','btn btn-success')." ";
            ?>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $(".select2").select2();
    $('.tutup').click(function(e) {  
        $('#myModal').modal('hide');
    });
});
</script>