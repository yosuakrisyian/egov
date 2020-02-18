@extends('layouts.MyLayout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                    EDIT DATA GOLONGAN                    
            </h2>
        </div>

        <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">

                                <form method="post" action="{{ route('updategolongan',$data->id_golongan) }}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="id_golongan" value="{{$data->id_golongan}}" id="id_golongan" class="form-control" required="required" autocomplete="off">
                                                <label class="form-label">Id Golongan</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="jenis_golongan" value="{{$data->jenis_golongan}}" required="required" autocomplete="off">
                                                <label class="form-label">Jenis Golongan</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="pangkat" value="{{$data->pangkat}}" required="required" autocomplete="off">
                                                <label class="form-label">Pangkat</label>
                                            </div>
                                        </div>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="golongan" value="{{$data->golongan}}" maxlength="4" required="required" autocomplete="off">
                                                <label class="form-label">Golongan</label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-link waves-effect">SIMPAN</button>
                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
        </div>

        </div>
</section>

@endsection