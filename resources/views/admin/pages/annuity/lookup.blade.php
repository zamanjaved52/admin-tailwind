@extends('admin.layout.app')
@section('content')

    <style>
        .vertical-header-column {
            font-weight: bold;
            color: #000000;
            width: 25%;
        }
    </style>

    <table id="" class="display example">
        <thead>
        <tr>
            <th data-column="Username" class="vertical-header-column"></th>
            <th data-column="Balakumar"></th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <th data-column="Username" class="vertical-header-column">PERNO</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">TITLE</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">FIRST_NAME</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">MIDDLE_NAME</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">SURNAME</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">SUFFIX</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">INITIALS</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">DOB</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">CURRENT_AGE</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">SEX</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">SMOKER</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">RISK_RATING</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">PERSON_STATUS dropdown</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">NATIONALITY dropdown</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">PEP_STATUS</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">MAIDEN_NAME</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">PREFERRED_PAYMENT_MODE dropdown</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">MEASUREMENT dropdown</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">SUB_STANDARD</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">AGE_ADMITTED</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">DEATH_ADMITTED</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">DOD_NOTIFIED</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">DEATH_DATE</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">BIRTH_NATIONALITY dropdown</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">RESIDENCY dropdown</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">MARITAL_STATUS dropdown </th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">MOTHERS_NAME</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">FATHERS_NAME</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">SALUTATION</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">KNOWN_AS</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">CURRENT_ADDRESS drop</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">YRS_AT_ADDRESS</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">PREVIOUS_ADDRESS drop</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">CONTACT_DETAILS drop</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">PREFERRED_CONTACT_MODE drop</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">SEND_SMS</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">IDENTIFICATION drop</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">CURRENT_OCCUPATION drop</th>
            <td data-column="Balakumar">3</td>
        </tr>
        <tr>
            <th data-column="Username" class="vertical-header-column">PREVIOUS_OCCUPATION</th>
            <td data-column="Balakumar">3</td>
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


