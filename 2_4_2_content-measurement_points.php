<section className="content-main">
  <div class="row">
    <div class="col-md-4">
      <div class="row">
        <div class="card card-primary card-outline card-outline-tabs" >
          <div class="card-header p-0 border-bottom-0" >
            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist" >
              <li class="nav-item">
                <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">MAP</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">系統図</a>
              </li>
            </ul>
            <div class="card-body">
              <div class="tab-content" id="custom-tabs-four-tabContent">
               <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
  \
                 <?php require("2_4_2_COMPONENT_bunshitu_building_map.php") ?>
 
               </div> 
               <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
     
            
                 <?php require("2_4_2_COMPONENT_Hicharts_box_layout.php") ?>
        
               </div> 
             </div> 
            </div> 
           </div> 
          </div> 
        </div>




      <div class="row">
       <div class="card col-md-12" >
        <div class="card-header">

         <h3 class="cerd-title">構造材料C1号館</h3>
         <h3 class="cerd-title">>低圧動力1</h3>
        </div>
       </div>
      </div>
    </div>

    <div class="col-md-5">
        <?php require("2_4_2_COMPONENT_PW_info.php") ?>
    </div>
    <div class="col-md-3">
     <?php require("2_4_2_COMPONENT_ NEW_alarm_list.php") ?>
     <div class="card ">
      <div class="card-header">
       <div class="card-title">
        監視状況

       </dev>
      <ul >
      
       <li style="color: #ff6347"><span style="color: #2b2b2b">PF溶断</span></li>

      </ul>
      <ul >

       <li style="color: #3cb371"><span style="color: #2b2b2b">地絡</span></li>
      </ul>
     </div>
    </div>
   </div>

    </div>
</section>