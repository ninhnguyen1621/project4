@extends('Frontend.Master.master')
@section('content')
</section>
     <section id="new-arrivals" class="section-new-arrivals home1">
        <div class="new-arrival-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!--Product new arrivals title -->

                        <!-- End arrivals title -->
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="    padding-top: 120px;">
                        <div class="new-arrival-content row">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="all">
                                    @foreach ($get_newfeed as $key )
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 s-item">
                                        <div class="single-item">
                                            <div class="s-product-img">
                                               <a  ><img src="{{url('/')}}/site/img/blog/{{$key->img}}" alt="" height="200" width="1000"></a>
                                            </div>
                                            <div class="product-info">
                                                <p class="product-title">
                                                    <span style="display: table;
                                                    width: 100%;
                                                    margin-top: 10px;
                                                    line-height: 18px;
                                                    color: #cccccc;
                                                      font-size: 14px;
                                                     ">{{$key->time}}</span>
                                                </p>
                                            </div> <br>
                                            <div class="product-info">
                                               <h2 style="float: left;
                                               margin-top: 15px;
                                               margin-left: -72px;">{{$key->title}}</h2>
                                                </p>
                                            </div><br>
                                            <div class="product-info">
                                                <p> {!!$key->post!!}  </p>
                                             </div><br>

                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        {{ $get_newfeed->links()}}
                      </div>
                </div>
            </div>
        </div>
    </section>
<div class="section-brand-logo-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <hr>
                <!-- start brand logo image -->
                <div class="logo-carousel owl-carousel section-padding">
                    <div class="brand-item">
                        <a href="#"><img src="img/brand-logo/1.png" alt="brand-logo" /></a>
                    </div>
                    <div class="brand-item">
                        <a href="#"><img src="img/brand-logo/2.png" alt="brand-logo" /></a>
                    </div>
                    <div class="brand-item">
                        <a href="#"><img src="img/brand-logo/3.png" alt="brand-logo" /></a>
                    </div>
                    <div class="brand-item">
                        <a href="#"><img src="img/brand-logo/4.png" alt="brand-logo" /></a>
                    </div>
                    <div class="brand-item">
                        <a href="#"><img src="img/brand-logo/5.png" alt="brand-logo" /></a>
                    </div>
                    <div class="brand-item">
                        <a href="#"><img src="img/brand-logo/1.png" alt="brand-logo" /></a>
                    </div>
                    <div class="brand-item">
                        <a href="#"><img src="img/brand-logo/2.png" alt="brand-logo" /></a>
                    </div>
                    <div class="brand-item">
                        <a href="#"><img src="img/brand-logo/3.png" alt="brand-logo" /></a>
                    </div>
                    <div class="brand-item">
                        <a href="#"><img src="img/brand-logo/4.png" alt="brand-logo" /></a>
                    </div>
                    <div class="brand-item">
                        <a href="#"><img src="img/brand-logo/5.png" alt="brand-logo" /></a>
                    </div>
                </div>
                <!--End brand logo image -->
            </div>
        </div>
    </div>
</div>
@endsection

