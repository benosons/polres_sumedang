console.log('You are running jQuery version: ' + $.fn.jquery);
$(document).ready(function(){
  $('.pcoded-item li#menu-pengaduan').addClass('active');
  $('.note-toolbar .note-insert, .note-toolbar .note-table, .note-toolbar .note-style:first, .note-toolbar .note-para').remove();
  $('.note-toolbar.panel-heading').remove();
  $('.note-popover').remove();

  const urlParams = new URLSearchParams(window.location.search);
  const myParam = urlParams.get('par');
  $('#kirim-pengaduan').on('click', function(){
      var tujuan = $('#tujuan').val();
      var judul = $('#judul').val();
      var isi = $('.email-summernote').summernote('code');
      // alert(textareaValue);
      save('data_pengaduan', tujuan, judul, isi);
  });

  function save(param, tujuan, judul, isi){
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: 'save',
        data : {
                param      : param,
                tujuan      : tujuan,
                judul      : judul,
                isi      : isi,
         },
        success: function(result){
          console.log(result);
        }
      });
    };

});
