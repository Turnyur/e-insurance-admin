<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Forms - SB Admin Pro</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <script data-search-pseudo-elements defer
        src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="nav-fixed">
    <nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
        <a class="navbar-brand d-none d-sm-block" href="index.html">SB Admin Pro</a><button
            class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#"><i
                data-feather="menu"></i></button>
        <form class="form-inline mr-auto d-none d-lg-block"><input class="form-control form-control-solid mr-sm-2"
                type="search" placeholder="Search" aria-label="Search" /></form>
        <ul class="navbar-nav align-items-center ml-auto">
            <li class="nav-item dropdown no-caret mr-3">
                <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="javascript:void(0);" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="d-inline d-md-none font-weight-500">Docs</div>
                    <div class="d-none d-md-inline font-weight-500">Documentation</div>
                    <i class="fas fa-chevron-right dropdown-arrow"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right py-0 o-hidden mr-n15 mr-lg-0 animated--fade-in-up"
                    aria-labelledby="navbarDropdownDocs">
                    <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro" target="_blank">
                        <div class="icon-stack bg-primary-soft text-primary mr-4"><i data-feather="book"></i></div>
                        <div>
                            <div class="small text-gray-500">Documentation</div>
                            Usage instructions and reference
                        </div>
                    </a>
                    <div class="dropdown-divider m-0"></div>
                    <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro/components"
                        target="_blank">
                        <div class="icon-stack bg-primary-soft text-primary mr-4"><i data-feather="code"></i></div>
                        <div>
                            <div class="small text-gray-500">Components</div>
                            Code snippets and reference
                        </div>
                    </a>
                    <div class="dropdown-divider m-0"></div>
                    <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro/changelog"
                        target="_blank">
                        <div class="icon-stack bg-primary-soft text-primary mr-4"><i data-feather="file-text"></i></div>
                        <div>
                            <div class="small text-gray-500">Changelog</div>
                            Updates and changes
                        </div>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown no-caret mr-3 dropdown-notifications">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts"
                    href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><i data-feather="bell"></i></a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up"
                    aria-labelledby="navbarDropdownAlerts">
                    <h6 class="dropdown-header dropdown-notifications-header"><i class="mr-2"
                            data-feather="bell"></i>Alerts Center</h6>
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <div class="dropdown-notifications-item-icon bg-warning"><i data-feather="activity"></i></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">December 29, 2019</div>
                            <div class="dropdown-notifications-item-content-text">This is an alert message. It's nothing
                                serious, but it requires your attention.</div>
                        </div>
                    </a><a class="dropdown-item dropdown-notifications-item" href="#!">
                        <div class="dropdown-notifications-item-icon bg-info"><i data-feather="bar-chart"></i></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">December 22, 2019</div>
                            <div class="dropdown-notifications-item-content-text">A new monthly report is ready. Click
                                here to view!</div>
                        </div>
                    </a><a class="dropdown-item dropdown-notifications-item" href="#!">
                        <div class="dropdown-notifications-item-icon bg-danger"><i
                                class="fas fa-exclamation-triangle"></i></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">December 8, 2019</div>
                            <div class="dropdown-notifications-item-content-text">Critical system failure, systems
                                shutting down.</div>
                        </div>
                    </a><a class="dropdown-item dropdown-notifications-item" href="#!">
                        <div class="dropdown-notifications-item-icon bg-success"><i data-feather="user-plus"></i></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">December 2, 2019</div>
                            <div class="dropdown-notifications-item-content-text">New user request. Woody has requested
                                access to the organization.</div>
                        </div>
                    </a><a class="dropdown-item dropdown-notifications-footer" href="#!">View All Alerts</a>
                </div>
            </li>
            <li class="nav-item dropdown no-caret mr-3 dropdown-notifications">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages"
                    href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><i data-feather="mail"></i></a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up"
                    aria-labelledby="navbarDropdownMessages">
                    <h6 class="dropdown-header dropdown-notifications-header"><i class="mr-2"
                            data-feather="mail"></i>Message Center</h6>
                    <a class="dropdown-item dropdown-notifications-item" href="#!"><img
                            class="dropdown-notifications-item-img"
                            src="https://source.unsplash.com/vTL_qy03D1I/60x60" />
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                            <div class="dropdown-notifications-item-content-details">Emily Fowler · 58m</div>
                        </div>
                    </a><a class="dropdown-item dropdown-notifications-item" href="#!"><img
                            class="dropdown-notifications-item-img"
                            src="https://source.unsplash.com/4ytMf8MgJlY/60x60" />
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                            <div class="dropdown-notifications-item-content-details">Diane Chambers · 2d</div>
                        </div>
                    </a><a class="dropdown-item dropdown-notifications-footer" href="#!">Read All Messages</a>
                </div>
            </li>
            <li class="nav-item dropdown no-caret mr-3 dropdown-user">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage"
                    href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><img class="img-fluid"
                        src="https://source.unsplash.com/QAB-WJcbgJk/60x60" /></a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up"
                    aria-labelledby="navbarDropdownUserImage">
                    <h6 class="dropdown-header d-flex align-items-center">
                        <img class="dropdown-user-img" src="https://source.unsplash.com/QAB-WJcbgJk/60x60" />
                        <div class="dropdown-user-details">
                            <div class="dropdown-user-details-name">Valerie Luna</div>
                            <div class="dropdown-user-details-email">vluna@aol.com</div>
                        </div>
                    </h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">
                        <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                        Account
                    </a><a class="dropdown-item" href="#!">
                        <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sidenav shadow-right sidenav-light">
                <div class="sidenav-menu">
                    <div class="nav accordion" id="accordionSidenav">
                        <div class="sidenav-menu-heading">Core</div>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
                            data-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                            <div class="nav-link-icon"><i data-feather="activity"></i></div>
                            Dashboards
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseDashboards" data-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                                <a class="nav-link" href="index.html">Default</a><a class="nav-link"
                                    href="dashboard-2.html">Multipurpose<span
                                        class="badge badge-primary ml-2">New!</span></a><a class="nav-link"
                                    href="dashboard-3.html">Affiliate<span
                                        class="badge badge-primary ml-2">New!</span></a>
                            </nav>
                        </div>
                        <div class="sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
                            data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="nav-link-icon"><i data-feather="layout"></i></div>
                            Layout
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" data-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavLayout">
                                <a class="nav-link" href="layout-static.html">Static Navigation</a><a class="nav-link"
                                    href="layout-dark.html">Dark Sidenav</a><a class="nav-link"
                                    href="layout-rtl.html">RTL Layout</a><a class="nav-link collapsed" href="#"
                                    data-toggle="collapse" data-target="#collapseLayoutsPageHeaders"
                                    aria-expanded="false" aria-controls="collapseLayoutsPageHeaders">Page Headers
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayoutsPageHeaders"
                                    data-parent="#accordionSidenavLayout">
                                    <nav class="sidenav-menu-nested nav"><a class="nav-link"
                                            href="header-simplified.html">Simplified</a><a class="nav-link"
                                            href="header-overlap.html">Content Overlap</a><a class="nav-link"
                                            href="header-breadcrumbs.html">Breadcrumbs</a><a class="nav-link"
                                            href="header-light.html">Light</a></nav>
                                </div>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
                            data-target="#collapseComponents" aria-expanded="false" aria-controls="collapseComponents">
                            <div class="nav-link-icon"><i data-feather="package"></i></div>
                            Components
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseComponents" data-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav">
                                <a class="nav-link" href="alerts.html">Alerts</a><a class="nav-link"
                                    href="avatars.html">Avatars<span class="badge badge-primary ml-2">New!</span></a><a
                                    class="nav-link" href="badges.html">Badges</a><a class="nav-link"
                                    href="buttons.html">Buttons</a><a class="nav-link" href="cards.html">Cards</a><a
                                    class="nav-link" href="dropdowns.html">Dropdowns</a><a class="nav-link"
                                    href="forms.html">Forms</a><a class="nav-link" href="modals.html">Modals</a><a
                                    class="nav-link" href="navigation.html">Navigation</a><a class="nav-link"
                                    href="progress.html">Progress</a><a class="nav-link" href="toasts.html">Toasts</a><a
                                    class="nav-link" href="tooltips.html">Tooltips</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
                            data-target="#collapseUtilities" aria-expanded="false" aria-controls="collapseUtilities">
                            <div class="nav-link-icon"><i data-feather="tool"></i></div>
                            Utilities
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseUtilities" data-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav">
                                <a class="nav-link" href="animations.html">Animations</a><a class="nav-link"
                                    href="background.html">Background<span
                                        class="badge badge-primary ml-2">New!</span></a><a class="nav-link"
                                    href="borders.html">Borders</a><a class="nav-link" href="lift.html">Lift<span
                                        class="badge badge-primary ml-2">New!</span></a><a class="nav-link"
                                    href="shadows.html">Shadows</a><a class="nav-link"
                                    href="typography.html">Typography</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
                            data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="nav-link-icon"><i data-feather="book-open"></i></div>
                            Pages
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" data-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
                                    data-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">Authentication
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" data-parent="#accordionSidenavPagesMenu">
                                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesAuth">
                                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
                                            data-target="#pagesCollapseAuthBasic" aria-expanded="false"
                                            aria-controls="pagesCollapseAuthBasic">Basic
                                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                        </a>
                                        <div class="collapse" id="pagesCollapseAuthBasic"
                                            data-parent="#accordionSidenavPagesAuth">
                                            <nav class="sidenav-menu-nested nav"><a class="nav-link"
                                                    href="login-basic.html">Login</a><a class="nav-link"
                                                    href="register-basic.html">Register</a><a class="nav-link"
                                                    href="password-basic.html">Forgot Password</a></nav>
                                        </div>
                                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
                                            data-target="#pagesCollapseAuthSocial" aria-expanded="false"
                                            aria-controls="pagesCollapseAuthSocial">Social
                                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                        </a>
                                        <div class="collapse" id="pagesCollapseAuthSocial"
                                            data-parent="#accordionSidenavPagesAuth">
                                            <nav class="sidenav-menu-nested nav"><a class="nav-link"
                                                    href="login-social.html">Login</a><a class="nav-link"
                                                    href="register-social.html">Register</a><a class="nav-link"
                                                    href="password-social.html">Forgot Password</a></nav>
                                        </div>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
                                    data-target="#pagesCollapseError" aria-expanded="false"
                                    aria-controls="pagesCollapseError">Error
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" data-parent="#accordionSidenavPagesMenu">
                                    <nav class="sidenav-menu-nested nav"><a class="nav-link" href="401.html">401
                                            Page</a><a class="nav-link" href="404.html">404 Page</a><a class="nav-link"
                                            href="404-glitch.html">404 Page (Glitch Effect)</a><a class="nav-link"
                                            href="500.html">500 Page</a></nav>
                                </div>
                                <a class="nav-link" href="blank.html">Blank</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
                            data-target="#collapseFlows" aria-expanded="false" aria-controls="collapseFlows">
                            <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                            Flows
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseFlows" data-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav"><a class="nav-link"
                                    href="multi-tenant-select.html">Multi-Tenant Registration</a></nav>
                        </div>
                        <div class="sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="charts.html">
                            <div class="nav-link-icon"><i data-feather="bar-chart"></i></div>
                            Charts
                        </a><a class="nav-link" href="tables.html">
                            <div class="nav-link-icon"><i data-feather="filter"></i></div>
                            Tables
                        </a>
                    </div>
                </div>
                <div class="sidenav-footer">
                    <div class="sidenav-footer-content">
                        <div class="sidenav-footer-subtitle">Logged in as:</div>
                        <div class="sidenav-footer-title">Valerie Luna</div>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
                    <div class="container-fluid">
                        <div class="page-header-content">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="edit-3"></i></div>
                                <span>Forms</span>
                            </h1>
                            <div class="page-header-subtitle">Dynamic form components to give your users informative and
                                intuitive inputs</div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-n10">
                    <div class="row">
                        <div class="col-lg-9">
                            <div id="default">
                                <div class="card mb-4">
                                    <div class="card-header">Default Bootstrap Form Controls</div>
                                    <div class="card-body">
                                        <div class="sbp-preview">
                                            <div class="sbp-preview-content">
                                                <form>
                                                    <div class="form-group"><label for="exampleFormControlInput1">Email
                                                            address</label><input class="form-control"
                                                            id="exampleFormControlInput1" type="email"
                                                            placeholder="name@example.com" /></div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">Example
                                                            select</label><select class="form-control"
                                                            id="exampleFormControlSelect1">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect2">Example multiple
                                                            select</label><select class="form-control"
                                                            id="exampleFormControlSelect2" multiple="">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group"><label
                                                            for="exampleFormControlTextarea1">Example
                                                            textarea</label><textarea class="form-control"
                                                            id="exampleFormControlTextarea1" rows="3"></textarea></div>
                                                </form>
                                            </div>
                                            <div class="sbp-preview-code">
                                                <!-- Code sample-->
                                                <ul class="nav nav-tabs" id="formsDefaultTabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active mr-1" id="formsDefaultHtmlTab"
                                                            data-toggle="tab" href="#formsDefaultHtml" role="tab"
                                                            aria-controls="formsDefaultHtml" aria-selected="true"><i
                                                                class="fab fa-html5 text-orange mr-1"></i>HTML</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="formsDefaultPugTab" data-toggle="tab"
                                                            href="#formsDefaultPug" role="tab"
                                                            aria-controls="formsDefaultPug" aria-selected="false"><img
                                                                class="img-pug mr-1" src="assets/img/pug.svg" />PUG</a>
                                                    </li>
                                                </ul>
                                                <!-- Tab panes-->
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="formsDefaultHtml" role="tabpanel"
                                                        aria-labelledby="formsDefaultHtmlTab">
                                                        <pre class="language-markup"><code><script type="text/plain"><form>
    <div class="form-group"><label for="exampleFormControlInput1">Email address</label><input class="form-control" id="exampleFormControlInput1" type="email" placeholder="name@example.com"></div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Example select</label><select class="form-control" id="exampleFormControlSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect2">Example multiple select</label><select class="form-control" id="exampleFormControlSelect2" multiple="">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <div class="form-group"><label for="exampleFormControlTextarea1">Example textarea</label><textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea></div>
</form></script></code></pre>
                                                    </div>
                                                    <div class="tab-pane" id="formsDefaultPug" role="tabpanel"
                                                        aria-labelledby="formsDefaultPugTab">
                                                        <pre class="language-pug"><code>form
    .form-group
        label(for='exampleFormControlInput1') Email address
        input#exampleFormControlInput1.form-control(type='email', placeholder='name@example.com')
    .form-group
        label(for='exampleFormControlSelect1') Example select
        select#exampleFormControlSelect1.form-control
            option 1
            option 2
            option 3
            option 4
            option 5
    .form-group
        label(for='exampleFormControlSelect2') Example multiple select
        select#exampleFormControlSelect2.form-control(multiple='')
            option 1
            option 2
            option 3
            option 4
            option 5
    .form-group
        label(for='exampleFormControlTextarea1') Example textarea
        textarea#exampleFormControlTextarea1.form-control(rows='3')
</code></pre>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sbp-preview-text">The default Bootstrap form control states have
                                                been restyled to fit the SB Admin Pro theme. The style has changed, but
                                                the markup is identical.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="solid">
                                <div class="card mb-4">
                                    <div class="card-header">Custom Solid Form Controls</div>
                                    <div class="card-body">
                                        <div class="sbp-preview">
                                            <div class="sbp-preview-content">
                                                <form>
                                                    <div class="form-group"><label for="exampleFormControlInput1">Email
                                                            address</label><input
                                                            class="form-control form-control-solid"
                                                            id="exampleFormControlInput1" type="email"
                                                            placeholder="name@example.com" /></div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">Example
                                                            select</label><select
                                                            class="form-control form-control-solid"
                                                            id="exampleFormControlSelect1">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect2">Example multiple
                                                            select</label><select
                                                            class="form-control form-control-solid"
                                                            id="exampleFormControlSelect2" multiple="">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group"><label
                                                            for="exampleFormControlTextarea1">Example
                                                            textarea</label><textarea
                                                            class="form-control form-control-solid"
                                                            id="exampleFormControlTextarea1" rows="3"></textarea></div>
                                                </form>
                                            </div>
                                            <div class="sbp-preview-code">
                                                <!-- Code sample-->
                                                <ul class="nav nav-tabs" id="formsSolidTabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active mr-1" id="formsSolidHtmlTab"
                                                            data-toggle="tab" href="#formsSolidHtml" role="tab"
                                                            aria-controls="formsSolidHtml" aria-selected="true"><i
                                                                class="fab fa-html5 text-orange mr-1"></i>HTML</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="formsSolidPugTab" data-toggle="tab"
                                                            href="#formsSolidPug" role="tab"
                                                            aria-controls="formsSolidPug" aria-selected="false"><img
                                                                class="img-pug mr-1" src="assets/img/pug.svg" />PUG</a>
                                                    </li>
                                                </ul>
                                                <!-- Tab panes-->
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="formsSolidHtml" role="tabpanel"
                                                        aria-labelledby="formsSolidHtmlTab">
                                                        <pre class="language-markup"><code><script type="text/plain"><form>
    <div class="form-group"><label for="exampleFormControlInput1">Email address</label><input class="form-control form-control-solid" id="exampleFormControlInput1" type="email" placeholder="name@example.com"></div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Example select</label><select class="form-control form-control-solid" id="exampleFormControlSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect2">Example multiple select</label><select class="form-control form-control-solid" id="exampleFormControlSelect2" multiple="">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <div class="form-group"><label for="exampleFormControlTextarea1">Example textarea</label><textarea class="form-control form-control-solid" id="exampleFormControlTextarea1" rows="3"></textarea></div>
</form></script></code></pre>
                                                    </div>
                                                    <div class="tab-pane" id="formsSolidPug" role="tabpanel"
                                                        aria-labelledby="formsSolidPugTab">
                                                        <pre class="language-pug"><code>form
    .form-group
        label(for='exampleFormControlInput1') Email address
        input#exampleFormControlInput1.form-control.form-control-solid(type='email', placeholder='name@example.com')
    .form-group
        label(for='exampleFormControlSelect1') Example select
        select#exampleFormControlSelect1.form-control.form-control-solid
            option 1
            option 2
            option 3
            option 4
            option 5
    .form-group
        label(for='exampleFormControlSelect2') Example multiple select
        select#exampleFormControlSelect2.form-control.form-control-solid(multiple='')
            option 1
            option 2
            option 3
            option 4
            option 5
    .form-group
        label(for='exampleFormControlTextarea1') Example textarea
        textarea#exampleFormControlTextarea1.form-control.form-control-solid(rows='3')
</code></pre>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sbp-preview-text">Custom solid form controls have been developed
                                                as an alternative to the default form styling. Use them by appending the
                                                <code>.form-control-solid</code> to the normal
                                                <code>.form-control</code> class.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="checkbox">
                                <div class="card mb-4">
                                    <div class="card-header">Custom Checkboxes &amp; Radio</div>
                                    <div class="card-body">
                                        <h6 class="small text-muted font-weight-500">Bootstrap Custom Checkboxes:</h6>
                                        <div class="sbp-preview mb-4">
                                            <div class="sbp-preview-content">
                                                <div class="custom-control custom-checkbox"><input
                                                        class="custom-control-input" id="customCheck1"
                                                        type="checkbox" /><label class="custom-control-label"
                                                        for="customCheck1">Custom Checkbox 1</label></div>
                                                <div class="custom-control custom-checkbox"><input
                                                        class="custom-control-input" id="customCheck2"
                                                        type="checkbox" /><label class="custom-control-label"
                                                        for="customCheck2">Custom Checkbox 2</label></div>
                                                <div class="custom-control custom-checkbox"><input
                                                        class="custom-control-input" id="customCheck3" type="checkbox"
                                                        disabled /><label class="custom-control-label"
                                                        for="customCheck3">Custom Checkbox (Disabled)</label></div>
                                            </div>
                                            <div class="sbp-preview-code">
                                                <!-- Code sample-->
                                                <ul class="nav nav-tabs" id="formsCheckboxesTabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active mr-1" id="formsCheckboxesHtmlTab"
                                                            data-toggle="tab" href="#formsCheckboxesHtml" role="tab"
                                                            aria-controls="formsCheckboxesHtml" aria-selected="true"><i
                                                                class="fab fa-html5 text-orange mr-1"></i>HTML</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="formsCheckboxesPugTab" data-toggle="tab"
                                                            href="#formsCheckboxesPug" role="tab"
                                                            aria-controls="formsCheckboxesPug"
                                                            aria-selected="false"><img class="img-pug mr-1"
                                                                src="assets/img/pug.svg" />PUG</a>
                                                    </li>
                                                </ul>
                                                <!-- Tab panes-->
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="formsCheckboxesHtml"
                                                        role="tabpanel" aria-labelledby="formsCheckboxesHtmlTab">
                                                        <pre class="language-markup"><code><script type="text/plain"><div class="custom-control custom-checkbox">
    <input class="custom-control-input" id="customCheck1" type="checkbox">
    <label class="custom-control-label" for="customCheck1">Custom Checkbox 1</label>
</div>
<div class="custom-control custom-checkbox">
    <input class="custom-control-input" id="customCheck2" type="checkbox">
    <label class="custom-control-label" for="customCheck2">Custom Checkbox 2</label>
</div>
<div class="custom-control custom-checkbox">
    <input class="custom-control-input" id="customCheck3" type="checkbox" disabled="">
    <label class="custom-control-label" for="customCheck3">Custom Checkbox (Disabled)</label>
</div></script></code></pre>
                                                    </div>
                                                    <div class="tab-pane" id="formsCheckboxesPug" role="tabpanel"
                                                        aria-labelledby="formsCheckboxesPugTab">
                                                        <pre class="language-pug"><code>.custom-control.custom-checkbox
    input#customCheck1.custom-control-input(type='checkbox')
    label.custom-control-label(for='customCheck1') Custom Checkbox 1
.custom-control.custom-checkbox
    input#customCheck2.custom-control-input(type='checkbox')
    label.custom-control-label(for='customCheck2') Custom Checkbox 2
.custom-control.custom-checkbox
    input#customCheck3.custom-control-input(type='checkbox', disabled)
    label.custom-control-label(for='customCheck3') Custom Checkbox (Disabled)</code></pre>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sbp-preview-text">Bootstrap's custom checkbox styling has been
                                                modified for the SB Admin Pro theme.</div>
                                        </div>
                                        <h6 class="small text-muted font-weight-500">Bootstrap Custom Radio:</h6>
                                        <div class="sbp-preview">
                                            <div class="sbp-preview-content">
                                                <div class="custom-control custom-radio"><input
                                                        class="custom-control-input" id="customRadio1" type="radio"
                                                        name="customRadio" /><label class="custom-control-label"
                                                        for="customRadio1">Toggle this custom radio</label></div>
                                                <div class="custom-control custom-radio"><input
                                                        class="custom-control-input" id="customRadio2" type="radio"
                                                        name="customRadio" /><label class="custom-control-label"
                                                        for="customRadio2">Or toggle this other custom radio</label>
                                                </div>
                                                <div class="custom-control custom-radio"><input
                                                        class="custom-control-input" id="customRadio3" type="radio"
                                                        name="customRadio" disabled /><label
                                                        class="custom-control-label" for="customRadio3">This radio is
                                                        disabled</label></div>
                                            </div>
                                            <div class="sbp-preview-code">
                                                <!-- Code sample-->
                                                <ul class="nav nav-tabs" id="formsRadioTabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active mr-1" id="formsRadioHtmlTab"
                                                            data-toggle="tab" href="#formsRadioHtml" role="tab"
                                                            aria-controls="formsRadioHtml" aria-selected="true"><i
                                                                class="fab fa-html5 text-orange mr-1"></i>HTML</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="formsRadioPugTab" data-toggle="tab"
                                                            href="#formsRadioPug" role="tab"
                                                            aria-controls="formsRadioPug" aria-selected="false"><img
                                                                class="img-pug mr-1" src="assets/img/pug.svg" />PUG</a>
                                                    </li>
                                                </ul>
                                                <!-- Tab panes-->
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="formsRadioHtml" role="tabpanel"
                                                        aria-labelledby="formsRadioHtmlTab">
                                                        <pre class="language-markup"><code><script type="text/plain"><div class="custom-control custom-radio">
    <input class="custom-control-input" id="customRadio1" type="radio" name="customRadio">
    <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
</div>
<div class="custom-control custom-radio">
    <input class="custom-control-input" id="customRadio2" type="radio" name="customRadio">
    <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
</div>
<div class="custom-control custom-radio">
    <input class="custom-control-input" id="customRadio3" type="radio" name="customRadio" disabled="">
    <label class="custom-control-label" for="customRadio3">This radio is disabled</label>
</div></script></code></pre>
                                                    </div>
                                                    <div class="tab-pane" id="formsRadioPug" role="tabpanel"
                                                        aria-labelledby="formsRadioPugTab">
                                                        <pre class="language-pug"><code>.custom-control.custom-radio
    input#customRadio1.custom-control-input(type='radio', name='customRadio')
    label.custom-control-label(for='customRadio1') Toggle this custom radio
.custom-control.custom-radio
    input#customRadio2.custom-control-input(type='radio', name='customRadio')
    label.custom-control-label(for='customRadio2') Or toggle this other custom radio
.custom-control.custom-radio
    input#customRadio3.custom-control-input(type='radio', name='customRadio', disabled)
    label.custom-control-label(for='customRadio3') This radio is disabled</code></pre>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sbp-preview-text">Bootstrap's custom radio styling has also been
                                                modified for the SB Admin Pro theme.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="checkboxSolid">
                                <div class="card mb-4">
                                    <div class="card-header">Solid Checkboxes &amp; Radio</div>
                                    <div class="card-body">
                                        <h6 class="small text-muted font-weight-500">Custom Solid Checkboxes:</h6>
                                        <div class="sbp-preview mb-4">
                                            <div class="sbp-preview-content">
                                                <div class="custom-control custom-checkbox custom-control-solid"><input
                                                        class="custom-control-input" id="customCheckSolid1"
                                                        type="checkbox" /><label class="custom-control-label"
                                                        for="customCheckSolid1">Custom Checkbox 1</label></div>
                                                <div class="custom-control custom-checkbox custom-control-solid"><input
                                                        class="custom-control-input" id="customCheckSolid2"
                                                        type="checkbox" /><label class="custom-control-label"
                                                        for="customCheckSolid2">Custom Checkbox 2</label></div>
                                                <div class="custom-control custom-checkbox custom-control-solid"><input
                                                        class="custom-control-input" id="customCheckSolid3"
                                                        type="checkbox" disabled /><label class="custom-control-label"
                                                        for="customCheckSolid3">Custom Checkbox (Disabled)</label></div>
                                            </div>
                                            <div class="sbp-preview-code">
                                                <!-- Code sample-->
                                                <ul class="nav nav-tabs" id="formsCheckboxesSolidTabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active mr-1" id="formsCheckboxesSolidHtmlTab"
                                                            data-toggle="tab" href="#formsCheckboxesSolidHtml"
                                                            role="tab" aria-controls="formsCheckboxesSolidHtml"
                                                            aria-selected="true"><i
                                                                class="fab fa-html5 text-orange mr-1"></i>HTML</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="formsCheckboxesSolidPugTab"
                                                            data-toggle="tab" href="#formsCheckboxesSolidPug" role="tab"
                                                            aria-controls="formsCheckboxesSolidPug"
                                                            aria-selected="false"><img class="img-pug mr-1"
                                                                src="assets/img/pug.svg" />PUG</a>
                                                    </li>
                                                </ul>
                                                <!-- Tab panes-->
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="formsCheckboxesSolidHtml"
                                                        role="tabpanel" aria-labelledby="formsCheckboxesSolidHtmlTab">
                                                        <pre class="language-markup"><code><script type="text/plain"><div class="custom-control custom-checkbox custom-control-solid">
    <input class="custom-control-input" id="customCheckSolid1" type="checkbox">
    <label class="custom-control-label" for="customCheckSolid1">Custom Checkbox 1</label>
</div>
<div class="custom-control custom-checkbox custom-control-solid">
    <input class="custom-control-input" id="customCheckSolid2" type="checkbox">
    <label class="custom-control-label" for="customCheckSolid2">Custom Checkbox 2</label>
</div>
<div class="custom-control custom-checkbox custom-control-solid">
    <input class="custom-control-input" id="customCheckSolid3" type="checkbox" disabled="">
    <label class="custom-control-label" for="customCheckSolid3">Custom Checkbox (Disabled)</label>
</div></script></code></pre>
                                                    </div>
                                                    <div class="tab-pane" id="formsCheckboxesSolidPug" role="tabpanel"
                                                        aria-labelledby="formsCheckboxesSolidPugTab">
                                                        <pre class="language-pug"><code>.custom-control.custom-checkbox.custom-control-solid
    input#customCheckSolid1.custom-control-input(type='checkbox')
    label.custom-control-label(for='customCheckSolid1') Custom Checkbox 1
.custom-control.custom-checkbox.custom-control-solid
    input#customCheckSolid2.custom-control-input(type='checkbox')
    label.custom-control-label(for='customCheckSolid2') Custom Checkbox 2
.custom-control.custom-checkbox.custom-control-solid
    input#customCheckSolid3.custom-control-input(type='checkbox', disabled)
    label.custom-control-label(for='customCheckSolid3') Custom Checkbox (Disabled)</code></pre>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sbp-preview-text">The <code>.custom-control-solid</code> can be
                                                used with a <code>.custom-control</code> class to get a solid styling
                                                for custom checkboxes.</div>
                                        </div>
                                        <h6 class="small text-muted font-weight-500">Custom Solid Radio:</h6>
                                        <div class="sbp-preview">
                                            <div class="sbp-preview-content">
                                                <div class="custom-control custom-radio custom-control-solid"><input
                                                        class="custom-control-input" id="customRadioSolid1" type="radio"
                                                        name="customRadioSolid" /><label class="custom-control-label"
                                                        for="customRadioSolid1">Toggle this custom radio</label></div>
                                                <div class="custom-control custom-radio custom-control-solid"><input
                                                        class="custom-control-input" id="customRadioSolid2" type="radio"
                                                        name="customRadioSolid" /><label class="custom-control-label"
                                                        for="customRadioSolid2">Or toggle this other custom
                                                        radio</label></div>
                                                <div class="custom-control custom-radio custom-control-solid"><input
                                                        class="custom-control-input" id="customRadioSolid3" type="radio"
                                                        name="customRadioSolid" disabled /><label
                                                        class="custom-control-label" for="customRadioSolid3">This radio
                                                        is disabled</label></div>
                                            </div>
                                            <div class="sbp-preview-code">
                                                <!-- Code sample-->
                                                <ul class="nav nav-tabs" id="formsRadioSolidTabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active mr-1" id="formsRadioSolidHtmlTab"
                                                            data-toggle="tab" href="#formsRadioSolidHtml" role="tab"
                                                            aria-controls="formsRadioSolidHtml" aria-selected="true"><i
                                                                class="fab fa-html5 text-orange mr-1"></i>HTML</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="formsRadioSolidPugTab" data-toggle="tab"
                                                            href="#formsRadioSolidPug" role="tab"
                                                            aria-controls="formsRadioSolidPug"
                                                            aria-selected="false"><img class="img-pug mr-1"
                                                                src="assets/img/pug.svg" />PUG</a>
                                                    </li>
                                                </ul>
                                                <!-- Tab panes-->
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="formsRadioSolidHtml"
                                                        role="tabpanel" aria-labelledby="formsRadioSolidHtmlTab">
                                                        <pre class="language-markup"><code><script type="text/plain"><div class="custom-control custom-radio custom-control-solid">
    <input class="custom-control-input" id="customRadioSolid1" type="radio" name="customRadioSolid">
    <label class="custom-control-label" for="customRadioSolid1">Toggle this custom radio</label>
</div>
<div class="custom-control custom-radio custom-control-solid">
    <input class="custom-control-input" id="customRadioSolid2" type="radio" name="customRadioSolid">
    <label class="custom-control-label" for="customRadioSolid2">Or toggle this other custom radio</label>
</div>
<div class="custom-control custom-radio custom-control-solid">
    <input class="custom-control-input" id="customRadioSolid3" type="radio" name="customRadioSolid" disabled="">
    <label class="custom-control-label" for="customRadioSolid3">This radio is disabled</label>
</div></script></code></pre>
                                                    </div>
                                                    <div class="tab-pane" id="formsRadioSolidPug" role="tabpanel"
                                                        aria-labelledby="formsRadioSolidPugTab">
                                                        <pre class="language-pug"><code>.custom-control.custom-radio.custom-control-solid
    input#customRadioSolid1.custom-control-input(type='radio', name='customRadioSolid')
    label.custom-control-label(for='customRadioSolid1') Toggle this custom radio
.custom-control.custom-radio.custom-control-solid
    input#customRadioSolid2.custom-control-input(type='radio', name='customRadioSolid')
    label.custom-control-label(for='customRadioSolid2') Or toggle this other custom radio
.custom-control.custom-radio.custom-control-solid
    input#customRadioSolid3.custom-control-input(type='radio', name='customRadioSolid', disabled)
    label.custom-control-label(for='customRadioSolid3') This radio is disabled</code></pre>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sbp-preview-text">The <code>.custom-control-solid</code> works
                                                with custom radios as well.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-icon mb-4">
                                <div class="row no-gutters">
                                    <div class="col-auto card-icon-aside bg-secondary"><i
                                            class="mr-1 text-white-50 fab fa-bootstrap"></i></div>
                                    <div class="col">
                                        <div class="card-body py-5">
                                            <h5 class="card-title">Bootstrap Documentation Available</h5>
                                            <p class="card-text">Forms are a default component included with the
                                                Bootstrap framework. For more information on implementing, modifying,
                                                and extending the usage of forms within your project, visit the official
                                                Bootstrap forms documentation page.</p>
                                            <a class="btn btn-secondary btn-sm"
                                                href="https://getbootstrap.com/docs/4.4/components/forms/"
                                                target="_blank"><i class="mr-1" data-feather="external-link"></i>Visit
                                                Bootstrap Forms Docs</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="nav-sticky">
                                <div class="card">
                                    <div class="card-body">
                                        <ul class="nav flex-column" id="stickyNav">
                                            <li class="nav-item"><a class="nav-link" href="#default">Default Form
                                                    Controls</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#solid">Solid Form
                                                    Controls</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#checkbox">Default Checkboxes
                                                    &amp; Radio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#checkboxSolid">Solid
                                                    Checkboxes &amp; Radio</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="footer mt-auto footer-light">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 small">Copyright &copy; Your Website 2020</div>
                        <div class="col-md-6 text-md-right small">
                            <a href="#!">Privacy Policy</a>
                            &middot;
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.17.1/components/prism-core.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.17.1/plugins/autoloader/prism-autoloader.min.js"
        crossorigin="anonymous"></script>
</body>

</html>
