<script>

    var studentController = {
        addStudnetValidation: function () {
            var student_name = ($('#student_name').val());
            $.ajax({
                url: "<?php echo COMPLETE_PATH ?>/student/add",
                method: "POST",
                data: {student_name: student_name, parent_id: 1}
            }).done(function () {
                alert("Record Added Successfully");
            });
        }

    }
</script>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Parent List</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Parent</button>
            </div>
            <div class="col-md-12">
                
          
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Parent Id</th>
                            <th>Parent Name</th> 
                            <th>Parent Phone</th> 
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($all as $one) {

                            echo "<tr><td>" . $one['parent_id'] . "</td><td>" . $one['parent_name'] . "</td><td>" . $one['parent_phone'] . "</td><td><a href='#' onclick='alert(\"Not Yet Implimented\")'>Edit</a>/<a href='#' onclick='alert(\"Not Yet Implimented\")'>Delete</a></td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Parent</h4>
                    </div>
                    <div class="modal-body">
                       Not yet Implimented
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

