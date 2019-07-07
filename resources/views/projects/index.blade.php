@extends('layouts.app')

@section('content')
    <div class="flex items-center mb-3">
        <a href="/projects/create">Create New Project</a>
    </div>

    <div class='flex'>
          @forelse ($projects as $project)
        <div class="bg-white mr-4 rounded shadow">

        <h2>{{ $project->title }}</h2>
            <div>
                {{ $project->description }}
            </div>
        </div>
          @empty
            <div>No projects yet</div>
           @endforelse
    </div>
@endsection
