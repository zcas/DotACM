@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="/css/landingStyle.css">

<div id="divContainer">
    <div id="content-wrap">
        <div id=bannerDiv>    
            <div class="container">
                <div id="textBox"class="row">
                  <div class="col">
                    <h1>DOTA2CM</h1>
                    <p>Improve your Dota 2 knowledge.</p>
                  </div>
                  <div id="joinUsButton">
                    <button type="button" class="btn btn-primary"><a href="{{ route('register') }}">Join Us!</a></button>
                  </div>
                </div>
            </div>
        </div>
        <div class="container" id="cardContainer">
            <div class="row justify-content-center">
                <div class="col-md-auto">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="images/landing-images/compete.png" alt="Crossed Swords Image">
                        <div class="card-body">
                          <h5 class="card-title">Compete against others</h5>
                          <p class="card-text">Challenge players in the Captain Mode simulator.</p>
                        </div>
                      </div>
                </div>
                <div class="col-md-auto">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="images/landing-images/strats.png" alt="Tactical Draft Image">
                        <div class="card-body">
                          <h5 class="card-title">Show your strats</h5>
                          <p class="card-text">Share your ideas and create your lineups.</p>
                        </div>
                      </div>
                </div>
                <div class="col-md-auto">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="images/landing-images/share.png" alt="Community Image">
                        <div class="card-body">
                          <h5 class="card-title">Join the Community</h5>
                          <p class="card-text">Discuss and vote about others ideas.</p>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        <footer>
          <p>Created by <strong>Bruno Vitetti</strong>.</p>
          <a href="https://github.com/zcas" target="_blank"><img class="githublogo" src="images/landing-images/github-logo.png" alt="GitHub Logo"></a>
        </footer>
    </div>
</div>    
@endsection