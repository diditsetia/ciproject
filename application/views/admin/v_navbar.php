  <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                    
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="<?php echo site_url('web') ?>" target="_blank">
                               <p>Website</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        <img alt="" data-src="" class="img-circle" src="<?php echo base_url('assets/admin/img'.'/'.$this->session->userdata('foto')); ?>" data-holder-rendered="true" style="width: 25px;height: 25px;">
                                    </p>
                              </a>
                              <ul class="dropdown-menu" style="width: 300px;height:180px;">
                                <div class="form-group">
                                <div class="col-md-4">
                                 <img alt="" data-src="" class="img-circle" src="<?php echo base_url('assets/admin/img'.'/'.$this->session->userdata('foto')); ?>" data-holder-rendered="true" style="width: 65px;height: 65px;margin-top: 30px;margin-left: 20px;">
                                </div>

                                <div class="col-md-6" style="margin-top:40px;">
                                    <label><?php echo $this->session->userdata('nama'); ?></label><br>
                                    <p><?php echo $this->session->userdata('email');?><p>
                                </div>
                                </div>
                                <div class="col-md-4" style="margin-top: 40px; margin-left: 17px;">
                                    <a href="<?php echo site_url('admin/logout')?>">
                                        <p>Log Out</p>
                                    </a>
                                </div>
                              </ul>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>