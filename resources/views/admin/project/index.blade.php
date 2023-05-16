@extends('layouts.app')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <ul>
                @foreach ($projects as $project)
                    <li>{{ $project->title }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection