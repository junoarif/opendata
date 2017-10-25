@extends('layout.master2')

@section('content')

<div id="main">
  <div class="container">
    <div class="row">
      <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Show Klasifikasi</span>
      <br/>
      {!! Form::open(['url' => 'data/search', 'method' => 'get']) !!}
          <input type="searchdt" name="search" id="search" placeholder="Cari..">
      {!! Form::close() !!}
      @if (count($rd))
           @foreach ($rd as $review_data)
           <div class="col-md-9">
             <h4>{{$review_data->judul_rd}}</h4>
             <p>{{$review_data->isi_rd}}</p>
             <h6><i class="fa fa-check-square-o" aria-hidden="true"></i><em>Sudah terverifikasi PPID Pembantu </em></h6>
               <a href="{{route('getdoc', $review_data->link_csv)}}" download="{{$review_data->link_csv}}"><button type="button" class="btn btn-primary">CSV</button></a>
               <a href="{{route('detail', $review_data->slug_rd)}}"><buttpn type="button" class="btn btn-warning">Detail</button></a>
             <br/><br/>
           </div>
           @endforeach

       @else
           <br/><p>Oops.. Data Tidak Ditemukan</p>

      @endif
    </div>
  </div>


</div>
@endsection
