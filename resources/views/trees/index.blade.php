@extends('layouts/app')

@section('content')

    <div class="flex justify-center m-7">

        <div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">
            <label>Dodaj:
                <a href="tree/create">
                    <i class="bi bi-plus-circle-fill" style="color: rgb(5, 170, 32)"></i>
                </a>
            </label>
                    <form action="/tree">
                        <select onchange="this.form.submit()" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 my-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline">

                            <option value="">Sortuj</option>
                            <option value="{{ $desc = collect($alltree)->sortKeysDesc() }}">A-Z</option>
                            <option value="{{ $asc = collect($alltree)->sortKeys() }}">Z-A</option>
                        </select>
                    </form>

                <ul id="tree1" class="tree">
                    {{-- @if ($desc)
                        {{ $desc }}
                    @elseif ($asc)
                        {{ $asc }}
                    @else
                        ''
                    @endif --}}

                    @foreach($tree as $tr)
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
                                 'childs' => $tr->childs

                            ])
                         @endif
                    @endforeach
                </ul>
        </div>
   </div>
</div>

@endsection
