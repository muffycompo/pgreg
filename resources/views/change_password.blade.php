@extends('master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Change Password</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            @include('partials._notification')
            <div class="panel panel-default">
                <div class="panel-heading">
                    Change Password
                </div>
                <div class="panel-body">
                    <div class="row">
                        {!! Form::open(['route'=>'post-change-password', 'role'=>'form']) !!}
                        <div class="col-lg-6">
                                <div class="form-group">
                                    {!! Form::label('new_password', 'New Password:') !!}
                                    {!! Form::password('password', ['class' => 'form-control','placeholder' => 'Password', 'id' => 'new_password']) !!}
                                    @if($errors->has('password'))
                                        <p class="help-block"><small><span class="text-danger">{!! $errors->first('password') !!}</span></small></p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    {!! Form::label('confirm_password', 'Confirm Password:') !!}
                                    {!! Form::password('password_confirmation', ['class' => 'form-control','placeholder' => 'Confirm Password', 'id' => 'confirm_password']) !!}
                                    @if($errors->has('password_confirmation'))
                                        <p class="help-block"><small><span class="text-danger">{!! $errors->first('password_confirmation') !!}</span></small></p>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="text-danger"><i class="fa fa-warning fa-fw"></i> NOTE</h6>
                            <p>
                                Make sure you choose a strong password to prevent unauthorized persons from access your account!<br>
                                Use a combination of <strong>letters (aA-zZ), numbers (0-9) and symbols (#$&@*)</strong> and should be a minimum of <strong>5 characters.</strong>
                            </p>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    {!! Form::close() !!}
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>


@stop