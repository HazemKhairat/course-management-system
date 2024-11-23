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
                    <h5 class="card-title">
                        <a class="btn btn-info float-end" href="{{route('round.create')}}">Create</a>
                    </h5>

                    <!-- Table with stripped rows -->
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th colspan="3">Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rounds as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->round_number}}</td>
                                    <td>{{$item->description}}</td>
                                    <!-- <td><a href="">Show</a></td> -->
                                    <td><a href="{{route('round.edit', $item->id)}}">Edit</a></td>
                                    <td><a href="{{route('round.destroy', $item->id)}}">Delete</a></td>
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