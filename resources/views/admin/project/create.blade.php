@extends('layouts.app')

@section('content')
@if ($errors->any())
@foreach ($errors->all() as $error)
    <div>{{$error}}</div>
@endforeach
@endif
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md-10 p-4 border rounded">
            <h2>New project</h2>
            <form action="{{ route('admin.projects.store') }}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                    <label for="title" class="form-label">Title</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="cover" name="cover" value="{{ old('cover') }}">
                    <label for="cover" class="form-label">Image url or path</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
                    <label for="description" class="form-label">Description</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" name="category" id="category">
                        <option selected>Select category</option>
                        <option value="web" {{ old('category') === 'web' ? 'selected' : '' }}>Web</option>
                        <option value="graphic" {{ old('category') === 'graphic' ? 'selected' : '' }}>Graphic</option>
                        <option value="video" {{ old('category') === 'video' ? 'selected' : '' }}>Video</option>
                        <option value="software" {{ old('category') === 'software' ? 'selected' : '' }}>Software</option>
                      </select>
                      <label for="category">Select category</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="url" class="form-control" id="link" name="link" value="{{ old('link') }}">
                    <label for="link" class="form-label">Project external link</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="client" name="client" value="{{ old('client') }}">
                    <label for="client" class="form-label">Client</label>
                </div>
                <div class="mb-3">
                    <input class="form-check-input" type="checkbox" id="private" name="private" value="{{ old('private') }}">
                    <label for="private" class="form-check-label">Private project</label>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-primary col-auto mx-2">Submit</button>
                    <button type="reset" class="btn btn-info col-auto mx-1">Reset</button>
                    <div class="col-auto ms-auto">
                        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection