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

                    <a href="{{url('auth/logout')}}" data-toggle="tooltip" data-placement="top" title="Logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <div class="top_nav">
            @include('includes.back_includes.top_header')
            <div class="message-container">
                @include('includes.back_includes.messages')
            </div>
        </div>

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
        <table id="myTable" class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>No.</th>
            <th>Type</th>
            <th>Image</th>
            <th>Action</th>

        </tr>
        </thead>


       <tbody>
       @foreach($portfolio as $portfolio)
           <tr>
           <td>{{$portfolio->id}}</td>
           <td>{{$portfolio->type}}</td>
              <td><img width="200" height="100" src="{{ asset('/assets/img/portfolio/'.$portfolio->file_path) }}" alt=""></td>
           <td><span><a href="{{url ('admin/portfolio/deletePortfolio',$portfolio->id)}}"><i class="fa fa-trash-o"> Delete</i></a></span>
           </td>
           </tr>
           @endforeach

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

                        {!! Form::open(['url' => '/admin/portfolio','files'=>'true']) !!}

                        <br/>
                        {!! Form::label('type',null,'Choose Type') !!}
                        {!! Form::select('type[]',[
                        '3D visualization' =>'3D visualization',
                        'Graphic Design' =>'Graphic Design',
                        'Animation' => 'Animation'],

                       null, ['class'=>'form-control']) !!}

                        <br/>

                        <div class="x_panel">
                              <span class="btn btn-xs btn-info"><a href="javascript:void(0);"  class="add_portfolio"><i class="fa fa-plus"></i></a></span>


                            <div class="form-group">
                                {!! Form::label('image', 'Choose an image') !!}
                                <article class="styled">
                                    <input type="file" name="file_path[]" onchange="previewImage(this,[256],4);" />
                                    <div class="imagePreview"></div>
                                </article>
                            </div>
                            <div id="addportfolio">
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add Portfolio</button>
                        {!! Form::close() !!}
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