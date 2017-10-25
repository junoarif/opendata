@extends('layout.master_frame')
@section('content')

<div id="main">
  <div class="container">
    <div class="row">
           <div class="col-md-9">
             <table class="table table-bordered">
               <tr>
                 @foreach ($therows as $index => $baris)
                 <td>{{$index}}</td>
                 @endforeach
               </tr>
               <tr>
                 @foreach ($therows as $index => $baris)
                 <td>{{$baris[0]}}</td>
                  @endforeach
               </tr>
             </table>
          </div>
    </div>
  </div>
</div>

@endsection
