
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8" />
  <title>{{ config('app.name', 'MWG Academy') }}</title>
  <meta name="description" content="studentPortal is one stop solution that helps you manage your applications in an effective manner" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('assets/css/font.css')}}" type="text/css" cache="false" />
  <link rel="stylesheet" href="{{asset('assets/css/plugin.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('assets/css/app.css')}}" type="text/css" />

  <link rel="stylesheet" href="{{asset('assets/js/select2/select2.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('assets/js/fuelux/fuelux.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('assets/datepicker/datepicker.css')}}" type="text/css" cache="false" />
  <link rel="stylesheet" href="{{asset('assets/slider/slider.css')}}" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/respond.min.js" cache="false"></script>
    <script src="js/ie/html5.js" cache="false"></script>
    <script src="js/ie/fix.js" cache="false"></script>
  <![endif]-->
</head>

<body>
  <section class="hbox stretch">
    <!-- .aside -->
    <aside class="bg-dark aside-sm" id="nav">
      <section class="vbox">
        <header class="dker nav-bar">
          <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
            <i class="fa fa-bars"></i>
          </a>
          <a href="#" class="nav-brand" data-toggle="fullscreen">todo</a>
          <a class="btn btn-link visible-xs" data-toggle="class:show" data-target=".nav-user">
            <i class="fa fa-comment-o"></i>
          </a>
        </header>
        <section>
          <div class="lter nav-user hidden-xs pos-rlt">
            <div class="nav-avatar pos-rlt">
              <a href="#" class="thumb-sm avatar animated rollIn" data-toggle="dropdown">
                <img src="images/avatar.jpg" alt="" class="">
                <span class="caret caret-white"></span>
              </a>
              <ul class="dropdown-menu m-t-sm animated fadeInLeft">
              	<span class="arrow top"></span>
                <li>
                  <a href="#">Settings</a>
                </li>
                <li>
                  <a href="profile.html">Profile</a>
                </li>
                <li>
                  <a href="#">
                    <span class="badge bg-danger pull-right">3</span>
                    Notifications
                  </a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="docs.html">Help</a>
                </li>
                <li>
                  <a href="signin.html">Logout</a>
                </li>
              </ul>
              <div class="visible-xs m-t m-b">
                <a href="#" class="h3">John.Smith</a>
                <p><i class="fa fa-map-marker"></i> London, UK</p>
              </div>
            </div>
            <div class="nav-msg">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <b class="badge badge-white count-n">2</b>
              </a>
              <section class="dropdown-menu m-l-sm pull-left animated fadeInRight">
                <div class="arrow left"></div>
                <section class="panel bg-white">
                  <header class="panel-heading">
                    <strong>You have <span class="count-n">2</span> notifications</strong>
                  </header>
                  <div class="list-group">
                    <a href="#" class="media list-group-item">
                      <span class="pull-left thumb-sm">
                        <img src="images/avatar.jpg" alt="John said" class="img-circle">
                      </span>
                      <span class="media-body block m-b-none">
                        Use awesome animate.css<br>
                        <small class="text-muted">28 Aug 13</small>
                      </span>
                    </a>
                    <a href="#" class="media list-group-item">
                      <span class="media-body block m-b-none">
                        1.0 initial released<br>
                        <small class="text-muted">27 Aug 13</small>
                      </span>
                    </a>
                  </div>
                  <footer class="panel-footer text-sm">
                    <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
                    <a href="#">See all the notifications</a>
                  </footer>
                </section>
              </section>
            </div>
          </div>
          <nav class="nav-primary hidden-xs">
            <ul class="nav">
              <li>
                <a href="index.html">
                  <i class="fa fa-eye"></i>
                  <span>Discover</span>
                </a>
              </li>
              <li class="dropdown-submenu active">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flask"></i>
                  <span>UI kit</span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="buttons.html">Buttons</a>
                  </li>
                  <li>
                    <a href="icons.html">
                      <b class="badge pull-right">302</b>Icons
                    </a>
                  </li>
                  <li>
                    <a href="grid.html">Grid</a>
                  </li>
                  <li>
                    <a href="widgets.html">
                      <b class="badge bg-primary pull-right">8</b>Widgets
                    </a>
                  </li>
                  <li>
                    <a href="components.html">
                      <b class="badge pull-right">18</b>Components
                    </a>
                  </li>
                  <li>
                    <a href="list.html">List groups</a>
                  </li>
                  <li>
                    <a href="table.html">Table</a>
                  </li>
                  <li>
                    <a href="form.html">Form</a>
                  </li>
                  <li>
                    <a href="chart.html">Chart</a>
                  </li>
                  <li>
                    <a href="calendar.html">Fullcalendar</a>
                  </li>
                  <li>
                    <a href="portlet.html">Portlet</a>
                  </li>
                </ul>
              </li>
               <li class="dropdown-submenu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-file-text"></i>
                  <span>Pages</span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="dashboard.html">Dashboard</a>
                  </li>
                  <li>
                    <a href="dashboard-1.html">Dashboard one</a>
                  </li>
                  <li>
                    <a href="dashboard-2.html">Dashboard layout</a>
                  </li>
                  <li>
                    <a href="analysis.html">Analysis</a>
                  </li>
                  <li>
                    <a href="master.html">Master</a>
                  </li>
                  <li>
                    <a href="maps.html">Maps</a>
                  </li>
                  <li>
                    <a href="gallery.html">Gallery</a>
                  </li>
                  <li>
                    <a href="profile.html">Profile</a>
                  </li>
                  <li>
                    <a href="blog.html">Blog</a>
                  </li>
                  <li>
                    <a href="invoice.html">Invoice</a>
                  </li>
                  <li>
                    <a href="signin.html">Signin page</a>
                  </li>
                  <li>
                    <a href="signup.html">Signup page</a>
                  </li>
                  <li>
                    <a href="404.html">404 page</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="mail.html">
                  <b class="badge bg-primary pull-right">3</b>
                  <i class="fa fa-envelope-o"></i>
                  <span>Mail</span>
                </a>
              </li>
              <li>
                <a href="tasks.html">
                  <i class="fa fa-tasks"></i>
                  <span>Tasks</span>
                </a>
              </li>
              <li>
                <a href="notes.html">
                  <i class="fa fa-pencil"></i>
                  <span>Notes</span>
                </a>
              </li>
              <li>
                <a href="timeline.html">
                  <i class="fa fa-clock-o"></i>
                  <span>Timeline</span>
                </a>
              </li>
            </ul>
          </nav>
        </section>
        <footer class="footer bg-gradient hidden-xs">
          <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-sm btn-link m-r-n-xs pull-right">
            <i class="fa fa-power-off"></i>
          </a>
          <a href="#nav" data-toggle="class:nav-vertical" class="btn btn-sm btn-link m-l-n-sm">
            <i class="fa fa-bars"></i>
          </a>
        </footer>
      </section>
    </aside>
    <!-- /.aside -->
    <!-- .vbox -->
    <section id="content">
      <section class="vbox">
        <header class="header bg-dark bg-gradient">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#basic" data-toggle="tab">School Config</a></li>
            <li class=""><a href="#validation" data-toggle="tab">Class Config</a></li>
            <li class=""><a href="#wizard" data-toggle="tab">Teacher Config</a></li>
          </ul>
        </header>
        <section class="scrollable wrapper">
          <div class="tab-content">
            <section class="tab-pane active" id="basic">
              <section class="panel">
                <header class="panel-heading font-bold">
                  #1 Setup 
                </header>
                <div class="panel-body">
                  <form class="form-horizontal" method="get">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">School Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="School Name" name="school_name">
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Location</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="location" name="location">
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Addresss</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="address" name="address">
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" placeholder="Email Address" name="email">
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Mobile</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" placeholder="Phone" name="phone">
                      </div>
                    </div>


                    <div class="line line-dashed line-lg pull-in"></div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Telephone</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" placeholder="Phone" name="phone">
                      </div>
                    </div>

                    <div class="line line-dashed line-lg pull-in"></div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Founder</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Founder" name="phone">
                      </div>
                    </div>

                    <div class="line line-dashed line-lg pull-in"></div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Date Established</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control" placeholder="Founder" name="date_established">
                      </div>
                    </div>

                      <div class="line line-dashed line-lg pull-in"></div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Wysiwyg</label>
                        <div class="col-sm-10">
                          <div class="btn-toolbar m-b-sm btn-editor" data-role="editor-toolbar" data-target="#editor">
                            <div class="btn-group">
                              <a class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                </ul>
                            </div>
                            <div class="btn-group">
                              <a class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
                                <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
                                <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                              <a class="btn btn-white btn-sm" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                              <a class="btn btn-white btn-sm" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                              <a class="btn btn-white btn-sm" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                              <a class="btn btn-white btn-sm" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                            </div>
                            <div class="btn-group">
                              <a class="btn btn-white btn-sm" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                              <a class="btn btn-white btn-sm" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                              <a class="btn btn-white btn-sm" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                              <a class="btn btn-white btn-sm" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                            </div>
                            <div class="btn-group">
                              <a class="btn btn-white btn-sm" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                              <a class="btn btn-white btn-sm" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                              <a class="btn btn-white btn-sm" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                              <a class="btn btn-white btn-sm" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                            </div>
                            <div class="btn-group">
                            <a class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                              <div class="dropdown-menu">
                                <div class="input-group m-l-xs m-r-xs">
                                  <input class="form-control input-sm" placeholder="URL" type="text" data-edit="createLink"/>
                                  <div class="input-group-btn">
                                    <button class="btn btn-white btn-sm" type="button">Add</button>
                                  </div>
                                </div>
                              </div>
                              <a class="btn btn-white btn-sm" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                            </div>

                            <div class="btn-group">
                              <a class="btn btn-white btn-sm" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                              <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                            </div>
                            <div class="btn-group">
                              <a class="btn btn-white btn-sm" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                              <a class="btn btn-white btn-sm" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                            </div>
                            <input type="text" class="form-control-trans pull-left" data-edit="inserttext" id="voiceBtn" x-webkit-speech="" style="width:25px;height:28px;">
                          </div>
                          <div id="editor" class="form-control" style="overflow:scroll;height:150px;max-height:150px">
                            Go ahead&hellip;
                          </div>
                        </div>
                      </div>



                      <div class="line line-dashed line-lg pull-in"></div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Drag and Drop</label>
                        <div class="col-sm-10">
                          <div class="dropfile visible-lg">
                            <small>Drag and Drop file here</small>
                          </div>
                        </div>
                      </div>



                    <div class="line line-dashed line-lg pull-in"></div>
                    <div class="form-group">
                      <div class="col-sm-4 col-sm-offset-2">
                        <button type="submit" class="btn btn-white">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </form>
                </div>
              </section>
            </section>
            <section class="tab-pane" id="validation">
              <div class="row">
                <div class="col-sm-6">
                  <form data-validate="parsley">
                    <section class="panel">
                      <header class="panel-heading">
                        <span class="h4">Register</span>
                      </header>
                      <div class="panel-body">
                        <p class="text-muted">Please fill the information to continue</p>
                        <div class="form-group">
                          <label>Username</label>
                          <input type="text" class="form-control" data-required="true">
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input type="text" class="form-control" data-type="email" data-required="true">
                        </div>
                        <div class="form-group pull-in clearfix">
                          <div class="col-sm-6">
                            <label>Enter password</label>
                            <input type="password" class="form-control" data-required="true" id="pwd">
                          </div>
                          <div class="col-sm-6">
                            <label>Confirm password</label>
                            <input type="password" class="form-control" data-equalto="#pwd" data-required="true">
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Phone</label>
                          <input type="text" class="form-control" data-type="phone" placeholder="(XXX) XXXX XXX" data-required="true">
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="check" checked data-required="true"> I agree to the <a href="#" class="text-info">Terms of Service</a>
                          </label>
                        </div>
                      </div>
                      <footer class="panel-footer text-right bg-light lter">
                        <button type="submit" class="btn btn-success btn-s-xs">Submit</button>
                      </footer>
                    </section>
                  </form>
                </div>
                <div class="col-sm-6">
                  <form data-validate="parsley">
                    <section class="panel">
                      <header class="panel-heading">
                        <span class="h4">Contact</span>
                      </header>
                      <div class="panel-body">
                        <p class="text-muted">Need support? please fill the fields below.</p>
                          <div class="form-group pull-in clearfix">
                            <div class="col-sm-6">
                              <label>Your name</label>
                              <input type="text" class="form-control" placeholder="Name" data-required="true">
                            </div>
                            <div class="col-sm-6">
                              <label>Email</label>
                              <input type="email" class="form-control" placeholder="Enter email" data-required="true">
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Your website</label>
                            <input type="text" data-type="url"  data-required="true" class="form-control" placeholder="Your website url">
                          </div>
                          <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" rows="6" data-minwords="6" data-required="true" placeholder="Type your message"></textarea>
                          </div>
                      </div>
                      <footer class="panel-footer text-right bg-light lter">
                        <button type="submit" class="btn btn-success btn-s-xs">Submit</button>
                      </footer>
                    </section>
                  </form>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <form class="form-horizontal" data-validate="parsley">
                    <section class="panel">
                      <header class="panel-heading">
                        <strong>Basic constraints</strong>
                      </header>
                      <div class="panel-body">
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Required</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" data-required="true" placeholder="required field">
                            <select data-required="true" class="form-control m-t">
                                <option value="">Please choose</option>
                                <option value="foo">Foo</option>
                                <option value="bar">Bar</option>
                            </select>
                            <label class="checkbox">
                              <input type="checkbox" name="inlineCheckbox1" value="option1" data-required="true" data-error-message="You must agree to the site policy."> Agree to the policy
                            </label>
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Not blank</label>
                          <div class="col-sm-9">
                            <input type="text" data-notblank="true" class="form-control" placeholder="not blank field">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Min Length</label>
                          <div class="col-sm-9">
                            <input type="text" data-minlength="6" class="form-control" placeholder="minlength = 6">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Max Length</label>
                          <div class="col-sm-9">
                            <input type="text" data-maxlength="6" class="form-control" placeholder="maxlength = 6">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Range Length</label>
                          <div class="col-sm-9">
                            <input type="text" data-rangelength="[5,10]" class="form-control" placeholder="data-rangelength = [5,10]">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Min</label>
                          <div class="col-sm-9">
                            <input type="text" data-min="6" class="form-control" placeholder="min = 6">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Max</label>
                          <div class="col-sm-9">
                            <input type="text" data-max="100" class="form-control" placeholder="max = 100">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Range</label>
                          <div class="col-sm-9">
                            <input type="text" data-range="[6, 100]" class="form-control" placeholder="data-range = [6, 100]">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">RegExp</label>
                          <div class="col-sm-9">
                            <input type="text" data-regexp="#[A-Fa-f0-9]{6}" class="form-control" placeholder="hexa color code">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Equal To</label>
                          <div class="col-sm-9">
                            <div class="row">
                              <div class="col-sm-6"><input type="text" value="foo" id="foo" class="form-control"></div>
                              <div class="col-sm-6"><input type="text" data-equalto="#foo" placeholder="equal to foo" class="form-control"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <footer class="panel-footer text-right bg-light lter">
                        <button type="submit" class="btn btn-success btn-s-xs">Submit</button>
                      </footer>
                    </section>
                  </form>
                </div>
                <div class="col-sm-6">
                  <form class="form-horizontal" data-validate="parsley">
                    <section class="panel">
                      <header class="panel-heading">
                        <strong>Type constraints</strong>
                      </header>
                      <div class="panel-body">
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" data-type="email" data-required="true" placeholder="email">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Url</label>
                          <div class="col-sm-9">
                            <input type="text" data-type="url" class="form-control" placeholder="url">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Url strict</label>
                          <div class="col-sm-9">
                            <input type="text" data-type="urlstrict" class="form-control" placeholder="urlstrict">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Digits</label>
                          <div class="col-sm-9">
                            <input type="text" data-type="digits" class="form-control" placeholder="digits">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Number</label>
                          <div class="col-sm-9">
                            <input type="text" data-type="number" class="form-control" placeholder="number">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Alphanum</label>
                          <div class="col-sm-9">
                            <input type="text" data-type="alphanum" class="form-control" placeholder="alphanumeric string">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Date Iso</label>
                          <div class="col-sm-9">
                            <input type="text" data-type="dateIso" class="form-control" placeholder="YYYY-MM-DD">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Phone</label>
                          <div class="col-sm-9">
                            <input type="text" data-type="phone" class="form-control" placeholder="(XXX) XXXX XXX">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Min Words</label>
                          <div class="col-sm-9">
                            <input type="text" data-minwords="6" class="form-control" placeholder="min 6 words">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Max Words</label>
                          <div class="col-sm-9">
                            <input type="text" data-maxwords="6" class="form-control" placeholder="max 6 words">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Range Words</label>
                          <div class="col-sm-9">
                            <input type="text" data-rangewords="[6,10]" class="form-control" placeholder="min 6 words & max 10 words">
                          </div>
                        </div>
                      </div>
                      <footer class="panel-footer text-right bg-light lter">
                        <button type="submit" class="btn btn-success btn-s-xs">Submit</button>
                      </footer>
                    </section>
                  </form>
                </div>
              </div>
            </section>
            <section class="tab-pane" id="wizard">
              <div class="panel">
                <div class="wizard clearfix" id="form-wizard">
                  <ul class="steps">
                    <li data-target="#step1" class="active"><span class="badge badge-info">1</span>Step 1</li>
                    <li data-target="#step2"><span class="badge">2</span>Step 2</li>
                    <li data-target="#step3"><span class="badge">3</span>Step 3</li>
                  </ul>
                </div>
                <div class="step-content">
                  <form>
                    <div class="step-pane active" id="step1">
                      <p>Your website:</p>
                      <input type="text" class="form-control" data-trigger="change" data-required="true" data-type="url" placeholder="website">
                      <p class="m-t">Your email:</p>
                      <input type="text" class="form-control" data-trigger="change" data-required="true" data-type="email" placeholder="email address">
                    </div>
                    <div class="step-pane" id="step2">
                      <p>Your email:</p>
                      <input type="text" class="form-control" data-trigger="change" data-required="true" data-type="email" placeholder="email address">
                    </div>
                    <div class="step-pane" id="step3">This is step 3</div>
                  </form>
                  <div class="actions m-t">
                    <button type="button" class="btn btn-white btn-sm btn-prev" data-target="#form-wizard" data-wizard="previous" disabled="disabled">Prev</button>
                    <button type="button" class="btn btn-white btn-sm btn-next" data-target="#form-wizard" data-wizard="next" data-last="Finish">Next</button>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </section>
      </section>
    </section>
    <!-- /.vbox -->
  </section>
  <div class="modal fade" id="modal-form">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-6 b-r">
              <h3 class="m-t-none m-b">Sign in</h3>
              <p>Sign in to meet your friends.</p>
              <form role="form">
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="checkbox m-t-lg">
                  <button type="submit" class="btn btn-sm btn-success pull-right text-uc m-t-n-xs"><strong>Log in</strong></button>
                  <label>
                    <input type="checkbox"> Remember me
                  </label>
                </div>
              </form>
            </div>
            <div class="col-sm-6">
              <h4>Not a member?</h4>
              <p>You can create an account <a href="#" class="text-info">here</a></p>
              <p>OR</p>
              <a href="#" class="btn btn-facebook btn-block m-b-sm"><i class="fa fa-facebook pull-left"></i>Sign in with Facebook</a>
              <a href="#" class="btn btn-twitter btn-block m-b-sm"><i class="fa fa-twitter pull-left"></i>Sign in with Twitter</a>
              <a href="#" class="btn btn-gplus btn-block"><i class="fa fa-google-plus pull-left"></i>Sign in with Google+</a>
            </div>
          </div>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<!-- app -->
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/js/app.plugin.js')}}"></script>
<script src="{{asset('assets/js/app.data.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/bootstrap.js')}}"></script>
<!-- app -->
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/app.plugin.js')}}"></script>
<script src="{{asset('js/app.data.js')}}"></script>
<!-- fuelux -->
<script src="{{asset('js/fuelux/fuelux.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('js/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- slider -->
<script src="{{asset('js/slider/bootstrap-slider.js')}}"></script>
<!-- file input -->
<script src="{{asset('js/file-input/bootstrap.file-input.js')}}"></script>
<!-- combodate -->
<script src="{{asset('js/libs/moment.min.js')}}"></script>
<script src="{{asset('js/combodate/combodate.js')}}" cache="false"></script>
<!-- parsley -->
<script src="{{asset('js/parsley/parsley.min.js')}}" cache="false"></script>
<script src="{{asset('js/parsley/parsley.extend.js')}}" cache="false"></script>
<!-- select2 -->
<script src="{{asset('js/select2/select2.min.js')}}" cache="false"></script>
<!-- wysiwyg -->
<script src="{{asset('js/wysiwyg/jquery.hotkeys.js')}}" cache="false"></script>
<script src="{{asset('js/wysiwyg/bootstrap-wysiwyg.js')}}" cache="false"></script>
<script src="{{asset('js/wysiwyg/demo.js')}}" cache="false"></script>
<!-- markdown -->
<script src="{{asset('js/markdown/epiceditor.min.js')}}" cache="false"></script>
<script src="{{asset('js/markdown/demo.js')}}" cache="false"></script>
</body>
</html>

<!-- Localized -->
