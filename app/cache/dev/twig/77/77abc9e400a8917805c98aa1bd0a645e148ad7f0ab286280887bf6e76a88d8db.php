<?php

/* AdminBundle:Admin/Layout:quick_sidebar.html.twig */
class __TwigTemplate_9e51d7c6cea072447dbeea941f2a58d94483b2dc74e9be9839e09cb8ea08fffc extends Twig_Template
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
        $__internal_15a5a36e9da68ec449392d32f8e86268590fd1327961a506ade72483b2a7dd38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a5a36e9da68ec449392d32f8e86268590fd1327961a506ade72483b2a7dd38->enter($__internal_15a5a36e9da68ec449392d32f8e86268590fd1327961a506ade72483b2a7dd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin/Layout:quick_sidebar.html.twig"));

        // line 1
        echo "    
    <a href=\"javascript:;\" class=\"page-quick-sidebar-toggler\"><i class=\"icon-close\"></i></a>
    <div class=\"page-quick-sidebar-wrapper\">
        <div class=\"page-quick-sidebar\">
            <div class=\"nav-justified\">
                <ul class=\"nav nav-tabs nav-justified\">
                    <li class=\"active\">
                        <a href=\"#quick_sidebar_tab_1\" data-toggle=\"tab\">
                        Users <span class=\"badge badge-danger\">2</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#quick_sidebar_tab_2\" data-toggle=\"tab\">
                        Alerts <span class=\"badge badge-success\">7</span>
                        </a>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        More<i class=\"fa fa-angle-down\"></i>
                        </a>
                        <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                            <li>
                                <a href=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                <i class=\"icon-bell\"></i> Alerts </a>
                            </li>
                            <li>
                                <a href=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                <i class=\"icon-info\"></i> Notifications </a>
                            </li>
                            <li>
                                <a href=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                <i class=\"icon-speech\"></i> Activities </a>
                            </li>
                            <li class=\"divider\">
                            </li>
                            <li>
                                <a href=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                <i class=\"icon-settings\"></i> Settings </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class=\"tab-content\">
                    <div class=\"tab-pane active page-quick-sidebar-chat\" id=\"quick_sidebar_tab_1\">
                        <div class=\"page-quick-sidebar-chat-users\" data-rail-color=\"#ddd\" data-wrapper-class=\"page-quick-sidebar-list\">
                            <h3 class=\"list-heading\">Staff</h3>
                            <ul class=\"media-list list-items\">
                                <li class=\"media\">
                                    <div class=\"media-status\">
                                        <span class=\"badge badge-success\">8</span>
                                    </div>
                                    <img class=\"media-object\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/layouts/layout/img/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Bob Nilson</h4>
                                        <div class=\"media-heading-sub\">
                                            Project Manager
                                        </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <img class=\"media-object\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/layouts/layout/img/avatar1.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Nick Larson</h4>
                                        <div class=\"media-heading-sub\">
                                            Art Director
                                        </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <div class=\"media-status\">
                                        <span class=\"badge badge-danger\">3</span>
                                    </div>
                                    <img class=\"media-object\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/layouts/layout/img/avatar4.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Deon Hubert</h4>
                                        <div class=\"media-heading-sub\">
                                            CTO
                                        </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <img class=\"media-object\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/layouts/layout/img/avatar2.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Ella Wong</h4>
                                        <div class=\"media-heading-sub\">
                                            CEO
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <h3 class=\"list-heading\">Customers</h3>
                            <ul class=\"media-list list-items\">
                                <li class=\"media\">
                                    <div class=\"media-status\">
                                        <span class=\"badge badge-warning\">2</span>
                                    </div>
                                    <img class=\"media-object\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/layouts/layout/img/avatar6.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Lara Kunis</h4>
                                        <div class=\"media-heading-sub\">
                                            CEO, Loop Inc
                                        </div>
                                        <div class=\"media-heading-small\">
                                            Last seen 03:10 AM
                                        </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <div class=\"media-status\">
                                        <span class=\"label label-sm label-success\">new</span>
                                    </div>
                                    <img class=\"media-object\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/layouts/layout/img/avatar7.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Ernie Kyllonen</h4>
                                        <div class=\"media-heading-sub\">
                                            Project Manager,<br>
                                            SmartBizz PTL
                                        </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <img class=\"media-object\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/layouts/layout/img/avatar8.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Lisa Stone</h4>
                                        <div class=\"media-heading-sub\">
                                            CTO, Keort Inc
                                        </div>
                                        <div class=\"media-heading-small\">
                                            Last seen 13:10 PM
                                        </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <div class=\"media-status\">
                                        <span class=\"badge badge-success\">7</span>
                                    </div>
                                    <img class=\"media-object\" src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/layouts/layout/img/avatar9.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Deon Portalatin</h4>
                                        <div class=\"media-heading-sub\">
                                            CFO, H&D LTD
                                        </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <img class=\"media-object\" src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/layouts/layout/img/avatar10.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Irina Savikova</h4>
                                        <div class=\"media-heading-sub\">
                                            CEO, Tizda Motors Inc
                                        </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <div class=\"media-status\">
                                        <span class=\"badge badge-danger\">4</span>
                                    </div>
                                    <img class=\"media-object\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/layouts/layout/img/avatar11.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Maria Gomez</h4>
                                        <div class=\"media-heading-sub\">
                                            Manager, Infomatic Inc
                                        </div>
                                        <div class=\"media-heading-small\">
                                            Last seen 03:10 AM
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class=\"page-quick-sidebar-item\">
                            <div class=\"page-quick-sidebar-chat-user\">
                                <div class=\"page-quick-sidebar-nav\">
                                    <a href=\"javascript:;\" class=\"page-quick-sidebar-back-to-list\"><i class=\"icon-arrow-left\"></i>Back</a>
                                </div>
                                <div class=\"page-quick-sidebar-chat-user-messages\">
                                    <div class=\"post out\">
                                        <img class=\"avatar\" alt=\"\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/layouts/layout/img/avatar3.jpg"), "html", null, true);
        echo "\"/>
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"#\" class=\"name\">Bob Nilson</a>
                                            <span class=\"datetime\">20:15</span>
                                            <span class=\"body\">
                                            When could you send me the report ? </span>
                                        </div>
                                    </div>
                                    <div class=\"post in\">
                                        <img class=\"avatar\" alt=\"\" src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/layouts/layout/img/avatar2.jpg"), "html", null, true);
        echo "\"/>
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"#\" class=\"name\">Ella Wong</a>
                                            <span class=\"datetime\">20:15</span>
                                            <span class=\"body\">
                                            Its almost done. I will be sending it shortly </span>
                                        </div>
                                    </div>
                                    <div class=\"post out\">
                                        <img class=\"avatar\" alt=\"\" src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/layouts/layout/img/avatar3.jpg"), "html", null, true);
        echo "\"/>
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"#\" class=\"name\">Bob Nilson</a>
                                            <span class=\"datetime\">20:15</span>
                                            <span class=\"body\">
                                            Alright. Thanks! :) </span>
                                        </div>
                                    </div>
                                    <div class=\"post in\">
                                        <img class=\"avatar\" alt=\"\" src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/layouts/layout/img/avatar2.jpg"), "html", null, true);
        echo "\"/>
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"#\" class=\"name\">Ella Wong</a>
                                            <span class=\"datetime\">20:16</span>
                                            <span class=\"body\">
                                            You are most welcome. Sorry for the delay. </span>
                                        </div>
                                    </div>
                                    <div class=\"post out\">
                                        <img class=\"avatar\" alt=\"\" src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/layouts/layout/img/avatar3.jpg"), "html", null, true);
        echo "\"/>
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"#\" class=\"name\">Bob Nilson</a>
                                            <span class=\"datetime\">20:17</span>
                                            <span class=\"body\">
                                            No probs. Just take your time :) </span>
                                        </div>
                                    </div>
                                    <div class=\"post in\">
                                        <img class=\"avatar\" alt=\"\" src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/layouts/layout/img/avatar2.jpg"), "html", null, true);
        echo "\"/>
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"#\" class=\"name\">Ella Wong</a>
                                            <span class=\"datetime\">20:40</span>
                                            <span class=\"body\">
                                            Alright. I just emailed it to you. </span>
                                        </div>
                                    </div>
                                    <div class=\"post out\">
                                        <img class=\"avatar\" alt=\"\" src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/layouts/layout/img/avatar3.jpg"), "html", null, true);
        echo "\"/>
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"#\" class=\"name\">Bob Nilson</a>
                                            <span class=\"datetime\">20:17</span>
                                            <span class=\"body\">
                                            Great! Thanks. Will check it right away. </span>
                                        </div>
                                    </div>
                                    <div class=\"post in\">
                                        <img class=\"avatar\" alt=\"\" src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/layouts/layout/img/avatar2.jpg"), "html", null, true);
        echo "\"/>
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"#\" class=\"name\">Ella Wong</a>
                                            <span class=\"datetime\">20:40</span>
                                            <span class=\"body\">
                                            Please let me know if you have any comment. </span>
                                        </div>
                                    </div>
                                    <div class=\"post out\">
                                        <img class=\"avatar\" alt=\"\" src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/layouts/layout/img/avatar3.jpg"), "html", null, true);
        echo "\"/>
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"#\" class=\"name\">Bob Nilson</a>
                                            <span class=\"datetime\">20:17</span>
                                            <span class=\"body\">
                                            Sure. I will check and buzz you if anything needs to be corrected. </span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"page-quick-sidebar-chat-user-form\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Type a message here...\">
                                        <div class=\"input-group-btn\">
                                            <button type=\"button\" class=\"btn blue\"><i class=\"icon-paper-clip\"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane page-quick-sidebar-alerts\" id=\"quick_sidebar_tab_2\">
                        <div class=\"page-quick-sidebar-alerts-list\">
                            <h3 class=\"list-heading\">General</h3>
                            <ul class=\"feeds list-items\">
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-info\">
                                                    <i class=\"fa fa-check\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\">
                                                    You have 4 pending tasks. <span class=\"label label-sm label-warning \">
                                                    Take action <i class=\"fa fa-share\"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\">
                                            Just now
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-success\">
                                                        <i class=\"fa fa-bar-chart-o\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\">
                                                        Finance Report for year 2013 has been released.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\">
                                                20 mins
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-danger\">
                                                    <i class=\"fa fa-user\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\">
                                                    You have 5 pending membership that requires a quick review.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\">
                                            24 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-info\">
                                                    <i class=\"fa fa-shopping-cart\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\">
                                                    New order received with <span class=\"label label-sm label-success\">
                                                    Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\">
                                            30 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-success\">
                                                    <i class=\"fa fa-user\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\">
                                                    You have 5 pending membership that requires a quick review.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\">
                                            24 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-info\">
                                                    <i class=\"fa fa-bell-o\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\">
                                                    Web server hardware needs to be upgraded. <span class=\"label label-sm label-warning\">
                                                    Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\">
                                            2 hours
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-default\">
                                                        <i class=\"fa fa-briefcase\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\">
                                                        IPO Report for year 2013 has been released.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\">
                                                20 mins
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <h3 class=\"list-heading\">System</h3>
                            <ul class=\"feeds list-items\">
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-info\">
                                                    <i class=\"fa fa-check\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\">
                                                    You have 4 pending tasks. <span class=\"label label-sm label-warning \">
                                                    Take action <i class=\"fa fa-share\"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\">
                                            Just now
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-danger\">
                                                        <i class=\"fa fa-bar-chart-o\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\">
                                                        Finance Report for year 2013 has been released.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\">
                                                20 mins
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-default\">
                                                    <i class=\"fa fa-user\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\">
                                                    You have 5 pending membership that requires a quick review.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\">
                                            24 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-info\">
                                                    <i class=\"fa fa-shopping-cart\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\">
                                                    New order received with <span class=\"label label-sm label-success\">
                                                    Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\">
                                            30 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-success\">
                                                    <i class=\"fa fa-user\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\">
                                                    You have 5 pending membership that requires a quick review.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\">
                                            24 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-warning\">
                                                    <i class=\"fa fa-bell-o\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\">
                                                    Web server hardware needs to be upgraded. <span class=\"label label-sm label-default \">
                                                    Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\">
                                            2 hours
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-info\">
                                                        <i class=\"fa fa-briefcase\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\">
                                                        IPO Report for year 2013 has been released.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\">
                                                20 mins
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"tab-pane page-quick-sidebar-settings\" id=\"quick_sidebar_tab_3\">
                        <div class=\"page-quick-sidebar-settings-list\">
                            <h3 class=\"list-heading\">General Settings</h3>
                            <ul class=\"list-items borderless\">
                                <li>
                                    Enable Notifications <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"success\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\">
                                </li>
                                <li>
                                    Allow Tracking <input type=\"checkbox\" class=\"make-switch\" data-size=\"small\" data-on-color=\"info\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\">
                                </li>
                                <li>
                                    Log Errors <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"danger\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\">
                                </li>
                                <li>
                                    Auto Sumbit Issues <input type=\"checkbox\" class=\"make-switch\" data-size=\"small\" data-on-color=\"warning\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\">
                                </li>
                                <li>
                                    Enable SMS Alerts <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"success\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\">
                                </li>
                            </ul>
                            <h3 class=\"list-heading\">System Settings</h3>
                            <ul class=\"list-items borderless\">
                                <li>
                                    Security Level
                                    <select class=\"form-control input-inline input-sm input-small\">
                                        <option value=\"1\">Normal</option>
                                        <option value=\"2\" selected>Medium</option>
                                        <option value=\"e\">High</option>
                                    </select>
                                </li>
                                <li>
                                    Failed Email Attempts <input class=\"form-control input-inline input-sm input-small\" value=\"5\"/>
                                </li>
                                <li>
                                    Secondary SMTP Port <input class=\"form-control input-inline input-sm input-small\" value=\"3560\"/>
                                </li>
                                <li>
                                    Notify On System Error <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"danger\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\">
                                </li>
                                <li>
                                    Notify On SMTP Error <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"warning\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\">
                                </li>
                            </ul>
                            <div class=\"inner-content\">
                                <button class=\"btn btn-success\"><i class=\"icon-settings\"></i> Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        
        $__internal_15a5a36e9da68ec449392d32f8e86268590fd1327961a506ade72483b2a7dd38->leave($__internal_15a5a36e9da68ec449392d32f8e86268590fd1327961a506ade72483b2a7dd38_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin/Layout:quick_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 258,  322 => 248,  309 => 238,  296 => 228,  283 => 218,  270 => 208,  257 => 198,  244 => 188,  231 => 178,  208 => 158,  193 => 146,  181 => 137,  163 => 122,  150 => 112,  132 => 97,  114 => 82,  102 => 73,  87 => 61,  75 => 52,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    
    <a href=\"javascript:;\" class=\"page-quick-sidebar-toggler\"><i class=\"icon-close\"></i></a>
    <div class=\"page-quick-sidebar-wrapper\">
        <div class=\"page-quick-sidebar\">
            <div class=\"nav-justified\">
                <ul class=\"nav nav-tabs nav-justified\">
                    <li class=\"active\">
                        <a href=\"#quick_sidebar_tab_1\" data-toggle=\"tab\">
                        Users <span class=\"badge badge-danger\">2</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#quick_sidebar_tab_2\" data-toggle=\"tab\">
                        Alerts <span class=\"badge badge-success\">7</span>
                        </a>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        More<i class=\"fa fa-angle-down\"></i>
                        </a>
                        <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                            <li>
                                <a href=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                <i class=\"icon-bell\"></i> Alerts </a>
                            </li>
                            <li>
                                <a href=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                <i class=\"icon-info\"></i> Notifications </a>
                            </li>
                            <li>
                                <a href=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                <i class=\"icon-speech\"></i> Activities </a>
                            </li>
                            <li class=\"divider\">
                            </li>
                            <li>
                                <a href=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                <i class=\"icon-settings\"></i> Settings </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class=\"tab-content\">
                    <div class=\"tab-pane active page-quick-sidebar-chat\" id=\"quick_sidebar_tab_1\">
                        <div class=\"page-quick-sidebar-chat-users\" data-rail-color=\"#ddd\" data-wrapper-class=\"page-quick-sidebar-list\">
                            <h3 class=\"list-heading\">Staff</h3>
                            <ul class=\"media-list list-items\">
                                <li class=\"media\">
                                    <div class=\"media-status\">
                                        <span class=\"badge badge-success\">8</span>
                                    </div>
                                    <img class=\"media-object\" src=\"{{ asset('bundles/assets/layouts/layout/img/avatar3.jpg')}}\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Bob Nilson</h4>
                                        <div class=\"media-heading-sub\">
                                            Project Manager
                                        </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <img class=\"media-object\" src=\"{{ asset('bundles/assets/layouts/layout/img/avatar1.jpg')}}\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Nick Larson</h4>
                                        <div class=\"media-heading-sub\">
                                            Art Director
                                        </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <div class=\"media-status\">
                                        <span class=\"badge badge-danger\">3</span>
                                    </div>
                                    <img class=\"media-object\" src=\"{{ asset('bundles/assets/layouts/layout/img/avatar4.jpg')}}\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Deon Hubert</h4>
                                        <div class=\"media-heading-sub\">
                                            CTO
                                        </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <img class=\"media-object\" src=\"{{ asset('bundles/assets/layouts/layout/img/avatar2.jpg')}}\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Ella Wong</h4>
                                        <div class=\"media-heading-sub\">
                                            CEO
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <h3 class=\"list-heading\">Customers</h3>
                            <ul class=\"media-list list-items\">
                                <li class=\"media\">
                                    <div class=\"media-status\">
                                        <span class=\"badge badge-warning\">2</span>
                                    </div>
                                    <img class=\"media-object\" src=\"{{ asset('bundles/assets/layouts/layout/img/avatar6.jpg')}}\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Lara Kunis</h4>
                                        <div class=\"media-heading-sub\">
                                            CEO, Loop Inc
                                        </div>
                                        <div class=\"media-heading-small\">
                                            Last seen 03:10 AM
                                        </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <div class=\"media-status\">
                                        <span class=\"label label-sm label-success\">new</span>
                                    </div>
                                    <img class=\"media-object\" src=\"{{ asset('bundles/assets/layouts/layout/img/avatar7.jpg')}}\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Ernie Kyllonen</h4>
                                        <div class=\"media-heading-sub\">
                                            Project Manager,<br>
                                            SmartBizz PTL
                                        </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <img class=\"media-object\" src=\"{{ asset('bundles/assets/layouts/layout/img/avatar8.jpg')}}\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Lisa Stone</h4>
                                        <div class=\"media-heading-sub\">
                                            CTO, Keort Inc
                                        </div>
                                        <div class=\"media-heading-small\">
                                            Last seen 13:10 PM
                                        </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <div class=\"media-status\">
                                        <span class=\"badge badge-success\">7</span>
                                    </div>
                                    <img class=\"media-object\" src=\"{{ asset('bundles/assets/layouts/layout/img/avatar9.jpg')}}\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Deon Portalatin</h4>
                                        <div class=\"media-heading-sub\">
                                            CFO, H&D LTD
                                        </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <img class=\"media-object\" src=\"{{ asset('bundles/assets/layouts/layout/img/avatar10.jpg')}}\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Irina Savikova</h4>
                                        <div class=\"media-heading-sub\">
                                            CEO, Tizda Motors Inc
                                        </div>
                                    </div>
                                </li>
                                <li class=\"media\">
                                    <div class=\"media-status\">
                                        <span class=\"badge badge-danger\">4</span>
                                    </div>
                                    <img class=\"media-object\" src=\"{{ asset('bundles/assets/layouts/layout/img/avatar11.jpg')}}\" alt=\"...\">
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading\">Maria Gomez</h4>
                                        <div class=\"media-heading-sub\">
                                            Manager, Infomatic Inc
                                        </div>
                                        <div class=\"media-heading-small\">
                                            Last seen 03:10 AM
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class=\"page-quick-sidebar-item\">
                            <div class=\"page-quick-sidebar-chat-user\">
                                <div class=\"page-quick-sidebar-nav\">
                                    <a href=\"javascript:;\" class=\"page-quick-sidebar-back-to-list\"><i class=\"icon-arrow-left\"></i>Back</a>
                                </div>
                                <div class=\"page-quick-sidebar-chat-user-messages\">
                                    <div class=\"post out\">
                                        <img class=\"avatar\" alt=\"\" src=\"{{ asset('bundles/assets/layouts/layout/img/avatar3.jpg')}}\"/>
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"#\" class=\"name\">Bob Nilson</a>
                                            <span class=\"datetime\">20:15</span>
                                            <span class=\"body\">
                                            When could you send me the report ? </span>
                                        </div>
                                    </div>
                                    <div class=\"post in\">
                                        <img class=\"avatar\" alt=\"\" src=\"{{ asset('bundles/assets/layouts/layout/img/avatar2.jpg')}}\"/>
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"#\" class=\"name\">Ella Wong</a>
                                            <span class=\"datetime\">20:15</span>
                                            <span class=\"body\">
                                            Its almost done. I will be sending it shortly </span>
                                        </div>
                                    </div>
                                    <div class=\"post out\">
                                        <img class=\"avatar\" alt=\"\" src=\"{{ asset('bundles/assets/layouts/layout/img/avatar3.jpg')}}\"/>
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"#\" class=\"name\">Bob Nilson</a>
                                            <span class=\"datetime\">20:15</span>
                                            <span class=\"body\">
                                            Alright. Thanks! :) </span>
                                        </div>
                                    </div>
                                    <div class=\"post in\">
                                        <img class=\"avatar\" alt=\"\" src=\"{{ asset('bundles/assets/layouts/layout/img/avatar2.jpg')}}\"/>
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"#\" class=\"name\">Ella Wong</a>
                                            <span class=\"datetime\">20:16</span>
                                            <span class=\"body\">
                                            You are most welcome. Sorry for the delay. </span>
                                        </div>
                                    </div>
                                    <div class=\"post out\">
                                        <img class=\"avatar\" alt=\"\" src=\"{{ asset('bundles/assets/layouts/layout/img/avatar3.jpg')}}\"/>
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"#\" class=\"name\">Bob Nilson</a>
                                            <span class=\"datetime\">20:17</span>
                                            <span class=\"body\">
                                            No probs. Just take your time :) </span>
                                        </div>
                                    </div>
                                    <div class=\"post in\">
                                        <img class=\"avatar\" alt=\"\" src=\"{{ asset('bundles/assets/layouts/layout/img/avatar2.jpg')}}\"/>
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"#\" class=\"name\">Ella Wong</a>
                                            <span class=\"datetime\">20:40</span>
                                            <span class=\"body\">
                                            Alright. I just emailed it to you. </span>
                                        </div>
                                    </div>
                                    <div class=\"post out\">
                                        <img class=\"avatar\" alt=\"\" src=\"{{ asset('bundles/assets/layouts/layout/img/avatar3.jpg')}}\"/>
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"#\" class=\"name\">Bob Nilson</a>
                                            <span class=\"datetime\">20:17</span>
                                            <span class=\"body\">
                                            Great! Thanks. Will check it right away. </span>
                                        </div>
                                    </div>
                                    <div class=\"post in\">
                                        <img class=\"avatar\" alt=\"\" src=\"{{ asset('bundles/assets/layouts/layout/img/avatar2.jpg')}}\"/>
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"#\" class=\"name\">Ella Wong</a>
                                            <span class=\"datetime\">20:40</span>
                                            <span class=\"body\">
                                            Please let me know if you have any comment. </span>
                                        </div>
                                    </div>
                                    <div class=\"post out\">
                                        <img class=\"avatar\" alt=\"\" src=\"{{ asset('bundles/assets/layouts/layout/img/avatar3.jpg')}}\"/>
                                        <div class=\"message\">
                                            <span class=\"arrow\"></span>
                                            <a href=\"#\" class=\"name\">Bob Nilson</a>
                                            <span class=\"datetime\">20:17</span>
                                            <span class=\"body\">
                                            Sure. I will check and buzz you if anything needs to be corrected. </span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"page-quick-sidebar-chat-user-form\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Type a message here...\">
                                        <div class=\"input-group-btn\">
                                            <button type=\"button\" class=\"btn blue\"><i class=\"icon-paper-clip\"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane page-quick-sidebar-alerts\" id=\"quick_sidebar_tab_2\">
                        <div class=\"page-quick-sidebar-alerts-list\">
                            <h3 class=\"list-heading\">General</h3>
                            <ul class=\"feeds list-items\">
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-info\">
                                                    <i class=\"fa fa-check\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\">
                                                    You have 4 pending tasks. <span class=\"label label-sm label-warning \">
                                                    Take action <i class=\"fa fa-share\"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\">
                                            Just now
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-success\">
                                                        <i class=\"fa fa-bar-chart-o\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\">
                                                        Finance Report for year 2013 has been released.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\">
                                                20 mins
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-danger\">
                                                    <i class=\"fa fa-user\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\">
                                                    You have 5 pending membership that requires a quick review.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\">
                                            24 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-info\">
                                                    <i class=\"fa fa-shopping-cart\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\">
                                                    New order received with <span class=\"label label-sm label-success\">
                                                    Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\">
                                            30 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-success\">
                                                    <i class=\"fa fa-user\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\">
                                                    You have 5 pending membership that requires a quick review.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\">
                                            24 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-info\">
                                                    <i class=\"fa fa-bell-o\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\">
                                                    Web server hardware needs to be upgraded. <span class=\"label label-sm label-warning\">
                                                    Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\">
                                            2 hours
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-default\">
                                                        <i class=\"fa fa-briefcase\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\">
                                                        IPO Report for year 2013 has been released.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\">
                                                20 mins
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <h3 class=\"list-heading\">System</h3>
                            <ul class=\"feeds list-items\">
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-info\">
                                                    <i class=\"fa fa-check\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\">
                                                    You have 4 pending tasks. <span class=\"label label-sm label-warning \">
                                                    Take action <i class=\"fa fa-share\"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\">
                                            Just now
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-danger\">
                                                        <i class=\"fa fa-bar-chart-o\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\">
                                                        Finance Report for year 2013 has been released.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\">
                                                20 mins
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-default\">
                                                    <i class=\"fa fa-user\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\">
                                                    You have 5 pending membership that requires a quick review.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\">
                                            24 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-info\">
                                                    <i class=\"fa fa-shopping-cart\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\">
                                                    New order received with <span class=\"label label-sm label-success\">
                                                    Reference Number: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\">
                                            30 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-success\">
                                                    <i class=\"fa fa-user\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\">
                                                    You have 5 pending membership that requires a quick review.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\">
                                            24 mins
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"col1\">
                                        <div class=\"cont\">
                                            <div class=\"cont-col1\">
                                                <div class=\"label label-sm label-warning\">
                                                    <i class=\"fa fa-bell-o\"></i>
                                                </div>
                                            </div>
                                            <div class=\"cont-col2\">
                                                <div class=\"desc\">
                                                    Web server hardware needs to be upgraded. <span class=\"label label-sm label-default \">
                                                    Overdue </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col2\">
                                        <div class=\"date\">
                                            2 hours
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-info\">
                                                        <i class=\"fa fa-briefcase\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\">
                                                        IPO Report for year 2013 has been released.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\">
                                                20 mins
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"tab-pane page-quick-sidebar-settings\" id=\"quick_sidebar_tab_3\">
                        <div class=\"page-quick-sidebar-settings-list\">
                            <h3 class=\"list-heading\">General Settings</h3>
                            <ul class=\"list-items borderless\">
                                <li>
                                    Enable Notifications <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"success\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\">
                                </li>
                                <li>
                                    Allow Tracking <input type=\"checkbox\" class=\"make-switch\" data-size=\"small\" data-on-color=\"info\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\">
                                </li>
                                <li>
                                    Log Errors <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"danger\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\">
                                </li>
                                <li>
                                    Auto Sumbit Issues <input type=\"checkbox\" class=\"make-switch\" data-size=\"small\" data-on-color=\"warning\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\">
                                </li>
                                <li>
                                    Enable SMS Alerts <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"success\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\">
                                </li>
                            </ul>
                            <h3 class=\"list-heading\">System Settings</h3>
                            <ul class=\"list-items borderless\">
                                <li>
                                    Security Level
                                    <select class=\"form-control input-inline input-sm input-small\">
                                        <option value=\"1\">Normal</option>
                                        <option value=\"2\" selected>Medium</option>
                                        <option value=\"e\">High</option>
                                    </select>
                                </li>
                                <li>
                                    Failed Email Attempts <input class=\"form-control input-inline input-sm input-small\" value=\"5\"/>
                                </li>
                                <li>
                                    Secondary SMTP Port <input class=\"form-control input-inline input-sm input-small\" value=\"3560\"/>
                                </li>
                                <li>
                                    Notify On System Error <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"danger\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\">
                                </li>
                                <li>
                                    Notify On SMTP Error <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"warning\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\">
                                </li>
                            </ul>
                            <div class=\"inner-content\">
                                <button class=\"btn btn-success\"><i class=\"icon-settings\"></i> Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ", "AdminBundle:Admin/Layout:quick_sidebar.html.twig", "/var/www/html/symfonyAdminPanel/src/AdminBundle/Resources/views/Admin/Layout/quick_sidebar.html.twig");
    }
}
