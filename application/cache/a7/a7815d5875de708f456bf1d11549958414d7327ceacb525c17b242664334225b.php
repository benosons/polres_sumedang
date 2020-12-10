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
            <!-- Email-card start -->
            <div class=\"card-block email-card\">
                <div class=\"row\">
                    <!-- Left-side section start -->
                    <div class=\"col-lg-12 col-xl-3\">
                        <div class=\"user-head row\">
                            <div class=\"user-face\">
                                <img src=\"";
        // line 34
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
                                <button id=\"input-pengaduan\" class=\"btn btn-danger btn-block\"><i class=\"icofont icofont-ui-text-chat\"></i> Tulis Pengaduan</button>
                            </div>
                            <ul class=\"page-list\">
                                <li class=\"active\">
                                    <div class=\"mail-section\">
                                        <a href=\"/datapengaduan\">
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
                                <li>
                                    <div class=\"mail-section\">
                                        <a href=\"email-inbox.html\">
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
                                    <button type=\"button\" class=\"btn btn-primary btn-xs waves-effect waves-light\">
                                        <i class=\"icofont icofont-exclamation-circle\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-primary btn-xs waves-effect waves-light\">
                                        <i class=\"icofont icofont-inbox\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-primary btn-xs waves-effect waves-light\">
                                        <i class=\"icofont icofont-ui-delete\"></i>
                                    </button>
                                </div>
                                <div class=\"btn-group dropdown-split-primary\">
                                    <button type=\"button\" class=\"btn btn-primary\">
                                        <i class=\"icofont icofont-ui-folder\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <span class=\"sr-only\">Toggle primary</span>
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item waves-effect waves-light\" href=\"email-inbox.html#\">Action</a>
                                        <a class=\"dropdown-item waves-effect waves-light\" href=\"email-inbox.html#\">Another action</a>
                                        <a class=\"dropdown-item waves-effect waves-light\" href=\"email-inbox.html#\">Something else here</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item waves-effect waves-light\" href=\"email-inbox.html#\">Separated link</a>
                                    </div>
                                </div>
                                <div class=\"btn-group dropdown-split-primary\">
                                    <button type=\"button\" class=\"btn btn-primary\">
                                        More
                                    </button>
                                    <button type=\"button\" class=\"btn btn-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <span class=\"sr-only\">Toggle primary</span>
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item waves-effect waves-light\" href=\"email-inbox.html#\">Action</a>
                                        <a class=\"dropdown-item waves-effect waves-light\" href=\"email-inbox.html#\">Another action</a>
                                        <a class=\"dropdown-item waves-effect waves-light\" href=\"email-inbox.html#\">Something else here</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item waves-effect waves-light\" href=\"email-inbox.html#\">Separated link</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"mail-body-content\">
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
                                    <!-- <table class=\"table\">
                                        <tr class=\"unread\">
                                            <td>
                                                <div class=\"check-star\">
                                                    <div class=\"checkbox-fade fade-in-primary checkbox\">
                                                        <label>
                                                            <input type=\"checkbox\" value=\"\">
                                                            <span class=\"cr\"><i class=\"cr-icon icofont icofont-verification-check txt-primary\"></i></span>
                                                        </label>
                                                    </div>
                                                    <i class=\"icofont icofont-star text-warning\"></i>
                                                </div>
                                            </td>
                                            <td><a href=\"http://html.phoenixcoded.net/flatable/default/read-mail.html\" class=\"email-name\">Google Inc</a></td>
                                            <td><a href=\"http://html.phoenixcoded.net/flatable/default/read-mail.html\" class=\"email-name\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>
                                            <td class=\"email-attch\"><a href=\"email-inbox.html#\"><i class=\"icofont icofont-clip\"></i></a></td>
                                            <td class=\"email-time\">08:01 AM</td>
                                        </tr>
                                        <tr class=\"unread\">
                                            <td>
                                                <div class=\"check-star\">
                                                    <div class=\"checkbox-fade fade-in-primary checkbox\">
                                                        <label>
                                                            <input type=\"checkbox\" value=\"\">
                                                            <span class=\"cr\"><i class=\"cr-icon icofont icofont-verification-check txt-primary\"></i></span>
                                                        </label>
                                                    </div>
                                                    <i class=\"icofont icofont-star text-primary\"></i>
                                                </div>
                                            </td>
                                            <td><a href=\"http://html.phoenixcoded.net/flatable/default/read-mail.html\" class=\"email-name\">John Doe</a></td>
                                            <td><a href=\"http://html.phoenixcoded.net/flatable/default/read-mail.html\" class=\"email-name\">Coming Up Next Week</a></td>
                                            <td class=\"email-attch\"><a href=\"email-inbox.html#\"><i class=\"icofont icofont-clip\"></i></a></td>
                                            <td class=\"email-time\">13:02 PM</td>
                                        </tr>
                                        <tr class=\"unread\">
                                            <td>
                                                <div class=\"check-star\">
                                                    <div class=\"checkbox-fade fade-in-primary checkbox\">
                                                        <label>
                                                            <input type=\"checkbox\" value=\"\">
                                                            <span class=\"cr\"><i class=\"cr-icon icofont icofont-verification-check txt-primary\"></i></span>
                                                        </label>
                                                    </div>
                                                    <i class=\"icofont icofont-star text-info\"></i>
                                                </div>
                                            </td>
                                            <td><a href=\"http://html.phoenixcoded.net/flatable/default/read-mail.html\" class=\"email-name\">Sara Soudein</a></td>
                                            <td><a href=\"http://html.phoenixcoded.net/flatable/default/read-mail.html\" class=\"email-name\">SVG new updates comes for you</a></td>
                                            <td class=\"email-attch\"><a href=\"email-inbox.html#\"><i class=\"icofont icofont-clip\"></i></a></td>
                                            <td class=\"email-time\">00:05 AM</td>
                                        </tr>
                                        <tr class=\"unread\">
                                            <td>
                                                <div class=\"check-star\">
                                                    <div class=\"checkbox-fade fade-in-primary checkbox\">
                                                        <label>
                                                            <input type=\"checkbox\" value=\"\">
                                                            <span class=\"cr\"><i class=\"cr-icon icofont icofont-verification-check txt-primary\"></i></span>
                                                        </label>
                                                    </div>
                                                    <i class=\"icofont icofont-star text-inverse\"></i>
                                                </div>
                                            </td>
                                            <td><a href=\"http://html.phoenixcoded.net/flatable/default/read-mail.html\" class=\"email-name\">Rinky Behl</a></td>
                                            <td><a href=\"http://html.phoenixcoded.net/flatable/default/read-mail.html\" class=\"email-name\">Photoshop updates are available</a></td>
                                            <td class=\"email-attch\"><a href=\"email-inbox.html#\"><i class=\"icofont icofont-clip\"></i></a></td>
                                            <td class=\"email-time\">10:01 AM</td>
                                        </tr>
                                        <tr class=\"read\">
                                            <td>
                                                <div class=\"check-star\">
                                                    <div class=\"checkbox-fade fade-in-primary checkbox\">
                                                        <label>
                                                            <input type=\"checkbox\" value=\"\">
                                                            <span class=\"cr\"><i class=\"cr-icon icofont icofont-verification-check txt-primary\"></i></span>
                                                        </label>
                                                    </div>
                                                    <i class=\"icofont icofont-star text-primary\"></i>
                                                </div>
                                            </td>
                                            <td><a href=\"http://html.phoenixcoded.net/flatable/default/read-mail.html\" class=\"email-name\">Harry John</a></td>
                                            <td><a href=\"http://html.phoenixcoded.net/flatable/default/read-mail.html\" class=\"email-name\">New upcoming data available</a></td>
                                            <td class=\"email-attch\"><a href=\"email-inbox.html#\"><i class=\"icofont icofont-clip\"></i></a></td>
                                            <td class=\"email-time\">11:01 AM</td>
                                        </tr>
                                        <tr class=\"read\">
                                            <td>
                                                <div class=\"check-star\">
                                                    <div class=\"checkbox-fade fade-in-primary checkbox\">
                                                        <label>
                                                            <input type=\"checkbox\" value=\"\">
                                                            <span class=\"cr\"><i class=\"cr-icon icofont icofont-verification-check txt-primary\"></i></span>
                                                        </label>
                                                    </div>
                                                    <i class=\"icofont icofont-star text-inverse\"></i>
                                                </div>
                                            </td>
                                            <td><a href=\"http://html.phoenixcoded.net/flatable/default/read-mail.html\" class=\"email-name\">Hanry Joseph</a></td>
                                            <td><a href=\"http://html.phoenixcoded.net/flatable/default/read-mail.html\" class=\"email-name\">SCSS current working for new updates</a></td>
                                            <td class=\"email-attch\"><a href=\"email-inbox.html#\"><i class=\"icofont icofont-clip\"></i></a></td>
                                            <td class=\"email-time\">12:01 PM</td>
                                        </tr>
                                        <tr class=\"read\">
                                            <td>
                                                <div class=\"check-star\">
                                                    <div class=\"checkbox-fade fade-in-primary checkbox\">
                                                        <label>
                                                            <input type=\"checkbox\" value=\"\">
                                                            <span class=\"cr\"><i class=\"cr-icon icofont icofont-verification-check txt-primary\"></i></span>
                                                        </label>
                                                    </div>
                                                    <i class=\"icofont icofont-star text-primary\"></i>
                                                </div>
                                            </td>
                                            <td><a href=\"http://html.phoenixcoded.net/flatable/default/read-mail.html\" class=\"email-name\">Liu Koi Yan</a></td>
                                            <td><a href=\"http://html.phoenixcoded.net/flatable/default/read-mail.html\" class=\"email-name\">Charts waiting for you</a></td>
                                            <td class=\"email-attch\"><a href=\"email-inbox.html#\"><i class=\"icofont icofont-clip\"></i></a></td>
                                            <td class=\"email-time\">07:15 AM</td>
                                        </tr>
                                        <tr class=\"unread\">
                                            <td>
                                                <div class=\"check-star\">
                                                    <div class=\"checkbox-fade fade-in-primary checkbox\">
                                                        <label>
                                                            <input type=\"checkbox\" value=\"\">
                                                            <span class=\"cr\"><i class=\"cr-icon icofont icofont-verification-check txt-primary\"></i></span>
                                                        </label>
                                                    </div>
                                                    <i class=\"icofont icofont-star text-warning\"></i>
                                                </div>
                                            </td>
                                            <td><a href=\"http://html.phoenixcoded.net/flatable/default/read-mail.html\" class=\"email-name\">Google Inc</a></td>
                                            <td><a href=\"http://html.phoenixcoded.net/flatable/default/read-mail.html\" class=\"email-name\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>
                                            <td class=\"email-attch\"><a href=\"email-inbox.html#\"><i class=\"icofont icofont-clip\"></i></a></td>
                                            <td class=\"email-time\">08:01 AM</td>
                                        </tr>
                                        <tr class=\"unread\">
                                            <td>
                                                <div class=\"check-star\">
                                                    <div class=\"checkbox-fade fade-in-primary checkbox\">
                                                        <label>
                                                            <input type=\"checkbox\" value=\"\">
                                                            <span class=\"cr\"><i class=\"cr-icon icofont icofont-verification-check txt-primary\"></i></span>
                                                        </label>
                                                    </div>
                                                    <i class=\"icofont icofont-star text-primary\"></i>
                                                </div>
                                            </td>
                                            <td><a href=\"http://html.phoenixcoded.net/flatable/default/read-mail.html\" class=\"email-name\">John Doe</a></td>
                                            <td><a href=\"http://html.phoenixcoded.net/flatable/default/read-mail.html\" class=\"email-name\">Coming Up Next Week</a></td>
                                            <td class=\"email-attch\"><a href=\"email-inbox.html#\"><i class=\"icofont icofont-clip\"></i></a></td>
                                            <td class=\"email-time\">13:02 PM</td>
                                        </tr>
                                        <tr class=\"unread\">
                                            <td>
                                                <div class=\"check-star\">
                                                    <div class=\"checkbox-fade fade-in-primary checkbox\">
                                                        <label>
                                                            <input type=\"checkbox\" value=\"\">
                                                            <span class=\"cr\"><i class=\"cr-icon icofont icofont-verification-check txt-primary\"></i></span>
                                                        </label>
                                                    </div>
                                                    <i class=\"icofont icofont-star text-info\"></i>
                                                </div>
                                            </td>
                                            <td><a href=\"http://html.phoenixcoded.net/flatable/default/read-mail.html\" class=\"email-name\">Sara Soudein</a></td>
                                            <td><a href=\"http://html.phoenixcoded.net/flatable/default/read-mail.html\" class=\"email-name\">SVG new updates comes for you</a></td>
                                            <td class=\"email-attch\"><a href=\"email-inbox.html#\"><i class=\"icofont icofont-clip\"></i></a></td>
                                            <td class=\"email-time\">00:05 AM</td>
                                        </tr>
                                        <tr class=\"unread\">
                                            <td>
                                                <div class=\"check-star\">
                                                    <div class=\"checkbox-fade fade-in-primary checkbox\">
                                                        <label>
                                                            <input type=\"checkbox\" value=\"\">
                                                            <span class=\"cr\"><i class=\"cr-icon icofont icofont-verification-check txt-primary\"></i></span>
                                                        </label>
                                                    </div>
                                                    <i class=\"icofont icofont-star text-inverse\"></i>
                                                </div>
                                            </td>
                                            <td><a href=\"http://html.phoenixcoded.net/flatable/default/read-mail.html\" class=\"email-name\">Rinky Behl</a></td>
                                            <td><a href=\"http://html.phoenixcoded.net/flatable/default/read-mail.html\" class=\"email-name\">Photoshop updates are available</a></td>
                                            <td class=\"email-attch\"><a href=\"email-inbox.html#\"><i class=\"icofont icofont-clip\"></i></a></td>
                                            <td class=\"email-time\">10:01 AM</td>
                                        </tr>
                                        <tr class=\"read\">
                                            <td>
                                                <div class=\"check-star\">
                                                    <div class=\"checkbox-fade fade-in-primary checkbox\">
                                                        <label>
                                                            <input type=\"checkbox\" value=\"\">
                                                            <span class=\"cr\"><i class=\"cr-icon icofont icofont-verification-check txt-primary\"></i></span>
                                                        </label>
                                                    </div>
                                                    <i class=\"icofont icofont-star text-primary\"></i>
                                                </div>
                                            </td>
                                            <td><a href=\"http://html.phoenixcoded.net/flatable/default/read-mail.html\" class=\"email-name\">Harry John</a></td>
                                            <td><a href=\"http://html.phoenixcoded.net/flatable/default/read-mail.html\" class=\"email-name\">New upcoming data available</a></td>
                                            <td class=\"email-attch\"><a href=\"email-inbox.html#\"><i class=\"icofont icofont-clip\"></i></a></td>
                                            <td class=\"email-time\">11:01 AM</td>
                                        </tr>
                                        <tr class=\"read\">
                                            <td>
                                                <div class=\"check-star\">
                                                    <div class=\"checkbox-fade fade-in-primary checkbox\">
                                                        <label>
                                                            <input type=\"checkbox\" value=\"\">
                                                            <span class=\"cr\"><i class=\"cr-icon icofont icofont-verification-check txt-primary\"></i></span>
                                                        </label>
                                                    </div>
                                                    <i class=\"icofont icofont-star text-inverse\"></i>
                                                </div>
                                            </td>
                                            <td><a href=\"http://html.phoenixcoded.net/flatable/default/read-mail.html\" class=\"email-name\">Hanry Joseph</a></td>
                                            <td><a href=\"http://html.phoenixcoded.net/flatable/default/read-mail.html\" class=\"email-name\">SCSS current working for new updates</a></td>
                                            <td class=\"email-attch\"><a href=\"email-inbox.html#\"><i class=\"icofont icofont-clip\"></i></a></td>
                                            <td class=\"email-time\">12:01 PM</td>
                                        </tr>
                                        <tr class=\"read\">
                                            <td>
                                                <div class=\"check-star\">
                                                    <div class=\"checkbox-fade fade-in-primary checkbox\">
                                                        <label>
                                                            <input type=\"checkbox\" value=\"\">
                                                            <span class=\"cr\"><i class=\"cr-icon icofont icofont-verification-check txt-primary\"></i></span>
                                                        </label>
                                                    </div>
                                                    <i class=\"icofont icofont-star text-primary\"></i>
                                                </div>
                                            </td>
                                            <td><a href=\"http://html.phoenixcoded.net/flatable/default/read-mail.html\" class=\"email-name\">Liu Koi Yan</a></td>
                                            <td><a href=\"http://html.phoenixcoded.net/flatable/default/read-mail.html\" class=\"email-name\">Charts waiting for you</a></td>
                                            <td class=\"email-attch\"><a href=\"email-inbox.html#\"><i class=\"icofont icofont-clip\"></i></a></td>
                                            <td class=\"email-time\">07:15 AM</td>
                                        </tr>
                                    </table> -->
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
        // line 426
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
        return array (  459 => 426,  64 => 34,  30 => 2,  11 => 1,);
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
/*                                 <button id="input-pengaduan" class="btn btn-danger btn-block"><i class="icofont icofont-ui-text-chat"></i> Tulis Pengaduan</button>*/
/*                             </div>*/
/*                             <ul class="page-list">*/
/*                                 <li class="active">*/
/*                                     <div class="mail-section">*/
/*                                         <a href="/datapengaduan">*/
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
/*                                 <li>*/
/*                                     <div class="mail-section">*/
/*                                         <a href="email-inbox.html">*/
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
/*                                     <button type="button" class="btn btn-primary btn-xs waves-effect waves-light">*/
/*                                         <i class="icofont icofont-exclamation-circle"></i>*/
/*                                     </button>*/
/*                                     <button type="button" class="btn btn-primary btn-xs waves-effect waves-light">*/
/*                                         <i class="icofont icofont-inbox"></i>*/
/*                                     </button>*/
/*                                     <button type="button" class="btn btn-primary btn-xs waves-effect waves-light">*/
/*                                         <i class="icofont icofont-ui-delete"></i>*/
/*                                     </button>*/
/*                                 </div>*/
/*                                 <div class="btn-group dropdown-split-primary">*/
/*                                     <button type="button" class="btn btn-primary">*/
/*                                         <i class="icofont icofont-ui-folder"></i>*/
/*                                     </button>*/
/*                                     <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*                                         <span class="sr-only">Toggle primary</span>*/
/*                                     </button>*/
/*                                     <div class="dropdown-menu">*/
/*                                         <a class="dropdown-item waves-effect waves-light" href="email-inbox.html#">Action</a>*/
/*                                         <a class="dropdown-item waves-effect waves-light" href="email-inbox.html#">Another action</a>*/
/*                                         <a class="dropdown-item waves-effect waves-light" href="email-inbox.html#">Something else here</a>*/
/*                                         <div class="dropdown-divider"></div>*/
/*                                         <a class="dropdown-item waves-effect waves-light" href="email-inbox.html#">Separated link</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="btn-group dropdown-split-primary">*/
/*                                     <button type="button" class="btn btn-primary">*/
/*                                         More*/
/*                                     </button>*/
/*                                     <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*                                         <span class="sr-only">Toggle primary</span>*/
/*                                     </button>*/
/*                                     <div class="dropdown-menu">*/
/*                                         <a class="dropdown-item waves-effect waves-light" href="email-inbox.html#">Action</a>*/
/*                                         <a class="dropdown-item waves-effect waves-light" href="email-inbox.html#">Another action</a>*/
/*                                         <a class="dropdown-item waves-effect waves-light" href="email-inbox.html#">Something else here</a>*/
/*                                         <div class="dropdown-divider"></div>*/
/*                                         <a class="dropdown-item waves-effect waves-light" href="email-inbox.html#">Separated link</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="mail-body-content">*/
/*                                 <div class="table-responsive">*/
/*                                   <table id="table-style-hover" class="table table-striped table-hover table-bordered nowrap">*/
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <th style="width:100%;">Name</th>*/
/*                                         <th style="width:100%;">Position</th>*/
/*                                         <th style="width:100%;">Office</th>*/
/*                                         <th style="width:100%;">Age</th>*/
/*                                         <th style="width:100%;">Age</th>*/
/*                                         <th style="width:100%;">Age</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                             </table>*/
/*                                     <!-- <table class="table">*/
/*                                         <tr class="unread">*/
/*                                             <td>*/
/*                                                 <div class="check-star">*/
/*                                                     <div class="checkbox-fade fade-in-primary checkbox">*/
/*                                                         <label>*/
/*                                                             <input type="checkbox" value="">*/
/*                                                             <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>*/
/*                                                         </label>*/
/*                                                     </div>*/
/*                                                     <i class="icofont icofont-star text-warning"></i>*/
/*                                                 </div>*/
/*                                             </td>*/
/*                                             <td><a href="http://html.phoenixcoded.net/flatable/default/read-mail.html" class="email-name">Google Inc</a></td>*/
/*                                             <td><a href="http://html.phoenixcoded.net/flatable/default/read-mail.html" class="email-name">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>*/
/*                                             <td class="email-attch"><a href="email-inbox.html#"><i class="icofont icofont-clip"></i></a></td>*/
/*                                             <td class="email-time">08:01 AM</td>*/
/*                                         </tr>*/
/*                                         <tr class="unread">*/
/*                                             <td>*/
/*                                                 <div class="check-star">*/
/*                                                     <div class="checkbox-fade fade-in-primary checkbox">*/
/*                                                         <label>*/
/*                                                             <input type="checkbox" value="">*/
/*                                                             <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>*/
/*                                                         </label>*/
/*                                                     </div>*/
/*                                                     <i class="icofont icofont-star text-primary"></i>*/
/*                                                 </div>*/
/*                                             </td>*/
/*                                             <td><a href="http://html.phoenixcoded.net/flatable/default/read-mail.html" class="email-name">John Doe</a></td>*/
/*                                             <td><a href="http://html.phoenixcoded.net/flatable/default/read-mail.html" class="email-name">Coming Up Next Week</a></td>*/
/*                                             <td class="email-attch"><a href="email-inbox.html#"><i class="icofont icofont-clip"></i></a></td>*/
/*                                             <td class="email-time">13:02 PM</td>*/
/*                                         </tr>*/
/*                                         <tr class="unread">*/
/*                                             <td>*/
/*                                                 <div class="check-star">*/
/*                                                     <div class="checkbox-fade fade-in-primary checkbox">*/
/*                                                         <label>*/
/*                                                             <input type="checkbox" value="">*/
/*                                                             <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>*/
/*                                                         </label>*/
/*                                                     </div>*/
/*                                                     <i class="icofont icofont-star text-info"></i>*/
/*                                                 </div>*/
/*                                             </td>*/
/*                                             <td><a href="http://html.phoenixcoded.net/flatable/default/read-mail.html" class="email-name">Sara Soudein</a></td>*/
/*                                             <td><a href="http://html.phoenixcoded.net/flatable/default/read-mail.html" class="email-name">SVG new updates comes for you</a></td>*/
/*                                             <td class="email-attch"><a href="email-inbox.html#"><i class="icofont icofont-clip"></i></a></td>*/
/*                                             <td class="email-time">00:05 AM</td>*/
/*                                         </tr>*/
/*                                         <tr class="unread">*/
/*                                             <td>*/
/*                                                 <div class="check-star">*/
/*                                                     <div class="checkbox-fade fade-in-primary checkbox">*/
/*                                                         <label>*/
/*                                                             <input type="checkbox" value="">*/
/*                                                             <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>*/
/*                                                         </label>*/
/*                                                     </div>*/
/*                                                     <i class="icofont icofont-star text-inverse"></i>*/
/*                                                 </div>*/
/*                                             </td>*/
/*                                             <td><a href="http://html.phoenixcoded.net/flatable/default/read-mail.html" class="email-name">Rinky Behl</a></td>*/
/*                                             <td><a href="http://html.phoenixcoded.net/flatable/default/read-mail.html" class="email-name">Photoshop updates are available</a></td>*/
/*                                             <td class="email-attch"><a href="email-inbox.html#"><i class="icofont icofont-clip"></i></a></td>*/
/*                                             <td class="email-time">10:01 AM</td>*/
/*                                         </tr>*/
/*                                         <tr class="read">*/
/*                                             <td>*/
/*                                                 <div class="check-star">*/
/*                                                     <div class="checkbox-fade fade-in-primary checkbox">*/
/*                                                         <label>*/
/*                                                             <input type="checkbox" value="">*/
/*                                                             <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>*/
/*                                                         </label>*/
/*                                                     </div>*/
/*                                                     <i class="icofont icofont-star text-primary"></i>*/
/*                                                 </div>*/
/*                                             </td>*/
/*                                             <td><a href="http://html.phoenixcoded.net/flatable/default/read-mail.html" class="email-name">Harry John</a></td>*/
/*                                             <td><a href="http://html.phoenixcoded.net/flatable/default/read-mail.html" class="email-name">New upcoming data available</a></td>*/
/*                                             <td class="email-attch"><a href="email-inbox.html#"><i class="icofont icofont-clip"></i></a></td>*/
/*                                             <td class="email-time">11:01 AM</td>*/
/*                                         </tr>*/
/*                                         <tr class="read">*/
/*                                             <td>*/
/*                                                 <div class="check-star">*/
/*                                                     <div class="checkbox-fade fade-in-primary checkbox">*/
/*                                                         <label>*/
/*                                                             <input type="checkbox" value="">*/
/*                                                             <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>*/
/*                                                         </label>*/
/*                                                     </div>*/
/*                                                     <i class="icofont icofont-star text-inverse"></i>*/
/*                                                 </div>*/
/*                                             </td>*/
/*                                             <td><a href="http://html.phoenixcoded.net/flatable/default/read-mail.html" class="email-name">Hanry Joseph</a></td>*/
/*                                             <td><a href="http://html.phoenixcoded.net/flatable/default/read-mail.html" class="email-name">SCSS current working for new updates</a></td>*/
/*                                             <td class="email-attch"><a href="email-inbox.html#"><i class="icofont icofont-clip"></i></a></td>*/
/*                                             <td class="email-time">12:01 PM</td>*/
/*                                         </tr>*/
/*                                         <tr class="read">*/
/*                                             <td>*/
/*                                                 <div class="check-star">*/
/*                                                     <div class="checkbox-fade fade-in-primary checkbox">*/
/*                                                         <label>*/
/*                                                             <input type="checkbox" value="">*/
/*                                                             <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>*/
/*                                                         </label>*/
/*                                                     </div>*/
/*                                                     <i class="icofont icofont-star text-primary"></i>*/
/*                                                 </div>*/
/*                                             </td>*/
/*                                             <td><a href="http://html.phoenixcoded.net/flatable/default/read-mail.html" class="email-name">Liu Koi Yan</a></td>*/
/*                                             <td><a href="http://html.phoenixcoded.net/flatable/default/read-mail.html" class="email-name">Charts waiting for you</a></td>*/
/*                                             <td class="email-attch"><a href="email-inbox.html#"><i class="icofont icofont-clip"></i></a></td>*/
/*                                             <td class="email-time">07:15 AM</td>*/
/*                                         </tr>*/
/*                                         <tr class="unread">*/
/*                                             <td>*/
/*                                                 <div class="check-star">*/
/*                                                     <div class="checkbox-fade fade-in-primary checkbox">*/
/*                                                         <label>*/
/*                                                             <input type="checkbox" value="">*/
/*                                                             <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>*/
/*                                                         </label>*/
/*                                                     </div>*/
/*                                                     <i class="icofont icofont-star text-warning"></i>*/
/*                                                 </div>*/
/*                                             </td>*/
/*                                             <td><a href="http://html.phoenixcoded.net/flatable/default/read-mail.html" class="email-name">Google Inc</a></td>*/
/*                                             <td><a href="http://html.phoenixcoded.net/flatable/default/read-mail.html" class="email-name">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>*/
/*                                             <td class="email-attch"><a href="email-inbox.html#"><i class="icofont icofont-clip"></i></a></td>*/
/*                                             <td class="email-time">08:01 AM</td>*/
/*                                         </tr>*/
/*                                         <tr class="unread">*/
/*                                             <td>*/
/*                                                 <div class="check-star">*/
/*                                                     <div class="checkbox-fade fade-in-primary checkbox">*/
/*                                                         <label>*/
/*                                                             <input type="checkbox" value="">*/
/*                                                             <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>*/
/*                                                         </label>*/
/*                                                     </div>*/
/*                                                     <i class="icofont icofont-star text-primary"></i>*/
/*                                                 </div>*/
/*                                             </td>*/
/*                                             <td><a href="http://html.phoenixcoded.net/flatable/default/read-mail.html" class="email-name">John Doe</a></td>*/
/*                                             <td><a href="http://html.phoenixcoded.net/flatable/default/read-mail.html" class="email-name">Coming Up Next Week</a></td>*/
/*                                             <td class="email-attch"><a href="email-inbox.html#"><i class="icofont icofont-clip"></i></a></td>*/
/*                                             <td class="email-time">13:02 PM</td>*/
/*                                         </tr>*/
/*                                         <tr class="unread">*/
/*                                             <td>*/
/*                                                 <div class="check-star">*/
/*                                                     <div class="checkbox-fade fade-in-primary checkbox">*/
/*                                                         <label>*/
/*                                                             <input type="checkbox" value="">*/
/*                                                             <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>*/
/*                                                         </label>*/
/*                                                     </div>*/
/*                                                     <i class="icofont icofont-star text-info"></i>*/
/*                                                 </div>*/
/*                                             </td>*/
/*                                             <td><a href="http://html.phoenixcoded.net/flatable/default/read-mail.html" class="email-name">Sara Soudein</a></td>*/
/*                                             <td><a href="http://html.phoenixcoded.net/flatable/default/read-mail.html" class="email-name">SVG new updates comes for you</a></td>*/
/*                                             <td class="email-attch"><a href="email-inbox.html#"><i class="icofont icofont-clip"></i></a></td>*/
/*                                             <td class="email-time">00:05 AM</td>*/
/*                                         </tr>*/
/*                                         <tr class="unread">*/
/*                                             <td>*/
/*                                                 <div class="check-star">*/
/*                                                     <div class="checkbox-fade fade-in-primary checkbox">*/
/*                                                         <label>*/
/*                                                             <input type="checkbox" value="">*/
/*                                                             <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>*/
/*                                                         </label>*/
/*                                                     </div>*/
/*                                                     <i class="icofont icofont-star text-inverse"></i>*/
/*                                                 </div>*/
/*                                             </td>*/
/*                                             <td><a href="http://html.phoenixcoded.net/flatable/default/read-mail.html" class="email-name">Rinky Behl</a></td>*/
/*                                             <td><a href="http://html.phoenixcoded.net/flatable/default/read-mail.html" class="email-name">Photoshop updates are available</a></td>*/
/*                                             <td class="email-attch"><a href="email-inbox.html#"><i class="icofont icofont-clip"></i></a></td>*/
/*                                             <td class="email-time">10:01 AM</td>*/
/*                                         </tr>*/
/*                                         <tr class="read">*/
/*                                             <td>*/
/*                                                 <div class="check-star">*/
/*                                                     <div class="checkbox-fade fade-in-primary checkbox">*/
/*                                                         <label>*/
/*                                                             <input type="checkbox" value="">*/
/*                                                             <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>*/
/*                                                         </label>*/
/*                                                     </div>*/
/*                                                     <i class="icofont icofont-star text-primary"></i>*/
/*                                                 </div>*/
/*                                             </td>*/
/*                                             <td><a href="http://html.phoenixcoded.net/flatable/default/read-mail.html" class="email-name">Harry John</a></td>*/
/*                                             <td><a href="http://html.phoenixcoded.net/flatable/default/read-mail.html" class="email-name">New upcoming data available</a></td>*/
/*                                             <td class="email-attch"><a href="email-inbox.html#"><i class="icofont icofont-clip"></i></a></td>*/
/*                                             <td class="email-time">11:01 AM</td>*/
/*                                         </tr>*/
/*                                         <tr class="read">*/
/*                                             <td>*/
/*                                                 <div class="check-star">*/
/*                                                     <div class="checkbox-fade fade-in-primary checkbox">*/
/*                                                         <label>*/
/*                                                             <input type="checkbox" value="">*/
/*                                                             <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>*/
/*                                                         </label>*/
/*                                                     </div>*/
/*                                                     <i class="icofont icofont-star text-inverse"></i>*/
/*                                                 </div>*/
/*                                             </td>*/
/*                                             <td><a href="http://html.phoenixcoded.net/flatable/default/read-mail.html" class="email-name">Hanry Joseph</a></td>*/
/*                                             <td><a href="http://html.phoenixcoded.net/flatable/default/read-mail.html" class="email-name">SCSS current working for new updates</a></td>*/
/*                                             <td class="email-attch"><a href="email-inbox.html#"><i class="icofont icofont-clip"></i></a></td>*/
/*                                             <td class="email-time">12:01 PM</td>*/
/*                                         </tr>*/
/*                                         <tr class="read">*/
/*                                             <td>*/
/*                                                 <div class="check-star">*/
/*                                                     <div class="checkbox-fade fade-in-primary checkbox">*/
/*                                                         <label>*/
/*                                                             <input type="checkbox" value="">*/
/*                                                             <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>*/
/*                                                         </label>*/
/*                                                     </div>*/
/*                                                     <i class="icofont icofont-star text-primary"></i>*/
/*                                                 </div>*/
/*                                             </td>*/
/*                                             <td><a href="http://html.phoenixcoded.net/flatable/default/read-mail.html" class="email-name">Liu Koi Yan</a></td>*/
/*                                             <td><a href="http://html.phoenixcoded.net/flatable/default/read-mail.html" class="email-name">Charts waiting for you</a></td>*/
/*                                             <td class="email-attch"><a href="email-inbox.html#"><i class="icofont icofont-clip"></i></a></td>*/
/*                                             <td class="email-time">07:15 AM</td>*/
/*                                         </tr>*/
/*                                     </table> -->*/
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
