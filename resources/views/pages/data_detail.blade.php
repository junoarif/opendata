@extends('layout.master2')

@section('content')

<div id="main">
  <div class="container">
    <div class="row">
      <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Show Klasifikasi</span>
      <br/>

           @foreach ($rd as $review_data)
           <div class="col-md-9">
             <h4>{{$review_data->judul_rd}}</h4>
             <p>{{$review_data->isi_rd}}</p>
             <h6><i class="fa fa-check-square-o" aria-hidden="true"></i><em>Sudah terverifikasi PPID Pembantu </em></h6>
             <!--
             <iframe src="http://localhost:8080/laravel/opendatarsj/public/data/show2/{{$id}}" width="970" height="200">">
             </iframe>
           -->
           </div>

           <div class="col-md-9">
             <h4>Aditional Information</h4>
             <table class="table table-striped">
               <tr>
                 <td>last update</td>
                 <td>{{$review_data->updated_at}}</td>
               </tr>
               <tr>
                 <td>Create</td>
                 <td>{{$review_data->created_at}}</td>
               </tr>
             </table>
           </div>
           @endforeach

           <div class="col-md-9">

             <a href="{{route('getdoc', $review_data->link_csv)}}" download="{{$review_data->link_csv}}"><button type="button" class="btn btn-primary">CSV</button></a>
             <a href="{{route('getdoc', $review_data->link_json)}}" download="{{$review_data->judul_rd}}"><button type="button" class="btn btn-info">CSV</button></a>

           </div>


    </div>
  </div>


</div>
@endsection
