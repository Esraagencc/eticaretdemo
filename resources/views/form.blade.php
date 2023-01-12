<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('formKaydet') }}" method="POST">
    @csrf
    <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Ad Soyad</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                </div>
                <input id="text" name="name" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Telefon</label>
        <div class="col-8">
            <input id="text1" name="phone" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="textarea" class="col-4 col-form-label">Adres</label>
        <div class="col-8">
            <textarea id="textarea" name="address" cols="40" rows="5" class="form-control"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
