<!DOCTYPE html>
<html lang="en">
    <head>
        {{ Theme::partial('seostuff') }}
        <meta charset="utf-8">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        {{ Theme::partial('defaultcss') }}
        {{ Theme::asset()->styles() }}
    </head>
    <body>
        <div class="main-body-wrapper">
            {{ Theme::partial('header') }}

            <!-- BEGIN .main-content-wrapper -->
            <div class="main-content-wrapper">
                {{ Theme::place('content') }}
            </div>

            {{ Theme::partial('footer') }}
            {{ Theme::partial('defaultjs') }}
            {{ Theme::asset()->scripts() }}
	    {{ Theme::asset()->container('footer')->scripts() }}
	    {{ Theme::partial('analytic') }}
        </div>
    </body>
</html>                            