@extends('master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Qualifications</h1>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-12">
            @include('partials._notification')
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add Qualifications with dates
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            {!! Form::open(['route'=>'post-qualification', 'role'=>'form', 'class' => 'form-inline']) !!}
                                <div class="form-group">
                                    {!! Form::text('qualification', old('qualification'), ['class' => 'form-control', 'placeholder' => 'Qualification']) !!}
                                    @if($errors->has('qualification'))
                                        <p class="help-block"><small><span class="text-danger">{!! $errors->first('qualification') !!}</span></small></p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    {!! Form::text('course', old('course'), ['class' => 'form-control', 'placeholder' => 'Course/Programme']) !!}
                                    @if($errors->has('course'))
                                        <p class="help-block"><small><span class="text-danger">{!! $errors->first('course') !!}</span></small></p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    {!! Form::text('school', old('school'), ['class' => 'form-control', 'placeholder' => 'School/Institution']) !!}
                                    @if($errors->has('school'))
                                        <p class="help-block"><small><span class="text-danger">{!! $errors->first('school') !!}</span></small></p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    {!! Form::text('date_obtained', old('date_obtained'), ['class' => 'form-control', 'placeholder' => 'Date (Year)', 'maxlength' => 4]) !!}
                                    @if($errors->has('date_obtained'))
                                        <p class="help-block"><small><span class="text-danger">{!! $errors->first('date_obtained') !!}</span></small></p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    {!! Form::text('grade', old('grade'), ['class' => 'form-control', 'placeholder' => 'Grade']) !!}
                                    @if($errors->has('grade'))
                                        <p class="help-block"><small><span class="text-danger">{!! $errors->first('grade') !!}</span></small></p>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary">Add</button>
                            {!! Form::close() !!}
                        </div>

                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>

     <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Qualifications obtained so far with dates
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Qualification</th>
                                    <th>Course</th>
                                    <th>School</th>
                                    <th>Date</th>
                                    <th>Grade</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @if(isset($qualifications) && count($qualifications) > 0)
                                        @foreach($qualifications as $qualification)
                                            <tr>
                                                <td>{{ $sn++ }}</td>
                                                <td>{{ $qualification->qualification }}</td>
                                                <td>{{ $qualification->course }}</td>
                                                <td>{{ $qualification->school }}</td>
                                                <td>{{ $qualification->qualification_date }}</td>
                                                <td>{{ $qualification->grade }}</td>
                                                <td><a href="{{ route('delete-qualification',$qualification->id) }}" class="text-danger"><span class="fa fa-remove"></span></a></td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>

@stop