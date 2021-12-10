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

    <?php  $session = \Config\Services::session(); if (!empty($session->getFlashdata('success'))) { ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                    <div class="d-flex align-items-center">
                        <div class="alert-icon">
                            <span class="icon-stack icon-stack-md">
                                <i class="base-2 icon-stack-3x color-success-400"></i>
                                <i class="base-10 text-white icon-stack-1x"></i>
                                <i class="ni md-profile color-success-800 icon-stack-2x"></i>
                            </span>
                        </div>
                        <div class="flex-1">
                            <span class="h4">Sucesso!</span>
                            <br>
                            <?php $session = \Config\Services::session(); echo $session->getFlashdata('success'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } else if (!empty($session->getFlashdata('error') !== null)) { ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                    <div class="d-flex align-items-center">
                        <div class="alert-icon">
                            <span class="icon-stack icon-stack-md">
                                <i class="base-2 icon-stack-3x color-danger-400"></i>
                                <i class="base-10 text-white icon-stack-1x"></i>
                                <i class="ni md-profile color-danger-800 icon-stack-2x"></i>
                            </span>
                        </div>
                        <div class="flex-1">
                            <span class="h4">Error!</span>
                            <br>
                            <?php $session = \Config\Services::session(); echo $session->getFlashdata('error'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    
    <div class="row">

        <div class="col-lg-12">
            <div id="panel-4" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Registered <span class="fw-300"><i> users</i></span>
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
                                    <th>Profile</th>
                                    <th>Email</th>
                                    <th>Cellphone</th>
                                    <th>Site</th>
                                    <th>Facebook</th>
                                    <th>Linkedin</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $key => $user) { ?>
                                    <tr>
                                        <td><?php echo $key+1 ?></td>
                                        <td><?php echo $user['first_name']; ?></td>
                                        <td><?php echo $user['last_name']; ?></td>
                                        <td><?php echo ($user['profile_id'] == 2) ? 'User' : 'Administrator'; ?></td>
                                        <td><?php echo $user['email']; ?></td>
                                        <td><?php echo $user['cellphone']; ?></td>
                                        <td><?php echo $user['site']; ?></td>
                                        <td><?php echo $user['facebook']; ?></td>
                                        <td><?php echo $user['linkedin']; ?></td>
                                        <td>
                                            <a href='<?php echo base_url('user/delete') . '/' . $user['id']; ?>' data-toggle="modal" data-target="#deletarUsuario" onClick="deletarUsuario(<?php echo $user['id']; ?>)" class='btn btn-sm btn-icon btn-outline-danger rounded-circle mr-1' title='Delete User'><i class="fal fa-times"></i></a>
                                            <a href='<?php echo base_url('user/edit') . '/' . $user['id']; ?>' class='btn btn-sm btn-icon btn-outline-primary rounded-circle mr-1' title='Edit User'><i class="fal fa-edit"></i></a>
                                        </td>
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