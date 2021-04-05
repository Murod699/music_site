@extends('layouts.admin')
@section('content')
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">
                  Qo'shiqlar
                  <a class="btn btn-sm btn-primary float-right" href="{{route('tracks.create')}}">Yaratish</a>
                  </h6>

                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <th>Qo'shiq nomi</th>
                            <th width="180">Amallar</th>
                        </thead>
                        <tbody>
                            @foreach($tracks as $track)
                            <tr>
                                <td>{{$track->name}}</td>
                                <td>
                                    <a class="btn btn-warning"  href="{{route('tracks.edit', ['id'.$track->id] )}}">O'zgartirish</a>
                                    <form action="{{route('tracks.destroy', ['id'.$track->id] )}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">O'chirish</button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table> 
                </div>
              </div>
              @endsection
            </div>
