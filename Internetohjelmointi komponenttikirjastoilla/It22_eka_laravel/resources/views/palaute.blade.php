<x-layout>
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card" style="border-color: black !important;">
                <div class="card-header" style="background-color: #740000; color: white;">Palaute lomake</div>
                <div class="card-body" style="background-color: #8B0000;">
                    <form action="{{route('palauteLomake')}}" method="post" name="palauteLomake">
                        @csrf
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label text-md-end text-start" style="color: white !important;">Asia</label>
                            <div class="col-md-6">
                                <input type ="text" name="asia" class="form-control" placeholder="Asian otsikko" style="background-color: #740000; border-color: #740000; color: white;">
                            </div>
                        </div>
                        <br>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label text-md-end text-start" style="color: white !important;">Sähköposti</label>
                            <div class="col-md-6">
                                <input type ="text" name="email" class="form-control" placeholder="Sähköposti" style="background-color: #740000; border-color: #740000; color: white;">
                            </div>
                        </div>
                        <br>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label text-md-end text-start" style="color: white !important;">Varasinainen asia</label>
                            <div class="col-md-6">
                                <textarea name="sisalto" row="4" cols="50"  class="form-control" placeholder="Kerro asiasi tähän" style="background-color: #740000; border-color: #740000; color: white;"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="mb-3 row">
                            <div class="col-md-6">
                                <input class="btn btn-primary" type="submit" value="Lisää palaute">
                                <input class="btn btn-primary" type="reset" value="Tyhjä lomake">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>   
</x-layout>