@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">

            @include('partials.success')

            <h1>
               <strong>{{$project->id}}.</strong> {{ $project->title }}
            </h1>

            <hr>
            
            <h6>
                {{ $project->description }}
            </h6>

            <h3>
                Tipo: {{ $project->type ? $project->type->name : 'Nessun tipo'}}
            </h3>

            @if ($project->img) 
                <div>
                    <img src="{{ asset('storage/'.$project->img) }}" style="height: 200px;">
                </div>
            @endif

           <!-- <a href="{{ route('admin.projects.create')}}" class="btn btn-success mt-2 mb-3">
                Add Project
            </a>-->
        </div>
    </div>
</div>

@endsection