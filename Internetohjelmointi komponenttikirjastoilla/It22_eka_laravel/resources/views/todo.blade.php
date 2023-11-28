<x-layout>
  <div class="row justify-content-center mt-5">
    <div class="col-md-8">
      <div class="card" style="border-color: black !important;">
        <div class="card-header" style="background-color: #740000; color: white;">Todo Lomake</div>
        <div class="card-body" style="background-color: #8B0000;">
          <form action="{{route('todoTallenna')}}" method="post" name="todoLomake">
            @csrf
            <div class="mb-3 row">
              <label class="col-md-4 col-form-label text-md-end text-start" style="color: white !important;">Todo otsikko</label>
                <div class="col-md-6">
                  <input type ="text" name="otsikko" class="form-control" placeholder="Todo otsikko" value="{{ old('otsikko')}}" style="background-color: #740000; border-color: #740000; color: white;">
                  @error('otsikko')
                    <div class="m-0 small alert alert-danger shadow-sm">
                      {{$message}}
                    </div>   
                  @enderror
                </div>
            </div>
            <br>
            <div class="mb-3 row">
              <label class="col-md-4 col-form-label text-md-end text-start" style="color: white !important;">Status</label>
                <div class="col-md-6">
                  <input type="radio" name="status" value="idea"><label style="color: white !important;">&nbsp;Idea</label><br>
                  <input type="radio" name="status" value="aloitettu"><label style="color: white !important;">&nbsp;Aloitettu</label><br>
                  <input type="radio" name="status" value="50"><label style="color: white !important;">&nbsp;50% Tehty</label><br>
                  <input type="radio" name="status" value="valmis"><label style="color: white !important;">&nbsp;Valmis</label><br>
                  @error('status')
                    <div class="m-0 small alert alert-danger shadow-sm">
                      {{$message}}
                    </div>   
                  @enderror
                </div>
            </div>
            <br>
            <div class="mb-3 row">
              <label class="col-md-4 col-form-label text-md-end text-start" style="color: white !important;">Kiireellisyys</label>
                <div class="col-md-6">
                  <input type="radio" name="kiireellisyys" value="heti"><label style="color: white !important;">&nbsp;Heti</label><br>
                  <input type="radio" name="kiireellisyys" value="huomenna"><label style="color: white !important;">&nbsp;Huomenna</label><br>
                  <input type="radio" name="kiireellisyys" value="joskus"><label style="color: white !important;">&nbsp;Joskus</label><br>
                  @error('kiireellisyys')
                    <div class="m-0 small alert alert-danger shadow-sm">
                      {{$message}}
                    </div>   
                  @enderror
                </div>
            </div>
            <br>

            <div class="mb-3 row">
              <label class="col-md-4 col-form-label text-md-end text-start" style="color: white !important;">Todo selite</label>
                <div class="col-md-6">
                  <textarea name="selite" rows="4" cols="50"  class="form-control" placeholder="Kerro Todo selite tähän" style="background-color: #740000; border-color: #740000; color: white;">{{ old('selite')}}</textarea>
                  @error('selite')
                    <div class="m-0 small alert alert-danger shadow-sm">
                      {{ $message }}
                    </div>   
                  @enderror
                </div>
            </div>
            <br>

            <div class="mb-3 row">
              <div class="col-md-6">
                <input class="btn btn-primary" type="submit" value="Lisää Todo">
                <input class="btn btn-primary" type="reset" value="Tyhjä lomake">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-layout>