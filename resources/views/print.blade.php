<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bingham University School of Postgraduate Studies</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/assets/css/bootstrap-default.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('/assets/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/custom-print.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{ asset('/assets/js/html5shiv.js') }}"></script>
    <script src="{{ asset('/assets/js/respond.min.js')  }}"></script>
    <![endif]-->

</head>

<body>

<div class="container">
    <div class="row print-logo">
        <div class="col-md-12">
            <p class="text-center">
                <img src="{{ asset('/assets/images/print-logo.png') }}" alt="Logo">
                @if(null !== $personal && !empty($personal->passport_photo_path))
                    <img src="{{ asset($personal->passport_photo_path) }}" alt="Passport" class="img-thumbnail" height="115" width="105">
                @else
                    <img src="{{ asset('/assets/images/passport-placeholder.png') }}" alt="Passport" class="img-thumbnail" height="115" width="105">
                @endif
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title text-center">SSCE Details <a href="javascript:;" onclick="window.print();"  class="btn btn-info pull-right hidden-print"><span class="glyphicon glyphicon-print"></span> Print</a></h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>SSCE Status:</td>
                                <td>{{ null !== $result ? expandSSCEStatus($result->ssce_status) : '' }}</td>
                            </tr>
                            <tr>
                                <td>Number of result combination:</td>
                                <td>{{ null !== $result ? $result->number_of_sitting : '' }}</td>
                            </tr>
                            <tr>
                                <td>Organization:</td>
                                <td>{{ null !== $result ? $result->organization : '' }}</td>
                            </tr>
                            <tr>
                                <td>SSCE Exam Type:</td>
                                <td>{{ null !== $result ? expandExamType($result->exam_type_id) : '' }}</td>
                            </tr>
                            <tr>
                                <td>SSCE Exam Year:</td>
                                <td>{{ null !== $result ? $result->exam_year : '' }}</td>
                            </tr>
                            <tr>
                                <td><strong>Subject</strong></td>
                                <td><strong>Grade</strong></td>
                            </tr>
                        {{-- Loop through Subject Lists --}}
                            @if(isset($exams) && count($exams) > 0)
                                @foreach($exams as $exam)
                                    <tr>
                                        <td>{{ expandExamSubject($exam->subject_id) }}</td>
                                        <td>{{ expandExamGrade($exam->grade) }}</td>
                                    </tr>
                                @endforeach
                             @endif
                            {{-- End Loop through Subject Lists --}}
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">Personal Details</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>Email:</td>
                                <td>{{ null !== $personal ? $personal->email : '' }}</td>
                            </tr>
                            <tr>
                                <td>Last Name (Surname):</td>
                                <td>{{ null !== $personal ? $personal->surname : '' }}</td>
                            </tr>
                            <tr>
                                <td>First Name:</td>
                                <td>{{ null !== $personal ? $personal->firstname : '' }}</td>
                            </tr>
                            <tr>
                                <td>Middle Name:</td>
                                <td>{{ null !== $personal ? $personal->middlename : '' }}</td>
                            </tr>
                            <tr>
                                <td>Date of Birth:</td>
                                <td>{{ null !== $personal ? $personal->dob->format('d/m/Y') : '' }}</td>
                            </tr>
                            <tr>
                                <td>Place of Birth:</td>
                                <td>{{ null !== $personal ? $personal->place_of_birth : '' }}</td>
                            </tr>
                            <tr>
                                <td>Sex:</td>
                                <td>{{ null !== $personal ? expandGender($personal->gender) : '' }}</td>
                            </tr>
                            <tr>
                                <td>Marital Status:</td>
                                <td>{{ null !== $personal ? expandMaritalStatus($personal->ms_id) : '' }}</td>
                            </tr>
                            <tr>
                                <td>Mobile Phone:</td>
                                <td>{{ null !== $personal ? $personal->phone : '' }}</td>
                            </tr>
                            <tr>
                                <td>Country:</td>
                                <td>{{ null !== $personal ? expandCountry($personal->country_id) : '' }}</td>
                            </tr>
                            <tr>
                                <td>State of Origin:</td>
                                <td>{{ null !== $personal ? expandState($personal->state_id) : '' }}</td>
                            </tr>
                            <tr>
                                <td>LGA:</td>
                                <td>{{ null !== $personal ? $personal->lga : '' }}</td>
                            </tr>
                            <tr>
                                <td>Home Town:</td>
                                <td>{{ null !== $personal ? $personal->home_town : '' }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">Contact Address</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>Address:</td>
                                <td>{{ null !== $personal ? $personal->contact_address : '' }}</td>
                            </tr>
                            <tr>
                                <td>Country:</td>
                                <td>{{ null !== $personal ? expandCountry($personal->contact_country_id) : '' }}</td>
                            </tr>
                            <tr>
                                <td>State:</td>
                                <td>{{ null !== $personal ? expandState($personal->contact_state_id) : '' }}</td>
                            </tr>
                            <tr>
                                <td>LGA:</td>
                                <td>{{ null !== $personal ? $personal->contact_lga : '' }}</td>
                            </tr>
                            <tr>
                                <td>Town/City:</td>
                                <td>{{ null !== $personal ? $personal->town_city : '' }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">Next of Kin Details</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>Last Name (Surname):</td>
                                <td>{{ null !== $nok ? $nok->lastname : '' }}</td>
                            </tr>
                            <tr>
                                <td>First Name:</td>
                                <td>{{ null !== $nok ? $nok->firstname : '' }}</td>
                            </tr>
                            <tr>
                                <td>Middle Name:</td>
                                <td>{{ null !== $nok ? $nok->surname : '' }}</td>
                            </tr>
                            <tr>
                                <td>Phone Number:</td>
                                <td>{{ null !== $nok ? $nok->phone : '' }}</td>
                            </tr>
                            <tr>
                                <td>Relationship:</td>
                                <td>{{ null !== $nok ? expandRelationship($nok->relationship_id) : '' }}</td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td>{{ null !== $nok ? $nok->address : '' }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">Qualification Obtained so far with dates</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Qualification</th>
                            <th>Course</th>
                            <th>School</th>
                            <th>Date</th>
                            <th>Grade</th>
                        </tr>
                        </thead>
                        @if(isset($qualifications) && count($qualifications) > 0)
                            <tbody>
                                @foreach($qualifications as $qualification)
                                    <tr>
                                        <td>{{ $qualification->qualification }}</td>
                                        <td>{{ $qualification->course }}</td>
                                        <td>{{ $qualification->school }}</td>
                                        <td>{{ $qualification->qualification_date }}</td>
                                        <td>{{ $qualification->grade }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        @endif
                    </table>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">Proposed Programme of Study</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>Programme Type:</td>
                                <td>{{ null !== $programme ? expandProgramType($programme->programme_type) : '' }}</td>
                            </tr>
                            <tr>
                                <td>Program of Study:</td>
                                <td>{{ null !== $programme ? expandProgramOfStudy($programme->programme_of_study) : '' }}</td>
                            </tr>
                            <tr>
                                <td>Mode of Study:</td>
                                <td>{{ null !== $programme ? expandStudyMode($programme->mode_of_study) : '' }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

</body>

</html>
