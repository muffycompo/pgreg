@extends('master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Next of Kin Details</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            @include('partials._notification')
            <div class="panel panel-default">
                <div class="panel-heading">
                    Next of Kin
                </div>
                <div class="panel-body">
                    <div class="row">
                        {!! Form::open(['route'=>'post-nok', 'role'=>'form']) !!}
                        <div class="col-lg-6">
                                <div class="form-group">
                                    {!! Form::label('firstname', 'First Name:') !!}
                                    {!! Form::text('firstname', old('firstname')? old('firstname') : isset($nok) ? $nok->firstname : '', ['class' => 'form-control']) !!}
                                    @if($errors->has('firstname'))
                                        <p class="help-block"><small><span class="text-danger">{!! $errors->first('firstname') !!}</span></small></p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    {!! Form::label('middlename', 'Middle Name:') !!}
                                    {!! Form::text('middlename', old('firstname')? old('firstname') : isset($nok) ? $nok->firstname : '', ['class' => 'form-control']) !!}
                                    @if($errors->has('middlename'))
                                        <p class="help-block"><small><span class="text-danger">{!! $errors->first('middlename') !!}</span></small></p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    {!! Form::label('lastname', 'Last Name (Surname):') !!}
                                    {!! Form::text('lastname', old('lastname')? old('lastname') : isset($nok) ? $nok->lastname : '', ['class' => 'form-control']) !!}
                                    @if($errors->has('lastname'))
                                        <p class="help-block"><small><span class="text-danger">{!! $errors->first('lastname') !!}</span></small></p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    {!! Form::label('phone', 'Phone:') !!}
                                    {!! Form::text('phone', old('phone')? old('phone') : isset($nok) ? $nok->phone : '', ['class' => 'form-control']) !!}
                                    @if($errors->has('phone'))
                                        <p class="help-block"><small><span class="text-danger">{!! $errors->first('phone') !!}</span></small></p>
                                    @endif
                                </div>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                        <div class="col-lg-6">

                            <div class="form-group">
                                {!! Form::label('relationship', 'Relationship:') !!}
                                {!! relationshipDropdown('relationship', old('relationship')? old('relationship') : isset($nok) ? $nok->relationship_id : null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('address', 'Address:') !!}
                                {!! Form::textarea('address', old('address')? old('address') : isset($nok) ? $nok->address : null, ['class' => 'form-control','rows'=>'3']) !!}
                                @if($errors->has('address'))
                                    <p class="help-block"><small><span class="text-danger">{!! $errors->first('address') !!}</span></small></p>
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

@stop