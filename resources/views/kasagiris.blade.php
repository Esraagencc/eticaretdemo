<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<form action="{{ route('kasagiriskaydet') }}" method="POST">
    @csrf
    <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Ad</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                    </div>
                </div>
                <input id="text" name="name" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Soyad</label>
        <div class="col-8">
            <input id="text1" name="soyad" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="textarea" class="col-4 col-form-label">Tutar</label>
        <div class="col-8">
            <input id="textarea" name="tutar" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">KAYDET</button>
        </div>
    </div>
</form>
