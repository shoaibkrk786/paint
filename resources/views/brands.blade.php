@extends('layouts.layouts')
@section('custom_css')

@endsection
@section('content')
<div class="content_clr_br" id="hom_slid_marg">
    <div class="container ">
        <br/>
        <center><h1>Our Best Brands</h1></center><br/>
        <hr/>
        <div class="row">
            <?php
            use App\Company;
            $i = 0;
            ?>
            @foreach ($brands as $brand)
            <?php
            $i ++;
            $company = Company::where("company_brand_id", $brand->id)
                    ->first();
            ?>
            <div class="col-sm-4">
                <a href = "/{{ str_slug($brand->brand_name) }}" class = "thumbnail bg_clr">
                    <img src="@if (!is_null($company)) {{ $company->company_logo }} @endif" alt = "img" class="img-responsive img-circle" style="padding-top:15px">
                </a>
            </div>
            @if($i % 3 == 0) 
        </div>
            <div class = "row">
                @endif
            @endforeach

        </div>

    </div>
</div>

@endsection