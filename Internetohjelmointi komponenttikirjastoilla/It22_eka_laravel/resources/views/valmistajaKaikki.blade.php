<x-layout>
    <h2 style="color: white;">Valmistaja Kaikki</h2>
    <table class="table table-bordered table-striped table-hover table-sm table-light">
        <tr class="table-dark">
            <th></th>
            <th scope="col">Valmistaja</th>
            <th scope="col">Maa</th>
        </tr>
        @foreach ($valmistaja as $rivi)
            <tr>
                <td>
                    <a href="{{route('valmistajaEdit', ['valmistaja' => $rivi['id']])}}"><button class="btn btn-warning btn-sm" style="width: 80px; margin: auto;">muokkaa</button></a>
                    <form class="delete-valmistaja-form d-inline" action="{{route('valmistajaDelete', ['valmistaja' => $rivi['id']])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" title="Poista">Poista</button>
                    </form>
                </td>

                <td scope="row">{{$rivi['valmistaja']}}</td>
                
                <td scope="row">{{$rivi['maa']}}</td>

            </tr>
        @endforeach
    </table>
</x-layout>