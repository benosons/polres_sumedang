<?php

/* admin/pengaduan/input.html */
class __TwigTemplate_2eda5ab5f9d547b9aa6052fab791fab2bbb0f1a44c0f6ad608dbe32eef5a4a92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/pengaduan/input.html", 1);
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
                                <button id=\"kirim-pengaduan\" class=\"btn btn-success btn-block\"> <i class=\"fa fa-send\"></i> Kirim</button>
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
                            <div class=\"mail-body-content\">
                                <form>
                                    <div class=\"form-group row\">
                                        <div class=\"col-sm-12\">
                                            <select id=\"tujuan\" name=\"select\" class=\"form-control\">
                                                <option value=\"opt1\">- Pilih tujuan pengaduan -</option>
                                                <option value=\"opt2\">Type 2</option>
                                                <option value=\"opt3\">Type 3</option>
                                                <option value=\"opt4\">Type 4</option>
                                                <option value=\"opt5\">Type 5</option>
                                                <option value=\"opt6\">Type 6</option>
                                                <option value=\"opt7\">Type 7</option>
                                                <option value=\"opt8\">Type 8</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"To\">
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <input type=\"email\" class=\"form-control\" placeholder=\"Cc\">
                                            </div>
                                            <div class=\"col-md-6\">
                                                <input type=\"email\" class=\"form-control\" placeholder=\"Bcc\">
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class=\"form-group\">
                                        <input id=\"judul\" type=\"text\" class=\"form-control\" placeholder=\"Judul\">
                                    </div>
                                    <div class=\"form-group\">
                                      <input type=\"file\" name=\"files[]\" id=\"filer_input\" multiple=\"multiple\">
                                    </div>
                                    <div class=\"summernote email-summernote\"></div>
                                </form>
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
        // line 182
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/action-js/admin/datapengaduan.js\"></script> -->";
    }

    public function getTemplateName()
    {
        return "admin/pengaduan/input.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 182,  30 => 2,  11 => 1,);
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
/*                                 <button id="kirim-pengaduan" class="btn btn-success btn-block"> <i class="fa fa-send"></i> Kirim</button>*/
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
/*                             <div class="mail-body-content">*/
/*                                 <form>*/
/*                                     <div class="form-group row">*/
/*                                         <div class="col-sm-12">*/
/*                                             <select id="tujuan" name="select" class="form-control">*/
/*                                                 <option value="opt1">- Pilih tujuan pengaduan -</option>*/
/*                                                 <option value="opt2">Type 2</option>*/
/*                                                 <option value="opt3">Type 3</option>*/
/*                                                 <option value="opt4">Type 4</option>*/
/*                                                 <option value="opt5">Type 5</option>*/
/*                                                 <option value="opt6">Type 6</option>*/
/*                                                 <option value="opt7">Type 7</option>*/
/*                                                 <option value="opt8">Type 8</option>*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <!-- <div class="form-group">*/
/*                                         <input type="text" class="form-control" placeholder="To">*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <div class="row">*/
/*                                             <div class="col-md-6">*/
/*                                                 <input type="email" class="form-control" placeholder="Cc">*/
/*                                             </div>*/
/*                                             <div class="col-md-6">*/
/*                                                 <input type="email" class="form-control" placeholder="Bcc">*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div> -->*/
/*                                     <div class="form-group">*/
/*                                         <input id="judul" type="text" class="form-control" placeholder="Judul">*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                       <input type="file" name="files[]" id="filer_input" multiple="multiple">*/
/*                                     </div>*/
/*                                     <div class="summernote email-summernote"></div>*/
/*                                 </form>*/
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
