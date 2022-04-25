"use strict";
console.log('You are running jQuery version: ' + $.fn.jquery);
$(document).ready(function(){
  $('.pcoded-item li#menu-mutasi').addClass('active');
  $('.note-toolbar .note-insert, .note-toolbar .note-table, .note-toolbar .note-style:first, .note-toolbar .note-para').remove();
  $('.note-toolbar.panel-heading').remove();
  $('.note-popover').remove();

  $('#setting-user').DataTable();
  $('.user-tambah').hide();
  $('#save-user').hide();

  $("#filter-tanggal").val(formatDate(new Date()));
  $('#cari-mutasi').on('click', function(){
    loadmutasi('', formatDate($("#filter-tanggal").val()));
  })

  $('#save-user').prop('disabled', true)
  $('#save-user button').prop('disabled', true)
  $('[name="user"]').on('keyup', function(){
    if($('#nama').val() && 
    $('#pangkat').val() && 
    $('#jabatan').val() && 
    $('#keterangan').val() && 
    $('#penerimaan').val() && 
    $('#uraian').val() ){
      $('#save-user').prop('disabled', false)
      $('#save-user button').prop('disabled', false)
    }else{
      $('#save-user').prop('disabled', true)
      $('#save-user button').prop('disabled', true)
    }
  })

  loadmutasi('', formatDate(new Date()));

  $('#save-user').on('click', function(){
      let nama = $('#nama').val();
      let pangkat = $('#pangkat').val();
      let jabatan = $('#jabatan').val();
      let keterangan = $('#keterangan').val();
      let penerimaan = $('#penerimaan').val();
      let uraian = $('#uraian').val();

      var formData = new FormData();
      formData.append('param', 'data_mutasi');
      formData.append('nama', nama);
      formData.append('pangkat', pangkat);
      formData.append('jabatan', jabatan);
      formData.append('keterangan', keterangan);
      formData.append('penerimaan', penerimaan);
      formData.append('uraian', uraian);

      save(formData);

  });

  
  $( "#myModal" ).on('shown.bs.modal', function(){
    generatepdf(formatDate(new Date()))
    PDFObject.embed("public/uploads/dummy.pdf", "#example1");
  });


});

function loadmutasi(param, date){

  $.ajax({
      type: 'post',
      dataType: 'json',
      url: 'loadmutasi',
      data : {
              param      : param,
              date      : date,
      },
      success: function(result){
          let data = result.data;
          let code = result.code;
          if(code == 1){
            var dt = $('#data-mutasi').DataTable({
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
                  { 'mDataProp': 'nama'},
                  { 'mDataProp': 'pangkat'},
                  { 'mDataProp': 'jabatan'},
                  { 'mDataProp': 'keterangan'},
                  { 'mDataProp': 'penerimaan'},
                  { 'mDataProp': 'uraian'},
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
                    aTargets: [ 7 ]
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
            var dt = $('#data-mutasi').DataTable()
            dt.clear().draw();
          }
        }

      })
    }

function generatepdf(date){

  $.ajax({
      type: 'post',
      dataType: 'json',
      url: 'generatePdf',
      data : {
              title     : 'BUKU MUTASI OPS KETUPAT',
              template     : 'laporan_pdf',
              date      : date,
      },
      success: function(result){
          let data = result.data;
          let code = result.code;

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
      loadmutasi('', formatDate($("#filter-tanggal").val()));
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
      url: 'addMutasi',
      data : formData,
      success: function(result){
        Swal.fire({
          type: 'success',
          title: 'Berhasil Tambah Mutasi !',
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
        url: 'actionMutasi',
        data : formData,
        success: function(result){
          loadmutasi('', formatDate($("#filter-tanggal").val()));
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
