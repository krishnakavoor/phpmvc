



<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Offense Type List</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Offense Type</button>
            </div>
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>offense_id</th>
                            <th>offense_name</th>
                            <th>time(hr)</th>
                        </tr>
                    </thead>



                    <tbody>
                        <?php
                        foreach ($all as $one) {

                            echo "<tr><td>" . $one['offense_id'] . "</td><td>" . $one['offense_name'] . "</td><td>" . $one['time'] / 60 . "</td></tr>";
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
                        <h4 class="modal-title">Add Offense Type</h4>
                    </div>
                    <div class="modal-body">
                        <p>Yet to be Implimented</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

