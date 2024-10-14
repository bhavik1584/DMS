@extends('main')
    @section('content')
        <div class="card">
            <div class="card-header">
                header
            </div>
            <div class="card-body">
                <table id="dataTable" class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
    @section('script')
    <script>
     $(document).ready(function() {
        $("#dataTable").DataTable({});
    });

    </script>
    @endsection