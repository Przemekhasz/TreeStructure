@extends('layouts/app')

@section('content')

    <div class="m-auto w-5/6 py-2 pt-2 text-center">

        <form class="m-auto w-1/6 py-24 pt-15 text-center" method="POST" action="/tree" enctype="multipart/form-data">
            @csrf
            <div class="flex items-center border-b border-teal-500 py-2">
              <input
              class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
              type="text"
              name="name"
              placeholder="Name"
              required>

            </div>

            <br />

            @error('name')
                <div class="bg-red-100 border border-red-400 text-red-700 px-5 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ $message }}</span>
                </div>
            @enderror

            <br />
                <select
                class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                name="parent_id"
                >
                  @foreach ($trees as $tree)
                    <option>{{ $tree->id }}</option>
                  @endforeach
                </select>
                <br />

                @error('parent_id')
                    <div class="bg-red-100 border border-red-400 text-red-700 px-5 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ $message }}</span>
                    </div>
                @enderror

                <br />
            <button
                type="submit"
                class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded">
                    Add
                </button>
        </form>


    </div>

@endsection
