$(document).ready(function(){
  loadmenu('satuan');
  var f = document.createElement("iframe");
  f.src = "https://kopi.dev/widget-covid-19/";
  f.width = "100%";
  f.height = 380;
  f.scrolling = "no";
  f.frameBorder = 0;
  var rootEl = document.getElementById("kopi-covid");

  if(rootEl){
    rootEl.appendChild(f);
  }

});

function loadmenu(param){

$.ajax({
    type: 'post',
    dataType: 'json',
    url: 'loadparam',
    data : {
            param      : param,
            id         : '',
    },
    success: function(result){

        let data = result.data;
        var li = '';
        for (var i = 0; i < data.length; i++) {
            li += `<li>
                  	<a href="#" title="Post Default">
                  		SAT `+data[i].satuan_name.toUpperCase()+`
                  	</a>
                  </li>`;
        }

        $('#satuan-fungsi').html(li);
      }
    });

  }
