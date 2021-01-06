console.log('You are running jQuery version: ' + $.fn.jquery);
$(document).ready(function(){
  $('ul.sf-menu > li.selected').removeClass('selected');
  $('#menu-home').addClass('selected');
  loadberita('','');

});

function loadberita(param, id){

  $.ajax({
      type: 'post',
      dataType: 'json',
      url: 'loadBeritaHeadline',
      data : {
              param      : param,
              id         : id,
      },
      success: function(result){
          let data = result.data;

          var content = '';
          $.each(data, function(key, value) {
            let id_satuan;
            content += ``;
            for (var i = 0;(i < 3 && i < value.length); i++) {
              id_satuan = value[i].satuan;
              console.log(value[i]);
              content += `<li class="slide">
          			<img src='`+$('#baseURL').val()+'/'+value[i].path+value[i].file_name+`' alt='img'>
          			<div class="slider_content_box">
          				<ul class="post_details simple">
          					<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="`+key.toUpperCase()+`">`+key.toUpperCase()+`</a></li>
          					<li class="date">
          						`+value[i].create_date+`
          					</li>
          				</ul>
          				<h2><a href="/berita?params=post&ids=`+value[i].id_parent+`" title="High Altitudes May Aid Weight Control">`+value[i].judul_berita+`</a></h2>
          				<p class="clearfix">`+value[i].isi_berita+`.</p>
          			</div>
          		</li>`;
            }

          });

          $('.slider').html(content);

          //slider
        	$(".slider").carouFredSel({
        		responsive: false,
        		//align: "left",
        		width: "100%",
        		items: {
        			start: -1,
        			visible: 3,
        			minimum: 3
        		},
        		scroll: {
        			items: 1,
        			easing: "easeInOutQuint",
        			duration: 750
        		},
        		/*prev: {
        			onAfter: onAfterSlide,
        			onBefore: onBeforeSlide,
        			easing: "easeInOutQuint",
        			duration: 750
        		},
        		next: {
        			onAfter: onAfterSlide,
        			onBefore: onBeforeSlide,
        			easing: "easeInOutQuint",
        			duration: 750
        		},*/
        		auto: {
        			play: false,
        			timeoutDuration: 500,
        			duration: 5000/*,
        			onAfter: onAfterSlide,
        			onBefore: onBeforeSlide,
        			easing: "easeInOutQuint",
        			duration: 750*/
        		}
        	},
        	{
        		transition: true/*,
        		wrapper: {
        			classname: "caroufredsel_wrapper caroufredsel_wrapper_slider"
        		}*/
        	});
        	$(".slider").sliderControl({
        		appendTo: $(".slider_content_box"),
        		listContainer: $(".slider_posts_list_container"),
        		listItems: ($(".page").width()>462 ? 4 : 2)
        	});


      }
    });
  }
