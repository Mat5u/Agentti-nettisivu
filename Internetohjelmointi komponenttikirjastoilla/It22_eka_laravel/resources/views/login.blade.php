<x-layout>
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
    
            <div class="card" style="border-color: black !important;">
                <div class="card-header" style="background-color: #740000; color: white;">Kirjaudu</div>
                <div class="card-body" style="background-color: #8B0000;">
                    <form action="{{ route('authenticate') }}" method="post">
                        @csrf
                        <div class="mb-3 row">
                            <label for="email" class="col-md-4 col-form-label text-md-end text-start" style="color: white !important;">Sähköposti</label>
                            <div class="col-md-6">
                              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Sähköposti" value="{{ old('email') }}" style="background-color: #740000; border-color: #740000; color: white;">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-md-4 col-form-label text-md-end text-start" style="color: white !important;">Salasana</label>
                            <div class="col-md-6">
                              <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Salasana" style="background-color: #740000; border-color: #740000; color: white;">
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Kirjaudu">
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>    
    </div>
</x-layout>