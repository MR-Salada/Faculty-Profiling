		<div class="row">
			<div class="col col-3 border">
				<h4><strong>Faculty Profile</strong></h4>
				<p><?php echo $userinfos->college ?> <br> <?= $userinfos->program ?> <br> <?= $userinfos->fieldofdiscipline ?> <br> <?= $userinfos->designation ?> <br> <?= $userinfos->academicrank ?> <br> <?= $userinfos->yearsofteaching ?></p>
				<button type="button" class="btn-success btn-sm btn"></button>
			</div>
			<div class="col col-9 border">
				<h5><strong>Overview</strong></h5>
				<p>Sometimes it’s okay to show off and brag a little bit — your overview is one of those times. This is where you set the tone for your whole profile — show your personality and a reason to read more about your incredible skills and experience. But don’t go too long.</p>
				<ol class="list-group mb-3">
				  <li class="list-group-item list-group-item-success">Describe your strengths and skills</li>
				  <li class="list-group-item list-group-item-success">Highlight accomplishments and recognition</li>
				  <li class="list-group-item list-group-item-success">Keep it short and make sure it's error-free</li>
				</ol>
				<div class="">
					<form action="members/updateoverview" method="POST">				
						 <textarea class="form-control mb-2" name="overview" placeholder="Leave you overview here" id="overview" style="height: 200px"><?= $userinfos->overview ?></textarea>
						 <input type="text" name="user_id" value="<?= $userinfos->id ?>" hidden>
						 <button type="submit" class="btn btn-sm btn-success mb-2">Submit Overview</button>
					 </form>
				</div>
				
			</div>

		</div>