<?php

/* admin/informasi/inputkegiatan.html */
class __TwigTemplate_791c8dcf43422a71e198db9744eeefb2ab7cf0321579c0ce92f9ace5f286ea64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/informasi/inputkegiatan.html", 1);
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
        echo "<input type=\"hidden\" name=\"\" id=\"baseUrl\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "\">
<div class=\"page-wrapper\">
    <!-- Page-header start -->
    <div class=\"page-header\">
        <div class=\"page-header-title\">
            <h4>Kegiatan</h4>
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
                <li class=\"breadcrumb-item\"><a href=\"email-inbox.html#!\">Kegiatan</a>
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
                    <div class=\"col-lg-12 col-xl-3\">
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
                                <button onclick=\"onberita('input')\" id=\"tambah-berita\" class=\"btn btn-danger btn-block\"><i class=\"icofont icofont-edit\"></i> Tambah Kegiatan</button>
                                <button onclick=\"\" id=\"post-berita\" class=\"btn btn-success btn-block\"><i class=\"fa fa-send\"></i> Posting Kegiatan</button>
                            </div>
                            <ul class=\"page-list\">
                                <li id=\"list-berita\" class=\"active\">
                                    <div class=\"mail-section\">
                                        <a href=\"#!\" onclick=\"onberita('list')\">
                                            <i class=\"icofont icofont-newspaper\"></i> Data Kegiatan
                                        </a>
                                        <label class=\"label label-primary f-right\">6</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Left-side section end -->
                    <!-- Right-side section start -->
                    <div class=\"col-lg-12 col-xl-9\">
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
                                            <th>Foto</th>
                                            <th>Judul Kegiatan</th>
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
                                    <!-- <div class=\"summernote berita-summernote\"></div> -->
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
<div class=\"modal fade\" id=\"image-Modal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">View Foto Kegiatan</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div id=\"lightgallery7\" class=\"wall-img-preview lightgallery-popup\">
                    <div class=\"col-md-6 p-0 wall-item\" data-responsive=\"";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/timeline/img1.jpg 375, img/1-480.jpg 480, img/1.jpg 800\" data-src=\"";
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/timeline/img1.jpg\" data-sub-html=\"<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>\">
                        <a href=\"fb-wall.html\">
                            <img src=\"";
        // line 148
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/timeline/img1.jpg\" class=\"img-fluid width-100\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-6 p-0 wall-item\" data-responsive=\"";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/timeline/img1.jpg 375, img/1-480.jpg 480, img/1.jpg 800\" data-src=\"";
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/timeline/img1.jpg\" data-sub-html=\"<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>\">
                        <a href=\"fb-wall.html\">
                            <img src=\"";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/timeline/img1.jpg\" class=\"img-fluid width-100\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-6 p-0 wall-item\" data-responsive=\"";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/timeline/img1.jpg 375, img/1-480.jpg 480, img/1.jpg 800\" data-src=\"";
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/timeline/img1.jpg\" data-sub-html=\"<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>\">
                        <a href=\"fb-wall.html\">
                            <img src=\"";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/timeline/img1.jpg\" class=\"img-fluid width-100\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-6 p-0 wall-item\" data-responsive=\"";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/timeline/img1.jpg 375, img/1-480.jpg 480, img/1.jpg 800\" data-src=\"";
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/timeline/img1.jpg\" data-sub-html=\"<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>\">
                        <a href=\"fb-wall.html\">
                            <img src=\"";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/timeline/img1.jpg\" class=\"img-fluid width-100\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-6 p-0 wall-item\" data-responsive=\"";
        // line 166
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/timeline/img1.jpg 375, img/1-480.jpg 480, img/1.jpg 800\" data-src=\"";
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/timeline/img1.jpg\" data-sub-html=\"<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>\">
                        <a href=\"fb-wall.html\">
                            <img src=\"";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/timeline/img1.jpg\" class=\"img-fluid width-100\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-6 p-0 wall-item\" data-responsive=\"";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/timeline/img1.jpg 375, img/1-480.jpg 480, img/1.jpg 800\" data-src=\"";
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/timeline/img1.jpg\" data-sub-html=\"<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>\">
                        <a href=\"fb-wall.html\">
                            <img src=\"";
        // line 173
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/timeline/img1.jpg\" class=\"img-fluid width-100\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-6 p-0 wall-item\" data-responsive=\"";
        // line 176
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/timeline/img1.jpg 375, img/1-480.jpg 480, img/1.jpg 800\" data-src=\"";
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/timeline/img1.jpg\" data-sub-html=\"<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>\">
                        <a href=\"fb-wall.html\">
                            <img src=\"";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/timeline/img1.jpg\" class=\"img-fluid width-100\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-6 p-0 wall-item\" data-responsive=\"";
        // line 181
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/timeline/img1.jpg 375, img/1-480.jpg 480, img/1.jpg 800\" data-src=\"";
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/timeline/img1.jpg\" data-sub-html=\"<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>\">
                        <a href=\"fb-wall.html\">
                            <img src=\"";
        // line 183
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/timeline/img1.jpg\" class=\"img-fluid width-100\" alt=\"\">
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default waves-effect \" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/action-js/admin/datapengaduan.js\"></script> -->";
    }

    public function getTemplateName()
    {
        return "admin/informasi/inputkegiatan.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 194,  285 => 183,  278 => 181,  272 => 178,  265 => 176,  259 => 173,  252 => 171,  246 => 168,  239 => 166,  233 => 163,  226 => 161,  220 => 158,  213 => 156,  207 => 153,  200 => 151,  194 => 148,  187 => 146,  74 => 36,  63 => 28,  59 => 27,  30 => 2,  11 => 1,);
    }
}
/* {% extends "admin/layout.html" %} {% block content %}*/
/* <input type="hidden" name="" id="baseUrl" value="{{baseURL}}">*/
/* <div class="page-wrapper">*/
/*     <!-- Page-header start -->*/
/*     <div class="page-header">*/
/*         <div class="page-header-title">*/
/*             <h4>Kegiatan</h4>*/
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
/*                 <li class="breadcrumb-item"><a href="email-inbox.html#!">Kegiatan</a>*/
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
/*                     <div class="col-lg-12 col-xl-3">*/
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
/*                                 <button onclick="onberita('input')" id="tambah-berita" class="btn btn-danger btn-block"><i class="icofont icofont-edit"></i> Tambah Kegiatan</button>*/
/*                                 <button onclick="" id="post-berita" class="btn btn-success btn-block"><i class="fa fa-send"></i> Posting Kegiatan</button>*/
/*                             </div>*/
/*                             <ul class="page-list">*/
/*                                 <li id="list-berita" class="active">*/
/*                                     <div class="mail-section">*/
/*                                         <a href="#!" onclick="onberita('list')">*/
/*                                             <i class="icofont icofont-newspaper"></i> Data Kegiatan*/
/*                                         </a>*/
/*                                         <label class="label label-primary f-right">6</label>*/
/*                                     </div>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Left-side section end -->*/
/*                     <!-- Right-side section start -->*/
/*                     <div class="col-lg-12 col-xl-9">*/
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
/*                                             <th>Foto</th>*/
/*                                             <th>Judul Kegiatan</th>*/
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
/*                                     <!-- <div class="summernote berita-summernote"></div> -->*/
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
/* <div class="modal fade" id="image-Modal" tabindex="-1" role="dialog">*/
/*     <div class="modal-dialog modal-lg" role="document">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header">*/
/*                 <h4 class="modal-title">View Foto Kegiatan</h4>*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/*                     <span aria-hidden="true">&times;</span>*/
/*                 </button>*/
/*             </div>*/
/*             <div class="modal-body">*/
/*                 <div id="lightgallery7" class="wall-img-preview lightgallery-popup">*/
/*                     <div class="col-md-6 p-0 wall-item" data-responsive="{{baseURL}}/assets/admin/images/timeline/img1.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="{{baseURL}}/assets/admin/images/timeline/img1.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">*/
/*                         <a href="fb-wall.html">*/
/*                             <img src="{{baseURL}}/assets/admin/images/timeline/img1.jpg" class="img-fluid width-100" alt="">*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="col-md-6 p-0 wall-item" data-responsive="{{baseURL}}/assets/admin/images/timeline/img1.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="{{baseURL}}/assets/admin/images/timeline/img1.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">*/
/*                         <a href="fb-wall.html">*/
/*                             <img src="{{baseURL}}/assets/admin/images/timeline/img1.jpg" class="img-fluid width-100" alt="">*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="col-md-6 p-0 wall-item" data-responsive="{{baseURL}}/assets/admin/images/timeline/img1.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="{{baseURL}}/assets/admin/images/timeline/img1.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">*/
/*                         <a href="fb-wall.html">*/
/*                             <img src="{{baseURL}}/assets/admin/images/timeline/img1.jpg" class="img-fluid width-100" alt="">*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="col-md-6 p-0 wall-item" data-responsive="{{baseURL}}/assets/admin/images/timeline/img1.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="{{baseURL}}/assets/admin/images/timeline/img1.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">*/
/*                         <a href="fb-wall.html">*/
/*                             <img src="{{baseURL}}/assets/admin/images/timeline/img1.jpg" class="img-fluid width-100" alt="">*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="col-md-6 p-0 wall-item" data-responsive="{{baseURL}}/assets/admin/images/timeline/img1.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="{{baseURL}}/assets/admin/images/timeline/img1.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">*/
/*                         <a href="fb-wall.html">*/
/*                             <img src="{{baseURL}}/assets/admin/images/timeline/img1.jpg" class="img-fluid width-100" alt="">*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="col-md-6 p-0 wall-item" data-responsive="{{baseURL}}/assets/admin/images/timeline/img1.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="{{baseURL}}/assets/admin/images/timeline/img1.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">*/
/*                         <a href="fb-wall.html">*/
/*                             <img src="{{baseURL}}/assets/admin/images/timeline/img1.jpg" class="img-fluid width-100" alt="">*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="col-md-6 p-0 wall-item" data-responsive="{{baseURL}}/assets/admin/images/timeline/img1.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="{{baseURL}}/assets/admin/images/timeline/img1.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">*/
/*                         <a href="fb-wall.html">*/
/*                             <img src="{{baseURL}}/assets/admin/images/timeline/img1.jpg" class="img-fluid width-100" alt="">*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="col-md-6 p-0 wall-item" data-responsive="{{baseURL}}/assets/admin/images/timeline/img1.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="{{baseURL}}/assets/admin/images/timeline/img1.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">*/
/*                         <a href="fb-wall.html">*/
/*                             <img src="{{baseURL}}/assets/admin/images/timeline/img1.jpg" class="img-fluid width-100" alt="">*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="modal-footer">*/
/*                 <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <!-- <script src="{{baseURL}}/assets/action-js/admin/datapengaduan.js"></script> -->*/
/* {% endblock %}*/
/* */
