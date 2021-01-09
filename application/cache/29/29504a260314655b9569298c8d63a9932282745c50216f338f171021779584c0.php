<?php

/* users/profile/kapolres.html */
class __TwigTemplate_a0656f0be9bf7984ba4f77feec5c6fa5489321fd78ce850fe207bc36208a1ecc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("users/layout.html", "users/profile/kapolres.html", 1);
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
\t\t\t<h2 class=\"page_title\">KAPOLRES SUMEDANG</h2>
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
          Profile
        </li>
\t\t\t\t<li class=\"separator icon_small_arrow right_gray\">
\t\t\t\t\t&nbsp;
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tKapolres Sumedang
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
      <div class=\"row page_margin_top\">
        <div class=\"column column_1_2\">
          <img class=\"responsive pr_preload\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/images/kapolres.jpg\" alt=\"img\" style=\"padding-left: 30%;width: 15rem;display: block;\">
        </div>
        <div class=\"column column_1_2\">
          <h2 class=\"page_margin_top\">Sambutan</h2>
          <h3 class=\"about_subtitle\" style=\"font-size: 45px;\">KAPOLRES SUMEDANG</h3>
          <h2 class=\"box_header\">AKBP Eko Prasetyo Robbyanto</h2>
        </div>
      </div>
      <br/>
      <div class=\"review_block \">
        <div class=\"text\">
\t\t\t\t\t\t\t\t\t<p>Britons are normally never more comfortable than when talking about the weather, but recent extreme weather events have began to test that theory. Since December, the United Kingdom has faced a relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years hitting the North Sea coastline, floods that ruined Christmas for thousands across Surrey and Dorset and in January, the most exceptional period of rainfall since 1766. The deluge has transformed swathes of southern England into cold, dark lakes, destroying homes and businesses, and in some cases taking lives.</p>
\t\t\t\t\t\t\t\t\t<p>Politicians have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as “flood tourists” at the site of disasters, incapable of helping those in crisis and only there for a photo opportunity. The Environment Agency, the body responsible for combating floods and managing rivers, has also been blamed for failing to curb the disasters. But there’s an ever larger debate over the role of climate change in the current floods and storms, and it has been unremittingly hostile.</p>
\t\t\t\t\t\t\t\t\t<p>For those affected by flooding however, their immediate concerns are not necessarily about the manmade changes to the earth’s atmosphere. A YouGov poll from February found that while 84% of those surveyed believed Britain was likely to experience similar extreme weather events in the next few years, only 30% thought it was connected to man-made climate change.</p>
\t\t\t\t\t\t\t\t\t<p>There is no evidence to counter the basic premise that a warmer world will lead to more intense daily and hourly rain events. When heavy rain in 2000 devastated parts of Britain, a later study found the climate change had doubled the chances of the flood occurring, said Julia Slingo.</p>
\t\t\t\t\t\t\t\t</div>
      </div>
  \t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "users/profile/kapolres.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 41,  30 => 2,  11 => 1,);
    }
}
/* {% extends "users/layout.html" %} {% block content %}*/
/* <input id="baseUrl" value="{{baseURL}}" hidden>*/
/* 	<div class="page_header clearfix page_margin_top">*/
/* 		<div class="page_header_left">*/
/* 			<h2 class="page_title">KAPOLRES SUMEDANG</h2>*/
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
/*           Profile*/
/*         </li>*/
/* 				<li class="separator icon_small_arrow right_gray">*/
/* 					&nbsp;*/
/* 				</li>*/
/* 				<li>*/
/* 					Kapolres Sumedang*/
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
/*       <div class="row page_margin_top">*/
/*         <div class="column column_1_2">*/
/*           <img class="responsive pr_preload" src="{{baseURL}}/assets/images/kapolres.jpg" alt="img" style="padding-left: 30%;width: 15rem;display: block;">*/
/*         </div>*/
/*         <div class="column column_1_2">*/
/*           <h2 class="page_margin_top">Sambutan</h2>*/
/*           <h3 class="about_subtitle" style="font-size: 45px;">KAPOLRES SUMEDANG</h3>*/
/*           <h2 class="box_header">AKBP Eko Prasetyo Robbyanto</h2>*/
/*         </div>*/
/*       </div>*/
/*       <br/>*/
/*       <div class="review_block ">*/
/*         <div class="text">*/
/* 									<p>Britons are normally never more comfortable than when talking about the weather, but recent extreme weather events have began to test that theory. Since December, the United Kingdom has faced a relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years hitting the North Sea coastline, floods that ruined Christmas for thousands across Surrey and Dorset and in January, the most exceptional period of rainfall since 1766. The deluge has transformed swathes of southern England into cold, dark lakes, destroying homes and businesses, and in some cases taking lives.</p>*/
/* 									<p>Politicians have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as “flood tourists” at the site of disasters, incapable of helping those in crisis and only there for a photo opportunity. The Environment Agency, the body responsible for combating floods and managing rivers, has also been blamed for failing to curb the disasters. But there’s an ever larger debate over the role of climate change in the current floods and storms, and it has been unremittingly hostile.</p>*/
/* 									<p>For those affected by flooding however, their immediate concerns are not necessarily about the manmade changes to the earth’s atmosphere. A YouGov poll from February found that while 84% of those surveyed believed Britain was likely to experience similar extreme weather events in the next few years, only 30% thought it was connected to man-made climate change.</p>*/
/* 									<p>There is no evidence to counter the basic premise that a warmer world will lead to more intense daily and hourly rain events. When heavy rain in 2000 devastated parts of Britain, a later study found the climate change had doubled the chances of the flood occurring, said Julia Slingo.</p>*/
/* 								</div>*/
/*       </div>*/
/*   	</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
