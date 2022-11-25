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
                    <a href="/schedule/create"><button class="btn btn-primary">New Schedule</button></a>
                </div>
                <div class="card-body">
                    <form action="/dashboard/schedule" method="POST">
                        @method('post')
                        @csrf
                        <div class="mb-3">
                            <label for="says">Days</label>
                            <select class="form-control" id="says" name="jadwal_id">
                                <option value="">--/--</option>
                                @foreach ($days as $day)
                                    <option value="{{ $day->id }}">{{ $day->hari }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="bus">Bus</label>
                            <select class="form-control" id="bus" name="bus_id">
                                <option value="">--/--</option>
                                @foreach ($buses as $bus)
                                <option value="{{ $bus->id }}">{{ $bus->unit_name }}</option>    
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="keberangkatan">Departure</label>
                            <select class="form-control" id="keberangkatan" name="keberangkatan_id">
                                <option value="">--/--</option>
                                @foreach ($routes as $route)
                                    <option value="{{ $route->id }}">{{ $route->location }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="jam_keberangkatan_id">Departure Time</label>
                            <select class="form-control" id="jam_keberangkatan_id" name="jam_keberangkatan_id">
                                <option value="">--/--</option>
                               @foreach ($times as $time)
                                   <option value="{{ $time->id }}">{{ $time->jam }}</option>
                               @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="kedatangan">Arrival</label>
                            <select class="form-control" id="kedatangan" name="kedatangan_id">
                                <option value="">--/--</option>
                                @foreach ($routes as $route)
                                    <option value="{{ $route->id }}">{{ $route->location }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="jam_kedatangan_id">Arriva Time</label>
                            <select class="form-control" id="jam_kedatangan_id" name="jam_kedatangan_id">
                                <option value="">--/--</option>
                               @foreach ($times as $time)
                                   <option value="{{ $time->id }}">{{ $time->jam }}</option>
                               @endforeach
                            </select>
                        </div>
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

@endsection