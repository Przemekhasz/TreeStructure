<ul>
    @foreach($childs->sortBy('name') as $child)
    <li>

        <form action="/tree/{{ $child->id }}" method="POST">
                    <label for="name"> {{$child->name }}
            @csrf
            @method('delete')
                <a href="/tree/{{ $child->id }}">
                    <i class="bi bi-trash" style="color: rgb(173, 0, 0)"></i>
                </a>
        </form>
            <a href="/tree/{{ $child->id }}/edit">
                <i class="bi bi-pencil" style="color: rgb(5, 170, 32)"></i>
            </a>
        </label>

       @if(count($child->childs))
            @include('trees.manageChildCheckbox',[
                'childs' => $child->childs,
            ])
       @endif

    </li>

    @endforeach
</ul>
