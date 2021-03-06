<!DOCTYPE html>
<html lang="en">
    <head>
        {{ Theme::partial('seostuff') }}  
        <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?sensor=false"></script>
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
            {{ Theme::partial('analytic') }}  
        </div>
    </body>
</html>