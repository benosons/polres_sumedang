"use strict";
console.log('You are running jQuery version: ' + $.fn.jquery);
$(document).ready(function(){
  $('.pcoded-item li#menu-tabulasi').addClass('active');
  $('.note-toolbar .note-insert, .note-toolbar .note-table, .note-toolbar .note-style:first, .note-toolbar .note-para').remove();
  $('.note-toolbar.panel-heading').remove();
  $('.note-popover').remove();

  $('#data-tabulasi').DataTable();
  $('.user-tambah').hide();
  $('.user-tambah-1').hide();
  $('#save-user').hide();
  $('#save-user-1').hide();

  loadtabulasi('');

  $('#save-user').on('click', function(){

      let waktu = $('#waktu').val();
      let hari = $('#hari').val();
      let tanggal = $('#tanggal').val();
      let kegiatan = $('#kegiatan').val();
      let keterangan = $('#keterangan').val();

      var formData = new FormData();
      formData.append('param', 'data_tabulasi');
      formData.append('waktu', waktu);
      formData.append('hari', hari);
      formData.append('tanggal', tanggal);
      formData.append('kegiatan', kegiatan);
      formData.append('kejadian', '');
      formData.append('keterangan', keterangan);
      formData.append('type', '0');

      save(formData);

  });

  $('#save-user-1').on('click', function(){

      let waktu = $('#waktu-1').val();
      let hari = $('#hari-1').val();
      let tanggal = $('#tanggal-1').val();
      let kejadian = $('#kejadian').val();
      let keterangan = $('#keterangan-1').val();

      var formData = new FormData();
      formData.append('param', 'data_tabulasi');
      formData.append('waktu', waktu);
      formData.append('hari', hari);
      formData.append('tanggal', tanggal);
      formData.append('kegiatan', '');
      formData.append('kejadian', kejadian);
      formData.append('keterangan', keterangan);
      formData.append('type', '1');

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

function loadtabulasi(param){

  $.ajax({
      type: 'post',
      dataType: 'json',
      url: 'loadtabulasi',
      data : {
              param      : param,
      },
      success: function(result){
          let data = result.data;
          let code = result.code;
          let kegiatan = data.kegiatan;
          let kejadian = data.kejadian;
          if(code == 1){
            var dt = $('#data-tabulasi').DataTable({
              destroy: true,
              paging: true,
              lengthChange: false,
              searching: true,
              ordering: true,
              info: true,
              autoWidth: false,
              responsive: false,
              pageLength: 10,
              aaData: kegiatan,
              aoColumns: [
                  { 'mDataProp': 'id', 'width':'10%'},
                  { 'mDataProp': 'tanggal'},
                  { 'mDataProp': 'waktu'},
                  { 'mDataProp': 'kegiatan'},
                  { 'mDataProp': 'keterangan'},
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
                    aTargets: [ 5 ]
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
            var dt1 = $('#data-tabulasi-1').DataTable({
              destroy: true,
              paging: true,
              lengthChange: false,
              searching: true,
              ordering: true,
              info: true,
              autoWidth: false,
              responsive: false,
              pageLength: 10,
              aaData: kejadian,
              aoColumns: [
                  { 'mDataProp': 'id', 'width':'10%'},
                  { 'mDataProp': 'tanggal'},
                  { 'mDataProp': 'waktu'},
                  { 'mDataProp': 'kejadian'},
                  { 'mDataProp': 'keterangan'},
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
                    aTargets: [ 5 ]
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
            var dt = $('#data-tabulasi').DataTable()
            dt.clear().draw();
            var dt1 = $('#data-tabulasi-1').DataTable()
            dt1.clear().draw();
          }
        }

      })
    }

function onusers(type){
    $('.page-list > li').removeClass('active');
    var dateing = new Date()

    var hours = dateing.getHours() ;
    
    var minutes = dateing.getMinutes();
    var finalTime = hours + ":" + minutes; 
    
      var namahari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu']
      $('#hari, #hari-1').val(namahari[dateing.getDay()])
      $('#tanggal, #tanggal-1').val(formatDate(dateing))
      $('#waktu, #waktu-1').val(finalTime)

    if(type == 'input'){
      $('.user-tambah').show();
      $('.user-tambah-1').hide();
      $('.user-list').hide();
      $('#save-user').show();
      $('#save-user-1').hide();
      $('#tambah-user').hide();
    }else if(type == 'input-1'){
      $('.user-tambah').hide();
      $('.user-tambah-1').show();
      $('.user-list').hide();
      $('#save-user').hide();
      $('#save-user-1').show();
      $('#tambah-user').hide();
    }else if(type == 'list'){
      loadtabulasi('');
      $('#list-user').addClass('active');
      $('.user-tambah').hide();
      $('.user-tambah-1').hide();
      $('.user-list').show();
      $('#save-user').hide();
      $('#save-user-1').hide();
      $('#tambah-user').show();
    }
};

function save(formData){

  $.ajax({
      type: 'post',
      processData: false,
      contentType: false,
      url: 'addTabulasi',
      data : formData,
      success: function(result){
        Swal.fire({
          type: 'success',
          title: 'Berhasil Tambah Data !',
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
        url: 'actionTabulasi',
        data : formData,
        success: function(result){
          loadtabulasi('');
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

      function formatDate(date) {
        var d = new Date(date),
            month = '' + (d.getMonth() + 1),
            day = '' + d.getDate(),
            year = d.getFullYear();
    
        if (month.length < 2) 
            month = '0' + month;
        if (day.length < 2) 
            day = '0' + day;
    
        return [year, month, day].join('-');
      }  
