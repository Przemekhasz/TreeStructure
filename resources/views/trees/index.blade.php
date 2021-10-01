@extends('layouts/app')

@section('content')

    <div class="flex justify-center m-7">
        <div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">
            @if (session('alert'))
                <div class="alert">
                    <div class="alertChild bg-green-400 border border-gray-400 text-gray-100 px-4 py-3 rounded relative text-center" role="alert">
                        <span class="block sm:inline">{{ session('alert') }}</span>
                    </div>
                </div>
            @endif
            @if (session('warning'))
                <div class="alert">
                    <div class="alertChild bg-red-100 border border-red-400 text-gray-700 px-4 py-3 rounded relative text-center" role="alert">
                        <span class="block sm:inline">{{ session('warning') }}</span>
                    </div>
                </div>
            @endif

        <br>
            <label>Dodaj:
                <a href="tree/create">
                    <i class="bi bi-plus-circle-fill" style="color: rgb(5, 170, 32)"></i>
                </a>
            </label>
                <ul id="tree1" class="tree">

                    @foreach($tree as $tr)
                         <li>
                                <label for="parent_id"> {{ $tr->name }}
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

@endsection
