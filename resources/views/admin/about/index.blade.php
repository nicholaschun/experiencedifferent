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
                <h3>About Us <small></small></h3>
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
                {!! Form::open() !!}

                <div class="x_panel">
                    <div class="x_title">
                        <h2>Add Text</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 nopadding">
                                        <textarea   name="about" id="">
                                            @foreach($aboutUs as $about)
                                                {{$about->about}}
                                            @endforeach
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />

                        <div class="x_title">
                            <h2>Add Contact information</h2>
                            <div class="clearfix"></div>
                        </div>
                        <br/>

                        @foreach($telephone as $telephone1)

                        <div class=" form-group has-feedback">
                            {!! Form::text('phone',$telephone1->telephone,['class'=>'form-control','placeholder'=>'Add Phone','id'=>'inputSuccess5']) !!}
                            {!! Form::hidden('id',$telephone1->id,['class'=>'form-control','placeholder'=>'Add Phone','id'=>'inputSuccess5']) !!}
                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>

                        </div>
                        @endforeach

                        @foreach($email as $email1)

                        <div class=" form-group has-feedback">
                            {!! Form::text('email',$email1->email,['class'=>'form-control','placeholder'=>'Add Email','id'=>'inputSuccess5']) !!}
                            {!! Form::hidden('id',$email1->id,['class'=>'form-control','placeholder'=>'Add Phone','id'=>'inputSuccess5']) !!}

                            <span class="fa fa-envelope-o form-control-feedback right" aria-hidden="true"></span>

                        </div>
                        @endforeach


                        <br/>

                        <div class="x_title">
                            <h2>Add Clients</h2>
                            <div class="clearfix"></div>
                        </div>

                        <br/>



                         <div class="client">
                             <article class="styled">
                                 <input type="file" name="imagefile" onchange="previewImage(this,[256],4);" />
                                 <div class="imagePreview"></div>
                             </article>

            </div>
                        <br/>



                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>

                    </div>
                </div>
                {!! Form::close() !!}

            </div>


            <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="x_panel">
        <div class="x_title">
            <h2>About Us Page info <small></small></h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
        <p class="text-muted font-13 m-b-30">
        </p>

            <div class="x_title">
                <h2><i class="fa fa-user"></i> About us</h2>
                <div class="clearfix"></div>


            </div>
            @foreach($aboutUs as $about)
                {{$about->about}}
            @endforeach
            <br/>  <br/>  <br/>

            <div class="x_title">
                <h2><i class="fa fa-globe"></i> Contact information</h2>
                <div class="clearfix"></div>
            </div>
            @foreach($telephone as $telephone)
                <span><i class="fa fa-phone "></i> {{$telephone->telephone}}</span>
                <span><a href="{{url ('admin/about/deleteTelephone',$telephone->id)}}"><i class="fa fa-trash-o"></i></a></span>

                <br>
            @endforeach
            <br/>

            @foreach($email as $email)
                <span><i class="fa fa-envelope "></i> {{$email->email}}</span>
                <span><a href="{{url ('admin/about/deleteEmail',$email->id)}}"><i class="fa fa-trash-o"></i></a></span>

            @endforeach
            <br/> <br/> <br/>

            <div class="x_title">
                <h2> <i class="fa fa-users"></i> Our Clients</h2>
                <div class="clearfix"></div>
            </div>
            <div class="client">
                @foreach($clients as $clients)
                    <span>
                    <img width="100" height="50" src="{{asset ('/assets/img/clients/'.$clients->client_image_path)}}">
                        <div>
                    <span><a href="{{url ('admin/about/deleteClient',$clients->id)}}"><i class="fa fa-trash-o"></i></a></span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                    @endforeach
                    </span>
                <div>
                <!--
                    <span><a href="#"><i class="fa fa-trash-o"> Delete</i></a></span>
                    &nbsp;&nbsp;&nbsp;&nbsp&nbsp;
                    <span><a href="#"><i class="fa fa-eye"> Visible</i></a></span>

                    -->

                </div>
                </span>

            </div>
            <br/>


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


<script>
    $(document).ready(function() {
        $("#txtEditor").Editor();
    });
</script>
</body>

<!-- bootstrap-wysiwyg -->

<!-- /bootstrap-wysiwyg -->

</html>