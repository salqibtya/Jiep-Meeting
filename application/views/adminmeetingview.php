<body style="background-color:rgb(247,247,247) !important ">
  <div class="container body" style="top: 0; bottom: 0; left: 0; height: 100%">
   <div class="main_container">
     <?php $this->load->view('templates/menubaradmin'); ?>
     <div class="right_col" role="main" style="margin-left:0px !important">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
<!--
            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
            <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">All Meeting</a>
              </li>
              <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Profile</a>
              </li>
              <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
              </li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                <p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. </p>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. </p>
              </div>
            </div>
          </div>
-->
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
                  </tr>
                <?php endforeach?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>