@extends('layouts/app')

@section('content')

    <div class="m-auto w-5/6 py-2 pt-2 text-center">

        <form class="m-auto w-1/6 py-24 pt-15 text-center" id="editForm" method="POST" action="/tree/{{ $find_id->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="flex items-center border-b border-teal-500 py-2">
              <input
              class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
              id="edit"
              type="text"
              name="name"
              value="{{ $find_id->name }}"
              >
            </div>
            <div class="form-message"></div>
            <br />

            @error('name')
                <div class="bg-red-100 border border-red-400 text-red-700 px-5 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ $message }}</span>
                </div>
            @enderror

            <br />

            <select
                class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                name="parent_id">
                {{-- TODO: Add old value to option! --}}
                @foreach ($trees as $id => $value)
                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                @endforeach

            </select>

                <br />

                <br />

            <button
                type="submit"
                class="edit flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded">
                    Submit
            </button>

        </form>
    <div class="flex justify-center">
        <ul id="tree1" class="tree">
            @foreach(collect($tree)->sortBy('name') as $tr)
                 <li>
                     <form action="/tree/{{ $tr->id }}" method="POST">
                        <label for="parent_id"> {{ $tr->name }}

                         @csrf
                         @method('delete')
                         <a href="/tree/{{ $tr->id }}">
                             <i class="bi bi-trash" style="color: rgb(173, 0, 0)"></i>
                         </a>
                     </form>
                     <a href="/tree/{{ $tr->id }}/edit">
                         <i class="bi bi-pencil" style="color: rgb(5, 170, 32)"></i>
                     </a>
                     </label>
                 </li>

                 @if(count($tr->childs))
                     @include('trees.manageCheckbox',[
                         'childs' => $tr->childs,
                    ])
                 @endif
            @endforeach
        </ul>
    </div>
</div>

    </div>
    <script src="{{ asset('js/validate.js') }}"></script>
@endsection
