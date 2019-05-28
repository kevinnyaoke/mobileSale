@extends('layouts.usernavbar')
@section('content')
    <div class="container">
        <div id="tab">
            <div class="container">
                <h>Immo
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <img src="../images/logo.jpg">
                    &nbsp;&nbsp;&nbsp;
                    Electronic
                </h></div>
            <hr>
            <table width="100%" class="table table-striped table-bordered table-hover" >
                <thead>
                <tr>
                    {{--<th class="text-center">Customer name</th>--}}
                    {{--<th class="text-center">Item bought</td>--}}
                    {{--<th class="text-center">Serial no.</td>--}}
                    {{--<th class="text-center">Quantity</td>--}}
                    {{--<th class="text-center">Cash</td>--}}
                    {{--<th class="text-center">Amount deducted</td>--}}
                    {{--<th class="text-center">Balance</td>--}}
                    {{--<th class="text-center">Served by</td>--}}
                    {{--<th class="text-center">Date & time</td>--}}
                    <th class="text-center">#</th>
                    <th class="text-center">#</th>

                </tr>
                </thead>
                <tbody>
                <tr >
                    <td>Customer name</td>
                    <td>{{$customer->name}}</td>
                </tr>
                <tr>
                    <td>Item bought</td>
                    <td>{{$customer->item}}</td>
                </tr>

                <tr>
                    <td>Serial no.</td>
                    <td>{{$customer->serial}}</td>
                </tr>
                <tr>
                    <td>Quantity</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Cash</td>
                    <td>{{$customer->cash}}</td>
                </tr>
                <tr>
                    <td>Amount deducted</td>
                    <td>Ksh:{{$customer->amount}}</td>
                </tr>
                <tr>
                    <td>Balance</td>
                    <td>Ksh:{{$customer->change}}</td>
                </tr>
                <tr>
                    <td>Served by</td>
                    <td>{{$customer->seller}}</td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td>{{$customer->created_at}}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <button type="button" class="btn btn-deafult btn-sm"
                id="btPrint" onclick="createPDF()" />
        <i class="fa fa-print  fa-fw"></i> Print
        </button>
    </div>
@endsection
<script>
    function createPDF() {
        var sTable = document.getElementById('tab').innerHTML;

        var style = "<style>";
        style = style + "table {width: 100%;font: 17px Calibri;}";
        style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
        style = style + "padding: 2px 3px;text-align: left;}";
        style = style + "</style>";

        // CREATE A WINDOW OBJECT.
        var win = window.open('', '', 'height=700,width=700');

        win.document.write('<html><head>');
        win.document.write('<title> {{$customer->name}}</title>');   // <title> FOR PDF HEADER.
        win.document.write(style);          // ADD STYLE INSIDE THE HEAD TAG.
        win.document.write('</head>');
        win.document.write('<body>');
        win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
        win.document.write('</body></html>');

        win.document.close(); 	// CLOSE THE CURRENT WINDOW.

        win.print();    // PRINT THE CONTENTS.
    }
</script>
