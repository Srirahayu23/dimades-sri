@extends('admin.layout')
@section('content')


<form action="{{route('category.store')}}" method="post">
    {{csrf_field()}}

    <div class="content">
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-default">
                    <div class="card-header">
                        <h2>Tambah Kategori</h2>
                    </div>
                <!-- </div> -->
                @include('admin.partials.flash')
                <div class="card-board">
                    <div class="form-group">
                        <label class="form-label">Nama</label>
                        <input name="name" value="{{old('name')}}"class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Jenis</label>
                        <select name="type" id="" class="form-control">
                            <option value="">Pilih Jenis</option>
                            <option value="1"{{old('type') == "1" ? "selected" :""}}>Makanan & Minuman</option>
                            <option value="2"{{old('type') == "2" ? "selected" :""}}>Benda</option>
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