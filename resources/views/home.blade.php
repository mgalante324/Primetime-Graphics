@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="numbers">
            <h3>You have {{ $categoryCount }} categories.</h3>
            <h3>You have {{ $projectCount }} total projects.</h3>
          </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <!-- Categories Card -->
            <div class="card" style="margin-top: 25px;">
              <div class="card-header">Cateogories</div>
              <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/categories/create" class="btn btn-primary" style="margin-bottom: 25px;">Add a Category</a>
                    <table class="table">
                      <tr>
                        <th>Name</th>
                        <th>Delete</th>
                      </tr>
                      @foreach ($categories as $category)
                        <tr>
                          <td>{{ $category->name }}</td>
                          <td>
                            <form method="post" action="{{ route('categories.destroy', $category->id) }}">
                                @csrf
                                @method('DELETE')
                                  <input type="submit" value="Delete" class="btn btn-danger" />
                            </form>
                          </td>
                        </tr>
                      @endforeach
                    </table>
              </div>
          </div>


            <!-- Projects Card -->
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
                      <th>View</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                    @foreach ($projects as $project)
                      <tr>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->category }}</td>
                        <td><a href="/portfolio/{{ $project->category }}/{{ $project->id }}" class="btn btn-success">View</a></td>
                        <td><a href="/projects/{{ $project->id }}/edit" class="btn btn-primary">Edit</a></td>
                        <td>
                          <form method="post" action="{{ route('projects.destroy', $project->id) }}">
                              @csrf
                              @method('DELETE')
                                  <input type="submit" value="Delete" class="btn btn-danger" />
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
