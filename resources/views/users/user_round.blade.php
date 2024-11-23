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
                    <h5 class="card-title">List User Rounds For : {{$user_round->name}}
                    </h5>

                    <!-- Table with stripped rows -->
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Round_Number</th>
                                <th>Description</th>
                                <th>Instractor</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user_round->round as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->round_number}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$user_round->name}}</td>

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