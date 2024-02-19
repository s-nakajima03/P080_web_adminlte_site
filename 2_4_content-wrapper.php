  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php require("2_4_1_content-header.php") ?>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php
    switch ($page_name) {
      case  "デマンド電力":
        $loading_content_filename = "2_4_2_content-main-graph.php";
        break;
      case  "警報一覧":
        $loading_content_filename = "2_4_2_content-main-alarm.php";
        break;
      case  "設定":
        $loading_content_filename = "2_4_2_content-setting.php";
        break;
      case  "建屋毎":
        $loading_content_filename = "2_4_2_content-bilding.php";
        break;
      case  "測定箇所":
        $loading_content_filename = "2_4_2_content-measurement_points.php";
        break;
      case  "調布本所":
        $loading_content_filename = "2_4_2_content-main-dashboard.php";
        break;
      case  "フィーダ毎":
        $loading_content_filename = "2_4_2_content-feeder.php";
        break;
      case  "キュービクル毎":
        $loading_content_filename = "2_4_2_content-cubicle.php";
        break;
      case  "データ一覧（電力量）":
        $loading_content_filename = "2_4_2_content-data-list.php";
        break;
      case  "定常処理":
        $loading_content_filename = "2_4_2_content-steady-processing.php";
        break;
      case  "設定閾値":
        $loading_content_filename = "2_4_2_content-setting.php";
        break;
      case  "test":
        $loading_content_filename = "2_4_2_content-chart.php";
        break;
       
      default:
        $loading_content_filename = "2_4_2_content-plant-select.php";
    }
    ?>
    <?php require($loading_content_filename) ?>
    <!-- /.content -->
  </div>