@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top: 25px;">
                <div class="card-header">Projects</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/projects/create" class="btn btn-primary" style="margin-bottom: 25px;">Add a Project</a>
                    <table class="table table-striped">
                      <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                      @foreach ($projects as $project)
                        <tr>
                          <td>{{ $project->name }}</td>
                          <td>{{ $project->category }}</td>
                          <td><a href="/projects/{{ $project->id }}/edit" class="btn btn-primary">Edit</a></td>
                          <td>
                            <form method="post" action="{{ route('projects.destroy', $project->id) }}">
                                @csrf
                                @method('DELETE')
                                <div class="bootstrap_button">
                                    <input type="submit" value="Delete" class="btn btn-danger" />
                                </div>
                            </form>
                          </td>
                        </tr>
                      @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection