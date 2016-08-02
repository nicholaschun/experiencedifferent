@include('includes.back_includes.head')

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                @include('includes.back_includes.side_up')
                <br />

                <!-- sidebar menu -->
                @include('includes.back_includes.side')
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            @include('includes.back_includes.top_header')
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
        <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Portfolio <small></small></h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="x_panel">
        <div class="x_title">
            <h2>Current portfolio <small>Portfolio</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                    </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
        <p class="text-muted font-13 m-b-30">
        </p>
        <table id="datatable" class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Action</th>

        </tr>
        </thead>


       <tbody>

       </tbody>
        </table>
        </div>
        </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="x_panel">
        <div class="x_title">
            <h2>Add new Portfolio <small></small></h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
        <p class="text-muted font-13 m-b-30">
        </p>

            <form id="demo-form" data-parsley-validate>
                <label for="fullname">Name :</label>
                <input type="text" id="fullname" class="form-control" name="fullname" required />
                <br/>

                    <label for="heard">Choose Type:</label>
                    <select id="heard" class="form-control" required>
                        <option value="">Choose..</option>
                        <option value="3D visualization">3D Visualization</option>
                        <option value="Graphic Design">Graphic Design</option>
                        <option value="Animation">Animation</option>
                    </select>
                <br/>
                    <label for="message">Add Description</label>
                    <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                              data-parsley-validation-threshold="10"></textarea>

                    <br/>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Dropzone multiple file uploader</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>

                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <p>Drag multiple files to the box below for multi upload or click to select files. This is for demonstration purposes only, the files are not uploaded to any server.</p>
                                <form action="form_upload.html" class="dropzone"></form>
                                <br />
                                <br />
                                <br />
                                <br />
                            </div>
                        </div>
                    </div>
                </div>
                <br/>

                    <span class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add Portfolio</span>
            </form>
        </div>
        </div>
        </div>




        </div>
        </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        @include('includes.back_includes.footer')
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
@include('includes.back_includes.scripts')



</body>
</html>