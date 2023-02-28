@extends('layouts.app')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-4">
            @if ($errors->any())
                <div class="errors_container mb-4 alert alert-warning">
                    <ul>
                        @foreach ($errors->all() as $singleError)
                            <li>
                                {{$singleError}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('admin.projects.update', $project->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="projectTitle" class="form-label">Project Title</label>
                <input type="text" class="form-control" id="projectTitle" name="title" value="{{$project->title}}">
            </div>
            
            <div class="mb-3">
                <label for="projectContent" class="form-label">Content</label>
                <textarea class="w-100" id="projectContent" name="content" maxlength="500" rows="8">{{$project->content}}</textarea>
            </div>
            
            <div class="mb-3">
                <label for="projectTopic" class="form-label">Topic</label>
                <input type="text" class="form-control" id="projectTopic" name="topic" value="{{$project->topic}}">
            </div>

            <div class="mb-3">
                <label for="project_image" class="form-label">Add an image</label>
                <input type="file" class="w-100" id="project_image" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            
            <a href="{{route('admin.projects.index')}}" class="btn btn-danger me-auto">Quit edit</a>
            </form>
        </div>
    </div>
</div>