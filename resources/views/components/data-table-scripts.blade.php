<div>
    <!-- Css -->
    <link rel="stylesheet" href="{{asset("tae")}}/vendors/dataTable/dataTables.min.css" type="text/css">

    <!-- Javascript -->
    <script src="{{asset("tae")}}/vendors/dataTable/jquery.dataTables.min.js"></script>

    <!-- Bootstrap 4 and responsive compatibility -->
    <script src="{{asset("tae")}}/vendors/dataTable/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset("tae")}}/vendors/dataTable/dataTables.responsive.min.js"></script>
    <script>
        $(window).on("load",function (){
            let tableSelector = "{{$tableSelector}}"
            $("."+tableSelector).each(function(index,element){
                console.log(element)
                $(element).DataTable();
            })
        })

    </script>
</div>
