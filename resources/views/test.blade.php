<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <table border="1">
        <tr>
            <th>How / when to apply</th>
            <th colspan="3">Type</th>
            <th colspan="3">Amount of fertilizer required</th>
        </tr>

        @php
            $database = app('firebase.database');
            $data = $database->getReference('for_wetzone_table')->orderByKey()->getSnapshot()->getValue();
            echo "<pre>";
            print_r($data);
            echo "</pre>";
        @endphp

        @php $i = 0 @endphp
        @foreach ($data as $arr)
            @if ($i == 2)
                <th></th>
                <th colspan="3">Type and amount per gram of tree</th>
                <th colspan="3">Nutrition per gram plant</th>
            @endif
           <tr>
                <td>{{ $arr["1How When to apply"] }}</td>

                @if (!is_array($arr["2Type"])) 
                    <td colspan="3">
                        {{ $arr["2Type"] }}
                    </td>
                @endif

                @if (is_array($arr["2Type"])) 
                    <td> {{ $arr["2Type"]["Urea"] }} </td>
                    <td> {{ $arr["2Type"]["ERP"] }} </td>
                    <td> {{ $arr["2Type"]["MOP"] }} </td>
                @endif

                @if (!is_array($arr["3Amount of fertilizer required"])) 
                    <td colspan="3">
                        {{ $arr["3Amount of fertilizer required"] }}
                    </td>
                @endif

                @if (is_array($arr["3Amount of fertilizer required"])) 
                    <td> {{ $arr["3Amount of fertilizer required"]["N"] }} </td>
                    <td> {{ $arr["3Amount of fertilizer required"]["P2O5"] }} </td>
                    <td> {{ $arr["3Amount of fertilizer required"]["K2O"] }} </td>
                @endif
           </tr>
           @php $i++ @endphp
        @endforeach
    
    </table>
</body>
</html>