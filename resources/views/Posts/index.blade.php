@extends('layouts.app')

@section('content')

    <!--Slider and header-->
<!-- Image Slider Begins-->

<div data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/R1.jpg">
            <div class="carousel-caption">
              <section class="page-top-section set-bg" data-setbg="images/page-top-bg.jpg">
                <div class="container">
                  <h2>Recipe</h2>
                </div>
              </section>
            </div>
          </div>
        </div>
        </div>
        <!-- Image Slider ends-->


        <!-- Search section -->
          <div class="search-form-section">
            <div class="sf-warp">
              <div class="container">
                <form action="/search" method="get">
                    <div class="big-search-form">
                            <input type="text" name="search" class="form-control" placeholder="Search Receipies" name="q">
                            <button type="submit" class="bsf-btn">Search</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        <!-- Search section  end-->

        <!--div class="container-fluid padding">
          <img src="img/s.png" class="img-fluid" alt="Responsive image">
          <p>sdsfghj</p>

        </div-->
         <br>
          <br>
    <!--Posts: Main content-->
    <h1 class="Recepies">Recepies</h1>
    @if(count($posts) > 0)
        @foreach ($posts as $post )
        <div class="py-2 my-4 px-2 card bg-light">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                </div>
                <div class="col-md-4 col-sm-4">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                </div>
                <div class="col-md-8 col-sm-8">
                    <a href="/posts/{{$post->id}}"><button type="button" class="btn btn-success btn-md">More...</button></a>
                </div>
            </div>

        </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection
