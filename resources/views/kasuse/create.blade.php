@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Data Kasus Local') }}</div>

                <div class="card-body">
                <form  action="{{route('kasuse.store')}}" method="post">
                    @csrf

                    @livewireStyles

                        @livewire('tracking')
                  
                   @livewireScripts
                   <hr color="blue">
                        <h2 class="text-center" style="color:violet">
                        <b>
                            <i>
                            Status Kasus
                            </i>
                        </b>
                        </h2>
                    <hr color="blue">

                     <div class="form-group">
                        <label for="">RW</label>
                        <select name="id_rw" class="form-control" required>
                            @foreach($rw as $data)
                                <option value="{{$data->id}}">{{$data->nama_rw}}</option>
                            @endforeach
                        </select>
                    </div>
                      <div class="form-group">
                    <div class="mb-12>
                        <label for="exampleInputPassword1" class="form-label">Positif</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="positif"
                        >
                        @if($errors->has('positif'))
                            <span class="text-danger">{{$errors->first('positif')}}</span>
                        @endif
                    </div>
                     </div>
                     <div class="form-group">
                    <div class="mb-12>
                        <label for="exampleInputPassword1" class="form-label">Sembuh</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="sembuh"
                        >
                        @if($errors->has('sembuh'))
                            <span class="text-danger">{{$errors->first('sembuh')}}</span>
                        @endif
                    </div>
                     </div>
                     <div class="form-group">
                    <div class="mb-12>
                        <label for="exampleInputPassword1" class="form-label">Meninggal</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="meninggal"
                        >
                        @if($errors->has('meninggal'))
                            <span class="text-danger">{{$errors->first('meninggal')}}</span>
                        @endif
                    </div>
                     </div>
                     <div class="form-group">
                    <div class="mb-12>
                        <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="exampleInputPassword1" name="tanggal"
                        >
                        @if($errors->has('tanggal'))
                            <span class="text-danger">{{$errors->first('tanggal')}}</span>
                        @endif
                    </div>
                     </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
