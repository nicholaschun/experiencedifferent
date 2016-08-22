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

        <!-- top navigation -->
        <div class="top_nav">
            @include('includes.back_includes.top_header')
            <div class="message-container">
                @include('includes.back_includes.messages')
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

        <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Users <small></small></h3>
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
            <h2>Current users <small>Users</small></h2>
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
            <th>Username</th>
            <th>Status</th>
            <th>Role</th>
            <th>Action</th>

        </tr>
        </thead>


       <tbody>
       @foreach($users as $users)
        <tr>
            <td>{{$users->email}}</td>
            <td>{!! $users->status !!}</td>
            <td>{{$users->role}}</td>
            <td><a href="{{url('admin/users/deleteUser',$users->id)}}"><i class="fa fa-trash-o"> Delete</i> </a></td>


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
            <h2>Add new user <small></small></h2>
            <div class="clearfix"></div>

        </div>
        <div class="x_content">

                {!! Form::open(['url' => '/admin/users/addUser']) !!}

                {!! Form::label('name',null,'Full Name') !!}
                {!! Form::text('name',null,['class'=> 'form-control','id' => 'name', 'placeholder' =>'Enter your name in full']) !!}
                <br/>

                {!! Form::label('email',null,'Email') !!}
                {!! Form::text('email',null,['class' =>'form-control','type'=>'email','id' => 'email', 'placeholder' => 'Enter your email address']) !!}
                <br/>

                {!! Form::label('Select User Role',null, 'Select User Role') !!}
                {!! Form::select('role',['admin' => 'Admin'],null, ['class'=>'form-control']) !!}
                <br/>

                {!! Form::label('password',null,'Password') !!}
                <input type="password" name="password" class="form-control" placeholder="Password"/>
                <br/>

                {!! Form::label('repeat-password',null,'Confirm Password') !!}
                 <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password"/>
                <br/>


            <div class="input-group input-lg text-center">
            </div>

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