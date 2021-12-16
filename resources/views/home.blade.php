@extends('master.master')

@section('content')
    <div class="min-vh-100 d-flex justify-content-center" style="background-color: #F2F1EF">
        @php
        $user = session('user');    
        @endphp
        <div class="container my-5 px-5 py-3" style="background-color: white; border-radius: 20px;">
            <div class="container py-3">
                <div class="display-3 me-2">
                    Welcome,
                    <strong class="text-secondary">{{$user->username}}</strong>
                </div>
                
            </div>
            <div class="container mt-4">
                <div class="h2">Forum</div>
                <div class="dropdown-divider"></div>
                @php
                for($i=0;$i<2;$i++){
                    echo "<div class='card-group'>";
                    for($j=0;$j<5;$j++){
                        echo '
                        <div class="card m-3" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Forum Title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Author Name</h6>
                                <p class="card-text">Lorem impsum.</p>
                                <a href="#" class="card-link">View more</a>
                            </div>
                        </div>
                        ';
                    }
                    echo "</div>";
                }
                @endphp
            </div>
        </div>
    </div>

@endsection