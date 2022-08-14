<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>All Fertilizer Details</h1>
    <h2>For Wet Zone</h2>
    <table border="1">
        <tr>
            <th>How / when to apply</th>
            <th colspan="3">Type</th>
            <th colspan="3">Amount of fertilizer required</th>
        </tr>
        @php
            $database = app('firebase.database');
            $data = $database->getReference('for_wetzone_table')->orderByKey()->getSnapshot()->getValue();
        @endphp
        @php $i = 0; @endphp
            
        @foreach ($data as $fertilizer_id => $arr)
            @if (($i == 2))
                <tr>
                    <td colspan="8"></td>
                </tr>
                <tr>
                    <th></th>
                    <th colspan="3">Type and amount per gram of tree</th>
                    <th colspan="3">Nutrition per gram plant</th>
                    <th></th>
                </tr>
                <tr class="text-center">
                    <th></th>
                    <th>Urea</th>
                    <th>ERP</th>
                    <th>MOP</th>
                    <th>N</th>
                    <th>P<sub>2</sub>O<sub>5</sub></th>
                    <th>K<sub>2</sub>O</th>
                </tr>
            @endif

                @if ($i == 8)
                    <tr class="text-center">
                        <th colspan="8" style="padding: 20px 0 20px 10px">For fruiting trees</th>
                    </tr>
                    
                @endif
                <tr>
                    <td>{{ $arr["1How When to apply"] }}</td>
    
                    @if (!is_array($arr["2Type"])) 
                        <td colspan="3">
                            {{ $arr["2Type"] }}
                        </td>
                    @endif
    
                    @if (is_array($arr["2Type"])) 
                        <td class="text-right"> {{ $arr["2Type"]["Urea"] }} </td>
                        <td class="text-right"> {{ $arr["2Type"]["ERP"] }} </td>
                        <td class="text-right"> {{ $arr["2Type"]["MOP"] }} </td>
                    @endif
    
                    @if (!is_array($arr["3Amount of fertilizer required"])) 
                        <td colspan="3">
                            {{ $arr["3Amount of fertilizer required"] }}
                        </td>
                    @endif
    
                    @if (is_array($arr["3Amount of fertilizer required"])) 
                        <td class="text-right"> {{ $arr["3Amount of fertilizer required"]["N"] }} </td>
                        <td class="text-right"> {{ $arr["3Amount of fertilizer required"]["P2O5"] }} </td>
                        <td class="text-right"> {{ $arr["3Amount of fertilizer required"]["K2O"] }} </td>
                    @endif

                </tr>
                
            @php $i++ @endphp
        @endforeach
    </table>

    <br><br>

    <h2>For Dry Zone</h2>
    <table border="1">
        <tr>
            <th>How / when to apply</th>
            <th colspan="3">Type</th>
            <th colspan="3">Amount of fertilizer required</th>
        </tr>
        @php
            $database = app('firebase.database');
            $data = $database->getReference('for_dryzone_table')->orderByKey()->getSnapshot()->getValue();
        @endphp
        @php $i = 0; @endphp
            
        @foreach ($data as $fertilizer_id => $arr)
            @if (($i == 2))
                <tr>
                    <td colspan="8"></td>
                </tr>
                <tr>
                    <th></th>
                    <th colspan="3">Type and amount per gram of tree</th>
                    <th colspan="3">Nutrition per gram plant</th>
                    <th></th>
                </tr>
                <tr class="text-center">
                    <th></th>
                    <th>Urea</th>
                    <th>TSP</th>
                    <th>MOP</th>
                    <th>N</th>
                    <th>P<sub>2</sub>O<sub>5</sub></th>
                    <th>K<sub>2</sub>O</th>
                </tr>
            @endif

                @if ($i == 8)
                    <tr class="text-center">
                        <th colspan="8" style="padding: 20px 0 20px 10px">For fruiting trees</th>
                    </tr>
                    
                @endif
                <tr>
                    <td>{{ $arr["1How When to apply"] }}</td>
    
                    @if (!is_array($arr["2Type"])) 
                        <td colspan="3">
                            {{ $arr["2Type"] }}
                        </td>
                    @endif
    
                    @if (is_array($arr["2Type"])) 
                        <td class="text-right"> {{ $arr["2Type"]["Urea"] }} </td>
                        <td class="text-right"> {{ $arr["2Type"]["TSP"] }} </td>
                        <td class="text-right"> {{ $arr["2Type"]["MOP"] }} </td>
                    @endif
    
                    @if (!is_array($arr["3Amount of fertilizer required"])) 
                        <td colspan="3">
                            {{ $arr["3Amount of fertilizer required"] }}
                        </td>
                    @endif
    
                    @if (is_array($arr["3Amount of fertilizer required"])) 
                        <td class="text-right"> {{ $arr["3Amount of fertilizer required"]["N"] }} </td>
                        <td class="text-right"> {{ $arr["3Amount of fertilizer required"]["P2O5"] }} </td>
                        <td class="text-right"> {{ $arr["3Amount of fertilizer required"]["K2O"] }} </td>
                    @endif

                </tr>
                
            @php $i++ @endphp
        @endforeach
    </table>
</body>
</html>