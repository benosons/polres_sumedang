<?php

/* admin/pengaduan/baca.html */
class __TwigTemplate_d8d0fabebda4476caaf079822d435d06718f52e412b78ef6c97f82d7ec13e585 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/pengaduan/baca.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "
<div class=\"page-wrapper\">
    <!-- Page-header start -->
    <div class=\"page-header\">
        <div class=\"page-header-title\">
            <h4>Pengaduan</h4>
        </div>
        <div class=\"page-header-breadcrumb\">
            <ul class=\"breadcrumb-title\">
                <li class=\"breadcrumb-item\">
                    <a href=\"index.html\">
                        <i class=\"icofont icofont-home\"></i>
                    </a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"email-compose.html#!\">Pengaduan</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"email-compose.html#!\">Tulis Pengaduan</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Page-header end -->
    <!-- Page-body start -->
    <div class=\"page-body\">
        <div class=\"card\">
            <div class=\"card-block email-card\">
                <div class=\"row\">
                    <!-- Left-side section start -->
                    <div class=\"col-lg-12 col-xl-3\">
                        <div class=\"user-body\">
                            <div class=\"card-block\">
                                <button id=\"input-pengaduan\" class=\"btn btn-danger btn-block\"><i class=\"icofont icofont-ui-text-chat\"></i> Tulis Pengaduan</button>
                            </div>
                            <ul class=\"page-list\">
                                <li class=\"\">
                                    <div class=\"mail-section\">
                                        <a href=\"/datapengaduan\">
                                            <i class=\"icofont icofont-inbox\"></i> Kotak Masuk
                                        </a>
                                        <label class=\"label label-primary f-right\">6</label>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"mail-section\">
                                        <a href=\"email-compose.html\">
                                            <i class=\"icofont icofont-star\"></i> Penting
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"mail-section\">
                                        <a href=\"email-compose.html\">
                                            <i class=\"icofont icofont-paper-plane\"></i> Terkirim
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"mail-section\">
                                        <a href=\"email-compose.html\">
                                            <i class=\"icofont icofont-ui-delete\"></i> Dihapus
                                        </a>
                                        <label class=\"label label-info f-right\">30</label>
                                    </div>
                                </li>
                            </ul>
                            <ul class=\"card-block label-list\">
                                <li>
                                    <h5>Labels</h5></li>
                                <li>
                                    <a class=\"mail-work\" href=\"email-compose.html\">Work</a>
                                </li>
                                <li>
                                    <a class=\"mail-design\" href=\"email-compose.html\">Design</a>
                                </li>
                                <li>
                                    <a class=\"mail-family\" href=\"email-compose.html\">Family</a>
                                </li>
                                <li>
                                    <a class=\"mail-friends\" href=\"email-compose.html\">Friends</a>
                                </li>
                                <li>
                                    <a class=\"mail-office\" href=\"email-compose.html\">Office</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Left-side section end -->
                    <!-- Right-side section start -->
                    <div class=\"col-lg-12 col-xl-9\">
                        <div class=\"mail-body\">
                            <div class=\"mail-body-header\">
                                <div class=\"btn-group\" role=\"group\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\".btn-xlg\">
                                    <button type=\"button\" class=\"btn btn-warning btn-xs waves-effect waves-light\">
                                        <i class=\"icofont icofont-exclamation-circle\"></i>
                                    </button>
                                    <!-- <button type=\"button\" class=\"btn btn-warning btn-xs waves-effect waves-light\">
                                        <i class=\"icofont icofont-inbox\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-warning btn-xs waves-effect waves-light\">
                                        <i class=\"icofont icofont-ui-delete\"></i>
                                    </button> -->
                                </div>
                                <!-- <div class=\"btn-group dropdown-split-primary\">
                                    <button type=\"button\" class=\"btn btn-primary\">
                                        <i class=\"icofont icofont-ui-folder\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <span class=\"sr-only\">Toggle primary</span>
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item waves-effect waves-light\" href=\"email-compose.html#\">Action</a>
                                        <a class=\"dropdown-item waves-effect waves-light\" href=\"email-compose.html#\">Another action</a>
                                        <a class=\"dropdown-item waves-effect waves-light\" href=\"email-compose.html#\">Something else here</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item waves-effect waves-light\" href=\"email-compose.html#\">Separated link</a>
                                    </div>
                                </div> -->
                                <!-- <div class=\"btn-group dropdown-split-primary\">
                                    <button type=\"button\" class=\"btn btn-primary\">
                                        More
                                    </button>
                                    <button type=\"button\" class=\"btn btn-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <span class=\"sr-only\">Toggle primary</span>
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item waves-effect waves-light\" href=\"email-compose.html#\">Action</a>
                                        <a class=\"dropdown-item waves-effect waves-light\" href=\"email-compose.html#\">Another action</a>
                                        <a class=\"dropdown-item waves-effect waves-light\" href=\"email-compose.html#\">Something else here</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item waves-effect waves-light\" href=\"email-compose.html#\">Separated link</a>
                                    </div>
                                </div> -->
                            </div>
                            <div class=\"mail-body-content email-read\">

                            </div>
                        </div>
                    </div>
                    <!-- Right-side section end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page-body end -->
</div>
<!-- <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/action-js/admin/datapengaduan.js\"></script> -->";
    }

    public function getTemplateName()
    {
        return "admin/pengaduan/baca.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 147,  30 => 2,  11 => 1,);
    }
}
/* {% extends "admin/layout.html" %} {% block content %}*/
/* */
/* <div class="page-wrapper">*/
/*     <!-- Page-header start -->*/
/*     <div class="page-header">*/
/*         <div class="page-header-title">*/
/*             <h4>Pengaduan</h4>*/
/*         </div>*/
/*         <div class="page-header-breadcrumb">*/
/*             <ul class="breadcrumb-title">*/
/*                 <li class="breadcrumb-item">*/
/*                     <a href="index.html">*/
/*                         <i class="icofont icofont-home"></i>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="breadcrumb-item"><a href="email-compose.html#!">Pengaduan</a>*/
/*                 </li>*/
/*                 <li class="breadcrumb-item"><a href="email-compose.html#!">Tulis Pengaduan</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <!-- Page-header end -->*/
/*     <!-- Page-body start -->*/
/*     <div class="page-body">*/
/*         <div class="card">*/
/*             <div class="card-block email-card">*/
/*                 <div class="row">*/
/*                     <!-- Left-side section start -->*/
/*                     <div class="col-lg-12 col-xl-3">*/
/*                         <div class="user-body">*/
/*                             <div class="card-block">*/
/*                                 <button id="input-pengaduan" class="btn btn-danger btn-block"><i class="icofont icofont-ui-text-chat"></i> Tulis Pengaduan</button>*/
/*                             </div>*/
/*                             <ul class="page-list">*/
/*                                 <li class="">*/
/*                                     <div class="mail-section">*/
/*                                         <a href="/datapengaduan">*/
/*                                             <i class="icofont icofont-inbox"></i> Kotak Masuk*/
/*                                         </a>*/
/*                                         <label class="label label-primary f-right">6</label>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <div class="mail-section">*/
/*                                         <a href="email-compose.html">*/
/*                                             <i class="icofont icofont-star"></i> Penting*/
/*                                         </a>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <div class="mail-section">*/
/*                                         <a href="email-compose.html">*/
/*                                             <i class="icofont icofont-paper-plane"></i> Terkirim*/
/*                                         </a>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <div class="mail-section">*/
/*                                         <a href="email-compose.html">*/
/*                                             <i class="icofont icofont-ui-delete"></i> Dihapus*/
/*                                         </a>*/
/*                                         <label class="label label-info f-right">30</label>*/
/*                                     </div>*/
/*                                 </li>*/
/*                             </ul>*/
/*                             <ul class="card-block label-list">*/
/*                                 <li>*/
/*                                     <h5>Labels</h5></li>*/
/*                                 <li>*/
/*                                     <a class="mail-work" href="email-compose.html">Work</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a class="mail-design" href="email-compose.html">Design</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a class="mail-family" href="email-compose.html">Family</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a class="mail-friends" href="email-compose.html">Friends</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a class="mail-office" href="email-compose.html">Office</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Left-side section end -->*/
/*                     <!-- Right-side section start -->*/
/*                     <div class="col-lg-12 col-xl-9">*/
/*                         <div class="mail-body">*/
/*                             <div class="mail-body-header">*/
/*                                 <div class="btn-group" role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">*/
/*                                     <button type="button" class="btn btn-warning btn-xs waves-effect waves-light">*/
/*                                         <i class="icofont icofont-exclamation-circle"></i>*/
/*                                     </button>*/
/*                                     <!-- <button type="button" class="btn btn-warning btn-xs waves-effect waves-light">*/
/*                                         <i class="icofont icofont-inbox"></i>*/
/*                                     </button>*/
/*                                     <button type="button" class="btn btn-warning btn-xs waves-effect waves-light">*/
/*                                         <i class="icofont icofont-ui-delete"></i>*/
/*                                     </button> -->*/
/*                                 </div>*/
/*                                 <!-- <div class="btn-group dropdown-split-primary">*/
/*                                     <button type="button" class="btn btn-primary">*/
/*                                         <i class="icofont icofont-ui-folder"></i>*/
/*                                     </button>*/
/*                                     <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*                                         <span class="sr-only">Toggle primary</span>*/
/*                                     </button>*/
/*                                     <div class="dropdown-menu">*/
/*                                         <a class="dropdown-item waves-effect waves-light" href="email-compose.html#">Action</a>*/
/*                                         <a class="dropdown-item waves-effect waves-light" href="email-compose.html#">Another action</a>*/
/*                                         <a class="dropdown-item waves-effect waves-light" href="email-compose.html#">Something else here</a>*/
/*                                         <div class="dropdown-divider"></div>*/
/*                                         <a class="dropdown-item waves-effect waves-light" href="email-compose.html#">Separated link</a>*/
/*                                     </div>*/
/*                                 </div> -->*/
/*                                 <!-- <div class="btn-group dropdown-split-primary">*/
/*                                     <button type="button" class="btn btn-primary">*/
/*                                         More*/
/*                                     </button>*/
/*                                     <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*                                         <span class="sr-only">Toggle primary</span>*/
/*                                     </button>*/
/*                                     <div class="dropdown-menu">*/
/*                                         <a class="dropdown-item waves-effect waves-light" href="email-compose.html#">Action</a>*/
/*                                         <a class="dropdown-item waves-effect waves-light" href="email-compose.html#">Another action</a>*/
/*                                         <a class="dropdown-item waves-effect waves-light" href="email-compose.html#">Something else here</a>*/
/*                                         <div class="dropdown-divider"></div>*/
/*                                         <a class="dropdown-item waves-effect waves-light" href="email-compose.html#">Separated link</a>*/
/*                                     </div>*/
/*                                 </div> -->*/
/*                             </div>*/
/*                             <div class="mail-body-content email-read">*/
/* */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Right-side section end -->*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!-- Page-body end -->*/
/* </div>*/
/* <!-- <script src="{{baseURL}}/assets/action-js/admin/datapengaduan.js"></script> -->*/
/* {% endblock %}*/
/* */
