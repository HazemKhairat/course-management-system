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
            <h5 class="card-title">Create New Project</h5>

            <!-- Vertical Form -->
            <form action="{{route('project.store')}}" enctype="multipart/form-data" method="POST" class="row g-3">
                @csrf
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="inputNanme4">
                </div>
                <div class="col-12">
                    <label for="inputEmail4" class="form-label">Description</label>
                    <input type="text" name="description" class="form-control"
                        id="inputEmail4">
                </div>
                <div class="col-12">
                    <label for="inputEmail4" class="form-label">Demo_link</label>
                    <input type="url" name="demo_link" class="form-control"
                        id="inputEmail4">
                </div>
                <div class="col-12">
                    <label for="inputEmail4" class="form-label">Attachment</label>
                    <input type="file" name="attachment"class="form-control"
                        id="inputEmail4">
                </div>
                
                <div class="col-12">
                    <label for="inputEmail4" class="form-label">round_id</label>
                    <select name="round_id" class="form-control" id="">
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