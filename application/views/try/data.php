                 <div class="right_col" role="main">
                    <div class="">
                      <div class="row top_tiles">
                        <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
                          <div class="tile-stats">
                            <div class="icon"><i class="glyphicon glyphicon-time"></i></div>
                            <div class="count"><?=$hour?> Jam</div>
                            <h3>Durasi Meeting</h3>
                          </div>
                        </div>
                        <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
                          <div class="tile-stats">
                            <div class="icon"><i class="glyphicon glyphicon-log-in"></i></div>
                            <div class="count"><?=$keterangan['internal']?></div>
                            <h3>Total Meeting Internal</h3>
                          </div>
                        </div>
                        <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
                          <div class="tile-stats">
                            <div class="icon"><i class="glyphicon glyphicon-log-out"></i></div>
                            <div class="count"><?=$keterangan['eksternal']?></div>
                            <h3>Total Meeting Eksternal</h3>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>All Meeting</h2>
                              <div class="filter">
                                <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                  <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                  <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                                </div>

                              </div>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                              <div class="table-responsive">
                                <table class="table table-striped table-bordered jambo_table bulk_action">
                                  <thead>
                                    <tr class="headings">
                                      <th style="text-align:center">Tanggal</th>
                                      <th style="text-align:center">Jam Mulai</th>
                                      <th style="text-align:center">Jam Selesai</th>
                                      <th style="text-align:center">Ruangan</th>
                                      <th style="text-align:center">Perihal</th> 
                                      <th style="text-align:center">Pengguna</th>
                                      <th style="text-align:center">Keterangan</th> 
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php foreach ($meetings as $meetings_item):?>
                                      <tr>
                                        <td style="text-align:center"><?=date("d-m-Y",strtotime($meetings_item['tanggal']))?></td>
                                        <td style="text-align:center"><?=$meetings_item['waktu_mulai']?></td>
                                        <td style="text-align:center"><?=$meetings_item['waktu_selesai']?></td>
                                        <td style="text-align:center"><?=$meetings_item['nama_ruangan']?></td>
                                        <td style="text-align:center"><?=$meetings_item['perihal']?></td>
                                        <td style="text-align:center"><?=$meetings_item['nama_divisi']?></td>
                                        <td style="text-align: center"><?php
                                            if ($meetings_item['status']==true){
                                              echo "Eksternal";
                                            }else{
                                              echo "Internal";
                                            }
                                        ?></td>
                                      </tr>
                                    <?php endforeach?>
                                  </tbody>
                                </table>
                              </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="x_panel">
                                <div class="x_title">
                                  <h2>All Divisi</h2>
                                 
                                  <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                  <article class="media event">
                                    <div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
                                      <div class="tile-stats">
                                        <div class="count">179</div>
                                        <h3>Organization Development</h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
                                      <div class="tile-stats">
                                        <div class="count">179</div>
                                        <h3>Estate Management</h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
                                      <div class="tile-stats">
                                        <div class="count">179</div>
                                        <h3>Organization Development</h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
                                      <div class="tile-stats">
                                        <div class="count">179</div>
                                        <h3>Estate Management</h3>
                                      </div>
                                    </div>
                                  </article>
                                </div>

                              </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="x_panel">
                                <div class="x_title">
                                  <h2>All Ruangan</h2>
                                  <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                  </ul>
                                  <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                  <article class="media event">
                                    <div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
                                      <div class="tile-stats">
                                        <div class="count">179</div>
                                        <h3>Organization Development</h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
                                      <div class="tile-stats">
                                        <div class="count">179</div>
                                        <h3>Estate Management</h3>
                                      </div>
                                    </div>
                                  </article>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>