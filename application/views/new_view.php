<section>
              <section class="vbox">
                <section class="scrollable padder-lg w-f-md" id="bjax-target">
                  <a href="#" class="pull-right text-muted m-t-lg" data-toggle="class:fa-spin" ><i class="icon-refresh i-lg  inline" id="refresh"></i></a>
                  <h2 class="font-thin m-b">Music <span class="musicbar animate inline m-l-sm" style="width:20px;height:20px">
                    <span class="bar1 a1 bg-primary lter"></span>
                    <span class="bar2 a2 bg-info lt"></span>
                    <span class="bar3 a3 bg-success"></span>
                    <span class="bar4 a4 bg-warning dk"></span>
                    <span class="bar5 a5 bg-danger dker"></span>
                  </span></h2>
                  
                  <div class="row">
                    
                    <div class="col-md-12">
                      <h3 class="font-thin">New Songs</h3>
                      <div class="row row-sm">

                      <?php 
                      foreach ($result_new as $row) {
                      
                      ?>
                        <div class="col-xs-6 col-sm-3 col-lg-2">
                          <div class="item">
                            <div class="pos-rlt">
                              <div class="item-overlay opacity r r-2x bg-black">
                                <div class="center text-center m-t-n">
                                  <a href="<?php echo base_url('song/'.$row->alias.'-'.$row->id.'.html');  ?>"><i class="fa fa-play-circle i-2x"></i></a>
                                </div>
                              </div>
                              <a href="<?php echo base_url('song/'.$row->alias.'-'.$row->id.'.html');  ?>"><img src="<?php echo ($row->image != "") ? $row->image : base_url('assets/images/p'.rand(1,11).'.jpg') ?>" alt="" class="r r-2x img-full"></a>
                            </div>
                            <div class="padder-v">
                              <a href="<?php echo base_url('song/'.$row->alias.'-'.$row->id.'.html'); ?>" class="text-ellipsis"><?php echo $row->name; ?></a>
                            </div>
                          </div>
                        </div>
                      <?php
                      }
                      ?> 
                      </div>
                    </div>

                    <div class="col-lg-12">
                    <?php echo $links; ?>
                    </div>
                  </div>

                  <div class="row m-t-lg m-b-lg">
                    <div class="col-sm-6">
                      <div class="bg-primary wrapper-md r">
                        <a href="#">
                          <span class="h4 m-b-xs block"><i class="icon-cloud-download i-lg"></i> Download our app</span>
                          <span class="text-muted">Get the apps for desktop and mobile to start listening music at anywhere and anytime.</span>
                        </a>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="bg-black wrapper-md r">
                        <a href="#">
                          <span class="h4 m-b-xs block"><i class="icon-cloud-download i-lg"></i> Download our app</span>
                          <span class="text-muted">Get the apps for desktop and mobile to start listening music at anywhere and anytime.</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </section>