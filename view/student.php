<script>

    var studentController = {
        addStudnetValidation: function () {
            var student_name = ($('#student_name').val());
            var parent_id = ($('#parent_id').val());
            $.ajax({
                url: "<?php echo COMPLETE_PATH ?>/student/add",
                method: "POST",
                data: {student_name: student_name, parent_id: parent_id}
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
                <h1>Student List</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Student</button>
            </div>
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Student Id</th>
                            <th>Name</th> 
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($all as $one) {

                            echo "<tr><td>" . $one['student_id'] . "</td><td>" . $one['student_name'] . "</td><td><a href='#' onclick='alert(\"Not Yet Implimented\")'>Edit</a>/<a href='#' onclick='alert(\"Not Yet Implimented\")'>Delete</a></td></tr>";
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
                        <h4 class="modal-title">Add Student</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" id="add_student_form" method="post" onsubmit="return studentController.addStudnetValidation()"     accept-charset="utf-8">
                            <table class="table">

                                <tr>  <td> Student Name :</td><td> <input type="text" maxlength="50"  name="student_name" id="student_name" value="" required="required"/></td></tr>
                                <tr>  <td>    Select Parent: </td><td><select name="parent_id"  id="parent_id">
                                            <?php
                                            foreach ($allParent as $one) {

                                                echo "<option value=" . $one['parent_id'] . ">" . $one['parent_name'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </td></tr>
                                <tr>  <td> </td><td>   <input type="submit" value="submit"/> </td></tr>
                            </table>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

