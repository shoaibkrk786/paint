<div class="col-lg-12 col-sm-12" id="bgnews" style="margin-top: 0px;">


<div class=" col-lg-12 col-sm-12 ">

<h2 id="letter" style=" color:#F90105">Email Newsletters</h2>

<h3 style="color:#F5EEEE" id="chek_prblm"> Check your home paints problems for free!</h3>

    <form id="emailsub" method="post">
        {{ csrf_field() }}
        <div class="input-prepend" id="newsletter"><span class="add-on"><i class="icon-envelope"></i></span>
            <input type="email" id="emailforSub" name="email" placeholder="Type Email here.." style=" size:12px;" class="height1"/>
            <input type="button" value="Add" class="btn btn-large width2 emailSubs" style="background-color:#FD0509"  id="email_btn">
        </div>
    </form>
</div>
</div>




    <div class="col-lg-12 col-sm-12"  style="background-color: #262626;">
        <img src="{{ URL::asset('images/PK.png') }}" height="100" width="100"  id="pk"  class="img-responsive"/>
    </div>
<div class="col-lg-12 col-sm-12" id="footer_bgc">
    <div class="col-lg-12 col-sm-12">
        <div class="col-lg-4"></div>
        <div class="col-lg-4"><br><br>
            <h1 align="center" style="color:red"> Paint Khareedo</h1>
            <P align="center"style="color:white">  A Complete paint solution</P>
            <ul style="color:#575757" class="nav navbar-nav hide">
                <li><a href="/all-brands" style="color:#575757">Brands</a></li>
                <li><a href="/service-painter" style="color:#575757">Painter</a></li>
                <li><a href="/service-carpenter" style="color:#575757">Carpenter</a></li>
                <li><a href="/paint-wall" style="color:#575757">Paint wall</a></li>
            </ul>
            <div class="col-lg-12 col-sm-12" align="center">
<!--                <a  href="#" <i class="fa fa-pinterest-square" style="font-size:35px;color:#575757"></i></a>   
                <a  href="#" <i class="fa fa-tumblr-square" style="font-size:35px;color:#575757"></i></a>
                <a  href="#" <i class="fa fa-linkedin-square" style="font-size:35px;color:#575757"></i></a>
                <a  href="#" <i class="fa fa-google-plus-square" style="font-size:35px;color:#575757"></i></a>-->
                <a  href="http://fb.com/paintkhareedo" target="_blank" <i class="fa fa-facebook" style="font-size:35px;color:white"></i></a>
            </div>

        </div>


        <div class="col-lg-4"></div>
        <div class="col-lg-12 col-sm-12">
            <center><p style="color: dimgray; margin-top: 2%;">Copyright ©2017 Paintkhareedo - A complete Paint solution in Pakistan - All Rights Reserved. - A Division of Brosol.net </p></center>
        </div>
    </div>
</div>
<script>
    $('#query').validate({
        rules: {
            mobile: {
                required: true,
                digits: true
            },
            name: {
                required: true
            },
            description: {
                required: true
            }
        },
        highlight: function (element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function (error, element) {
        },
        submitHandler: function (form) {
            //loginFormSubmitHandler(form);
        }
    });


    $(".send").click(function () {

        if ($("#query").valid())
        {
            var params = $("#query").serialize();

            var url = ajax_url + 'place-query';

            var successCallback = function (res) {
                res = jQuery.parseJSON(res);
                if (res.status == true)
                {
                    $(".query_form").slideUp();
                    $(".after_query").slideDown();

                }
            };

            ajx(url, 'post', params, successCallback, 'html');
        } else
        {
            $(".queryAlert").show();
            setTimeout(function () {
                $("#queryAlert").slideUp();
            }, 5000);
        }

    });


    $('#emailsub').validate({
        rules: {
            email: {
                required: true,
                email: true
            },
        },
        highlight: function (element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function (error, element) {
        },
        submitHandler: function (form) {
            //loginFormSubmitHandler(form);
        }
    });

    $(".emailSubs").click(function () {

        if ($("#emailsub").valid())
        {
            var params = $("#emailsub").serialize();

            var url = ajax_url + 'email-sub';

            var successCallback = function (res) {
                res = jQuery.parseJSON(res);
                if (res.status == true)
                {
                    $(".emailSubs").val("Sent");
                }
            };

            ajx(url, 'post', params, successCallback, 'html');
        }

    });

    $(document).on("click", ".remove_shopping", function () {

        var params = {};
        params.id = $(this).attr("id");

        var url = ajax_url + 'remove-shopping';

        var successCallback = function () {
            get_basket();
        };

        ajx(url, 'get', params, successCallback, 'html');

    });


</script>
<script type="text/javascript">
    window.$zopim || (function (d, s) {
        var z = $zopim = function (c) {
            z._.push(c)
        }, $ = z.s =
                d.createElement(s), e = d.getElementsByTagName(s)[0];
        z.set = function (o) {
            z.set.
                    _.push(o)
        };
        z._ = [];
        z.set._ = [];
        $.async = !0;
        $.setAttribute("charset", "utf-8");
        $.src = "https://v2.zopim.com/?1HX0FY2CxXp9lwO1zcr15XAFQZNf4j8r";
        z.t = +new Date;
        $.
                type = "text/javascript";
        e.parentNode.insertBefore($, e)
    })(document, "script");
</script>

