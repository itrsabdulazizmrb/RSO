<div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-xl-8 col-lg-10 col-md-12">
                <div class="card shadow-lg border-0 rounded-lg my-5">
                    <div class="card-body p-0">
                        <div class="row no-gutters">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
<dotlottie-player src="https://lottie.host/beaefe39-0ca5-485e-8d39-33659a1f5c5c/i7ONCnQPD2.json" background="#585859" speed="1" style="width: 360px; height: 370px" direction="1" playMode="normal" loop  autoplay></dotlottie-player>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h3 text-gray-900 mb-4">RSO </h1>
                                    </div>
                                    <?= $this->session->flashdata('message'); ?>
                                    <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>