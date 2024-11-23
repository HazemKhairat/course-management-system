@extends('theemLayout.app')

@section('main_section')
<div class="pagetitle">
    <h1>Data Tables</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">Data</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">List Projects {{$project->id}}
                        <a class="btn btn-info float-end" href="{{route('project.create')}}">Create</a>
                    </h5>
                    <h5><a href="{{$project->demo_link}}">View Link Demo</a></h5>
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