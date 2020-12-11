console.log('You are running jQuery version: ' + $.fn.jquery);
$(document).ready(function(){
  $('.pcoded-item li#menu-pengaduan').addClass('active');
  $('.note-toolbar .note-insert, .note-toolbar .note-table, .note-toolbar .note-style:first, .note-toolbar .note-para').remove();
  $('.note-toolbar.panel-heading').remove();
  $('.note-popover').remove();

  const urlParams = new URLSearchParams(window.location.search);
  const myParam = urlParams.get('ids');

  loadpengaduan(myParam);
  function loadpengaduan(myParam){
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: 'getpengaduan',
        data : {
                param      : myParam,
        },
        success: function(result){

          const data      = result.data;
          const pengaduan = result.data.pengaduan;
          const lampiran  = result.data.lampiran;

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
                              <textarea class="form-control m-t-30 col-xs-12 email-textarea" id="exampleTextarea-1" placeholder="Reply Your Thoughts" rows="4"></textarea>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          `;

          $('.email-read').append(content);
        }
      });
    }

});
