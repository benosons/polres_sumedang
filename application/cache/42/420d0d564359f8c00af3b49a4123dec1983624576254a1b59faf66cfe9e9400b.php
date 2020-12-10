<?php

/* admin/users/profile.html */
class __TwigTemplate_0711373bca923b714badc3f7dd34685d8d50d2aae3c522ed931d53de6fb1d88f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/users/profile.html", 1);
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
            <h4>User Profile</h4>
        </div>
        <div class=\"page-header-breadcrumb\">
            <ul class=\"breadcrumb-title\">
                <li class=\"breadcrumb-item\">
                    <a href=\"index.html\">
                        <i class=\"icofont icofont-home\"></i>
                    </a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"user-profile.html#!\">User Profile</a>
                </li>
                <li class=\"breadcrumb-item\"><a href=\"user-profile.html#!\">User Profile</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Page-header end -->
    <!-- Page-body start -->
    <div class=\"page-body\">
        <!--profile cover start-->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"cover-profile\">
                    <div class=\"profile-bg-img\">
                        <img class=\"profile-bg-img img-fluid\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/user-profile/bg-img1.jpg\" alt=\"bg-img\">
                        <div class=\"card-block user-info\">
                            <div class=\"col-md-12\">
                                <div class=\"media-left\">
                                    <a href=\"user-profile.html#\" class=\"profile-image\">
                                        <img class=\"user-img img-circle\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/user.png\" alt=\"user-img\">
                                    </a>
                                </div>
                                <div class=\"media-body row\">
                                    <div class=\"col-lg-12\">
                                        <div class=\"user-title\">
                                            <h2>";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
        echo "</h2>
                                            <span class=\"text-white\">Web designer</span>
                                        </div>
                                    </div>
                                    <div>
                                        <!-- <div class=\"pull-right cover-btn\">
                                            <button type=\"button\" class=\"btn btn-primary m-r-10\"><i class=\"icofont icofont-plus\"></i> Follow</button>
                                            <button type=\"button\" class=\"btn btn-primary\"><i class=\"icofont icofont-ui-messaging\"></i> Message</button>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--profile cover end-->
        <div class=\"row\">
            <div class=\"col-lg-12\">

                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h5 class=\"card-header-text\">About Me</h5>
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
                                                    <div class=\"col-lg-12 col-xl-6\">
                                                        <table class=\"table m-0\">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope=\"row\">Full Name</th>
                                                                    <td>Josephine Villa</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope=\"row\">Gender</th>
                                                                    <td>Female</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope=\"row\">Birth Date</th>
                                                                    <td>October 25th, 1990</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope=\"row\">Marital Status</th>
                                                                    <td>Single</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope=\"row\">Location</th>
                                                                    <td>New York, USA</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- end of table col-lg-6 -->
                                                    <div class=\"col-lg-12 col-xl-6\">
                                                        <table class=\"table\">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope=\"row\">Email</th>
                                                                    <td><a href=\"user-profile.html#!\">Demo@phenix.com</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope=\"row\">Mobile Number</th>
                                                                    <td>(0123) - 4567891</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope=\"row\">Twitter</th>
                                                                    <td>@phoenixcoded</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope=\"row\">Skype</th>
                                                                    <td>phoenixcoded.demo</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope=\"row\">Website</th>
                                                                    <td><a href=\"user-profile.html#!\">www.demo.com</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
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
                                <div class=\"edit-info\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-12\">
                                            <div class=\"general-info\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-6\">
                                                        <table class=\"table\">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class=\"input-group\">
                                                                            <span class=\"input-group-addon\"><i class=\"icofont icofont-user\"></i></span>
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"Full Name\">
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class=\"form-radio\">
                                                                            <div class=\"group-add-on\">
                                                                                <div class=\"radio radiofill radio-inline\">
                                                                                    <label>
                                                                                        <input type=\"radio\" name=\"radio\" checked><i class=\"helper\"></i> Male
                                                                                    </label>
                                                                                </div>
                                                                                <div class=\"radio radiofill radio-inline\">
                                                                                    <label>
                                                                                        <input type=\"radio\" name=\"radio\"><i class=\"helper\"></i> Female
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input id=\"dropper-default\" class=\"form-control\" type=\"text\" placeholder=\"Select Your Birth Date\" />
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <select id=\"hello-single\" class=\"form-control\">
                                                                            <option value=\"\">---- Marital Status ----</option>
                                                                            <option value=\"married\">Married</option>
                                                                            <option value=\"unmarried\">Unmarried</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class=\"input-group\">
                                                                            <span class=\"input-group-addon\"><i class=\"icofont icofont-location-pin\"></i></span>
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"Address\">
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- end of table col-lg-6 -->
                                                    <div class=\"col-lg-6\">
                                                        <table class=\"table\">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class=\"input-group\">
                                                                            <span class=\"input-group-addon\"><i class=\"icofont icofont-mobile-phone\"></i></span>
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"Mobile Number\">
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class=\"input-group\">
                                                                            <span class=\"input-group-addon\"><i class=\"icofont icofont-social-twitter\"></i></span>
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"Twitter Id\">
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <td>
                                                                        <div class=\"input-group\">
                                                                            <span class=\"input-group-addon\" id=\"basic-addon1\">@</span>
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"Twitter Id\">
                                                                        </div>
                                                                    </td>
                                                                </tr> -->
                                                                <tr>
                                                                    <td>
                                                                        <div class=\"input-group\">
                                                                            <span class=\"input-group-addon\"><i class=\"icofont icofont-social-skype\"></i></span>
                                                                            <input type=\"email\" class=\"form-control\" placeholder=\"Skype Id\">
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class=\"input-group\">
                                                                            <span class=\"input-group-addon\"><i class=\"icofont icofont-earth\"></i></span>
                                                                            <input type=\"text\" class=\"form-control\" placeholder=\"website\">
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- end of table col-lg-6 -->
                                                </div>
                                                <!-- end of row -->
                                                <div class=\"text-center\">
                                                    <a href=\"user-profile.html#!\" class=\"btn btn-primary waves-effect waves-light m-r-20\">Save</a>
                                                    <a href=\"user-profile.html#!\" id=\"edit-cancel\" class=\"btn btn-default waves-effect\">Cancel</a>
                                                </div>
                                            </div>
                                            <!-- end of edit info -->
                                        </div>
                                        <!-- end of col-lg-12 -->
                                    </div>
                                    <!-- end of row -->
                                </div>
                                <!-- end of edit-info -->
                            </div>
                            <!-- end of card-block -->
                        </div>

            </div>
        </div>
    </div>
    <!-- Page-body end -->
</div>";
    }

    public function getTemplateName()
    {
        return "admin/users/profile.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 42,  69 => 36,  61 => 31,  30 => 2,  11 => 1,);
    }
}
/* {% extends "admin/layout.html" %} {% block content %}*/
/* */
/* <div class="page-wrapper">*/
/*     <!-- Page-header start -->*/
/*     <div class="page-header">*/
/*         <div class="page-header-title">*/
/*             <h4>User Profile</h4>*/
/*         </div>*/
/*         <div class="page-header-breadcrumb">*/
/*             <ul class="breadcrumb-title">*/
/*                 <li class="breadcrumb-item">*/
/*                     <a href="index.html">*/
/*                         <i class="icofont icofont-home"></i>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="breadcrumb-item"><a href="user-profile.html#!">User Profile</a>*/
/*                 </li>*/
/*                 <li class="breadcrumb-item"><a href="user-profile.html#!">User Profile</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <!-- Page-header end -->*/
/*     <!-- Page-body start -->*/
/*     <div class="page-body">*/
/*         <!--profile cover start-->*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <div class="cover-profile">*/
/*                     <div class="profile-bg-img">*/
/*                         <img class="profile-bg-img img-fluid" src="{{baseURL}}/assets/admin/images/user-profile/bg-img1.jpg" alt="bg-img">*/
/*                         <div class="card-block user-info">*/
/*                             <div class="col-md-12">*/
/*                                 <div class="media-left">*/
/*                                     <a href="user-profile.html#" class="profile-image">*/
/*                                         <img class="user-img img-circle" src="{{baseURL}}/assets/admin/images/user.png" alt="user-img">*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="media-body row">*/
/*                                     <div class="col-lg-12">*/
/*                                         <div class="user-title">*/
/*                                             <h2>{{username}}</h2>*/
/*                                             <span class="text-white">Web designer</span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div>*/
/*                                         <!-- <div class="pull-right cover-btn">*/
/*                                             <button type="button" class="btn btn-primary m-r-10"><i class="icofont icofont-plus"></i> Follow</button>*/
/*                                             <button type="button" class="btn btn-primary"><i class="icofont icofont-ui-messaging"></i> Message</button>*/
/*                                         </div> -->*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!--profile cover end-->*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/* */
/*                         <div class="card">*/
/*                             <div class="card-header">*/
/*                                 <h5 class="card-header-text">About Me</h5>*/
/*                                 <button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">*/
/*                                     <i class="icofont icofont-edit"></i>*/
/*                                 </button>*/
/*                             </div>*/
/*                             <div class="card-block">*/
/*                                 <div class="view-info">*/
/*                                     <div class="row">*/
/*                                         <div class="col-lg-12">*/
/*                                             <div class="general-info">*/
/*                                                 <div class="row">*/
/*                                                     <div class="col-lg-12 col-xl-6">*/
/*                                                         <table class="table m-0">*/
/*                                                             <tbody>*/
/*                                                                 <tr>*/
/*                                                                     <th scope="row">Full Name</th>*/
/*                                                                     <td>Josephine Villa</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr>*/
/*                                                                     <th scope="row">Gender</th>*/
/*                                                                     <td>Female</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr>*/
/*                                                                     <th scope="row">Birth Date</th>*/
/*                                                                     <td>October 25th, 1990</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr>*/
/*                                                                     <th scope="row">Marital Status</th>*/
/*                                                                     <td>Single</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr>*/
/*                                                                     <th scope="row">Location</th>*/
/*                                                                     <td>New York, USA</td>*/
/*                                                                 </tr>*/
/*                                                             </tbody>*/
/*                                                         </table>*/
/*                                                     </div>*/
/*                                                     <!-- end of table col-lg-6 -->*/
/*                                                     <div class="col-lg-12 col-xl-6">*/
/*                                                         <table class="table">*/
/*                                                             <tbody>*/
/*                                                                 <tr>*/
/*                                                                     <th scope="row">Email</th>*/
/*                                                                     <td><a href="user-profile.html#!">Demo@phenix.com</a></td>*/
/*                                                                 </tr>*/
/*                                                                 <tr>*/
/*                                                                     <th scope="row">Mobile Number</th>*/
/*                                                                     <td>(0123) - 4567891</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr>*/
/*                                                                     <th scope="row">Twitter</th>*/
/*                                                                     <td>@phoenixcoded</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr>*/
/*                                                                     <th scope="row">Skype</th>*/
/*                                                                     <td>phoenixcoded.demo</td>*/
/*                                                                 </tr>*/
/*                                                                 <tr>*/
/*                                                                     <th scope="row">Website</th>*/
/*                                                                     <td><a href="user-profile.html#!">www.demo.com</a></td>*/
/*                                                                 </tr>*/
/*                                                             </tbody>*/
/*                                                         </table>*/
/*                                                     </div>*/
/*                                                     <!-- end of table col-lg-6 -->*/
/*                                                 </div>*/
/*                                                 <!-- end of row -->*/
/*                                             </div>*/
/*                                             <!-- end of general info -->*/
/*                                         </div>*/
/*                                         <!-- end of col-lg-12 -->*/
/*                                     </div>*/
/*                                     <!-- end of row -->*/
/*                                 </div>*/
/*                                 <!-- end of view-info -->*/
/*                                 <div class="edit-info">*/
/*                                     <div class="row">*/
/*                                         <div class="col-lg-12">*/
/*                                             <div class="general-info">*/
/*                                                 <div class="row">*/
/*                                                     <div class="col-lg-6">*/
/*                                                         <table class="table">*/
/*                                                             <tbody>*/
/*                                                                 <tr>*/
/*                                                                     <td>*/
/*                                                                         <div class="input-group">*/
/*                                                                             <span class="input-group-addon"><i class="icofont icofont-user"></i></span>*/
/*                                                                             <input type="text" class="form-control" placeholder="Full Name">*/
/*                                                                         </div>*/
/*                                                                     </td>*/
/*                                                                 </tr>*/
/*                                                                 <tr>*/
/*                                                                     <td>*/
/*                                                                         <div class="form-radio">*/
/*                                                                             <div class="group-add-on">*/
/*                                                                                 <div class="radio radiofill radio-inline">*/
/*                                                                                     <label>*/
/*                                                                                         <input type="radio" name="radio" checked><i class="helper"></i> Male*/
/*                                                                                     </label>*/
/*                                                                                 </div>*/
/*                                                                                 <div class="radio radiofill radio-inline">*/
/*                                                                                     <label>*/
/*                                                                                         <input type="radio" name="radio"><i class="helper"></i> Female*/
/*                                                                                     </label>*/
/*                                                                                 </div>*/
/*                                                                             </div>*/
/*                                                                         </div>*/
/*                                                                     </td>*/
/*                                                                 </tr>*/
/*                                                                 <tr>*/
/*                                                                     <td>*/
/*                                                                         <input id="dropper-default" class="form-control" type="text" placeholder="Select Your Birth Date" />*/
/*                                                                     </td>*/
/*                                                                 </tr>*/
/*                                                                 <tr>*/
/*                                                                     <td>*/
/*                                                                         <select id="hello-single" class="form-control">*/
/*                                                                             <option value="">---- Marital Status ----</option>*/
/*                                                                             <option value="married">Married</option>*/
/*                                                                             <option value="unmarried">Unmarried</option>*/
/*                                                                         </select>*/
/*                                                                     </td>*/
/*                                                                 </tr>*/
/*                                                                 <tr>*/
/*                                                                     <td>*/
/*                                                                         <div class="input-group">*/
/*                                                                             <span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>*/
/*                                                                             <input type="text" class="form-control" placeholder="Address">*/
/*                                                                         </div>*/
/*                                                                     </td>*/
/*                                                                 </tr>*/
/*                                                             </tbody>*/
/*                                                         </table>*/
/*                                                     </div>*/
/*                                                     <!-- end of table col-lg-6 -->*/
/*                                                     <div class="col-lg-6">*/
/*                                                         <table class="table">*/
/*                                                             <tbody>*/
/*                                                                 <tr>*/
/*                                                                     <td>*/
/*                                                                         <div class="input-group">*/
/*                                                                             <span class="input-group-addon"><i class="icofont icofont-mobile-phone"></i></span>*/
/*                                                                             <input type="text" class="form-control" placeholder="Mobile Number">*/
/*                                                                         </div>*/
/*                                                                     </td>*/
/*                                                                 </tr>*/
/*                                                                 <tr>*/
/*                                                                     <td>*/
/*                                                                         <div class="input-group">*/
/*                                                                             <span class="input-group-addon"><i class="icofont icofont-social-twitter"></i></span>*/
/*                                                                             <input type="text" class="form-control" placeholder="Twitter Id">*/
/*                                                                         </div>*/
/*                                                                     </td>*/
/*                                                                 </tr>*/
/*                                                                 <!-- <tr>*/
/*                                                                     <td>*/
/*                                                                         <div class="input-group">*/
/*                                                                             <span class="input-group-addon" id="basic-addon1">@</span>*/
/*                                                                             <input type="text" class="form-control" placeholder="Twitter Id">*/
/*                                                                         </div>*/
/*                                                                     </td>*/
/*                                                                 </tr> -->*/
/*                                                                 <tr>*/
/*                                                                     <td>*/
/*                                                                         <div class="input-group">*/
/*                                                                             <span class="input-group-addon"><i class="icofont icofont-social-skype"></i></span>*/
/*                                                                             <input type="email" class="form-control" placeholder="Skype Id">*/
/*                                                                         </div>*/
/*                                                                     </td>*/
/*                                                                 </tr>*/
/*                                                                 <tr>*/
/*                                                                     <td>*/
/*                                                                         <div class="input-group">*/
/*                                                                             <span class="input-group-addon"><i class="icofont icofont-earth"></i></span>*/
/*                                                                             <input type="text" class="form-control" placeholder="website">*/
/*                                                                         </div>*/
/*                                                                     </td>*/
/*                                                                 </tr>*/
/*                                                             </tbody>*/
/*                                                         </table>*/
/*                                                     </div>*/
/*                                                     <!-- end of table col-lg-6 -->*/
/*                                                 </div>*/
/*                                                 <!-- end of row -->*/
/*                                                 <div class="text-center">*/
/*                                                     <a href="user-profile.html#!" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>*/
/*                                                     <a href="user-profile.html#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <!-- end of edit info -->*/
/*                                         </div>*/
/*                                         <!-- end of col-lg-12 -->*/
/*                                     </div>*/
/*                                     <!-- end of row -->*/
/*                                 </div>*/
/*                                 <!-- end of edit-info -->*/
/*                             </div>*/
/*                             <!-- end of card-block -->*/
/*                         </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!-- Page-body end -->*/
/* </div>*/
/* {% endblock %}*/
/* */
