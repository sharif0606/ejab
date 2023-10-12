<!DOCTYPE html>
<html>
<head>
    <title>Title of the document</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th>#SL</th>
                <th>Zone</th>
                <th>Division</th>
                <th>District</th>
                <th>Upazilla/Thana</th>
                <th>Union/Pourashava/Ward</th>
                <th>Dealer Name</th>
                <th>Dealer Contact</th>
                <th>Dealer Address</th>
                <th>AI Technician Name</th>
                <th>ID/Reg. No</th>
                <th>AI Technician Contact</th>
                <th>Training Institute</th>
                <th>Batch No</th>
            </tr>
        </thead>
        <tbody>
            @if($aidealer)
                @foreach($aidealer as $i=>$u)
                    
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$u->zone?$u->zone->zone_en:""}}</td>
                        <td>{{$u->division?$u->division->division_en:""}}</td>
                        <td>{{$u->district?$u->district->district_en:""}}</td>
                        <td>{{$u->upazilla?$u->upazilla->upazilla_en:""}}</td>
                        <td>{{$u->union?$u->union->union_en:""}}</td>
                        <td>{{$u->name}}</td>
                        <td>{{$u->contact_number}}</td>
                        <td>{{$u->address}}</td>
                        <td>{{$u->ai_technician_name}}</td>
                        <td>{{$u->ai_technician_id}}</td>
                        <td>{{$u->ai_technician_contact}}</td>
                        <td>{{$u->training_institute}}</td>
                        <td>{{$u->ejab_batch_no}}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</body>

</html>
