<x-layout>
    <div class="container-fluid">
        <!--<h2 style="color: white;">Tämä on kauppa sivu, tänne tulee hienoja tuotteita.</h2> -->
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center" >
            @foreach ($tuote as $rivi)
                <div class="col">
                    <div class="card" style="width: 20rem;">
                        <img src="{{ url('public/Image/'.$rivi->kuva) }}" class="card-img-top" alt="..." style="width: 100%; height: 175px;"> 
                        <div class="card-body">
                          <h5 class="card-title">{{$rivi->nimi}}</h5><br>
                          <p class="card-text" style="color: black">Hinta: {{$rivi->hinta}} euroa</p>
                          <p class="card-text" style="color: black">{{$rivi->kuvaus}}</p>
                          <p class="card-text" style="color: black">Valmistaja: {{$rivi->valmistaja}}</p>
                          <p class="card-text" style="color: black">Määrä: {{$rivi->kpl}} kpl</p>
                          <p class="card-text" style="color: black">Lähetettävissä: {{$rivi->lahetettavissa}}</p>
                          <p class="card-text" style="color: black">Arvioitu lähetyksen kesto: {{$rivi->arvioitulahetysaika}} pv</p>
                          <a href="#" class="btn btn-primary">Osta tuote!</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>