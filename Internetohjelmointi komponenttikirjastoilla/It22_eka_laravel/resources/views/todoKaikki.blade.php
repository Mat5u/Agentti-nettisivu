<x-layout>
    <h2 style="color: white;">todo kaikki</h2>

    <table class="table table-bordered table-striped table-hover table-sm table-light">
        <tr class="table-dark">
            <th></th>
            <th scope="col">Idea</th>
            <th scope="col">Selite</th>
            <th scope="col">Status</th>
            <th scope="col">Kiireellisyys</th>
        </tr>
        @foreach ($todo as $rivi)
            <tr>
                <td>
                    <a href="{{route('todoEdit', ['todo' => $rivi['id']])}}"><button class="btn btn-warning btn-sm" style="width: 80px; margin: auto;">muokkaa</button></a>
                    <form class="delete-todo-form d-inline" action="{{route('todoDelete', ['todo' => $rivi['id']])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" title="Poista">Poista</button>
                    </form>
                </td>

                <td scope="row">{{$rivi['otsikko']}}</td>
                
                <td scope="row">{{$rivi['selite']}}</td>

                <td scope="row">{{$rivi['status']}}</td>

                <td scope="row">{{$rivi['kiireellisyys']}}</td>
            </tr>
        @endforeach
    </table>
</x-layout>