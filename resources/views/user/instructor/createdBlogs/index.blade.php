            @include('user.layouts.temporary_header')

                    <!-- Content Wrapper. Contains page content -->
                    <div class="content-wrapper">
                        


            <!--breadcrumb-->
            <div class="border-bottom border-light d-none d-sm-block">
                <div class="px-3 px-lg-5">
                    <nav class="breadcrumb bg-white mb-0">
                        <a href="{{ url('/InsBlogs/create') }}" class="btn btn-info float-right">Create New Blog</a>
                    </nav>
                </div>
            </div>

            <div class="card-body">
                <div>
                    <h4>Blog Written By You</h4>
                </div>
                <table class="table" id="myTable1">
                    <thead>
                        <tr>
                            <td>Author_Name</td>
                            <td>Blog_Title</td>
                            <td>Status</td>
                            <td>Details</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    
                    <tbody>
            
                    </tbody>
                </table>

            <div class="card-body">
                    
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                {{-- Footer --}}
            </div>
            <!-- /.card-footer-->
            </div>
            <!-- /.card -->
            
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
            <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
            <script>
                $(document).ready(function () {
                    $('#myTable1').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax: '/Insblogs/list',
                        columns: [                
                            {
                                data: 'Author_Name'
                            },
                            {
                                data: 'title'
                            },
                            {
                                data: 'status_name',
                                name: 'status'
                            },
                            {data: 'details', orderable: false, searchable: false},
                            {data: 'action', orderable: false, searchable: false}
                            
                                        
                        ]
                    });
                });

            </script>