@extends('layouts.app')

@section('page-title', 'Welcome Page')

@section('content')

<h1>Movies</h1>



<section class="movies">
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-3 g-4">

      @forelse($movies as $movie)
      <div class="col">
        <div class="card">
          <img class="img-fluid" src='https://picsum.photos/400/200' alt='' />
          <div class="card-body">
            <h2>{{$movie->title}}</h2>
            <h4>{{$movie->original_title}}</h4>
            <hr>
            <div class="metadata">
              <span>
                <strong>Nationality: </strong>
                {{$movie->nationality}}
              </span>
              <span>
                <strong>Date: </strong>
                {{$movie->date}}
              </span>
              <span>
                <strong>Vote: </strong>
                {{$movie->vote}}
              </span>
            </div>
          </div>
        </div>

      </div>
      @empty
      <div class="col-12">
        <p>
          Nothing to show here! 😱
        </p>
      </div>
      @endforelse
    </div>
  </div>
</section>

@stop