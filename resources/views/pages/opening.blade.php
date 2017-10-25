@extends('layout.master')

@section('content')

<!-- What is -->
<div id="whatis" class="content-section-b" style="border-top: 0">
  <div class="container">

    <div class="col-md-6 col-md-offset-3 text-center wrap_title">
      <h2>Klasifikasi Data</h2>
      <p class="lead" style="margin-top:0">Silahkan pilih klasifikasi data</p>

    </div>

    <div class="row">
      @foreach($menu_dt as $menu_data)
      <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown text-center">
        <img class="rotate" src="img/icon/{{$menu_data->pic}}" alt="Generic placeholder image">
        <h3><a href="data/sub/{{$menu_data->slug_md}}">{{$menu_data->nama_menu}}</a></h3>
        <p class="lead">{{$menu_data->caption}}</p>

        <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
      </div><!-- /.col-lg-4 -->
      @endforeach

    </div><!-- /.row -->
  </div><!-- /container -->
</div>

<!-- Screenshot -->
<div id="screen" class="content-section-b">
  <div class="container">
      <div class="row" >
         <div class="col-md-6 col-md-offset-3 text-center wrap_title ">
            <h2>Screen Aplikasi</h2>
            <p class="lead" style="margin-top:0">Aplikasi-aplikasi RSJD Dr.RM.Soedjarwadi </p>
         </div>
      </div><!-- /row-->

      <div class="row wow bounceInUp" >
        <div id="owl-demo" class="owl-carousel">
          @foreach($slider as $sld)
            <a href="img/slide/{{$sld->link}}" class="image-link">
              <div class="item">
              <img  class="img-responsive img-rounded" src="img/slide/{{$sld->link}}" alt="Owl Image">
              </div>
            </a>
          @endforeach
      </div><!--/owl -->
    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- end -->

<!-- about -->
<div id="about" class="content-section-a">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center wrap_title">
        <h2>Tentang</h2>
        <p class="lead" style="margin-top:0">Tentang Open Data RSJD Dr.RM.Soedjarwadi</p>
      </div>
      <div class="col-lg-12 col-xs-12">
        <p>
          @foreach($about as $abo)
          {{$abo->isi_about}}
          @endforeach
        </p>
      </div>
    </div>
  </div>
</div>

<!-- section subscribe -->
<div  class="content-section-c ">
  <div class="container">
    <div class="row">
    <div class="col-md-6 col-md-offset-3 text-center white">
      <h2>Dapatkan Update</h2>
      <p class="lead" style="margin-top:0">Update Relatime Newsletter kami</p>
     </div>
    <div class="col-md-6 col-md-offset-3 text-center">
      <div class="mockup-content">
          <div class="morph-button wow pulse morph-button-inflow morph-button-inflow-1">
            <button type="button "><span>Subscribe Newsletter kami</span></button>
            <div class="morph-content">
              <div>
                <div class="content-style-form content-style-form-4 ">
                  <h2 class="morph-clone">Subscribe Newsletter kami</h2>
                  <form>
                    <p><label>Alamat email</label><input type="text"/></p>
                    <p><button>Subscribe</button></p>
                  </form>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    </div>>
  </div>
</div>


<!-- link eksternal -->
<div id="visualisasi" class="content-section-a">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center wrap_title">
        <h2>Visualisasi</h2>
        <p class="lead" style="margin-top:0">Penjelasan tentang open data</p>
       </div>
      @foreach($link_eksternal as $link)
      <div class="col-lg-4 col-xs-12">
        <div class="card">
              <img class="card-img-top" src="img/logo/{{$link->logo}}">
                  <div class="card-block">
                          <h4 class="card-title">{{$link->topik}}</h4>

                          <div class="card-text">
                                {{$link->caption}}
                          </div>
                  </div>
              <div class="card-footer">
                  <span class="float-right"> <a href="{{$link->link}}" target="_blank">Pelajarai Lebih Lanjut</a></span>
                    <i class="fa fa-play-circle" aria-hidden="true"></i>
              </div>
        </div>
      </div> <!-- end col -->
      @endforeach
    </div> <!-- end row -->
  </div> <!-- end container -->
</div> <!-- end contenct -->



@endsection
