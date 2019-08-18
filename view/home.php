<script>
    var detetionController = {
        addDetentionValidation: function () {
            var teacher_id = $('#teacher_id').val();
            var student_id = $('#student_id').val();
            var date = $('#date').val();
            var detention_type_id = $('#detention_type_id').val();
            var total_time = $('#total_time').val();
            var offence_id = $('#offence_id').val();
            var offence_type_id = $('#offence_type_id').val();
            $.ajax({
                url: "<?php echo COMPLETE_PATH ?>/detention/add",
                method: "POST",
                data: {teacher_id: teacher_id, student_id: student_id, date: date, detention_type_id: detention_type_id, total_time: total_time, offence_id: offence_id, offence_type_id: offence_type_id}
            }).done(function () {
                alert("Record Added Successfully");
            });
        },
        detetionTimeCalulator: function () {

            var value1 = $('#offence_id').find(':selected').attr('data-value');
            var value2 = $('#offence_type_id').find(':selected').attr('data-value');


            var value = value1 * value2;
            $('#total_time').val(value);

        }
    }
</script> 
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>List of Detentions</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Detention</button>
            </div>
            <div class="col-md-12">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Detention ID</th>
                            <th>Student Name</th>
                            <th>Description</th>
                            <th>Total Time</th>
                            <th>Edit/Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($allDetention as $one) {

                            echo "<tr><td>" . $one['detentions_id'] . "</td><td>" . $one['student_name'] . "</td><td>Teacher Name:" . $one['teacher_name'] . ",<br/>Date:" . date("d-m-Y", $one['date']) . ",<br/>Offense Name:" . $one['offense_name'] . ",<br/>Offence Type:" . $one['offence_type_name'] . ",<br/>Detention Type:" . $one['detention_type_name'] . ",<br/>Parent Name:" . $one['parent_name'] . ",<br/>Parent Phone:" . $one['parent_phone'] . "</td><td>" . $one['total_time'] / 60 . "</td><td><a href='#' onclick='alert(\"Not Yet Implimented\")'>Edit</a>/<a href='#' onclick='alert(\"Not Yet Implimented\")'>Delete</a></td></tr>";
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
                        <h4 class="modal-title">Add Detention</h4>
                    </div>
                    <div class="modal-body">

                        <form action="" id="add_student_form" method="post" onsubmit="return detetionController.addDetentionValidation()"     accept-charset="utf-8">


                            <table class="table">
                                <tr>
                                    <td>Select Student</td>
                                    <td>
                                        <select name="student_id" id="student_id" onchange="detetionController.detetionTimeCalulator()">
                                            <?php
                                            foreach ($allStudent as $one) {

                                                echo "<option value=" . $one['student_id'] . ">" . $one['student_name'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr><td>Select Teacher</td><td>
                                        <select name="teacher_id" id="teacher_id"onchange="detetionController.detetionTimeCalulator()" >

                                            <?php
                                            foreach ($allTeacher as $one) {

                                                echo "<option value=" . $one['teacher_id'] . ">" . $one['teacher_name'] . "</option>";
                                            }
                                            ?>

                                        </select>
                                    </td></tr>
                                <tr><td>Date</td><td>
                                        <input type="date" name="date" id="date" value="" required="required"/>
                                    </td></tr>
                                <tr><td>Detention Type</td><td>
                                        <select name="detention_type_id" id="detention_type_id" onchange="detetionController.detetionTimeCalulator()">
                                            <?php
                                            foreach ($allDetentionType as $one) {
                                                echo "<option value=" . $one['detention_type_id'] . ">" . $one['detention_type_name'] . "</option>";
                                            }
                                            ?>  
                                        </select>

                                    </td></tr>

                                <tr><td>offense ID</td><td>
                                        <select name="offence_id" id="offence_id" onchange="detetionController.detetionTimeCalulator()" >
                                            <?php
                                            foreach ($allOffence as $one) {

                                                echo "<option value=" . $one['offense_id'] . " data-value=" . $one['time'] / 60 . ">" . $one['offense_name'] . "</option>";
                                            }
                                            ?>
                                        </select>

                                    </td></tr>
                                <tr><td>offense type</td><td>


                                        <select name="offence_type_id" id="offence_type_id" onchange="detetionController.detetionTimeCalulator()" >
                                            <?php
                                            foreach ($allOffenceType as $one) {

                                                echo "<option value=" . $one['offence_type_id'] . " data-value=" . $one['offence_time_value'] . ">" . $one['offence_type_name'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </td></tr>
                                <tr><td>Total Time</td><td><input type = "text" value = "" name = "total_time" id = "total_time" required = "required"/>Hrs</td></tr>
                                <tr><td></td><td><input type = "submit" value = "submit" onclick="detetionController.detetionTimeCalulator()"/></td></tr>
                            </table>
                        </form>
                    </div>
                    <div class = "modal-footer">
                        <button type = "button" class = "btn btn-default" data-dismiss = "modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

