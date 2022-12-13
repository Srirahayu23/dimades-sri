@extends('admin.layout')
@section('content')


<form action="{{route('category.update', Crypt::encrypt($data->id))}}" method="post">
@csrf
    {{method_field('PUT')}}

    <div class="content">
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-default">
                    <div class="card-header">
                        <h2>Edit Kategori</h2>
                    </div>
                </div>
                @include('admin.partials.flash')
                <div class="card-board">
                    <div class="form-group">
                        <label class="form-label">Nama</label>
                        <input name="name" value="{{$data->name}}"class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Type</label>
                        <select name="type" id="" class="form-control">
                            <option value="">Type</option>
                            <option value="1"{{$data->type == "1" ? "selected" :""}}>Makanan & Minuman</option>
                            <option value="2"{{$data->type == "2" ? "selected" :""}}>Benda</option>
                        </select>
                    </div>

                    <div class="form-footer pt-5 border-top">
                        <button type="submit"class="btn btn-primary btn-default">Simpan</button>
                        <a href="{{route('category.index')}}" class="btn btn-secondry btn-default"class=></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection