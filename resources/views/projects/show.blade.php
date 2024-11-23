@extends('theemLayout.app')

@section('main_section')

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">

                    @if(Auth::user()->type == 'student')
                    <h5 class="card-title">List Projects {{$project->id}}
                        <a class="btn btn-info float-end" href="{{route('reply.create', $project->id)}}">Reply</a>
                    </h5>
                    @endif
                    <h5 class="pt-3"><a href="{{$project->demo_link}}">View Link Demo</a></h5>
                    <hr>
                    <h5>Description : {{$project->description}}</h5>
                    <hr>
                    <h5>Round Number : {{$project->round->round_number}}</h5>
                    <hr>
                    
                    

                </div>
            </div>

        </div>
    </div>
</section>
@endsection