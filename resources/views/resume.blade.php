<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Resume</title>
        <link type="text/css" rel="stylesheet" href="{{ asset('css/green.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{ asset('css/print.css')}}" media="print"/>
        <script type="text/javascript" src="{{ asset('js/jquery-1.4.2.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.tipsy.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/cufon.yui.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/scrollTo.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/myriad.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.colorbox.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/custom.js')}}"></script>
        <script type="text/javascript">
Cufon.replace('h1,h2');
        </script>
    </head>
    <body>
        <!-- Begin Wrapper -->
        <div id="wrapper">
            <div class="wrapper-mid">
                <!-- Begin Paper -->
                <div id="paper">
                    <div id="paper-mid">
                        <div class="entry">
                            <!--<img class="portrait" src="images/image.jpg" alt="John Smith" />-->
                            <div class="self">
                                <h1 class="name">{{$resume_data->name}} <br />
                                    <span>Interactive Designer</span></h1>
                                <ul>
                                    <li class="mail">{{$resume_data->email}}</li>
                                    <li class="tel">{{$resume_data->contact}}</li>
                                    <li class="ad">{{$resume_data->address}}</li>
                                </ul>
                            </div>
                            <!-- End Personal Information -->
                        </div>
                        <!-- Begin 2nd Row -->
                        <div class="entry">
                            <h2>EDUCATION</h2>
                            @foreach($resume_data->educationDetails as  $education)
                            <div class="content">
                                <h3> {{$education->year}}</h3>
                                <p>{{$education->board_university}}<br />
                                    <em>{{$education->CGPA_percentage}}</em></p>
                            </div>
                            @endforeach
                        </div>
                        <!-- End 2nd Row -->
                        <!-- Begin 3rd Row -->
                        <div class="entry">
                            <h2>Work Experience</h2>
                            @foreach($resume_data->workExperienceDetails as  $technical)
                            <div class="content">
                                <h3>{{date('F Y', strtotime($technical->from_date))}}  - {{date('F Y', strtotime($technical->to_date))}}</h3>
                                <p>{{$technical->company}} <br />
                                    <em>{{$technical->designation}}</em></p>
                            </div>
                            @endforeach
                        </div>
                        <!-- End 3rd Row -->
                        <!-- Begin 4th Row -->
<!--                        <div class="entry">
                            <h2>Technical Experience</h2>
                            <div class="content">
                                <h3>Software Knowledge</h3>
                                <ul class="skills">
                                    <li>Photoshop</li>
                                    <li>Illustrator</li>
                                    <li>InDesign</li>
                                    <li>Flash</li>
                                    <li>Fireworks</li>
                                    <li>Dreamweaver</li>
                                    <li>After Effects</li>
                                    <li>Cinema 4D</li>
                                </ul>
                            </div>
                        </div>-->
                    </div>
                    <div class="clear"></div>
                    <div class="paper-bottom"></div>
                </div>
                <!-- End Paper -->
            </div>
            <div class="wrapper-bottom"></div>
        </div>
        <div id="message"><a href="#top" id="top-link">Go to Top</a></div>
        <!-- End Wrapper -->
    </body>
</html>
