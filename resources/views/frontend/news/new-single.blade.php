@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . $post->title)

@section('content')
<!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
  <section class="inner-header divider parallax layer-overlay overlay-dark-5" >
      <div class="container pt-10 pb-10">
        <!-- Section Content -->
        <div class="section-content pt-10">
          <div class="row">
            <div class="col-md-12">
              <h3 class="title text-white">{{ $post->title}}</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Blog -->
    <section class="container-fluid">
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-md-9">
            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">

                <div class="entry-header">
                    <div class="post-thumb">
                        <div class="owl-carousel-1col">
                            <div class="item">
                            <img  class="img-responsive"src="{{asset('uploads/posts/')}}/{{ $post->f_image}}" alt="{{ $post->title}}">
                            </div>
                            @foreach ($post->post_images as $image)
                            <div class="item">
                            <img  class="img-responsive"src="{{asset('uploads/posts/')}}/{{ $image->post_image_path}}" alt="{{ $post->title}}">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="entry-content">
                  <div class="entry-meta media no-bg no-border mt-15 pb-20">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600">{{ date('d',strtotime($post->date)) }}</li>
                        <li class="font-12 text-white text-uppercase">{{ date('M',strtotime($post->date)) }}</li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="new-content pull-left flip">
                        <h4 class="entry-title text-black text-uppercase m-0">{{ $post->title}}</h4>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13">{{ trans('frontend.unit_type') }} :
                            @foreach ($post->unit_types as $unit)
                            {{ $unit->name }}
                            @endforeach
                        </span>

                      </div>
                    </div>
                  </div>

                   <div style="text-align: justify;" >
                    {!! $post->text !!}
                   </div>

                  <div class="mt-30 mb-0">

                    <ul class="styled-icons icon-circled m-0">

                    <li>
                        <h5>{{ trans('frontend.share') }}:</h5>
                        <div class="styled-icons icon-dark icon-theme-colored icon-sm icon-circled">

                            <a href="mailto:?Subject={{ $post->title }}&amp;Body={{url()->current()}}">
                                <i class="fa fa-envelope"></i> </a>

                            <a href="http://www.facebook.com/sharer.php?u={{url()->current()}}" target="_blank">
                                <i class="fa fa-facebook"></i> </a>

                            <a href="https://plus.google.com/share?url={{url()->current()}}" target="_blank">
                                <i class="fa fa-google-plus"></i> </a>
                            <a href="https://twitter.com/share?url={{url()->current()}}&amp;text={{ $post->title }}&amp;hashtags=int-sucsess.com"
                                target="_blank">

                                <i class="fa fa-twitter"></i> </a>
                            <a href="whatsapp://send?text={{url()->current()}}" data-action="share/whatsapp/share">
                                <i class="fa fa-whatsapp"></i>
                            </a>
                        </div>
                    </li>


                    </ul>
                  </div>



                </div>
              </article>
            </div>
          </div>
          <div class="col-md-3">
            <div class="sidebar sidebar-left mt-sm-30">


<div class="widget">
        <h5 class="widget-title line-bottom">{{ trans('frontend.units') }}</h5>
        <ul class="list-divider list-border list check">
            @foreach ($headerunit_types as $unit)
            <li><a href="{{ route('frontend.unit_type_news',$unit->slug) }}">{{ $unit->name}}</a></li>
            @endforeach
        </ul>
    </div>







            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

@endsection