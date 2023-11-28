<x-layout>
    <h2 style="color: white;">Tuotteet Kaikki</h2>
    <table class="table table-bordered table-striped table-hover table-sm table-light">
        <tr class="table-dark">
            <th></th>
            <th scope="col">Nimi</th>
            <th scope="col">Valmistaja</th>
            <th scope="col">Kuvaus</th>
            <th scope="col">Hinta</th>
            <th scope="col">Kpl</th>
            <th scope="col">Lähetettävissä</th>
            <th scope="col">Arvioitu lähetysaika päivinä</th>
        </tr>
        @foreach ($tuote as $rivi)
            <tr>
                <td>
                    <a href="{{route('tuotteetEdit', ['tuote' => $rivi->id])}}"><button class="btn btn-warning btn-sm" style="width: 80px; margin: auto;">muokkaa</button></a>
                    <form class="delete-tuote-form d-inline" action="{{route('tuotteetDelete', ['tuote' => $rivi->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" title="Poista">Poista</button>
                    </form>
                </td>

                <td scope="row">{{$rivi->nimi}}</td>

                <td scope="row">{{$rivi->valmistaja}}</td>

                <td scope="row">{{$rivi->kuvaus}}</td>

                <td scope="row">{{$rivi->hinta}} e</td>

                <td scope="row">{{$rivi->kpl}} kpl</td>

                <td scope="row">{{$rivi->lahetettavissa}}</td>

                <td scope="row">{{$rivi->arvioitulahetysaika}} pv</td>
            </tr>
        @endforeach
    </table>
</x-layout>