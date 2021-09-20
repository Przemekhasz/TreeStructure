@extends('layouts/app')

@section('content')

    <div class="flex justify-center m-5">

        <div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">
            <label>Dodaj:
                <a href="tree/create">
                    <i class="bi bi-plus-circle-fill" style="color: rgb(5, 170, 32)"></i>
                </a>
            </label>

                <ul id="tree1" class="tree">
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
                             @include('trees.manageCheckbox',['childs' => $tr->childs])
                         @endif
                    @endforeach
                </ul>
        </div>
   </div>
</div>
<script src="{{ asset('js/tree.js') }}"></script>

@endsection
