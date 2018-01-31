            <div align="center">
                <a href="/{{ str_slug($user->name) }}"><img src="@if(isset($company->company_name)){{ URL::asset($company->company_logo)}} @else images/personal/default-p.png @endif" class="img-circle  companyMainlogo" width="150" height="150"
                                 alt="img" /> </a>
                <h2>{{ $user->name }}, {{ $user->city }}</h2>
            </div>
            <div class=" col-md-12" id="about_us">
                <div class="panel panel-default" id="abt_us" align="left">
                    <div class="panel-body abt_text"><h2 align="center" style="margin-top:10px;">About Us</h2></div>
                </div>
                <p align="center">
                    {{ @$company->company_about }}
                </p>
            </div>
            <div class="col-md-12" id="followers">
                <div class="panel panel-default hide" id="panel_height">
                    <div class="panel-body "><h2 style="margin-top: 0px;height: 33px;padding: 16px;color: white;">FOLLOWERS
                        </h2>
                        <div id="img_folow"> 
                            <img src="images/paint-wall/paint-wall_follow.png" class="img-circle img-responsive" width="75" height="70"             alt=" img"/>
                        </div>
                    </div>
                </div>
            </div>
`
      <!---      <div class=" col-md-12" id="what_new">
                <div class="panel panel-default" id="whats_new" align="left">
                    <div class="panel-body abt_text"><h3 align="center" style="margin-top:10px;">WHAT’S NEW</h3></div>
                </div>
                <form id="sharingForm">
                    {{ csrf_field() }}
                <div class="form-group col-md-12">
                    <textarea class="form-control shareText" name="share" placeholder="What's new for public?" rows="6" style="background-color:white;border-radius: 14px;"></textarea>
                </div>
                </form>
            </div>
            <div class="col-xs-12" style="padding-right:10px;">
                <div class="col-xs-8"></div>
                <div class="col-xs-2" id="button_shr">

                    <button type="button" class="btn btn-primary btn-lg btn_style shareUpdate" id="btn_size">SHARE</button>
                </div>
                <div class="col-xs-2"></div>
            </div>
--->