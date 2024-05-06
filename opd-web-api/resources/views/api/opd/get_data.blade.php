@extends('api.main')

@section('service-container')
    <!-- ======= Services Section ======= -->
    <section id="services" class="services mt-3">

        <header class="section-header">
            <h2>Selamat Datang di</h2>
            <p>Portal Akses Data {{ $daftar_opd }}</p>
        </header>
        <div class="container" data-aos="fade-up">
            <div class="row gy-4">

                <div class="form-group col-md-12">
                    <label for="listOfData">Pilih Data</label>
                    <select class="form-select form-control" id="listOfData" name="listOfData"></select>
                </div>

                <div class="form-group col-md-12">
                    <label for="copyDataAPI">API Data</label>
                    <textarea class="form-control" id="copyDataAPI" name="copyDataAPI" rows="12" placeholder="Get Data" required></textarea>
                </div>
            </div>
            <button id="btn-salin-data" class="btn-primary mt-2">Salin Data</button>
        </div>

    </section><!-- End Services Section -->
    @push('returnDataListOPD')
        <script>
            $('#listOfData').select2({
                theme: 'bootstrap-5',
                placeholder: 'Pilih Data yang Ingin Digunakan',
                ajax: {
                    url: "pilihDataAPI/{{ $slug_opd }}",
                    processResults: function({
                        data
                    }) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                    id: item.slug_data,
                                    text: item.daftar_data
                                }
                            })
                        }
                    }
                }
            });

            $('#listOfData').on('change', function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '/api/data_{{ $slug_opd }}',
                    type: "GET",
                    success: function(response) {
                        $('#copyDataAPI').val(JSON.stringify(response, null, 3))
                    }
                });
            });

            // API Box Data
            let APIDataBox = document.getElementById("copyDataAPI");
            let APIDataButton = document.getElementById("btn-salin-data");
            APIDataButton.onclick = function() {
                APIDataBox.select();
                document.execCommand("copy");
                APIDataBox.innerText = "Codes Copied";
            };
        </script>
    @endpush
@endsection
