<main class="page-content" id="manage-accounts">

    <div class="container">

        <h1 class="page-title"><?php echo $title; ?></h1>
        <p class="text-success"><?php echo $success; ?></p>
        <p class="text-danger"><?php echo $error; ?></p>

        <?php if(!empty($accounts)): ?>
        
        <a href="<?php echo site_url("add-new-account"); ?>" class="btn btn-success">+ Account</a>

        <table class="table">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Account Number</td>
                    <td>IFSC</td>
                    <td>Branch</td>
                    <td>Balance</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($accounts as $account): ?>
                <tr>
                    <td><?php echo $account["name"]; ?></td>
                    <td><?php echo $account["ac_no"]; ?></td>
                    <td><?php echo $account["ifsc"]; ?></td>
                    <td><?php echo $account["branch"]; ?></td>
                    <td><?php echo $account["balance"]; ?></td>
                    <td>
                        <a href="<?php echo site_url("edit-account-details"); ?>" class="btn btn-secondary">Edit</a>
                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteAccountModal">Delete</a>
                        <div class="modal fade" id="deleteAccountModal" tabindex="-1" aria-labelledby="deleteAccountModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <h3>Deactivate Account and Manage Transactions?</h3>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                        <a href="<?php echo site_url("deactivate-account-form") ?>" class="btn btn-danger">Proceed</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php else: ?>
        <p>No Accounts Added, <a href="<?php echo site_url("add-new-account"); ?>" class="btn btn-success">+ Account</a> </p>
        <?php endif; ?>
            
    </div>

</main>