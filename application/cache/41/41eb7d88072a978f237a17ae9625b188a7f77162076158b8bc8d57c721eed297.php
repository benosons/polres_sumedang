<?php

/* admin/sidebar.html */
class __TwigTemplate_65d39d51154dedace2a81a6ef745e3c2053b05338d4b8a56facc6d005c82f314 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav class=\"pcoded-navbar\" pcoded-header-position=\"fixed\" style=\"position: fixed;\">
    <div class=\"sidebar_toggle\"><a href=\"index.html#\"><i class=\"icon-close icons\"></i></a></div>
    <div class=\"pcoded-inner-navbar main-menu\">
        <div class=\"\">
            <div class=\"main-menu-header\" style=\"background-color: #fff;\">
                <img class=\"\" src=\"https://www.polri.go.id/assets/image/kop/all.gif\" alt=\"User-Profile-Image\" style=\"width: 100%;\">
            </div>
        </div>
        <!-- <div class=\"pcoded-navigatio-lavel\" data-i18n=\"nav.category.navigation\" menu-title-theme=\"theme5\">Navigation</div> -->
        <ul class=\"pcoded-item pcoded-left-item\">
            <li id=\"menu-dash\">
                <a href=\"dashboard\">
                    <span class=\"pcoded-micon\"><i class=\"ti-home\"></i></span>
                    <span class=\"pcoded-mtext\" data-i18n=\"nav.dash.main\">Dashboard</span>
                    <span class=\"pcoded-mcaret\"></span>
                </a>
            </li>";
        // line 18
        if (((isset($context["role"]) ? $context["role"] : null) == "100")) {
            // line 19
            echo "            <!-- <li class=\"pcoded-hasmenu\">
                <a href=\"javascript:void(0)\" data-i18n=\"nav.form-components.main\">
                    <span class=\"pcoded-micon\"><i class=\"ti-layers-alt\"></i></span>
                    <span class=\"pcoded-mtext\">Profile</span>
                    <span class=\"pcoded-mcaret\"></span>
                </a>
                <ul class=\"pcoded-submenu\">
                    <li class=\" \">
                        <a href=\"form-elements-component.html\" data-i18n=\"nav.form-components.form-components\">
                            <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                            <span class=\"pcoded-mtext\">Form Components</span>
                            <span class=\"pcoded-mcaret\"></span>
                        </a>
                    </li>
                    <li class=\" \">
                        <a href=\"form-elements-add-on.html\" data-i18n=\"nav.form-components.form-elements-add-on\">
                            <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                            <span class=\"pcoded-mtext\">Form-Elements-Add-On</span>
                            <span class=\"pcoded-mcaret\"></span>
                        </a>
                    </li>
                    <li class=\" \">
                        <a href=\"form-elements-advance.html\" data-i18n=\"nav.form-components.form-elements-advance\">
                            <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                            <span class=\"pcoded-mtext\">Form-Elements-Advance</span>
                            <span class=\"pcoded-mcaret\"></span>
                        </a>
                    </li>
                    <li class=\" \">
                        <a href=\"form-validation.html\" data-i18n=\"nav.form-components.form-validation\">
                            <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                            <span class=\"pcoded-mtext\">Form Validation</span>
                            <span class=\"pcoded-mcaret\"></span>
                        </a>
                    </li>

                </ul>
            </li> -->
            <li class=\"\" id=\"menu-satuan\">
                <a href=\"satuan\" data-i18n=\"nav.form-components.main\">
                    <span class=\"pcoded-micon\"><i class=\"ti-bookmark-alt\"></i></span>
                    <span class=\"pcoded-mtext\">Satuan Fungsi</span>
                    <!-- <span class=\"pcoded-mcaret\"></span> -->
                </a>
                <!-- <ul class=\"pcoded-submenu\">
                    <li class=\" \">
                        <a href=\"form-elements-component.html\" data-i18n=\"nav.form-components.form-components\">
                            <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                            <span class=\"pcoded-mtext\">Form Components</span>
                            <span class=\"pcoded-mcaret\"></span>
                        </a>
                    </li>
                    <li class=\" \">
                        <a href=\"form-elements-add-on.html\" data-i18n=\"nav.form-components.form-elements-add-on\">
                            <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                            <span class=\"pcoded-mtext\">Form-Elements-Add-On</span>
                            <span class=\"pcoded-mcaret\"></span>
                        </a>
                    </li>
                    <li class=\" \">
                        <a href=\"form-elements-advance.html\" data-i18n=\"nav.form-components.form-elements-advance\">
                            <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                            <span class=\"pcoded-mtext\">Form-Elements-Advance</span>
                            <span class=\"pcoded-mcaret\"></span>
                        </a>
                    </li>
                    <li class=\" \">
                        <a href=\"form-validation.html\" data-i18n=\"nav.form-components.form-validation\">
                            <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                            <span class=\"pcoded-mtext\">Form Validation</span>
                            <span class=\"pcoded-mcaret\"></span>
                        </a>
                    </li>

                </ul> -->
            </li>
            <li class=\"pcoded-hasmenu\" id=\"menu-pelayanan\">
                <a href=\"#\" data-i18n=\"nav.widget.main\">
                    <span class=\"pcoded-micon\"><i class=\"ti-view-grid\"></i></span>
                    <span class=\"pcoded-mtext\">Pelayanan</span>
                    <span class=\"pcoded-mcaret\"></span>
                </a>
                <ul class=\"pcoded-submenu\">
                    <li class=\" \">
                        <a href=\"listpelayanan\" data-i18n=\"nav.form-components.form-components\">
                            <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                            <span class=\"pcoded-mtext\">Konten</span>
                            <span class=\"pcoded-mcaret\"></span>
                        </a>
                    </li>
                </ul>
            </li>";
        }
        // line 112
        echo "            <li class=\"pcoded-hasmenu\" id=\"menu-pengaduan\">
                <a href=\"#\" data-i18n=\"nav.widget.main\">
                    <span class=\"pcoded-micon\"><i class=\"ti-comments\"></i></span>
                    <span class=\"pcoded-mtext\">Pengaduan</span>
                    <span class=\"pcoded-badge label label-danger\">100+</span>
                    <span class=\"pcoded-mcaret\"></span>
                </a>
                <ul class=\"pcoded-submenu\">";
        // line 120
        if (((isset($context["role"]) ? $context["role"] : null) == 200)) {
            // line 121
            echo "                  <li class=\" \">
                    <a href=\"datapengaduan\" data-i18n=\"nav.form-components.form-elements-add-on\">
                      <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                      <span class=\"pcoded-mtext\">Users</span>
                      <span class=\"pcoded-mcaret\"></span>
                    </a>
                  </li>";
        } else {
            // line 129
            echo "                    <li class=\" \">
                        <a href=\"datapengaduan\" data-i18n=\"nav.form-components.form-components\">
                            <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                            <span class=\"pcoded-mtext\">Sat Lantas</span>
                            <span class=\"pcoded-mcaret\"></span>
                        </a>
                    </li>
                    <li class=\" \">
                        <a href=\"form-elements-advance.html\" data-i18n=\"nav.form-components.form-elements-advance\">
                            <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                            <span class=\"pcoded-mtext\">Form-Elements-Advance</span>
                            <span class=\"pcoded-mcaret\"></span>
                        </a>
                    </li>
                    <li class=\" \">
                        <a href=\"form-validation.html\" data-i18n=\"nav.form-components.form-validation\">
                            <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                            <span class=\"pcoded-mtext\">Form Validation</span>
                            <span class=\"pcoded-mcaret\"></span>
                        </a>
                    </li>";
        }
        // line 151
        echo "                </ul>
            </li>";
        // line 153
        if (((isset($context["role"]) ? $context["role"] : null) != 200)) {
            // line 154
            echo "            <li class=\"pcoded-hasmenu\" id=\"menu-informasi\">
                <a href=\"#\" data-i18n=\"nav.widget.main\">
                    <span class=\"pcoded-micon\"><i class=\"ti-info-alt\"></i></span>
                    <span class=\"pcoded-mtext\">Informasi</span>
                    <span class=\"pcoded-mcaret\"></span>
                </a>
                <ul class=\"pcoded-submenu\">
                    <li class=\" \" id=\"inputberita\">
                        <a href=\"inputberita\" data-i18n=\"nav.form-components.form-components\">
                            <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                            <span class=\"pcoded-mtext\">Berita</span>
                            <span class=\"pcoded-mcaret\"></span>
                        </a>
                    </li>
                    <li class=\" \" id=\"inputkegiatan\">
                        <a href=\"inputkegiatan\" data-i18n=\"nav.form-components.form-elements-add-on\">
                            <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                            <span class=\"pcoded-mtext\">Kegiatan</span>
                            <span class=\"pcoded-mcaret\"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"\" id=\"menu-user\">
                <a href=\"#\" data-i18n=\"nav.widget.main\">
                    <span class=\"pcoded-micon\"><i class=\"ti-user\"></i></span>
                    <span class=\"pcoded-mtext\">User</span>
                </a>
            </li>
            <li class=\"pcoded-hasmenu\" id=\"menu-covid\">
                <a href=\"#\" data-i18n=\"nav.widget.main\">
                    <span class=\"pcoded-micon\"><i class=\"ti-world\"></i></span>
                    <span class=\"pcoded-mtext\">Giat Covid-19</span>
                    <span class=\"pcoded-mcaret\"></span>
                </a>
                <ul class=\"pcoded-submenu\">
                    <li class=\" \" id=\"beritacovid\">
                        <a href=\"beritacovid\" data-i18n=\"nav.form-components.form-components\">
                            <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                            <span class=\"pcoded-mtext\">Berita</span>
                            <span class=\"pcoded-mcaret\"></span>
                        </a>
                    </li>
                    <li class=\" \">
                        <a href=\"kegiatancovid\" data-i18n=\"nav.form-components.form-elements-add-on\">
                            <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                            <span class=\"pcoded-mtext\">Kegiatan</span>
                            <span class=\"pcoded-mcaret\"></span>
                        </a>
                    </li>
                </ul>
            </li>";
        }
        // line 207
        echo "        </ul>
    </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "admin/sidebar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 207,  181 => 154,  179 => 153,  176 => 151,  153 => 129,  144 => 121,  142 => 120,  133 => 112,  39 => 19,  37 => 18,  19 => 1,);
    }
}
/* <nav class="pcoded-navbar" pcoded-header-position="fixed" style="position: fixed;">*/
/*     <div class="sidebar_toggle"><a href="index.html#"><i class="icon-close icons"></i></a></div>*/
/*     <div class="pcoded-inner-navbar main-menu">*/
/*         <div class="">*/
/*             <div class="main-menu-header" style="background-color: #fff;">*/
/*                 <img class="" src="https://www.polri.go.id/assets/image/kop/all.gif" alt="User-Profile-Image" style="width: 100%;">*/
/*             </div>*/
/*         </div>*/
/*         <!-- <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5">Navigation</div> -->*/
/*         <ul class="pcoded-item pcoded-left-item">*/
/*             <li id="menu-dash">*/
/*                 <a href="dashboard">*/
/*                     <span class="pcoded-micon"><i class="ti-home"></i></span>*/
/*                     <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>*/
/*                     <span class="pcoded-mcaret"></span>*/
/*                 </a>*/
/*             </li>*/
/*             {% if role == '100'%}*/
/*             <!-- <li class="pcoded-hasmenu">*/
/*                 <a href="javascript:void(0)" data-i18n="nav.form-components.main">*/
/*                     <span class="pcoded-micon"><i class="ti-layers-alt"></i></span>*/
/*                     <span class="pcoded-mtext">Profile</span>*/
/*                     <span class="pcoded-mcaret"></span>*/
/*                 </a>*/
/*                 <ul class="pcoded-submenu">*/
/*                     <li class=" ">*/
/*                         <a href="form-elements-component.html" data-i18n="nav.form-components.form-components">*/
/*                             <span class="pcoded-micon"><i class="ti-angle-right"></i></span>*/
/*                             <span class="pcoded-mtext">Form Components</span>*/
/*                             <span class="pcoded-mcaret"></span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=" ">*/
/*                         <a href="form-elements-add-on.html" data-i18n="nav.form-components.form-elements-add-on">*/
/*                             <span class="pcoded-micon"><i class="ti-angle-right"></i></span>*/
/*                             <span class="pcoded-mtext">Form-Elements-Add-On</span>*/
/*                             <span class="pcoded-mcaret"></span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=" ">*/
/*                         <a href="form-elements-advance.html" data-i18n="nav.form-components.form-elements-advance">*/
/*                             <span class="pcoded-micon"><i class="ti-angle-right"></i></span>*/
/*                             <span class="pcoded-mtext">Form-Elements-Advance</span>*/
/*                             <span class="pcoded-mcaret"></span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=" ">*/
/*                         <a href="form-validation.html" data-i18n="nav.form-components.form-validation">*/
/*                             <span class="pcoded-micon"><i class="ti-angle-right"></i></span>*/
/*                             <span class="pcoded-mtext">Form Validation</span>*/
/*                             <span class="pcoded-mcaret"></span>*/
/*                         </a>*/
/*                     </li>*/
/* */
/*                 </ul>*/
/*             </li> -->*/
/*             <li class="" id="menu-satuan">*/
/*                 <a href="satuan" data-i18n="nav.form-components.main">*/
/*                     <span class="pcoded-micon"><i class="ti-bookmark-alt"></i></span>*/
/*                     <span class="pcoded-mtext">Satuan Fungsi</span>*/
/*                     <!-- <span class="pcoded-mcaret"></span> -->*/
/*                 </a>*/
/*                 <!-- <ul class="pcoded-submenu">*/
/*                     <li class=" ">*/
/*                         <a href="form-elements-component.html" data-i18n="nav.form-components.form-components">*/
/*                             <span class="pcoded-micon"><i class="ti-angle-right"></i></span>*/
/*                             <span class="pcoded-mtext">Form Components</span>*/
/*                             <span class="pcoded-mcaret"></span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=" ">*/
/*                         <a href="form-elements-add-on.html" data-i18n="nav.form-components.form-elements-add-on">*/
/*                             <span class="pcoded-micon"><i class="ti-angle-right"></i></span>*/
/*                             <span class="pcoded-mtext">Form-Elements-Add-On</span>*/
/*                             <span class="pcoded-mcaret"></span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=" ">*/
/*                         <a href="form-elements-advance.html" data-i18n="nav.form-components.form-elements-advance">*/
/*                             <span class="pcoded-micon"><i class="ti-angle-right"></i></span>*/
/*                             <span class="pcoded-mtext">Form-Elements-Advance</span>*/
/*                             <span class="pcoded-mcaret"></span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=" ">*/
/*                         <a href="form-validation.html" data-i18n="nav.form-components.form-validation">*/
/*                             <span class="pcoded-micon"><i class="ti-angle-right"></i></span>*/
/*                             <span class="pcoded-mtext">Form Validation</span>*/
/*                             <span class="pcoded-mcaret"></span>*/
/*                         </a>*/
/*                     </li>*/
/* */
/*                 </ul> -->*/
/*             </li>*/
/*             <li class="pcoded-hasmenu" id="menu-pelayanan">*/
/*                 <a href="#" data-i18n="nav.widget.main">*/
/*                     <span class="pcoded-micon"><i class="ti-view-grid"></i></span>*/
/*                     <span class="pcoded-mtext">Pelayanan</span>*/
/*                     <span class="pcoded-mcaret"></span>*/
/*                 </a>*/
/*                 <ul class="pcoded-submenu">*/
/*                     <li class=" ">*/
/*                         <a href="listpelayanan" data-i18n="nav.form-components.form-components">*/
/*                             <span class="pcoded-micon"><i class="ti-angle-right"></i></span>*/
/*                             <span class="pcoded-mtext">Konten</span>*/
/*                             <span class="pcoded-mcaret"></span>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/*             {% endif %}*/
/*             <li class="pcoded-hasmenu" id="menu-pengaduan">*/
/*                 <a href="#" data-i18n="nav.widget.main">*/
/*                     <span class="pcoded-micon"><i class="ti-comments"></i></span>*/
/*                     <span class="pcoded-mtext">Pengaduan</span>*/
/*                     <span class="pcoded-badge label label-danger">100+</span>*/
/*                     <span class="pcoded-mcaret"></span>*/
/*                 </a>*/
/*                 <ul class="pcoded-submenu">*/
/*                   {% if role == 200 %}*/
/*                   <li class=" ">*/
/*                     <a href="datapengaduan" data-i18n="nav.form-components.form-elements-add-on">*/
/*                       <span class="pcoded-micon"><i class="ti-angle-right"></i></span>*/
/*                       <span class="pcoded-mtext">Users</span>*/
/*                       <span class="pcoded-mcaret"></span>*/
/*                     </a>*/
/*                   </li>*/
/*                   {% else %}*/
/*                     <li class=" ">*/
/*                         <a href="datapengaduan" data-i18n="nav.form-components.form-components">*/
/*                             <span class="pcoded-micon"><i class="ti-angle-right"></i></span>*/
/*                             <span class="pcoded-mtext">Sat Lantas</span>*/
/*                             <span class="pcoded-mcaret"></span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=" ">*/
/*                         <a href="form-elements-advance.html" data-i18n="nav.form-components.form-elements-advance">*/
/*                             <span class="pcoded-micon"><i class="ti-angle-right"></i></span>*/
/*                             <span class="pcoded-mtext">Form-Elements-Advance</span>*/
/*                             <span class="pcoded-mcaret"></span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=" ">*/
/*                         <a href="form-validation.html" data-i18n="nav.form-components.form-validation">*/
/*                             <span class="pcoded-micon"><i class="ti-angle-right"></i></span>*/
/*                             <span class="pcoded-mtext">Form Validation</span>*/
/*                             <span class="pcoded-mcaret"></span>*/
/*                         </a>*/
/*                     </li>*/
/*                   {% endif %}*/
/*                 </ul>*/
/*             </li>*/
/*             {% if role != 200 %}*/
/*             <li class="pcoded-hasmenu" id="menu-informasi">*/
/*                 <a href="#" data-i18n="nav.widget.main">*/
/*                     <span class="pcoded-micon"><i class="ti-info-alt"></i></span>*/
/*                     <span class="pcoded-mtext">Informasi</span>*/
/*                     <span class="pcoded-mcaret"></span>*/
/*                 </a>*/
/*                 <ul class="pcoded-submenu">*/
/*                     <li class=" " id="inputberita">*/
/*                         <a href="inputberita" data-i18n="nav.form-components.form-components">*/
/*                             <span class="pcoded-micon"><i class="ti-angle-right"></i></span>*/
/*                             <span class="pcoded-mtext">Berita</span>*/
/*                             <span class="pcoded-mcaret"></span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=" " id="inputkegiatan">*/
/*                         <a href="inputkegiatan" data-i18n="nav.form-components.form-elements-add-on">*/
/*                             <span class="pcoded-micon"><i class="ti-angle-right"></i></span>*/
/*                             <span class="pcoded-mtext">Kegiatan</span>*/
/*                             <span class="pcoded-mcaret"></span>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li class="" id="menu-user">*/
/*                 <a href="#" data-i18n="nav.widget.main">*/
/*                     <span class="pcoded-micon"><i class="ti-user"></i></span>*/
/*                     <span class="pcoded-mtext">User</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li class="pcoded-hasmenu" id="menu-covid">*/
/*                 <a href="#" data-i18n="nav.widget.main">*/
/*                     <span class="pcoded-micon"><i class="ti-world"></i></span>*/
/*                     <span class="pcoded-mtext">Giat Covid-19</span>*/
/*                     <span class="pcoded-mcaret"></span>*/
/*                 </a>*/
/*                 <ul class="pcoded-submenu">*/
/*                     <li class=" " id="beritacovid">*/
/*                         <a href="beritacovid" data-i18n="nav.form-components.form-components">*/
/*                             <span class="pcoded-micon"><i class="ti-angle-right"></i></span>*/
/*                             <span class="pcoded-mtext">Berita</span>*/
/*                             <span class="pcoded-mcaret"></span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class=" ">*/
/*                         <a href="kegiatancovid" data-i18n="nav.form-components.form-elements-add-on">*/
/*                             <span class="pcoded-micon"><i class="ti-angle-right"></i></span>*/
/*                             <span class="pcoded-mtext">Kegiatan</span>*/
/*                             <span class="pcoded-mcaret"></span>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/*             {% endif %}*/
/*         </ul>*/
/*     </div>*/
/* </nav>*/
/* */
