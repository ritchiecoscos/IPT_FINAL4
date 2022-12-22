@extends('base')

@extends('navbar')

@section('title', 'Dashboard')

@section('content')
    <div class="container mt-3">
        <h1 class="text-center" style="font-weight: 400; color:rgb(242, 226, 226); font-size: 30px; color: black">Dashboard</h1>
        
            <div class="row mt-5 text-right">
                <div class="col-md-20 mb-1">
                    <div class="card shadow">
                        <a href="/recent-post" id="dash-link">
                            <div class="card-body rounded " style="background-color: white;">
                                <div class="row">
                                    <div class="col">
                                        <i class="fa fa-history text-black mt-2" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-4">
                                        <span class="text-black float-right" id="text">Recent Talk</span><br>
                                        <span class="text-black" id="text2">{{ $allPosts }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-20 mt-1">
                    <div class="card shadow">
                        <a href="/my-post" id="dash-link">
                            <div class="card-body rounded" style="background-color:white">
                                <div class="row">
                                    <div class="col">
                                        <i class="fa fa-commenting-o text-black mt-2" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-4">
                                        <span class="text-black float-right" id="text">Your Talk</span><br>
                                        <span class="text-black" id="text2">{{ $posts }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @role('admin')
                <div class="col-md-20 mt-2">
                    <div class="card shadow">
                        <a href="/log" id="dash-link">
                            <div class="card-body rounded" style="background-color:white">
                                <div class="row">
                                    <div class="col">
                                        <i class="fa fa-book text-black mt-2" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-4">
                                        <span class="text-black float-right" id="text">Total Logs</span><br>
                                        <span class="text-black" id="text2">{{ $logs }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endrole
            </div>
        </div>

    </div>
@endsection

<style>
    .card {
        width: 540px;
        
    }
    .card:hover {
        background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
        transform: scale(1.02);
        transition: transform 0.4s ease;
    }

    #dash-icon {
        font-size: 50px;
        opacity: 0.5;
    }
    #dash-link {
        text-decoration: none;
    }


    .time {
        opacity: 0.8;
    }
    .recent-only {
        border: 1px solid rgba(0, 0, 0, 0.23);
        border-radius: 10px;
        box-shadow: 3px 3px 1px 0px rgba(0, 0, 0, 0.2);
    }
</style>
