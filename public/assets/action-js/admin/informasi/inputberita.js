console.log('You are running jQuery version: ' + $.fn.jquery);
$(document).ready(function(){
  $('.pcoded-item li#menu-informasi').addClass('active pcoded-trigger');
  $('#inputberita').addClass('active');
  $('.note-toolbar .note-insert, .note-toolbar .note-table, .note-toolbar .note-style:first, .note-toolbar .note-para').remove();
  $('.note-toolbar.panel-heading').remove();
  $('.note-popover').remove();

  $('#setting-default').DataTable();
  $('.berita-tulis').hide();
  $('#post-berita').hide();

  loadparam('satuan');
  loadberita('','');

  $('#post-berita').on('click', function(){
      var tujuan = $('#tujuan').val();
      var nama_tujuan = $('#tujuan option:selected').text();
      var judul = $('#judul').val();
      var isi = $('.berita-summernote').summernote('code');

      var formData = new FormData();
      formData.append('param', 'berita');
      formData.append('kode_tujuan', tujuan);
      formData.append('nama_tujuan', nama_tujuan.toLowerCase().split(' ').join('_'));
      formData.append('judul', judul);
      formData.append('isi', isi);
      // Attach file
      for (var i = 0; i < $('input[type=file]')[0].files.length; i++) {
        formData.append('lampiran[]', $('input[type=file]')[0].files[i]);
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
          var opt = '<option value="0">- Pilih Satuan -</option>';
          for (var i = 0; i < data.length; i++) {
            opt += '<option value="'+data[i].satuan_code+'">'+data[i].satuan_desc+'</option>';
          }

          $('#tujuan').append(opt);
        }
      })
    }

function onberita(type){
    $('.page-list > li').removeClass('active');
    if(type == 'input'){
      $('.berita-tulis').show();
      $('.berita-list').hide();
      $('#post-berita').show();
      $('#tambah-berita').hide();
    }else if(type == 'list'){
      $('#list-berita').addClass('active');
      $('.berita-tulis').hide();
      $('.berita-list').show();
      $('#post-berita').hide();
      $('#tambah-berita').show();
    }
};

function save(formData){

  $.ajax({
      type: 'post',
      processData: false,
      contentType: false,
      url: 'saveBerita',
      data : formData,
      success: function(result){
        Swal.fire({
          type: 'success',
          title: 'Berita Berhasil Diposting !',
          showConfirmButton: true,
          // showCancelButton: true,
          confirmButtonText: `Ok`,
        }).then((result) => {
          $(document).ready(function(){
              $("#list-berita > div > a").trigger("click");
              $('#tujuan').prop("selectedIndex", 0).val();
              $('#judul').val('');
              $('#filer_input').val('');
              $('.berita-summernote').summernote('reset');
          });
        })
      }
    });
  };

  function loadberita(param, id){

    $.ajax({
        type: 'post',
        dataType: 'json',
        url: 'getBerita',
        data : {
                param      : param,
                id         : id,
        },
        success: function(result){
            console.log(result.data.berita);
            // $('#balas-pengaduan').attr("disabled", true);
            // $('.email-content').show();
            // $('.email-read').hide();
            // $('.email-compose').hide();
            //
            // $('#input-pengaduan').show();
            // $('#kirim-pengaduan').hide();
            //
            // $('.page-list li.active').removeClass();
            // if(param == 'inbox'){
            //   $('.page-list li#inbox').addClass('active');
            // }else{
            //   $('.page-list li#sent').addClass('active');
            // }

            var dt = $('#setting-default').DataTable({
              destroy: true,
              paging: true,
              lengthChange: false,
              searching: true,
              ordering: true,
              info: true,
              autoWidth: false,
              responsive: false,
              pageLength: 10,
              aaData: result.data.berita,
              aoColumns: [
                  { 'mDataProp': 'id', 'width':'10%'},
                  { 'mDataProp': 'status', 'width':'10%'},
                  { 'mDataProp': 'judul_berita'},
                  { 'mDataProp': 'user_fullname'},
                  { 'mDataProp': 'create_date'},
                  { 'mDataProp': 'create_date'},

              ],
              order: [[0, 'ASC']],
              fixedColumns: true,
              aoColumnDefs:[
                { width: 50, targets: 0 },
                {
                    mRender: function ( data, type, row ) {

                        let el = '';
                        let stt;
                        if(row.status == 1){
                          stt = '0';
                        }else{
                          stt = '1';
                        }
                          el +=        `<button class="btn btn-mini btn-info" onclick="action('headline', '`+row.id+`', '`+stt+`')"><i class="icofont icofont-medal-alt"></i></button>
                                        <button class="btn btn-mini btn-warning" onclick="action('edit', '`+row.id+`')"><i class="ti-pencil-alt"></i></button>
                                        <button class="btn btn-mini btn-danger" onclick="action('delete', '`+row.id+`')"><i class="icofont icofont-trash"></i></button>`;
                        return el;
                    },
                    aTargets: [ 5 ]
                },
                {
                  mRender: function ( data, type, row ) {
                    let el = '';
                    if(row.status == 1){
                      el = `<center class="text-warning"><i class="icofont icofont-medal-alt"></i></center>`;
                    }

                    return el;
                  },
                  aTargets: [ 1 ]
                },
                // {
                //   mRender: function ( data, type, row ) {
                //     var el =
                //     `<a href="#" onclick="loadpengaduan('read',`+row.id+`)" class="email-name"></a>`;
                //     return el;
                //   },
                //   aTargets: [ 2 ]
                // },
                // {
                //   mRender: function ( data, type, row ) {
                //     var el =
                //     `<a href="#" onclick="loadpengaduan('read',`+row.id+`)" class="email-name">`+row.judul_berita+`</a>`;
                //     return el;
                //   },
                //   aTargets: [ 3 ]
                // },
                // {
                //     mRender: function ( data, type, row ) {
                //       var el =
                //       `<a href="email-inbox.html#"><i class="icofont icofont-clip"></i></a>`;
                //         return el;
                //     },
                //     aTargets: [ 4 ]
                // },
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

        }
      });
  };

  function action(mode, id, stat){

    if(mode == 'edit'){
      alert();
      return true;
    }

    let isObject    = {};
    isObject.mode   = mode;
    isObject.id     = id;
    isObject.stat   = stat;

      $.ajax({
          type: 'post',
          dataType: 'json',
          url: 'actionBerita',
          data : {
                  param      : isObject,
          },
          success: function(result){
            loadberita('','');
          }
        });
  }
