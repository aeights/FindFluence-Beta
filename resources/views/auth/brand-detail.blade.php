@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Brand Detail</div>

                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                          <input type="text" name="name">
                          <input type="text" name="website">
                          <input type="text" name="address">
                          <input type="text" name="contact">
                          <input type="file" name="photo">
                          <button type="submit">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
