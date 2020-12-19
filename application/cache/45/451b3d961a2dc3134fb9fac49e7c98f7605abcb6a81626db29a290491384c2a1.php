<?php

/* users/informasi/berita-post.html */
class __TwigTemplate_1b76ab0c5a713155ccfd0070878ec59527b40c4dbc2d500a71748e439efb876a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("users/layout.html", "users/informasi/berita-post.html", 1);
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
\t\t<div class=\"column column_2_3\" id=\"post-berita\">
\t\t\t<!-- <div class=\"row\">
\t\t\t\t<div class=\"post single\">
\t\t\t\t\t<h1 class=\"post_title\">
\t\t\t\t\t\tBuilt on Brotherhood, Club Lives Up to Name
\t\t\t\t\t</h1>
\t\t\t\t\t<ul class=\"post_details clearfix\">
\t\t\t\t\t\t<li class=\"detail category\">In <a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">Health</a></li>
\t\t\t\t\t\t<li class=\"detail date\">8:25 PM, Feb 23</li>
\t\t\t\t\t\t<li class=\"detail author\">By <a href=\"index.html@page=author.html\" title=\"Anna Shubina\">Anna Shubina</a></li>
\t\t\t\t\t\t<li class=\"detail views\">6 254 Views</li>
\t\t\t\t\t\t<li class=\"detail comments\"><a href=\"index.html@page=post.html#comments_list\" class=\"scroll_to_comments\" title=\"6 Comments\">6 Comments</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<a href=\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_10.jpg\" class=\"post_image page_margin_top prettyPhoto\" title=\"Britons are never more comfortable than when talking about the weather.\">
\t\t\t\t\t\t<img src='";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/users/images/samples/690x450/image_10.jpg' alt='img'>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"sentence\">
\t\t\t\t\t\t<span class=\"text\">Britons are never more comfortable than when talking about the weather.</span>
\t\t\t\t\t\t<span class=\"author\">John Smith, Flickr</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"post_content page_margin_top_section clearfix\">
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<h3 class=\"excerpt\">Politicians have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as flood tourists at the site of disasters.</h3>
\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t<p>Britons are normally never more comfortable than when talking about the weather, but recent extreme weather events have began to test that theory. Since December, the United Kingdom has faced a relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years hitting the North Sea coastline, floods that ruined Christmas for thousands across Surrey and Dorset and in January, the most exceptional period of rainfall since 1766. The deluge has transformed swathes of southern England into cold, dark lakes, destroying homes and businesses, and in some cases taking lives.</p>
\t\t\t\t\t\t\t\t<p>Politicians have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as “flood tourists” at the site of disasters, incapable of helping those in crisis and only there for a photo opportunity. The Environment Agency, the body responsible for combating floods and managing rivers, has also been blamed for failing to curb the disasters. But there’s an ever larger debate over the role of climate change in the current floods and storms, and it has been unremittingly hostile.</p>
\t\t\t\t\t\t\t\t<blockquote class=\"inside_text page_margin_top\">
\t\t\t\t\t\t\t\t\tPoliticians have looked weak in the face of such natural disaster, with many facing criticism from local residents.
\t\t\t\t\t\t\t\t\t<span class=\"author\">&#8212;&nbsp;&nbsp;Julia Slingo, ETF</span>
\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t<p>For those affected by flooding however, their immediate concerns are not necessarily about the manmade changes to the earth’s atmosphere. A YouGov poll from February found that while 84% of those surveyed believed Britain was likely to experience similar extreme weather events in the next few years, only 30% thought it was connected to man-made climate change.</p>
\t\t\t\t\t\t\t\t<p>There is no evidence to counter the basic premise that a warmer world will lead to more intense daily and hourly rain events. When heavy rain in 2000 devastated parts of Britain, a later study found the climate change had doubled the chances of the flood occurring, said Julia Slingo.</p>
\t\t\t\t\t\t\t\t<a title=\"6 Comments\" href=\"index.html@page=post.html\" class=\"read_more page_margin_top scroll_to_comments\"><span class=\"arrow\"></span><span>6 COMMENTS</span></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div> -->
\t\t\t<!-- <div class=\"row page_margin_top\">
\t\t\t\t<div class=\"share_box clearfix\">
\t\t\t\t\t<label>Share:</label>
\t\t\t\t\t<ul class=\"social_icons clearfix\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a target=\"_blank\" title=\"\" href=\"http://facebook.com/QuanticaLabs\" class=\"social_icon facebook\">
\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a target=\"_blank\" title=\"\" href=\"https://twitter.com/QuanticaLabs\" class=\"social_icon twitter\">
\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a title=\"\" href=\"mailto:contact@pressroom.com\" class=\"social_icon mail\">
\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a title=\"\" href=\"index.html@page=post.html#\" class=\"social_icon skype\">
\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a title=\"\" href=\"http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs\" class=\"social_icon envato\">
\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a title=\"\" href=\"index.html@page=post.html#\" class=\"social_icon instagram\">
\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a title=\"\" href=\"index.html@page=post.html#\" class=\"social_icon pinterest\">
\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div> -->
\t\t\t<!-- <div class=\"row page_margin_top\">
\t\t\t\t<ul class=\"taxonomies tags left clearfix\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.html@page=post.html#\" title=\"People\">PEOPLE</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.html@page=post.html#\" title=\"Sport\">SPORT</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"taxonomies categories right clearfix\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.html@page=category&amp;cat=health.html\" title=\"HEALTH\">HEALTH</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div> -->
\t\t\t<!-- <div class=\"row page_margin_top_section\">
\t\t\t\t<h4 class=\"box_header\">Leave a Comment</h4>
\t\t\t\t<p class=\"padding_top_30\">Your email address will not be published. Required fields are marked with *</p>
\t\t\t\t<form class=\"comment_form margin_top_15\" id=\"comment_form\" method=\"post\" action=\"index.html@page=post.html\">
\t\t\t\t\t<fieldset class=\"column column_1_3\">
\t\t\t\t\t\t<input class=\"text_input\" name=\"name\" type=\"text\" value=\"Your Name *\" placeholder=\"Your Name *\">
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"column column_1_3\">
\t\t\t\t\t\t<input class=\"text_input\" name=\"email\" type=\"text\" value=\"Your Email *\" placeholder=\"Your Email *\">
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset class=\"column column_1_3\">
\t\t\t\t\t\t<input class=\"text_input\" name=\"website\" type=\"text\" value=\"Website\" placeholder=\"Website\">
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<textarea name=\"message\" placeholder=\"Comment *\">Comment *</textarea>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<input type=\"submit\" value=\"POST COMMENT\" class=\"more active\">
\t\t\t\t\t\t<a href=\"index.html@page=post.html#cancel\" id=\"cancel_comment\" title=\"Cancel reply\">Cancel reply</a>
\t\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t</div> -->
\t\t\t<!-- <div class=\"row page_margin_top_section\">
\t\t\t\t<h4 class=\"box_header\">6 Comments</h4>
\t\t\t\t<ul id=\"comments_list\">
\t\t\t\t\t<li class=\"comment clearfix\" id=\"comment-1\">
\t\t\t\t\t\t<div class=\"comment_author_avatar\">
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"comment_details\">
\t\t\t\t\t\t\t<div class=\"posted_by clearfix\">
\t\t\t\t\t\t\t\t<h5><a class=\"author\" href=\"index.html@page=post.html#\" title=\"Kevin Nomad\">Kevin Nomad</a></h5>
\t\t\t\t\t\t\t\t<abbr title=\"22 July 2014\" class=\"timeago\">22 July 2014</abbr>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tDonec ipsum diam, pretium mollis dapibus risus. Nullam tindun pulvinar at interdum eget, suscipit eget felis. Pellentesque est faucibus tincidunt risus id interdum primis orci cubilla gravida id interdum eget.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post.html#comment_form\" title=\"Reply\">
\t\t\t\t\t\t\t\t<span class=\"arrow\"></span><span>REPLY</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"comment clearfix\" id=\"comment-2\">
\t\t\t\t\t\t<div class=\"comment_author_avatar\">
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"comment_details\">
\t\t\t\t\t\t\t<div class=\"posted_by clearfix\">
\t\t\t\t\t\t\t\t<h5><a class=\"author\" href=\"index.html@page=post.html#\" title=\"Kevin Nomad\">Kevin Nomad</a></h5>
\t\t\t\t\t\t\t\t<abbr title=\"22 July 2014\" class=\"timeago\">22 July 2014</abbr>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tDonec ipsum diam, pretium mollis dapibus risus. Nullam tindun pulvinar at interdum eget, suscipit eget felis. Pellentesque est faucibus tincidunt risus id interdum primis orci cubilla gravida id interdum eget.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post.html#comment_form\" title=\"Reply\">
\t\t\t\t\t\t\t\t<span class=\"arrow\"></span><span>REPLY</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"children\">
\t\t\t\t\t\t\t<li class=\"comment clearfix\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html#comment-2\" class=\"parent_arrow\"></a>
\t\t\t\t\t\t\t\t<div class=\"comment_author_avatar\">
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"comment_details\">
\t\t\t\t\t\t\t\t\t<div class=\"posted_by clearfix\">
\t\t\t\t\t\t\t\t\t\t<h5><a class=\"author\" href=\"index.html@page=post.html#\" title=\"Keith Douglas\">Keith Douglas</a><a href=\"index.html@page=post.html#comment-2\" class=\"in_reply\">@Kevin Nomad</a></h5>
\t\t\t\t\t\t\t\t\t\t<abbr title=\"22 July 2014\" class=\"timeago\">22 July 2014</abbr>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tDonec ipsum diam, pretium mollis dapibus risus. Nullam tindun pulvinar at interdum eget, suscipit eget felis. Pellentesque est faucibus tincidunt risus id interdum primis orci cubilla gravida id interdum eget.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post.html#comment_form\" title=\"Reply\">
\t\t\t\t\t\t\t\t\t\t<span class=\"arrow\"></span><span>REPLY</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"comment clearfix\">
\t\t\t\t\t\t\t\t<a href=\"index.html@page=post.html#comment-2\" class=\"parent_arrow\"></a>
\t\t\t\t\t\t\t\t<div class=\"comment_author_avatar\">
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"comment_details\">
\t\t\t\t\t\t\t\t\t<div class=\"posted_by clearfix\">
\t\t\t\t\t\t\t\t\t\t<h5><a class=\"author\" href=\"index.html@page=post.html#\" title=\"Keith Douglas\">Keith Douglas</a><a href=\"index.html@page=post.html#comment-2\" class=\"in_reply\">@Kevin Nomad</a></h5>
\t\t\t\t\t\t\t\t\t\t<abbr title=\"22 July 2014\" class=\"timeago\">22 July 2014</abbr>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tDonec ipsum diam, pretium mollis dapibus risus. Nullam tindun pulvinar at interdum eget, suscipit eget felis. Pellentesque est faucibus tincidunt risus id interdum primis orci cubilla gravida id interdum eget.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a class=\"read_more\" href=\"index.html@page=post.html#comment_form\" title=\"Reply\">
\t\t\t\t\t\t\t\t\t\t<span class=\"arrow\"></span><span>REPLY</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"pagination page_margin_top_section\">
\t\t\t\t\t<li class=\"left\">
\t\t\t\t\t\t<a href=\"index.html@page=post.html#\" title=\"\">&nbsp;</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"selected\">
\t\t\t\t\t\t<a href=\"index.html@page=post.html#\" title=\"\">
\t\t\t\t\t\t\t1
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.html@page=post.html#\" title=\"\">
\t\t\t\t\t\t\t2
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.html@page=post.html#\" title=\"\">
\t\t\t\t\t\t\t3
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"right\">
\t\t\t\t\t\t<a href=\"index.html@page=post.html#\" title=\"\">&nbsp;</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div> -->
\t\t</div>
\t\t<div class=\"column column_1_3\">
\t\t\t<h4 class=\"box_header page_margin_top_section\">Latest Posts</h4>
\t\t\t<div class=\"vertical_carousel_container clearfix\">
\t\t\t\t<ul class=\"blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750\">
\t\t\t\t\t<li class=\"post\">
\t\t\t\t\t\t<a href=\"index.html@page=post_gallery.html\" title=\"Study Linking Illnes and Salt Leaves Researchers Doubtful\">
\t\t\t\t\t\t\t<span class=\"icon small gallery\"></span>
\t\t\t\t\t\t\t<img src='";
        // line 303
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
        // line 319
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
        // line 335
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
        // line 351
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
        return "users/informasi/berita-post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 351,  400 => 335,  381 => 319,  362 => 303,  148 => 92,  144 => 91,  112 => 62,  97 => 50,  82 => 38,  66 => 25,  51 => 13,  39 => 4,  35 => 3,  30 => 2,  11 => 1,);
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
/* 		<div class="column column_2_3" id="post-berita">*/
/* 			<!-- <div class="row">*/
/* 				<div class="post single">*/
/* 					<h1 class="post_title">*/
/* 						Built on Brotherhood, Club Lives Up to Name*/
/* 					</h1>*/
/* 					<ul class="post_details clearfix">*/
/* 						<li class="detail category">In <a href="index.html@page=category&amp;cat=health.html" title="HEALTH">Health</a></li>*/
/* 						<li class="detail date">8:25 PM, Feb 23</li>*/
/* 						<li class="detail author">By <a href="index.html@page=author.html" title="Anna Shubina">Anna Shubina</a></li>*/
/* 						<li class="detail views">6 254 Views</li>*/
/* 						<li class="detail comments"><a href="index.html@page=post.html#comments_list" class="scroll_to_comments" title="6 Comments">6 Comments</a></li>*/
/* 					</ul>*/
/* 					<a href="{{baseURL}}/assets/users/images/samples/690x450/image_10.jpg" class="post_image page_margin_top prettyPhoto" title="Britons are never more comfortable than when talking about the weather.">*/
/* 						<img src='{{baseURL}}/assets/users/images/samples/690x450/image_10.jpg' alt='img'>*/
/* 					</a>*/
/* 					<div class="sentence">*/
/* 						<span class="text">Britons are never more comfortable than when talking about the weather.</span>*/
/* 						<span class="author">John Smith, Flickr</span>*/
/* 					</div>*/
/* 					<div class="post_content page_margin_top_section clearfix">*/
/* 						<div class="">*/
/* 							<h3 class="excerpt">Politicians have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as flood tourists at the site of disasters.</h3>*/
/* 							<div class="text">*/
/* 								<p>Britons are normally never more comfortable than when talking about the weather, but recent extreme weather events have began to test that theory. Since December, the United Kingdom has faced a relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years hitting the North Sea coastline, floods that ruined Christmas for thousands across Surrey and Dorset and in January, the most exceptional period of rainfall since 1766. The deluge has transformed swathes of southern England into cold, dark lakes, destroying homes and businesses, and in some cases taking lives.</p>*/
/* 								<p>Politicians have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as “flood tourists” at the site of disasters, incapable of helping those in crisis and only there for a photo opportunity. The Environment Agency, the body responsible for combating floods and managing rivers, has also been blamed for failing to curb the disasters. But there’s an ever larger debate over the role of climate change in the current floods and storms, and it has been unremittingly hostile.</p>*/
/* 								<blockquote class="inside_text page_margin_top">*/
/* 									Politicians have looked weak in the face of such natural disaster, with many facing criticism from local residents.*/
/* 									<span class="author">&#8212;&nbsp;&nbsp;Julia Slingo, ETF</span>*/
/* 								</blockquote>*/
/* 								<p>For those affected by flooding however, their immediate concerns are not necessarily about the manmade changes to the earth’s atmosphere. A YouGov poll from February found that while 84% of those surveyed believed Britain was likely to experience similar extreme weather events in the next few years, only 30% thought it was connected to man-made climate change.</p>*/
/* 								<p>There is no evidence to counter the basic premise that a warmer world will lead to more intense daily and hourly rain events. When heavy rain in 2000 devastated parts of Britain, a later study found the climate change had doubled the chances of the flood occurring, said Julia Slingo.</p>*/
/* 								<a title="6 Comments" href="index.html@page=post.html" class="read_more page_margin_top scroll_to_comments"><span class="arrow"></span><span>6 COMMENTS</span></a>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div> -->*/
/* 			<!-- <div class="row page_margin_top">*/
/* 				<div class="share_box clearfix">*/
/* 					<label>Share:</label>*/
/* 					<ul class="social_icons clearfix">*/
/* 						<li>*/
/* 							<a target="_blank" title="" href="http://facebook.com/QuanticaLabs" class="social_icon facebook">*/
/* 								&nbsp;*/
/* 							</a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a target="_blank" title="" href="https://twitter.com/QuanticaLabs" class="social_icon twitter">*/
/* 								&nbsp;*/
/* 							</a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a title="" href="mailto:contact@pressroom.com" class="social_icon mail">*/
/* 								&nbsp;*/
/* 							</a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a title="" href="index.html@page=post.html#" class="social_icon skype">*/
/* 								&nbsp;*/
/* 							</a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon envato">*/
/* 								&nbsp;*/
/* 							</a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a title="" href="index.html@page=post.html#" class="social_icon instagram">*/
/* 								&nbsp;*/
/* 							</a>*/
/* 						</li>*/
/* 						<li>*/
/* 							<a title="" href="index.html@page=post.html#" class="social_icon pinterest">*/
/* 								&nbsp;*/
/* 							</a>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div> -->*/
/* 			<!-- <div class="row page_margin_top">*/
/* 				<ul class="taxonomies tags left clearfix">*/
/* 					<li>*/
/* 						<a href="index.html@page=post.html#" title="People">PEOPLE</a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<a href="index.html@page=post.html#" title="Sport">SPORT</a>*/
/* 					</li>*/
/* 				</ul>*/
/* 				<ul class="taxonomies categories right clearfix">*/
/* 					<li>*/
/* 						<a href="index.html@page=category&amp;cat=health.html" title="HEALTH">HEALTH</a>*/
/* 					</li>*/
/* 				</ul>*/
/* 			</div> -->*/
/* 			<!-- <div class="row page_margin_top_section">*/
/* 				<h4 class="box_header">Leave a Comment</h4>*/
/* 				<p class="padding_top_30">Your email address will not be published. Required fields are marked with *</p>*/
/* 				<form class="comment_form margin_top_15" id="comment_form" method="post" action="index.html@page=post.html">*/
/* 					<fieldset class="column column_1_3">*/
/* 						<input class="text_input" name="name" type="text" value="Your Name *" placeholder="Your Name *">*/
/* 					</fieldset>*/
/* 					<fieldset class="column column_1_3">*/
/* 						<input class="text_input" name="email" type="text" value="Your Email *" placeholder="Your Email *">*/
/* 					</fieldset>*/
/* 					<fieldset class="column column_1_3">*/
/* 						<input class="text_input" name="website" type="text" value="Website" placeholder="Website">*/
/* 					</fieldset>*/
/* 					<fieldset>*/
/* 						<textarea name="message" placeholder="Comment *">Comment *</textarea>*/
/* 					</fieldset>*/
/* 					<fieldset>*/
/* 						<input type="submit" value="POST COMMENT" class="more active">*/
/* 						<a href="index.html@page=post.html#cancel" id="cancel_comment" title="Cancel reply">Cancel reply</a>*/
/* 					</fieldset>*/
/* 				</form>*/
/* 			</div> -->*/
/* 			<!-- <div class="row page_margin_top_section">*/
/* 				<h4 class="box_header">6 Comments</h4>*/
/* 				<ul id="comments_list">*/
/* 					<li class="comment clearfix" id="comment-1">*/
/* 						<div class="comment_author_avatar">*/
/* 							&nbsp;*/
/* 						</div>*/
/* 						<div class="comment_details">*/
/* 							<div class="posted_by clearfix">*/
/* 								<h5><a class="author" href="index.html@page=post.html#" title="Kevin Nomad">Kevin Nomad</a></h5>*/
/* 								<abbr title="22 July 2014" class="timeago">22 July 2014</abbr>*/
/* 							</div>*/
/* 							<p>*/
/* 								Donec ipsum diam, pretium mollis dapibus risus. Nullam tindun pulvinar at interdum eget, suscipit eget felis. Pellentesque est faucibus tincidunt risus id interdum primis orci cubilla gravida id interdum eget.*/
/* 							</p>*/
/* 							<a class="read_more" href="index.html@page=post.html#comment_form" title="Reply">*/
/* 								<span class="arrow"></span><span>REPLY</span>*/
/* 							</a>*/
/* 						</div>*/
/* 					</li>*/
/* 					<li class="comment clearfix" id="comment-2">*/
/* 						<div class="comment_author_avatar">*/
/* 							&nbsp;*/
/* 						</div>*/
/* 						<div class="comment_details">*/
/* 							<div class="posted_by clearfix">*/
/* 								<h5><a class="author" href="index.html@page=post.html#" title="Kevin Nomad">Kevin Nomad</a></h5>*/
/* 								<abbr title="22 July 2014" class="timeago">22 July 2014</abbr>*/
/* 							</div>*/
/* 							<p>*/
/* 								Donec ipsum diam, pretium mollis dapibus risus. Nullam tindun pulvinar at interdum eget, suscipit eget felis. Pellentesque est faucibus tincidunt risus id interdum primis orci cubilla gravida id interdum eget.*/
/* 							</p>*/
/* 							<a class="read_more" href="index.html@page=post.html#comment_form" title="Reply">*/
/* 								<span class="arrow"></span><span>REPLY</span>*/
/* 							</a>*/
/* 						</div>*/
/* 						<ul class="children">*/
/* 							<li class="comment clearfix">*/
/* 								<a href="index.html@page=post.html#comment-2" class="parent_arrow"></a>*/
/* 								<div class="comment_author_avatar">*/
/* 									&nbsp;*/
/* 								</div>*/
/* 								<div class="comment_details">*/
/* 									<div class="posted_by clearfix">*/
/* 										<h5><a class="author" href="index.html@page=post.html#" title="Keith Douglas">Keith Douglas</a><a href="index.html@page=post.html#comment-2" class="in_reply">@Kevin Nomad</a></h5>*/
/* 										<abbr title="22 July 2014" class="timeago">22 July 2014</abbr>*/
/* 									</div>*/
/* 									<p>*/
/* 										Donec ipsum diam, pretium mollis dapibus risus. Nullam tindun pulvinar at interdum eget, suscipit eget felis. Pellentesque est faucibus tincidunt risus id interdum primis orci cubilla gravida id interdum eget.*/
/* 									</p>*/
/* 									<a class="read_more" href="index.html@page=post.html#comment_form" title="Reply">*/
/* 										<span class="arrow"></span><span>REPLY</span>*/
/* 									</a>*/
/* 								</div>*/
/* 							</li>*/
/* 							<li class="comment clearfix">*/
/* 								<a href="index.html@page=post.html#comment-2" class="parent_arrow"></a>*/
/* 								<div class="comment_author_avatar">*/
/* 									&nbsp;*/
/* 								</div>*/
/* 								<div class="comment_details">*/
/* 									<div class="posted_by clearfix">*/
/* 										<h5><a class="author" href="index.html@page=post.html#" title="Keith Douglas">Keith Douglas</a><a href="index.html@page=post.html#comment-2" class="in_reply">@Kevin Nomad</a></h5>*/
/* 										<abbr title="22 July 2014" class="timeago">22 July 2014</abbr>*/
/* 									</div>*/
/* 									<p>*/
/* 										Donec ipsum diam, pretium mollis dapibus risus. Nullam tindun pulvinar at interdum eget, suscipit eget felis. Pellentesque est faucibus tincidunt risus id interdum primis orci cubilla gravida id interdum eget.*/
/* 									</p>*/
/* 									<a class="read_more" href="index.html@page=post.html#comment_form" title="Reply">*/
/* 										<span class="arrow"></span><span>REPLY</span>*/
/* 									</a>*/
/* 								</div>*/
/* 							</li>*/
/* 						</ul>*/
/* 					</li>*/
/* 				</ul>*/
/* 				<ul class="pagination page_margin_top_section">*/
/* 					<li class="left">*/
/* 						<a href="index.html@page=post.html#" title="">&nbsp;</a>*/
/* 					</li>*/
/* 					<li class="selected">*/
/* 						<a href="index.html@page=post.html#" title="">*/
/* 							1*/
/* 						</a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<a href="index.html@page=post.html#" title="">*/
/* 							2*/
/* 						</a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<a href="index.html@page=post.html#" title="">*/
/* 							3*/
/* 						</a>*/
/* 					</li>*/
/* 					<li class="right">*/
/* 						<a href="index.html@page=post.html#" title="">&nbsp;</a>*/
/* 					</li>*/
/* 				</ul>*/
/* 			</div> -->*/
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
