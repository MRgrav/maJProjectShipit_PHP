<div class="dock" style="position: fixed; z-index: 1085;">
    <div class="add-dock">
        <a href=""><i class="bi bi-plus"></i></a>
    </div>
    <div class="dock-items">
        <a class="<?php if($dock == 'home'){ echo 'active-i';}?>" href="./sd.html">
			<i class="bi bi-house"></i><label class="dock-l">Home</label>
        </a>
    </div>
    <div class="dock-items">
        <a class="<?php if($dock == 'orders'){ echo 'active-i';}?>" href="">
			<i class="bi bi-cart"></i><label class="dock-l">My Orders</label>
		</a>
    </div>
    <div class="dock-items">
        <a class="<?php if($dock == 'account'){ echo 'active-i';}?>" href="">
			<i class="bi bi-person"></i><label class="dock-l">My Account</label>
		</a>
    </div>
