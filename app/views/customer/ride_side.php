
        <!-- side bar========================= -->
        <div class="sidebar">

             <div class="barimagetag">
                <img src="<?= ROOT ?>/assets/img/logonamenw.png" alt=" " class="barimage">
             </div>


             <div class="profile">
                <img src="<?= ROOT ?>/assets/img/customer/profile/<?=$img?>" alt="" class="userimage">
                <H3 class="username"><?php echo $_SESSION['USER_DATA']->role; ?> - <?=Auth::getname();?></H3>
                <h6>
                  <?php for($i=0; $i<$rating; $i++){ ?>
                  <i class="fa-solid fa-star" style="color: #D1B000;"></i>
                  <?php } for($i=$rating; $i<5; $i++){?>
                  <i class="fa-solid fa-star" ></i>
                  <?php }?>
                </h6>
             </div>
             

             <div class="linktag">
                <a href="<?=ROOT?>/customer/ride" class="link"><div class="linkbutton1"><i class="fa-solid fa-car-tunnel"></i>Ride</div></a>
                <a href="<?=ROOT?>/customer/add_place" class="link2"><div class="linkbutton"><i class="fa-solid fa-map-location-dot"></i>Add Place</div></a>
                <a href="<?=ROOT?>/customer/activity" class="link2"><div class="linkbutton"><i class="fa-solid fa-file-lines"></i>Activity</div></a>
                <a href="<?=ROOT?>/customer/profile" class="link2"><div class="linkbutton"><i class="fa-solid fa-user"></i>Profile</div></a>
                <a href="<?=ROOT?>/customer/help" class="link2"><div class="linkbutton"><i class="fa-solid fa-handshake-angle"></i>Help</div></a>
                <a href="#" class="link2"><div class="linkbutton2" onclick="log_out()"><i class="fa-solid fa-right-from-bracket"></i>Logout</div></a>
             </div>
      
             <div class="logout-container">
              <h2>Log Out</h2>
              <p class="logout-text">Are you sure you want to log out?</p>
              <div class="cancel-logout"><button class="cancel-btn">Cancel</button> <button class="logout-btn">Log Out</button></div>
             </div>
           
             
        </div>

      <!-- //------------------------------------------mobile bar----------------------------------- -->
        <div class="open-sidebar open-bar-block open-border-right" style="display:none" id="mySidebar">
            <button onclick="side_close()" class="sidebar_close_button"><i class="fa-solid fa-circle-left fa-fade"></i></button>
               <div class="barimagetag">
                <img src="<?= ROOT ?>/assets/img/logonamenw.png" alt=" " class="barimage">
             </div>


             <div class="profile">
                <img src="<?= ROOT ?>/assets/img/customer/profile/<?=$img?>" alt="" class="userimage">
                <H3 class="username"><?php echo $_SESSION['USER_DATA']->role; ?> - <?=Auth::getname();?></H3>
                <h6>
                <?php for($i=0; $i<$rating; $i++){ ?>
                  <i class="fa-solid fa-star" style="color: #D1B000;"></i>
                  <?php } for($i=$rating; $i<5; $i++){?>
                  <i class="fa-solid fa-star" ></i>
                  <?php }?>
                </h6>
             </div>
             

             <div class="linktag">
                <a href="<?=ROOT?>/customer/ride" class="link"><div class="linkbutton1"><i class="fa-solid fa-car-tunnel"></i>Ride</div></a>
                <a href="<?=ROOT?>/customer/add_place" class="link2"><div class="linkbutton"><i class="fa-solid fa-map-location-dot"></i>Add Place</div></a>
                <a href="<?=ROOT?>/customer/activity" class="link2"><div class="linkbutton"><i class="fa-solid fa-file-lines"></i>Activity</div></a>
                <a href="<?=ROOT?>/customer/profile" class="link2"><div class="linkbutton"><i class="fa-solid fa-user"></i>Profile</div></a>
                <a href="<?=ROOT?>/customer/help" class="link2"><div class="linkbutton"><i class="fa-solid fa-handshake-angle"></i>Help</div></a>
                <a href="#" class="link2"><div class="linkbutton2"><i class="fa-solid fa-right-from-bracket"></i>Logout</div></a>
             </div>
      
             
          </div>
          
               