<?php

/* admin/informasi/inputberita.html */
class __TwigTemplate_b39c7fe41ad261bf93ffcae9dbeccde241202026db2ff2f8c23ae821de70ca71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/informasi/inputberita.html", 1);
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
            <h4>Berita</h4>
        </div>
        <div class=\"page-header-breadcrumb\">
            <ul class=\"breadcrumb-title\">
                <li class=\"breadcrumb-item\">
                    <a href=\"index.html\">
                        <i class=\"icofont icofont-home\"></i>
                    </a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"email-inbox.html#!\">Informasi</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"email-inbox.html#!\">Berita</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Page-header end -->
    <!-- Page-body start -->
    <div class=\"page-body\">
        <div class=\"card\">
          <input hidden id=\"userid\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["userid"]) ? $context["userid"] : null), "html", null, true);
        echo "\">
          <input hidden id=\"role\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["role"]) ? $context["role"] : null), "html", null, true);
        echo "\">
            <!-- Email-card start -->
            <div class=\"card-block email-card\">
                <div class=\"row\">
                    <!-- Left-side section start -->
                    <div class=\"col-lg-12 col-xl-2\">
                        <div class=\"user-head row\">
                            <div class=\"user-face\">
                                <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/user.png\" class=\"img-60\" alt=\"User-Profile-Image\">
                            </div>
                            <div class=\"user-name\">
                                <span>BAG ...</span>
                                <span>Sat Lantas</span>
                            </div>
                        </div>
                        <div class=\"user-body\">
                            <div class=\"card-block\">
                                <button onclick=\"onberita('input')\" id=\"tambah-berita\" class=\"btn btn-danger btn-block\"><i class=\"icofont icofont-edit\"></i> Tambah Berita</button>
                                <button onclick=\"\" id=\"post-berita\" class=\"btn btn-success btn-block\"><i class=\"fa fa-send\"></i> Posting Berita</button>
                            </div>
                            <ul class=\"page-list\">
                                <li id=\"list-berita\" class=\"active\">
                                    <div class=\"mail-section\">
                                        <a href=\"#!\" onclick=\"onberita('list')\">
                                            <i class=\"icofont icofont-newspaper\"></i> Data Berita
                                        </a>
                                        <label class=\"label label-primary f-right\">6</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Left-side section end -->
                    <!-- Right-side section start -->
                    <div class=\"col-lg-12 col-xl-10\">
                        <div class=\"mail-box-head row\">
                            <div class=\"col-sm-3\">
                                <h3></h3>
                            </div>
                            <div class=\"col-md-9\">
                                <form class=\"f-right\">
                                    <div class=\"right-icon-control\">
                                        <input type=\"text\" class=\"form-control  search-text\" placeholder=\"Search Friend\" id=\"search-friends-2\">
                                        <div class=\"form-icon\">
                                            <i class=\"icofont icofont-search\"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class=\"mail-body\">
                            <div class=\"mail-body-header\">
                                <div class=\"btn-group\" role=\"group\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\".btn-xlg\">
                                    <button type=\"button\" class=\"btn btn-warning btn-xs waves-effect waves-light\">
                                        <i class=\"icofont icofont-exclamation-circle\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-warning btn-xs waves-effect waves-light\">
                                        <i class=\"icofont icofont-ui-delete\"></i>
                                    </button>
                                </div>
                            </div>
                            <div class=\"mail-body-content berita-list\">
                              <div class=\"table-responsive\">
                                <table id=\"setting-default\" class=\"table table-striped table-bordered nowrap\">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Headline</th>
                                            <th>Judul</th>
                                            <th>Create By</th>
                                            <th colspan=2>Create Date</th>
                                        </tr>
                                    </thead>
                                </table>
                              </div>
                            </div>
                            <div class=\"mail-body-content berita-tulis\">
                                <form>
                                    <div class=\"form-group row\">
                                        <div class=\"col-sm-12\">
                                            <select id=\"tujuan\" name=\"select\" class=\"form-control\">
                                                <!-- <option value=\"0\">- Pilih Satuan -</option>
                                                <option value=\"30\">Lalu lintas</option>
                                                <option value=\"40\">Reskrim</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <input id=\"judul\" type=\"text\" class=\"form-control\" placeholder=\"Judul\">
                                    </div>
                                    <div class=\"form-group\">
                                      <input type=\"file\" name=\"files[]\" id=\"filer_input\" multiple=\"multiple\">
                                    </div>
                                    <div class=\"summernote berita-summernote\"></div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <!-- Right-side section end -->
                </div>
            </div>
            <!-- Email-card end -->
        </div>
    </div>
    <!-- Page-body start -->
</div>
<!-- <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/action-js/admin/datapengaduan.js\"></script> -->";
    }

    public function getTemplateName()
    {
        return "admin/informasi/inputberita.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 135,  72 => 36,  61 => 28,  57 => 27,  30 => 2,  11 => 1,);
    }
}
/* {% extends "admin/layout.html" %} {% block content %}*/
/* */
/* <div class="page-wrapper">*/
/*     <!-- Page-header start -->*/
/*     <div class="page-header">*/
/*         <div class="page-header-title">*/
/*             <h4>Berita</h4>*/
/*         </div>*/
/*         <div class="page-header-breadcrumb">*/
/*             <ul class="breadcrumb-title">*/
/*                 <li class="breadcrumb-item">*/
/*                     <a href="index.html">*/
/*                         <i class="icofont icofont-home"></i>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="breadcrumb-item"><a href="email-inbox.html#!">Informasi</a>*/
/*                 </li>*/
/*                 <li class="breadcrumb-item"><a href="email-inbox.html#!">Berita</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <!-- Page-header end -->*/
/*     <!-- Page-body start -->*/
/*     <div class="page-body">*/
/*         <div class="card">*/
/*           <input hidden id="userid" value="{{userid}}">*/
/*           <input hidden id="role" value="{{role}}">*/
/*             <!-- Email-card start -->*/
/*             <div class="card-block email-card">*/
/*                 <div class="row">*/
/*                     <!-- Left-side section start -->*/
/*                     <div class="col-lg-12 col-xl-2">*/
/*                         <div class="user-head row">*/
/*                             <div class="user-face">*/
/*                                 <img src="{{baseURL}}/assets/admin/images/user.png" class="img-60" alt="User-Profile-Image">*/
/*                             </div>*/
/*                             <div class="user-name">*/
/*                                 <span>BAG ...</span>*/
/*                                 <span>Sat Lantas</span>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="user-body">*/
/*                             <div class="card-block">*/
/*                                 <button onclick="onberita('input')" id="tambah-berita" class="btn btn-danger btn-block"><i class="icofont icofont-edit"></i> Tambah Berita</button>*/
/*                                 <button onclick="" id="post-berita" class="btn btn-success btn-block"><i class="fa fa-send"></i> Posting Berita</button>*/
/*                             </div>*/
/*                             <ul class="page-list">*/
/*                                 <li id="list-berita" class="active">*/
/*                                     <div class="mail-section">*/
/*                                         <a href="#!" onclick="onberita('list')">*/
/*                                             <i class="icofont icofont-newspaper"></i> Data Berita*/
/*                                         </a>*/
/*                                         <label class="label label-primary f-right">6</label>*/
/*                                     </div>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Left-side section end -->*/
/*                     <!-- Right-side section start -->*/
/*                     <div class="col-lg-12 col-xl-10">*/
/*                         <div class="mail-box-head row">*/
/*                             <div class="col-sm-3">*/
/*                                 <h3></h3>*/
/*                             </div>*/
/*                             <div class="col-md-9">*/
/*                                 <form class="f-right">*/
/*                                     <div class="right-icon-control">*/
/*                                         <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends-2">*/
/*                                         <div class="form-icon">*/
/*                                             <i class="icofont icofont-search"></i>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </form>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="mail-body">*/
/*                             <div class="mail-body-header">*/
/*                                 <div class="btn-group" role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">*/
/*                                     <button type="button" class="btn btn-warning btn-xs waves-effect waves-light">*/
/*                                         <i class="icofont icofont-exclamation-circle"></i>*/
/*                                     </button>*/
/*                                     <button type="button" class="btn btn-warning btn-xs waves-effect waves-light">*/
/*                                         <i class="icofont icofont-ui-delete"></i>*/
/*                                     </button>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="mail-body-content berita-list">*/
/*                               <div class="table-responsive">*/
/*                                 <table id="setting-default" class="table table-striped table-bordered nowrap">*/
/*                                     <thead>*/
/*                                         <tr>*/
/*                                             <th>No</th>*/
/*                                             <th>Headline</th>*/
/*                                             <th>Judul</th>*/
/*                                             <th>Create By</th>*/
/*                                             <th colspan=2>Create Date</th>*/
/*                                         </tr>*/
/*                                     </thead>*/
/*                                 </table>*/
/*                               </div>*/
/*                             </div>*/
/*                             <div class="mail-body-content berita-tulis">*/
/*                                 <form>*/
/*                                     <div class="form-group row">*/
/*                                         <div class="col-sm-12">*/
/*                                             <select id="tujuan" name="select" class="form-control">*/
/*                                                 <!-- <option value="0">- Pilih Satuan -</option>*/
/*                                                 <option value="30">Lalu lintas</option>*/
/*                                                 <option value="40">Reskrim</option> -->*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <input id="judul" type="text" class="form-control" placeholder="Judul">*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                       <input type="file" name="files[]" id="filer_input" multiple="multiple">*/
/*                                     </div>*/
/*                                     <div class="summernote berita-summernote"></div>*/
/*                                 </form>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Right-side section end -->*/
/*                 </div>*/
/*             </div>*/
/*             <!-- Email-card end -->*/
/*         </div>*/
/*     </div>*/
/*     <!-- Page-body start -->*/
/* </div>*/
/* <!-- <script src="{{baseURL}}/assets/action-js/admin/datapengaduan.js"></script> -->*/
/* {% endblock %}*/
/* */
