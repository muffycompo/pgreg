@extends('master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Personal Details</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            @include('partials._notification')
            <div class="panel panel-default">
                <div class="panel-heading">
                    Bio Data
                </div>
                <div class="panel-body">
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ $personal->passport_photo_path ? asset($personal->passport_photo_path) : asset('/assets/images/passport-placeholder.png')}}" alt="Passport Photo" class="img-centered img-thumbnail" width="105" height="115">
                                </div>
                                <div class="col-md-8">
                                    {!! Form::open(['route' => 'post-upload-photo', 'class' => 'dropzone', 'id' => 'passportPhoto']) !!}
                                    <div class="dz-message">
                                        <span class="text-center">
                                            Drag & drop passport photo here to upload!
                                        </span>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                                <div class="col-md-12"><hr></div>
                            </div>

                            {!! Form::open(['route'=>'post-personal', 'role'=>'form']) !!}
                                <div class="form-group">
                                    {!! Form::label('firstname', 'First Name:') !!}
                                    {!! Form::text('firstname', old('firstname')? old('firstname') : $personal->firstname, ['class' => 'form-control']) !!}
                                    @if($errors->has('firstname'))
                                        <p class="help-block"><small><span class="text-danger">{!! $errors->first('firstname') !!}</span></small></p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    {!! Form::label('middlename', 'Middle Name:') !!}
                                    {!! Form::text('middlename', old('middlename')? old('middlename') : $personal->middlename, ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('lastname', 'Last Name (Surname):') !!}
                                    {!! Form::text('lastname', old('lastname')? old('lastname') : $personal->surname, ['class' => 'form-control']) !!}
                                    @if($errors->has('lastname'))
                                        <p class="help-block"><small><span class="text-danger">{!! $errors->first('lastname') !!}</span></small></p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    {!! Form::label('dob', 'Date of Birth:') !!}
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            {!! Form::label('dob_day', 'Day') !!}
                                            {!! Form::selectRange('dob_day', 01, 31, old('dob_day')? old('dob_day') : explode('-',$personal->dob)[2], ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::label('dob_month', 'Month') !!}
                                            {!! Form::selectMonth('dob_month', old('dob_month')? old('dob_month') : explode('-',$personal->dob)[1], ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            {!! Form::label('dob_year', 'Year') !!}
                                            {!! Form::selectYear('dob_year', 1930, date('Y'), old('dob_year')? old('dob_year') : explode('-',$personal->dob)[0], ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('place_of_birth', 'Place of Birth:') !!}
                                    {!! Form::text('place_of_birth', old('place_of_birth')? old('place_of_birth') : $personal->place_of_birth, ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('gender', 'Gender:') !!}
                                    {!! genderDropdown('gender', old('gender')? old('gender') : $personal->gender, ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('marital_status', 'Marital Status:') !!}
                                    {!! maritalStatusDropdown('marital_status', old('marital_status')? old('marital_status') : $personal->ms_id, ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('phone', 'Phone:') !!}
                                    {!! Form::text('phone', old('phone')? old('phone') : $personal->phone, ['class' => 'form-control']) !!}
                                    @if($errors->has('phone'))
                                        <p class="help-block"><small><span class="text-danger">{!! $errors->first('phone') !!}</span></small></p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    {!! Form::label('email', 'Email:') !!}
                                    {!! Form::text('email', old('email')? old('email') : $personal->email, ['class' => 'form-control']) !!}
                                    @if($errors->has('email'))
                                        <p class="help-block"><small><span class="text-danger">{!! $errors->first('email') !!}</span></small></p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    {!! Form::label('country', 'Country:') !!}
                                    {!! countryDropdown('country', old('country')? old('country') : $personal->country_id, ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('state_id', 'State:') !!}
                                    {!! stateDropdown('state_id', old('state_id')? old('state_id') : $personal->state_id, ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('lga', 'L.G.A:') !!}
                                    {!! Form::text('lga', old('lga')? old('lga') : $personal->lga, ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('home_town', 'Home Town:') !!}
                                    {!! Form::text('home_town', old('home_town')? old('home_town') : $personal->home_town, ['class' => 'form-control']) !!}
                                </div>

                        </div>
                        <!-- /.col-lg-6 (nested) -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                {!! Form::label('address', 'Contact Address:') !!}
                                {!! Form::textarea('address', old('address')? old('address') : $personal->contact_address, ['class' => 'form-control','rows'=>'3']) !!}
                                @if($errors->has('address'))
                                    <p class="help-block"><small><span class="text-danger">{!! $errors->first('address') !!}</span></small></p>
                                @endif
                            </div>

                            <div class="form-group">
                                {!! Form::label('contact_country', 'Contact Address Country:') !!}
                                {!! countryDropdown('contact_country', old('contact_country')? old('contact_country') : $personal->contact_country_id, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('contact_state_id', 'Contact Address State:') !!}
                                {!! stateDropdown('contact_state_id', old('contact_state_id')? old('contact_state_id') : $personal->contact_state_id, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('contact_lga', 'Contact Address L.G.A:') !!}
                                {!! Form::text('contact_lga', old('contact_lga')? old('contact_lga') : $personal->contact_lga, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('town_city', 'Town/City:') !!}
                                {!! Form::text('town_city', old('town_city')? old('town_city') : $personal->town_city, ['class' => 'form-control']) !!}
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

@section('header.styles')
    <link rel="stylesheet" href="{{ asset('/assets/css/dropzone.min.css') }}">
@stop

@section('footer.scripts')
<script src="{{ asset('/assets/js/dropzone.min.js') }}"></script>
<script>
    Dropzone.options.passportPhoto = {
        paramName: 'passport',
        maxFilesize: 1,
        uploadMultiple: false,
        maxFiles: 1,
        acceptedFiles: '.jpg, .jpeg, .png, .bmp',
        init: function() {
            this.on("maxfilesexceeded", function (file) {
                this.removeFile(file);
            });
            this.on("success",function(file){
                // Maybe find a cleaner way
                location.reload(true);
            });
        }
    };
</script>
@stop