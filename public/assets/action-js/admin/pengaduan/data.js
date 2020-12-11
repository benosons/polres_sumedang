console.log('You are running jQuery version: ' + $.fn.jquery);
$(document).ready(function(){
  $('.pcoded-item li#menu-pengaduan').addClass('active');
  $('#inbox').addClass('active');
  $('.note-toolbar .note-insert, .note-toolbar .note-table, .note-toolbar .note-style:first, .note-toolbar .note-para').remove();
  $('.note-toolbar.panel-heading').remove();
  $('.note-popover').remove();

  var icons = {
      header: "zmdi zmdi-chevron-down",
      activeHeader: "zmdi zmdi-chevron-up"
  };
  $( "#single-open" ).accordion({
      heightStyle: "content",
      icons: icons
  });

  const urlParams = new URLSearchParams(window.location.search);
  // const myParam = urlParams.get('par');
  // $('#input-pengaduan').on('click', function(){
  //     window.location.href = 'inputpengaduan';
  // });

  loadpengaduan('inbox','');

  $('#kirim-pengaduan').on('click', function(){
      var tujuan = $('#tujuan').val();
      var nama_tujuan = $('#tujuan option:selected').text();
      var judul = $('#judul').val();
      var isi = $('.email-summernote').summernote('code');

      var formData = new FormData();
      formData.append('param', 'pengaduan');
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

  $('#balas-pengaduan').on('click', function(){
      const id = $('#idpengaduan').val();
      const isi = $('#isi-balasan').val();
      var formData = new FormData();
      formData.append('mode', 'balasan');
      formData.append('id', id);
      formData.append('isi', isi);

      savebalasan(formData);
  });


});

function kirimbalasan(){

  const id = $('#idpengaduan').val();
  const isi = $('#isi-balasan').val();
  var formData = new FormData();
  formData.append('mode', 'balasan');
  formData.append('id', id);
  formData.append('isi', isi);

  savebalasan(formData);
};

function compose(){
  $('.email-content').hide();
  $('.email-read').hide();
  $('.email-compose').show();

  $('#input-pengaduan').hide();
  $('#kirim-pengaduan').show();

  $('.page-list li.active').removeClass('active');

}

function loadpengaduan(param, id){

  $.ajax({
      type: 'post',
      dataType: 'json',
      url: 'getpengaduan',
      data : {
              param      : param,
              id         : id,
      },
      success: function(result){

        if(param == 'read'){
          $('#balas-pengaduan').attr("disabled", false);
          $('.page-list li.active').removeClass('active');

          $('.email-content').hide();
          $('.email-read').show();
          $('.email-compose').hide();

          $('#input-pengaduan').show();
          $('#kirim-pengaduan').hide();

          $('.email-read').empty();
          const data      = result.data;
          const pengaduan = result.data.pengaduan;
          const lampiran  = result.data.lampiran;
          const balasan   = result.data.balasan;
          var textarea    = '';
          if($('#role').val() != pengaduan[0]['role']){
            if(pengaduan[0]['status'] == 0){
              var formData = new FormData();
              formData.append('id', pengaduan[0]['id']);
              updatepengaduan(formData);
            }
          }

          // if(pengaduan[0]['create_by'] != $('#userid').val()){
          //   textarea    = '<textarea id="isi-balasan" class="form-control m-t-30 col-xs-12 email-textarea" id="exampleTextarea-1" placeholder="isi balasan pengaduan" rows="4"></textarea>';
          // }
              textarea    =
              `<div class="card-block user-box" id="form-balasan">
                  <div class="media">
                      <div class="media-body">
                              <div class="">
                                  <textarea id="isi-balasan" rows="5" cols="5" class="form-control" placeholder="isi balasan pengaduan..."></textarea>
                                  <div class="text-right m-t-20"><a href="#!" onclick="kirimbalasan()" class="btn btn-success waves-effect waves-light"><i class="fa fa-send"></i> Balas</a></div>
                              </div>
                      </div>
                  </div>
              </div>`;

          var attch = '<i class="icofont icofont-clip f-20 m-r-10"></i>Lampiran <b>('+lampiran.length+')</b>';

          if(lampiran.length != 0){
            attch     += '<div class="row mail-img">';
            for (var i = 0; i < lampiran.length; i++) {
              attch += `
              <div class="col-sm-4 col-md-2 col-xs-12">
                  <a href="email-read.html#"><img class="card-img-top img-fluid img-thumbnail" src="public/`+lampiran[i]['path']+lampiran[i]['file_name']+`" alt="Card image cap"></a>
              </div>
              `;
            }
            attch += '</div>';
          }

          const content = `
          <div class="card">
              <div class="card-header">
                  <input hidden id="idpengaduan" value="`+pengaduan[0]['id']+`">
                  <h5>`+pengaduan[0]['judul']+`</h5>
                  <h6 class="f-right">`+pengaduan[0]['create_date']+`</h6>
              </div>
              <div class="card-block">
                  <div class="media m-b-20">
                      <div class="media-left photo-table">
                          <a href="#">
                              <img class="media-object img-circle" src="public/assets/admin/images/user.png" alt="E-mail User">
                          </a>
                      </div>
                      <div class="media-body photo-contant">
                          <a href="#"><h6 class="user-name txt-primary">`+pengaduan[0]['user_name']+`</h6></a>
                          <a class="user-mail txt-muted" href="email-read.html#"><h6>Email: `+pengaduan[0]['user_email']+`</h6></a>
                          <div>
                              <h6 class="email-welcome-txt"></h6>
                              <p class="email-content">
                              `+pengaduan[0]['isi']+`
                              </p>
                          </div>
                          <div class="m-t-15">
                              `+attch+`
                              `+textarea+`
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          `;
          var balas = '';

          for (var i = 0; i < balasan.length; i++) {
            balas +=
            `<a class="accordion-msg">
                <input hidden id="idpengaduan" value="`+balasan[i]['id']+`">
                <i class="fa fa-mail-reply"></i> Balasan : <h5>`+pengaduan[0]['judul']+`</h5>
                <h6 class="f-right">`+balasan[i]['create_date']+`</h6>
            </a>
              <div class="accordion-desc">
                  <div class="card-block user-box">
                    <div class="media">
                        <a class="media-left" href="timeline-social.html#">
                            <img class="media-object img-circle m-r-20" src="public/assets/admin/images/user.png" alt="Generic placeholder image">
                        </a>
                        <div class="media-body b-b-muted social-client-description">
                            <div class="chat-header">`+balasan[i]['user_fullname']+`<span class="text-muted">`+balasan[i]['create_date']+`</span></div>
                            <p class="text-muted">`+balasan[i]['isi']+`</p>
                        </div>
                    </div>
                  </div>
              </div>`;
          };

          var accr = `<div class="accordion-box" id="single-open">
              <a class="accordion-msg">
                <input hidden id="idpengaduan" value="`+pengaduan[0]['id']+`">
                <i class="icofont icofont-ui-text-chat"></i> Title : <h5> `+pengaduan[0]['judul']+`</h5>
                <h6 class="f-right">`+pengaduan[0]['create_date']+`</h6>
              </a>
              <div class="accordion-desc">
                <div class="card-block user-box">
                  <div class="media">
                      <a class="media-left" href="timeline-social.html#">
                          <img class="media-object img-circle m-r-20" src="public/assets/admin/images/user.png" alt="Generic placeholder image">
                      </a>
                      <div class="media-body b-b-muted social-client-description">
                          <div class="chat-header">`+pengaduan[0]['user_name']+`<span class="text-muted">`+pengaduan[0]['create_date']+`</span></div>
                          <p class="text-muted">`+pengaduan[0]['isi']+`</p>
                      </div>
                  </div>
                  <div class="media">
                    <div class="m-t-15">
                        `+attch+`
                    </div>
                  </div>
                </div>
              </div>
              `+balas+`
          </div>
          `+textarea;

          $('.email-read').append(accr);
          var icons = {
              header: "zmdi zmdi-chevron-down",
              activeHeader: "zmdi zmdi-chevron-up"
          };
          $( "#single-open" ).accordion({
              heightStyle: "content",
              icons: icons
          });


        }else{
          $('#balas-pengaduan').attr("disabled", true);
          $('.email-content').show();
          $('.email-read').hide();
          $('.email-compose').hide();

          $('#input-pengaduan').show();
          $('#kirim-pengaduan').hide();

          $('.page-list li.active').removeClass();
          if(param == 'inbox'){
            $('.page-list li#inbox').addClass('active');
          }else{
            $('.page-list li#sent').addClass('active');
          }

          var dt = $('#table-style-hover').DataTable({
            destroy: true,
            paging: true,
            lengthChange: false,
            searching: true,
            ordering: true,
            info: false,
            autoWidth: false,
            responsive: false,
            pageLength: 10,
            aaData: result.data.pengaduan,
            aoColumns: [
                { 'mDataProp': 'id', 'width':'10%'},
                { 'mDataProp': 'user_fullname'},
                { 'mDataProp': 'nama_tujuan'},
                { 'mDataProp': 'judul'},
                { 'mDataProp': 'create_by'},
                { 'mDataProp': 'create_date'},

            ],
            order: [[0, 'ASC']],
            fixedColumns: true,
            aoColumnDefs:[
              { width: 50, targets: 0 },
              {
                  mRender: function ( data, type, row ) {

                    var penting = '';
                    if(row.penting == '1'){
                      penting = '<i class="icofont icofont-star text-warning"></i>';
                    }
                    var el =
                    `<div class="check-star">
                        <div class="checkbox-fade fade-in-primary checkbox">
                            <label>
                                <input type="checkbox" value="">
                                <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                            </label>
                        </div>
                        `+penting+`
                    </div>`;
                      return el;
                  },
                  aTargets: [ 0 ]
              },
              {
                mRender: function ( data, type, row ) {
                  var el =
                  `<a href="#" onclick="loadpengaduan('read',`+row.id+`)" class="email-name">`+row.user_fullname+`</a>`;
                  return el;
                },
                aTargets: [ 1 ]
              },
              {
                mRender: function ( data, type, row ) {
                  var el =
                  `<a href="#" onclick="loadpengaduan('read',`+row.id+`)" class="email-name">`+row.nama_tujuan+`</a>`;
                  return el;
                },
                aTargets: [ 2 ]
              },
              {
                mRender: function ( data, type, row ) {
                  var el =
                  `<a href="#" onclick="loadpengaduan('read',`+row.id+`)" class="email-name">`+row.judul+`</a>`;
                  return el;
                },
                aTargets: [ 3 ]
              },
              {
                  mRender: function ( data, type, row ) {
                    var el =
                    `<a href="email-inbox.html#"><i class="icofont icofont-clip"></i></a>`;
                      return el;
                  },
                  aTargets: [ 4 ]
              },
            //   {
            //       "mRender": function ( data, type, row ) {
            //         var el = '';
            //         if($('#role').val() == '30'){
            //           if(row.status == "NULL"){
            //             el ='<span class="badge badge-default">terkirim</span>';
            //           }else if (row.status == "1"){
            //             el = '<span class="badge badge-success">dibalas admin</span>';
            //           }else if (row.status == "3"){
            //             el = '<span class="badge badge-default">terkirim</span>';
            //           }else if (row.status == "4"){
            //             el = '<span class="badge badge-danger">close</span>';
            //           }else if (row.status == "2"){
            //             el = '<span class="badge badge-default">terkirim</span>';
            //           }
            //         }else{
            //           if(row.status == "NULL"){
            //             el ='<span class="badge badge-info">pesan baru</span>';
            //           }else if (row.status == "4"){
            //             el = '<span class="badge badge-danger">close</span>';
            //           }else if (row.status == "2"){
            //             el = '<span class="badge badge-success">dibalas user</span>';
            //           }else if(row.status == "3"){
            //             el = '<span class="badge badge-default">terkirim</span>';
            //           }else if(row.status == "1"){
            //             el = '<span class="badge badge-default">terkirim</span>';
            //           }
            //         }
            //
            //           return el;
            //       },
            //       "aTargets": [ 1 ]
            //   },
            //   {
            //       "mRender": function ( data, type, row ) {
            //         var el = `
            //                   <div class="row">
            //                     <div class="col-md-4">
            //                       <button onclick="replylaporan(`+row.id+`,'`+row.nama_pelapor+`','`+row.id_user+`','`+row.isi+`','`+row.create_date+`','`+row.id_admin+`','1')" type="button" class="btn btn-block btn-success btn-sm"><i class="fas fa-reply"></i></button>
            //                     </div>
            //                     <div class="col-md-4">
            //                       <button onclick="closelaporan(`+row.id+`)" type="button" class="btn btn-block btn-danger btn-sm"><i class="fas fa-ban"></i></button>
            //                     </div>
            //                   </div>
            //                     `;
            //           if(row.status == "4"){
            //             el = `<div class="row">
            //                     <div class="col-md-12">
            //                       <button onclick="replylaporan(`+row.id+`,'`+row.nama_pelapor+`','`+row.id_user+`','`+row.isi+`','`+row.create_date+`','`+row.id_admin+`','4')" type="button" class="btn btn-block btn-success btn-sm"><i class="fas fa-eye"></i></button>
            //                     </div>
            //                   </div>`;
            //           }else{
            //             el = el;
            //           }
            //
            //           return el;
            //       },
            //       "aTargets": [ 6 ]
            //   },
            ],
            createdRow: function( row, data, dataIndex ) {
              if(data.create_by != $('#userid').val()){
                if(data.status == 0){
                  $(row).addClass('unread');
                }
              }
            },
            drawCallback: function( settings ) {
               $("#table-style-hover thead").remove();
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


      }
    });
};

function save(formData){

  $.ajax({
      type: 'post',
      processData: false,
      contentType: false,
      url: 'save',
      data : formData,
      success: function(result){
        Swal.fire({
          type: 'success',
          title: 'Pengaduan Berhasil Terkirim !',
          showConfirmButton: true,
          // showCancelButton: true,
          confirmButtonText: `Ok`,
        }).then((result) => {
          $(document).ready(function(){
              $("#sent > div > a").trigger("click");
              $('#tujuan').prop("selectedIndex", 0).val();
              $('#judul').val('');
              $('#filer_input').val('');
              $('.email-summernote').summernote('reset');
          });
        })
      }
    });
  };

function savebalasan(formData){

  $.ajax({
      type: 'post',
      processData: false,
      contentType: false,
      url: 'save',
      data : formData,
      success: function(result){
        // Swal.fire({
        //   type: 'success',
        //   title: 'Pengaduan Berhasil Terkirim !',
        //   showConfirmButton: true,
        //   // showCancelButton: true,
        //   confirmButtonText: `Ok`,
        // }).then((result) => {
        //   $(document).ready(function(){
        //       $("#sent > div > a").trigger("click");
        //       $('#tujuan').prop("selectedIndex", 0).val();
        //       $('#judul').val('');
        //       $('#filer_input').val('');
        //       $('.email-summernote').summernote('reset');
        //   });
        // })
      }
    });
  };

function updatepengaduan(formData){
  $.ajax({
      type: 'post',
      processData: false,
      contentType: false,
      url: 'update',
      data : formData,
      success: function(result){

      }
    });
  };
