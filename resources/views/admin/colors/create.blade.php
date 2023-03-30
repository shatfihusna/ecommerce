@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        @if ( session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3>Add Color</h3>
                    <a href="{{ url('admin/colors') }}" class="btn btn-danger btn-sm  text-white float-end">
                    Back
                    </a>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/colors/create') }}" method="POST" >
                    @csrf
                    <dic class="row">
                        <div class="col-md-12 mb-3">
                            <label>Color Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Color Code</label>
                            <input type="text" name="code" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Status</label><br>
                            <input type="checkbox" name="status" style="width:20px;height:20px"/> Checked=Hidden,UnChecked=Visible
                        </div>

                        <div class=" col-md-12 mb-3">
                            <button type="submit" class="btn btn-primary"> Save </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>    
    </div>
</div>

@endsection