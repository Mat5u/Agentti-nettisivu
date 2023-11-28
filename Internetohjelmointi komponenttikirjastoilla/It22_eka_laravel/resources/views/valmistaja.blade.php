<x-layout>
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card" style="border-color: black !important;">
                <div class="card-header" style="background-color: #740000; color: white;">Lisää valmistaja</div>
                <div class="card-body" style="background-color: #8B0000;">
                    <form action="{{route('valmistajaTallenna')}}" method="post" name="valmistajaLomake">
                        @csrf
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label text-md-end text-start" style="color: white !important;">Valmistaja</label>
                            <div class="col-md-6">
                                <input type ="text" name="valmistaja" class="form-control" placeholder="Valmistajan nimi" style="background-color: #740000; border-color: #740000; color: white;">
                                @error('valmistaja')
                                    <div class="m-0 small alert alert-danger shadow-sm">
                                        {{$message}}
                                    </div>   
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label text-md-end text-start" style="color: white !important;">Maa</label>
                            <div class="col-md-6">
                                <input type="text" name="maa" class="form-control" placeholder="Kirjoita valmistajan maa" style="background-color: #740000; border-color: #740000; color: white;">
                                @error('maa')
                                    <div class="m-0 small alert alert-danger shadow-sm">
                                        {{$message}}
                                    </div>   
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="mb-3 row">
                            <div class="col-md-6">
                                <input class="btn btn-primary" type="submit" value="Lisää valmistaja">
                                <input class="btn btn-primary" type="reset" value="Tyhjä lomake">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>   
</x-layout>