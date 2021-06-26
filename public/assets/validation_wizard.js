/*  Wizard */
jQuery(function ($) {
    expiCount = 1;
    "use strict";
    $("#wizard_container").wizard({
        stepsWrapper: "#wrapped",
        submit: ".submit",
        unidirectional: false,
        beforeSelect: function (event, state) {
            if ($('input#website').val().length != 0) {
                return false;
            }
            if (!state.isMovingForward)
                return true;
            var inputs = $(this).wizard('state').step.find(':input');
            return !inputs.length || !!inputs.valid();
        }
    }).validate({
        errorPlacement: function (error, element) {
            if (element.is(':radio') || element.is(':checkbox')) {
                error.insertBefore(element.next());
            } else {
                error.insertAfter(element);
            }
        }
    });
    //  progress bar
    $("#progressbar").progressbar();
    $("#wizard_container").wizard({
        afterSelect: function (event, state) {
            $("#progressbar").progressbar("value", state.percentComplete);
            $("#location").text("" + state.stepsComplete + " of " + state.stepsPossible + " completed");
        }
    });
});

$("#wizard_container").wizard({
    transitions: {
        branchtype: function ($step, action) {
            var branch = $step.find(":checked").val();
            if (!branch) {
                $("form").valid();
            }
            return branch;
        }
    }
});

/* File upload validate size and file type - For details: https://github.com/snyderp/jquery.validate.file*/
$("form#wrapped")
        .validate({
            rules: {
                fileupload: {
                    fileType: {
                        types: ["pdf", "application/msword", "application/vnd.openxmlformats-officedocument.wordprocessingml.document"]
                    },
                    maxFileSize: {
                        "unit": "KB",
                        "size": 150
                    },
                    minFileSize: {
                        "unit": "KB",
                        "size": "2"
                    }
                }
            }
        });

// Input name and email value
function getVals(formControl, controlType) {
    switch (controlType) {
        case 'name_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#name_field").text(value);
            break;

        case 'email_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#email_field").text(value);
            break;
    }
}
// Input name and email value
function addExperience() {
    var htmlData = '<span id="remove_' + expiCount + '"><hr><button type="button" class="forward" onclick="removeData(' + expiCount + ')">remove</button><div class="row"><div class="form-group col-md-6"><div class="fl-wrap fl-wrap-input fl-is-required"><label for="Company" class="fl-label">Company</label>';
    htmlData = htmlData + '<input type="text" name="experience[' + expiCount + '][company]" id="Company_' + expiCount + '" class="form-control required fl-input" placeholder="Company"></div>'
    htmlData = htmlData + '</div><div class="form-group col-md-6"><div class="fl-wrap fl-wrap-input fl-is-required"><label for="Designation" class="fl-label">Designation</label><input type="text" name="experience[' + expiCount + '][designation]" id="Designation_' + expiCount + '" class="form-control required fl-input" placeholder="Designation"></div>';
    htmlData = htmlData + '</div><div class="form-group col-md-6"><div class="fl-wrap fl-wrap-input fl-is-required"><label for="FromDate" class="fl-label">From</label><input type="date" name="experience[' + expiCount + '][from_date]" id="FromDate' + expiCount + '" class="form-control required fl-input" placeholder="FromDate"></div>';
    htmlData = htmlData + '</div><div class="form-group col-md-6"><div class="fl-wrap fl-wrap-input fl-is-required"><label for="ToDate" class="fl-label">To</label><input type="date" name="experience[' + expiCount + '][to_date]" id="ToDate' + expiCount + '" class="form-control required fl-input" placeholder="ToDate"></div>';
    htmlData = htmlData + '</div></div><span>';
    $('#experience_data').append(htmlData);
    expiCount++;
}
function removeData(count) {
    $('#remove_' + count).remove();
}