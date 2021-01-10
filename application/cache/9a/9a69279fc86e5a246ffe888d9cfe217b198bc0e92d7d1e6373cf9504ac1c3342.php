<?php

/* admin/navbar.html */
class __TwigTemplate_3b96aacfa4941bdc19f17e1b272618bfba30fcc2538054a33f93c0f5bbf43df5 extends Twig_Template
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
        echo "<nav class=\"navbar header-navbar pcoded-header\" pcoded-navbar-position=\"fixed\" header-theme=\"theme99\" style=\"position: fixed;z-index: 1028;\">
    <div class=\"navbar-wrapper\">
        <div class=\"navbar-logo\">
            <a class=\"mobile-menu\" id=\"mobile-collapse\" href=\"#\">
                <i class=\"ti-menu\"></i>
            </a>
            <a class=\"mobile-search morphsearch-search\" href=\"index.html#\">
                <i class=\"ti-search\"></i>
            </a>
            <a href=\"index.html\">
                <!-- <img class=\"img-fluid\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/logo.png\" alt=\"Theme-Logo\" /> -->
            </a>
            <a class=\"mobile-options\">
                <i class=\"ti-more\"></i>
            </a>
        </div>
        <div class=\"navbar-container container-fluid\">
            <div>
                <ul class=\"nav-left\">
                    <li>
                        <div class=\"sidebar_toggle\"><a href=\"javascript:void(0)\"><i class=\"ti-menu\"></i></a></div>
                    </li>
                    <li>
                        <a class=\"main-search morphsearch-search\" href=\"index.html#\">
                            <!-- themify icon -->
                            <i class=\"ti-search\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" onclick=\"javascript:toggleFullScreen()\">
                            <i class=\"ti-fullscreen\"></i>
                        </a>
                    </li>
                </ul>
                <ul class=\"nav-right\">

                    <li class=\"header-notification\">
                        <a href=\"#\">
                            <i class=\"ti-bell\"></i>
                            <span class=\"badge\">5</span>
                        </a>
                        <ul class=\"show-notification\">
                            <li>
                                <h6>Notifications</h6>
                                <label class=\"label label-danger\">New</label>
                            </li>
                            <li>
                                <div class=\"media\">
                                    <img class=\"d-flex align-self-center\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/user.png\" alt=\"Generic placeholder image\">
                                    <div class=\"media-body\">
                                        <h5 class=\"notification-user\">John Doe</h5>
                                        <p class=\"notification-msg\">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                        <span class=\"notification-time\">30 minutes ago</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"media\">
                                    <img class=\"d-flex align-self-center\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/user.png\" alt=\"Generic placeholder image\">
                                    <div class=\"media-body\">
                                        <h5 class=\"notification-user\">Joseph William</h5>
                                        <p class=\"notification-msg\">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                        <span class=\"notification-time\">30 minutes ago</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"media\">
                                    <img class=\"d-flex align-self-center\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/user.png\" alt=\"Generic placeholder image\">
                                    <div class=\"media-body\">
                                        <h5 class=\"notification-user\">Sara Soudein</h5>
                                        <p class=\"notification-msg\">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                        <span class=\"notification-time\">30 minutes ago</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class=\"header-notification\">
                        <a href=\"#\" class=\"displayChatbox\">
                            <i class=\"ti-comments\"></i>
                            <span class=\"badge\">9</span>
                        </a>
                    </li>
                    <li class=\"user-profile header-notification\">
                        <a href=\"#\">
                            <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/user.png\" alt=\"User-Profile-Image\">
                            <span>";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
        echo "</span>
                            <i class=\"ti-angle-down\"></i>
                        </a>
                        <ul class=\"show-notification profile-notification\">
                            <li>
                                <a href=\"#\">
                                    <i class=\"ti-settings\"></i> Settings
                                </a>
                            </li>
                            <li>
                                <a href=\"userprofile\">
                                    <i class=\"ti-user\"></i> Profile
                                </a>
                            </li>
                            <li>
                                <a href=\"email-inbox.html\">
                                    <i class=\"ti-email\"></i> My Messages
                                </a>
                            </li>
                            <li>
                                <a href=\"auth-lock-screen.html\">
                                    <i class=\"ti-lock\"></i> Lock Screen
                                </a>
                            </li>
                            <li>
                                <a href=\"logout\">
                                    <i class=\"icon-logout\"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- search -->
                <div id=\"morphsearch\" class=\"morphsearch\">
                    <form class=\"morphsearch-form\">
                        <input class=\"morphsearch-input\" type=\"search\" placeholder=\"Search...\" />
                        <button class=\"morphsearch-submit\" type=\"submit\">Search</button>
                    </form>
                    <div class=\"morphsearch-content\">
                        <div class=\"dummy-column\">
                            <h2>People</h2>
                            <a class=\"dummy-media-object\" href=\"#\">
                                <img class=\"round\" src=\"http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G\" alt=\"Sara Soueidan\" />
                                <h3>Sara Soueidan</h3>
                            </a>
                            <a class=\"dummy-media-object\" href=\"#\">
                                <img class=\"round\" src=\"http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G\" alt=\"Shaun Dona\" />
                                <h3>Shaun Dona</h3>
                            </a>
                        </div>
                        <div class=\"dummy-column\">
                            <h2>Popular</h2>
                            <a class=\"dummy-media-object\" href=\"#\">
                                <img src=\"";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/avatar-1.png\" alt=\"PagePreloadingEffect\" />
                                <h3>Page Preloading Effect</h3>
                            </a>
                            <a class=\"dummy-media-object\" href=\"#\">
                                <img src=\"";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/avatar-1.png\" alt=\"DraggableDualViewSlideshow\" />
                                <h3>Draggable Dual-View Slideshow</h3>
                            </a>
                        </div>
                        <div class=\"dummy-column\">
                            <h2>Recent</h2>
                            <a class=\"dummy-media-object\" href=\"#\">
                                <img src=\"";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/avatar-1.png\" alt=\"TooltipStylesInspiration\" />
                                <h3>Tooltip Styles Inspiration</h3>
                            </a>
                            <a class=\"dummy-media-object\" href=\"#\">
                                <img src=\"";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/avatar-1.png\" alt=\"NotificationStyles\" />
                                <h3>Notification Styles Inspiration</h3>
                            </a>
                        </div>
                    </div>
                    <!-- /morphsearch-content -->
                    <span class=\"morphsearch-close\"><i class=\"icofont icofont-search-alt-1\"></i></span>
                </div>
                <!-- search end -->
            </div>
        </div>
    </div>
</nav>

<!-- Sidebar chat start -->
<div id=\"sidebar\" class=\"users p-chat-user showChat\">
    <div class=\"had-container\">
        <div class=\"card card_main p-fixed users-main\">
            <div class=\"user-box\">
                <div class=\"card-block\">
                    <div class=\"right-icon-control\">
                        <input type=\"text\" class=\"form-control  search-text\" placeholder=\"Search Friend\" id=\"search-friends\">
                        <div class=\"form-icon\">
                            <i class=\"icofont icofont-search\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"main-friend-list\">
                    <div class=\"media userlist-box\" data-id=\"1\" data-status=\"online\" data-username=\"Josephin Doe\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Josephin Doe\">
                        <a class=\"media-left\" href=\"#\">
                            <img class=\"media-object img-circle\" src=\"";
        // line 186
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/avatar-1.png\" alt=\"Generic placeholder image\">
                            <div class=\"live-status bg-success\"></div>
                        </a>
                        <div class=\"media-body\">
                            <div class=\"f-13 chat-header\">Josephin Doe</div>
                        </div>
                    </div>
                    <div class=\"media userlist-box\" data-id=\"2\" data-status=\"online\" data-username=\"Lary Doe\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Lary Doe\">
                        <a class=\"media-left\" href=\"#\">
                            <img class=\"media-object img-circle\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/task/task-u1.jpg\" alt=\"Generic placeholder image\">
                            <div class=\"live-status bg-success\"></div>
                        </a>
                        <div class=\"media-body\">
                            <div class=\"f-13 chat-header\">Lary Doe</div>
                        </div>
                    </div>
                    <div class=\"media userlist-box\" data-id=\"3\" data-status=\"online\" data-username=\"Alice\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Alice\">
                        <a class=\"media-left\" href=\"#\">
                            <img class=\"media-object img-circle\" src=\"";
        // line 204
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/avatar-2.png\" alt=\"Generic placeholder image\">
                            <div class=\"live-status bg-success\"></div>
                        </a>
                        <div class=\"media-body\">
                            <div class=\"f-13 chat-header\">Alice</div>
                        </div>
                    </div>
                    <div class=\"media userlist-box\" data-id=\"4\" data-status=\"online\" data-username=\"Alia\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Alia\">
                        <a class=\"media-left\" href=\"#\">
                            <img class=\"media-object img-circle\" src=\"";
        // line 213
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/task/task-u2.jpg\" alt=\"Generic placeholder image\">
                            <div class=\"live-status bg-success\"></div>
                        </a>
                        <div class=\"media-body\">
                            <div class=\"f-13 chat-header\">Alia</div>
                        </div>
                    </div>
                    <div class=\"media userlist-box\" data-id=\"5\" data-status=\"online\" data-username=\"Suzen\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Suzen\">
                        <a class=\"media-left\" href=\"#\">
                            <img class=\"media-object img-circle\" src=\"";
        // line 222
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/task/task-u3.jpg\" alt=\"Generic placeholder image\">
                            <div class=\"live-status bg-success\"></div>
                        </a>
                        <div class=\"media-body\">
                            <div class=\"f-13 chat-header\">Suzen</div>
                        </div>
                    </div>
                    <div class=\"media userlist-box\" data-id=\"6\" data-status=\"offline\" data-username=\"Michael Scofield\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Michael Scofield\">
                        <a class=\"media-left\" href=\"#\">
                            <img class=\"media-object img-circle\" src=\"";
        // line 231
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/avatar-3.png\" alt=\"Generic placeholder image\">
                            <div class=\"live-status bg-danger\"></div>
                        </a>
                        <div class=\"media-body\">
                            <div class=\"f-13 chat-header\">Michael Scofield</div>
                        </div>
                    </div>
                    <div class=\"media userlist-box\" data-id=\"7\" data-status=\"online\" data-username=\"Irina Shayk\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Irina Shayk\">
                        <a class=\"media-left\" href=\"#\">
                            <img class=\"media-object img-circle\" src=\"";
        // line 240
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/avatar-4.png\" alt=\"Generic placeholder image\">
                            <div class=\"live-status bg-success\"></div>
                        </a>
                        <div class=\"media-body\">
                            <div class=\"f-13 chat-header\">Irina Shayk</div>
                        </div>
                    </div>
                    <div class=\"media userlist-box\" data-id=\"8\" data-status=\"offline\" data-username=\"Sara Tancredi\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Sara Tancredi\">
                        <a class=\"media-left\" href=\"#\">
                            <img class=\"media-object img-circle\" src=\"";
        // line 249
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/avatar-5.png\" alt=\"Generic placeholder image\">
                            <div class=\"live-status bg-danger\"></div>
                        </a>
                        <div class=\"media-body\">
                            <div class=\"f-13 chat-header\">Sara Tancredi</div>
                        </div>
                    </div>
                    <div class=\"media userlist-box\" data-id=\"9\" data-status=\"online\" data-username=\"Samon\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Samon\">
                        <a class=\"media-left\" href=\"#\">
                            <img class=\"media-object img-circle\" src=\"";
        // line 258
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/avatar-1.png\" alt=\"Generic placeholder image\">
                            <div class=\"live-status bg-success\"></div>
                        </a>
                        <div class=\"media-body\">
                            <div class=\"f-13 chat-header\">Samon</div>
                        </div>
                    </div>
                    <div class=\"media userlist-box\" data-id=\"10\" data-status=\"online\" data-username=\"Daizy Mendize\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Daizy Mendize\">
                        <a class=\"media-left\" href=\"#\">
                            <img class=\"media-object img-circle\" src=\"";
        // line 267
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/task/task-u3.jpg\" alt=\"Generic placeholder image\">
                            <div class=\"live-status bg-success\"></div>
                        </a>
                        <div class=\"media-body\">
                            <div class=\"f-13 chat-header\">Daizy Mendize</div>
                        </div>
                    </div>
                    <div class=\"media userlist-box\" data-id=\"11\" data-status=\"offline\" data-username=\"Loren Scofield\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Loren Scofield\">
                        <a class=\"media-left\" href=\"#\">
                            <img class=\"media-object img-circle\" src=\"";
        // line 276
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/avatar-3.png\" alt=\"Generic placeholder image\">
                            <div class=\"live-status bg-danger\"></div>
                        </a>
                        <div class=\"media-body\">
                            <div class=\"f-13 chat-header\">Loren Scofield</div>
                        </div>
                    </div>
                    <div class=\"media userlist-box\" data-id=\"12\" data-status=\"online\" data-username=\"Shayk\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Shayk\">
                        <a class=\"media-left\" href=\"#\">
                            <img class=\"media-object img-circle\" src=\"";
        // line 285
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/avatar-4.png\" alt=\"Generic placeholder image\">
                            <div class=\"live-status bg-success\"></div>
                        </a>
                        <div class=\"media-body\">
                            <div class=\"f-13 chat-header\">Shayk</div>
                        </div>
                    </div>
                    <div class=\"media userlist-box\" data-id=\"13\" data-status=\"offline\" data-username=\"Sara\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Sara\">
                        <a class=\"media-left\" href=\"#\">
                            <img class=\"media-object img-circle\" src=\"";
        // line 294
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/task/task-u3.jpg\" alt=\"Generic placeholder image\">
                            <div class=\"live-status bg-danger\"></div>
                        </a>
                        <div class=\"media-body\">
                            <div class=\"f-13 chat-header\">Sara</div>
                        </div>
                    </div>
                    <div class=\"media userlist-box\" data-id=\"14\" data-status=\"online\" data-username=\"Doe\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Doe\">
                        <a class=\"media-left\" href=\"#\">
                            <img class=\"media-object img-circle\" src=\"";
        // line 303
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/avatar-1.png\" alt=\"Generic placeholder image\">
                            <div class=\"live-status bg-success\"></div>
                        </a>
                        <div class=\"media-body\">
                            <div class=\"f-13 chat-header\">Doe</div>
                        </div>
                    </div>
                    <div class=\"media userlist-box\" data-id=\"15\" data-status=\"online\" data-username=\"Lary\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Lary\">
                        <a class=\"media-left\" href=\"#\">
                            <img class=\"media-object img-circle\" src=\"";
        // line 312
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/task/task-u1.jpg\" alt=\"Generic placeholder image\">
                            <div class=\"live-status bg-success\"></div>
                        </a>
                        <div class=\"media-body\">
                            <div class=\"f-13 chat-header\">Lary</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sidebar inner chat start-->
<div class=\"showChat_inner\">
    <div class=\"media chat-inner-header\">
        <a class=\"back_chatBox\">
            <i class=\"icofont icofont-rounded-left\"></i> Josephin Doe
        </a>
    </div>
    <div class=\"media chat-messages\">
        <a class=\"media-left photo-table\" href=\"#\">
            <img class=\"media-object img-circle m-t-5\" src=\"";
        // line 333
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/avatar-1.png\" alt=\"Generic placeholder image\">
        </a>
        <div class=\"media-body chat-menu-content\">
            <div class=\"\">
                <p class=\"chat-cont\">I'm just looking around. Will you tell me something about yourself?</p>
                <p class=\"chat-time\">8:20 a.m.</p>
            </div>
        </div>
    </div>
    <div class=\"media chat-messages\">
        <div class=\"media-body chat-menu-reply\">
            <div class=\"\">
                <p class=\"chat-cont\">I'm just looking around. Will you tell me something about yourself?</p>
                <p class=\"chat-time\">8:20 a.m.</p>
            </div>
        </div>
        <div class=\"media-right photo-table\">
            <a href=\"#\">
                <img class=\"media-object img-circle m-t-5\" src=\"";
        // line 351
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : null), "html", null, true);
        echo "/assets/admin/images/avatar-2.png\" alt=\"Generic placeholder image\">
            </a>
        </div>
    </div>
    <div class=\"chat-reply-box p-b-20\">
        <div class=\"right-icon-control\">
            <input type=\"text\" class=\"form-control search-text\" placeholder=\"Share Your Thoughts\">
            <div class=\"form-icon\">
                <i class=\"icofont icofont-paper-plane\"></i>
            </div>
        </div>
    </div>
</div>
<!-- Sidebar inner chat end-->
";
    }

    public function getTemplateName()
    {
        return "admin/navbar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 351,  428 => 333,  404 => 312,  392 => 303,  380 => 294,  368 => 285,  356 => 276,  344 => 267,  332 => 258,  320 => 249,  308 => 240,  296 => 231,  284 => 222,  272 => 213,  260 => 204,  248 => 195,  236 => 186,  203 => 156,  196 => 152,  186 => 145,  179 => 141,  123 => 88,  119 => 87,  98 => 69,  85 => 59,  72 => 49,  31 => 11,  19 => 1,);
    }
}
/* <nav class="navbar header-navbar pcoded-header" pcoded-navbar-position="fixed" header-theme="theme99" style="position: fixed;z-index: 1028;">*/
/*     <div class="navbar-wrapper">*/
/*         <div class="navbar-logo">*/
/*             <a class="mobile-menu" id="mobile-collapse" href="#">*/
/*                 <i class="ti-menu"></i>*/
/*             </a>*/
/*             <a class="mobile-search morphsearch-search" href="index.html#">*/
/*                 <i class="ti-search"></i>*/
/*             </a>*/
/*             <a href="index.html">*/
/*                 <!-- <img class="img-fluid" src="{{baseURL}}/assets/admin/images/logo.png" alt="Theme-Logo" /> -->*/
/*             </a>*/
/*             <a class="mobile-options">*/
/*                 <i class="ti-more"></i>*/
/*             </a>*/
/*         </div>*/
/*         <div class="navbar-container container-fluid">*/
/*             <div>*/
/*                 <ul class="nav-left">*/
/*                     <li>*/
/*                         <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a class="main-search morphsearch-search" href="index.html#">*/
/*                             <!-- themify icon -->*/
/*                             <i class="ti-search"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#" onclick="javascript:toggleFullScreen()">*/
/*                             <i class="ti-fullscreen"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 <ul class="nav-right">*/
/* */
/*                     <li class="header-notification">*/
/*                         <a href="#">*/
/*                             <i class="ti-bell"></i>*/
/*                             <span class="badge">5</span>*/
/*                         </a>*/
/*                         <ul class="show-notification">*/
/*                             <li>*/
/*                                 <h6>Notifications</h6>*/
/*                                 <label class="label label-danger">New</label>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <div class="media">*/
/*                                     <img class="d-flex align-self-center" src="{{baseURL}}/assets/admin/images/user.png" alt="Generic placeholder image">*/
/*                                     <div class="media-body">*/
/*                                         <h5 class="notification-user">John Doe</h5>*/
/*                                         <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>*/
/*                                         <span class="notification-time">30 minutes ago</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <div class="media">*/
/*                                     <img class="d-flex align-self-center" src="{{baseURL}}/assets/admin/images/user.png" alt="Generic placeholder image">*/
/*                                     <div class="media-body">*/
/*                                         <h5 class="notification-user">Joseph William</h5>*/
/*                                         <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>*/
/*                                         <span class="notification-time">30 minutes ago</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <div class="media">*/
/*                                     <img class="d-flex align-self-center" src="{{baseURL}}/assets/admin/images/user.png" alt="Generic placeholder image">*/
/*                                     <div class="media-body">*/
/*                                         <h5 class="notification-user">Sara Soudein</h5>*/
/*                                         <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>*/
/*                                         <span class="notification-time">30 minutes ago</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li class="header-notification">*/
/*                         <a href="#" class="displayChatbox">*/
/*                             <i class="ti-comments"></i>*/
/*                             <span class="badge">9</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class="user-profile header-notification">*/
/*                         <a href="#">*/
/*                             <img src="{{baseURL}}/assets/admin/images/user.png" alt="User-Profile-Image">*/
/*                             <span>{{username}}</span>*/
/*                             <i class="ti-angle-down"></i>*/
/*                         </a>*/
/*                         <ul class="show-notification profile-notification">*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <i class="ti-settings"></i> Settings*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="userprofile">*/
/*                                     <i class="ti-user"></i> Profile*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="email-inbox.html">*/
/*                                     <i class="ti-email"></i> My Messages*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="auth-lock-screen.html">*/
/*                                     <i class="ti-lock"></i> Lock Screen*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="logout">*/
/*                                     <i class="icon-logout"></i> Logout*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/*                 <!-- search -->*/
/*                 <div id="morphsearch" class="morphsearch">*/
/*                     <form class="morphsearch-form">*/
/*                         <input class="morphsearch-input" type="search" placeholder="Search..." />*/
/*                         <button class="morphsearch-submit" type="submit">Search</button>*/
/*                     </form>*/
/*                     <div class="morphsearch-content">*/
/*                         <div class="dummy-column">*/
/*                             <h2>People</h2>*/
/*                             <a class="dummy-media-object" href="#">*/
/*                                 <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan" />*/
/*                                 <h3>Sara Soueidan</h3>*/
/*                             </a>*/
/*                             <a class="dummy-media-object" href="#">*/
/*                                 <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G" alt="Shaun Dona" />*/
/*                                 <h3>Shaun Dona</h3>*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="dummy-column">*/
/*                             <h2>Popular</h2>*/
/*                             <a class="dummy-media-object" href="#">*/
/*                                 <img src="{{baseURL}}/assets/admin/images/avatar-1.png" alt="PagePreloadingEffect" />*/
/*                                 <h3>Page Preloading Effect</h3>*/
/*                             </a>*/
/*                             <a class="dummy-media-object" href="#">*/
/*                                 <img src="{{baseURL}}/assets/admin/images/avatar-1.png" alt="DraggableDualViewSlideshow" />*/
/*                                 <h3>Draggable Dual-View Slideshow</h3>*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="dummy-column">*/
/*                             <h2>Recent</h2>*/
/*                             <a class="dummy-media-object" href="#">*/
/*                                 <img src="{{baseURL}}/assets/admin/images/avatar-1.png" alt="TooltipStylesInspiration" />*/
/*                                 <h3>Tooltip Styles Inspiration</h3>*/
/*                             </a>*/
/*                             <a class="dummy-media-object" href="#">*/
/*                                 <img src="{{baseURL}}/assets/admin/images/avatar-1.png" alt="NotificationStyles" />*/
/*                                 <h3>Notification Styles Inspiration</h3>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- /morphsearch-content -->*/
/*                     <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>*/
/*                 </div>*/
/*                 <!-- search end -->*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
/* */
/* <!-- Sidebar chat start -->*/
/* <div id="sidebar" class="users p-chat-user showChat">*/
/*     <div class="had-container">*/
/*         <div class="card card_main p-fixed users-main">*/
/*             <div class="user-box">*/
/*                 <div class="card-block">*/
/*                     <div class="right-icon-control">*/
/*                         <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">*/
/*                         <div class="form-icon">*/
/*                             <i class="icofont icofont-search"></i>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="main-friend-list">*/
/*                     <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">*/
/*                         <a class="media-left" href="#">*/
/*                             <img class="media-object img-circle" src="{{baseURL}}/assets/admin/images/avatar-1.png" alt="Generic placeholder image">*/
/*                             <div class="live-status bg-success"></div>*/
/*                         </a>*/
/*                         <div class="media-body">*/
/*                             <div class="f-13 chat-header">Josephin Doe</div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">*/
/*                         <a class="media-left" href="#">*/
/*                             <img class="media-object img-circle" src="{{baseURL}}/assets/admin/images/task/task-u1.jpg" alt="Generic placeholder image">*/
/*                             <div class="live-status bg-success"></div>*/
/*                         </a>*/
/*                         <div class="media-body">*/
/*                             <div class="f-13 chat-header">Lary Doe</div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">*/
/*                         <a class="media-left" href="#">*/
/*                             <img class="media-object img-circle" src="{{baseURL}}/assets/admin/images/avatar-2.png" alt="Generic placeholder image">*/
/*                             <div class="live-status bg-success"></div>*/
/*                         </a>*/
/*                         <div class="media-body">*/
/*                             <div class="f-13 chat-header">Alice</div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">*/
/*                         <a class="media-left" href="#">*/
/*                             <img class="media-object img-circle" src="{{baseURL}}/assets/admin/images/task/task-u2.jpg" alt="Generic placeholder image">*/
/*                             <div class="live-status bg-success"></div>*/
/*                         </a>*/
/*                         <div class="media-body">*/
/*                             <div class="f-13 chat-header">Alia</div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">*/
/*                         <a class="media-left" href="#">*/
/*                             <img class="media-object img-circle" src="{{baseURL}}/assets/admin/images/task/task-u3.jpg" alt="Generic placeholder image">*/
/*                             <div class="live-status bg-success"></div>*/
/*                         </a>*/
/*                         <div class="media-body">*/
/*                             <div class="f-13 chat-header">Suzen</div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="media userlist-box" data-id="6" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip" data-placement="left" title="Michael Scofield">*/
/*                         <a class="media-left" href="#">*/
/*                             <img class="media-object img-circle" src="{{baseURL}}/assets/admin/images/avatar-3.png" alt="Generic placeholder image">*/
/*                             <div class="live-status bg-danger"></div>*/
/*                         </a>*/
/*                         <div class="media-body">*/
/*                             <div class="f-13 chat-header">Michael Scofield</div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="media userlist-box" data-id="7" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left" title="Irina Shayk">*/
/*                         <a class="media-left" href="#">*/
/*                             <img class="media-object img-circle" src="{{baseURL}}/assets/admin/images/avatar-4.png" alt="Generic placeholder image">*/
/*                             <div class="live-status bg-success"></div>*/
/*                         </a>*/
/*                         <div class="media-body">*/
/*                             <div class="f-13 chat-header">Irina Shayk</div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="media userlist-box" data-id="8" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left" title="Sara Tancredi">*/
/*                         <a class="media-left" href="#">*/
/*                             <img class="media-object img-circle" src="{{baseURL}}/assets/admin/images/avatar-5.png" alt="Generic placeholder image">*/
/*                             <div class="live-status bg-danger"></div>*/
/*                         </a>*/
/*                         <div class="media-body">*/
/*                             <div class="f-13 chat-header">Sara Tancredi</div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="media userlist-box" data-id="9" data-status="online" data-username="Samon" data-toggle="tooltip" data-placement="left" title="Samon">*/
/*                         <a class="media-left" href="#">*/
/*                             <img class="media-object img-circle" src="{{baseURL}}/assets/admin/images/avatar-1.png" alt="Generic placeholder image">*/
/*                             <div class="live-status bg-success"></div>*/
/*                         </a>*/
/*                         <div class="media-body">*/
/*                             <div class="f-13 chat-header">Samon</div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="media userlist-box" data-id="10" data-status="online" data-username="Daizy Mendize" data-toggle="tooltip" data-placement="left" title="Daizy Mendize">*/
/*                         <a class="media-left" href="#">*/
/*                             <img class="media-object img-circle" src="{{baseURL}}/assets/admin/images/task/task-u3.jpg" alt="Generic placeholder image">*/
/*                             <div class="live-status bg-success"></div>*/
/*                         </a>*/
/*                         <div class="media-body">*/
/*                             <div class="f-13 chat-header">Daizy Mendize</div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="media userlist-box" data-id="11" data-status="offline" data-username="Loren Scofield" data-toggle="tooltip" data-placement="left" title="Loren Scofield">*/
/*                         <a class="media-left" href="#">*/
/*                             <img class="media-object img-circle" src="{{baseURL}}/assets/admin/images/avatar-3.png" alt="Generic placeholder image">*/
/*                             <div class="live-status bg-danger"></div>*/
/*                         </a>*/
/*                         <div class="media-body">*/
/*                             <div class="f-13 chat-header">Loren Scofield</div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="media userlist-box" data-id="12" data-status="online" data-username="Shayk" data-toggle="tooltip" data-placement="left" title="Shayk">*/
/*                         <a class="media-left" href="#">*/
/*                             <img class="media-object img-circle" src="{{baseURL}}/assets/admin/images/avatar-4.png" alt="Generic placeholder image">*/
/*                             <div class="live-status bg-success"></div>*/
/*                         </a>*/
/*                         <div class="media-body">*/
/*                             <div class="f-13 chat-header">Shayk</div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="media userlist-box" data-id="13" data-status="offline" data-username="Sara" data-toggle="tooltip" data-placement="left" title="Sara">*/
/*                         <a class="media-left" href="#">*/
/*                             <img class="media-object img-circle" src="{{baseURL}}/assets/admin/images/task/task-u3.jpg" alt="Generic placeholder image">*/
/*                             <div class="live-status bg-danger"></div>*/
/*                         </a>*/
/*                         <div class="media-body">*/
/*                             <div class="f-13 chat-header">Sara</div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="media userlist-box" data-id="14" data-status="online" data-username="Doe" data-toggle="tooltip" data-placement="left" title="Doe">*/
/*                         <a class="media-left" href="#">*/
/*                             <img class="media-object img-circle" src="{{baseURL}}/assets/admin/images/avatar-1.png" alt="Generic placeholder image">*/
/*                             <div class="live-status bg-success"></div>*/
/*                         </a>*/
/*                         <div class="media-body">*/
/*                             <div class="f-13 chat-header">Doe</div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="media userlist-box" data-id="15" data-status="online" data-username="Lary" data-toggle="tooltip" data-placement="left" title="Lary">*/
/*                         <a class="media-left" href="#">*/
/*                             <img class="media-object img-circle" src="{{baseURL}}/assets/admin/images/task/task-u1.jpg" alt="Generic placeholder image">*/
/*                             <div class="live-status bg-success"></div>*/
/*                         </a>*/
/*                         <div class="media-body">*/
/*                             <div class="f-13 chat-header">Lary</div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <!-- Sidebar inner chat start-->*/
/* <div class="showChat_inner">*/
/*     <div class="media chat-inner-header">*/
/*         <a class="back_chatBox">*/
/*             <i class="icofont icofont-rounded-left"></i> Josephin Doe*/
/*         </a>*/
/*     </div>*/
/*     <div class="media chat-messages">*/
/*         <a class="media-left photo-table" href="#">*/
/*             <img class="media-object img-circle m-t-5" src="{{baseURL}}/assets/admin/images/avatar-1.png" alt="Generic placeholder image">*/
/*         </a>*/
/*         <div class="media-body chat-menu-content">*/
/*             <div class="">*/
/*                 <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>*/
/*                 <p class="chat-time">8:20 a.m.</p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="media chat-messages">*/
/*         <div class="media-body chat-menu-reply">*/
/*             <div class="">*/
/*                 <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>*/
/*                 <p class="chat-time">8:20 a.m.</p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="media-right photo-table">*/
/*             <a href="#">*/
/*                 <img class="media-object img-circle m-t-5" src="{{baseURL}}/assets/admin/images/avatar-2.png" alt="Generic placeholder image">*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/*     <div class="chat-reply-box p-b-20">*/
/*         <div class="right-icon-control">*/
/*             <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">*/
/*             <div class="form-icon">*/
/*                 <i class="icofont icofont-paper-plane"></i>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <!-- Sidebar inner chat end-->*/
/* */
