<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        @foreach($about as $ab)
        <h3 class="footer-title">Tentang Open Data Sujarwadi</h3>
        <p>Portal Open Data Sujarwadi adalah tempat untuk menemukan data yang terbuka dari<br/>
          dan informasi tentang hal-hal yang penting bagi RSJD Dr.RM.Soedjarwadi Provinsi Jawa Tengah<br/>
          Untuk melihat lebih lanjut tentang penggunaan data terbuka kunjungi :<br/><br/>
          <a  href="{{$ab->link_api}}" target="_blank">Dokumentasi API</a> <br/>
          <a  href="{{$ab->link_snk}}" target="_blank">Syarat dan ketentuan</a> <br/>
          <a  href="{{$ab->link_faq}}" target="_blank">FAQ</a>
        </p>


      </div> <!-- /col-xs-7 -->

      <div class="col-md-5">
        <div class="footer-banner">
          <h3 class="footer-title">Alamat</h3>
          <ul>
            <li>{{$ab->nama_corporate}}</li>
            <li>{{$ab->alamat}}</li>
            <li>Tlp. {{$ab->telp}} | Faks. {{$ab->faks}}</li>
          </ul>
          <h4>Media Sosial</h4>
          <li class="social">
          <a href="{{$ab->link_fb}}"><i class="fa fa-facebook-square fa-size"> </i></a>
          <a href="{{$ab->link_twitter}}"><i class="fa fa-twitter-square fa-size"> </i></a>
          <a href="{{$ab->link_instagram}}"><i class="fa fa-instagram fa-size"> </i></a>
          <a href="{{$ab->link_youtube}}"><i class="fa fa-youtube-square fa-size"> </i> </a>
          </li>
            @endforeach
        </div>
      </div>
    </div>
  </div>
</footer>
