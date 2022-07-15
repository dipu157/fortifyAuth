@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Department') }}</div>

                    <form method="post" action="{{ route('add_Department') }}">
                        @csrf
                      <div class="form-group">
                        <label>Department Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Department Name">
                      </div>

                      <div class="form-group">
                        <label>Code</label>
                        <input type="text" name="code" class="form-control"  placeholder="Code">
                      </div>

                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
