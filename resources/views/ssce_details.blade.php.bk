@extends('master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">SSCE Details</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            @include('partials._notification')
            <div class="panel panel-default">
                <div class="panel-heading">
                    SSCE Details
                </div>
                <div class="panel-body">
                    <div class="row">
                        {!! Form::open(['route'=>'post-ssce', 'role'=>'form']) !!}
                        <div class="col-lg-6">
                                <div class="form-group">
                                    {!! Form::label('ssce_status', 'SSCE Status:') !!}
                                    {!! ssceStatusDropdown('ssce_status', old('ssce_status')? old('ssce_status') : isset($result) ? $result->ssce_status : '', ['class' => 'form-control']) !!}
                                    @if($errors->has('ssce_status'))
                                        <p class="help-block"><small><span class="text-danger">{!! $errors->first('ssce_status') !!}</span></small></p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    {!! Form::label('result_combination', 'Number of Result Combination:') !!}
                                    {!! Form::text('result_combination', old('result_combination')? old('result_combination') : isset($result) ? $result->number_of_sitting : '', ['class' => 'form-control']) !!}
                                    @if($errors->has('result_combination'))
                                        <p class="help-block"><small><span class="text-danger">{!! $errors->first('result_combination') !!}</span></small></p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    {!! Form::label('organization', 'Institution/Centre:') !!}
                                    {!! Form::text('organization', old('organization')? old('organization') : isset($result) ? $result->organization : '', ['class' => 'form-control']) !!}
                                    @if($errors->has('organization'))
                                        <p class="help-block"><small><span class="text-danger">{!! $errors->first('organization') !!}</span></small></p>
                                    @endif
                                </div>

                        </div>
                        <div class="col-lg-6">

                            <div class="form-group">
                                {!! Form::label('exam_type', 'SSCE Exam Type:') !!}
                                {!! examTypeDropdown('exam_type', old('exam_type')? old('exam_type') : isset($result) ? $result->exam_type_id : '', ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('exam_year', 'SSCE Exam Year:') !!}
                                {!! Form::text('exam_year', old('exam_year')? old('exam_year') : isset($result) ? $result->exam_year : '', ['class' => 'form-control','maxlength' => 4]) !!}
                                @if($errors->has('exam_year'))
                                    <p class="help-block"><small><span class="text-danger">{!! $errors->first('exam_year') !!}</span></small></p>
                                @endif
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

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    SSCE Result
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            {!! Form::open(['route'=>'post-olevel-exam', 'role'=>'form']) !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('exam_subject', 'Subject:') !!}
                                        {!! oLevelSubjectsDropdown('exam_subject', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        {!! Form::label('exam_grade', 'Grade:') !!}
                                        {!! oLevelGradesDropdown('exam_grade', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <br>
                                    <p style="margin-top: 5px;"><button type="submit" class="btn btn-success">Add</button></p>
                                </div>
                            </div>

                            {!! Form::close() !!}
                        </div>
                        <div class="col-lg-6">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                    <tr class="text-center">
                                        <th class="text-center">#</th>
                                        <th class="text-center">Subject</th>
                                        <th class="text-center">Grade</th>
                                        <th class="text-center hidden-print">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(isset($exams) && count($exams) > 0)
                                    @foreach($exams as $exam)
                                        <tr class="text-center">
                                            <td>{{ $sn++ }}</td>
                                            <td>{{ expandOLevelExam($exam->subject_id) }}</td>
                                            <td>{{ expandOLevelGrade($exam->grade) }}</td>
                                            <td class="hidden-print"><a href="{{ route('delete-exam',$exam->id) }}" alt="Delete" title="Delete" class="text-danger"><span class="fa fa-remove"></span></a></td>
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