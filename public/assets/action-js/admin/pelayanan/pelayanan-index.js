console.log('You are running jQuery version: ' + $.fn.jquery);
$(document).ready(function(){
  $('#filer_input_banner').filer({
      limit: 3,
      maxSize: 3,
      extensions: ['jpg', 'jpeg', 'png', 'gif', 'psd'],
      changeInput: true,
      showThumbs: true,
      addMore: true,
      captions: {
          button: '<i class="icofont icofont-clip"></i> Cari Gambar',
          feedback: "Pilih Gambar",
          feedback2: "files were chosen",
          drop: "Drop file here to Upload",
          removeConfirmation: "Are you sure you want to remove this file?",
          errors: {
              filesLimit: "Only {{fi-limit}} files are allowed to be uploaded.",
              filesType: "Only Images are allowed to be uploaded.",
              filesSize: "{{fi-name}} is too large! Please upload file up to {{fi-maxSize}} MB.",
              filesSizeAll: "Files you've choosed are too large! Please upload files up to {{fi-maxSize}} MB."
          }
      },
      templates: {
          removeConfirmation: false,
      }
  });

  $('.pcoded-item li#menu-pelayanan').addClass('active');
  // $('.note-toolbar .note-insert, .note-toolbar .note-table, .note-toolbar .note-style:first, .note-toolbar .note-para').remove();
  // $('.note-toolbar.panel-heading').remove();
  $('.note-popover').remove();
  $('.note-insert').remove();
  $('.note-table').remove();

  $('#setting-satuan').DataTable();
  $('.pengumuman-list').hide();
  $('.satuan-tambah').hide();
  $('#save-satuan').hide();

  loadparam('satuan');

  $('#save-banner').on('click', function(){
      var satuan = $('#satuan').val();
      var jenis = $('#jenis').val();
      var konten = $('.konten-summernote').summernote('code');

      var formData = new FormData();
      formData.append('satuan', satuan);
      formData.append('jenis', jenis);
      formData.append('konten', konten);

      for (var i = 0; i < $('input[type=file]')[0].files.length; i++) {
        formData.append('img[]', $('input[type=file]')[0].files[i]);
      }
      save(formData);
  });

});

function loadparam(param){

  $.ajax({
      type: 'post',
      dataType: 'json',
      url: 'loadparam',
      data : {
              param      : param,
      },
      success: function(result){
          let data = result.data;
          var dt = $('#setting-satuan').DataTable({
            destroy: true,
            paging: true,
            lengthChange: false,
            searching: true,
            ordering: true,
            info: true,
            autoWidth: false,
            responsive: false,
            pageLength: 10,
            aaData: result.data,
            aoColumns: [
                { 'mDataProp': 'id', 'width':'10%'},
                { 'mDataProp': 'satuan_name'},
                { 'mDataProp': 'satuan_desc'},
            ],
            order: [[0, 'ASC']],
            fixedColumns: true,
            aoColumnDefs:[
              { width: 50, targets: 0 },

            ],
            fnRowCallback: function(nRow, aData, iDisplayIndex, iDisplayIndexFull){
                var index = iDisplayIndexFull + 1;
                $('td:eq(0)', nRow).html('#'+index);
                return  index;
            },
            fnInitComplete: function () {
                var that = this;
                var td ;
                var tr ;
                this.$('td').click( function () {
                    td = this;
                });
                this.$('tr').click( function () {
                    tr = this;
                });
            }
        });

        let first_row = dt.row(':first').data();
        $('#satuan_code').val(parseInt(first_row.id) + 1 + '0');
        }
      })
    }

function onberita(type){
    $('.page-list > li').removeClass('active');
    if(type == 'input'){
      $('.satuan-tambah').show();
      $('.satuan-list').hide();
      $('#save-satuan').show();
      $('#tambah-satuan').hide();
    }else if(type == 'list'){
      loadparam('satuan');
      $('#list-satuan').addClass('active');
      $('.satuan-tambah').hide();
      $('.satuan-list').show();
      $('#save-satuan').hide();
      $('#tambah-satuan').show();
    }
};

function save(formData){

  $.ajax({
      type: 'post',
      processData: false,
      contentType: false,
      url: 'addKonten',
      data : formData,
      success: function(result){
        Swal.fire({
          type: 'success',
          title: 'Berhasil Tambah Konten !',
          showConfirmButton: true,
          // showCancelButton: true,
          confirmButtonText: `Ok`,
        }).then((result) => {
          $(document).ready(function(){
              // $("#list-satuan > div > a").trigger("click");
              //
              // $('#satuan_code').val('');
              // $('#satuan_name').val('');
              // $('#satuan_desc').val('');

          });
        })
      }
    });
  };
