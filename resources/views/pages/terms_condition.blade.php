@extends('layouts.header&footer')

@section('content')

    <!--==========================
        BREADCRUMB AREA START
    ===========================-->
    @foreach ($Settings as $item )
    <section class="breadcrumb_area" style="background: url({{ asset('storage/' . $item->banner_Global) }});">
     @endforeach
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-12">
                    <div class="breadcrumb_text">
                        <h1>terms & condition</h1>
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a href="#">terms & condition</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
        BREADCRUMB AREA END
    ===========================-->


    <!--==========================
        TERMS & CONDITION START
    ===========================-->
    <section class="terms_condition mt_120 xs_mt_100">
        <div class="container">
            <div class="row wow fadeInUp">
                @forelse ($termsCondition as $item )
                <div class="col-12">
                    <div class="privacy_policy_text">
                        {!!$item->content!!}
                    </div>
                </div>
                @empty
                    <h4>No Data Found!</h4> 
                @endforelse
            </div>
        </div>
    </section>
    <!--==========================
        TERMS & CONDITION END
    ===========================-->




@endsection