<main class="page-content" id="dashboard">
    <div class="container">
        <div class="row" id="bank-account-balances">
            <?php foreach($allAccounts as $account): ?>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <a href="<?php echo site_url("transactions/dbs"); ?>">
                    <div class="card">
                        <div class="card-body text-center">
                            <h2><?php echo $account["name"]; ?></h2>
                            <h3>₹ <?php echo $account["balance"]; ?></h3>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="row" id="transactions-parties" style="margin-top: 5%;">
            <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                <a href="<?php echo site_url("transactions-mgt"); ?>">
                    <div class="card">
                        <div class="card-body">
                            <h2>Transactions</h2>
                        </div>
                    </div>
                </a>
                <a href="<?php echo site_url("add-new-transaction"); ?>">Add New Transaction</a>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                <a href="<?php echo site_url("contacts-mgt"); ?>">
                    <div class="card">
                        <div class="card-body">
                            <h2>Clients / Suppliers</h2>
                        </div>
                    </div>
                </a>
                <a href="<?php echo site_url("add-new-client-supplier"); ?>">Add New Supplier</a>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                <a href="<?php echo site_url("leads-mgt"); ?>">
                    <div class="card">
                        <div class="card-body">
                            <h2>Leads</h2>
                        </div>
                    </div>
                </a>
                <a href="<?php echo site_url("add-new-lead"); ?>">Add New Lead</a>
            </div>
        </div>
    </div>
</main>