@extends('master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Programme of Study</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            @include('partials._notification')
            <div class="panel panel-default">
                <div class="panel-heading">
                    Proposed Programme of Study
                </div>
                <div class="panel-body">
                    <div class="row">
                        {!! Form::open(['route'=>'post-programme', 'role'=>'form']) !!}
                        <div class="col-lg-6">

                            <div class="form-group">
                                {!! Form::label('programme_type', 'Programme Type:') !!}
                                {!! programmeTypeDropdown('programme_type', old('programme_type')? old('programme_type') : isset($programme) ? $programme->programme_type : '', ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('programme_of_study', 'Programme of Study:') !!}
                                {!! programmesDropdown('programme_of_study', old('programme_of_study')? old('programme_of_study') : isset($programme) ? $programme->programme_of_study : '', ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('mode_of_study', 'Mode of Study:') !!}
                                {!! studyModeDropdown('mode_of_study', old('mode_of_study')? old('mode_of_study') : isset($programme) ? $programme->mode_of_study : '', ['class' => 'form-control']) !!}
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>

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
