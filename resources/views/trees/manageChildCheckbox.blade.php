<ul>
    @foreach($childs as $child)
    <li>
        <form action="/tree/{{ $tr->id }}" method="POST">
            <label for="vehicle1"> {{ $child->name }}
            @csrf
            @method('delete')
                    <i class="bi bi-trash" style="color: rgb(173, 0, 0)"></i>
        </form>
                <a href="/tree/{{ $tr->id }}/edit">
                    <i class="bi bi-pencil" style="color: rgb(5, 170, 32)"></i>
                </a>
            </label>


       @if(count($child->childs))
       @include('trees.manageChildCheckbox',['childs' => $child->childs])
    </button>
       @endif

</a>
    </li>
    @endforeach
 </ul>
