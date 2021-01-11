<?php

/* users/index.html */
class __TwigTemplate_5334762ecaa173c6527382219058f415b6d63d06d5bcf33a3c96685394f4b6e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("users/layout.html", "users/index.html", 1);
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
        echo "<div class=\"page_layout clearfix\">
\t<div class=\"divider_block clearfix\">
\t\t<hr class=\"divider first\">
\t\t<hr class=\"divider subheader_arrow\">
\t\t<hr class=\"divider last\">
\t</div>
\t<div class=\"row page_margin_top\">
\t\t<div class=\"column column_1_2\">
\t\t\t<img class=\"responsive pr_preload\" src='https://seeklogo.com/images/P/polda-jawa-barat-logo-D4EEF9A6C9-seeklogo.com.png' alt='img' style=\"padding-left: 20%;width: 51%;\">
\t\t</div>
\t\t<div class=\"column column_1_2\">
\t\t\t<h2 class=\"about_title\">Selamat Datang diwebsite</h2>
\t\t\t<h3 class=\"about_subtitle\">POLRES SUMEDANG</h3>
\t\t\t<!-- <h3 class=\"page_margin_top\">Politicians have looked weak in the face of such natural disaster, with many facing criticism from local.</h3> -->
\t\t\t<p class=\"text padding_top_0 page_margin_top\" style=\"text-align: justify;\">Website <b>Polres Sumedang</b> memiliki fungsi untuk menyampaikan informasi terkait berita, kegiatan, informasi dan hal-hal yang berkaitan dengan kepolisian resor sumedang. Kepolisian Resor Sumedang merupakan salah satu Polres yang berada di bawah organisasi Kepolisian Daerah Jawa Barat yang mempunyai wilayah hukum meliputi seluruh wilayah Kabupaten Sumedang.
dengan memanfaatkan perkembangan teknologi dan informasi kepala polisi resor sumedang AKBP Eko Prasetyo Robbyanto ingin lebih mendekatkan diri antara masyarakat di kabupaten sumedang dengan pihak kepolisian resor sumedang guna meningkatkan penyampaian informasi yang lebih tepat dan cepat.</p>
\t\t</div>
\t</div>
</div>
<div class=\"page_layout page_margin_top clearfix\">
\t\t<div class=\"row\">
\t\t\t<div class=\"column column_2_3\">
\t\t\t\t<h4 class=\"box_header\">Berita Terbaru</h4>
\t\t\t\t<div class=\"row\" id=\"berita-terbaru\">
\t\t\t\t\t<ul class=\"blog column column_1_2\">
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">
\t\t\t\t\t\t\t\t<img src='https://humas.polri.go.id/wp-content/uploads/2020/06/IMG-20200601-WA0188.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<h2 class=\"with_number\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">Polres Sumedang Polda Jabar, Edukasi, Sosialisasi...</a>
\t\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<ul class=\"post_details\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
\t\t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post.html\" title=\"Read more\"><span class=\"arrow\"></span><span>READ MORE</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post_quote.html\" title=\"High Altitudes May Aid Weight Control\">
\t\t\t\t\t\t\t\t<img src='https://humas.polri.go.id/wp-content/uploads/2020/06/IMG-20200603-WA0347-1024x768.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<h2 class=\"with_number\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_quote.html\" title=\"High Altitudes May Aid Weight Control\">Kapolres Sumedang Polda Jabar Cek Pasar Sandang Dalam Rangka AKB</a>
\t\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<ul class=\"post_details\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
\t\t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post_quote.html\" title=\"Read more\"><span class=\"arrow\"></span><span>READ MORE</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"blog column column_1_2\">
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t\t<img src='https://humas.polri.go.id/wp-content/uploads/2020/08/19-3.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<h2 class=\"with_number\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Polres Sumedang Polda Jabar Ingatkan Pembeli Dan ...</a>
\t\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<ul class=\"post_details\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
\t\t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post.html\" title=\"Read more\"><span class=\"arrow\"></span><span>READ MORE</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post_video.html\" title=\"Struggling Nuremberg Sack Coach Verbeek\">
\t\t\t\t\t\t\t\t<span class=\"icon video\"></span>
\t\t\t\t\t\t\t\t<img src='https://humas.polri.go.id/wp-content/uploads/2020/05/IMG-20200505-WA0628-1024x674.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<h2 class=\"with_number\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_video.html\" title=\"Struggling Nuremberg Sack Coach Verbeek\">Check Point PSBB Kab. Sumedang Pencegahan Covid-19</a>
\t\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post_video.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<ul class=\"post_details\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=sports.html\" title=\"SPORTS\">SPORTS</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>
\t\t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post_video.html\" title=\"Read more\"><span class=\"arrow\"></span><span>READ MORE</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t\t<!-- <div class=\"row page_margin_top_section\">
\t\t\t\t\t<h4 class=\"box_header\">Latest From Health</h4>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<ul class=\"blog column column_1_2\">
\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"High Altitudes May Aid Weight Control\">
\t\t\t\t\t\t\t\t\t<span class=\"icon gallery\"></span>
\t\t\t\t\t\t\t\t\t<img src='https://humas.polri.go.id/wp-content/uploads/2020/06/IMG-20200603-WA0191-1024x498.jpg' alt='img'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<h2 class=\"with_number\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"High Altitudes May Aid Weight Control\">High Altitudes May Aid Weight Control</a>
\t\t\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post_gallery.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<ul class=\"post_details\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<p>Politicans have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as flood tourists at the side of disasters.</p>
\t\t\t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post_gallery.html\" title=\"Read more\"><span class=\"arrow\"></span><span>READ MORE</span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"column column_1_2\">
\t\t\t\t\t\t\t<ul class=\"blog small clearfix\">
\t\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">
\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 128
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_02.jpg' alt='img'>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Seeking the Right Chemistry, Drug Makers Hunt for Mergers\">
\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_13.jpg' alt='img'>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Seeking the Right Chemistry, Drug Makers Hunt for Mergers\">Seeking the Right Chemistry, Drug Makers Hunt for Mergers</a>
\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_review.html\" title=\"Seeking the Right Chemistry, Drug Makers Hunt for Mergers\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon small review\"></span>
\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_01.jpg' alt='img'>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_review.html\" title=\"Seeking the Right Chemistry, Drug Makers Hunt for Mergers\">The Public Health Crisis Hiding in Our Food</a>
\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"New Painkiller Rekindles Addiction Concerns\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon small gallery\"></span>
\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_03.jpg' alt='img'>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"New Painkiller Rekindles Addiction Concerns\">New Painkiller Rekindles Addiction Concerns</a>
\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<a class=\"more page_margin_top\" href=\"index.html@page=home.html#\">MORE FROM HEALTH</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> -->

\t\t\t\t<!-- <div class=\"row page_margin_top_section\">
\t\t\t\t\t<div class=\"column column_1_2\">
\t\t\t\t\t\t<h4 class=\"box_header\">Sports</h4>
\t\t\t\t\t\t<ul class=\"blog\">
\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Struggling Nuremberg Sack Coach Verbeek\">
\t\t\t\t\t\t\t\t\t<img src='";
        // line 204
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_06.jpg' alt='img'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<h2 class=\"with_number\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Struggling Nuremberg Sack Coach Verbeek\">Struggling Nuremberg Sack Coach Verbeek</a>
\t\t\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<ul class=\"post_details\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=sports.html\" title=\"SPORTS\">SPORTS</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<p>Politicans have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as flood tourists at the side of disasters.</p>
\t\t\t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post.html\" title=\"Read more\"><span class=\"arrow\"></span><span>READ MORE</span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul class=\"blog small clearfix\">
\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Bayern Says Ties With Rivals Dortmund Have Frozen\">
\t\t\t\t\t\t\t\t\t<img src='";
        // line 223
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_14.jpg' alt='img'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Bayern Says Ties With Rivals Dortmund Have Frozen\">Bayern Says Ties With Rivals Dortmund Have Frozen</a>
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=sports.html\" title=\"SPORTS\">SPORTS</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t\t\t<img src='";
        // line 239
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_12.jpg' alt='img'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=sports.html\" title=\"SPORTS\">SPORTS</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<a class=\"more page_margin_top\" href=\"index.html@page=home.html#\">READ MORE</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"column column_1_2\">
\t\t\t\t\t\t<h4 class=\"box_header\">Lifestyle</h4>
\t\t\t\t\t\t<ul class=\"blog\">
\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"High Altitudes May Aid Weight Control\">
\t\t\t\t\t\t\t\t\t<img src='";
        // line 261
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/330x242/image_07.jpg' alt='img'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<h2 class=\"with_number\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"High Altitudes May Aid Weight Control\">High Altitudes May Aid Weight Control</a>
\t\t\t\t\t\t\t\t\t<a class=\"comments_number\" href=\"index.html@page=post.html#comments_list\" title=\"2 comments\">2<span class=\"arrow_comments\"></span></a>
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<ul class=\"post_details\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=lifestyle.html\" title=\"LIFESTYLE\">LIFESTYLE</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<p>Politicans have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as flood tourists at the side of disasters.</p>
\t\t\t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post.html\" title=\"Read more\"><span class=\"arrow\"></span><span>READ MORE</span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul class=\"blog small clearfix\">
\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Bayern Says Ties With Rivals Dortmund Have Frozen\">
\t\t\t\t\t\t\t\t\t<img src='";
        // line 280
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_01.jpg' alt='img'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Bayern Says Ties With Rivals Dortmund Have Frozen\">Bayern Says Ties With Rivals Dortmund Have Frozen</a>
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=lifestyle.html\" title=\"LIFESTYLE\">LIFESTYLE</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_video.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t\t\t<span class=\"icon small video\"></span>
\t\t\t\t\t\t\t\t\t<img src='";
        // line 297
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_03.jpg' alt='img'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_video.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=lifestyle.html\" title=\"LIFESTYLE\">LIFESTYLE</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<a class=\"more page_margin_top\" href=\"index.html@page=home.html#\">READ MORE</a>
\t\t\t\t\t</div>
\t\t\t\t</div> -->
\t\t\t</div>
\t\t\t<div class=\"column column_1_3\">

\t\t\t\t<h4 class=\"box_header\">Giat COVID-19</h4>
\t\t\t\t<ul class=\"blog small_margin clearfix\">
\t\t\t\t\t<iframe src=\"kawalcovid\" width=\"100%\" height=\"380\" scrolling=\"no\" frameborder=\"0\"></iframe>
\t\t\t\t\t<div class=\"kopi-covid\"> </div>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"blog small_margin clearfix\">
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"The Public Health Crisis Hiding in Our Food\">
\t\t\t\t\t\t\t<span class=\"icon gallery\"></span>
\t\t\t\t\t\t\t<img src='";
        // line 327
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/510x187/image_12.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"The Public Health Crisis Hiding in Our Food\">The Public Health Crisis Hiding in Our Food</a>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"The Public Health Crisis Hiding in Our Food\">
\t\t\t\t\t\t\t<img src='";
        // line 343
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/510x187/image_01.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"The Public Health Crisis Hiding in Our Food\">Climate Change Debate While Britain Floods</a>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"New Painkiller Rekindles Addiction Concerns\">
\t\t\t\t\t\t\t<img src='";
        // line 359
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/510x187/image_14.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"New Painkiller Rekindles Addiction Concerns\">New Painkiller Rekindles Addiction Concerns</a>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<!-- <h4 class=\"box_header page_margin_top_section\">Latest Posts</h4>
\t\t\t\t<div class=\"vertical_carousel_container clearfix\">
\t\t\t\t\t<ul class=\"blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750\">
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">
\t\t\t\t\t\t\t\t<span class=\"icon small gallery\"></span>
\t\t\t\t\t\t\t\t<img src='";
        // line 380
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_06.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Syrian Civilians Trapped For Months Continue To Be Evacuated\">
\t\t\t\t\t\t\t\t<img src='";
        // line 396
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_12.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Syrian Civilians Trapped For Months Continue To Be Evacuated\">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t\t<img src='";
        // line 412
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_02.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=sports.html\" title=\"SPORTS\">SPORTS</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">
\t\t\t\t\t\t\t\t<img src='";
        // line 428
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_13.jpg' alt='img'>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">Nuclear Fusion Closer to Becoming a Reality</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div> -->

\t\t\t\t<!-- <h4 class=\"box_header page_margin_top_section\">Top Authors</h4>
\t\t\t\t<ul class=\"authors rating clearfix\">
\t\t\t\t\t<li class=\"author\">
\t\t\t\t\t\t<a class=\"thumb\" href=\"index.html@page=author.html\" title=\"Debora Hilton\">
\t\t\t\t\t\t\t<img src='";
        // line 449
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/Team_100x100/image_01.jpg' alt='img'>
\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"34\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t\t<h5><a href=\"index.html@page=author.html\" title=\"Debora Hilton\">Debora Hilton</a></h5>
\t\t\t\t\t\t\t<h6>EDITOR</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"author\">
\t\t\t\t\t\t<a class=\"thumb\" href=\"index.html@page=author.html\" title=\"Anna Shubina\">
\t\t\t\t\t\t\t<img src='";
        // line 459
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/Team_100x100/image_02.jpg' alt='img'>
\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"25\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t\t<h5><a href=\"index.html@page=author.html\" title=\"Anna Shubina\">Anna Shubina</a></h5>
\t\t\t\t\t\t\t<h6>EDITOR</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"author\">
\t\t\t\t\t\t<a class=\"thumb\" href=\"index.html@page=author.html\" title=\"Liam Holden\">
\t\t\t\t\t\t\t<img src='";
        // line 469
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/Team_100x100/image_03.jpg' alt='img'>
\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"9\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t\t<h5><a href=\"index.html@page=author.html\" title=\"Liam Holden\">Liam Holden</a></h5>
\t\t\t\t\t\t\t<h6>PUBLISHER</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"author\">
\t\t\t\t\t\t<a class=\"thumb\" href=\"index.html@page=author.html\" title=\"Heather Dale\">
\t\t\t\t\t\t\t<img src='";
        // line 479
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/Team_100x100/image_04.jpg' alt='img'>
\t\t\t\t\t\t\t<span class=\"number animated_element\" data-value=\"2\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t\t<h5><a href=\"index.html@page=author.html\" title=\"Heather Dale\">Heather Dale</a></h5>
\t\t\t\t\t\t\t<h6>ILLUSTRATOR</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul> -->
\t\t\t\t<!-- <h4 class=\"box_header page_margin_top_section\">Science</h4>
\t\t\t\t<ul class=\"blog small clearfix\">
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">
\t\t\t\t\t\t\t<img src='";
        // line 492
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_09.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Syrian Civilians Trapped For Months Continue To Be Evacuated\">
\t\t\t\t\t\t\t<img src='";
        // line 508
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_12.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Syrian Civilians Trapped For Months Continue To Be Evacuated\">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post_quote.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t<img src='";
        // line 524
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_02.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_quote.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">
\t\t\t\t\t\t\t<span class=\"icon small gallery\"></span>
\t\t\t\t\t\t\t<img src='";
        // line 541
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_01.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">Nuclear Fusion Closer to Becoming a Reality</a>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<a class=\"more page_margin_top\" href=\"index.html@page=home.html#\">MORE FROM SCIENCE</a> -->
\t\t\t</div>
\t\t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "users/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  643 => 541,  623 => 524,  604 => 508,  585 => 492,  569 => 479,  556 => 469,  543 => 459,  530 => 449,  506 => 428,  487 => 412,  468 => 396,  449 => 380,  425 => 359,  406 => 343,  387 => 327,  354 => 297,  334 => 280,  312 => 261,  287 => 239,  268 => 223,  246 => 204,  217 => 178,  197 => 161,  177 => 144,  158 => 128,  30 => 2,  11 => 1,);
    }
}
/* {% extends "users/layout.html" %} {% block content %}*/
/* <div class="page_layout clearfix">*/
/* 	<div class="divider_block clearfix">*/
/* 		<hr class="divider first">*/
/* 		<hr class="divider subheader_arrow">*/
/* 		<hr class="divider last">*/
/* 	</div>*/
/* 	<div class="row page_margin_top">*/
/* 		<div class="column column_1_2">*/
/* 			<img class="responsive pr_preload" src='https://seeklogo.com/images/P/polda-jawa-barat-logo-D4EEF9A6C9-seeklogo.com.png' alt='img' style="padding-left: 20%;width: 51%;">*/
/* 		</div>*/
/* 		<div class="column column_1_2">*/
/* 			<h2 class="about_title">Selamat Datang diwebsite</h2>*/
/* 			<h3 class="about_subtitle">POLRES SUMEDANG</h3>*/
/* 			<!-- <h3 class="page_margin_top">Politicians have looked weak in the face of such natural disaster, with many facing criticism from local.</h3> -->*/
/* 			<p class="text padding_top_0 page_margin_top" style="text-align: justify;">Website <b>Polres Sumedang</b> memiliki fungsi untuk menyampaikan informasi terkait berita, kegiatan, informasi dan hal-hal yang berkaitan dengan kepolisian resor sumedang. Kepolisian Resor Sumedang merupakan salah satu Polres yang berada di bawah organisasi Kepolisian Daerah Jawa Barat yang mempunyai wilayah hukum meliputi seluruh wilayah Kabupaten Sumedang.*/
/* dengan memanfaatkan perkembangan teknologi dan informasi kepala polisi resor sumedang AKBP Eko Prasetyo Robbyanto ingin lebih mendekatkan diri antara masyarakat di kabupaten sumedang dengan pihak kepolisian resor sumedang guna meningkatkan penyampaian informasi yang lebih tepat dan cepat.</p>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <div class="page_layout page_margin_top clearfix">*/
/* 		<div class="row">*/
/* 			<div class="column column_2_3">*/
/* 				<h4 class="box_header">Berita Terbaru</h4>*/
/* 				<div class="row" id="berita-terbaru">*/
/* 					<ul class="blog column column_1_2">*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post.html" title="Nuclear Fusion Closer to Becoming a Reality">*/
/* 								<img src='https://humas.polri.go.id/wp-content/uploads/2020/06/IMG-20200601-WA0188.jpg' alt='img'>*/
/* 							</a>*/
/* 							<h2 class="with_number">*/
/* 								<a href="index.html@page=post.html" title="Nuclear Fusion Closer to Becoming a Reality">Polres Sumedang Polda Jabar, Edukasi, Sosialisasi...</a>*/
/* 								<a class="comments_number" href="index.html@page=post.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 							</h2>*/
/* 							<ul class="post_details">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 								<li class="date">*/
/* 									10:11 PM, Feb 02*/
/* 								</li>*/
/* 							</ul>*/
/* 							<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>*/
/* 							<a class="read_more" href="index.html@page=post.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post_quote.html" title="High Altitudes May Aid Weight Control">*/
/* 								<img src='https://humas.polri.go.id/wp-content/uploads/2020/06/IMG-20200603-WA0347-1024x768.jpg' alt='img'>*/
/* 							</a>*/
/* 							<h2 class="with_number">*/
/* 								<a href="index.html@page=post_quote.html" title="High Altitudes May Aid Weight Control">Kapolres Sumedang Polda Jabar Cek Pasar Sandang Dalam Rangka AKB</a>*/
/* 								<a class="comments_number" href="index.html@page=post.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 							</h2>*/
/* 							<ul class="post_details">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 								<li class="date">*/
/* 									10:11 PM, Feb 02*/
/* 								</li>*/
/* 							</ul>*/
/* 							<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>*/
/* 							<a class="read_more" href="index.html@page=post_quote.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>*/
/* 						</li>*/
/* 					</ul>*/
/* 					<ul class="blog column column_1_2">*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 								<img src='https://humas.polri.go.id/wp-content/uploads/2020/08/19-3.jpg' alt='img'>*/
/* 							</a>*/
/* 							<h2 class="with_number">*/
/* 								<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">Polres Sumedang Polda Jabar Ingatkan Pembeli Dan ...</a>*/
/* 								<a class="comments_number" href="index.html@page=post.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 							</h2>*/
/* 							<ul class="post_details">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 								<li class="date">*/
/* 									10:11 PM, Feb 02*/
/* 								</li>*/
/* 							</ul>*/
/* 							<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>*/
/* 							<a class="read_more" href="index.html@page=post.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post_video.html" title="Struggling Nuremberg Sack Coach Verbeek">*/
/* 								<span class="icon video"></span>*/
/* 								<img src='https://humas.polri.go.id/wp-content/uploads/2020/05/IMG-20200505-WA0628-1024x674.jpg' alt='img'>*/
/* 							</a>*/
/* 							<h2 class="with_number">*/
/* 								<a href="index.html@page=post_video.html" title="Struggling Nuremberg Sack Coach Verbeek">Check Point PSBB Kab. Sumedang Pencegahan Covid-19</a>*/
/* 								<a class="comments_number" href="index.html@page=post_video.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 							</h2>*/
/* 							<ul class="post_details">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=sports.html" title="SPORTS">SPORTS</a></li>*/
/* 								<li class="date">*/
/* 									10:11 PM, Feb 02*/
/* 								</li>*/
/* 							</ul>*/
/* 							<p>Maecenas mauris elementum, est morbi interdum cursus at elite imperdiet libero. Proin odios dapibus integer an nulla augue pharetra cursus.</p>*/
/* 							<a class="read_more" href="index.html@page=post_video.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</div>*/
/* */
/* 				<!-- <div class="row page_margin_top_section">*/
/* 					<h4 class="box_header">Latest From Health</h4>*/
/* 					<div class="row">*/
/* 						<ul class="blog column column_1_2">*/
/* 							<li class="post">*/
/* 								<a href="index.html@page=post_gallery.html" title="High Altitudes May Aid Weight Control">*/
/* 									<span class="icon gallery"></span>*/
/* 									<img src='https://humas.polri.go.id/wp-content/uploads/2020/06/IMG-20200603-WA0191-1024x498.jpg' alt='img'>*/
/* 								</a>*/
/* 								<h2 class="with_number">*/
/* 									<a href="index.html@page=post_gallery.html" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a>*/
/* 									<a class="comments_number" href="index.html@page=post_gallery.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 								</h2>*/
/* 								<ul class="post_details">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 								<p>Politicans have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as flood tourists at the side of disasters.</p>*/
/* 								<a class="read_more" href="index.html@page=post_gallery.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>*/
/* 							</li>*/
/* 						</ul>*/
/* 						<div class="column column_1_2">*/
/* 							<ul class="blog small clearfix">*/
/* 								<li class="post">*/
/* 									<a href="index.html@page=post.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">*/
/* 										<img src='{{baseURL}}/assets/users/images/samples/100x100/image_02.jpg' alt='img'>*/
/* 									</a>*/
/* 									<div class="post_content">*/
/* 										<h5>*/
/* 											<a href="index.html@page=post.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>*/
/* 										</h5>*/
/* 										<ul class="post_details simple">*/
/* 											<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 											<li class="date">*/
/* 												10:11 PM, Feb 02*/
/* 											</li>*/
/* 										</ul>*/
/* 									</div>*/
/* 								</li>*/
/* 								<li class="post">*/
/* 									<a href="index.html@page=post.html" title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">*/
/* 										<img src='{{baseURL}}/assets/users/images/samples/100x100/image_13.jpg' alt='img'>*/
/* 									</a>*/
/* 									<div class="post_content">*/
/* 										<h5>*/
/* 											<a href="index.html@page=post.html" title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">Seeking the Right Chemistry, Drug Makers Hunt for Mergers</a>*/
/* 										</h5>*/
/* 										<ul class="post_details simple">*/
/* 											<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 											<li class="date">*/
/* 												10:11 PM, Feb 02*/
/* 											</li>*/
/* 										</ul>*/
/* 									</div>*/
/* 								</li>*/
/* 								<li class="post">*/
/* 									<a href="index.html@page=post_review.html" title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">*/
/* 										<span class="icon small review"></span>*/
/* 										<img src='{{baseURL}}/assets/users/images/samples/100x100/image_01.jpg' alt='img'>*/
/* 									</a>*/
/* 									<div class="post_content">*/
/* 										<h5>*/
/* 											<a href="index.html@page=post_review.html" title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">The Public Health Crisis Hiding in Our Food</a>*/
/* 										</h5>*/
/* 										<ul class="post_details simple">*/
/* 											<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 											<li class="date">*/
/* 												10:11 PM, Feb 02*/
/* 											</li>*/
/* 										</ul>*/
/* 									</div>*/
/* 								</li>*/
/* 								<li class="post">*/
/* 									<a href="index.html@page=post_gallery.html" title="New Painkiller Rekindles Addiction Concerns">*/
/* 										<span class="icon small gallery"></span>*/
/* 										<img src='{{baseURL}}/assets/users/images/samples/100x100/image_03.jpg' alt='img'>*/
/* 									</a>*/
/* 									<div class="post_content">*/
/* 										<h5>*/
/* 											<a href="index.html@page=post_gallery.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a>*/
/* 										</h5>*/
/* 										<ul class="post_details simple">*/
/* 											<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 											<li class="date">*/
/* 												10:11 PM, Feb 02*/
/* 											</li>*/
/* 										</ul>*/
/* 									</div>*/
/* 								</li>*/
/* 							</ul>*/
/* 							<a class="more page_margin_top" href="index.html@page=home.html#">MORE FROM HEALTH</a>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div> -->*/
/* */
/* 				<!-- <div class="row page_margin_top_section">*/
/* 					<div class="column column_1_2">*/
/* 						<h4 class="box_header">Sports</h4>*/
/* 						<ul class="blog">*/
/* 							<li class="post">*/
/* 								<a href="index.html@page=post.html" title="Struggling Nuremberg Sack Coach Verbeek">*/
/* 									<img src='{{baseURL}}/assets/users/images/samples/330x242/image_06.jpg' alt='img'>*/
/* 								</a>*/
/* 								<h2 class="with_number">*/
/* 									<a href="index.html@page=post.html" title="Struggling Nuremberg Sack Coach Verbeek">Struggling Nuremberg Sack Coach Verbeek</a>*/
/* 									<a class="comments_number" href="index.html@page=post.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 								</h2>*/
/* 								<ul class="post_details">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=sports.html" title="SPORTS">SPORTS</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 								<p>Politicans have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as flood tourists at the side of disasters.</p>*/
/* 								<a class="read_more" href="index.html@page=post.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>*/
/* 							</li>*/
/* 						</ul>*/
/* 						<ul class="blog small clearfix">*/
/* 							<li class="post">*/
/* 								<a href="index.html@page=post.html" title="Bayern Says Ties With Rivals Dortmund Have Frozen">*/
/* 									<img src='{{baseURL}}/assets/users/images/samples/100x100/image_14.jpg' alt='img'>*/
/* 								</a>*/
/* 								<div class="post_content">*/
/* 									<h5>*/
/* 										<a href="index.html@page=post.html" title="Bayern Says Ties With Rivals Dortmund Have Frozen">Bayern Says Ties With Rivals Dortmund Have Frozen</a>*/
/* 									</h5>*/
/* 									<ul class="post_details simple">*/
/* 										<li class="category"><a href="index.html@page=category&amp;cat=sports.html" title="SPORTS">SPORTS</a></li>*/
/* 										<li class="date">*/
/* 											10:11 PM, Feb 02*/
/* 										</li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</li>*/
/* 							<li class="post">*/
/* 								<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 									<img src='{{baseURL}}/assets/users/images/samples/100x100/image_12.jpg' alt='img'>*/
/* 								</a>*/
/* 								<div class="post_content">*/
/* 									<h5>*/
/* 										<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/* 									</h5>*/
/* 									<ul class="post_details simple">*/
/* 										<li class="category"><a href="index.html@page=category&amp;cat=sports.html" title="SPORTS">SPORTS</a></li>*/
/* 										<li class="date">*/
/* 											10:11 PM, Feb 02*/
/* 										</li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</li>*/
/* 						</ul>*/
/* 						<a class="more page_margin_top" href="index.html@page=home.html#">READ MORE</a>*/
/* 					</div>*/
/* 					<div class="column column_1_2">*/
/* 						<h4 class="box_header">Lifestyle</h4>*/
/* 						<ul class="blog">*/
/* 							<li class="post">*/
/* 								<a href="index.html@page=post.html" title="High Altitudes May Aid Weight Control">*/
/* 									<img src='{{baseURL}}/assets/users/images/samples/330x242/image_07.jpg' alt='img'>*/
/* 								</a>*/
/* 								<h2 class="with_number">*/
/* 									<a href="index.html@page=post.html" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a>*/
/* 									<a class="comments_number" href="index.html@page=post.html#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>*/
/* 								</h2>*/
/* 								<ul class="post_details">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=lifestyle.html" title="LIFESTYLE">LIFESTYLE</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 								<p>Politicans have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as flood tourists at the side of disasters.</p>*/
/* 								<a class="read_more" href="index.html@page=post.html" title="Read more"><span class="arrow"></span><span>READ MORE</span></a>*/
/* 							</li>*/
/* 						</ul>*/
/* 						<ul class="blog small clearfix">*/
/* 							<li class="post">*/
/* 								<a href="index.html@page=post.html" title="Bayern Says Ties With Rivals Dortmund Have Frozen">*/
/* 									<img src='{{baseURL}}/assets/users/images/samples/100x100/image_01.jpg' alt='img'>*/
/* 								</a>*/
/* 								<div class="post_content">*/
/* 									<h5>*/
/* 										<a href="index.html@page=post.html" title="Bayern Says Ties With Rivals Dortmund Have Frozen">Bayern Says Ties With Rivals Dortmund Have Frozen</a>*/
/* 									</h5>*/
/* 									<ul class="post_details simple">*/
/* 										<li class="category"><a href="index.html@page=category&amp;cat=lifestyle.html" title="LIFESTYLE">LIFESTYLE</a></li>*/
/* 										<li class="date">*/
/* 											10:11 PM, Feb 02*/
/* 										</li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</li>*/
/* 							<li class="post">*/
/* 								<a href="index.html@page=post_video.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 									<span class="icon small video"></span>*/
/* 									<img src='{{baseURL}}/assets/users/images/samples/100x100/image_03.jpg' alt='img'>*/
/* 								</a>*/
/* 								<div class="post_content">*/
/* 									<h5>*/
/* 										<a href="index.html@page=post_video.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/* 									</h5>*/
/* 									<ul class="post_details simple">*/
/* 										<li class="category"><a href="index.html@page=category&amp;cat=lifestyle.html" title="LIFESTYLE">LIFESTYLE</a></li>*/
/* 										<li class="date">*/
/* 											10:11 PM, Feb 02*/
/* 										</li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</li>*/
/* 						</ul>*/
/* 						<a class="more page_margin_top" href="index.html@page=home.html#">READ MORE</a>*/
/* 					</div>*/
/* 				</div> -->*/
/* 			</div>*/
/* 			<div class="column column_1_3">*/
/* */
/* 				<h4 class="box_header">Giat COVID-19</h4>*/
/* 				<ul class="blog small_margin clearfix">*/
/* 					<iframe src="kawalcovid" width="100%" height="380" scrolling="no" frameborder="0"></iframe>*/
/* 					<div class="kopi-covid"> </div>*/
/* 				</ul>*/
/* 				<ul class="blog small_margin clearfix">*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post_gallery.html" title="The Public Health Crisis Hiding in Our Food">*/
/* 							<span class="icon gallery"></span>*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/510x187/image_12.jpg' alt='img'>*/
/* 						</a>*/
/* 						<div class="post_content">*/
/* 							<h5>*/
/* 								<a href="index.html@page=post_gallery.html" title="The Public Health Crisis Hiding in Our Food">The Public Health Crisis Hiding in Our Food</a>*/
/* 							</h5>*/
/* 							<ul class="post_details simple">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 								<li class="date">*/
/* 									10:11 PM, Feb 02*/
/* 								</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</li>*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post.html" title="The Public Health Crisis Hiding in Our Food">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/510x187/image_01.jpg' alt='img'>*/
/* 						</a>*/
/* 						<div class="post_content">*/
/* 							<h5>*/
/* 								<a href="index.html@page=post.html" title="The Public Health Crisis Hiding in Our Food">Climate Change Debate While Britain Floods</a>*/
/* 							</h5>*/
/* 							<ul class="post_details simple">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 								<li class="date">*/
/* 									10:11 PM, Feb 02*/
/* 								</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</li>*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post.html" title="New Painkiller Rekindles Addiction Concerns">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/510x187/image_14.jpg' alt='img'>*/
/* 						</a>*/
/* 						<div class="post_content">*/
/* 							<h5>*/
/* 								<a href="index.html@page=post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a>*/
/* 							</h5>*/
/* 							<ul class="post_details simple">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 								<li class="date">*/
/* 									10:11 PM, Feb 02*/
/* 								</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</li>*/
/* 				</ul>*/
/* 				<!-- <h4 class="box_header page_margin_top_section">Latest Posts</h4>*/
/* 				<div class="vertical_carousel_container clearfix">*/
/* 					<ul class="blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post_gallery.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">*/
/* 								<span class="icon small gallery"></span>*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/100x100/image_06.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="post_content">*/
/* 								<h5>*/
/* 									<a href="index.html@page=post_gallery.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>*/
/* 								</h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/100x100/image_12.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="post_content">*/
/* 								<h5>*/
/* 									<a href="index.html@page=post.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>*/
/* 								</h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/100x100/image_02.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="post_content">*/
/* 								<h5>*/
/* 									<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/* 								</h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=sports.html" title="SPORTS">SPORTS</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="post">*/
/* 							<a href="index.html@page=post.html" title="Nuclear Fusion Closer to Becoming a Reality">*/
/* 								<img src='{{baseURL}}/assets/users/images/samples/100x100/image_13.jpg' alt='img'>*/
/* 							</a>*/
/* 							<div class="post_content">*/
/* 								<h5>*/
/* 									<a href="index.html@page=post.html" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a>*/
/* 								</h5>*/
/* 								<ul class="post_details simple">*/
/* 									<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 									<li class="date">*/
/* 										10:11 PM, Feb 02*/
/* 									</li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</div> -->*/
/* */
/* 				<!-- <h4 class="box_header page_margin_top_section">Top Authors</h4>*/
/* 				<ul class="authors rating clearfix">*/
/* 					<li class="author">*/
/* 						<a class="thumb" href="index.html@page=author.html" title="Debora Hilton">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/Team_100x100/image_01.jpg' alt='img'>*/
/* 							<span class="number animated_element" data-value="34"></span>*/
/* 						</a>*/
/* 						<div class="details">*/
/* 							<h5><a href="index.html@page=author.html" title="Debora Hilton">Debora Hilton</a></h5>*/
/* 							<h6>EDITOR</h6>*/
/* 						</div>*/
/* 					</li>*/
/* 					<li class="author">*/
/* 						<a class="thumb" href="index.html@page=author.html" title="Anna Shubina">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/Team_100x100/image_02.jpg' alt='img'>*/
/* 							<span class="number animated_element" data-value="25"></span>*/
/* 						</a>*/
/* 						<div class="details">*/
/* 							<h5><a href="index.html@page=author.html" title="Anna Shubina">Anna Shubina</a></h5>*/
/* 							<h6>EDITOR</h6>*/
/* 						</div>*/
/* 					</li>*/
/* 					<li class="author">*/
/* 						<a class="thumb" href="index.html@page=author.html" title="Liam Holden">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/Team_100x100/image_03.jpg' alt='img'>*/
/* 							<span class="number animated_element" data-value="9"></span>*/
/* 						</a>*/
/* 						<div class="details">*/
/* 							<h5><a href="index.html@page=author.html" title="Liam Holden">Liam Holden</a></h5>*/
/* 							<h6>PUBLISHER</h6>*/
/* 						</div>*/
/* 					</li>*/
/* 					<li class="author">*/
/* 						<a class="thumb" href="index.html@page=author.html" title="Heather Dale">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/Team_100x100/image_04.jpg' alt='img'>*/
/* 							<span class="number animated_element" data-value="2"></span>*/
/* 						</a>*/
/* 						<div class="details">*/
/* 							<h5><a href="index.html@page=author.html" title="Heather Dale">Heather Dale</a></h5>*/
/* 							<h6>ILLUSTRATOR</h6>*/
/* 						</div>*/
/* 					</li>*/
/* 				</ul> -->*/
/* 				<!-- <h4 class="box_header page_margin_top_section">Science</h4>*/
/* 				<ul class="blog small clearfix">*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/100x100/image_09.jpg' alt='img'>*/
/* 						</a>*/
/* 						<div class="post_content">*/
/* 							<h5>*/
/* 								<a href="index.html@page=post.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>*/
/* 							</h5>*/
/* 							<ul class="post_details simple">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 								<li class="date">*/
/* 									10:11 PM, Feb 02*/
/* 								</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</li>*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/100x100/image_12.jpg' alt='img'>*/
/* 						</a>*/
/* 						<div class="post_content">*/
/* 							<h5>*/
/* 								<a href="index.html@page=post.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>*/
/* 							</h5>*/
/* 							<ul class="post_details simple">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 								<li class="date">*/
/* 									10:11 PM, Feb 02*/
/* 								</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</li>*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post_quote.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/100x100/image_02.jpg' alt='img'>*/
/* 						</a>*/
/* 						<div class="post_content">*/
/* 							<h5>*/
/* 								<a href="index.html@page=post_quote.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/* 							</h5>*/
/* 							<ul class="post_details simple">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 								<li class="date">*/
/* 									10:11 PM, Feb 02*/
/* 								</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</li>*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post_gallery.html" title="Nuclear Fusion Closer to Becoming a Reality">*/
/* 							<span class="icon small gallery"></span>*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/100x100/image_01.jpg' alt='img'>*/
/* 						</a>*/
/* 						<div class="post_content">*/
/* 							<h5>*/
/* 								<a href="index.html@page=post_gallery.html" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a>*/
/* 							</h5>*/
/* 							<ul class="post_details simple">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a></li>*/
/* 								<li class="date">*/
/* 									10:11 PM, Feb 02*/
/* 								</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</li>*/
/* 				</ul>*/
/* 				<a class="more page_margin_top" href="index.html@page=home.html#">MORE FROM SCIENCE</a> -->*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
