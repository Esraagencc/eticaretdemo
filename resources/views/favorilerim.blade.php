<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="card">
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col"><h4><b>FAVORİLERİM</b></h4></div>
                </div>
            </div>
            <?php $adet=0 ?>
            <?php $fiyat=0 ?>
            @foreach($tumUrunler as $tumurunlerr)
                @if(in_array($tumurunlerr['id'],$sepettekiUrunler))
                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="{{$tumurunlerr['urunGorseli'] }}"></div>
                            <div class="col">
                                <div class="row text-muted">{{$tumurunlerr['urunAdi'] }}</div>
                            </div>
                            <div class="col">&#x20BA; {{$tumurunlerr['urunFiyati'] }} <a href="{{route('sepetSilGet',['id'=>$tumurunlerr['id']]) }}"> <span class="close">&#10005;</span></a></div>
                        </div>
                    </div>
                        <?php $adet++ ?>
                        <?php $fiyat=$fiyat+ $tumurunlerr['urunFiyati']?>
                @endif
            @endforeach
            <div class="back-to-shop"><a href="{{ route('altgiyimrouteisim') }}">&leftarrow;<span class="text-muted">Alışverişe devam et</span></a></div>
        </div>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
