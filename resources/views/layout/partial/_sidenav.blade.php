<div id="mySidenav" class="sidenav">
  <ul>
    <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
  </ul>
  <ul>
      @foreach ($klasifikasi as $klas)
      <li><a href="{{route('klasif', $klas->slug_md)}}">{{$klas->nama_menu}}</a></li>
      @endforeach
  </ul>
</div>
