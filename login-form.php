<div id="id01" class="modal">

  <form class="modal-content animate" action="Login/login.php" method='POST'>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
    <h3>Login</h3>
							<form method="post" action="Login/login.php">
								<div class="row uniform 50%">
									<div class="3u 12u$(xsmall)">
										<input type="text" name="uname" id="uname" value="" placeholder="UserName"  required/>
									</div>
									<div class="3u 12u$(xsmall)">
										<input type="password" name="pass" id="pass" value="" placeholder="Password" required/>
									</div>
								</div>
									<div class="row uniform">
										<p>
				                            <b>Category : </b>
				                        </p>
				                        <div class="3u 12u$(small)">
				                            <input type="radio" id="farmer" name="category" value="1" checked>
				                            <label for="farmer">Farmer</label>
				                        </div>
				                        <div class="3u 12u$(small)">
				                            <input type="radio" id="buyer" name="category" value="0">
				                            <label for="buyer">Buyer</label>
				                        </div>
									</div>
									<center>
									<div class="row uniform">
										<div class="7u 12u$(small)">
											<input type="submit" value="Login" />
										</div>
									</div>
									</center>
								</div>
							</form>
						</section>
</div>
    </div>
    </div>
  </form>
</div>
