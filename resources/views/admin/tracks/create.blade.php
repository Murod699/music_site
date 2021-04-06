@extends('layouts.admin')
@section('content')
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Yangi qo'shiq yuklash</h6>
                </div>
                <div class="card-body">
                @if ($errors->any())
                   <div class='alert alert-danger'>
                       <ul>
                           @foreach ($errors->all() as $error)
                               <li>{{ $error }}</li>
                           @endforeach
                       </ul>
                   </div>
               @endif
                    <form action="{{route('tracks.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        <div class="form-group">
                            <label for="">Qo'shiq nomi</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Qo'shiq muallifi</label>
                            <input type="text" name="avtor" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Qo'shiqni rasmi</label>
                            <input type="file" name="img" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Qo'shiqni yuklang</label>
                            <input type="file" name="mp3" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Saqlash</button>
                    </form>
                    
                </div>
              </div>
              @endsection
            </div>
