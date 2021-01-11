<?php

/* users/pelayanan/pelayanan.html */
class __TwigTemplate_a4d789e0726c1eb85a72d708dfcf9f6595c63c6091e395aeba8569b2f685a9a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("users/layout.html", "users/pelayanan/pelayanan.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "users/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "<input id=\"baseUrl\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "\" hidden>
\t<div class=\"page_header clearfix page_margin_top\">
\t\t<div class=\"page_header_left\">
\t\t\t<h2 class=\"page_title\">PELAYANAN</h2>
\t\t</div>
\t\t<div class=\"page_header_right\">
\t\t\t<ul class=\"bread_crumb\">
\t\t\t\t<li>
\t\t\t\t\t<a title=\"Home\" href=\"index.html@page=home.html\">
\t\t\t\t\t\tHome
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"separator icon_small_arrow right_gray\">
\t\t\t\t\t&nbsp;
\t\t\t\t</li>
        <li>
          Pelayanan
        </li>
\t\t\t\t<li class=\"separator icon_small_arrow right_gray\">
\t\t\t\t\t&nbsp;
\t\t\t\t</li>
\t\t\t\t<li>";
        // line 24
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["page"]) ? $context["page"] : null)), "html", null, true);
        echo "
\t\t\t\t</li>
\t\t\t\t<li>

\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"page_layout clearfix\">
\t\t<div class=\"divider_block clearfix\">
\t\t\t<hr class=\"divider first\">
\t\t\t<hr class=\"divider subheader_arrow\">
\t\t\t<hr class=\"divider last\">
\t\t</div>
    <div id=\"page-kapolres\">
\t\t\t<h1 class=\"about_title center_align page_margin_top\">Pelayanan <b>";
        // line 39
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["page"]) ? $context["page"] : null)), "html", null, true);
        echo "</b></h1>
\t\t\t<h2 class=\"about_subtitle center_align\">POLRES SUMEDANG</h2>
\t\t\t<br/>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"post single\">
\t\t\t\t\t<a href=\"images/samples/690x450/image_10.jpg\" class=\"post_image page_margin_top prettyPhoto\">
\t\t\t\t\t\t<img id=\"banner-pelayanan\" src=\"https://www.polri.go.id/assets/images/header/header1579413388.jpg\" alt=\"img\" style=\"display: block;\">
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"post_content page_margin_top_section clearfix\">
\t\t\t\t\t\t<div class=\"column column_2_3\" id=\"konten-pelayanan\">
\t\t\t\t\t\t\t<div class=\"col-lg-10\" style=\"padding-left: 80px; padding-right: 80px;\">
\t\t\t\t\t\t\t\t<br>
\t                <hr style=\"border-top:#ccc 6px solid;\">
\t\t\t\t\t\t\t\t<h1>Surat Ijin Mengemudi (SIM)</h1>
\t\t\t\t\t\t\t\t<hr style=\"border-top:#ccc 2px solid;\">

\t\t\t\t                <p>SIM (Surat Ijin Mengemudi) adalah bukti registrasi dan identifikasi yang diberikan oleh Polri kepada seseoraang yang telah memenuhi persyaratan administrasi, sehat jasmani dan rohani, memahami peraturan lalu lintas dan trampil mengemudikan kendaraan bermotor.</p>

\t\t\t\t                <h4><b>Dasar Hukum</b></h4>
\t\t\t\t                <ol>
\t\t\t\t                    <li>UU No.2 Tahun 2002</li>
\t\t\t\t                        <ul>
\t\t\t\t                            <li>Pasal 14 ayat (1) b</li>
\t\t\t\t                            <li>Pasal 15 ayat (2) c</li>
\t\t\t\t                        </ul>
\t\t\t\t                    <li>Peraturan Pemerintah No. 44 / 1993 Pasal 216</li>
\t\t\t\t                </ol>
\t\t\t\t                <hr>
\t\t\t\t                <h4><b>Fungsi dan Peranan</b></h4>
\t\t\t\t                <ul>
\t\t\t\t                    <li>Sebagai sarana identifikasi / jati diri seseorang</li>
\t\t\t\t                    <li>Sebagai alat bukti</li>
\t\t\t\t                    <li>Sebagai sarana upaya paksa</li>
\t\t\t\t                    <li>Sebagai sarana pelayanan masyarakat</li>
\t\t\t\t                </ul>
\t\t\t\t                <p>Setiap pengemudi kendaraan bermotor wajib memiliki SIM peraturan ini tercantum pada Pasal 18 (1) UU No. 14 Th 1992 tentang Lalu-lintas dan Angkutan Jalan, bahwa setiap pengemudi kendaraan bermotor diwilayah wajib memiliki Surat Ijin Mengemudi (SIM).</p>
\t\t\t\t                <hr>
\t\t\t\t                <h4><b>Penggunaan Golongan SIM</b></h4>
\t\t\t\t                <p><b>Pasal 211 (2) PP 44 / 93</b><br><b>Golongan SIM A</b><br>SIM untuk kendaraan bermotor roda 4 dengan berat yang diperbolehkan tidak lebih dari 3.500 Kg.</p>
\t\t\t\t                <p><b>Golongan SIM A Khusus</b><br>SIM untuk kendaraan bermotor roda 3 dengan karoseri mobil (Kajen VI) yang digunakan untuk angkutan orang / barang (bukan sepeda motor dengan kereta samping)</p>
\t\t\t\t                <p><b>Golongan SIM B1</b><br>SIM untuk kendaraan bermotor dengan berat yang diperbolehkan lebih dari 1.000 Kg.</p>
\t\t\t\t                <p><b>Golongan SIM B2</b><br>SIM untuk kendaraan bermotor yang menggunakan kereta tempelan dengan berat yang diperbolehkan lebih dari 1.000 Kg.</p>
\t\t\t\t                <p><b>Golongan SIM C</b><br>SIM untuk kendaraan bermotor roda 2 yang dirancang dengan kecepatan lebih dari 40 Km / Jam</p>
\t\t\t\t                <p><b>Golongan SIM D</b><br>SIM khusus bagi pengemudi yang menyandang disabilitas/berkebutuhan khusus.</p>

\t\t\t\t                <br>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"column column_1_3\">
\t\t\t\t\t\t\t<h4 class=\"box_header page_margin_top_section\">Pengumuman</h4>
\t\t\t\t\t\t\t<div class=\"vertical_carousel_container clearfix\">
\t\t\t\t\t\t\t\t<a class=\"slider_control up slider_control_0\" href=\"#\" title=\"prev\" style=\"display: block;\"></a><div class=\"caroufredsel_wrapper caroufredsel_wrapper_vertical_carousel\" style=\"display: block; text-align: start; float: none; position: relative; inset: auto; z-index: auto; width: 330px; height: 390px; margin: 0px; overflow: hidden;\"><ul class=\"blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750 pr_preloader_vl_0\" style=\"text-align: left; float: none; position: absolute; inset: 0px auto auto 0px; margin: 0px; height: 1430px; width: 330px; z-index: auto;\">
\t\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li><li class=\"post\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_small_image.html\" title=\"Syrian Civilians Trapped For Months Continue To Be Evacuated\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_small_image.html\" title=\"Syrian Civilians Trapped For Months Continue To Be Evacuated\">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>
\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li><li class=\"post\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_quote_2.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_quote_2.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=sports.html\" title=\"SPORTS\">SPORTS</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li><li class=\"post\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">Nuclear Fusion Closer to Becoming a Reality</a>
\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li></ul></div><a class=\"slider_control down slider_control_0\" href=\"#\" title=\"next\" style=\"display: block;\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 class=\"box_header page_margin_top_section\">Videos</h4>
\t\t\t\t\t\t\t<div class=\"horizontal_carousel_container big page_margin_top\">
\t\t\t\t\t\t\t\t<a class=\"slider_control left slider_control_2\" href=\"#\" title=\"prev\" style=\"display: block;\"></a><div class=\"caroufredsel_wrapper caroufredsel_wrapper_hortizontal_carousel\" style=\"display: block; text-align: start; float: none; position: relative; inset: auto; z-index: auto; width: 360px; height: 329px; margin: 0px; overflow: hidden;\"><ul class=\"blog horizontal_carousel visible-1 autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750 pr_preloader_2\" style=\"display: block; text-align: left; float: none; position: absolute; inset: 0px auto auto 0px; margin: 0px; width: 2520px; height: 329px;\">
\t\t\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_video.html\" title=\"Struggling Nuremberg Sack Coach Verbeek\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon video\" style=\"display: block;\"></span>
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/samples/330x242/image_03.jpg\" alt=\"img\" style=\"display: block;\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<h5 class=\"with_number\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_video.html\" title=\"Struggling Nuremberg Sack Coach Verbeek\">Struggling Nuremberg Sack Coach Verbeek</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post_video.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=sports.html\" title=\"SPORTS\">SPORTS</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_video_2.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon video\" style=\"display: block;\"></span>
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/samples/330x242/image_14.jpg\" alt=\"img\" style=\"display: block;\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<h5 class=\"with_number\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_video_2.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post_video_2.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=sports.html\" title=\"SPORTS\">SPORTS</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_video.html\" title=\"New Painkiller Rekindles Addiction Concerns\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon video\" style=\"display: block;\"></span>
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/samples/330x242/image_04.jpg\" alt=\"img\" style=\"display: block;\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<h5 class=\"with_number\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_video.html\" title=\"New Painkiller Rekindles Addiction Concerns\">New Painkiller Rekindles Addiction Concerns</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post_video.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=sports.html\" title=\"SPORTS\">SPORTS</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul></div><a class=\"slider_control right slider_control_2\" href=\"#\" title=\"next\" style=\"display: block;\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
  \t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "users/pelayanan/pelayanan.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 39,  55 => 24,  30 => 2,  11 => 1,);
    }
}
/* {% extends "users/layout.html" %} {% block content %}*/
/* <input id="baseUrl" value="{{baseURL}}" hidden>*/
/* 	<div class="page_header clearfix page_margin_top">*/
/* 		<div class="page_header_left">*/
/* 			<h2 class="page_title">PELAYANAN</h2>*/
/* 		</div>*/
/* 		<div class="page_header_right">*/
/* 			<ul class="bread_crumb">*/
/* 				<li>*/
/* 					<a title="Home" href="index.html@page=home.html">*/
/* 						Home*/
/* 					</a>*/
/* 				</li>*/
/* 				<li class="separator icon_small_arrow right_gray">*/
/* 					&nbsp;*/
/* 				</li>*/
/*         <li>*/
/*           Pelayanan*/
/*         </li>*/
/* 				<li class="separator icon_small_arrow right_gray">*/
/* 					&nbsp;*/
/* 				</li>*/
/* 				<li>*/
/* 					{{page|upper}}*/
/* 				</li>*/
/* 				<li>*/
/* */
/* 				</li>*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="page_layout clearfix">*/
/* 		<div class="divider_block clearfix">*/
/* 			<hr class="divider first">*/
/* 			<hr class="divider subheader_arrow">*/
/* 			<hr class="divider last">*/
/* 		</div>*/
/*     <div id="page-kapolres">*/
/* 			<h1 class="about_title center_align page_margin_top">Pelayanan <b>{{page|upper}}</b></h1>*/
/* 			<h2 class="about_subtitle center_align">POLRES SUMEDANG</h2>*/
/* 			<br/>*/
/* 			<div class="row">*/
/* 				<div class="post single">*/
/* 					<a href="images/samples/690x450/image_10.jpg" class="post_image page_margin_top prettyPhoto">*/
/* 						<img id="banner-pelayanan" src="https://www.polri.go.id/assets/images/header/header1579413388.jpg" alt="img" style="display: block;">*/
/* 					</a>*/
/* 					<div class="post_content page_margin_top_section clearfix">*/
/* 						<div class="column column_2_3" id="konten-pelayanan">*/
/* 							<div class="col-lg-10" style="padding-left: 80px; padding-right: 80px;">*/
/* 								<br>*/
/* 	                <hr style="border-top:#ccc 6px solid;">*/
/* 								<h1>Surat Ijin Mengemudi (SIM)</h1>*/
/* 								<hr style="border-top:#ccc 2px solid;">*/
/* */
/* 				                <p>SIM (Surat Ijin Mengemudi) adalah bukti registrasi dan identifikasi yang diberikan oleh Polri kepada seseoraang yang telah memenuhi persyaratan administrasi, sehat jasmani dan rohani, memahami peraturan lalu lintas dan trampil mengemudikan kendaraan bermotor.</p>*/
/* */
/* 				                <h4><b>Dasar Hukum</b></h4>*/
/* 				                <ol>*/
/* 				                    <li>UU No.2 Tahun 2002</li>*/
/* 				                        <ul>*/
/* 				                            <li>Pasal 14 ayat (1) b</li>*/
/* 				                            <li>Pasal 15 ayat (2) c</li>*/
/* 				                        </ul>*/
/* 				                    <li>Peraturan Pemerintah No. 44 / 1993 Pasal 216</li>*/
/* 				                </ol>*/
/* 				                <hr>*/
/* 				                <h4><b>Fungsi dan Peranan</b></h4>*/
/* 				                <ul>*/
/* 				                    <li>Sebagai sarana identifikasi / jati diri seseorang</li>*/
/* 				                    <li>Sebagai alat bukti</li>*/
/* 				                    <li>Sebagai sarana upaya paksa</li>*/
/* 				                    <li>Sebagai sarana pelayanan masyarakat</li>*/
/* 				                </ul>*/
/* 				                <p>Setiap pengemudi kendaraan bermotor wajib memiliki SIM peraturan ini tercantum pada Pasal 18 (1) UU No. 14 Th 1992 tentang Lalu-lintas dan Angkutan Jalan, bahwa setiap pengemudi kendaraan bermotor diwilayah wajib memiliki Surat Ijin Mengemudi (SIM).</p>*/
/* 				                <hr>*/
/* 				                <h4><b>Penggunaan Golongan SIM</b></h4>*/
/* 				                <p><b>Pasal 211 (2) PP 44 / 93</b><br><b>Golongan SIM A</b><br>SIM untuk kendaraan bermotor roda 4 dengan berat yang diperbolehkan tidak lebih dari 3.500 Kg.</p>*/
/* 				                <p><b>Golongan SIM A Khusus</b><br>SIM untuk kendaraan bermotor roda 3 dengan karoseri mobil (Kajen VI) yang digunakan untuk angkutan orang / barang (bukan sepeda motor dengan kereta samping)</p>*/
/* 				                <p><b>Golongan SIM B1</b><br>SIM untuk kendaraan bermotor dengan berat yang diperbolehkan lebih dari 1.000 Kg.</p>*/
/* 				                <p><b>Golongan SIM B2</b><br>SIM untuk kendaraan bermotor yang menggunakan kereta tempelan dengan berat yang diperbolehkan lebih dari 1.000 Kg.</p>*/
/* 				                <p><b>Golongan SIM C</b><br>SIM untuk kendaraan bermotor roda 2 yang dirancang dengan kecepatan lebih dari 40 Km / Jam</p>*/
/* 				                <p><b>Golongan SIM D</b><br>SIM khusus bagi pengemudi yang menyandang disabilitas/berkebutuhan khusus.</p>*/
/* */
/* 				                <br>*/
/* */
/* 							</div>*/
/* 						</div>*/
/* 						<div class="column column_1_3">*/
/* 							<h4 class="box_header page_margin_top_section">Pengumuman</h4>*/
/* 							<div class="vertical_carousel_container clearfix">*/
/* 								<a class="slider_control up slider_control_0" href="#" title="prev" style="display: block;"></a><div class="caroufredsel_wrapper caroufredsel_wrapper_vertical_carousel" style="display: block; text-align: start; float: none; position: relative; inset: auto; z-index: auto; width: 330px; height: 390px; margin: 0px; overflow: hidden;"><ul class="blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750 pr_preloader_vl_0" style="text-align: left; float: none; position: absolute; inset: 0px auto auto 0px; margin: 0px; height: 1430px; width: 330px; z-index: auto;">*/
/* 								<li class="post">*/
/* 										<a href="index.html@page=post_gallery.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">*/
/* 										</a>*/
/* 										<div class="post_content">*/
/* 											<h5>*/
/* 												<a href="index.html@page=post_gallery.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>*/
/* 											</h5>*/
/* 											<ul class="post_details simple">*/
/* 												<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 												<li class="date">*/
/* 													10:11 PM, Feb 02*/
/* 												</li>*/
/* 											</ul>*/
/* 										</div>*/
/* 									</li><li class="post">*/
/* 										<a href="index.html@page=post_small_image.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">*/
/* 										</a>*/
/* 										<div class="post_content">*/
/* 											<h5>*/
/* 												<a href="index.html@page=post_small_image.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>*/
/* 											</h5>*/
/* 											<ul class="post_details simple">*/
/* 												<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 												<li class="date">*/
/* 													10:11 PM, Feb 02*/
/* 												</li>*/
/* 											</ul>*/
/* 										</div>*/
/* 									</li><li class="post">*/
/* 										<a href="index.html@page=post_quote_2.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 										</a>*/
/* 										<div class="post_content">*/
/* 											<h5>*/
/* 												<a href="index.html@page=post_quote_2.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/* 											</h5>*/
/* 											<ul class="post_details simple">*/
/* 												<li class="category"><a href="index.html@page=category&amp;cat=sports.html" title="SPORTS">SPORTS</a></li>*/
/* 												<li class="date">*/
/* 													10:11 PM, Feb 02*/
/* 												</li>*/
/* 											</ul>*/
/* 										</div>*/
/* 									</li><li class="post">*/
/* 										<a href="index.html@page=post.html" title="Nuclear Fusion Closer to Becoming a Reality">*/
/* 										</a>*/
/* 										<div class="post_content">*/
/* 											<h5>*/
/* 												<a href="index.html@page=post.html" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a>*/
/* 											</h5>*/
/* 											<ul class="post_details simple">*/
/* 												<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 												<li class="date">*/
/* 													10:11 PM, Feb 02*/
/* 												</li>*/
/* 											</ul>*/
/* 										</div>*/
/* 									</li></ul></div><a class="slider_control down slider_control_0" href="#" title="next" style="display: block;"></a>*/
/* 							</div>*/
/* 							<h4 class="box_header page_margin_top_section">Videos</h4>*/
/* 							<div class="horizontal_carousel_container big page_margin_top">*/
/* 								<a class="slider_control left slider_control_2" href="#" title="prev" style="display: block;"></a><div class="caroufredsel_wrapper caroufredsel_wrapper_hortizontal_carousel" style="display: block; text-align: start; float: none; position: relative; inset: auto; z-index: auto; width: 360px; height: 329px; margin: 0px; overflow: hidden;"><ul class="blog horizontal_carousel visible-1 autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750 pr_preloader_2" style="display: block; text-align: left; float: none; position: absolute; inset: 0px auto auto 0px; margin: 0px; width: 2520px; height: 329px;">*/
/* 									<li class="post">*/
/* 										<a href="index.html@page=post_video.html" title="Struggling Nuremberg Sack Coach Verbeek">*/
/* 											<span class="icon video" style="display: block;"></span>*/
/* 											<img src="images/samples/330x242/image_03.jpg" alt="img" style="display: block;">*/
/* 										</a>*/
/* 										<h5 class="with_number">*/
/* 											<a href="index.html@page=post_video.html" title="Struggling Nuremberg Sack Coach Verbeek">Struggling Nuremberg Sack Coach Verbeek</a>*/
/* 											<a class="comments_number" href="index.html@page=post_video.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 										</h5>*/
/* 										<ul class="post_details simple">*/
/* 											<li class="category"><a href="index.html@page=category&amp;cat=sports.html" title="SPORTS">SPORTS</a></li>*/
/* 											<li class="date">*/
/* 												10:11 PM, Feb 02*/
/* 											</li>*/
/* 										</ul>*/
/* 									</li>*/
/* 									<li class="post">*/
/* 										<a href="index.html@page=post_video_2.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 											<span class="icon video" style="display: block;"></span>*/
/* 											<img src="images/samples/330x242/image_14.jpg" alt="img" style="display: block;">*/
/* 										</a>*/
/* 										<h5 class="with_number">*/
/* 											<a href="index.html@page=post_video_2.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/* 											<a class="comments_number" href="index.html@page=post_video_2.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 										</h5>*/
/* 										<ul class="post_details simple">*/
/* 											<li class="category"><a href="index.html@page=category&amp;cat=sports.html" title="SPORTS">SPORTS</a></li>*/
/* 											<li class="date">*/
/* 												10:11 PM, Feb 02*/
/* 											</li>*/
/* 										</ul>*/
/* 									</li>*/
/* 									<li class="post">*/
/* 										<a href="index.html@page=post_video.html" title="New Painkiller Rekindles Addiction Concerns">*/
/* 											<span class="icon video" style="display: block;"></span>*/
/* 											<img src="images/samples/330x242/image_04.jpg" alt="img" style="display: block;">*/
/* 										</a>*/
/* 										<h5 class="with_number">*/
/* 											<a href="index.html@page=post_video.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a>*/
/* 											<a class="comments_number" href="index.html@page=post_video.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 										</h5>*/
/* 										<ul class="post_details simple">*/
/* 											<li class="category"><a href="index.html@page=category&amp;cat=sports.html" title="SPORTS">SPORTS</a></li>*/
/* 											<li class="date">*/
/* 												10:11 PM, Feb 02*/
/* 											</li>*/
/* 										</ul>*/
/* 									</li>*/
/* 								</ul></div><a class="slider_control right slider_control_2" href="#" title="next" style="display: block;"></a>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/*   	</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
