<section>
              <section class="vbox">
                <section class="scrollable wrapper-lg">
                  <div class="row">
                    <div class="col-sm-8">
                      <div class="panel">
                        <!-- music player -->
                        <?php 
                          foreach ($result as $row) {
                          
                        ?>
                          <div id="jp_container_1">
                            <div class="jp-type-single pos-rlt">
                              <div class="m-t-n-xxs item pos-rlt" style="background:#4cb6cb; height:100px">
                                <div class="top text-right">
                                  <span class="musicbar animate bg-success bg-empty inline m-t" style="width:5%;height:70px">
                                    <span class="bar1 a1 bg-primary lter"></span>
                                    <span class="bar2 a2 bg-info lt"></span>
                                    <span class="bar3 a3 bg-success"></span>
                                    <span class="bar4 a4 bg-warning dk"></span>
                                    <span class="bar5 a5 bg-danger dker"></span>
                                  </span>
                                  <span class="musicbar animate bg-success bg-empty inline m-t" style="width:5%;height:70px">
                                    <span class="bar1 a1 bg-primary lter"></span>
                                    <span class="bar2 a2 bg-info lt"></span>
                                    <span class="bar3 a3 bg-success"></span>
                                    <span class="bar4 a4 bg-warning dk"></span>
                                    <span class="bar5 a5 bg-danger dker"></span>
                                  </span>
                                  <span class="musicbar animate bg-success bg-empty inline m-t" style="width:5%;height:70px">
                                    <span class="bar1 a1 bg-primary lter"></span>
                                    <span class="bar2 a2 bg-info lt"></span>
                                    <span class="bar3 a3 bg-success"></span>
                                    <span class="bar4 a4 bg-warning dk"></span>
                                    <span class="bar5 a5 bg-danger dker"></span>
                                  </span>
                                  <span class="musicbar animate bg-success bg-empty inline m-t" style="width:5%;height:70px">
                                    <span class="bar1 a1 bg-primary lter"></span>
                                    <span class="bar2 a2 bg-info lt"></span>
                                    <span class="bar3 a3 bg-success"></span>
                                    <span class="bar4 a4 bg-warning dk"></span>
                                    <span class="bar5 a5 bg-danger dker"></span>
                                  </span>
                                  <span class="musicbar animate bg-success bg-empty inline m-t" style="width:5%;height:70px">
                                    <span class="bar1 a1 bg-primary lter"></span>
                                    <span class="bar2 a2 bg-info lt"></span>
                                    <span class="bar3 a3 bg-success"></span>
                                    <span class="bar4 a4 bg-warning dk"></span>
                                    <span class="bar5 a5 bg-danger dker"></span>
                                  </span>
                                  <span class="musicbar animate bg-success bg-empty inline m-t" style="width:5%;height:70px">
                                    <span class="bar1 a1 bg-primary lter"></span>
                                    <span class="bar2 a2 bg-info lt"></span>
                                    <span class="bar3 a3 bg-success"></span>
                                    <span class="bar4 a4 bg-warning dk"></span>
                                    <span class="bar5 a5 bg-danger dker"></span>
                                  </span>
                                  <span class="musicbar animate bg-success bg-empty inline m-t" style="width:5%;height:70px">
                                    <span class="bar1 a1 bg-primary lter"></span>
                                    <span class="bar2 a2 bg-info lt"></span>
                                    <span class="bar3 a3 bg-success"></span>
                                    <span class="bar4 a4 bg-warning dk"></span>
                                    <span class="bar5 a5 bg-danger dker"></span>
                                  </span>
                                  <span class="musicbar animate bg-success bg-empty inline m-t" style="width:5%;height:70px">
                                    <span class="bar1 a1 bg-primary lter"></span>
                                    <span class="bar2 a2 bg-info lt"></span>
                                    <span class="bar3 a3 bg-success"></span>
                                    <span class="bar4 a4 bg-warning dk"></span>
                                    <span class="bar5 a5 bg-danger dker"></span>
                                  </span>
                                  <span class="musicbar animate bg-success bg-empty inline m-t" style="width:5%;height:70px">
                                    <span class="bar1 a1 bg-primary lter"></span>
                                    <span class="bar2 a2 bg-info lt"></span>
                                    <span class="bar3 a3 bg-success"></span>
                                    <span class="bar4 a4 bg-warning dk"></span>
                                    <span class="bar5 a5 bg-danger dker"></span>
                                  </span>
                                  <span class="musicbar animate bg-success bg-empty inline m-t" style="width:5%;height:70px">
                                    <span class="bar1 a1 bg-primary lter"></span>
                                    <span class="bar2 a2 bg-info lt"></span>
                                    <span class="bar3 a3 bg-success"></span>
                                    <span class="bar4 a4 bg-warning dk"></span>
                                    <span class="bar5 a5 bg-danger dker"></span>
                                  </span>   
                                  <span class="musicbar animate bg-success bg-empty inline m-t" style="width:5%;height:70px">
                                    <span class="bar1 a1 bg-primary lter"></span>
                                    <span class="bar2 a2 bg-info lt"></span>
                                    <span class="bar3 a3 bg-success"></span>
                                    <span class="bar4 a4 bg-warning dk"></span>
                                    <span class="bar5 a5 bg-danger dker"></span>
                                  </span>
                                  <span class="musicbar animate bg-success bg-empty inline m-r-lg m-t" style="width:5%;height:70px">
                                    <span class="bar1 a1 bg-primary lter"></span>
                                    <span class="bar2 a2 bg-info lt"></span>
                                    <span class="bar3 a3 bg-success"></span>
                                    <span class="bar4 a4 bg-warning dk"></span>
                                    <span class="bar5 a5 bg-danger dker"></span>
                                  </span>
                                </div>
                              </div>
                              <div id="jplayer_m" class="jp-jplayer" data-name="<?php echo $row->name; ?>" data-song="<?php echo $row->link; ?>"></div>
                                <div class="jp-gui">
                                  <div class="jp-video-play">
                                    <a class="fa fa-5x text-white fa-play-circle"></a>
                                  </div>
                                  <div class="jp-interface bg-info padder">
                                    <div class="jp-controls">
                                      <div>
                                        <a class="jp-play"><i class="icon-control-play i-2x"></i></a>
                                        <a class="jp-pause hid"><i class="icon-control-pause i-2x"></i></a>
                                      </div>
                                      <div class="jp-progress">
                                        <div class="jp-seek-bar dker">
                                          <div class="jp-play-bar dk">
                                          </div>
                                          <div class="jp-title text-lt">
                                            <ul>
                                              <li></li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="hidden-xs hidden-sm jp-current-time text-xs text-muted"></div>
                                      <div class="hidden-xs hidden-sm jp-duration text-xs text-muted"></div>
                                      <div class="hidden-xs hidden-sm">
                                        <a class="jp-mute" title="mute"><i class="icon-volume-2"></i></a>
                                        <a class="jp-unmute hid" title="unmute"><i class="icon-volume-off"></i></a>
                                      </div>
                                      <div class="hidden-xs hidden-sm jp-volume">
                                        <div class="jp-volume-bar dk">
                                          <div class="jp-volume-bar-value lter"></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="jp-no-solution hide">
                                  <span>Update Required</span>
                                  To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                                </div>
                          </div>
                        </div>
                      <?php   
                      # code...
                          }?>
                      <!-- / video player -->


                       <div class="wrapper-lg">
                        <h2 class="m-t-none text-black"><?php echo $row->name; ?></h2>
                        <div  class="post-sum">
                          <p></p>
                        </div>
                        <div class="line b-b"></div>
                        <div  class="text-muted">
                          <a class="btn btn-default" href="" data-toggle="class:btn-success">
                            <i class="fa  fa-cloud-download text"></i>
                            <span class="text">Download 128 kbps</span>
                            <i class="fa fa-check text-active"></i>
                            <span class="text-active">Success</span>
                          </a>

                          <a class="btn btn-danger" href="" data-toggle="class:btn-success">
                            <i class="fa  fa-cloud-download text"></i>
                            <span class="text">Download 320 kbps</span>
                            <i class="fa fa-check text-active"></i>
                            <span class="text-active">Success</span>
                          </a>

                          <a class="btn btn-dark" href="" data-toggle="class:btn-success">
                            <i class="fa  fa-cloud-download text"></i>
                            <span class="text">Download lossless</span>
                            <i class="fa fa-check text-active"></i>
                            <span class="text-active">Success</span>
                          </a>

                          <div style="margin-top:10px;">
                            <div class="fb-like" data-href="<?php echo base_url('song/'.$row->alias.'-'.$row->id.'.html');  ?>" data-width="200px" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
                          </div>
                        </div>
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
                  </div>


                    <div class="col-sm-4">
                      <div class="panel panel-default">
                        <div class="panel-heading">Similar songs</div>
                        <div class="panel-body">
                          <?php
                          foreach ($result_similar as $row) {
                          
                          ?>  
                          <article class="media">
                            <a href="<?php echo base_url('song/'.$row->alias.'-'.$row->id.'.html');  ?>" class="pull-left thumb-lg m-t-xs">
                              <img width="100px" src="<?php echo ($row->image != "") ? $row->image : base_url('assets/images/p'.rand(1,11).'.jpg') ?>">
                            </a>
                            <div class="media-body">                        
                              <a href="<?php echo base_url('song/'.$row->alias.'-'.$row->id.'.html');  ?>" class="font-semibold"><?php echo $row->name;  ?></a>
                            </div>
                          </article>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>