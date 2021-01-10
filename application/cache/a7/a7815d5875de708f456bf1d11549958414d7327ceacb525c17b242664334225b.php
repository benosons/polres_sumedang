<?php

/* admin/pengaduan/index.html */
class __TwigTemplate_216d7fe86a9a644423c79bc1bf2f1d3566e58d613ebeba1d40b33e84d6580cf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/pengaduan/index.html", 1);
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
                <li class=\"breadcrumb-item\"><a href=\"email-inbox.html#!\">Pengaduan</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"email-inbox.html#!\">Kotak Masuk</a>
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
                            <div class=\"card-block\">";
        // line 45
        if ((((isset($context["role"]) ? $context["role"] : null) == 100) || ((isset($context["role"]) ? $context["role"] : null) == 200))) {
            // line 46
            echo "                                <button onclick=\"compose()\" id=\"input-pengaduan\" class=\"btn btn-danger btn-block\"><i class=\"icofont icofont-ui-text-chat\"></i> Tulis Pengaduan</button>
                                <button style=\"display:none;\" id=\"kirim-pengaduan\" class=\"btn btn-success btn-block\"> <i class=\"fa fa-send\"></i> Kirim</button>";
        } elseif (((        // line 48
(isset($context["role"]) ? $context["role"] : null) == 100) || ((isset($context["role"]) ? $context["role"] : null) != 200))) {
            // line 49
            echo "                                <button id=\"balas-pengaduan\" class=\"btn btn-success btn-block\" disabled><i class=\"fa fa-send\" ></i> Kirim Balasan</button>";
        }
        // line 51
        echo "                            </div>
                            <ul class=\"page-list\">
                                <li id=\"inbox\">
                                    <div class=\"mail-section\">
                                        <a href=\"#\" onclick=\"loadpengaduan('inbox')\">
                                            <i class=\"icofont icofont-inbox\"></i> Kotak Masuk
                                        </a>
                                        <label class=\"label label-primary f-right\">6</label>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"mail-section\">
                                        <a href=\"email-inbox.html\">
                                            <i class=\"icofont icofont-star\"></i> Penting
                                        </a>
                                    </div>
                                </li>
                                <li id=\"sent\">
                                    <div class=\"mail-section\">
                                        <a href=\"#\" onclick=\"loadpengaduan('sent')\">
                                            <i class=\"icofont icofont-paper-plane\"></i> Terkirim
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"mail-section\">
                                        <a href=\"email-inbox.html\">
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
                                    <a class=\"mail-work\" href=\"email-inbox.html\">Work</a>
                                </li>
                                <li>
                                    <a class=\"mail-design\" href=\"email-inbox.html\">Design</a>
                                </li>
                                <li>
                                    <a class=\"mail-family\" href=\"email-inbox.html\">Family</a>
                                </li>
                                <li>
                                    <a class=\"mail-friends\" href=\"email-inbox.html\">Friends</a>
                                </li>
                                <li>
                                    <a class=\"mail-office\" href=\"email-inbox.html\">Office</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Left-side section end -->
                    <!-- Right-side section start -->
                    <div class=\"col-lg-12 col-xl-9\">
                        <div class=\"mail-box-head row\">
                            <div class=\"col-sm-3\">
                                <h3>Kotak Masuk</h3>
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
                            <div class=\"mail-body-content email-compose\">
                                <form>
                                    <div class=\"form-group row\">
                                        <div class=\"col-sm-12\">
                                            <select id=\"tujuan\" name=\"select\" class=\"form-control\">
                                                <option value=\"0\">- Pilih tujuan pengaduan -</option>
                                                <option value=\"30\">Lalu lintas</option>
                                                <option value=\"40\">Reskrim</option>
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
                            <div class=\"mail-body-content email-read\">

                            </div>
                            <div class=\"mail-body-content email-content\">
                                <div class=\"table-responsive\">
                                  <table id=\"table-style-hover\" class=\"table table-striped table-hover table-bordered nowrap\">
                                    <thead>
                                        <tr>
                                            <th style=\"width:100%;\">Name</th>
                                            <th style=\"width:100%;\">Position</th>
                                            <th style=\"width:100%;\">Office</th>
                                            <th style=\"width:100%;\">Age</th>
                                            <th style=\"width:100%;\">Age</th>
                                            <th style=\"width:100%;\">Age</th>
                                        </tr>
                                    </thead>
                                </table>
                                </div>
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
        // line 196
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/action-js/admin/datapengaduan.js\"></script> -->";
    }

    public function getTemplateName()
    {
        return "admin/pengaduan/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 196,  93 => 51,  90 => 49,  88 => 48,  85 => 46,  83 => 45,  72 => 36,  61 => 28,  57 => 27,  30 => 2,  11 => 1,);
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
/*                 <li class="breadcrumb-item"><a href="email-inbox.html#!">Pengaduan</a>*/
/*                 </li>*/
/*                 <li class="breadcrumb-item"><a href="email-inbox.html#!">Kotak Masuk</a>*/
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
/*                               {% if role == 100 or role == 200 %}*/
/*                                 <button onclick="compose()" id="input-pengaduan" class="btn btn-danger btn-block"><i class="icofont icofont-ui-text-chat"></i> Tulis Pengaduan</button>*/
/*                                 <button style="display:none;" id="kirim-pengaduan" class="btn btn-success btn-block"> <i class="fa fa-send"></i> Kirim</button>*/
/*                               {% elseif role == 100 or role != 200 %}*/
/*                                 <button id="balas-pengaduan" class="btn btn-success btn-block" disabled><i class="fa fa-send" ></i> Kirim Balasan</button>*/
/*                               {% endif%}*/
/*                             </div>*/
/*                             <ul class="page-list">*/
/*                                 <li id="inbox">*/
/*                                     <div class="mail-section">*/
/*                                         <a href="#" onclick="loadpengaduan('inbox')">*/
/*                                             <i class="icofont icofont-inbox"></i> Kotak Masuk*/
/*                                         </a>*/
/*                                         <label class="label label-primary f-right">6</label>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <div class="mail-section">*/
/*                                         <a href="email-inbox.html">*/
/*                                             <i class="icofont icofont-star"></i> Penting*/
/*                                         </a>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <li id="sent">*/
/*                                     <div class="mail-section">*/
/*                                         <a href="#" onclick="loadpengaduan('sent')">*/
/*                                             <i class="icofont icofont-paper-plane"></i> Terkirim*/
/*                                         </a>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <div class="mail-section">*/
/*                                         <a href="email-inbox.html">*/
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
/*                                     <a class="mail-work" href="email-inbox.html">Work</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a class="mail-design" href="email-inbox.html">Design</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a class="mail-family" href="email-inbox.html">Family</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a class="mail-friends" href="email-inbox.html">Friends</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a class="mail-office" href="email-inbox.html">Office</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Left-side section end -->*/
/*                     <!-- Right-side section start -->*/
/*                     <div class="col-lg-12 col-xl-9">*/
/*                         <div class="mail-box-head row">*/
/*                             <div class="col-sm-3">*/
/*                                 <h3>Kotak Masuk</h3>*/
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
/*                             <div class="mail-body-content email-compose">*/
/*                                 <form>*/
/*                                     <div class="form-group row">*/
/*                                         <div class="col-sm-12">*/
/*                                             <select id="tujuan" name="select" class="form-control">*/
/*                                                 <option value="0">- Pilih tujuan pengaduan -</option>*/
/*                                                 <option value="30">Lalu lintas</option>*/
/*                                                 <option value="40">Reskrim</option>*/
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
/*                             <div class="mail-body-content email-read">*/
/* */
/*                             </div>*/
/*                             <div class="mail-body-content email-content">*/
/*                                 <div class="table-responsive">*/
/*                                   <table id="table-style-hover" class="table table-striped table-hover table-bordered nowrap">*/
/*                                     <thead>*/
/*                                         <tr>*/
/*                                             <th style="width:100%;">Name</th>*/
/*                                             <th style="width:100%;">Position</th>*/
/*                                             <th style="width:100%;">Office</th>*/
/*                                             <th style="width:100%;">Age</th>*/
/*                                             <th style="width:100%;">Age</th>*/
/*                                             <th style="width:100%;">Age</th>*/
/*                                         </tr>*/
/*                                     </thead>*/
/*                                 </table>*/
/*                                 </div>*/
/*                             </div>*/
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
