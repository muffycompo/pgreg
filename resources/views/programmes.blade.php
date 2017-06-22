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

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {!! Form::label('programme_type', 'Programme Type:') !!}
                                        {!! programmeTypeDropdown('programme_type', old('programme_type')? old('programme_type') : isset($programme) ? $programme->programme_type : '', ['class' => 'form-control', 'id' => 'programme_type']) !!}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {!! Form::label('programme_type', 'Programme Faculty:') !!}
                                        {!! programmeFacultyDropdown('programme_faculty', old('programme_faculty')? old('programme_faculty') : isset($programme) ? $programme->programme_faculty : '', ['class' => 'form-control', 'id' => 'programme_faculty']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('programme_of_study', 'Programme of Study:') !!}
                                {!! programmesDropdown('programme_of_study', old('programme_of_study')? old('programme_of_study') : isset($programme) ? $programme->programme_of_study : '', ['class' => 'form-control','id' => 'programme_of_study']) !!}
                                @if($errors->has('programme_of_study'))
                                    <p class="help-block"><em class="text-danger">{{ $errors->first('programme_of_study') }}</em></p>
                                @endif
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
    <script>
        var programmeTypeCurrentId = "{{ isset($programme) ? $programme->programme_type : 1 }}";
        var programmeFacultyCurrentId = "{{ isset($programme) ? $programme->programme_faculty : 1 }}";
        var programmeOfStudyCurrentId = "{{ isset($programme) ? $programme->programme_of_study : 1 }}";

        var programmeTypeUrl = "{{ route('get.programme-type') }}";
        var programmeFacultyUrl = "{{ route('get.programme-faculty') }}";
        var programmeOfStudyUrl = "{{ route('get.programme-of-study') }}";
    </script>
@stop
