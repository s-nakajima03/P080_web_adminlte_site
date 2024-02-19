<section className="content-main">
  <div class="row">
    <div class="col-md-4">

      <div class="row">

        <div class="card card-primary card-outline card-outline-tabs" >
          <div class="card-header p-0 border-bottom-0" >
            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist" >
              <li class="nav-item">
                <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">電力</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">空調</a>
              </li>
            </ul>

          </div>
          <div class="card-body">
            <div class="tab-content" id="custom-tabs-four-tabContent">
              <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                <a href='index.php?page_name=建屋毎'>
                  <?php require("2_4_2_COMPONENT_bunshitu_map.php") ?>
                </a>
              </div> 
              <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">空調 状態</h3>
                          <div class="card-tools">
                            <ul class="pagination pagination-sm float-right">
                              <li class="page-item"><a class="page-link" href="#">«</a></li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="card-body">
                          <?php require("2_4_2_COMPONENT_AC_status.php") ?>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">ポンプ 状態</h3>
                          <div class="card-tools">
                            <ul class="pagination pagination-sm float-right">
                              <li class="page-item"><a class="page-link" href="#">«</a></li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="card-body">
                          <?php require("2_4_2_COMPONENT_AC_status.php") ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
              </div> 
            </div> 
          </div> 
        </div> 
        <div class="col-md-12">
          <div class="card">

            <div class="card-body">
              <?php require("2_4_2_COMPONENT_AC_status copy.php") ?>
            </div>
          </div>
        </div>  
      </div>

    <div class="col-md-4">
    <div class="card ">
      <div class="card-header">

        <ul >
          <li style="list-style: none">調布飛行場　分室　　　の本日の使用電力量</li>
          <li style="list-style: none">
            <span style="width: 25%">XX.X</span>
            <span style="width: 25%">kwh</span>
            <span style="width: 25%">V</span>
          </li>
        </ul>
      </div>
      </div>
    <div class="card card-warning collapsed-card">
      <div class="card-header">

        <ul >
          <li style="list-style: none">調布飛行場　分室　　　の本日の使用電力量</li>
          <li style="list-style: none">
            <span style="width: 25%">XX.X</span>
            <span style="width: 25%">kwh</span>
            <span style="width: 25%">V</span>
          </li>
        </ul>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>

      </div>

      <div class="card-body" style="display:none;">
        <?php require("2_4_2_COMPONENT_PW_card.php") ?>
      </div>

    </div>
    <div class="card-body" style="display: block;">
        <?php require("2_4_2_COMPONENT_ NEW_list.php") ?>
    </div>

    <div class="row">

            <div class="col-md-12">
              <div class="card">

                <div class="card-body">
                  <?php require("2_4_2_COMPONENT_AC_status copy.php") ?>
                </div>
              </div>
            </div>
          </div>
     
    </div>
    <div class="col-md-4">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">最新の電力状況</h3>
        </div>
        <div class="card-body">
          <div class="row">
           <div class="col-xs-12">
            <div class="row">
             <div class="col-xs-6">
                <?php require("2_4_2_COMPONENT_Hicharts_meter1.php"); ?>
              </div>
              <div class="col-xs-6">
                <?php require("2_4_2_COMPONENT_Hicharts_meter2.php"); ?>
              </div>
             
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">kWh</h3>
        </div>
        <div class="card-body">
          <div class="row">
          
            <div class="col">
            <a href='index.php?page_name=デマンド電力'>
              <?php require("2_4_2_COMPONENT_Hicharts_graph.php"); ?>
            </a>
          </div>
        
            
          </div>
        </div>
      </div>
      
    </div>
</section>