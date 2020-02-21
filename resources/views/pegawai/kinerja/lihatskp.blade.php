@extends('layouts.PegawaiLayout')
@section('content')


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    DATA LIHAT SKP                   
                </h2>
            </div>


            <!-- Basic Examples -->
                     
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">

                            <form action="{{ route('showPegawailihatskp') }}" method="post">
                                @csrf
                                <div class="body">
                                <div class="row">
                                        <div class="col-md-6">
                                            <table class="table table-responsive table-bordered">
                                                <tr>
                                                    <td>
                                                        Tahun
                                                    </td>
                                                    <td>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <select class="form-control" name="tahun">
                                                                <option value="2019">2019</option>
                                                                <option value="2018">2018</option>
                                                                <option value="2017">2017</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    </td>
                                                </tr>
                                            
                                            </table>

                                            
                                                <h2>
                                                <button type="submit" class="btn bg-green waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">Lihat SKP</button>
                                                </h2>
            
                                        </div>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                        
            
            <!-- #END# Basic Examples -->
        </div>
    </section>

   
 @endsection