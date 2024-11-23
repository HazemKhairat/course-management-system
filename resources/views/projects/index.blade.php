@extends('theemLayout.app')

@section('main_section')

<div class="pagetitle">
    <h1>Table Data </h1> 
</div><!-- End Page Title -->
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">List Courses
                        <a class="btn btn-info float-end" href="{{route('project.create')}}">Create</a>
                    </h5>

                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Round</th>
                                <th colspan="3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $item)
                                <tr>
                                    <td scope="row">{{$item->id}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->round->round_number}}</td>
                                    <td><a href="{{route('project.show', $item->id)}}">View</a></td>
                                    <td><a href="{{route('project.edit', $item->id)}}">Edit</a></td>
                                    <td><a href="{{route('project.destroy', $item->id)}}">Delete</a></td>



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