@extends('master.master')

@section('content')
<div class="min-vh-100 d-flex justify-content-center" style="background-color: #F2F1EF">
    <div class="container my-5 px-5 py-3" style="background-color: white; border-radius: 20px;">
        <div class="container py-3">
            <div class="display-3 me-2">
                Profile
            </div>
        </div>
        <hr>
        <div class="container mt-4">
            <div class="container w-100 d-flex">
                <div class="me-3 d-flex align-items-center" style="width: 20%">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRztT4qlYAj9R2n46SJZCD9iOY1EVHKl799jg&usqp=CAU" alt="" style="width: 100%; border-radius: 150px; border-style: solid; border-color: black">
                </div>
                <div style="width: 80%">
                    <div class="w-100 display-3">{{($applicant) ? $applicant->applicantName : $msme->msmeName}}</div>
                    @if ($applicant && $applicant->description)
                    <div class="w-100 h5" style="font-weight: 300">
                        <div class="w-100 d-flex">
                            <img src="https://www.pngall.com/wp-content/uploads/4/Quotation-Symbol-PNG.png" alt="" width="5%">
                        </div>
                        <div class="w-100 d-flex justify-content-center">
                            <div style="width: 90%">
                                {{$applicant->description}}
                            </div>
                        </div>
                        <div class="w-100 d-flex justify-content-end">
                            <img src="https://www.pngall.com/wp-content/uploads/4/Quotation-Symbol-PNG.png" alt="" width="5%" style="transform:rotate(180deg);">
                        </div>
                    </div>
                    @endif
                    <div class="dropdown-divider"></div>
                    <div class="w-100 d-flex">
                        <div class="w-50">
                            <div class="w-100 lead">
                                <i class="fa fa-envelope-o me-3"></i>{{$user->email}}
                            </div>
                            <div class="w-100 lead">
                                <i class="fa fa-mobile me-3"></i>{{$user->phone}}
                            </div>
                        </div>
                        <div class="w-50">
                            <div class="w-100 lead">
                                <i class="fa fa-location-arrow me-3"></i>{{($applicant) ? $applicant->applicantAddress: $msme->msmeAddress}}
                            </div>
                            @if ($applicant)
                                <div class="w-100 lead">
                                    <i class="fa fa-briefcase me-3"></i>{{$applicant->portofolioLink}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="display-4">Activity</div>
            <div class="mt-3 h3">Forums Posted</div>
            <hr>
            @if (count($threadList) > 0)
            <div class="">
                @foreach ($threadList as $thread)
                <div class="card m-3" style="width: 100%; border-radius:20px">
                    <div class="card-body">
                        <h5 class="card-title">{{$thread->threadTitle}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">by: {{$thread->user->username}}</h6>
                        <div>{{mb_strimwidth($thread->threadContent, 0, 20, "...");}}</div>
                        <p class="card-text lead"><small>Created on {{date("F d, Y", strtotime($thread->created_at))}}</small></p>
                        <a href="/forum/{{$thread->threadID}}" class="card-link">View more</a>
                    </div>
                </div>
                @endforeach
                <div class="pagination d-flex justify-content-end align-items-center">
                    {{$threadList->links()}}
                </div>
            </div>
            @else
            <div class="lead text-center">No Forums Posted</div>
            @endif
            <br>
            @if ($msme)
                <div class="mt-3 h3">Job Vacancies Posted</div>
                <hr>
                @if (count($vacancies) == 0)
                    <div class="lead text-center">No job vacancies yet</div>
                @else
                    @foreach ($vacancies as $vacancy)
                    <div class="d-flex bg-light card-body mt-2">
                        <div class="card-left">
                            <h3>{{$vacancy->job()->first()->jobName}}</h3>
                            <h6>Duration: {{$vacancy->duration}}</h3>
                                <p>{{$vacancy->description}}</p>
                                <small>Created on {{$vacancy->created_at}}</small>
                        </div>
                    </div>
                    @endforeach
                    <div class="pagination d-flex justify-content-end align-items-center">
                        {{$vacancies->withQueryString()->links()}}
                    </div>
                @endif  
            @else
                
            @endif
        </div>
    </div>
</div>
</div>
@endsection