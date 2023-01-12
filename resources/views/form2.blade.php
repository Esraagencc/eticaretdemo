<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="{{ route('form2kaydet') }}" method="POST">
    @csrf
    <div class="form-group row">
        <label for="select" class="col-4 col-form-label">Araba Başlangıç Noktası</label>
        <div class="col-8">
            <select id="select" name="arababaslangıc" class="custom-select">
                @foreach($aracBaslangic as $aracBaslangicc)
                <option value="{{ $aracBaslangicc['id']}}">{{ $aracBaslangicc['BaslangıcNoktasi'] }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="select1" class="col-4 col-form-label">Araba Bitiş Noktası</label>
        <div class="col-8">
            <select id="select1" name="arababitis" class="custom-select">
                @foreach($aracBitis as $aracBitiss)
                <option value="{{ $aracBitiss['id']}}">{{ $aracBitiss['BitisNoktasi'] }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Başlangıç Tarihi(gün, ay, yıl)</label>
        <div class="col-8">
            <input id="text" name="baslangıctarih" type="date" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Bitiş Tarihi</label>
        <div class="col-8">
            <input id="text1" name="bitistarih" type="date" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="select2" class="col-4 col-form-label">Araba Modeli Seçiniz</label>
        <div class="col-8">
            <select id="select2" name="arabamodel" class="custom-select">
                @foreach($aracMarka as $aracMarkaa)
                <option value="{{ $aracMarkaa['id']}}">{{ $aracMarkaa['Aracmarkasi'] }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Rezervasyon Yap</button>
            <a href="{{ route('cikisyap') }}">  ÇIKIŞ YAP   </a>
        </div>
    </div>
</form>
