@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">

            @include('partials.success')

            <h1>
               <strong>{{$technology->id}}.</strong> {{ $technology->name }}
            </h1>

            <hr>

            <h2>Tecnologie associate</h2>
            @if($technology->projects()->count() > 0)
                <ul>
                    
                    <li>
                        <a href="{{ route('admin.projects.show', $technology->id)}}">
                            {{ $technology->name }}
                        </a>
                    </li>
                   
                </ul>
            @else
                <h3>Nessuna tecnologia associata</h3>
            @endif

            @if ($technology->img) 
                <div>
                    <img src="{{ asset('storage/'.$technology->img) }}" style="height: 200px;">
                </div>
            @endif
        </div>
    </div>
</div>

@endsection