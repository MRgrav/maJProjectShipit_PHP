<div class="phone-dMenu" id="pMenu" style="background-color: rgba(0, 255, 255, 0.144);">
        <div class="prof">
            <img src="https://assets.marvelstrikeforce.com/imgs/Portrait_NicoMinoru_dd1344d8.png" alt="">
            <b>Name</b>
        </div>
        <hr>
            <a href="">My Account</a>
            <a href="">About</a>
            <a href="">Contacts</a>
        <hr>
        <a id="logout">
            <i class="bi bi-box-arrow-left" style="font-size: 24px;"></i><label> Logout</label>
        </a>
    </div>
    <script>
		menuPhone.onclick = function(){
			if (pMenu.style.display == 'flex'){
				pMenu.style.display = 'none';
			}else{
				pMenu.style.display = 'flex';
			}
		}
    </script>
