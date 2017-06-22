$(document).ready(function(){
    // Enable Tooltips
    //$('[data-toggle="tooltip"]').tooltip();

    // Dynamic Dropdown
    var programmeTypeDropdown = $('#programme_type');
    var programmeFacultyDropdown = $('#programme_faculty');

    // Default Programme Types
    $.ajax({
        type: 'get',
        url: programmeTypeUrl,
        // data: {
        //     programme_type_id: programmeTypeCurrentId
        // },
        success: function(data) {
            // console.log(data);
            var options = '';
            var programmeTypeData = $.parseJSON(data);
            $.each(programmeTypeData, function(i, programmeType) {
                if(programmeType.id == programmeTypeCurrentId){
                    $strProgramType = '<option selected value="';
                } else {
                    $strProgramType = '<option value="';
                }
                options += $strProgramType + programmeType.id + '">' + programmeType.programme_type + '</option>';
            });

            $('#programme_type').html(options);

        }
    });

    // Default Programme Faculties
    $.ajax({
        type: 'get',
        url: programmeFacultyUrl,
        // data: {
        //     programme_faculty_id: programmeFacultyCurrentId
        // },
        success: function(data) {
            // console.log(data);
            var options = '';
            var programmeFacultyData = $.parseJSON(data);
            $.each(programmeFacultyData, function(i, programmeFaculty) {
                if(programmeFaculty.id == programmeFacultyCurrentId){
                    $strProgramFaculty = '<option selected value="';
                } else {
                    $strProgramFaculty = '<option value="';
                }
                options += $strProgramFaculty + programmeFaculty.id + '">' + programmeFaculty.category_name + '</option>';
            });

            $('#programme_faculty').html(options);

        }
    });

    // Default Programme of Study
    $.ajax({
        type: 'get',
        url: programmeOfStudyUrl,
        data: {
            programme_type_id: programmeTypeCurrentId,
            programme_faculty_id: programmeFacultyCurrentId
        },
        success: function(data) {
            var options = '';
            var programmeOfStudyData = $.parseJSON(data);
            $.each(programmeOfStudyData, function(i, programmeOfStudy) {
                if(programmeOfStudy.id == programmeOfStudyCurrentId){
                    $strProgramOfStudy = '<option selected value="';
                } else {
                    $strProgramOfStudy = '<option value="';
                }
                options += $strProgramOfStudy + programmeOfStudy.id + '">' + programmeOfStudy.course_name + '</option>';
            });

            $('#programme_of_study').html(options);

        }
    });

    // Ajax Call
    var programmeAjax = function () {
        var programmeFacultyId = programmeFacultyDropdown.val();
        var programmeTypeId = programmeTypeDropdown.val();

        $.ajax({
            type: 'get',
            url: programmeOfStudyUrl,
            data: {
                programme_type_id: programmeTypeId,
                programme_faculty_id: programmeFacultyId
            },
            success: function(data) {

                var options = '';
                var programmeOfStudyData = $.parseJSON(data);
                $.each(programmeOfStudyData, function(i, programmeOfStudy) {
                    options += '<option value="' + programmeOfStudy.id + '">' + programmeOfStudy.course_name + '</option>';
                });

                $('#programme_of_study').html(options);

            }
        });
    }
    // Dropdown based on Faculty Selection and Programme Type
    programmeTypeDropdown.on('change', programmeAjax);
    programmeFacultyDropdown.on('change', programmeAjax);

});