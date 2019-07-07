@extends('layouts.app')

@section('content')
<h1>Create new project</h1>
<form method="POST" action="/projects">
     @csrf
    <div class="field">
        <label for="title">Title</label>
        <div class="control">
        <input required type="text" class="input" name="title" placeholder="Title" value="{{ old('title') }}">
        </div>
    </div>

    <div class="field">
        <label for="description">Description</label>
        <div class="control">
            <textarea required class="textarea" name="description" placeholder="Description">{{ old('description') }}</textarea>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Create Project</button>
             <a href="/projects">Cancel</a>
        </div>
    </div>

</form>
@endsection
