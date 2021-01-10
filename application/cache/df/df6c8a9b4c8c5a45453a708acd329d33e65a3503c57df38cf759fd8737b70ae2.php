<?php

/* users/informasi/kegiatan-post.html */
class __TwigTemplate_7dc18b03920bb9e2fde2bee18456bc49f56eb853d8ba8a40d547ee56a9799521 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("users/layout.html", "users/informasi/kegiatan-post.html", 1);
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
<input id=\"id_satuan\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["ids"]) ? $context["ids"] : null), "html", null, true);
        echo "\" hidden>
<input id=\"param\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["params"]) ? $context["params"] : null), "html", null, true);
        echo "\" hidden>

<div class=\"page_layout page_margin_top clearfix\">
\t<div class=\"row page_margin_top\">
\t\t<div class=\"column column_1_1\">
\t\t\t<div class=\"horizontal_carousel_container small\">
\t\t\t\t<ul class=\"blog horizontal_carousel autoplay-1 scroll-1 visible-3 navigation-1 easing-easeInOutQuint duration-750\">
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"New Painkiller Rekindles Addiction Concerns\">
\t\t\t\t\t\t\t<img src='";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/510x187/image_08.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"New Painkiller Rekindles Addiction Concerns\">New Painkiller Rekindles Addiction Concerns</a></h5>
\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post_small_image.html\" title=\"High Altitudes May Aid Weight Control\">
\t\t\t\t\t\t\t<img src='";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/510x187/image_01.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h5><a href=\"index.html@page=post_small_image.html\" title=\"High Altitudes May Aid Weight Control\">High Altitudes May Aid Weight Control</a></h5>
\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t<span class=\"icon gallery\"></span>
\t\t\t\t\t\t\t<img src='";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/510x187/image_03.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h5><a href=\"index.html@page=post_gallery.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a></h5>
\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"post first\">
\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t<img src='";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/510x187/image_09.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h5><a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a></h5>
\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"post first\">
\t\t\t\t\t\t<a href=\"index.html@page=post_small_image.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t<img src='";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/510x187/image_07.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h5><a href=\"index.html@page=post_small_image.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a></h5>
\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a></li>
\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t<hr class=\"divider page_margin_top\">
\t<div class=\"row page_margin_top\">
\t\t<div class=\"column column_2_3\" id=\"post-kegiatan\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"post single\">
\t\t\t\t\t<h1 class=\"post_title\">
\t\t\t\t\t\tBuilt on Brotherhood, Club Lives Up to Name
\t\t\t\t\t</h1>
\t\t\t\t\t<ul class=\"post_details clearfix\">
\t\t\t\t\t\t<li class=\"detail category\">In <a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">Health</a></li>
\t\t\t\t\t\t<li class=\"detail date\">8:25 PM, Feb 23</li>
\t\t\t\t\t\t<li class=\"detail author\">By <a href=\"index.html@page=author.html\" title=\"Anna Shubina\">Anna Shubina</a></li>
\t\t\t\t\t\t<li class=\"detail views\">6 254 Views</li>
\t\t\t\t\t\t<li class=\"detail comments\"><a href=\"index.html@page=post_gallery.html#comments_list\" class=\"scroll_to_comments\" title=\"6 Comments\">6 Comments</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"horizontal_carousel_container thin page_margin_top gallery_control\">
\t\t\t\t\t\t<ul class=\"horizontal_carousel control-for-post-gallery visible-5 autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html#\"><img src='";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/130x95/image_01.jpg' alt='img'></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html#\"><img src='";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/130x95/image_10.jpg' alt='img'></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html#\"><img src='";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/130x95/image_03.jpg' alt='img'></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html#\"><img src='";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/130x95/image_09.jpg' alt='img'></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html#\"><img src='";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/130x95/image_07.jpg' alt='img'></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html#\"><img src='";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/130x95/image_05.jpg' alt='img'></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html#\"><img src='";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/130x95/image_02.jpg' alt='img'></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html#\"><img src='";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/130x95/image_08.jpg' alt='img'></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"control-by-post-gallery\" class=\"horizontal_carousel_container big margin_top_10\">
\t\t\t\t\t\t<ul id=\"post-gallery\" class=\"horizontal_carousel visible-1 autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<!--class=\"prettyPhoto\" rel=\"prettyPhoto[gallery]\"-->
\t\t\t\t\t\t\t\t<a href=\"";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_01.jpg\" data-rel=\"gallery\" title=\"Struggling Nuremberg Sack Coach Verbeek\">
\t\t\t\t\t\t\t\t\t<span class=\"icon fullscreen animated\"></span>
\t\t\t\t\t\t\t\t\t<img src='";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_01.jpg' alt='img'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_10.jpg\" data-rel=\"gallery\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t\t\t<span class=\"icon fullscreen animated\"></span>
\t\t\t\t\t\t\t\t\t<img src='";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_10.jpg' alt='img'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_03.jpg\" data-rel=\"gallery\" title=\"New Painkiller Rekindles Addiction Concerns\">
\t\t\t\t\t\t\t\t\t<span class=\"icon fullscreen animated\"></span>
\t\t\t\t\t\t\t\t\t<img src='";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_03.jpg' alt='img'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_09.jpg\" data-rel=\"gallery\" title=\"New Painkiller Rekindles Addiction Concerns\">
\t\t\t\t\t\t\t\t\t<span class=\"icon fullscreen animated\"></span>
\t\t\t\t\t\t\t\t\t<img src='";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_09.jpg' alt='img'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 147
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_07.jpg\" data-rel=\"gallery\" title=\"New Painkiller Rekindles Addiction Concerns\">
\t\t\t\t\t\t\t\t\t<span class=\"icon fullscreen animated\"></span>
\t\t\t\t\t\t\t\t\t<img src='";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_07.jpg' alt='img'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_05.jpg\" data-rel=\"gallery\" title=\"New Painkiller Rekindles Addiction Concerns\">
\t\t\t\t\t\t\t\t\t<span class=\"icon fullscreen animated\"></span>
\t\t\t\t\t\t\t\t\t<img src='";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_05.jpg' alt='img'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_02.jpg\" data-rel=\"gallery\" title=\"New Painkiller Rekindles Addiction Concerns\">
\t\t\t\t\t\t\t\t\t<span class=\"icon fullscreen animated\"></span>
\t\t\t\t\t\t\t\t\t<img src='";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_02.jpg' alt='img'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_08.jpg\" data-rel=\"gallery\" title=\"New Painkiller Rekindles Addiction Concerns\">
\t\t\t\t\t\t\t\t\t<span class=\"icon fullscreen animated\"></span>
\t\t\t\t\t\t\t\t\t<img src='";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_08.jpg' alt='img'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"gallery-popup\" class=\"gallery_popup\">
\t\t\t\t\t\t<div class=\"header_container padding_top_bottom_15\">
\t\t\t\t\t\t\t<div class=\"header clearfix\">
\t\t\t\t\t\t\t\t<h1><a title=\"Pressroom\" href=\"index.html@page=home.html\">Pressroom</a></h1>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html#\" class=\"gallery_close close_popup\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"header_container\">
\t\t\t\t\t\t\t<div class=\"horizontal_carousel_container thin gallery_control\">
\t\t\t\t\t\t\t\t<ul class=\"horizontal_carousel control-for-post-gallery-popup visible-8 autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html#\"><img src='";
        // line 183
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/130x95/image_01.jpg' alt='img'></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html#\"><img src='";
        // line 186
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/130x95/image_10.jpg' alt='img'></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html#\"><img src='";
        // line 189
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/130x95/image_03.jpg' alt='img'></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html#\"><img src='";
        // line 192
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/130x95/image_09.jpg' alt='img'></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html#\"><img src='";
        // line 195
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/130x95/image_07.jpg' alt='img'></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html#\"><img src='";
        // line 198
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/130x95/image_05.jpg' alt='img'></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html#\"><img src='";
        // line 201
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/130x95/image_02.jpg' alt='img'></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html#\"><img src='";
        // line 204
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/130x95/image_08.jpg' alt='img'></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"page\">
\t\t\t\t\t\t\t<div class=\"row page_margin_top\">
\t\t\t\t\t\t\t\t<div id=\"control-by-post-gallery-popup\" class=\"horizontal_carousel_container big margin_top_10\">
\t\t\t\t\t\t\t\t\t<ul id=\"post-gallery-popup\" class=\"horizontal_carousel visible-1 autoplay-0 scroll-1 navigation-0 easing-easeInOutQuint duration-750\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"column column_2_3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 215
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_01.jpg' alt='img'>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"column column_1_3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"page_margin_top\">
\t\t\t\t\t\t\t\t\t\t\t\t\tClub Lives Up to Name
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\tSince December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sentence margin_top_0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"author\">John Smith, Flickr</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"read_more close_popup page_margin_top_section\" href=\"index.html@page=post_gallery.html#\" title=\"Read more\"><span class=\"arrow\"></span><span>RETURN TO POST</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"share_box page_margin_top_section clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Share:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"social_icons dark clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" title=\"\" href=\"http://facebook.com/QuanticaLabs\" class=\"social_icon facebook\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" title=\"\" href=\"https://twitter.com/QuanticaLabs\" class=\"social_icon twitter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"mailto:contact@pressroom.com\" class=\"social_icon mail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs\" class=\"social_icon envato\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"index.html@page=post_gallery.html#\" class=\"social_icon instagram\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"index.html@page=post_gallery.html#\" class=\"social_icon pinterest\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"column column_2_3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 269
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_10.jpg' alt='img'>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"column column_1_3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"page_margin_top\">
\t\t\t\t\t\t\t\t\t\t\t\t\tSyrian Civilians Trapped
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\tSince December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.
\t\t\t\t\t\t\t\t\t\t\t\t\tSince December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sentence margin_top_0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"author\">John Smith, Flickr</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"read_more close_popup page_margin_top_section\" href=\"index.html@page=post_gallery.html#\" title=\"Read more\"><span class=\"arrow\"></span><span>RETURN TO POST</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"share_box page_margin_top_section clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Share:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"social_icons dark clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" title=\"\" href=\"http://facebook.com/QuanticaLabs\" class=\"social_icon facebook\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" title=\"\" href=\"https://twitter.com/QuanticaLabs\" class=\"social_icon twitter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"mailto:contact@pressroom.com\" class=\"social_icon mail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs\" class=\"social_icon envato\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"index.html@page=post_gallery.html#\" class=\"social_icon instagram\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"index.html@page=post_gallery.html#\" class=\"social_icon pinterest\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"column column_2_3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 324
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_03.jpg' alt='img'>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"column column_1_3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"page_margin_top\">
\t\t\t\t\t\t\t\t\t\t\t\t\tStudy Linking Illness
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\tSince December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sentence margin_top_0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"author\">John Smith, Flickr</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"read_more close_popup page_margin_top_section\" href=\"index.html@page=post_gallery.html#\" title=\"Read more\"><span class=\"arrow\"></span><span>RETURN TO POST</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"share_box page_margin_top_section clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Share:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"social_icons dark clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" title=\"\" href=\"http://facebook.com/QuanticaLabs\" class=\"social_icon facebook\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" title=\"\" href=\"https://twitter.com/QuanticaLabs\" class=\"social_icon twitter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"mailto:contact@pressroom.com\" class=\"social_icon mail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs\" class=\"social_icon envato\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"index.html@page=post_gallery.html#\" class=\"social_icon instagram\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"index.html@page=post_gallery.html#\" class=\"social_icon pinterest\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"column column_2_3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 378
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_09.jpg' alt='img'>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"column column_1_3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"page_margin_top\">
\t\t\t\t\t\t\t\t\t\t\t\t\tClub Lives Up to Name
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\tSince December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sentence margin_top_0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"author\">John Smith, Flickr</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"read_more close_popup page_margin_top_section\" href=\"index.html@page=post_gallery.html#\" title=\"Read more\"><span class=\"arrow\"></span><span>RETURN TO POST</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"share_box page_margin_top_section clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Share:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"social_icons dark clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" title=\"\" href=\"http://facebook.com/QuanticaLabs\" class=\"social_icon facebook\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" title=\"\" href=\"https://twitter.com/QuanticaLabs\" class=\"social_icon twitter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"mailto:contact@pressroom.com\" class=\"social_icon mail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs\" class=\"social_icon envato\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"index.html@page=post_gallery.html#\" class=\"social_icon instagram\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"index.html@page=post_gallery.html#\" class=\"social_icon pinterest\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"column column_2_3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 432
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_07.jpg' alt='img'>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"column column_1_3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"page_margin_top\">
\t\t\t\t\t\t\t\t\t\t\t\t\tNuclear Fusion is Closer
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\tSince December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.
\t\t\t\t\t\t\t\t\t\t\t\t\tSince December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.
\t\t\t\t\t\t\t\t\t\t\t\t\tSince December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sentence margin_top_0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"author\">John Smith, Flickr</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"read_more close_popup page_margin_top_section\" href=\"index.html@page=post_gallery.html#\" title=\"Read more\"><span class=\"arrow\"></span><span>RETURN TO POST</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"share_box page_margin_top_section clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Share:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"social_icons dark clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" title=\"\" href=\"http://facebook.com/QuanticaLabs\" class=\"social_icon facebook\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" title=\"\" href=\"https://twitter.com/QuanticaLabs\" class=\"social_icon twitter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"mailto:contact@pressroom.com\" class=\"social_icon mail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs\" class=\"social_icon envato\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"index.html@page=post_gallery.html#\" class=\"social_icon instagram\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"index.html@page=post_gallery.html#\" class=\"social_icon pinterest\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"column column_2_3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 488
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_05.jpg' alt='img'>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"column column_1_3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"page_margin_top\">
\t\t\t\t\t\t\t\t\t\t\t\t\tStruggling Nuremberg Sack
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\tSince December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sentence margin_top_0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"author\">John Smith, Flickr</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"read_more close_popup page_margin_top_section\" href=\"index.html@page=post_gallery.html#\" title=\"Read more\"><span class=\"arrow\"></span><span>RETURN TO POST</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"share_box page_margin_top_section clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Share:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"social_icons dark clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" title=\"\" href=\"http://facebook.com/QuanticaLabs\" class=\"social_icon facebook\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" title=\"\" href=\"https://twitter.com/QuanticaLabs\" class=\"social_icon twitter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"mailto:contact@pressroom.com\" class=\"social_icon mail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs\" class=\"social_icon envato\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"index.html@page=post_gallery.html#\" class=\"social_icon instagram\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"index.html@page=post_gallery.html#\" class=\"social_icon pinterest\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"column column_2_3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 542
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_02.jpg' alt='img'>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"column column_1_3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"page_margin_top\">
\t\t\t\t\t\t\t\t\t\t\t\t\tNew Painkiller
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\tSince December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sentence margin_top_0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"author\">John Smith, Flickr</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"read_more close_popup page_margin_top_section\" href=\"index.html@page=post_gallery.html#\" title=\"Read more\"><span class=\"arrow\"></span><span>RETURN TO POST</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"share_box page_margin_top_section clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Share:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"social_icons dark clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" title=\"\" href=\"http://facebook.com/QuanticaLabs\" class=\"social_icon facebook\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" title=\"\" href=\"https://twitter.com/QuanticaLabs\" class=\"social_icon twitter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"mailto:contact@pressroom.com\" class=\"social_icon mail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs\" class=\"social_icon envato\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"index.html@page=post_gallery.html#\" class=\"social_icon instagram\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"index.html@page=post_gallery.html#\" class=\"social_icon pinterest\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"column column_2_3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 596
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_08.jpg' alt='img'>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"column column_1_3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"page_margin_top\">
\t\t\t\t\t\t\t\t\t\t\t\t\tBuilt on Brotherhood
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\tSince December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sentence margin_top_0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"author\">John Smith, Flickr</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"read_more close_popup page_margin_top_section\" href=\"index.html@page=post_gallery.html#\" title=\"Read more\"><span class=\"arrow\"></span><span>RETURN TO POST</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"share_box page_margin_top_section clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Share:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"social_icons dark clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" title=\"\" href=\"http://facebook.com/QuanticaLabs\" class=\"social_icon facebook\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" title=\"\" href=\"https://twitter.com/QuanticaLabs\" class=\"social_icon twitter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"mailto:contact@pressroom.com\" class=\"social_icon mail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs\" class=\"social_icon envato\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"index.html@page=post_gallery.html#\" class=\"social_icon instagram\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"\" href=\"index.html@page=post_gallery.html#\" class=\"social_icon pinterest\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"column column_1_3\">
\t\t\t<h4 class=\"box_header page_margin_top_section\">Latest Posts</h4>
\t\t\t<div class=\"vertical_carousel_container clearfix\">
\t\t\t\t<ul class=\"blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750\">
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">
\t\t\t\t\t\t\t<span class=\"icon small gallery\"></span>
\t\t\t\t\t\t\t<img src='";
        // line 663
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_06.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
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
\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Syrian Civilians Trapped For Months Continue To Be Evacuated\">
\t\t\t\t\t\t\t<img src='";
        // line 679
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_12.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Syrian Civilians Trapped For Months Continue To Be Evacuated\">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>
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
\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">
\t\t\t\t\t\t\t<img src='";
        // line 695
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_02.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html\" title=\"Built on Brotherhood, Club Lives Up to Name\">Built on Brotherhood, Club Lives Up to Name</a>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<ul class=\"post_details simple\">
\t\t\t\t\t\t\t\t<li class=\"category\"><a href=\"index.html@page=category&amp;cat=sports.html\" title=\"SPORTS\">SPORTS</a></li>
\t\t\t\t\t\t\t\t<li class=\"date\">
\t\t\t\t\t\t\t\t\t10:11 PM, Feb 02
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post_soundcloud.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">
\t\t\t\t\t\t\t<img src='";
        // line 711
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/100x100/image_13.jpg' alt='img'>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"post_content\">
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post_soundcloud.html\" title=\"Nuclear Fusion Closer to Becoming a Reality\">Nuclear Fusion Closer to Becoming a Reality</a>
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
\t\t\t</div>

\t\t\t<h4 class=\"box_header page_margin_top_section\">Categories</h4>
\t\t\t<ul class=\"taxonomies columns clearfix page_margin_top\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"index.html@page=category&amp;cat=world.html\" title=\"WORLD\">WORLD</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"index.html@page=category&amp;cat=sports.html\" title=\"SPORTS\">SPORTS</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"index.html@page=category&amp;cat=science.html\" title=\"SCIENCE\">SCIENCE</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"index.html@page=category&amp;cat=lifestyle.html\" title=\"LIFESTYLE\">LIFESTYLE</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "users/informasi/kegiatan-post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  893 => 711,  874 => 695,  855 => 679,  836 => 663,  766 => 596,  709 => 542,  652 => 488,  593 => 432,  536 => 378,  479 => 324,  421 => 269,  364 => 215,  350 => 204,  344 => 201,  338 => 198,  332 => 195,  326 => 192,  320 => 189,  314 => 186,  308 => 183,  289 => 167,  284 => 165,  277 => 161,  272 => 159,  265 => 155,  260 => 153,  253 => 149,  248 => 147,  241 => 143,  236 => 141,  229 => 137,  224 => 135,  217 => 131,  212 => 129,  205 => 125,  200 => 123,  189 => 115,  183 => 112,  177 => 109,  171 => 106,  165 => 103,  159 => 100,  153 => 97,  147 => 94,  112 => 62,  97 => 50,  82 => 38,  66 => 25,  51 => 13,  39 => 4,  35 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "users/layout.html" %} {% block content %}*/
/* <input id="baseUrl" value="{{baseURL}}" hidden>*/
/* <input id="id_satuan" value="{{ids}}" hidden>*/
/* <input id="param" value="{{params}}" hidden>*/
/* */
/* <div class="page_layout page_margin_top clearfix">*/
/* 	<div class="row page_margin_top">*/
/* 		<div class="column column_1_1">*/
/* 			<div class="horizontal_carousel_container small">*/
/* 				<ul class="blog horizontal_carousel autoplay-1 scroll-1 visible-3 navigation-1 easing-easeInOutQuint duration-750">*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post.html" title="New Painkiller Rekindles Addiction Concerns">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/510x187/image_08.jpg' alt='img'>*/
/* 						</a>*/
/* 						<h5><a href="index.html@page=post.html" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>*/
/* 						<ul class="post_details simple">*/
/* 							<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 							<li class="date">*/
/* 								10:11 PM, Feb 02*/
/* 							</li>*/
/* 						</ul>*/
/* 					</li>*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post_small_image.html" title="High Altitudes May Aid Weight Control">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/510x187/image_01.jpg' alt='img'>*/
/* 						</a>*/
/* 						<h5><a href="index.html@page=post_small_image.html" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>*/
/* 						<ul class="post_details simple">*/
/* 							<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 							<li class="date">*/
/* 								10:11 PM, Feb 02*/
/* 							</li>*/
/* 						</ul>*/
/* 					</li>*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post_gallery.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 							<span class="icon gallery"></span>*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/510x187/image_03.jpg' alt='img'>*/
/* 						</a>*/
/* 						<h5><a href="index.html@page=post_gallery.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a></h5>*/
/* 						<ul class="post_details simple">*/
/* 							<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 							<li class="date">*/
/* 								10:11 PM, Feb 02*/
/* 							</li>*/
/* 						</ul>*/
/* 					</li>*/
/* 					<li class="post first">*/
/* 						<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/510x187/image_09.jpg' alt='img'>*/
/* 						</a>*/
/* 						<h5><a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a></h5>*/
/* 						<ul class="post_details simple">*/
/* 							<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 							<li class="date">*/
/* 								10:11 PM, Feb 02*/
/* 							</li>*/
/* 						</ul>*/
/* 					</li>*/
/* 					<li class="post first">*/
/* 						<a href="index.html@page=post_small_image.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/510x187/image_07.jpg' alt='img'>*/
/* 						</a>*/
/* 						<h5><a href="index.html@page=post_small_image.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a></h5>*/
/* 						<ul class="post_details simple">*/
/* 							<li class="category"><a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a></li>*/
/* 							<li class="date">*/
/* 								10:11 PM, Feb 02*/
/* 							</li>*/
/* 						</ul>*/
/* 					</li>*/
/* 				</ul>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<hr class="divider page_margin_top">*/
/* 	<div class="row page_margin_top">*/
/* 		<div class="column column_2_3" id="post-kegiatan">*/
/* 			<div class="row">*/
/* 				<div class="post single">*/
/* 					<h1 class="post_title">*/
/* 						Built on Brotherhood, Club Lives Up to Name*/
/* 					</h1>*/
/* 					<ul class="post_details clearfix">*/
/* 						<li class="detail category">In <a href="index.html@page=category&amp;cat=health.html" title="HEALTH">Health</a></li>*/
/* 						<li class="detail date">8:25 PM, Feb 23</li>*/
/* 						<li class="detail author">By <a href="index.html@page=author.html" title="Anna Shubina">Anna Shubina</a></li>*/
/* 						<li class="detail views">6 254 Views</li>*/
/* 						<li class="detail comments"><a href="index.html@page=post_gallery.html#comments_list" class="scroll_to_comments" title="6 Comments">6 Comments</a></li>*/
/* 					</ul>*/
/* 					<div class="horizontal_carousel_container thin page_margin_top gallery_control">*/
/* 						<ul class="horizontal_carousel control-for-post-gallery visible-5 autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750">*/
/* 							<li>*/
/* 								<a href="index.html@page=post_gallery.html#"><img src='{{baseURL}}/assets/users/images/samples/130x95/image_01.jpg' alt='img'></a>*/
/* 							</li>*/
/* 							<li>*/
/* 								<a href="index.html@page=post_gallery.html#"><img src='{{baseURL}}/assets/users/images/samples/130x95/image_10.jpg' alt='img'></a>*/
/* 							</li>*/
/* 							<li>*/
/* 								<a href="index.html@page=post_gallery.html#"><img src='{{baseURL}}/assets/users/images/samples/130x95/image_03.jpg' alt='img'></a>*/
/* 							</li>*/
/* 							<li>*/
/* 								<a href="index.html@page=post_gallery.html#"><img src='{{baseURL}}/assets/users/images/samples/130x95/image_09.jpg' alt='img'></a>*/
/* 							</li>*/
/* 							<li>*/
/* 								<a href="index.html@page=post_gallery.html#"><img src='{{baseURL}}/assets/users/images/samples/130x95/image_07.jpg' alt='img'></a>*/
/* 							</li>*/
/* 							<li>*/
/* 								<a href="index.html@page=post_gallery.html#"><img src='{{baseURL}}/assets/users/images/samples/130x95/image_05.jpg' alt='img'></a>*/
/* 							</li>*/
/* 							<li>*/
/* 								<a href="index.html@page=post_gallery.html#"><img src='{{baseURL}}/assets/users/images/samples/130x95/image_02.jpg' alt='img'></a>*/
/* 							</li>*/
/* 							<li>*/
/* 								<a href="index.html@page=post_gallery.html#"><img src='{{baseURL}}/assets/users/images/samples/130x95/image_08.jpg' alt='img'></a>*/
/* 							</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 					<div id="control-by-post-gallery" class="horizontal_carousel_container big margin_top_10">*/
/* 						<ul id="post-gallery" class="horizontal_carousel visible-1 autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750">*/
/* 							<li>*/
/* 								<!--class="prettyPhoto" rel="prettyPhoto[gallery]"-->*/
/* 								<a href="{{baseURL}}/assets/users/images/samples/690x450/image_01.jpg" data-rel="gallery" title="Struggling Nuremberg Sack Coach Verbeek">*/
/* 									<span class="icon fullscreen animated"></span>*/
/* 									<img src='{{baseURL}}/assets/users/images/samples/690x450/image_01.jpg' alt='img'>*/
/* 								</a>*/
/* 							</li>*/
/* 							<li>*/
/* 								<a href="{{baseURL}}/assets/users/images/samples/690x450/image_10.jpg" data-rel="gallery" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 									<span class="icon fullscreen animated"></span>*/
/* 									<img src='{{baseURL}}/assets/users/images/samples/690x450/image_10.jpg' alt='img'>*/
/* 								</a>*/
/* 							</li>*/
/* 							<li>*/
/* 								<a href="{{baseURL}}/assets/users/images/samples/690x450/image_03.jpg" data-rel="gallery" title="New Painkiller Rekindles Addiction Concerns">*/
/* 									<span class="icon fullscreen animated"></span>*/
/* 									<img src='{{baseURL}}/assets/users/images/samples/690x450/image_03.jpg' alt='img'>*/
/* 								</a>*/
/* 							</li>*/
/* 							<li>*/
/* 								<a href="{{baseURL}}/assets/users/images/samples/690x450/image_09.jpg" data-rel="gallery" title="New Painkiller Rekindles Addiction Concerns">*/
/* 									<span class="icon fullscreen animated"></span>*/
/* 									<img src='{{baseURL}}/assets/users/images/samples/690x450/image_09.jpg' alt='img'>*/
/* 								</a>*/
/* 							</li>*/
/* 							<li>*/
/* 								<a href="{{baseURL}}/assets/users/images/samples/690x450/image_07.jpg" data-rel="gallery" title="New Painkiller Rekindles Addiction Concerns">*/
/* 									<span class="icon fullscreen animated"></span>*/
/* 									<img src='{{baseURL}}/assets/users/images/samples/690x450/image_07.jpg' alt='img'>*/
/* 								</a>*/
/* 							</li>*/
/* 							<li>*/
/* 								<a href="{{baseURL}}/assets/users/images/samples/690x450/image_05.jpg" data-rel="gallery" title="New Painkiller Rekindles Addiction Concerns">*/
/* 									<span class="icon fullscreen animated"></span>*/
/* 									<img src='{{baseURL}}/assets/users/images/samples/690x450/image_05.jpg' alt='img'>*/
/* 								</a>*/
/* 							</li>*/
/* 							<li>*/
/* 								<a href="{{baseURL}}/assets/users/images/samples/690x450/image_02.jpg" data-rel="gallery" title="New Painkiller Rekindles Addiction Concerns">*/
/* 									<span class="icon fullscreen animated"></span>*/
/* 									<img src='{{baseURL}}/assets/users/images/samples/690x450/image_02.jpg' alt='img'>*/
/* 								</a>*/
/* 							</li>*/
/* 							<li>*/
/* 								<a href="{{baseURL}}/assets/users/images/samples/690x450/image_08.jpg" data-rel="gallery" title="New Painkiller Rekindles Addiction Concerns">*/
/* 									<span class="icon fullscreen animated"></span>*/
/* 									<img src='{{baseURL}}/assets/users/images/samples/690x450/image_08.jpg' alt='img'>*/
/* 								</a>*/
/* 							</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 					<div id="gallery-popup" class="gallery_popup">*/
/* 						<div class="header_container padding_top_bottom_15">*/
/* 							<div class="header clearfix">*/
/* 								<h1><a title="Pressroom" href="index.html@page=home.html">Pressroom</a></h1>*/
/* 								<a href="index.html@page=post_gallery.html#" class="gallery_close close_popup"></a>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="header_container">*/
/* 							<div class="horizontal_carousel_container thin gallery_control">*/
/* 								<ul class="horizontal_carousel control-for-post-gallery-popup visible-8 autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750">*/
/* 									<li>*/
/* 										<a href="index.html@page=post_gallery.html#"><img src='{{baseURL}}/assets/users/images/samples/130x95/image_01.jpg' alt='img'></a>*/
/* 									</li>*/
/* 									<li>*/
/* 										<a href="index.html@page=post_gallery.html#"><img src='{{baseURL}}/assets/users/images/samples/130x95/image_10.jpg' alt='img'></a>*/
/* 									</li>*/
/* 									<li>*/
/* 										<a href="index.html@page=post_gallery.html#"><img src='{{baseURL}}/assets/users/images/samples/130x95/image_03.jpg' alt='img'></a>*/
/* 									</li>*/
/* 									<li>*/
/* 										<a href="index.html@page=post_gallery.html#"><img src='{{baseURL}}/assets/users/images/samples/130x95/image_09.jpg' alt='img'></a>*/
/* 									</li>*/
/* 									<li>*/
/* 										<a href="index.html@page=post_gallery.html#"><img src='{{baseURL}}/assets/users/images/samples/130x95/image_07.jpg' alt='img'></a>*/
/* 									</li>*/
/* 									<li>*/
/* 										<a href="index.html@page=post_gallery.html#"><img src='{{baseURL}}/assets/users/images/samples/130x95/image_05.jpg' alt='img'></a>*/
/* 									</li>*/
/* 									<li>*/
/* 										<a href="index.html@page=post_gallery.html#"><img src='{{baseURL}}/assets/users/images/samples/130x95/image_02.jpg' alt='img'></a>*/
/* 									</li>*/
/* 									<li>*/
/* 										<a href="index.html@page=post_gallery.html#"><img src='{{baseURL}}/assets/users/images/samples/130x95/image_08.jpg' alt='img'></a>*/
/* 									</li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="page">*/
/* 							<div class="row page_margin_top">*/
/* 								<div id="control-by-post-gallery-popup" class="horizontal_carousel_container big margin_top_10">*/
/* 									<ul id="post-gallery-popup" class="horizontal_carousel visible-1 autoplay-0 scroll-1 navigation-0 easing-easeInOutQuint duration-750">*/
/* 										<li>*/
/* 											<div class="column column_2_3">*/
/* 												<img src='{{baseURL}}/assets/users/images/samples/690x450/image_01.jpg' alt='img'>*/
/* 											</div>*/
/* 											<div class="column column_1_3">*/
/* 												<h3 class="page_margin_top">*/
/* 													Club Lives Up to Name*/
/* 												</h3>*/
/* 												<p>*/
/* 													Since December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.*/
/* 												</p>*/
/* 												<div class="sentence margin_top_0">*/
/* 													<span class="author">John Smith, Flickr</span>*/
/* 												</div>*/
/* 												<div class="clearfix">*/
/* 													<a class="read_more close_popup page_margin_top_section" href="index.html@page=post_gallery.html#" title="Read more"><span class="arrow"></span><span>RETURN TO POST</span></a>*/
/* 												</div>*/
/* 												<div class="share_box page_margin_top_section clearfix">*/
/* 													<label>Share:</label>*/
/* 													<ul class="social_icons dark clearfix">*/
/* 														<li>*/
/* 															<a target="_blank" title="" href="http://facebook.com/QuanticaLabs" class="social_icon facebook">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a target="_blank" title="" href="https://twitter.com/QuanticaLabs" class="social_icon twitter">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="mailto:contact@pressroom.com" class="social_icon mail">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon envato">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="index.html@page=post_gallery.html#" class="social_icon instagram">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="index.html@page=post_gallery.html#" class="social_icon pinterest">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 													</ul>*/
/* 												</div>*/
/* 											</div>*/
/* 										</li>*/
/* 										<li>*/
/* 											<div class="column column_2_3">*/
/* 												<img src='{{baseURL}}/assets/users/images/samples/690x450/image_10.jpg' alt='img'>*/
/* 											</div>*/
/* 											<div class="column column_1_3">*/
/* 												<h3 class="page_margin_top">*/
/* 													Syrian Civilians Trapped*/
/* 												</h3>*/
/* 												<p>*/
/* 													Since December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.*/
/* 													Since December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.*/
/* 												</p>*/
/* 												<div class="sentence margin_top_0">*/
/* 													<span class="author">John Smith, Flickr</span>*/
/* 												</div>*/
/* 												<div class="clearfix">*/
/* 													<a class="read_more close_popup page_margin_top_section" href="index.html@page=post_gallery.html#" title="Read more"><span class="arrow"></span><span>RETURN TO POST</span></a>*/
/* 												</div>*/
/* 												<div class="share_box page_margin_top_section clearfix">*/
/* 													<label>Share:</label>*/
/* 													<ul class="social_icons dark clearfix">*/
/* 														<li>*/
/* 															<a target="_blank" title="" href="http://facebook.com/QuanticaLabs" class="social_icon facebook">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a target="_blank" title="" href="https://twitter.com/QuanticaLabs" class="social_icon twitter">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="mailto:contact@pressroom.com" class="social_icon mail">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon envato">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="index.html@page=post_gallery.html#" class="social_icon instagram">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="index.html@page=post_gallery.html#" class="social_icon pinterest">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 													</ul>*/
/* 												</div>*/
/* 											</div>*/
/* 										</li>*/
/* 										<li>*/
/* 											<div class="column column_2_3">*/
/* 												<img src='{{baseURL}}/assets/users/images/samples/690x450/image_03.jpg' alt='img'>*/
/* 											</div>*/
/* 											<div class="column column_1_3">*/
/* 												<h3 class="page_margin_top">*/
/* 													Study Linking Illness*/
/* 												</h3>*/
/* 												<p>*/
/* 													Since December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.*/
/* 												</p>*/
/* 												<div class="sentence margin_top_0">*/
/* 													<span class="author">John Smith, Flickr</span>*/
/* 												</div>*/
/* 												<div class="clearfix">*/
/* 													<a class="read_more close_popup page_margin_top_section" href="index.html@page=post_gallery.html#" title="Read more"><span class="arrow"></span><span>RETURN TO POST</span></a>*/
/* 												</div>*/
/* 												<div class="share_box page_margin_top_section clearfix">*/
/* 													<label>Share:</label>*/
/* 													<ul class="social_icons dark clearfix">*/
/* 														<li>*/
/* 															<a target="_blank" title="" href="http://facebook.com/QuanticaLabs" class="social_icon facebook">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a target="_blank" title="" href="https://twitter.com/QuanticaLabs" class="social_icon twitter">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="mailto:contact@pressroom.com" class="social_icon mail">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon envato">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="index.html@page=post_gallery.html#" class="social_icon instagram">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="index.html@page=post_gallery.html#" class="social_icon pinterest">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 													</ul>*/
/* 												</div>*/
/* 											</div>*/
/* 										</li>*/
/* 										<li>*/
/* 											<div class="column column_2_3">*/
/* 												<img src='{{baseURL}}/assets/users/images/samples/690x450/image_09.jpg' alt='img'>*/
/* 											</div>*/
/* 											<div class="column column_1_3">*/
/* 												<h3 class="page_margin_top">*/
/* 													Club Lives Up to Name*/
/* 												</h3>*/
/* 												<p>*/
/* 													Since December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.*/
/* 												</p>*/
/* 												<div class="sentence margin_top_0">*/
/* 													<span class="author">John Smith, Flickr</span>*/
/* 												</div>*/
/* 												<div class="clearfix">*/
/* 													<a class="read_more close_popup page_margin_top_section" href="index.html@page=post_gallery.html#" title="Read more"><span class="arrow"></span><span>RETURN TO POST</span></a>*/
/* 												</div>*/
/* 												<div class="share_box page_margin_top_section clearfix">*/
/* 													<label>Share:</label>*/
/* 													<ul class="social_icons dark clearfix">*/
/* 														<li>*/
/* 															<a target="_blank" title="" href="http://facebook.com/QuanticaLabs" class="social_icon facebook">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a target="_blank" title="" href="https://twitter.com/QuanticaLabs" class="social_icon twitter">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="mailto:contact@pressroom.com" class="social_icon mail">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon envato">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="index.html@page=post_gallery.html#" class="social_icon instagram">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="index.html@page=post_gallery.html#" class="social_icon pinterest">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 													</ul>*/
/* 												</div>*/
/* 											</div>*/
/* 										</li>*/
/* 										<li>*/
/* 											<div class="column column_2_3">*/
/* 												<img src='{{baseURL}}/assets/users/images/samples/690x450/image_07.jpg' alt='img'>*/
/* 											</div>*/
/* 											<div class="column column_1_3">*/
/* 												<h3 class="page_margin_top">*/
/* 													Nuclear Fusion is Closer*/
/* 												</h3>*/
/* 												<p>*/
/* 													Since December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.*/
/* 													Since December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.*/
/* 													Since December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.*/
/* 												</p>*/
/* 												<div class="sentence margin_top_0">*/
/* 													<span class="author">John Smith, Flickr</span>*/
/* 												</div>*/
/* 												<div class="clearfix">*/
/* 													<a class="read_more close_popup page_margin_top_section" href="index.html@page=post_gallery.html#" title="Read more"><span class="arrow"></span><span>RETURN TO POST</span></a>*/
/* 												</div>*/
/* 												<div class="share_box page_margin_top_section clearfix">*/
/* 													<label>Share:</label>*/
/* 													<ul class="social_icons dark clearfix">*/
/* 														<li>*/
/* 															<a target="_blank" title="" href="http://facebook.com/QuanticaLabs" class="social_icon facebook">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a target="_blank" title="" href="https://twitter.com/QuanticaLabs" class="social_icon twitter">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="mailto:contact@pressroom.com" class="social_icon mail">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon envato">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="index.html@page=post_gallery.html#" class="social_icon instagram">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="index.html@page=post_gallery.html#" class="social_icon pinterest">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 													</ul>*/
/* 												</div>*/
/* 											</div>*/
/* 										</li>*/
/* 										<li>*/
/* 											<div class="column column_2_3">*/
/* 												<img src='{{baseURL}}/assets/users/images/samples/690x450/image_05.jpg' alt='img'>*/
/* 											</div>*/
/* 											<div class="column column_1_3">*/
/* 												<h3 class="page_margin_top">*/
/* 													Struggling Nuremberg Sack*/
/* 												</h3>*/
/* 												<p>*/
/* 													Since December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.*/
/* 												</p>*/
/* 												<div class="sentence margin_top_0">*/
/* 													<span class="author">John Smith, Flickr</span>*/
/* 												</div>*/
/* 												<div class="clearfix">*/
/* 													<a class="read_more close_popup page_margin_top_section" href="index.html@page=post_gallery.html#" title="Read more"><span class="arrow"></span><span>RETURN TO POST</span></a>*/
/* 												</div>*/
/* 												<div class="share_box page_margin_top_section clearfix">*/
/* 													<label>Share:</label>*/
/* 													<ul class="social_icons dark clearfix">*/
/* 														<li>*/
/* 															<a target="_blank" title="" href="http://facebook.com/QuanticaLabs" class="social_icon facebook">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a target="_blank" title="" href="https://twitter.com/QuanticaLabs" class="social_icon twitter">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="mailto:contact@pressroom.com" class="social_icon mail">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon envato">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="index.html@page=post_gallery.html#" class="social_icon instagram">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="index.html@page=post_gallery.html#" class="social_icon pinterest">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 													</ul>*/
/* 												</div>*/
/* 											</div>*/
/* 										</li>*/
/* 										<li>*/
/* 											<div class="column column_2_3">*/
/* 												<img src='{{baseURL}}/assets/users/images/samples/690x450/image_02.jpg' alt='img'>*/
/* 											</div>*/
/* 											<div class="column column_1_3">*/
/* 												<h3 class="page_margin_top">*/
/* 													New Painkiller*/
/* 												</h3>*/
/* 												<p>*/
/* 													Since December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.*/
/* 												</p>*/
/* 												<div class="sentence margin_top_0">*/
/* 													<span class="author">John Smith, Flickr</span>*/
/* 												</div>*/
/* 												<div class="clearfix">*/
/* 													<a class="read_more close_popup page_margin_top_section" href="index.html@page=post_gallery.html#" title="Read more"><span class="arrow"></span><span>RETURN TO POST</span></a>*/
/* 												</div>*/
/* 												<div class="share_box page_margin_top_section clearfix">*/
/* 													<label>Share:</label>*/
/* 													<ul class="social_icons dark clearfix">*/
/* 														<li>*/
/* 															<a target="_blank" title="" href="http://facebook.com/QuanticaLabs" class="social_icon facebook">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a target="_blank" title="" href="https://twitter.com/QuanticaLabs" class="social_icon twitter">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="mailto:contact@pressroom.com" class="social_icon mail">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon envato">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="index.html@page=post_gallery.html#" class="social_icon instagram">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="index.html@page=post_gallery.html#" class="social_icon pinterest">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 													</ul>*/
/* 												</div>*/
/* 											</div>*/
/* 										</li>*/
/* 										<li>*/
/* 											<div class="column column_2_3">*/
/* 												<img src='{{baseURL}}/assets/users/images/samples/690x450/image_08.jpg' alt='img'>*/
/* 											</div>*/
/* 											<div class="column column_1_3">*/
/* 												<h3 class="page_margin_top">*/
/* 													Built on Brotherhood*/
/* 												</h3>*/
/* 												<p>*/
/* 													Since December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.*/
/* 												</p>*/
/* 												<div class="sentence margin_top_0">*/
/* 													<span class="author">John Smith, Flickr</span>*/
/* 												</div>*/
/* 												<div class="clearfix">*/
/* 													<a class="read_more close_popup page_margin_top_section" href="index.html@page=post_gallery.html#" title="Read more"><span class="arrow"></span><span>RETURN TO POST</span></a>*/
/* 												</div>*/
/* 												<div class="share_box page_margin_top_section clearfix">*/
/* 													<label>Share:</label>*/
/* 													<ul class="social_icons dark clearfix">*/
/* 														<li>*/
/* 															<a target="_blank" title="" href="http://facebook.com/QuanticaLabs" class="social_icon facebook">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a target="_blank" title="" href="https://twitter.com/QuanticaLabs" class="social_icon twitter">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="mailto:contact@pressroom.com" class="social_icon mail">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon envato">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="index.html@page=post_gallery.html#" class="social_icon instagram">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 														<li>*/
/* 															<a title="" href="index.html@page=post_gallery.html#" class="social_icon pinterest">*/
/* 																&nbsp;*/
/* 															</a>*/
/* 														</li>*/
/* 													</ul>*/
/* 												</div>*/
/* 											</div>*/
/* 										</li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="column column_1_3">*/
/* 			<h4 class="box_header page_margin_top_section">Latest Posts</h4>*/
/* 			<div class="vertical_carousel_container clearfix">*/
/* 				<ul class="blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post_gallery.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">*/
/* 							<span class="icon small gallery"></span>*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/100x100/image_06.jpg' alt='img'>*/
/* 						</a>*/
/* 						<div class="post_content">*/
/* 							<h5>*/
/* 								<a href="index.html@page=post_gallery.html" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>*/
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
/* 						<a href="index.html@page=post.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/100x100/image_12.jpg' alt='img'>*/
/* 						</a>*/
/* 						<div class="post_content">*/
/* 							<h5>*/
/* 								<a href="index.html@page=post.html" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>*/
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
/* 						<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/100x100/image_02.jpg' alt='img'>*/
/* 						</a>*/
/* 						<div class="post_content">*/
/* 							<h5>*/
/* 								<a href="index.html@page=post.html" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>*/
/* 							</h5>*/
/* 							<ul class="post_details simple">*/
/* 								<li class="category"><a href="index.html@page=category&amp;cat=sports.html" title="SPORTS">SPORTS</a></li>*/
/* 								<li class="date">*/
/* 									10:11 PM, Feb 02*/
/* 								</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</li>*/
/* 					<li class="post">*/
/* 						<a href="index.html@page=post_soundcloud.html" title="Nuclear Fusion Closer to Becoming a Reality">*/
/* 							<img src='{{baseURL}}/assets/users/images/samples/100x100/image_13.jpg' alt='img'>*/
/* 						</a>*/
/* 						<div class="post_content">*/
/* 							<h5>*/
/* 								<a href="index.html@page=post_soundcloud.html" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a>*/
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
/* 			</div>*/
/* */
/* 			<h4 class="box_header page_margin_top_section">Categories</h4>*/
/* 			<ul class="taxonomies columns clearfix page_margin_top">*/
/* 				<li>*/
/* 					<a href="index.html@page=category&amp;cat=world.html" title="WORLD">WORLD</a>*/
/* 				</li>*/
/* 				<li>*/
/* 					<a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a>*/
/* 				</li>*/
/* 				<li>*/
/* 					<a href="index.html@page=category&amp;cat=sports.html" title="SPORTS">SPORTS</a>*/
/* 				</li>*/
/* 				<li>*/
/* 					<a href="index.html@page=category&amp;cat=science.html" title="SCIENCE">SCIENCE</a>*/
/* 				</li>*/
/* 				<li>*/
/* 					<a href="index.html@page=category&amp;cat=lifestyle.html" title="LIFESTYLE">LIFESTYLE</a>*/
/* 				</li>*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
