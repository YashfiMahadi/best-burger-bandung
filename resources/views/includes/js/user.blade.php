<script>
    $(function() {
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        });

        $('#table').DataTable({
            processing : true,
            serverSide : true,
            ajax : {
                url : "/user",
                type : "GET"
            },
            columns : [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', searchable: false},
                {data : 'name', name : 'name'},
                {data : 'email', name : 'email'},
                {data : 'action', name : 'action', orderable: false, searchable: false},
            ]
        });

        $('#create').click(function(e){
            e.preventDefault();
            $('#createForm').trigger('reset');
            $('#tambah').modal('show');
        });

        $('#store').click(function (e) { 
            e.preventDefault();

            var data = new FormData($("#createForm")[0]);

            $.ajax({
                type: "POST",
                url: "/user/store",
                data: data,
                dataType: "JSON",
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.status) {
                        $('#createForm').trigger('reset');
                        $('#tambah').modal('hide');
                        $('#table').DataTable().ajax.reload();
                        Swal.fire(
                                'Success!',
                                response.msg,
                                'success'
                            );
                    } else if (response.status == 200){
                        $('#createForm').trigger('reset');
                        $('#tambah').modal('hide');
                        $('#table').DataTable().ajax.reload();
                        Swal.fire(
                                'Success!',
                                response.msg,
                                'success'
                            );
                    } else{
                        Swal.fire(
                                'Error!',
                                response.msg,
                                'error'
                            );
                    }
                }
            });
            
        });

        $('#update').click(function (e){
            e.preventDefault();

            var data = new FormData($("#editForm")[0]);

            var id = $('#id').val();

            $.ajax({
                type: "POST",
                url: `/user/${id}/update`,
                data: data,
                dataType: "JSON",
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.status) {
                        $('#editForm').trigger('reset');
                        $('#edit').modal('hide');
                        $('#table').DataTable().ajax.reload();
                        Swal.fire(
                                'Success!',
                                response.msg,
                                'success'
                            )
                    }else{
                        Swal.fire(
                                'Error!',
                                response.msg,
                                'error'
                            )
                    }
                }
            });
        });
    });

    const deleteData = (id) => {
        Swal.fire({
            title: 'Apa anda yakin untuk menghapus obat ini?',
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then((result)=>{
            if(result.value){
                $.ajax({
                type: "POST",
                url: `/user/${id}/delete`,
                data: {'id' : id},
                dataType: "JSON",
                    success: function (response) {
                        if (response.status) {
                            Swal.fire(
                                'Success!',
                                response.msg,
                                'success'
                            )
                            $('#table').DataTable().ajax.reload();
                        }
                    }
                });
            }
        });   
    }

    const edit = (id) => {
        $.ajax({
            type: "GET",
            url: `/user/${id}/edit`,
            dataType: "JSON",
            success: function (response) {
                $('#editForm').trigger('reset');

                $('#id').val(id);
                $('#name').val(response.user.name);
                $('#email').val(response.user.email);

                $('#edit').modal('show');
            }
        });
    }
</script>