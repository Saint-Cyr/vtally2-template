<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<body>
<div><!--BEGIN THEME SETTING-->
    <div id="theme-setting">
        <div class="content-theme-setting"><h4 class="mtn">Theme Styles</h4><select id="list-style" class="form-control">
            <option value="style1">Flat Squared style</option>
            <option value="style2">Flat Rounded style</option>
            <option value="style3" selected="selected">Flat Border style</option>
        </select><br/><h4 class="mtn">Theme Colors</h4>
            <ul id="list-color" class="list-unstyled list-inline">
                <li data-color="green-dark" data-hover="tooltip" title="Green - Dark" class="green-dark"></li>
                <li data-color="red-dark" data-hover="tooltip" title="Red - Dark" class="red-dark"></li>
                <li data-color="pink-dark" data-hover="tooltip" title="Pink - Dark" class="pink-dark"></li>
                <li data-color="blue-dark" data-hover="tooltip" title="Blue - Dark" class="blue-dark"></li>
                <li data-color="yellow-dark" data-hover="tooltip" title="Yellow - Dark" class="yellow-dark"></li>
                <li data-color="green-grey" data-hover="tooltip" title="Green - Grey" class="green-grey"></li>
                <li data-color="red-grey" data-hover="tooltip" title="Red - Grey" class="red-grey"></li>
                <li data-color="pink-grey" data-hover="tooltip" title="Pink - Grey" class="pink-grey"></li>
                <li data-color="blue-grey" data-hover="tooltip" title="Blue - Grey" class="blue-grey"></li>
                <li data-color="yellow-grey" data-hover="tooltip" title="Yellow - Grey" class="yellow-grey"></li>
                <li data-color="yellow-green" data-hover="tooltip" title="Yellow - Green" class="yellow-green"></li>
                <li data-color="orange-grey" data-hover="tooltip" title="Orange - Grey" class="orange-grey"></li>
                <li data-color="pink-blue" data-hover="tooltip" title="Pink - Blue" class="pink-blue"></li>
                <li data-color="pink-violet" data-hover="tooltip" title="Pink - Violet" class="pink-violet active"></li>
                <li data-color="orange-violet" data-hover="tooltip" title="Orange - Violet" class="orange-violet"></li>
                <li data-color="pink-green" data-hover="tooltip" title="Pink - Green" class="pink-green"></li>
                <li data-color="pink-brown" data-hover="tooltip" title="Pink - Brown" class="pink-brown"></li>
                <li data-color="orange-blue" data-hover="tooltip" title="Orange - Blue" class="orange-blue"></li>
                <li data-color="yellow-blue" data-hover="tooltip" title="Yellow - Blue" class="yellow-blue"></li>
                <li data-color="green-blue" data-hover="tooltip" title="Green - Blue" class="green-blue"></li>
            </ul>
        </div>
    </div>
    <!--END THEME SETTING--><!--BEGIN BACK TO TOP--><a id="totop" href="#"><i class="fa fa-angle-up"></i></a><!--END BACK TO TOP--><!--BEGIN TOPBAR-->
    <div id="header-topbar-option-demo" class="page-header-topbar">
        <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" data-intro="&lt;b&gt;Topbar&lt;/b&gt; has other styles with live demo. Go to &lt;b&gt;Layouts-&gt;Header&amp;Topbar&lt;/b&gt; and check it out." class="navbar navbar-default navbar-static-top">
            <div class="navbar-header logo-collapsed">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="index.php" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">VTALLY2</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs hidden"><i class="fa fa-bars"></i></a>
                <ul class="nav navbar-nav    ">
                    <li class="active"><a href="index.php">Dashboard</a></li>
                    <li><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle">Layouts
                        &nbsp;<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="layout-left-sidebar.html">Left Sidebar</a></li>
                            <li><a href="layout-right-sidebar.html">Right Sidebar</a></li>
                            <li><a href="layout-left-sidebar-collasped.html">Left Sidebar Collasped</a></li>
                            <li><a href="layout-right-sidebar-collasped.html">Right Sidebar Collasped</a></li>
                            <li class="dropdown-submenu"><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle">More Options</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Second level link</a></li>
                                    <li class="dropdown-submenu"><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle">More Options</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Third level link</a></li>
                                            <li><a href="#">Third level link</a></li>
                                            <li><a href="#">Third level link</a></li>
                                            <li><a href="#">Third level link</a></li>
                                            <li><a href="#">Third level link</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Second level link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="mega-menu-dropdown mega-menu-full"><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle">Extras
                        &nbsp;<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="mega-menu-content">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <ul class="col-md-4 mega-menu-submenu">
                                                <li><h3>Neque porro quisquam</h3></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Lorem ipsum dolor sit amet</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Consectetur adipisicing elit</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Sed ut perspiciatis unde omnis</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>At vero eos et accusamus et iusto</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Nam libero tempore cum soluta</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Et harum quidem rerum facilis est</a></li>
                                            </ul>
                                            <ul class="col-md-4 mega-menu-submenu">
                                                <li><h3>Neque porro quisquam</h3></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Lorem ipsum dolor sit amet</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Consectetur adipisicing elit</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Sed ut perspiciatis unde omnis</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>At vero eos et accusamus et iusto</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Nam libero tempore cum soluta</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Et harum quidem rerum facilis est</a></li>
                                            </ul>
                                            <ul class="col-md-4 mega-menu-submenu">
                                                <li><h3>Neque porro quisquam</h3></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Lorem ipsum dolor sit amet</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Consectetur adipisicing elit</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Sed ut perspiciatis unde omnis</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>At vero eos et accusamus et iusto</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Nam libero tempore cum soluta</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Et harum quidem rerum facilis est</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-5 document-demo">
                                            <ul class="col-md-4 mega-menu-submenu">
                                                <li><a href="#"><i class="fa fa-info-circle"></i><span>Introduction</span></a></li>
                                                <li><a href="#"><i class="fa fa-download"></i><span>Installation</span></a></li>
                                            </ul>
                                            <ul class="col-md-4 mega-menu-submenu">
                                                <li><a href="#"><i class="fa fa-cog"></i><span>T3 Settings</span></a></li>
                                                <li><a href="#"><i class="fa fa-desktop"></i><span>Layout System</span></a></li>
                                            </ul>
                                            <ul class="col-md-4 mega-menu-submenu">
                                                <li><a href="#"><i class="fa fa-magic"></i><span>Customization</span></a></li>
                                                <li><a href="#"><i class="fa fa-question-circle"></i><span>FAQs</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                
                <div class="news-update-box hidden-xs"><span class="text-uppercase mrm pull-left">News:</span>
                    <ul id="news-update" class="ticker list-unstyled">
                        <li>Presidential: <span style="font-size: 15px;">NPP is leading NDC by 12 representing 0.1% of total vote cast</span></li>
                        <li>Parliamentary: Indenpent Candiates are getting majority by the diffence of 3 sites (0.3%)</li>
                    </ul>
                </div>
                
                <ul class="nav navbar navbar-top-links navbar-right mbn" id="notification">
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-file-text"></i><span class="badge badge-red">3</span></a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li><p>Pr. Pink Sheet mismatch (2)</p></li>
                            <li>
                                <div class="dropdown-slimscroll">
                                    <ul>
                                        <li><a href="#"><span class="label label-red"><i class="fa fa-file-text-o"></i></span>New Comment<span class="pull-right text-muted small">4 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-red"><i class="fa fa-file-text-o"></i></span>3 New Followers<span class="pull-right text-muted small">12 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-red"><i class="fa fa-file-text-o"></i></span>Message Sent<span class="pull-right text-muted small">15 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-red"><i class="fa fa-file-text-o"></i></span>New Task<span class="pull-right text-muted small">18 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-red"><i class="fa fa-file-text-o"></i></span>Server Rebooted<span class="pull-right text-muted small">19 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-red"><i class="fa fa-file-text-o"></i></span>New Task<span class="pull-right text-muted small">2 days ago</span></a></li>
                                        <li><a href="#"><span class="label label-red"><i class="fa fa-file-text-o"></i></span>Message Sent<span class="pull-right text-muted small">5 days ago</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="last"><a href="#" class="text-right">See all alerts</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-file-text"></i><span class="badge badge-red">3</span></a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li><p>Pa. Pink Sheet mismatch (2)</p></li>
                            <li>
                                <div class="dropdown-slimscroll">
                                    <ul>
                                        <li><a href="#"><span class="label label-red"><i class="fa fa-file-text-o"></i></span>New Comment<span class="pull-right text-muted small">4 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-red"><i class="fa fa-file-text-o"></i></span>3 New Followers<span class="pull-right text-muted small">12 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-red"><i class="fa fa-file-text-o"></i></span>Message Sent<span class="pull-right text-muted small">15 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-red"><i class="fa fa-file-text-o"></i></span>New Task<span class="pull-right text-muted small">18 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-red"><i class="fa fa-file-text-o"></i></span>Server Rebooted<span class="pull-right text-muted small">19 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-red"><i class="fa fa-file-text-o"></i></span>New Task<span class="pull-right text-muted small">2 days ago</span></a></li>
                                        <li><a href="#"><span class="label label-red"><i class="fa fa-file-text-o"></i></span>Message Sent<span class="pull-right text-muted small">5 days ago</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="last"><a href="#" class="text-right">See all alerts</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-bell fa-fw"></i><span class="badge badge-green">3</span></a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li><p>Collation Center (13)</p></li>
                            <li>
                                <div class="dropdown-slimscroll">
                                    <ul>
                                        <li><a href="#"><span class="label label-green"><i class="fa fa-bell"></i></span>New Comment<span class="pull-right text-muted small">4 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-green"><i class="fa fa-bell"></i></span>3 New Followers<span class="pull-right text-muted small">12 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-green"><i class="fa fa-bell"></i></span>Message Sent<span class="pull-right text-muted small">15 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-green"><i class="fa fa-bell"></i></span>New Task<span class="pull-right text-muted small">18 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-green"><i class="fa fa-bell"></i></span>Server Rebooted<span class="pull-right text-muted small">19 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-green"><i class="fa fa-bell"></i></span>New Task<span class="pull-right text-muted small">2 days ago</span></a></li>
                                        <li><a href="#"><span class="label label-green"><i class="fa fa-bell"></i></span>Message Sent<span class="pull-right text-muted small">5 days ago</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="last"><a href="#" class="text-right">See all alerts</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-bell fa-fw"></i><span class="badge badge-red">3</span></a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li><p>Over-voting (2)</p></li>
                            <li>
                                <div class="dropdown-slimscroll">
                                    <ul>
                                        <li><a href="#"><span class="label label-red"><i class="fa fa-bell"></i></span>New Comment<span class="pull-right text-muted small">4 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-red"><i class="fa fa-bell"></i></span>3 New Followers<span class="pull-right text-muted small">12 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-red"><i class="fa fa-bell"></i></span>Message Sent<span class="pull-right text-muted small">15 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-red"><i class="fa fa-bell"></i></span>New Task<span class="pull-right text-muted small">18 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-red"><i class="fa fa-bell"></i></span>Server Rebooted<span class="pull-right text-muted small">19 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-red"><i class="fa fa-bell"></i></span>New Task<span class="pull-right text-muted small">2 days ago</span></a></li>
                                        <li><a href="#"><span class="label label-red"><i class="fa fa-bell"></i></span>Message Sent<span class="pull-right text-muted small">5 days ago</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="last"><a href="#" class="text-right">See all alerts</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-bell fa-fw"></i><span class="badge badge-yellow">3</span></a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li><p>Pre. Vote mismatch (23)</p></li>
                            <li>
                                <div class="dropdown-slimscroll">
                                    <ul>
                                        <li><a href="#"><span class="label label-yellow"><i class="fa fa-bell"></i></span>New Comment<span class="pull-right text-muted small">4 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-yellow"><i class="fa fa-bell"></i></span>3 New Followers<span class="pull-right text-muted small">12 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-yellow"><i class="fa fa-bell"></i></span>Message Sent<span class="pull-right text-muted small">15 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-yellow"><i class="fa fa-bell"></i></span>New Task<span class="pull-right text-muted small">18 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-yellow"><i class="fa fa-bell"></i></span>Server Rebooted<span class="pull-right text-muted small">19 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-yellow"><i class="fa fa-bell"></i></span>New Task<span class="pull-right text-muted small">2 days ago</span></a></li>
                                        <li><a href="#"><span class="label label-yellow"><i class="fa fa-bell"></i></span>Message Sent<span class="pull-right text-muted small">5 days ago</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="last"><a href="#" class="text-right">See all alerts</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-bell fa-fw"></i><span class="badge badge-yellow">3</span></a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li><p>Par. Vote mismatch (23)</p></li>
                            <li>
                                <div class="dropdown-slimscroll">
                                    <ul>
                                        <li><a href="#"><span class="label label-yellow"><i class="fa fa-bell"></i></span>New Comment<span class="pull-right text-muted small">4 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-yellow"><i class="fa fa-bell"></i></span>3 New Followers<span class="pull-right text-muted small">12 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-yellow"><i class="fa fa-bell"></i></span>Message Sent<span class="pull-right text-muted small">15 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-yellow"><i class="fa fa-bell"></i></span>New Task<span class="pull-right text-muted small">18 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-yellow"><i class="fa fa-bell"></i></span>Server Rebooted<span class="pull-right text-muted small">19 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-yellow"><i class="fa fa-bell"></i></span>New Task<span class="pull-right text-muted small">2 days ago</span></a></li>
                                        <li><a href="#"><span class="label label-yellow"><i class="fa fa-bell"></i></span>Message Sent<span class="pull-right text-muted small">5 days ago</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="last"><a href="#" class="text-right">See all alerts</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-bell fa-fw"></i><span class="badge badge-blue">3</span></a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li><p>Matching Vote (7)</p></li>
                            <li>
                                <div class="dropdown-slimscroll">
                                    <ul>
                                        <li><a href="#"><span class="label label-blue"><i class="fa fa-bell"></i></span>New Comment<span class="pull-right text-muted small">4 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-blue"><i class="fa fa-bell"></i></span>3 New Followers<span class="pull-right text-muted small">12 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-blue"><i class="fa fa-bell"></i></span>Message Sent<span class="pull-right text-muted small">15 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-blue"><i class="fa fa-bell"></i></span>New Task<span class="pull-right text-muted small">18 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-blue"><i class="fa fa-bell"></i></span>Server Rebooted<span class="pull-right text-muted small">19 mins ago</span></a></li>
                                        <li><a href="#"><span class="label label-blue"><i class="fa fa-bell"></i></span>New Task<span class="pull-right text-muted small">2 days ago</span></a></li>
                                        <li><a href="#"><span class="label label-blue"><i class="fa fa-bell"></i></span>Message Sent<span class="pull-right text-muted small">5 days ago</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="last"><a href="#" class="text-right">See all alerts</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-users"></i><span class="badge badge-orange">7</span></a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li><p>14 new verifiers connected</p></li>
                            <li>
                                <div class="dropdown-slimscroll">
                                    <ul>
                                        <li><a href="#"><span class="avatar"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/48.jpg" alt="" class="img-responsive img-circle"/></span><span class="info"><span class="name">Jessica Spencer</span><span class="desc">Lorem ipsum dolor sit amet...</span></span></a></li>
                                        <li><a href="#"><span class="avatar"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/48.jpg" alt="" class="img-responsive img-circle"/></span><span class="info"><span class="name">John Smith<span class="label label-blue pull-right">New</span></span><span class="desc">Lorem ipsum dolor sit amet...</span></span></a></li>
                                        <li><a href="#"><span class="avatar"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/48.jpg" alt="" class="img-responsive img-circle"/></span><span class="info"><span class="name">John Doe<span class="label label-orange pull-right">10 min</span></span><span class="desc">Lorem ipsum dolor sit amet...</span></span></a></li>
                                        <li><a href="#"><span class="avatar"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/48.jpg" alt="" class="img-responsive img-circle"/></span><span class="info"><span class="name">John Smith</span><span class="desc">Lorem ipsum dolor sit amet...</span></span></a></li>
                                        <li><a href="#"><span class="avatar"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/48.jpg" alt="" class="img-responsive img-circle"/></span><span class="info"><span class="name">John Smith</span><span class="desc">Lorem ipsum dolor sit amet...</span></span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="last"><a href="#">Read all messages</a></li>
                        </ul>
                    </li>
                    
                    
                    
                </ul>
            </div>
        </nav>
        <!--BEGIN MODAL CONFIG PORTLET-->
        <div id="modal-config" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                        <h4 class="modal-title">Modal title</h4></div>
                    <div class="modal-body"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend et nisl eget porta. Curabitur elementum sem molestie nisl varius, eget tempus odio molestie. Nunc vehicula sem arcu, eu pulvinar neque cursus ac. Aliquam ultricies lobortis magna et aliquam. Vestibulum egestas eu urna sed ultricies. Nullam pulvinar dolor vitae quam dictum
                        condimentum. Integer a sodales elit, eu pulvinar leo. Nunc nec aliquam nisi, a mollis neque. Ut vel felis quis tellus hendrerit placerat. Vivamus vel nisl non magna feugiat dignissim sed ut nibh. Nulla elementum, est a pretium hendrerit, arcu risus luctus augue, mattis aliquet orci ligula eget massa. Sed ut ultricies felis.</p></div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!--END MODAL CONFIG PORTLET--></div>
    <!--END TOPBAR-->
    <div id="wrapper"><!--BEGIN SIDEBAR MENU-->
        <?php include 'sideBarMenu.php'; ?>
        <div id="chat-form" class="fixed">
            <div class="chat-inner"><h2 class="chat-header"><a href="javascript:;" class="chat-form-close pull-right"><i class="glyphicon glyphicon-remove"></i></a><i class="fa fa-user"></i>&nbsp;
                Chat
                &nbsp;<span class="badge badge-info">3</span></h2>

                <div id="group-1" class="chat-group"><strong>Favorites</strong><a href="#"><span class="user-status is-online"></span>
                    <small>Verna Morton</small>
                    <span class="badge badge-info">2</span></a><a href="#"><span class="user-status is-online"></span>
                    <small>Delores Blake</small>
                    <span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-busy"></span>
                    <small>Nathaniel Morris</small>
                    <span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-idle"></span>
                    <small>Boyd Bridges</small>
                    <span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-offline"></span>
                    <small>Meredith Houston</small>
                    <span class="badge badge-info is-hidden">0</span></a></div>
                <div id="group-2" class="chat-group"><strong>Office</strong><a href="#"><span class="user-status is-busy"></span>
                    <small>Ann Scott</small>
                    <span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-offline"></span>
                    <small>Sherman Stokes</small>
                    <span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-offline"></span>
                    <small>Florence Pierce</small>
                    <span class="badge badge-info">1</span></a></div>
                <div id="group-3" class="chat-group"><strong>Friends</strong><a href="#"><span class="user-status is-online"></span>
                    <small>Willard Mckenzie</small>
                    <span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-busy"></span>
                    <small>Jenny Frazier</small>
                    <span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-offline"></span>
                    <small>Chris Stewart</small>
                    <span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-offline"></span>
                    <small>Olivia Green</small>
                    <span class="badge badge-info is-hidden">0</span></a></div>
            </div>
            <div id="chat-box" style="top:400px">
                <div class="chat-box-header"><a href="#" class="chat-box-close pull-right"><i class="glyphicon glyphicon-remove"></i></a><span class="user-status is-online"></span><span class="display-name">Willard Mckenzie</span>
                    <small>Online</small>
                </div>
                <div class="chat-content">
                    <ul class="chat-box-body">
                        <li><p><img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" class="avt"/><span class="user">John Doe</span><span class="time">09:33</span></p>

                            <p>Hi Swlabs, we have some comments for you.</p></li>
                        <li class="odd"><p><img src="https://s3.amazonaws.com/uifaces/faces/twitter/alagoon/48.jpg" class="avt"/><span class="user">Swlabs</span><span class="time">09:33</span></p>

                            <p>Hi, we're listening you...</p></li>
                    </ul>
                </div>
                <div class="chat-textarea"><input placeholder="Type your message" class="form-control"/></div>
            </div>
        </div>
        <!--END CHAT FORM--><!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper"><!--BEGIN TITLE & BREADCRUMB PAGE-->
            
            <!--END TITLE & BREADCRUMB PAGE--><!--BEGIN CONTENT-->
            
            <?php include 'dashboard.php'; ?>
            
            <div id="footer">
                <div class="copyright">2014 © &mu;Admin - Responsive Multi-Style Admin Template</div>
            </div>
            <!--END FOOTER--></div>
        <!--END PAGE WRAPPER--></div>
</div>
    

<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<!--loading bootstrap js-->
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<script src="vendors/metisMenu/jquery.metisMenu.js"></script>
<script src="vendors/slimScroll/jquery.slimscroll.js"></script>
<script src="vendors/jquery-cookie/jquery.cookie.js"></script>
<script src="vendors/iCheck/icheck.min.js"></script>
<script src="vendors/iCheck/custom.min.js"></script>
<script src="vendors/jquery-news-ticker/jquery.news-ticker.js"></script>
<script src="js/jquery.menu.js"></script>
<script src="vendors/jquery-pace/pace.min.js"></script>
<script src="vendors/holder/holder.js"></script>
<script src="vendors/responsive-tabs/responsive-tabs.js"></script>
<!--LOADING SCRIPTS FOR PAGE--><!--CORE JAVASCRIPT-->
<!--LOADING SCRIPTS FOR PAGE-->
<script src="vendors/jquery-highcharts/highcharts.js"></script>
<script src="vendors/jquery-highcharts/highcharts-more.js"></script>
<script src="vendors/jquery-highcharts/data.js"></script>
<script src="vendors/jquery-highcharts/drilldown.js"></script>
<script src="vendors/jquery-highcharts/exporting.js"></script>
<script src="js/charts-highchart-column-bar.js"></script>

<script src="js/main.js"></script>
<script>(function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
ga('create', 'UA-145464-12', 'auto');
ga('send', 'pageview');
</script>

<!--automatic notification update -->
<script type="text/javascript">
$(function() {
    startRefresh();
});

function startRefresh() {
    setTimeout(startRefresh,10000);
    //$.get('http://localhost/VTALLY/web/app_dev.php/notification', function(data) {
      //  $('#notification').html(data);    
   // });
    
    $.get('http://localhost/VTALLY/web/app_dev.php/notification', function(data) {
        $('#vtallyChart').html(data);    
    });
}
</script>
</body>
</html>