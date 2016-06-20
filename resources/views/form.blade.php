<!DOCTYPE html>
<html>
<head>
    <title>Trial Balance Entry Form</title>

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.4.1/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.4.1/jsgrid-theme.min.css" />

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.4.1/jsgrid.min.js"></script>
    <link type="text/css" rel="stylesheet" href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" />
    <link type="text/css" rel="stylesheet" href="http://nwica.technotarek.com/inc/magic-suggest/magicsuggest-1.2.4-min.css" />
<style>
    .ms-sel-ctn {
        clear:left;
        float:left;
    }
    .ms-sel-ctn .ms-sel-item {
        background:none;
        margin:0;
        padding:0;
        position: relative;
    }
    .ms-sel-ctn .ms-sel-item:hover {
        background:none;
    }
    .ms-sel-ctn .ms-sel-item .ms-close-btn {
        position:absolute;
        top:30px;
        right:0;
    }


</style>

</head>
<body>
<p style="color:grey; font-size: 130%;">Trial Balance B/F</p>
<div id="jsGrid"></div>
<script>
    var clients = [
        { "Year": 2016, "COA": 1012, "Description": "Buildings", "Debit / Credit": 1, "Amount": 800 },
        { "Year": 2016, "COA": 1015, "Description": "Buildings", "Debit / Credit": 2, "Amount": 4500 } ];
    var entryType = [ { COA: "", Id: 0 },
        { COA: "Debit", Id: 1 },
        { COA: "Credit", Id: 2 } ];
    $("#jsGrid").jsGrid(
            {  width: "100%",
                height: "400px",
                filtering: true,
                inserting: true,
                editing: true,
                sorting: true,
                paging: true,
                deleteConfirm: "Do you really want to delete these row info?",
                data: clients,
                fields:
                [
                    { name: "Year",title:"Year" ,type: "text", width: 40, validate: "required" },
                    {insertcss:"magicsuggest",name:"COA", title: "COA", type: "text", width: 50 },
                    { name: "Description",title:"Description", type: "text", width: 200, readOnly: true },
                    { name: "Debit/CreditC",title:"Debit/Credit", type: "select", items: entryType, valueField: "Id", textField: "COA", readOnly: true },
                    { name: "Amount", title:"Amount",type: "text", width: 40 },
                    { type: "control" }
                ]
            }


    );




</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
<script src="http://nwica.technotarek.com/inc/magic-suggest/magicsuggest-1.2.4-min.js"></script>
</body>
</html>