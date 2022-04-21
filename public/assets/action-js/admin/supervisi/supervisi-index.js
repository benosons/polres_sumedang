"use strict";
console.log('You are running jQuery version: ' + $.fn.jquery);
$(document).ready(function(){
  $('.pcoded-item li#menu-supervisi').addClass('active');
  $('.note-toolbar .note-insert, .note-toolbar .note-table, .note-toolbar .note-style:first, .note-toolbar .note-para').remove();
  $('.note-toolbar.panel-heading').remove();
  $('.note-popover').remove();

  $('#data-supervisi').DataTable();
  $('.user-tambah').hide();
  $('#save-user').hide();

  loadsupervisi('');

  $('#save-user').on('click', function(){
      let tanggal = $('#tanggal').val();
      let pelaksana = $('#pelaksana').val();
      let arahan = $('#arahan').val();

      var formData = new FormData();
      formData.append('param', 'data_supervisi');
      formData.append('tanggal', tanggal);
      formData.append('pelaksana', pelaksana);
      formData.append('arahan', arahan);

      save(formData);

  });

  $('#user_role').on('change', function(){
    if(this.value == 100){
      $('#user_satuan').val(0);
      $('#user_satuan').prop('disabled', true);
    }else{
      $('#user_satuan').prop('disabled', false);
    }
  });

});

function loadsupervisi(param){

  $.ajax({
      type: 'post',
      dataType: 'json',
      url: 'loadsupervisi',
      data : {
              param      : param,
      },
      success: function(result){
          let data = result.data;
          let code = result.code;
          if(code == 1){
            var dt = $('#data-supervisi').DataTable({
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
                  { 'mDataProp': 'tanggal'},
                  { 'mDataProp': 'pelaksana'},
                  { 'mDataProp': 'arahan'},
                  { 'mDataProp': 'id'},
              ],
              order: [[0, 'ASC']],
              fixedColumns: true,
              aoColumnDefs:[
                { width: 50, targets: 0 },
                {
                    mRender: function ( data, type, row ) {

                      // var el = '<button class="btn btn-mini btn-danger" onclick="action(\'delete\','+row.id+',\'\')"><i class="icofont icofont-trash"></i>Hapus</button>';
                      var el = `<div class="btn-group  btn-mini dropdown-split-info">
                      <button type="button" class="btn btn-info btn-mini"><i class="icofont icofont-info-square"></i></button>
                      <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split waves-effect waves-light btn-mini" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="sr-only">Toggle primary</span>
                      </button>
                      <div class="dropdown-menu">
                          <a class="dropdown-item waves-effect waves-light btn-success btn-mini" href="#"><i class="icofont icofont-print"></i> Print</a>
                          <a class="dropdown-item waves-effect waves-light btn-danger btn-mini" href="#" onclick="action('delete','${row.id}')"><i class="icofont icofont-trash"></i> Hapus </a>
                      </div>
                  </div>`

                        return el;
                    },
                    aTargets: [ 4 ]
                },
              ],
              fnRowCallback: function(nRow, aData, iDisplayIndex, iDisplayIndexFull){
                  var index = iDisplayIndexFull + 1;
                  $('td:eq(0)', nRow).html('#'+index);
                  return  index;
              },
              fnInitComplete: function () {
                var elemprimary = $('.js-primary');
                for (var i = 0; i < elemprimary.length; i++) {
                  var switchery = new Switchery(elemprimary[i], { color: '#1abc9c', jackColor: '#fff', size: 'small', className : 'switchery status' });
                  elemprimary[i].onchange = function() {
                    action('update',this.value, this.checked)
                  }
                }


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
          }else{
            var dt = $('#data-supervisi').DataTable()
            dt.clear().draw();
          }
        }

      })
    }

function onusers(type){
    $('.page-list > li').removeClass('active');
    if(type == 'input'){
      $('.user-tambah').show();
      $('.user-list').hide();
      $('#save-user').show();
      $('#tambah-user').hide();
    }else if(type == 'list'){
      loadsupervisi('');
      $('#list-user').addClass('active');
      $('.user-tambah').hide();
      $('.user-list').show();
      $('#save-user').hide();
      $('#tambah-user').show();
    }
};

function save(formData){

  $.ajax({
      type: 'post',
      processData: false,
      contentType: false,
      url: 'addSupervisi',
      data : formData,
      success: function(result){
        Swal.fire({
          type: 'success',
          title: 'Berhasil Tambah Asistensi !',
          showConfirmButton: true,
          // showCancelButton: true,
          confirmButtonText: `Ok`,
        }).then((result) => {
              $("#list-user > div > a").click();
              $('[name="user"]').val('');
              $('#user_role').val(0);
              $('#user_satuan').val(0);
        })
      }
    });
  };

  function action(mode, id, status){
    var formData = new FormData();
    formData.append('mode', mode);
    formData.append('id', id);

    $.ajax({
        type: 'post',
        processData: false,
        contentType: false,
        url: 'actionSupervisi',
        data : formData,
        success: function(result){
          loadsupervisi('');
        }
      });
  }

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
            var opt = '<option value="0">- Pilih Satuan -</option>';
            for (var i = 0; i < data.length; i++) {
              opt += '<option value="'+data[i].satuan_code+'">'+data[i].satuan_desc+'</option>';
            }

            $('#user_satuan').append(opt);
          }
        })
      }
