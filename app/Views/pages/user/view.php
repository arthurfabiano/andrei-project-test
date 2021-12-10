<!-- BEGIN Page Content -->
<!-- the #js-page-content id is needed for some plugins to initialize -->
<main id="js-page-content" role="main" class="page-content">
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Project Test</a></li>
        <li class="breadcrumb-item">Users</li>
        <li class="breadcrumb-item active">View</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-chart-area'></i> <?php echo $title; ?> - <span class='fw-300'><?php echo $sub_title; ?></span>
        </h1>
        <div class="subheader-block d-lg-flex align-items-center">
            <div class="d-flex mr-4">
                <div class="mr-2">
                    <span class="peity-donut" data-peity="{ &quot;fill&quot;: [&quot;#967bbd&quot;, &quot;#ccbfdf&quot;],  &quot;innerRadius&quot;: 14, &quot;radius&quot;: 20 }">7/10</span>
                </div>
                <div>
                    <label class="fs-sm mb-0 mt-2 mt-md-0">New Sessions</label>
                    <h4 class="font-weight-bold mb-0">70.60%</h4>
                </div>
            </div>
            <div class="d-flex mr-0">
                <div class="mr-2">
                    <span class="peity-donut" data-peity="{ &quot;fill&quot;: [&quot;#2196F3&quot;, &quot;#9acffa&quot;],  &quot;innerRadius&quot;: 14, &quot;radius&quot;: 20 }">3/10</span>
                </div>
                <div>
                    <label class="fs-sm mb-0 mt-2 mt-md-0">Page Views</label>
                    <h4 class="font-weight-bold mb-0">14,134</h4>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">

        <div class="col-lg-12">
            <div id="panel-4" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Usuários <span class="fw-300"><i>Cadastrados</i></span>
                    </h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                            <thead class="bg-warning-200">
                                <tr>
                                    <th>#</th>
                                    <th>First name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Cellphone</th>
                                    <th>Site</th>
                                    <th>Facebook</th>
                                    <th>Linkedin</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $key => $user) { ?>
                                    <tr>
                                        <td><?php echo $key+1 ?></td>
                                        <td><?php echo $user['first_name']; ?></td>
                                        <td><?php echo $user['last_name']; ?></td>
                                        <td><?php echo $user['email']; ?></td>
                                        <td><?php echo $user['cellphone']; ?></td>
                                        <td><?php echo $user['site']; ?></td>
                                        <td><?php echo $user['facebook']; ?></td>
                                        <td><?php echo $user['linkedin']; ?></td>
                                        <td></td>
                                    </tr>
                                <?php } ?>
                            </tfoot>
                        </table>
                        <!-- datatable end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>