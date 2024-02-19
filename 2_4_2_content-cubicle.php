<section className="content-main">
  <div class="row">
    <div class="col-md-4">
      <div class="row">
        <div class="col-md-12 h-100 d-inline-block">
        <?php require("2_4_2_COMPONENT_Hicharts_box_layout.php") ?>
        </div>
      </div>
      <div class="row">
       <div class="card col-md-12" >
        <div class="card-header">

         <h3 class="cerd-title">構造材料C1号館</h3>
        </div>
       </div>
      </div>
    </div>

    <div class="col-md-5">
    <div class="card ">
      <div class="card-header">

        <ul >
        <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">データ一覧（電力量）
          <li style="list-style: none">調布飛行場　分室　　　の本日の使用電力量</li>
          <li style="list-style: none">
            <span style="width: 25%">XX.X</span>
            <span style="width: 25%">kwh</span>
            <span style="width: 25%">V</span>
          </li>
</a>
        </ul>
      </div>
      </div>
        <?php require("2_4_2_COMPONENT_PW_card.php") ?>
    </div>
    <div class="col-md-3">
     <?php require("2_4_2_COMPONENT_ NEW_alarm_list.php") ?>
     <div class="card ">
      <div class="card-header">
       <div class="card-title">
        監視状況

       </dev>
      <ul >
       <li style="list-style: none">（現在の接続状況）</li>
      
      </ul>
     </div>
    </div>
   </div>
  </div>
</section>