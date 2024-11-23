@extends('theemLayout.app')

@section('main_section')
<div class="pagetitle">
    <h1>Form Layouts</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item active">Layouts</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<section class="section">
    <div class="row"></div>
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
            <h5 class="card-title">Add New Student</h5>

            <!-- Vertical Form -->
            <form action="{{route('student.store')}}" method="POST" class="row g-3">
                @csrf
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">Your Name</label>
                    <input type="text" name="name" class="form-control" id="inputNanme4">
                </div>
                <div class="col-12">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Round Number</label>
                    <select class="form-control" name="round_id">
                        @foreach ($rounds as $item)
                            <option value="{{$item->id}}">{{$item->round_number}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
</section>
@endsection