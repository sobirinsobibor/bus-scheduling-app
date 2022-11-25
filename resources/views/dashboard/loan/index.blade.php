@extends('dashboard.layouts.main')

@section('content')
<div id="wrapper">


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">


            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                @if(session()->has('success'))
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">    
                    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                    </symbol>
                  </svg>
                  
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                    <div>
                        {{ session('success') }}
                    </div>
                </div>
                @endif
              
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <a href="/dashboard/loan/create"><button class="btn btn-primary">Add Loan +</button></a>
                        {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> --}}
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="text-center" rowspan="2">No</th>
                                        <th class="text-center" rowspan="2">User</th>
                                        <th class="text-center" rowspan="2">Perihal</th>
                                        <th class="text-center" colspan="2">Tanggal Peminjaman</th>
                                        <th class="text-center" rowspan="2">Details</th>
                                        <th class="text-center" rowspan="2">Status</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Mulai</th>
                                        <th class="text-center">Selesai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($loans as $loan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $loan->user->name }}</td>
                                        <td>{{ $loan->perihal }}</td>
                                        <td class="text-center">{{ $loan->tgl_peminjaman_mulai}} <br> {{ $loan->time_peminjaman_mulai}} </td>
                                        <td class="text-center">{{ $loan->tgl_peminjaman_selesai}} <br> {{ $loan->time_peminjaman_selesai}} </td>
                                        <td class="text-center">
                                            <a href="/dashboard/loan-detail/show?loanId={{ $loan->peminjaman_code }}">
                                                <button class="btn-sm btn-primary">Detail</button>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            @if ($loan->accepted == 0)
                                            <button class="btn-sm btn-warning">Waiting</button>
                                            @endif
                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
@endsection