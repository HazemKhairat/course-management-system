@extends('theemLayout.app')

@section('main_section')
<div class="pagetitle">
    <h1>Table Data </h1> 
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                @if(Session::has('done'))
                    <div class="alert alert-success">
                        {{Session::get('done')}}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    <h5 class="card-title">List Users
                        <a class="btn btn-info float-end" href="{{route('user.create')}}">Create</a>
                    </h5>
                    <!-- Table with stripped rows -->
                    <!-- datatable -->
                    <table class="table ">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Type</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->type}}</td>
                                    @if ($item->type == 'instrauctor')
                                        <th><a href="{{route('user.instractor_round', $item->id)}}">Show Rounds</a></th>
                                    @else
                                        <th>No Action</th>
                                    @endif
                                    <th><a href="{{route('user.destroy', $item->id)}}">Delete</a></th>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>
</section>
@endsection