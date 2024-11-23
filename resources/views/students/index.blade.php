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
                    <h5 class="card-title">List Students
                        <a class="btn btn-info float-end" href="{{route('student.create')}}">Create</a>
                    </h5>

                    <!-- Table with stripped rows -->
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Round Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->user->name}}</td>
                                    <td>{{$item->user->email}}</td>
                                    <td>{{$item->round->round_number}}</td>
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