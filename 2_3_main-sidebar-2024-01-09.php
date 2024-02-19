<?php


// １．ダッシュボード
// 大メニュー：ダッシュボード
// 小メニュー：なし

// ２．電力量
// 大メニュー：電力監視画面
// 小メニュー：電力量

// ３．デマンド電力
// 大メニュー：電力監視画面
// 小メニュー：デマンド電力

// ４．変電設備監視
// 大メニュー：電力監視画面
// 小メニュー：変電設備監視

// ５．漏電
// 大メニュー：電力監視画面
// 小メニュー：漏電

// ６．水道量
// 大メニュー：水道監視画面
// 小メニュー：水道量

// ７．給水／漏水
// 大メニュー：水道監視画面
// 小メニュー：給水／漏水

// ８．タンク水位
// 大メニュー：水道監視画面
// 小メニュー：タンク水位

// ９．ガス
// 大メニュー：その他監視項目
// 小メニュー：ガス

// １０．騒音
// 大メニュー：その他監視項目
// 小メニュー：騒音

// １１．定常処理
// 大メニュー：その他監視項目
// 小メニュー：定常処理

// １２．警報一覧
// 大メニュー：警報一覧
// 小メニュー：なし

// １３．設定
// 大メニュー：警報一覧
// 小メニュー：なし

//下記の変数はメニューが選択されている場合にのみ "active"を保存することで
//メニューが選択されている視覚効果を得られるようにする。
//メニューは LV1 (大メニュー)と LV2 （小メニュー）がある。
$MENU_CHOHU_HONJO = ""; //ダッシュボード
$MENU_BUNSHITSU   = ""; //電力監視画面

$MENU_LV1_001 = ""; //ダッシュボード
$MENU_LV1_002 = ""; //電力監視画面
$MENU_LV1_003 = ""; //水道監視画面
$MENU_LV1_004 = ""; //その他監視項目
$MENU_LV1_007 = ""; //定常処理
$MENU_LV1_005 = ""; //警報一覧
$MENU_LV1_006 = ""; //設定

$MENU_LV1_001_OPENED = ""; //ダッシュボード
$MENU_LV1_002_OPENED = ""; //電力監視画面
$MENU_LV1_003_OPENED = ""; //水道監視画面
$MENU_LV1_004_OPENED = ""; //その他監視項目
$MENU_LV1_007_OPENED = ""; //定常処理
$MENU_LV1_005_OPENED = ""; //警報一覧
$MENU_LV1_006_OPENED = ""; //設定

$MENU_LV2_002 = ""; //電力量
$MENU_LV2_003 = ""; //デマンド電力
$MENU_LV2_004 = ""; //変電設備監視
$MENU_LV2_005 = ""; //漏電
$MENU_LV2_006 = ""; //水道量
$MENU_LV2_007 = ""; //給水／漏水
$MENU_LV2_008 = ""; //タンク水位
$MENU_LV2_009 = ""; //ガス
$MENU_LV2_010 = ""; //騒音
$MENU_LV2_011 = ""; //定常処理

switch ($page_name) {
  case  "ダッシュボード":
    $MENU_LV1_001 = " active"; //ダッシュボード
    $MENU_LV1_001_OPENED = " menu-is-opening menu-open";
    break;
  case  "電力量":
    $MENU_LV1_002 = " active"; //電力監視画面
    $MENU_LV1_002_OPENED = " menu-is-opening menu-open";
    $MENU_LV2_002 = " active"; //電力量
    break;
  case  "デマンド電力":
    $MENU_LV1_002 = " active"; //電力監視画面
    $MENU_LV1_002_OPENED = " menu-is-opening menu-open";
    $MENU_LV2_003 = " active"; //デマンド電力  
    break;
  case  "変電設備監視":
    $MENU_LV1_002 = " active"; //電力監視画面
    $MENU_LV1_002_OPENED = " menu-is-opening menu-open";
    $MENU_LV2_004 = " active"; //変電設備監視
    break;
  case  "漏電":
    $MENU_LV1_002 = " active"; //電力監視画面
    $MENU_LV1_002_OPENED = " menu-is-opening menu-open";
    $MENU_LV2_005 = " active"; //漏電
    break;
  case  "水道量":
    $MENU_LV1_003 = " active"; //水道監視画面
    $MENU_LV1_003_OPENED = " menu-is-opening menu-open";
    $MENU_LV2_006 = " active"; //水道量

    break;
  case  "給水／漏水":
    $MENU_LV1_003 = " active"; //水道監視画面
    $MENU_LV1_003_OPENED = " menu-is-opening menu-open";
    $MENU_LV2_007 = " active"; //給水／漏水
    break;
  case  "タンク水位":
    $MENU_LV1_003 = " active"; //水道監視画面
    $MENU_LV1_003_OPENED = " menu-is-opening menu-open";
    $MENU_LV2_008 = " active"; //タンク水位
    break;
  case  "ガス":
    $MENU_LV1_004 = " active"; //その他監視項目
    $MENU_LV1_004_OPENED = " menu-is-opening menu-open";
    $MENU_LV2_009 = " active"; //ガス

    break;
  case  "騒音":
    $MENU_LV1_004 = " active"; //その他監視項目
    $MENU_LV1_004_OPENED = " menu-is-opening menu-open";
    $MENU_LV2_010 = " active"; //騒音
    break;
  case  "定常処理":
    $MENU_LV1_007 = " active"; //その他監視項目
    $MENU_LV1_007_OPENED = " menu-is-opening menu-open";

    break;
  case  "警報一覧":
    $MENU_LV1_005 = " active"; //警報一覧
    $MENU_LV1_005_OPENED = " menu-is-opening menu-open";

    break;
  case  "設定":
    $MENU_LV1_006 = " active"; //設定
    $MENU_LV1_006_OPENED = " menu-is-opening menu-open";
    break;
  case  "調布本所":
    break;
  case  "飛行場分室":
    break;
  default:
}



?>



<!-- 事業所選択部位 -->
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index.php?page_name=main" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">電力監視</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">電力管理　太郎</a>
      </div>
    </div> -->

    <!-- SidebarSearch Form
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <!-- <i class="nav-icon fas fa-sitemap"></i> -->
            <i class="nav-icon fas fa-flag"></i>
            <!-- <i class="nav-icon fa-solid fa-flag"></i> -->

            <p>
              事業所選択
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?page_name=地図から選択" class="nav-link">
                <i class="fas fa-map-marked-alt nav-icon nav-icon"></i>
                <p>　地図から選択</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?page_name=調布本所" class="nav-link">
                <i class="fas fa-map-marker-alt nav-icon"></i>
                <p>　調布本所</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?page_name=飛行場分室" class="nav-link active">
                <i class="fas fa-map-marker-alt nav-icon"></i>
                <p>　飛行場分室</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item <?php print($MENU_LV1_001_OPENED); ?>">
          <a href="index.php?page_name=ダッシュボード" class="nav-link <?php print($MENU_LV1_001); ?>">
            <i class="far fa-regular fa-building nav-icon"></i>
            <p>ダッシュボード</p>
          </a>
        </li>
        <li class="nav-item <?php print($MENU_LV1_002_OPENED); ?>">
          <a href="index.php?page_name=電力監視画面" class="nav-link <?php print($MENU_LV1_002); ?>">
            <i class="fas fa-bolt nav-icon"></i>
            <p>電力監視画面</p>
            <i class="right fas fa-angle-left"></i>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?page_name=電力量" class="nav-link <?php print($MENU_LV2_002); ?>">
                <i class="far fa-lightbulb nav-icon"></i>
                <p>　電力量</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="index.php?page_name=デマンド電力" class="nav-link <?php print($MENU_LV2_003); ?>">
                <i class="fas fa-plug nav-icon"></i>
                <p>　デマンド電力</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?page_name=変電設備監視" class="nav-link <?php print($MENU_LV2_004); ?>">
                <i class="fas fa-charging-station nav-icon"></i>
                <p>　変電設備監視</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?page_name=漏電" class="nav-link <?php print($MENU_LV2_005); ?>">
                <i class="fas fa-random nav-icon"></i>
                <p>　漏電</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item <?php print($MENU_LV1_003_OPENED); ?>">
          <a href="index.php?page_name=水道監視画面" class="nav-link <?php print($MENU_LV1_003); ?>">
            <i class="fas fa-tint nav-icon"></i>
            <p>水道監視画面</p>
            <i class="right fas fa-angle-left"></i>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?page_name=水道量" class="nav-link  <?php print($MENU_LV2_006); ?>">
                <i class="fas fa-faucet nav-icon"></i>
                <p>　水道量</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="index.php?page_name=給水／漏水" class="nav-link <?php print($MENU_LV2_007); ?>">
                <i class="fas fa-hand-holding-water nav-icon"></i>
                <p>　給水／漏水</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?page_name=タンク水位" class="nav-link <?php print($MENU_LV2_008); ?>">
                <i class="fas fa-water nav-icon"></i>
                <p>　タンク水位・ポンプ</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item <?php print($MENU_LV1_004_OPENED); ?>">
          <a href="index.php?page_name=その他監視項目" class="nav-link <?php print($MENU_LV1_004); ?>">
            <i class="fas fa-circle nav-icon"></i>
            <p>その他監視項目</p>
            <i class="right fas fa-angle-left"></i>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?page_name=ガス" class="nav-link <?php print($MENU_LV2_009); ?>">
                <i class="fas fa-gas-pump nav-icon"></i>
                <p>　ガス</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="index.php?page_name=騒音" class="nav-link <?php print($MENU_LV2_010); ?>">
                <i class="fas fa-volume-up nav-icon"></i>
                <p>　騒音</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item <?php print($MENU_LV1_007_OPENED); ?>">
          <a href="index.php?page_name=定常処理" class="nav-link <?php print($MENU_LV1_007); ?>">
            <i class="fas fa-file-csv nav-icon"></i>
            <p>定常処理</p>
          </a>
        </li>
        <li class="nav-item <?php print($MENU_LV1_005_OPENED); ?>">
          <a href="index.php?page_name=警報一覧" class="nav-link <?php print($MENU_LV1_005); ?>">
            <i class="fas fa-exclamation-triangle nav-icon"></i>
            <p>警報（アラーム）一覧</p>
          </a>
        </li>
        <li class="nav-item <?php print($MENU_LV1_006_OPENED); ?>">
          <a href="index.php?page_name=設定" class="nav-link <?php print($MENU_LV1_006); ?>">
            <i class="fas fa-cogs nav-icon"></i>
            <p>設定</p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>