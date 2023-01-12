<html>
<body>


<div style="text-align:left">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSayb9ii5KUvsoMtUcrrjB2w4WpdOJs48PT7w&usqp=CAU">
    <p>100 TL</p>
    <button id="1" onclick="window.location.href='{{ route('sepetimrouteisim') }}'">Sepete Ekle</button>
    <a href="{{ route('sepetEkleGet',['id'=>1]) }}">Sepete Ekle (Get)</a>
    <a href="{{ route('favorilerimEkle',['id'=>1]) }}">Favorilerime Ekle (Get)</a>

    <br>
    <br>
    <br>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKdOkgu2s_G2TZbHJcYAvPbQuD3Qn34M6Xjw&usqp=CAU" />
    <p>150 TL</p>
    <button id="1" onclick="window.location.href='{{ route('sepetimrouteisim') }}'">Sepete ekle</button>
    <a href="{{ route('sepetEkleGet',['id'=>2]) }}">Sepete Ekle (Get)</a>
    <a href="{{ route('favorilerimEkle',['id'=>2]) }}">Favorilerime Ekle (Get)</a>

</div>
<div style="text-align:center">
<button onclick="window.location.href='{{ route('sepetimrouteisim') }}'">Sepete git</button>
</div>
</body>
</html>
