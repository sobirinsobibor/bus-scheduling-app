@extends('dashboard.layouts.main')

@section('content')
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">


        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="/dashboard/loan/create"><button class="btn btn-primary">New Schedule</button></a>
                </div>
                <div class="card-body">
                    <form action="/dashboard/loan" method="POST" enctype="multipart/form-data">
                        @method('post')
                        @csrf
                        <div class="mb-3">
                            <label for="user">User</label>
                            <select class="form-control" id="user" name="user_id">
                                <option value="">--/--</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="perihal">Perihal</label>
                            <input class="form-control" id="perihal" type="text" name="perihal">
                        </div>

                        <div class="mb-3">
                            <label for="tujuan">Tujuan (Kota)</label>
                            <input class="form-control" id="tujuan" type="text" name="tujuan">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="tgl_peminjaman_mulai">Tanggal Peminjaman</label>
                                    <input class="form-control" id="tgl_peminjaman_mulai" type="date" name="tgl_peminjaman_mulai">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="time_peminjaman_mulai">Waktu Peminjaman</label>
                                    <input class="form-control" id="time_peminjaman_mulai" type="time" name="time_peminjaman_mulai">
                                </div>
                            </div>
                        </div>
                        
                       <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="tgl_peminjaman_selesai">Tanggal Pengembalian</label>
                                    <input class="form-control" id="tgl_peminjaman_selesai" type="date" name="tgl_peminjaman_selesai">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="time_peminjaman_selesai">Waktu Pengembalian</label>
                                    <input class="form-control" id="time_peminjaman_selesai" type="time" name="time_peminjaman_selesai">
                                </div>
                            </div>
                       </div>

                       <fieldset>
                        <!-- Form Name -->
                            <legend class="title">Document(s)</legend>
                            <div class="document-stuff">
                            </div>
                            <!-- Button -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="add-document btn-sm btn-success">+ Add Documents</button>
                                    </div>
                                </div>
                            </div>
                    </fieldset>

                        @if ($errors->any())
                        <div class="alert alert-danger">
                          <ul>
                          @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                          @endforeach
                          </ul>
                        </div>
                        @endif

                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- hidden element add Documents --}}
<div class="form-group document-element" style="display:none; ">
    <div class="row">
        <div class="col-md-8">
            <div class="mb-3 form-group" >
                <input class="form-control-file" id="documents" type="file" name="document[]" required>
            </div>
        </div>
      <!-- End of fields-->
        <div class="col-md-1">
            <div class="mb-3">
                <button class="delete btn btn-danger">x</button>
            </div>
        </div>
        {{-- <small style="color: red" class="ml-3">service pack yang sudah dipilih tidak bisa diganti/dihapus ketika pembayaran</small> --}}

    </div>
</div>


<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
    $('.add-document').click(function(){
        $('.document-element').first().clone().appendTo('.document-stuff').show();
        attach_delete();
        event.preventDefault();
    });

    function attach_delete(){
        $('.delete').off();
        $('.delete').click(function(){
            console.log("click");
        $(this).closest('.form-group').remove();
        });
    }
    event.preventDefault();


</script>
@endsection