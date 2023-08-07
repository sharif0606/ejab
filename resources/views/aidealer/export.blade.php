<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
<script>
var text = "I told you so!";
</script>
</head>

<body>
    @php
        $search_array= array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০", ":", ",");
        $replace_array= array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0", ":", ","); 
    @endphp
        <table class="table">
            <thead>
                <tr>
                    <th>#SL</th>
                    <th>কৃত্রিম প্রজনন সুবিধা ভোগীর নাম</th>
                    <th>কৃত্রিম প্রজনন সুবিধা ভোগীর মোবাইল নাম্বার </th>
                    <th>বাবা/স্বামীর নাম</th>
                    <th>জোন</th>
                    <th>বিভাগ</th>
                    <th>জেলা</th>
                    <th>উপজেলা/থানা</th>
                    <th>ইউনিয়ন/পৌরসভা/ওয়ার্ড</th>
                    <th>পোষ্ট অফিস </th>
                    <th>গ্রাম/মহল্লা</th>
                    <th>বকনা বা গাভীর বয়স </th>
                    <th>জাত/রক্তের হার</th>
                    <th>গায়ের রং </th>
                    <th>ওজন (কেজি) </th>
                    <th>মোট বাচ্চা দেওয়ার সংখ্যা </th>
                    <th>সর্বশেষ বাচ্চা প্রসবের তারিখ </th>
                    <th>বকনা/গাভীর দুধ উৎপাদন ক্ষমতা/দিন(লিটার)</th>
                    <th>কৃত্রিম প্রজনন করার তারিখ </th>
                    <th>ষাড়ের নাম</th>
                    <th>ষাড়ের নাম্বার</th>
                    <th>ষাড়ের জাত </th>
                    <th>রক্তের হার</th>
                    <th>বাচ্চা প্রসবের সম্ভাব্য তারিখ</th>
                    <th>গর্ভপরিক্ষার ফলাফল (+/-)</th>
                    <th>বাচ্চা প্রসবের প্রকৃত তারিখ  </th>
                    <th>সদ্যজাত বাছুরের লিঙ্গ</th>
                    <th>বাছুরের রং</th>
                    <th>বাছুরের ওজন (কেজি)</th>
                    <th>এআই টেকনিশিয়ানের নাম</th>
                    <th>আইডি/রেজিঃ নং </th>
                    <th>মোবাইল নাম্বার </th>
                    <th>মন্তব্য</th>
                    <th>মন্তব্য</th>
                </tr>
            </thead>
            <tbody>
                @if($cattle)
                    @foreach($cattle as $i=>$u)
                        
                        <tr>
                            <td>{{$u->serial_no}}</td>
                            <td>{{$u->beneficiary_name}}</td>
                            <td>{{$u->beneficiary_contact}}</td>
                            <td>{{$u->f_or_h_name}}</td>
                            <td>{{$u->zone?$u->zone->zone:"নেই"}}</td>
                            <td>{{$u->division?$u->division->division:"নেই"}},</td>
                            <td>{{$u->district?$u->district->district:"নেই"}}</td>
                            <td>{{$u->upazilla}}</td>
                            <td>{{$u->disease_description}}</td>
                            <td>{{$u->thana}}</td>
                            <td>{{$u->postoffice}}</td>
                            <td>{{$u->village}}</td>
                            <td>{{$u->cow_age}}</td>
                            <td>{{$u->cow_breed}}</td>
                            <td>{{$u->cow_color}}</td>
                            <td>{{$u->cow_weight}}</td>
                            <td>{{$u->cow_number_of_baby}}</td>
                            <td>{{ $u->cow_last_delivery?$u->cow_last_delivery!="0000-00-00"?str_replace( $replace_array,$search_array, date('d/m/Y',strtotime($u->cow_last_delivery))):"":""}}</td>
                            <td>{{$u->cow_milking_qty}}</td>
                            <td>
                                {{ $u->cow_pregnant_date?$u->cow_pregnant_date!="0000-00-00"?str_replace( $replace_array,$search_array, date('d/m/Y',strtotime($u->cow_pregnant_date))):"":""}}
                            </td>
                            <td>{{$u->bull_name}}</td>
                            <td>{{$u->bull_number}}</td>
                            <td>{{$u->breed?$u->breed->breed:"নেই"}}</td>
                            <td>{{$u->blood_rate?$u->blood_rate->blood_rate:"নেই"}}</td>
                            <td>{{ $u->delivery_date_aprox?$u->delivery_date_aprox!="0000-00-00"?str_replace( $replace_array,$search_array, date('d/m/Y',strtotime($u->delivery_date_aprox))):"":""}}</td>
                            <td>{{$u->pregnancy_exam_result?"(+)হ্যাঁ":"(-)না"}}</td>
                            <td>{{ $u->delivery_date?$u->delivery_date!="0000-00-00"?str_replace( $replace_array,$search_array, date('d/m/Y',strtotime($u->delivery_date))):"":""}}</td>
                            <td>{{$u->calf_gender?"ষাঁড়":"বকনা"}}</td>
                            <td>{{$u->color?$u->color->color:"নেই"}}</td>
                            <td>{{$u->calf_weight}}</td>
                            <td>{{$u->ai_technician_name}}</td>
                            <td>{{$u->ai_technician_id}}</td>
                            <td>{{$u->ai_technician_contact}}</td>
                            <td>{{$u->remarks}}</td>
                            <td>{{$u->remarks_final}}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

</body>

</html>
