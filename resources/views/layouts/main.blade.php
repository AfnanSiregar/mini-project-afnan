<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard</title>
    <link href="{{ asset('SBAdmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('SBAdmin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('SBAdmin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="{{route('project.index')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tables:</h6>
                        <a class="collapse-item" href="{{ route('project.index') }}">Project</a>
                        <a class="collapse-item" href="{{ route('klien.index') }}">Client</a>
                    </div>

                </div>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="container-fluid py-2">

                    @yield('table')

                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('SBAdmin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('SBAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('SBAdmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('SBAdmin/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('SBAdmin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('SBAdmin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('SBAdmin/js/demo/datatables-demo.js') }}"></script>
    <script type="text/javascript">
        $(function(e) {
            $("#chkCheckAll").click(function() {
                $(".checkBoxClass").prop('checked', $(this).prop('checked'));
            });

            $("#deleteAllSelectedRecord").click(function(e) {
                var confirmed = confirm('Apakah anda yakin menghapus data?');
                e.preventDefault();
                var allids = [];


                $("input:checkbox[name=ids]:checked").each(function() {
                    allids.push($(this).val());
                });

                if (confirmed) {
                    $.ajax({
                        url: "{{route('project.deleteSelected')}}",
                        type: "DELETE",
                        data: {
                            _token: $("input[name=_token]").val(),
                            ids: allids
                        },
                        success: function(response) {
                            $.each(allids, function(key, val) {
                                $("#sid" + val).remove();
                            })
                        }
                    });
                    location.reload();
                }
            })
        });
        $('table').dataTable({
            searching: false,
            pageLength: 5,
            lengthMenu: [5, 10, 20, 30, 40, 50]
        });
    </script>

</body>

</html>