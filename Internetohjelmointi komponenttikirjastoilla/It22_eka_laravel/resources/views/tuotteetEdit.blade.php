<x-layout>
    <style>
        .btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
            background-color: #740000 !important;
            border-color: black !important;
            color: white !important;
        }
    </style>
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card" style="border-color: black !important;">
                <div class="card-header" style="background-color: #740000; color: white;">Päivitä tuote</div>
                <div class="card-body" style="background-color: #8B0000;">
                    <form action="{{route('tuotteetUpdate', ['tuote' => $tuote->id])}}" method="POST" >
                        @csrf
                        @method('PUT')
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label text-md-end text-start" style="color: white !important;">Nimi</label>
                            <div class="col-md-6">
                                <input type ="text" name="nimi" class="form-control" placeholder="{{$tuote->nimi}}" value="{{$tuote->nimi}}" style="background-color: #740000; border-color: #740000; color: white;">
                                @error('nimi')
                                    <div class="m-0 small alert alert-danger shadow-sm">
                                        {{$message}}
                                    </div>   
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label text-md-end text-start" style="color: white !important;">Kuvaus</label>
                            <div class="col-md-6">
                                <textarea name="kuvaus" row="4" cols="50"  class="form-control" placeholder="{{$tuote->kuvaus}}" style="background-color: #740000; border-color: #740000; color: white;">{{$tuote->kuvaus}}</textarea>
                                @error('kuvaus')
                                    <div class="m-0 small alert alert-danger shadow-sm">
                                        {{$message}}
                                    </div>   
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label text-md-end text-start" style="color: white !important;">Hinta</label>
                            <div class="col-md-6">
                                <input type ="text" name="hinta" class="form-control" placeholder="{{$tuote->hinta}}" value="{{$tuote->hinta}}" style="background-color: #740000; border-color: #740000; color: white;">
                                @error('hinta')
                                    <div class="m-0 small alert alert-danger shadow-sm">
                                        {{$message}}
                                    </div>   
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label text-md-end text-start" style="color: white !important;">Kpl</label>
                            <div class="col-md-6">
                                <input type ="text" name="kpl" class="form-control" placeholder="{{$tuote->kpl}}" value="{{$tuote->kpl}}" style="background-color: #740000; border-color: #740000; color: white;">
                                @error('kpl')
                                    <div class="m-0 small alert alert-danger shadow-sm">
                                        {{$message}}
                                    </div>   
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label text-md-end text-start" style="color: white !important;">Lähetettävissä</label>
                            <div class="col-md-6">
                                <input type ="text" name="lahetettavissa" class="form-control" placeholder="{{$tuote->lahetettavissa}}" value="{{$tuote->lahetettavissa}}" style="background-color: #740000; border-color: #740000; color: white;">
                                @error('lahetettavissa')
                                    <div class="m-0 small alert alert-danger shadow-sm">
                                        {{$message}}
                                    </div>   
                                @enderror
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label text-md-end text-start" style="color: white !important;">Arvioitu lähetysaika päivinä</label>
                            <div class="col-md-6">
                                <input type ="text" name="arvioitulahetysaika" class="form-control" placeholder="{{$tuote->arvioitulahetysaika}}" value="{{$tuote->arvioitulahetysaika}}" style="background-color: #740000; border-color: #740000; color: white;">
                                @error('arvioitulahetysaika')
                                    <div class="m-0 small alert alert-danger shadow-sm">
                                        {{$message}}
                                    </div>   
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="mb-3 row">
                            <div class="col-md-6">
                                <input class="btn btn-primary" type="submit" value="Päivitä tuote">
                                <input class="btn btn-primary" type="reset" value="Tyhjä lomake">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>   
</x-layout>