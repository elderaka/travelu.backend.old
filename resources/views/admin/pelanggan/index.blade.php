@extends('layout.main-layout')
@section('title','Pelanggan')
@section('content')

    <!-- Dashboard Analytics Start -->
    <section id="dashboard-analytics">
        <div>
            <!-- Greetings Card starts -->
            Pelanggan sdfsdfsd
            <!-- Greetings Card ends -->

        </div>

    </section>
    <!-- Dashboard Analytics end -->

@push('js')
{{-- <script>
    const data = {
        labels: @json($data->map(fn ($data) => $data->month)),
        datasets: [
            {
                label: 'Diterima',
                backgroundColor: 'rgb(75, 192, 75)',
                borderColor: 'rgb(75, 192, 192)',
                data: @json($data->map(fn ($data) => $data->accepted_count)),
            },
            {
                label: 'Ditolak',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: @json($data->map(fn ($data) => $data->rejected_count)),
            },
            {
                label: 'Menunggu',
                backgroundColor: 'rgb(255, 206, 86)',
                borderColor: 'rgb(255, 206, 86)',
                data: @json($data->map(fn ($data) => $data->pending_count)),
            }
        ]
    };
    const config = {
        type: 'bar',
        data: data
    };
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script> --}}
@endpush
@endsection
