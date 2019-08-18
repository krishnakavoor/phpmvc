<script>

    var teacherController = {
        addTeacherValidation: function () {
            var teacher_name = ($('#teacher_name').val());
            $.ajax({
                url: "<?php echo COMPLETE_PATH ?>/teacher/add",
                method: "POST",
                data: {teacher_name: teacher_name}
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
                <h1>Teacher List</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Teacher</button>
            </div>
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Teacher Id</th>
                            <th>Name</th>  
                            <th>Edit/Delete</th>  
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($all as $one) {

                            echo "<tr><td>" . $one['teacher_id'] . "</td><td>" . $one['teacher_name'] . "</td><td><a href='#' onclick='alert(\"Not Yet Implimented\")'>Edit</a>/<a href='#' onclick='alert(\"Not Yet Implimented\")'>Delete</a></td></tr>";
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
                        <h4 class="modal-title">Add Teacher</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" id="add_teacher_form" method="post" onsubmit="return teacherController.addTeacherValidation()"     accept-charset="utf-8">


                            Teacher Name : <input type="text" maxlength="50" name="teacher_name" id="teacher_name" value="" required="required"/>

                            <input type="submit" value="submit"/>
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

