console.log('You are running jQuery version: ' + $.fn.jquery);
$(document).ready(function(){
  $('.pcoded-item li#menu-satuan').addClass('active');
  $('.note-toolbar .note-insert, .note-toolbar .note-table, .note-toolbar .note-style:first, .note-toolbar .note-para').remove();
  $('.note-toolbar.panel-heading').remove();
  $('.note-popover').remove();

  $('#setting-satuan').DataTable();
  $('.satuan-tambah').hide();
  $('#save-satuan').hide();

  loadparam('satuan');

  $('#save-satuan').on('click', function(){
      var satuan_code = $('#satuan_code').val();
      var satuan_name = $('#satuan_name').val();
      var satuan_desc = $('#satuan_desc').val();

      var formData = new FormData();
      formData.append('param', 'satuan');
      formData.append('satuan_code', satuan_code);
      formData.append('satuan_name', satuan_name);
      formData.append('satuan_desc', satuan_desc);
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
      url: 'addParam',
      data : formData,
      success: function(result){
        Swal.fire({
          type: 'success',
          title: 'Berhasil Tambah Satuan !',
          showConfirmButton: true,
          // showCancelButton: true,
          confirmButtonText: `Ok`,
        }).then((result) => {
          $(document).ready(function(){
              $("#list-satuan > div > a").trigger("click");

              $('#satuan_code').val('');
              $('#satuan_name').val('');
              $('#satuan_desc').val('');

          });
        })
      }
    });
  };
