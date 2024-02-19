<section className="content-main">
  <div class="row">
    <div class="col-md-4">
      <div class="row">
        <?php require("2_4_2_COMPONENT_bunshitu_map.php") ?>
      </div>
      <div class="row">
        <div class="col-md-6">
          <?php require("2_4_2_COMPONENT_AC_status.php") ?>
        </div>
        <div class="col-md-6">
          <?php require("2_4_2_COMPONENT_AC_status.php") ?>
        </div>
      </div>
    </div>

    <div class="col-md-5">
        <?php require("2_4_2_COMPONENT_PW_card.php") ?>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">デマンドグラフ</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col"><?php require("2_4_2_COMPONENT_Hicharts_clock.php"); ?></div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">使用率</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col text-center">
              <?php require("2_4_2_COMPONENT_adminlter_speedmeter.php"); ?>
            </div>
            <div class="col text-center">
              <?php require("2_4_2_COMPONENT_adminlter_speedmeter.php"); ?>
            </div>
          </div>
        </div>
      </div>

    </div>
</section>