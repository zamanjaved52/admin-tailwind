@extends('admin.layout.app')
@section('content')

    <style>
        .vertical-header-column {
            font-weight: bold;
            color: #000000;
        }
    </style>

    <table id="vdatatable" class="display example">
        <thead>
        <tr>
            <th data-column="Username" class="vertical-header-column"></th>
            <th data-column="Balakumar"></th>
            <th data-column="Balakumar"></th>
            <th data-column="Balakumar"></th>
            <th data-column="Balakumar"></th>
            <th data-column="Balakumar"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th data-column="Username" class="vertical-header-column">Col1</th>
            <td data-column="Balakumar">3</td>
            <td data-column="Balakumar">3</td>
            <td data-column="Balakumar">3</td>
            <td data-column="Balakumar">3</td>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">Col2</th>
            <td data-column="Balakumar">2</td>
            <td data-column="Balakumar">2</td>
            <td data-column="Balakumar">2</td>
            <td data-column="Balakumar">2</td>
            <td data-column="Balakumar">2</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">Col3</th>
            <td data-column="Balakumar">5</td>
            <td data-column="Balakumar">5</td>
            <td data-column="Balakumar">5</td>
            <td data-column="Balakumar">5</td>
            <td data-column="Balakumar">5</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">Col4</th>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">Col4</th>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">Col4</th>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
        </tr><tr>
            <th data-column="Username" class="vertical-header-column">Col4</th>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
        </tr><tr>
            <th data-column="Username" class="vertical-header-column">Col4</th>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">Col4</th>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
        </tr><tr>
            <th data-column="Username" class="vertical-header-column">Col4</th>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
        </tr><tr>
            <th data-column="Username" class="vertical-header-column">Col4</th>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
            <td data-column="Balakumar">85</td>
        </tr>




        </tbody>
    </table>

    <script>

        this.dTable = $('#vdatatable').DataTable({
            dom:            'ftip',
            stateSave:      saveState,
            retrieve:       true,
            autoWidth:      true,
            info:           true,
            paging:         true,
            scrollY:        true,
            scrollX:        true,
            scrollCollapse: true,
            fixedHeader:    true,
            fixedColumns:   {
                leftColumns: 1
            },
        });
    </script>
@endsection


