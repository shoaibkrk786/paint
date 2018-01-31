<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paint Khareedo</title>

    <link href="{{ URL::asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/datepicker3.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('admin/css/styles.css')}}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="{{ URL::asset('admin/js/html5shiv.js')}}"></script>
    <script src="{{ URL::asset('admin/js/respond.min.js')}}"></script>
    <![endif]-->

</head>

<body>

<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">Log in</div>
            <div class="panel-body">
                <form role="form" method="post" action="adminlogin">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" required>
                        </div>
                        <input class="btn btn-primary"  type="submit" >

                    </fieldset>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->



<script src="{{ URL::asset('admin/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{ URL::asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('admin/js/chart.min.js')}}"></script>
<script src="{{ URL::asset('admin/js/chart-data.js')}}"></script>
<script src="{{ URL::asset('admin/js/easypiechart.js')}}"></script>
<script src="{{ URL::asset('admin/js/easypiechart-data.js')}}"></script>
<script src="{{ URL::asset('admin/js/bootstrap-datepicker.js')}}"></script>
<script>
    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
</script>
</body>

</html>
