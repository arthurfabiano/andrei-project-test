<!-- BEGIN Page Content -->
<!-- the #js-page-content id is needed for some plugins to initialize -->
<main id="js-page-content" role="main" class="page-content">
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Project Test</a></li>
        <li class="breadcrumb-item">Users</li>
        <li class="breadcrumb-item active">Editar</li>
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
                        Edit <span class="fw-300"><i>user</i></span>
                    </h2>
                </div>
                <div class="panel-container show">
                    <form id="js-login" novalidate="" action="<?php echo base_url('user/update'); ?>" method="POST">
                        <div class="panel-content">
                            <div class="form-group">
                                <label class="form-label" for="basic-addon1">Full Name </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Profile</span>
                                    </div>
                                    <input type="text" id="basic-addon1" class="form-control" name="first_name" placeholder="First Name" value="<?php echo $user->first_name; ?>" aria-label="firstname" aria-describedby="basic-addon1">
                                    <input type="text" id="basic-addon1" class="form-control" name="last_name" placeholder="Last Name" value="<?php echo $user->last_name; ?>" aria-label="lastname" aria-describedby="basic-addon2">
                                    <input type="text" id="basic-addon1" class="form-control" name="cellphone" placeholder="Cellphone" value="<?php echo $user->cellphone; ?>" aria-label="cellphone" aria-describedby="basic-addon3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="basic-addon2">Email</label>
                                <div class="input-group">
                                    <input id="basic-addon2" type="email" class="form-control" name="email" value="<?php echo $user->email; ?>" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="basic-url">Site</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">https://</span>
                                    </div>
                                    <input type="text" class="form-control" name="site" value="<?php echo $user->site; ?>" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="basic-url">Facebook</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">https://facebook.com/</span>
                                    </div>
                                    <input type="text" class="form-control" name="facebook" value="<?php echo $user->facebook; ?>" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="basic-url">Linkedin</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">https://linkedin.com/in/</span>
                                    </div>
                                    <input type="text" class="form-control" name="linkedin" value="<?php echo $user->linkedin; ?>" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                            </div>

                            <hr>
                            
                            <input type="hidden" name="id" value="<?php echo $user->id; ?>">

                            <div class="row no-gutters">
                                <div class="col-md-4 ml-auto text-right">
                                    <button id="js-login-btn" type="submit" class="btn btn-success btn-lg mt-3">Salve/Update</button>
                                </div>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>