@extends('layouts.admin')
@section('content')
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Yangi qo'shiq yuklash</h6>
                </div>
                <div class="card-body">
                    <form action="{{route('tracks.store')}}">
                        <div class="form-group">
                            <label for="">Qo'shiq nomi</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Qo'shiq muallifi</label>
                            <input type="text" name="avtor" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Saqlash</button>
                    </form>
                    
                </div>
              </div>
              @endsection
            </div>
