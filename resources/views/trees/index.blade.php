@extends('layouts/app')

@section('content')

    <div class="m-auto w-5/6 py-10 pt-15 text-center">

        {{-- @foreach ($trees as $tree)
            <p>{{ $tree->name }}</p>

                <form action="/tree/{{ $tree->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="bg-red-500 hover:bg-red-400 text-white font-bold py-1 px-1 border-b-4 border-gray-700 hover:border-gray-500 rounded">
                        X
                      </button>
                    </button>
                </form>
                <a href="tree/{{ $tree->id }}/edit">
                    <button class="bg-red-500 hover:bg-red-400 text-white font-bold py-1 px-1 border-b-4 border-gray-700 hover:border-gray-500 rounded">
                    E
                  </button>
                </a>

        @endforeach --}}

    {{-- TODO: Add visualization tree structure --}}


    </div>

@endsection
