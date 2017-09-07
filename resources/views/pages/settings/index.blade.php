
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
  <link rel="stylesheet" href="{{asset('assets/js/datepicker/datepicker.css')}}" type="text/css" cache="false" />
  <link rel="stylesheet" href="{{asset('assets/js/slider/slider.css')}}" type="text/css" />
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
            <li class="active"><a href="#wizard" data-toggle="tab">Configuration</a></li>
          </ul>
        </header>
        <section class="scrollable wrapper">
          <div class="tab-content">

            <section class="tab-pane active" id="wizard">
              <div class="panel">
                <div class="wizard clearfix" id="form-wizard">
                  <ul class="steps">
                    <li data-target="#step1" class="active"><span class="badge badge-info">1</span>School Setup</li>
                    <li data-target="#step2"><span class="badge">2</span>Class Room Setup</li>
                    <li data-target="#step3"><span class="badge">3</span>Teacher Setup</li>
                  </ul>
                </div>
                <div class="step-content">
                  <form>
                    <div class="step-pane active" id="step1">
                      <div class="form-group">
                        <label class="col-sm-2 control-label">School Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="School Name" name="school_name">
                        </div>
                      </div>
                      <br/>
                      <div class="line line-dashed line-lg pull-in"></div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Country</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="country">
                            <option value="ghana">Ghana</option>
                            <option value="nigeria">Nigeria</option>
                            <option value="togo">Togo</option>
                            <option value="congo">Congo</option>
                          </select>
                        </div>
                      </div>
                      <br/>
                      <div class="line line-dashed line-lg pull-in"></div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Location</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="location" name="location">
                        </div>
                      </div>
                      <br/>
                      <div class="line line-dashed line-lg pull-in"></div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Addresss</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="address" name="address">
                        </div>
                      </div>
                      <br/>
                      <div class="line line-dashed line-lg pull-in"></div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" placeholder="Email Address" name="email">
                        </div>
                      </div>
                      <br/>
                      <div class="line line-dashed line-lg pull-in"></div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Mobile</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" placeholder="Phone" name="phone">
                        </div>
                      </div>
                      <br/>


                      <div class="line line-dashed line-lg pull-in"></div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Telephone</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" placeholder="Phone" name="phone">
                        </div>
                      </div>
                      <br/>

                      <div class="line line-dashed line-lg pull-in"></div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Founder</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Founder" name="phone">
                        </div>
                      </div>
                      <br/>

                      <div class="line line-dashed line-lg pull-in"></div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Date Established</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" placeholder="Founder" name="date_established">
                        </div>
                      </div>
                      <br/>

                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">About School</label>
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
                        <br/>
                        <div class="line line-dashed line-lg pull-in"></div>

                        <div class="form-group">
                          <label class="col-sm-2 control-label" style="margin-top:30px">School Logo</label>
                          <div class="col-sm-2">
                            <div class="visible-lg">
                              <input type="file" name="school_logo" class="form-control" style="margin-top:20px">
                            </div>
                          </div>
                        </div>
                        <br/>
                      <div class="line line-dashed line-lg pull-in"></div>
                    </div>

                    <div class="step-pane" id="step2">
                      <p>Your email:</p>
                      <input type="text" class="form-control" data-trigger="change" data-required="true" data-type="email" placeholder="email address">
                    </div>
                    <div class="step-pane" id="step3">This is step 3</div>
                  </form>
                  <br/><br/><br/>
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


<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<!-- app -->
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/js/app.plugin.js')}}"></script>
<script src="{{asset('assets/js/app.data.js')}}"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<!-- app -->
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/js/app.plugin.js')}}"></script>
<script src="{{asset('assets/js/app.data.js')}}"></script>
<!-- fuelux -->
<script src="{{asset('assets/js/fuelux/fuelux.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('assets/js/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- slider -->
<script src="{{asset('assets/js/slider/bootstrap-slider.js')}}"></script>
<!-- file input -->
<script src="{{asset('assets/js/file-input/bootstrap.file-input.js')}}"></script>
<!-- combodate -->
<script src="{{asset('assets/js/libs/moment.min.js')}}"></script>
<script src="{{asset('assets/js/combodate/combodate.js')}}" cache="false"></script>
<!-- parsley -->
<script src="{{asset('assets/js/parsley/parsley.min.js')}}" cache="false"></script>
<script src="{{asset('assets/js/parsley/parsley.extend.js')}}" cache="false"></script>
<!-- select2 -->
<script src="{{asset('assets/js/select2/select2.min.js')}}" cache="false"></script>
<!-- wysiwyg -->
<script src="{{asset('assets/js/wysiwyg/jquery.hotkeys.js')}}" cache="false"></script>
<script src="{{asset('assets/js/wysiwyg/bootstrap-wysiwyg.js')}}" cache="false"></script>
<script src="{{asset('assets/js/wysiwyg/demo.js')}}" cache="false"></script>
<!-- markdown -->
<script src="{{asset('assets/js/markdown/epiceditor.min.js')}}" cache="false"></script>
<script src="{{asset('assets/js/markdown/demo.js')}}" cache="false"></script>
</body>
</html>

<!-- Localized -->
