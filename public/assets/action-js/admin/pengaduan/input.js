console.log('You are running jQuery version: ' + $.fn.jquery);
$(document).ready(function(){
  $('.pcoded-item li#menu-pengaduan').addClass('active');
  $('.note-toolbar .note-insert, .note-toolbar .note-table, .note-toolbar .note-style:first, .note-toolbar .note-para').remove();
  $('.note-toolbar.panel-heading').remove();
  $('.note-popover').remove();

  const urlParams = new URLSearchParams(window.location.search);
  // const myParam = urlParams.get('par');
  $('#kirim-pengaduan').on('click', function(){
      var tujuan = $('#tujuan').val();
      var nama_tujuan = $('#tujuan option:selected').text();
      var judul = $('#judul').val();
      var isi = $('.email-summernote').summernote('code');

      var formData = new FormData();
      formData.append('param', 'pengaduan');
      formData.append('kode_tujuan', tujuan);
      formData.append('nama_tujuan', nama_tujuan);
      formData.append('judul', judul);
      formData.append('isi', isi);
      // Attach file
      for (var i = 0; i < $('input[type=file]')[0].files.length; i++) {
        formData.append('lampiran[]', $('input[type=file]')[0].files[i]);
      }

      save(formData);
  });

  function save(formData){

    $.ajax({
        type: 'post',
        processData: false,
        contentType: false,
        url: 'save',
        data : formData,
        success: function(result){
          console.log(result);
        }
      });
    };

});
