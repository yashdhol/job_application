<!DOCTYPE html>

<html lang="en" style="" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <title> Job Application Form </title>
        @include('layouts.css')
    </head>
    <body data-new-gr-c-s-check-loaded="14.997.0" data-gr-ext-installed="" style="overflow: visible;">
        <div id="preloader" style="display: none;">
            <div data-loader="circle-side" style="display: none;"></div>
        </div>
        <!-- /Preload -->
        <div id="loader_form">
            <div data-loader="circle-side-2"></div>
        </div>
        <!-- /loader_form -->
        <div class="container-fluid">
            <div class="row row-height">
                @yield('content')
            </div>
            <!-- /row-->
        </div>
        <!-- /container-fluid -->
        <div class="cd-overlay-nav">
            <span class="" style="transform: scaleX(0) scaleY(0); height: 2927.4px; width: 2927.4px; top: -1463.7px; left: -1463.7px;"></span>
        </div>
        <!-- /cd-overlay-nav -->
        <div class="cd-overlay-content">
            <span class="" style="transform: scaleX(0) scaleY(0); height: 2927.4px; width: 2927.4px; top: -1463.7px; left: -1463.7px;"></span>
        </div>
        <!-- /cd-overlay-content -->

        <!-- Modal terms -->
        <div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                        <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                        <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn_1" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- COMMON SCRIPTS -->
        @include('layouts.js')
    </body>
</html>