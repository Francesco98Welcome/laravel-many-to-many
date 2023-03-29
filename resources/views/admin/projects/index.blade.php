@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">
            <h1>
                All Projects
            </h1>

            <a href="{{ route('admin.projects.create')}}" class="btn btn-success mt-2 mb-3">
                Add Project
            </a>
        </div>
    </div>

    @include('partials.success')

    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Type</th>
                        <th scope="col">Img</th>
                        <th scope='col'>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->type ? $project->type->name : 'Nessun tipo' }}
                        <td> {{ $project->img }}</td>
                        <td>
                            <a href=" {{ route('admin.projects.show', $project->id) }} " class="btn btn-info">
                                <i class="fa-solid fa-circle-info"></i>
                            </a>
                            <a href=" {{ route('admin.projects.edit', $project->id) }} " class="btn btn-warning mt-2">
                                <i class="fa-solid fa-file-pen"></i>
                            </a>
                            
                            <form action="{{route('admin.projects.destroy', $project->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Sei sicuro di voler eliminare questo progetto?');">
                                @csrf
                                @method('DELETE')
                                <button class='btn btn-danger mt-2'>
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                   
                </tbody>
              </table>

             
        </div>
    </div>
</div>

@endsection