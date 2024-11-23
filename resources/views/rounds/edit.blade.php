@extends('theemLayout.app')

@section('main_section')

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
            <h5 class="card-title">Update Round</h5>

            <!-- Vertical Form -->
            <form action="{{route( 'round.update', $round->id)}}" method="POST" class="row g-3">
                @csrf
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">Round Number (Text)</label>
                    <input value="{{$round->round_number}}" type="text" name="round_number" class="form-control" id="inputNanme4">
                </div>
                <div class="col-12">
                    <label for="inputEmail4" class="form-label">Description</label>
                    <input value="{{$round->description}}" type="text" name="description"  class="form-control" id="inputEmail4">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Select Course</label>
                    <select value="{{$round->course_id}}" class="form-control" name="course_id" id="">
                        @foreach ($courses as $item)
                            <option value="{{$item->id}}">{{$item->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Select Instractor</label>
                    <select  value="{{$round->user_id}}" class="form-control" name="user_id" id="">
                        @foreach ($instrauctor as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
</section>
@endsection