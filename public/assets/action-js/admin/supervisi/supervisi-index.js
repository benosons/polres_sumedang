"use strict";
console.log('You are running jQuery version: ' + $.fn.jquery);
$(document).ready(function(){
  $('.pcoded-item li#menu-supervisi').addClass('active');
  $('.note-toolbar .note-insert, .note-toolbar .note-table, .note-toolbar .note-style:first, .note-toolbar .note-para').remove();
  $('.note-toolbar.panel-heading').remove();
  $('.note-popover').remove();

  var timepicker = new TimePicker('waktu', {
    lang: 'en',
    theme: 'dark'
  });
  timepicker.on('change', function(evt) {
    
    var value = (evt.hour.length == 1 ? '0' + evt.hour : evt.hour || '00') + ':' + (evt.minute || '00');
    evt.element.value = value;
  
  });

  $('#data-supervisi').DataTable();
  $('.user-tambah').hide();
  $('#save-user').hide();

  $("#filter-tanggal").val(formatDate(new Date()));
  $('#cari-mutasi').on('click', function(){
    loadsupervisi('data_anggota', formatDate($("#filter-tanggal").val()), $('#fitler-pos').val());
  })

  loadsupervisi('', formatDate(new Date()), $('#fitler-pos').val());

  $('#save-user').on('click', function(){
      let tanggal = $('#tanggal').val();
      let hari = $('#hari').val();
      let waktu = $('#waktu').val();
      let pelaksana = $('#pelaksana').val();
      let arahan = $('#arahan').val();

      var formData = new FormData();
      formData.append('param', 'data_supervisi');
      formData.append('tanggal', tanggal);
      formData.append('hari', hari);
      formData.append('waktu', waktu);
      formData.append('pelaksana', pelaksana);
      formData.append('arahan', arahan);

      save(formData);

  });

  $( "#myModal" ).on('shown.bs.modal', function(){
    generatepdf(formatDate($("#filter-tanggal").val()))
  });

  $("#tanggal").on('change', function(){
    var a = new Date(this.value);
    // alert(a.getDay());
    $('#hari').val(a.getDay())
  })

  var regExp = /^[A-Za-z\s]+$/;
  $('#waktu').on('keydown keyup', function(e) {
    var value = String.fromCharCode(e.which) || e.key;

    // No letters
    if (regExp.test(value)) {
      e.preventDefault();
      return false;
    }
  });

});

function loadsupervisi(param, date, pos){

  $.ajax({
      type: 'post',
      dataType: 'json',
      url: 'loadsupervisi',
      data : {
              param      : param,
              date      : date,
              pos      : pos,
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
                  { 'mDataProp': 'hari'},
                  { 'mDataProp': 'waktu'},
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
                      var ishari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu']
                      var values = '--';
                      if(row.hari){
                        values = ishari[row.hari];
                      }
                      return values ;
                  },
                  aTargets: [ 2 ]
              },
                {
                    mRender: function ( data, type, row ) {

                      // var el = '<button class="btn btn-mini btn-danger" onclick="action(\'delete\','+row.id+',\'\')"><i class="icofont icofont-trash"></i>Hapus</button>';
                      var el = `<div class="btn-group  btn-mini dropdown-split-info">
                      <button type="button" class="btn btn-info btn-mini"><i class="icofont icofont-info-square"></i></button>
                      <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split waves-effect waves-light btn-mini" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="sr-only">Toggle primary</span>
                      </button>
                      <div class="dropdown-menu">
                          <a class="dropdown-item waves-effect waves-light btn-danger btn-mini" href="#" onclick="action('delete','${row.id}')"><i class="icofont icofont-trash"></i> Hapus </a>
                      </div>
                  </div>`

                        return el;
                    },
                    aTargets: [ 6 ]
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
      loadsupervisi('', formatDate($("#filter-tanggal").val()), $('#fitler-pos').val());
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
          loadsupervisi('', formatDate($("#filter-tanggal").val()), $('#fitler-pos').val());
        }
      });
  }

  function generatepdf(date){

    $.ajax({
        type: 'post',
        dataType: 'json',
        url: 'generatePdf',
        data : {
                title     : 'BUKU SUPERVISI & ASISTENSI OPS KETUPAT LODAYA',
                template  : 'ops_supervisi',
                date      : date,
                mode      : 3,
        },
        success: function(result){
            let data = result.data;
            let code = result.code;
  
            PDFObject.embed(result.data, "#example1");
  
  
          }
  
        })
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
