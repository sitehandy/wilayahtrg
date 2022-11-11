@extends('layouts.induk')

@section('js_custom')
<!-- Page level plugins -->
<script src="{{ asset('themes/sbadmin') }}/vendor/chart.js/Chart.min.js"></script>

<script>

    var ctx = document.getElementById('myBarChart');
    var summarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($labels) !!},
            datasets: [{
                label: '# of Zone',
                data: {!! json_encode($items) !!},
                backgroundColor: {!! json_encode($backgroundColors) !!},
                borderColor: {!! json_encode($borderColors) !!},
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

</script>
@endsection

@section('page-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

<div class="card">
    <div class="card-body">

        <form action="{{ route('dashboard') }}" method="GET">
            <div class="form-group">
                <select name="jenis_item" class="form-control">
                    @foreach($selectItem as $item)
                    <option value="{{ $item->jenis_item }}">{{ $item->jenis_item }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Papar Rekod</button>
        </form>

        <canvas id="myBarChart" width="400" height="200"></canvas>

    </div>
</div>

@endsection

