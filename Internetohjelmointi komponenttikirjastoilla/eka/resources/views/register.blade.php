<x-layout>
    <h2>Rekisteröinti lomake</h2>
    <form name="rekisteroidy" action="/regdb" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-2">
                <label class="text-muted mb-1">Nimi</label>
            </div>
            <div class="col-sm-3">
                <input type="text" name="name" class="form-control" value="{{ old("name") }}">
                @error('name')
                    <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <label class="text-muted mb-1">Email</label>
            </div>
            <div class="col-sm-3">
                <input type="email" name="email" class="form-control" value="{{ old("email") }}">
                @error('email')
                    <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                <label class="text-muted mb-1">Salasana</label>
            </div>
            <div class="col-sm-3">
                <input type="password" name="password" class="form-control">
                @error('password')
                    <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                <label class="text-muted mb-1">Salasanan vahvistus</label>
            </div>
            <div class="col-sm-3">
                <input type="password" name="password-confirm" class="form-control">
                @error('password-confirm')
                    <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-3">
                <input type="submit">
            </div>
        </div>
    </form>
</x-layout>