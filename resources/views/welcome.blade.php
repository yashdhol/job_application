@extends('layouts.web_layout')
@section('content')
<div class="col-xl-4 col-lg-4 content-left">
    <div class="content-left-wrapper">
        <div>
            <figure><img src="{{ asset('assets/info_graphic_1.svg')}}" alt="" class="img-fluid" width="270" height="270"></figure>
            <h2>We are Hiring</h2>
            <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant,</p>
        </div>

    </div>
    <!-- /content-left-wrapper -->
</div>
<!-- /content-left -->
<div class="col-xl-8 col-lg-8 content-right" id="start">
    <div id="wizard_container" class="wizard" novalidate="novalidate">
        <div id="top-wizard">
            @include('errormessage')
            <span id="location">0 of 6 completed</span>
            <div id="progressbar" class="ui-progressbar ui-widget ui-widget-content ui-corner-all" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                <div class="ui-progressbar-value ui-widget-header ui-corner-left" style="width: 0%; display: none;"></div>
            </div>
        </div>
        <!-- /top-wizard -->
        <form id="wrapped" method="POST" enctype="multipart/form-data" class="fl-form fl-style-1 wizard-form" novalidate="novalidate" action="{{ route('submit-data') }}">
            <input id="website" name="website" type="text" value="">
            @csrf
            <!-- Leave for security protection, read docs for details -->
            <div id="middle-wizard" class="wizard-branch wizard-wrapper">
                <div class="step wizard-step current" style="">
                    <h2 class="section_title wizard-header">Basic Details</h2>
                    <!-- <h3 class="main_question">Select your specialities</h3> -->
                    <div class="form-group add_top_30">
                        <div class="fl-wrap fl-wrap-input fl-is-required">
                            <label for="name" class="fl-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control required fl-input" onchange="getVals(this, 'name_field');" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="fl-wrap fl-wrap-input fl-is-required">
                            <label for="email" class="fl-label">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control required fl-input" onchange="getVals(this, 'email_field');" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="form-group add_top_30">
                        <div class="fl-wrap fl-wrap-textarea fl-is-required">
                            <label for="address" class="fl-label">Address</label>
                            <textarea name="address" id="address" class="form-control required fl-textarea" style="height: 150px" placeholder="Address"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="fl-wrap fl-wrap-input fl-is-required">
                            <label for="contact" class="fl-label">Contact</label>
                            <input type="text" name="contact" id="contact" class="form-control required fl-input" placeholder="Contact">
                        </div>
                    </div>
                    <label>Gender</label>
                    <div class="form-group radio_input">
                        <label class="container_radio mr-3">Male
                            <input type="radio" name="gender" value="Male" class="required">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_radio">Female
                            <input type="radio" name="gender" value="Female" class="required">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <!-- /step-->
                <div class="step wizard-step" style="display: none;">
                    <h2 class="section_title">Education details </h2>
                    <div class="row">
                        <div class="col-md-12">
                            <label>SSC</label>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="fl-wrap fl-wrap-input fl-is-required">
                                <label for="bord" class="fl-label">Bord</label>
                                <input type="text" name="education[0][board_university]" id="bord_0" value="SSC" class="form-control required fl-input" placeholder="Bord">
                            </div> 
                        </div>
                        <div class="form-group col-md-4">
                            <div class="fl-wrap fl-wrap-input fl-is-required">
                                <label for="Year" class="fl-label">Year</label>
                                <input type="number" name="education[0][year]" id="Year_0" class="form-control required fl-input" placeholder="Year">
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="fl-wrap fl-wrap-input fl-is-required">
                                <label for="percentage" class="fl-label">CGPA/Percentage</label>
                                <input type="number" name="education[0][CGPA_percentage]" id="percentage_0" class="form-control required fl-input" placeholder="CGPA/Percentage">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>HSC</label>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="fl-wrap fl-wrap-input fl-is-required">
                                <label for="bord" class="fl-label">Bord</label>
                                <input type="text" name="education[1][board_university]" id="bord_1" value="HSC" class="form-control required fl-input" placeholder="Bord">
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="fl-wrap fl-wrap-input fl-is-required">
                                <label for="Year" class="fl-label">Year</label>
                                <input type="number" name="education[1][year]" id="Year_1" class="form-control required fl-input" placeholder="Year">
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="fl-wrap fl-wrap-input fl-is-required">
                                <label for="percentage" class="fl-label">CGPA/Percentage</label>
                                <input type="number" name="education[1][CGPA_percentage]" id="percentage_1" class="form-control required fl-input" placeholder="CGPA/Percentage">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Graduation</label>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="fl-wrap fl-wrap-input fl-is-required">
                                <label for="bord" class="fl-label">Bord</label>
                                <input type="text" name="education[2][board_university]" id="bord_2" value="Graduation" class="form-control required fl-input" placeholder="Bord">
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="fl-wrap fl-wrap-input fl-is-required">
                                <label for="Year" class="fl-label">Year</label>
                                <input type="number" name="education[2][year]" id="Year_2" class="form-control required fl-input" placeholder="Year">
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="fl-wrap fl-wrap-input fl-is-required">
                                <label for="percentage" class="fl-label">CGPA/Percentage</label>
                                <input type="number" name="education[2][CGPA_percentage]" id="percentage_2" class="form-control required fl-input" placeholder="CGPA/Percentage">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label> Master Degree</label>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="fl-wrap fl-wrap-input">
                                <label for="bord" class="fl-label">Bord</label>
                                <input type="text" name="education[3][board_university]" id="bord_3" value="Master Degree" class="form-control fl-input" placeholder="Bord">
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="fl-wrap fl-wrap-input">
                                <label for="Year" class="fl-label">Year</label>
                                <input type="number" name="education[3][year]" id="Year_3" class="form-control fl-input" placeholder="Year">
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="fl-wrap fl-wrap-input">
                                <label for="percentage" class="fl-label">CGPA/Percentage</label>
                                <input type="number" name="education[3][CGPA_percentage]" id="percentage_3" class="form-control fl-input" placeholder="CGPA/Percentage">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /step-->
                <div class="step wizard-step" style="display: none;">
                    <h2 class="section_title">Work Experience </h2>
                    <span class="experience_data" id="experience_data">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <div class="fl-wrap fl-wrap-input fl-is-required">
                                    <label for="Company" class="fl-label">Company</label>
                                    <input type="text" name="experience[0][company]" id="Company" class="form-control required fl-input" placeholder="Company">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="fl-wrap fl-wrap-input fl-is-required">
                                    <label for="Designation" class="fl-label">Designation</label>
                                    <input type="text" name="experience[0][designation]" id="Designation" class="form-control required fl-input" placeholder="Designation">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="fl-wrap fl-wrap-input fl-is-required">
                                    <label for="FromDate" class="fl-label">From</label>
                                    <input type="date" name="experience[0][from_date]" id="FromDate" class="form-control required fl-input" placeholder="FromDate">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="fl-wrap fl-wrap-input fl-is-required">
                                    <label for="ToDate" class="fl-label">To</label>
                                    <input type="date" name="experience[0][to_date]" id="ToDate" class="form-control required fl-input" placeholder="ToDate">
                                </div>
                            </div>
                        </div>
                    </span>
                    <button type="button" class="forward" onclick="addExperience()">Add More</button>
                </div>
                <!-- /step-->
                <div class="step wizard-step current known-languages" style="display: none">
                    <h2 class="section_title wizard-header">Technical Experience </h2>
                    <h3 class="main_question">Select your Technology</h3>
                    @foreach($technical_skill as $key => $skill)
                    <div class="form-group">
                        <label class="container_check version_2 d-inline">{{$skill}}
                            <input type="checkbox" name="technical_experience[{{$key}}][technology]" value="{{$skill}}">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_radio mr-3 d-inline">Beginner
                            <input type="radio" name="technical_experience[{{$key}}][skill]" value="beginner" class="">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_radio d-inline">Mediator
                            <input type="radio" name="technical_experience[{{$key}}][skill]" value="Mediator" class="">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_radio d-inline">Expert
                            <input type="radio" name="technical_experience[{{$key}}][skill]" value="expert" class="">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    @endforeach
                </div>
                <!-- /step-->
                <div class="step wizard-step current" style="display: none">
                    <h2 class="section_title wizard-header">Known Languages </h2>
                    <h3 class="main_question">Select your specialities</h3>
                    @foreach($languages as $key => $language)
                    <div class="form-group">
                        <label class="container_check version_2 d-inline">{{$language}}
                            <input type="checkbox" name="languages[{{$key}}][languages]" value="{{$language}}" class="required valid">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_check version_2 d-inline">Read
                            <input type="checkbox" name="languages[{{$key}}][is_read]" value="1" class="">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_check version_2 d-inline">Write
                            <input type="checkbox" name="languages[{{$key}}][is_write]" value="1" class="">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_check version_2 d-inline">Speck
                            <input type="checkbox" name="languages[{{$key}}][is_speck]" value="1" class="">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    @endforeach
                </div>
                <!-- /step-->
                <div class="step wizard-step" style="display: none;">
                    <h2 class="section_title">Preference </h2>
                    <div class="form-group add_top_30">
                        <div class="fl-wrap fl-wrap-textarea fl-is-required">
                            <label>Location</label>
                            <select name="preferred_location"  class="form-control required fl-input" >
                                @foreach($locations as $key => $lo)
                                <option value="{{$lo['name']}}">{{$lo['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="fl-wrap fl-wrap-input fl-is-required">
                            <label for="expected_CTC" class="fl-label">Expected CTC</label>
                            <input type="text" name="expected_CTC" id="expected_CTC" class="form-control required fl-input" placeholder="Expected CTC">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="fl-wrap fl-wrap-input fl-is-required">
                            <label for="current_CTC" class="fl-label">Current CTC</label>
                            <input type="text" name="current_CTC" id="current_CTC" class="form-control required fl-input" placeholder="Current CTC">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="fl-wrap fl-wrap-input fl-is-required">
                            <label for="notice_period" class="fl-label">Notice Period</label>
                            <input type="text" name="notice_period" id="notice_period" class="form-control required fl-input" placeholder="Notice Period">
                        </div>
                    </div>
                </div>
                <!-- /step-->
                <div class="submit step wizard-step" id="end" style="display: none;">
                    <div class="summary">
                        <div class="wrapper">
                            <h3>Thank your for your time<br><span id="name_field"></span>!</h3>
                            <p>We will contat you shorly at the following email address <strong id="email_field"></strong></p>
                        </div>
                        <div class="text-center">
                            <div class="form-group terms">
                                <label class="container_check">Please accept our <a href="#" data-toggle="modal" data-target="#terms-txt">Terms and conditions</a> before Submit
                                    <input type="checkbox" name="terms" value="Yes" class="required">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /step last-->
            </div>
            <!-- /middle-wizard -->
            <div id="bottom-wizard">
                <button type="button" name="backward" class="backward" disabled="disabled">Prev</button>
                <button type="button" name="forward" class="forward">Next</button>
                <button type="submit" name="process" class="submit" disabled="disabled">Submit</button>
            </div>
            <!-- /bottom-wizard -->
        </form>
    </div>
    <!-- /Wizard container -->
</div>
<!-- /content-right-->
@endsection