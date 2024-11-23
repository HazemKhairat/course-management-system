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

                    <!-- Table with stripped rows -->
                    <table class="table ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Student</th>
                                <th scope="col">Project</th>
                                <th colspan="2" >Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reply as $item)
                                <tr>
                                    <td scope="row">{{$item->id}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->user->name}}</td>
                                    <td>{{$item->project->title}}</td>
                                    <td><a href="{{route('reply.edit', $item->id)}}">Edit</a></td>
                                    <td><a href="{{$item->demo_link}}">Link</a></td>
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