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
            <h5 class="card-title">Update Project</h5>

            <!-- Vertical Form -->
            <form action="{{route('project.update', $project->id)}}" enctype="multipart/form-data" method="POST" class="row g-3">
                @csrf
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">Title</label>
                    <input value="{{$project->title}}" type="text" name="title" class="form-control" id="inputNanme4">
                </div>
                <div class="col-12">
                    <label for="inputEmail4" class="form-label">Description</label>
                    <input  value="{{$project->description}}"  type="text" name="description" class="form-control"
                        id="inputEmail4">
                </div>
                <div class="col-12">
                    <label for="inputEmail4" class="form-label">Demo_link</label>
                    <input value="{{$project->demo_link}}" type="url" name="demo_link" class="form-control"
                        id="inputEmail4">
                </div>
                <div class="col-12">
                    <label for="inputEmail4" class="form-label">Attachment</label>
                    <input value="{{$project->attachment}}" type="file" name="attachment"class="form-control"
                        id="inputEmail4">
                </div>
                
                <div class="col-12">
                    <label for="inputEmail4" class="form-label">round_id</label>
                    <select value="{{$project->round_id}}" name="round_id" class="form-control" id="">
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