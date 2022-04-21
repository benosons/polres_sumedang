"use strict";
console.log('You are running jQuery version: ' + $.fn.jquery);
$(document).ready(function(){
  $('.pcoded-item li#menu-mutasi').addClass('active');
  $('.note-toolbar .note-insert, .note-toolbar .note-table, .note-toolbar .note-style:first, .note-toolbar .note-para').remove();
  $('.note-toolbar.panel-heading').remove();
  $('.note-popover').remove();

  $('#data-cctv').DataTable();
  $('.user-tambah').hide();
  $('#save-user').hide();

  loadcctv('');

  $('#save-user').on('click', function(){
      let lokasi = $('#lokasi').val();
      let url = $('#url').val();

      var formData = new FormData();
      formData.append('param', 'data_cctv');
      formData.append('lokasi', lokasi);
      formData.append('url', url);

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

function loadcctv(param){

  $.ajax({
      type: 'post',
      dataType: 'json',
      url: 'loadcctv',
      data : {
              param      : param,
      },
      success: function(result){
          let data = result.data;
          let code = result.code;
          if(code == 1){
            var dt = $('#data-cctv').DataTable({
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
                  { 'mDataProp': 'lokasi'},
                  { 'mDataProp': 'url'},
                  { 'mDataProp': 'id'},
              ],
              order: [[0, 'ASC']],
              fixedColumns: true,
              aoColumnDefs:[
                { width: 50, targets: 0 },
                {
                    mRender: function ( data, type, row ) {

                      var el = '<a target="_blank" href="'+row.url+'" >'+row.url+'</a>'
                        return el;
                    },
                    aTargets: [ 2 ]
                },
                {
                    mRender: function ( data, type, row ) {

                      var el = '<button class="btn btn-mini btn-danger" onclick="action(\'delete\','+row.id+',\'\')"><i class="icofont icofont-trash"></i>Hapus</button>';

                        return el;
                    },
                    aTargets: [ 3 ]
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
            var dt = $('#data-cctv').DataTable()
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
      loadcctv('');
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
      url: 'addcctv',
      data : formData,
      success: function(result){
        Swal.fire({
          type: 'success',
          title: 'Berhasil Tambah CCTV !',
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
        url: 'actionCctv',
        data : formData,
        success: function(result){
          loadcctv('');
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
