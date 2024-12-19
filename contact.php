<?php include 'includes/header.php'; ?>
<!-- main -->
<main role="main-inner-wrapper" class="container">
  <div class="row">
   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <article role="pge-title-content" class="contact-header">
        <header>
          <h2><span><ruby><h2 class="main-header-contact">大家好！</h2></ruby></span><ruby class="sub-header-contact">我们盼望得到你的回应</ruby></h2>
        </header>
			<p>
				<a href="tel:8197654321"><i class="fa fa-phone" aria-hidden="true"></i> +1-555-555-5555</a>
				<a href="mailto:support@socialshifu.com"><i class="fa fa-envelope" aria-hidden="true"></i> support@myengname.com</a>
			</p>
      </article>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="contact-head red-header">
				<ruby><center><h2>联系我们</h2></center></ruby>
			</div>
		<form action="contactmailer.html" method="post" name="cform" id="cform" class="contact-form">
			<div class="col-md-12">
				<input name="name" id="name" type="text" class="input-lg" placeholder="姓名">
			</div>
			<div class="col-md-12">
				<input name="email" class="input-lg" id="email" type="email" placeholder="邮箱地址">
			</div>
			<div class="col-md-12">
				<textarea name="comments" class="input-lg" id="comments" rows="7" placeholder="信息"></textarea>
			</div>
			<div class="clearfix"></div>
				<center><button name="Submit Button" class="submit-button2" type="submit" value="发送"><ruby>发送</ruby></button></center>
		</form>
    </div>
    <div class="clearfix"></div>
    <!-- contat-from-wrapper --> 
  </div>
</main>
<?php include 'includes/footer.php'; ?>