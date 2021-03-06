<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo MPG_APP_NAME . ' v' . MPG_APP_VERSION; ?></title>

    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo MPG_BASE_URL; ?>/static/images/favicon-32x32.png">

    <link rel="stylesheet" href="<?php echo MPG_BASE_URL; ?>/static/css/ubuntu-font.css">
    <link rel="stylesheet" href="<?php echo MPG_BASE_URL; ?>/static/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo MPG_BASE_URL; ?>/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo MPG_BASE_URL; ?>/static/css/mpg.css">

    <script>
        var MPG_BASE_URL = '<?php echo MPG_BASE_URL; ?>';
    </script>

    <script src="<?php echo MPG_BASE_URL; ?>/static/js/mpg.js"></script>
    <script src="<?php echo MPG_BASE_URL; ?>/static/js/mpg.database.users.js"></script>

</head>

<body>

    <?php require MPG_ABS_PATH . '/views/parts/menu.tpl.php'; ?>

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-3">

                <div class="row">

                    <div class="col-md-12">

                        <?php require MPG_ABS_PATH . '/views/parts/databases.tpl.php'; ?>

                    </div>
                    
                </div>
                
            </div>
            
            <div class="col-md-9">

                <div class="row">

                    <div class="col-md-12">

                        <h2 class="d-inline-block">Users</h2> <button id="mpg-open-create-user-modal-button" class="btn btn-primary d-none" data-open="modal" data-modal-id="mpg-create-user-modal">Create</button>

                        <div id="mpg-please-select-a-db">
                            <i>Please select a database.</i>
                        </div>
                        
                        <table id="mpg-users-table" class="table table-bordered table-hover d-none">

                            <thead class="thead-dark">
                                <tr>
                                    <th>Name</th>
                                    <th>Role (Database)</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>

                            <tbody>
                            </tbody>

                        </table>

                    </div>

                </div>
                
            </div>
            
        </div>
        
    </div>

    <div id="mpg-create-user-modal" class="modal" tabindex="-1" role="dialog">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-body">
                    
                    <div class="form-group">

                        <label>Name</label>
                        <input id="mpg-user-name" type="text" class="form-control">

                    </div>
                    
                    <div class="form-group">

                        <label>Password</label>
                        <input id="mpg-user-password" type="password" class="form-control">

                    </div>

                    <div class="form-group">

                        <label>Role</label>
                        <select id="mpg-user-role" class="form-control">
                            <option value="read">read</option>
                            <option value="readWrite" selected>readWrite</option>
                            <option value="dbAdmin">dbAdmin</option>
                            <option value="dbOwner">dbOwner</option>
                            <option value="userAdmin">userAdmin</option>
                            <option value="clusterAdmin">clusterAdmin</option>
                            <option value="clusterManager">clusterManager</option>
                            <option value="clusterMonitor">clusterMonitor</option>
                            <option value="hostManager">hostManager</option>
                            <option value="backup">backup</option>
                            <option value="restore">restore</option>
                            <option value="readAnyDatabase">readAnyDatabase</option>
                            <option value="readWriteAnyDatabase">readWriteAnyDatabase</option>
                            <option value="userAdminAnyDatabase">userAdminAnyDatabase</option>
                            <option value="dbAdminAnyDatabase">dbAdminAnyDatabase</option>
                            <option value="root">root</option>
                        </select>

                    </div>

                    <div class="form-group">

                        <label>Database</label>
                        <select id="mpg-user-role-database" class="form-control">
                            <?php foreach ($databaseNames as $databaseName) : ?>
                            <option value="<?php echo $databaseName; ?>"><?php echo $databaseName; ?></option>
                            <?php endforeach; ?>
                        </select>

                    </div>

                </div>
                
                <div class="modal-footer d-block">
                    <button class="btn btn-secondary float-left" data-dismiss="modal" data-modal-id="mpg-create-user-modal">Cancel</button>
                    <button id="mpg-create-user-button" class="btn btn-primary float-right">Create user</button>
                </div>

            </div>

        </div>

    </div>

</body>

</html>