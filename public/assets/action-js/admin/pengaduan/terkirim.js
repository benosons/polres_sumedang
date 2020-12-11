console.log('You are running jQuery version: ' + $.fn.jquery);
$(document).ready(function(){
  $('.pcoded-item li#menu-pengaduan').addClass('active');
  $('#sent').addClass('active');

  const urlParams = new URLSearchParams(window.location.search);
  // const myParam = urlParams.get('par');
  $('#input-pengaduan').on('click', function(){
      window.location.href = 'inputpengaduan';
  });

  loadpengaduan('sent');
  function loadpengaduan(myParam){
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: 'getpengaduan',
        data : {
                param      : myParam,
         },
        success: function(result){
          console.log(result);
          var dt = $('#table-style-hover').DataTable({
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
                    `<a href="bacapengaduan?ids=`+row.id+`" class="email-name">`+row.user_fullname+`</a>`;
                    return el;
                  },
                  aTargets: [ 1 ]
                },
                {
                  mRender: function ( data, type, row ) {
                    var el =
                    `<a href="bacapengaduan?ids=`+row.id+`" class="email-name">`+row.tujuan+`</a>`;
                    return el;
                  },
                  aTargets: [ 2 ]
                },
                {
                  mRender: function ( data, type, row ) {
                    var el =
                    `<a href="bacapengaduan?ids=`+row.id+`" class="email-name">`+row.judul+`</a>`;
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
                if (data.status == 0) {
                  $(row).addClass('unread');
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
      });
    };
});
