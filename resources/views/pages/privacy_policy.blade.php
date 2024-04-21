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
                        <h1>privacy policy</h1>
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a href="#">privacy policy</a></li>
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
        PRIVACY POLICY START
    ===========================-->
    <section class="privacy_policy mt_120 xs_mt_100">
        <div class="container">
            <div class="row wow fadeInUp">
                @forelse ($privacypolicy as $item )
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
        PRIVACY POLICY END
    ===========================-->



@endsection