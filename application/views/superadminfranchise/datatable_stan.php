<script type="text/javascript">
  var tabeldata ;

  function edit_stan(id){
    $.ajax({
          type:"post",
          url: "<?php echo base_url('superadminfranchise/select_edit_stan')?>/",
          data:{ id:id},
          dataType:"json",
          success:function(response)
          {
            $("#editid").val(response[0].id_stan);
            $("#editalamat").val(response[0].alamat);
            $("#editnama").val(response[0].nama_stan);
            $("#editpassword").val(response[0].password);
            $("#modal_edit").modal('show');
          },
          error: function (jqXHR, textStatus, errorThrown)
          {
            alert(errorThrown);
          }
      }
    );
  }

  function simpanedit(){
    var id = $("#editid").val();
    var alamat = $("#editalamat").val();
    var nama =  $("#editnama").val();
    var password = $("#editpassword").val();
    if (id.replace(/\s/g, '').length>3&&nama.replace(/\s/g, '').length>3&&alamat.replace(/\s/g, '').length>3&&password.replace(/\s/g, '').length>3) {
    $.ajax({
          type:"post",
          url: "<?php echo base_url('superadminfranchise/edit_stan')?>/",
          data:{ id:id,alamat:alamat,nama:nama,password:password},
          success:function(response)
          {
            $("#modal_edit").modal('hide');
            if($('#editid').has("error")){
              $('#editid').removeClass("error");
            }
            if($('#editnama').has("error")){
              $('#editnama').removeClass("error");
            }
            if($('#editalamat').has("error")){
              $('#editalamat').removeClass("error");
            }
            if($('#editpassword').has("error")){
              $('#editpassword').removeClass("error");
            }
            reload_table();
            alert("Berhasil mengubah data!");
          },
          error: function (jqXHR, textStatus, errorThrown)
          {
            alert(errorThrown);
          }
      });
    }else{
      if (id.replace(/\s/g, '').length<=3) {
        $('#editid').addClass("error");
      }else{
        if($('#editid').has("error")){
          $('#editid').removeClass("error");
        }
      }
      if (nama.replace(/\s/g, '').length<=3) {
        $('#editnama').addClass("error");
      }else{
        if($('#editnama').has("error")){
          $('#editnama').removeClass("error");
        }
      }
      if (alamat.replace(/\s/g, '').length<=3) {
        $('#editalamat').addClass("error");
      }else{
        if($('#editalamat').has("error")){
          $('#editalamat').removeClass("error");
        }
      }
      if (password.replace(/\s/g, '').length<=3) {
        $('#editpassword').addClass("error");
      }else{
        if($('#editpassword').has("error")){
          $('#editpassword').removeClass("error");
        }
      }
      alert("Silahkan periksa kembali inputan anda!");
    }
  }

function delete_stan(id){
     if(confirm('Apakah anda yakin ingin menghapus data ini??')){
      $.ajax({
              type:"post",
              url: "<?php echo base_url('superadminfranchise/delete_stan')?>/",
              data:{ id:id},
              success:function(response)
              {
                   reload_table();
              },
              error: function (jqXHR, textStatus, errorThrown)
              {
                alert(errorThrown);
              }
          }
      );
    }
  }

function showpwd(id){
    var pwd = document.getElementById(id);

    if (pwd.type === "password") {
        pwd.type = "text";
    } else {
        pwd.type = "password";
    }
}

function tambahstan(){
    var id = $("#id").val();
    var nama = $("#nama").val();
    var alamat = $("#alamat").val();
    var password = $("#password").val();
    if (id.replace(/\s/g, '').length>3&&nama.replace(/\s/g, '').length>3&&alamat.replace(/\s/g, '').length>3&&password.replace(/\s/g, '').length>0) {
        $.ajax(
            {
                type:"post",
                url: "<?php echo base_url('superadminfranchise/tambah_stan')?>/",
                data:{ id:id,nama:nama,alamat:alamat,password:password},
                success:function(response)
                {
                  reload_table();
                  if($('#id').has("error")){
                    $('#id').removeClass("error");
                  }
                  if($('#nama').has("error")){
                    $('#nama').removeClass("error");
                  }
                  if($('#alamat').has("error")){
                    $('#alamat').removeClass("error");
                  }
                  if($('#password').has("error")){
                    $('#password').removeClass("error");
                  }
                  $("#id").val('');
                  $("#nama").val('');
                  $("#alamat").val('');
                  $("#password").val('');
                  $("#id").focus();
                  alert('Berhasil menambahkan produk');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                  alert(errorThrown);
                }
            }
        );
    }else{
        if (id.replace(/\s/g, '').length<=3) {
            $('#id').addClass("error");
        }else{
            if($('#id').has("error")){
                $('#id').removeClass("error");
            }
        }

        if (nama.replace(/\s/g, '').length<=3) {
            $('#nama').addClass("error");
        }else{
            if($('#nama').has("error")){
                $('#nama').removeClass("error");
            }
        }

        if (password.replace(/\s/g, '').length<=3) {
            $('#password').addClass("error");
        }else{
            if($('#password').has("error")){
                $('#password').removeClass("error");
            }
        }

        if (alamat.replace(/\s/g, '').length<=3) {
            $('#alamat').addClass("error");
        }else{
            if($('#alamat').has("error")){
                $('#alamat').removeClass("error");
            }
        }

        alert("Silahkan periksa kembali inputan anda!");
    }
  }

  jQuery( document ).ready(function( $ ) {
    $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
    {
      return {
        "iStart": oSettings._iDisplayStart,
        "iEnd": oSettings.fnDisplayEnd(),
        "iLength": oSettings._iDisplayLength,
        "iTotal": oSettings.fnRecordsTotal(),
        "iFilteredTotal": oSettings.fnRecordsDisplay(),
        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
      };
    };

    tabeldata = $("#mytable").dataTable({

      initComplete: function() {
        var api = this.api();
        $('#mytable_filter input')
        .on('.DT')
        .on('keyup.DT', function(e) {
          if (e.keyCode == 13) {
            api.search(this.value).draw();
          }
        });
      },
      oLanguage: {
        sProcessing: "loading..."
      },
      serverSide: true,
      ajax: {"url": "<?php echo base_url('superadminfranchise/datastan');?>", "type": "POST"},
      columns: 
      [
      {"data": "id_stan"},
      {"data": "nama_stan"},
      {"data": "alamat"},
      {"data": "password"},
      {"data": "edit",
      "orderable": false},
      {"data": "delete",
      "orderable": false},
      ],

      rowCallback: function(row, data, iDisplayIndex) {
        var info = this.fnPagingInfo();
        var page = info.iPage;
        var length = info.iLength;
        var index = page * length + (iDisplayIndex + 1);
        // $('td:eq(0)', row).html(index);
      }
    });


});

function reload_table(){
  tabeldata.api().ajax.reload(null,false);
}


</script>