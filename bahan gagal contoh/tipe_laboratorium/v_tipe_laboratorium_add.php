<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="box-body big">
    <?php echo form_open('',array('name'=>'faddmenugrup','class'=>'form-horizontal','role'=>'form'));?>
        
        
        <div class="form-group">
            <label class="col-sm-4 control-label">Jenis Laboratorium</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'jenis','class'=>'form-control'));?>
            <?php echo form_error('jenis_laboratoriom');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Foto</label>
            <div class="col-sm-8">
            <?php echo form_upload(array('name'=>'foto','id'=>'foto','class'=>'form-control'));?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Koordinator</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'koordinator','class'=>'form-control'));?>
            <?php echo form_error('koordinator');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Laboran</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'laboran','class'=>'form-control'));?>
            <?php echo form_error('laboran');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Alamat</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'alamat','class'=>'form-control'));?>
            <?php echo form_error('alamat');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Email</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'email','class'=>'form-control'));?>
            <?php echo form_error('email');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Anggota</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'anggota','class'=>'form-control'));?>
            <?php echo form_error('anggota');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"></label>
            <div class="col-sm-8 tutup">
            <input onclick="save()" type="submit" value="Save" id="tombol" class="btn btn-success">
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $("#foto").fileinput({
    'showUpload'            :true,
      initialPreview: '<img src="<?php echo base_url().$row->foto; ?>" class="file-preview-image">'
    });
    $('#tombol').removeAttr('disabled',false);
    $(".select2").select2();
    $('.tutup').click(function(e) {  
        $('#myModal').modal('hide');
    });
});

function save()
{
        $.ajaxFileUpload
          ({
            url:site+'master/tipe_laboratorium/show_addForm',
            secureuri:false,
            fileElementId:'foto',
            dataType: 'json',
            data: {
                id                : $("#id").val(),
                jenis              : $("#jenis").val(),
                koordinator            : $("#koordinator").val(),
                laboran              : $("#laboran").val(),
                alamat          : $("#alamat").val(),
                email             : $("#email").val(),
                anggota           : $("#anggota").val(),
              },
              success: function (data)
            {
              $.growl.notice({ title: 'Berhasil', message: data['msg'] });
              load_silent("master/tipe_laboratorium/","#divsubcontent");
            },
            error: function (data, e)
            {
              $("#info").html(e);
            }
          })
          return false;
    };
  
</script>