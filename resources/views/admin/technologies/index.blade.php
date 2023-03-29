@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">
            <h1>
                All Technologies
            </h1>

            <a href="{{ route('admin.technologies.create')}}" class="btn btn-success mt-2 mb-3">
                Add Technology
            </a>
        </div>
    </div>

    @include('partials.success')



                    @foreach ($technologies as $technology)

                    <div class="container-index-technologies">
                            <strong>{{ $technology->id }}. </strong>
                            <span>{{ $technology->name }}</span>

                            <div class="links">

                                <a href=" {{ route('admin.technologies.show', $technology->id) }} " class="btn btn-success">
                                    <i class="fa-solid fa-circle-info"></i>
                                </a>

                                <a href=" {{ route('admin.technologies.edit', $technology->id) }} " class="btn btn-warning">
                                    <i class="fa-solid fa-file-pen"></i>
                                </a>

                                <form action="{{route('admin.technologies.destroy', $technology->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Sei sicuro di voler eliminare questa tecnologia?');">
                                        @csrf
                                        @method('DELETE')
                                        <div class="bottone">
                                            <button class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                </form>

                            </div>
                    </div>   
                           
                    @endforeach
                   
                </tbody>
              </table>

             
        </div>
    </div>
</div>

@endsection