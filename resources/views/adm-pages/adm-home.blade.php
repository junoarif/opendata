@extends('layout.master_adm')
<script>
$(document).on('ajaxComplete ready', function () {
    $('.modalid').off('click').on('click', function () {
        $('#modalidContent').load($(this).attr('value'));
        $('#modalidTitle').html($(this).attr('title'));
    });
});
</script>
@section('content')

<div id="main">
  <div class="container">
      <div class="row">
        <div class="content"></div>
          <div class="col-md-9">
            <div class="card">
                      <div class="card-block">
                              <h4 class="card-title">Your Posting</h4>

                              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add">New Post!</button>
                              <div class="card-text">
                                <table class="table table-bordered">
                                  <tr>
                                    <th>No.</th>
                                    <th>Judul Post</th>
                                    <th colspan="2">Option</th>
                                  </tr>
                                  <?php $no = $list_dt->firstItem() - 1 ; ?>
                                  @foreach ($list_dt as $list)
                                  <?php $no++ ;?>
                                  <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$list->judul_rd}}</td>
                                    <td><i class="fa fa-pencil-square-o text-success" aria-hidden="true"></i>&nbsp Update</td>
                                    <td><i class="fa fa-eraser text-danger" aria-hidden="true"></i>&nbsp Hapus</td>
                                  </tr>
                                  @endforeach
                                </table>
                                <?php echo str_replace('/?', '?', $list_dt->render()); ?>
                              </div>
                      </div>
                  <div class="card-footer">
                      <span class="float-right"> <a href="#" target="_blank">Pelajarai Lebih Lanjut</a></span>
                        <i class="fa fa-play-circle" aria-hidden="true"></i>
                  </div>
            </div>
          </div>

          <div class="col-md-3">

                    <div class="card">
                          <img class="card-img-top" src="img/users/jn3.jpg">
                              <div class="card-block">
                                      <h5 class="card-title">{{ Auth::user()->name }}</h5>
                                      You are logged in!
                                      <div class="card-text">
                                        @foreach ($count as $count)
                                        <p><i class="fa fa-circle text-info"></i>&nbsp Jumlah Posting : {{$count->count}}</br>
                                        @endforeach
                                        @foreach ($user_log as $u_log)
                                        <i class="fa fa-circle text-danger"></i>&nbsp Login terakhir : {{$u_log->updated_at}}</br>
                                        <i class="fa fa-circle text-warning"></i>&nbsp count login :</br>
                                        @endforeach
                                      </div>
                              </div>
                          <div class="card-footer">
                              <span class="float-right"> <a href="#" target="_blank">Lengkapi Profile </a></span>
                                &nbsp <i class="fa fa-user text-danger"></i>
                          </div>
                    </div>

          </div>
      </div>
  </div>
</div>

<!-- Modal -->
<div id="add" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Post Data</h4>
            </div> <!-- end of modal-header -->

            <div class="modal-body">
              {!! Form::open(['url' => '/adm/posting', 'files' => true]) !!}
                  <div class="form-group">
                    {!! Form::label('kategori', 'Kategori') !!}
                    <select class="form-control" name="category" placeholder="Pilih Kategori">
                      @foreach($kategori as $ktg)
                        <option value="{{$ktg->id}}">{{$ktg->nama_menu}}</option>
                      @endforeach
                    </select>
                    <small id="kategori_help" class="form-text text-muted">Hanya bisa memilih kategori sesui hak akses.</small>
                  </div>
                  <div class="form-group">
                    {!! Form::label('judul', 'Judul') !!}
                    {!! Form::text('judul', '', ['class' => 'form-control']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('caption', 'Caption') !!}
                    {!! Form::textarea('caption', '',['rows' => '2', 'class' => 'form-control'] ) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('upload', 'Upload File CSV') !!}
                    {!! Form::file('file_csv', '',['class' => 'form-control-file', 'aria-describedby' => 'fileHelp'] ) !!}
                    <small id="fileHelp" class="form-text text-muted">Hanya file dengan format .csv</small>
                  </div>
                  {!! Form::submit('save', ['class' => 'btn btn-primary']) !!}
                  {!! Form::close() !!}

            </div><!-- emd of modal-body -->
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- End of moadl-content -->
    </div><!--End of class modal-dialog -->
</div><!--End of class modal-->

@endsection
