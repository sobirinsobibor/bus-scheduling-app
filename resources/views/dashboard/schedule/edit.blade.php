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
                    <form action="/dashboard/schedule/{{ $schedule[0]->id }}" method="POST">
                        @method('put')
                        @csrf
                        <input type="hidden" name="id" value="{{ $schedule[0]->id }}">
                        <div class="mb-3">
                            <label for="says">Days</label>
                            <select class="form-control" id="says" name="jadwal_id">
                                <option value="">--/--</option>
                                @foreach ($days as $day)
                                @if (old('jadwal_id', $schedule[0]->jadwal_id) == $day->id)
                                <option value="{{ $day->id }}" selected>{{ $day->hari }}</option>
                                @else
                                <option value="{{ $day->id }}">{{ $day->hari }}</option>    
                                @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="bus">Bus</label>
                            <select class="form-control" id="bus" name="bus_id">
                                <option value="">--/--</option>
                                @foreach ($buses as $bus)
                                @if (old('bus_id', $schedule[0]->bus_id) == $bus->id)
                                <option value="{{ $bus->id }}" selected>{{ $bus->unit_name }}</option>
                                @else
                                <option value="{{ $bus->id }}">{{ $bus->unit_name }}</option>    
                                @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="keberangkatan">Departure</label>
                            <select class="form-control" id="keberangkatan" name="keberangkatan_id">
                                <option value="">--/--</option>
                                @foreach ($routes as $route)
                                @if (old('keberangkatan_id', $schedule[0]->keberangkatan_id) == $route->id)
                                <option value="{{ $route->id }}" selected>{{ $route->location }}</option>
                                @else
                                <option value="{{ $route->id }}">{{ $route->location }}</option>    
                                @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="jam_keberangkatan_id">Departure Time</label>
                            <select class="form-control" id="jam_keberangkatan_id" name="jam_keberangkatan_id">
                                <option value="">--/--</option>
                                @foreach ($times as $time)
                                @if (old('jam_keberangkatan_id', $schedule[0]->jam_keberangkatan_id) == $time->id)
                                <option value="{{ $time->id }}" selected>{{ $time->jam }}</option>
                                @else
                                <option value="{{ $time->id }}">{{ $time->jam }}</option>    
                                @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="kedatangan">Arrival</label>
                            <select class="form-control" id="kedatangan" name="kedatangan_id">
                                <option value="">--/--</option>
                                @foreach ($routes as $route)
                                @if (old('kedatangan_id', $schedule[0]->kedatangan_id) == $route->id)
                                <option value="{{ $route->id }}" selected>{{ $route->location }}</option>
                                @else
                                <option value="{{ $route->id }}">{{ $route->location }}</option>    
                                @endif
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="jam_kedatangan_id">Arriva Time</label>
                            <select class="form-control" id="jam_kedatangan_id" name="jam_kedatangan_id">
                                <option value="">--/--</option>
                                @foreach ($times as $time)
                                @if (old('jam_kedatangan_id', $schedule[0]->jam_kedatangan_id) == $time->id)
                                <option value="{{ $time->id }}" selected>{{ $time->jam }}</option>
                                @else
                                <option value="{{ $time->id }}">{{ $time->jam }}</option>    
                                @endif
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