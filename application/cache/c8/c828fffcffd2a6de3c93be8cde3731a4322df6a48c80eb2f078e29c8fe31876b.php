<?php

/* admin/pelayanan/index.html */
class __TwigTemplate_2885afa469b259b50d7ed701b463139646368bf7f9bc16d49e1e23a54a737ced extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/pelayanan/index.html", 1);
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
            <h4>Pelayanan</h4>
        </div>
        <div class=\"page-header-breadcrumb\">
            <ul class=\"breadcrumb-title\">
                <li class=\"breadcrumb-item\">
                    <a href=\"index.html\">
                        <i class=\"icofont icofont-home\"></i>
                    </a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"email-inbox.html#!\">Pelayanan</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"email-inbox.html#!\">Konten</a>
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
                                <button onclick=\"\" id=\"save-banner\" class=\"btn btn-success btn-block\"><i class=\"fa fa-send\"></i> Simpan Satuan</button>
                            </div>
                            <ul class=\"page-list\">
                                <li id=\"list-konten\" class=\"active\">
                                    <div class=\"mail-section\">
                                        <a href=\"#!\" onclick=\"onberita('list')\">
                                            <i class=\"ti-bookmark-alt\"></i> Konten
                                        </a>
                                        <label class=\"label label-primary f-right\">6</label>
                                    </div>
                                </li>
                                <li id=\"list-pengumuman\" class=\"\">
                                    <div class=\"mail-section\">
                                        <a href=\"#!\" onclick=\"onberita('list')\">
                                            <i class=\"ti-bookmark-alt\"></i> Pengumuman
                                        </a>
                                        <label class=\"label label-primary f-right\">6</label>
                                    </div>
                                </li>
                                <li id=\"list-video\" class=\"\">
                                    <div class=\"mail-section\">
                                        <a href=\"#!\" onclick=\"onberita('list')\">
                                            <i class=\"ti-bookmark-alt\"></i> Video
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
                            <div class=\"mail-body-content konten-list\">
                              <div class=\"card\">
                                    <div class=\"card-header\">
                                        <h5 class=\"card-header-text\"></h5>
                                        <button id=\"edit-btn\" type=\"button\" class=\"btn btn-sm btn-primary waves-effect waves-light f-right\">
                                            <i class=\"icofont icofont-edit\"></i>
                                        </button>
                                    </div>
                                    <div class=\"card-block\">
                                        <div class=\"view-info\">
                                            <div class=\"row\">
                                                <div class=\"col-lg-12\">
                                                    <div class=\"general-info\">
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-12 col-xl-12\">
                                                                <table class=\"table m-0\">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope=\"row\">Banner</th>
                                                                            <td>
                                                                              <div class=\"media-left\">
                                                                                <img class=\"user-img\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/user-profile/user-img.jpg\" alt=\"user-img\">
                                                                              </div>
                                                                              <br/>
                                                                              <div class=\"form-group\">
                                                                                <input type=\"file\" name=\"files[]\" id=\"filer_input_banner\" multiple=\"multiple\">
                                                                              </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope=\"row\">Satuan</th>
                                                                            <td>
                                                                              <select id=\"satuan\" class=\"form-control\">
                                                                                  <option value=\"\">-Pilih-</option>
                                                                                  <option value=\"10\">LANTAS</option>
                                                                                  <option value=\"20\">RESKRIM</option>
                                                                              </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope=\"row\">Jenis Pelayanan</th>
                                                                            <td>
                                                                              <select id=\"jenis\" class=\"form-control\">
                                                                                  <option value=\"\">-Pilih-</option>
                                                                                  <option value=\"SIM\">SIM</option>
                                                                                  <option value=\"TILANG\">TILANG</option>
                                                                              </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope=\"row\">Konten</th>
                                                                            <td>
                                                                              <div class=\"summernote konten-summernote\"></div>
                                                                            </td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- end of table col-lg-6 -->

                                                            <!-- end of table col-lg-6 -->
                                                        </div>
                                                        <!-- end of row -->
                                                    </div>
                                                    <!-- end of general info -->
                                                </div>
                                                <!-- end of col-lg-12 -->
                                            </div>
                                            <!-- end of row -->
                                        </div>
                                        <!-- end of view-info -->
                                    </div>
                                    <!-- end of card-block -->
                                </div>
                            </div>
                            <div class=\"mail-body-content pengumuman-list\">
                              <div class=\"table-responsive\">
                                <table id=\"setting-pengumuman\" class=\"table table-striped table-bordered nowrap\">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Satuan</th>
                                            <th>Deskripsi Satuan</th>
                                        </tr>
                                    </thead>
                                </table>
                              </div>
                            </div>
                            <div class=\"mail-body-content satuan-tambah\">
                                <form>
                                    <div class=\"form-group\">
                                        <input id=\"satuan_code\" type=\"text\" class=\"form-control\" placeholder=\"Kode Satuan\" disabled>
                                    </div>
                                    <div class=\"form-group\">
                                        <input id=\"satuan_name\" type=\"text\" class=\"form-control\" placeholder=\"Nama Satuan\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input id=\"satuan_desc\" type=\"text\" class=\"form-control\" placeholder=\"Deskripsi Satuan\">
                                    </div>

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
        // line 218
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/action-js/admin/datapengaduan.js\"></script> -->";
    }

    public function getTemplateName()
    {
        return "admin/pelayanan/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 218,  164 => 125,  72 => 36,  61 => 28,  57 => 27,  30 => 2,  11 => 1,);
    }
}
/* {% extends "admin/layout.html" %} {% block content %}*/
/* */
/* <div class="page-wrapper">*/
/*     <!-- Page-header start -->*/
/*     <div class="page-header">*/
/*         <div class="page-header-title">*/
/*             <h4>Pelayanan</h4>*/
/*         </div>*/
/*         <div class="page-header-breadcrumb">*/
/*             <ul class="breadcrumb-title">*/
/*                 <li class="breadcrumb-item">*/
/*                     <a href="index.html">*/
/*                         <i class="icofont icofont-home"></i>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="breadcrumb-item"><a href="email-inbox.html#!">Pelayanan</a>*/
/*                 </li>*/
/*                 <li class="breadcrumb-item"><a href="email-inbox.html#!">Konten</a>*/
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
/*                                 <button onclick="" id="save-banner" class="btn btn-success btn-block"><i class="fa fa-send"></i> Simpan Satuan</button>*/
/*                             </div>*/
/*                             <ul class="page-list">*/
/*                                 <li id="list-konten" class="active">*/
/*                                     <div class="mail-section">*/
/*                                         <a href="#!" onclick="onberita('list')">*/
/*                                             <i class="ti-bookmark-alt"></i> Konten*/
/*                                         </a>*/
/*                                         <label class="label label-primary f-right">6</label>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <li id="list-pengumuman" class="">*/
/*                                     <div class="mail-section">*/
/*                                         <a href="#!" onclick="onberita('list')">*/
/*                                             <i class="ti-bookmark-alt"></i> Pengumuman*/
/*                                         </a>*/
/*                                         <label class="label label-primary f-right">6</label>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <li id="list-video" class="">*/
/*                                     <div class="mail-section">*/
/*                                         <a href="#!" onclick="onberita('list')">*/
/*                                             <i class="ti-bookmark-alt"></i> Video*/
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
/*                             <div class="mail-body-content konten-list">*/
/*                               <div class="card">*/
/*                                     <div class="card-header">*/
/*                                         <h5 class="card-header-text"></h5>*/
/*                                         <button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">*/
/*                                             <i class="icofont icofont-edit"></i>*/
/*                                         </button>*/
/*                                     </div>*/
/*                                     <div class="card-block">*/
/*                                         <div class="view-info">*/
/*                                             <div class="row">*/
/*                                                 <div class="col-lg-12">*/
/*                                                     <div class="general-info">*/
/*                                                         <div class="row">*/
/*                                                             <div class="col-lg-12 col-xl-12">*/
/*                                                                 <table class="table m-0">*/
/*                                                                     <tbody>*/
/*                                                                         <tr>*/
/*                                                                             <th scope="row">Banner</th>*/
/*                                                                             <td>*/
/*                                                                               <div class="media-left">*/
/*                                                                                 <img class="user-img" src="{{baseURL}}/assets/admin/images/user-profile/user-img.jpg" alt="user-img">*/
/*                                                                               </div>*/
/*                                                                               <br/>*/
/*                                                                               <div class="form-group">*/
/*                                                                                 <input type="file" name="files[]" id="filer_input_banner" multiple="multiple">*/
/*                                                                               </div>*/
/*                                                                             </td>*/
/*                                                                         </tr>*/
/*                                                                         <tr>*/
/*                                                                             <th scope="row">Satuan</th>*/
/*                                                                             <td>*/
/*                                                                               <select id="satuan" class="form-control">*/
/*                                                                                   <option value="">-Pilih-</option>*/
/*                                                                                   <option value="10">LANTAS</option>*/
/*                                                                                   <option value="20">RESKRIM</option>*/
/*                                                                               </select>*/
/*                                                                             </td>*/
/*                                                                         </tr>*/
/*                                                                         <tr>*/
/*                                                                             <th scope="row">Jenis Pelayanan</th>*/
/*                                                                             <td>*/
/*                                                                               <select id="jenis" class="form-control">*/
/*                                                                                   <option value="">-Pilih-</option>*/
/*                                                                                   <option value="SIM">SIM</option>*/
/*                                                                                   <option value="TILANG">TILANG</option>*/
/*                                                                               </select>*/
/*                                                                             </td>*/
/*                                                                         </tr>*/
/*                                                                         <tr>*/
/*                                                                             <th scope="row">Konten</th>*/
/*                                                                             <td>*/
/*                                                                               <div class="summernote konten-summernote"></div>*/
/*                                                                             </td>*/
/*                                                                         </tr>*/
/* */
/*                                                                     </tbody>*/
/*                                                                 </table>*/
/*                                                             </div>*/
/*                                                             <!-- end of table col-lg-6 -->*/
/* */
/*                                                             <!-- end of table col-lg-6 -->*/
/*                                                         </div>*/
/*                                                         <!-- end of row -->*/
/*                                                     </div>*/
/*                                                     <!-- end of general info -->*/
/*                                                 </div>*/
/*                                                 <!-- end of col-lg-12 -->*/
/*                                             </div>*/
/*                                             <!-- end of row -->*/
/*                                         </div>*/
/*                                         <!-- end of view-info -->*/
/*                                     </div>*/
/*                                     <!-- end of card-block -->*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="mail-body-content pengumuman-list">*/
/*                               <div class="table-responsive">*/
/*                                 <table id="setting-pengumuman" class="table table-striped table-bordered nowrap">*/
/*                                     <thead>*/
/*                                         <tr>*/
/*                                             <th>No</th>*/
/*                                             <th>Nama Satuan</th>*/
/*                                             <th>Deskripsi Satuan</th>*/
/*                                         </tr>*/
/*                                     </thead>*/
/*                                 </table>*/
/*                               </div>*/
/*                             </div>*/
/*                             <div class="mail-body-content satuan-tambah">*/
/*                                 <form>*/
/*                                     <div class="form-group">*/
/*                                         <input id="satuan_code" type="text" class="form-control" placeholder="Kode Satuan" disabled>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <input id="satuan_name" type="text" class="form-control" placeholder="Nama Satuan">*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <input id="satuan_desc" type="text" class="form-control" placeholder="Deskripsi Satuan">*/
/*                                     </div>*/
/* */
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
