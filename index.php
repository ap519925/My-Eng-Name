<?php
// Include header and footer
include 'includes/header.php';
?>
<!-- main -->
<main role="main-home-wrapper" class="container">
  <div class="row">
    <main role="main-inner-wrapper" class="container">
      <div class="row">
        <article role="pge-title-content">
          <header>
            <div class="row row-centered">
              <ruby><h2 class="main-header">我想要一个专属的英文名字</h2></ruby>
            </div>
            <div class="row row-centered">
              <ruby class="sub-header">我是</ruby>
            </div>
          </header>
        </article>
        <div class="clearfix"></div>
        <!-- thumbnails -->
        <div class="thumbnails-pan"> 
					<a href="#formscroll">
          <section class="col-xs-12 col-sm-12 col-md-3 col-lg-3 type-buttons" id="baby_button">
            <h2 class="options-header"><ruby>宝宝</ruby></h2>
            <figure class="figure-choices" style="padding:42px;">
              <center><img src="images/baby.png" title="baby names" width="120"></center>
              <figcaption>
                <h3>宝宝</h3>
                <h5>Babies (or their parents :)) Click Here</h5>
              </figcaption>
            </figure>
          </section>
          </a> 
					<a href="#formscroll">
          <section class="col-xs-12 col-sm-12 col-md-3 col-lg-3 type-buttons" id="student_button">
            <h2 class="options-header"><ruby>学生</ruby></h2>
            <figure class="figure-choices" style="padding:50px;">
              <center>
                <img src="images/students.png" title="students" width="160">
              </center>
              <figcaption>
                <h3><ruby>学生</ruby></h3>
                <h5>Students Click Here</h5>
              </figcaption>
            </figure>
          </section>
          </a> 
					<a href="#formscroll">
          <section class="col-xs-12 col-sm-12 col-md-3 col-lg-3 type-buttons" id="professional_button">
            <h2 class="options-header"><ruby>白领/老板/商人</ruby></h2>
            <figure class="figure-choices" style="padding:55px;">
              <center><img src="images/workers.png" title="students" width="160"></center>
              <figcaption>
                <h3><ruby>白领/老板/商人</ruby></h3>
                <h5>Working Professionals Click Here</h5>
              </figcaption>
            </figure>
          </section>
          </a> 
					<a href="#formscroll">
          <section class="col-xs-12 col-sm-12 col-md-3 col-lg-3 type-buttons" id="others_button">
            <h2 class="options-header"><ruby>前面三个都不是哦</ruby></h2>
            <figure class="figure-choices" style="padding:55px;">
              <center>
                <img src="images/idfkpeople.png" title="students" width="180">
              </center>
              <figcaption>
                <h3><ruby>前面三个都不是哦</ruby></h3>
                <h5>None of the Above Click Here</h5>
              </figcaption>
            </figure>
          </section>
          </a> 
				</div>
        <!-- thumbnails --> 
      </div>
    </main>
    <div id="formscroll"></div>
    <div id="people-types">
      <div class="engname-form type-div" id="payment1">
        <h2 class="center-head modal-header">
          <ruby class="options-header">名字</ruby>
        </h2>
        <div class="form-payment">
          <div class="row-centered">
            <div class="col-md-12 payment-choice margin-bottom">
              <label style="display:block;"><ruby>Your English Name!</ruby></label>
              <button type="button" class="wechatpay" id="##">
								<i class="fa fa-wechat fa-3x payment-choices" aria-hidden="true">
									<center><ruby>English Name Goes Here</ruby></center>
								</i>
							</button>
            </div>
          </div>
        </div>
      </div>
      <div class="engname-form type-div" id="baby">
        <h2 class="center-head modal-header"><ruby class="options-header">宝宝</ruby></h2>
        <form action="random_name.php" method="post" enctype="multipart/form-data" class="form-padding" id="baby-form">
          <input type="hidden" name="form_type" value="baby">
          <div class="row">
            <div class="col-md-8  margin-bottom">
              <label><ruby>中文名字</ruby></label>
              <input type="text" class="form-control input-lg" placeholder="输入你的宝宝中文名字"/>
            </div>
            <div class="col-md-4 gender-choice margin-bottom">
                          <label for="gender" style="display:block;"><ruby>性别</ruby></label>
                          <select class="cs-select cs-skin-elastic" name="gender" id="gender" size="1">
                              <span class="caret"></span>
                              <option value="male"><i class="fa fa-male" aria-hidden="true"></i><ruby>男</ruby></option>
                              <option value="female"><i class="fa fa-female" aria-hidden="true"></i><ruby>女</ruby></option>
                          </select>
                        </div>
                      </div>
                      <div class="row margin-bottom">
                        <div class="col-md-6 margin-bottom">
                          <label><ruby>生日</ruby></label>
                          <input type="text" id="datepicker1" class="form-control input-lg" placeholder="输入你的宝宝生日"/>
                        </div>
                        <div class="col-md-6 margin-bottom">
                          <label><ruby>我想要一个XX国家的名字</ruby></label>
                          <select class="cs-select cs-skin-elastic" name="country">
                            <span class="caret"></span>
                            <option value="us" data-class="flag-usa">
            									<ruby>美国</ruby>
                            </option>
                            <option value="ca" data-class="flag-canada">
            									<ruby>加国</ruby>
                            </option>
                            <option value="gb" data-class="flag-england">
            									<ruby>英国</ruby>
                            </option>
                            <option value="au" data-class="flag-australia">
            									<ruby>澳洲</ruby>
                            </option>
                          </select>
                        </div>
                      </div>
          <!-- Temporarily commented out email and photo upload
          <div class="row margin-bottom">
            <div class="col-md-8 margin-bottom">
              <label><ruby>邮箱地址</ruby></label>
              <input type="email" class="form-control input-lg" placeholder="输入你的邮箱地址l"/>
            </div>
            <div class="col-md-4 margin-bottom">
              <label><ruby>上传您的照片</ruby></label>
              <input type="file" id="uploadfiles" multiple/>
            </div>
          </div>
          -->
          <h2 class="center-head">
            <ruby class="options-header" style="background:none;">请选择五个适合您的特征：</ruby>
          </h2>
          <hr>
          <div class="container-fluid">
            <div class="row row-centered trait-choice">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <button type="button" id="##">
                    <i class="fa fa-graduation-cap fa-2x trait-choices" aria-hidden="true"></i>
                        <center><ruby>聪明</ruby></center>
                </button>
                <button type="button" id="##">
                    <i class="fa fa-gavel fa-2x trait-choices" aria-hidden="true"></i>
                    <center><ruby>具有正义感的</ruby></center>
                </button>
                <button type="button" id="##">
                    <i class="fa-solid fa-face-smile fa-2x trait-choices" aria-hidden="true"></i>
                    <center><ruby>热心的</ruby></center>
                </button>
                <button type="button" id="##">
                    <i class="fa fa-book fa-2x trait-choices" aria-hidden="true"></i>
                    <center><ruby>实干的</ruby></center>
                </button>
                <button type="button" id="##">
                    <i class="fa fa-heart fa-2x trait-choices" aria-hidden="true"></i>
                    <center><ruby>浪漫的</ruby></center>
                </button>
                <button type="button" id="##">
                    <i class="fa-solid fa-lightbulb fa-2x trait-choices" aria-hidden="true"></i>
                    <center><ruby>博学多才的</ruby></center>
                </button>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <button type="button" id="##">
									<i class="fa fa-eye fa-2x trait-choices" aria-hidden="true">
										<center><ruby>谨慎的</ruby></center>
									</i>
								</button>
                <button type="button" id="##">
									<i class="fa fa-shield fa-2x trait-choices" aria-hidden="true">
										<center><ruby>勇敢的</ruby></center>
									</i>
								</button>
                <button type="button" id="##">
									<i class="fa fa-users fa-2x trait-choices" aria-hidden="true">
										<center><ruby>有领导才能的</ruby></center>
									</i>
								</button>
                <button type="button" id="##">
									<i class="fa-solid fa-peace fa-2x trait-choices" aria-hidden="true">
										<center><ruby>和平主义者</ruby></center>
									</i>
								</button>
                <button type="button" id="##">
									<i class="fa fa-leaf fa-2x trait-choices" aria-hidden="true">
										<center><ruby>温柔的</ruby></center>
									</i>
								</button>
                <button type="button" id="##">
									<i class="fa-solid fa-face-grin-tears fa-2x trait-choices" aria-hidden="true">
										<center><ruby>幽默的</ruby></center>
									</i>
								</button>
              </div>
            </div>
          </div>
          <div class="row row-centered"> 
						<a href="#formscroll">
						 <button type="submit" value="Generate" class="submit-button type-buttons">
							<ruby>立刻获得你的英文名字!
</ruby>
            </button>
            </a> 
					</div>
        </form>
      </div>
      <div class="engname-form type-div" id="payment2">
       <h2 class="center-head modal-header">
          <ruby class="options-header">名字</ruby>
        </h2>
        <div class="form-payment">
          <div class="row-centered">
            <div class="col-md-12 payment-choice margin-bottom">
              <label style="display:block;"><ruby>Your English Name!</ruby></label>
              <button type="button" class="wechatpay" id="##">
								<i class="fa fa-wechat fa-3x payment-choices" aria-hidden="true">
									<center><ruby>English Name Goes Here</ruby></center>
								</i>
							</button>
            </div>
          </div>
        </div>
      </div>
      <div class="engname-form type-div" id="student">
        <h2 class="center-head modal-header"><ruby class="options-header">学生</ruby></h2>
        <form action="random_name.php" method="post" enctype="multipart/form-data" class="form-padding" id="student-form">
          <input type="hidden" name="form_type" value="student">
          <div class="row">
            <div class="col-md-8  margin-bottom">
              <label>
                <ruby>中文名字</ruby>
              </label>
              <input type="text" class="form-control input-lg" placeholder="输入你的中文名字"/>
            </div>
            <div class="col-md-4 gender-choice margin-bottom">
                          <label for="gender" style="display:block;">
                            <ruby>性别</ruby>
                          </label>
                           <select class="cs-select cs-skin-elastic" name="gender" id="gender" size="1">
                           <span class="caret"></span>
                            <option value="male"><ruby>男</ruby></option>
                            <option value="female"><ruby>女</ruby></option>
                          </select>
                        </div>
                      </div>
                      <div class="row margin-bottom">
                        <div class="col-md-6 margin-bottom">
                          <label>
                            <ruby>生日</ruby>
                          </label>
                          <input type="text" id="datepicker2" class="form-control input-lg" placeholder="输入你的生日"/>
                        </div>
                        <div class="col-md-6 margin-bottom">
                          <label>
                            <ruby>我想要一个XX国家的名字</ruby>
                          </label>
                          <select class="cs-select cs-skin-elastic" name="country">
                            <span class="caret"></span>
                            <option value="us" data-class="flag-usa">
                            <ruby>美国</ruby>
                            </option>
                            <option value="ca" data-class="flag-canada">
                            <ruby>加国</ruby>
                            </option>
                            <option value="gb" data-class="flag-england">
                            <ruby>英国</ruby>
                            </option>
                            <option value="au" data-class="flag-australia">
                            <ruby>澳洲</ruby>
                            </option>
                          </select>
                        </div>
                      </div>
          <!-- Temporarily commented out email and photo upload
          <div class="row margin-bottom">
            <div class="col-md-8 margin-bottom">
              <label>
                <ruby>邮箱地址</ruby>
              </label>
              <input type="email" class="form-control input-lg" placeholder="输入你的邮箱地址l"/>
            </div>
            <div class="col-md-4 margin-bottom">
              <label>
                <ruby>上传您的照片</ruby>
              </label>
              <input type="file" id="uploadfiles" multiple/>
            </div>
          </div>
          -->
          <h2 class="center-head">
            <ruby class="options-header" style="background:none;">请选择五个适合您的特征：</ruby>
          </h2>
          <hr>
          <div class="container-fluid">
            <div class="row row-centered trait-choice">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <button type="button" id="##">
                  <i class="fa fa-graduation-cap fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>聪明</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa fa-gavel fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>具有正义感的</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa-solid fa-face-smile fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>热心的</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa fa-book fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>实干的</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa fa-heart fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>浪漫的</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa-solid fa-lightbulb fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>博学多才的</ruby></center>
                  </i>
                </button>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <button type="button" id="##">
                  <i class="fa fa-eye fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>谨慎的</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa fa-shield fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>勇敢的</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa fa-users fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>有领导才能的</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa-solid fa-peace fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>和平主义者</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa fa-leaf fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>温柔的</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa-solid fa-face-grin-tears fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>幽默的</ruby></center>
                  </i>
                </button>
              </div>
            </div>
          </div>
          <div class="row row-centered">
            <button type="submit" class="submit-button">
      <ruby>立刻获得你的英文名字!</ruby>
            </button>
          </div>
        </form>
      </div>
      <div class="engname-form type-div" id="payment3">
        <h2 class="center-head modal-header">
          <ruby class="options-header">名字</ruby>
        </h2>
        <div class="form-payment">
          <div class="row-centered">
            <div class="col-md-12 payment-choice margin-bottom">
              <label style="display:block;"><ruby>Your English Name!</ruby></label>
              <button type="button" class="wechatpay" id="##">
								<i class="fa fa-wechat fa-3x payment-choices" aria-hidden="true">
									<center><ruby>English Name Goes Here</ruby></center>
								</i>
							</button>
            </div>
          </div>
        </div>
      </div>
      <div class="engname-form type-div" id="professional">
        <h2 class="center-head modal-header">
          <ruby class="options-header">白领/老板/商人</ruby>
        </h2>
      <form action="random_name.php" method="post" enctype="multipart/form-data" class="form-padding" id="professional-form">
          <input type="hidden" name="form_type" value="professional">
          <div class="row">
            <div class="col-md-8  margin-bottom">
              <label>
                <ruby>中文名字</ruby>
              </label>
              <input type="text" class="form-control input-lg" placeholder="输入你的中文名字"/>
            </div>
            <div class="col-md-4 gender-choice margin-bottom">
                          <label for="gender" style="display:block;">
                            <ruby>性别</ruby>
                          </label>
                          <select class="cs-select cs-skin-elastic" name="gender" id="gender" size="1">
                           <span class="caret"></span>
                            <option value="male"><ruby>男</ruby><i class="fa-solid fa-mars-stroke-up"></i></option>
                            <option value="female"><ruby>女</ruby><i class="fa-solid fa-venus"></i></option>
                          </select>
                        </div>
                      </div>
                      <div class="row margin-bottom">
                        <div class="col-md-6 margin-bottom">
                          <label>
                            <ruby>生日</ruby>
                          </label>
                          <input type="text" id="datepicker3" class="form-control input-lg" placeholder="输入你的生日"/>
                        </div>
                        <div class="col-md-6 margin-bottom">
                          <label>
                            <ruby>我想要一个XX国家的名字</ruby>
                          </label>
                          <select class="cs-select cs-skin-elastic" name="country">
                            <span class="caret"></span>
                            <option value="us" data-class="flag-usa">
                            <ruby>美国</ruby>
                            </option>
                            <option value="ca" data-class="flag-canada">
                            <ruby>加国</ruby>
                            </option>
                            <option value="gb" data-class="flag-england">
                            <ruby>英国</ruby>
                            </option>
                            <option value="au" data-class="flag-australia">
                            <ruby>澳洲</ruby>
                            </option>
                          </select>
                        </div>
                      </div>
          <!-- Temporarily commented out email and photo upload
          <div class="row margin-bottom">
            <div class="col-md-8 margin-bottom">
              <label>
                <ruby>邮箱地址</ruby>
              </label>
              <input type="email" class="form-control input-lg" placeholder="输入你的邮箱地址l"/>
            </div>
            <div class="col-md-4 margin-bottom">
              <label>
                <ruby>上传您的照片</ruby>
              </label>
              <input type="file" id="uploadfiles" multiple/>
            </div>
          </div>
          -->
          <h2 class="center-head">
            <ruby class="options-header" style="background:none;">请选择五个适合您的特征：</ruby>
          </h2>
          <hr>
          <div class="container-fluid">
            <div class="row row-centered trait-choice">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
               <button type="button" id="##">
                  <i class="fa fa-graduation-cap fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>聪明</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa fa-gavel fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>具有正义感的</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa-solid fa-face-smile fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>热心的</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa fa-book fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>实干的</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa fa-heart fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>浪漫的</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa-solid fa-lightbulb fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>博学多才的</ruby></center>
                  </i>
                </button>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <button type="button" id="##">
                  <i class="fa fa-eye fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>谨慎的</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa fa-shield fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>勇敢的</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa fa-users fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>有领导才能的</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa-solid fa-peace fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>和平主义者</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa fa-leaf fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>温柔的</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa-solid fa-face-grin-tears fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>幽默的</ruby></center>
                  </i>
                </button>
              </div>
            </div>
          </div>
          <div class="row row-centered">
            <button type="submit" value="Generate" class="submit-button type-buttons">
      <ruby>立刻获得你的英文名字!</ruby>
            </button>
          </div>
        </form>
      </div>
      <div class="engname-form type-div" id="payment4">
        <h2 class="center-head modal-header">
          <ruby class="options-header">名字</ruby>
        </h2>
        <div class="form-payment">
          <div class="row-centered">
            <div class="col-md-12 payment-choice margin-bottom">
              <label style="display:block;"><ruby>Your English Name!</ruby></label>
              <button type="button" class="wechatpay" id="##">
								<i class="fa fa-wechat fa-3x payment-choices" aria-hidden="true">
									<center><ruby></ruby></center>
								</i>
							</button>
            </div>
          </div>
        </div>
      </div>
      <div class="engname-form type-div" id="others">
        <h2 class="center-head modal-header">
          <ruby class="options-header">前面三个都不是哦</ruby>
        </h2>
        <form action="random_name.php" method="post" enctype="multipart/form-data" class="form-padding">
          <div class="row">
            <div class="col-md-8  margin-bottom">
              <label>
                <ruby>中文名字</ruby>
              </label>
              <input type="text" class="form-control input-lg" placeholder="输入你的中文名字"/>
            </div>
            <div class="col-md-4 gender-choice margin-bottom">
              <label for="gender" style="display:block;">
                <ruby>性别</ruby>
              </label>
              <select class="cs-select cs-skin-elastic" name="gender" id="gender" size="1">
                <span class="caret"></span>
                  <option value="male"><ruby>男</ruby></option>
                  <option value="female"><ruby>女</ruby></option>
              </select>
            </div>
          </div>
          <div class="row margin-bottom">
            <div class="col-md-6 margin-bottom">
              <label><ruby>生日</ruby></label>
              <input type="text" id="datepicker4" class="form-control input-lg" placeholder="输入你的生日"/>
            </div>
             <div class="col-md-6 margin-bottom">
                          <label>
                            <ruby>我想要一个XX国家的名字</ruby>
                          </label>
                          <select class="cs-select cs-skin-elastic" name="country">
                            <span class="caret"></span>
                            <option value="us" data-class="flag-usa">
                            <ruby>美国</ruby>
                            </option>
                            <option value="ca" data-class="flag-canada">
                            <ruby>加国</ruby>
                            </option>
                            <option value="gb" data-class="flag-england">
                            <ruby>英国</ruby>
                            </option>
                            <option value="au" data-class="flag-australia">
                            <ruby>澳洲</ruby>
                            </option>
                          </select>
                        </div>
                      </div>
          <!-- Temporarily commented out email and photo upload
          <div class="row margin-bottom">
            <div class="col-md-8 margin-bottom">
              <label>
                <ruby>邮箱地址</ruby>
              </label>
              <input type="email" class="form-control input-lg" placeholder="输入你的邮箱地址l"/>
            </div>
            <div class="col-md-4 margin-bottom">
              <label>
                <ruby>上传您的照片</ruby>
              </label>
              <input type="file" id="uploadfiles" multiple/>
            </div>
          </div>
          -->
          <h2 class="center-head">
            <ruby class="options-header" style="background:none;">请选择五个适合您的特征：</ruby>
          </h2>
          <hr>
          <div class="container-fluid">
            <div class="row row-centered trait-choice">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <button type="button" id="##">
                  <i class="fa fa-graduation-cap fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>聪明</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa fa-gavel fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>具有正义感的</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa-solid fa-face-smile fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>热心的</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa fa-book fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>实干的</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa fa-heart fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>浪漫的</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa-solid fa-lightbulb fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>博学多才的</ruby></center>
                  </i>
                </button>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <button type="button" id="##">
                  <i class="fa fa-eye fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>谨慎的</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa fa-shield fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>勇敢的</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa fa-users fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>有领导才能的</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa-solid fa-peace fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>和平主义者</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa fa-leaf fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>温柔的</ruby></center>
                  </i>
                </button>
                <button type="button" id="##">
                  <i class="fa-solid fa-face-grin-tears fa-2x trait-choices" aria-hidden="true">
                    <center><ruby>幽默的</ruby></center>
                  </i>
                </button>
              </div>
            </div>
          </div>
          <div class="row row-centered">
            <button type="submit" value="Generate" class="submit-button type-buttons">
      <ruby>立刻获得你的英文名字!</ruby>
            </button>
          </div>
        </form>
        
      </div>
    </div>
    <div class="why-choose-us container-fluid">
      <article class="about-content">
        <h2 class="red-header"><ruby>为什么选择我们的服务</ruby></h2>
        <ruby>
          <p class="red-paragraph"> 我们中国人常说：“先天不足，后天来补。”所以，在父母帮我们取名字时，都带着他们的期望和寄托。我们中国人信风水，算命，八字和五行，所有的这些预测都是为了有好的未来。因此，我们非常清楚名字对一个人一生的重要性，取名不应该是随随便便的或信手拈来的。我们的团队致力于提供最高质量和最优质的服务，我们有着超高的工作热情和严谨的工作态度，以保证您所得到的名字是最适合您的要求的。 </p>
        </ruby>
        <ruby>
          <p class="red-paragraph">MyEngName 提供适用于不同“身份”的人群不同的选择，并且我们根据您的中文名字、性别、生日、您想要的名字所属国家、五个性格特征，精挑细选出最适合您的名字。另外，我们的12个性格选项是根据伟大的心理学理论——九型人格學（Enneagram）而延伸而来的，最大程度上提供高质量的选择范围。
            最后值得一提的是，我们秉持着认真负责的工作态度，决不会将您的个人信息泄露于他人。 </p>
        </ruby>
      </article>
    </div>
    <div class="clearfix"></div>
    <h2 class="center-head black-header"><ruby>我们的客户说</ruby></h2>
    <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 grid">
      <ul class="grid-lod effect-2" id="grid">
        <li>
          <figure class="effect-oscar"> <img src="images/home-images/fengshiyutestimonial.jpg" alt="" class="img-responsive"/>
            <figcaption>
              <h2>Feng Shiyu - <span>Anthony</span></h2>
              <p><ruby class="ruby-test"><strong>他说:</strong></ruby></p>
              <p><ruby>我很喜欢这个网站，名字对于留学生来说真的很重要。我很喜欢自己现在的英文名字，谢谢你们！</ruby></p>
            </figcaption>
          </figure>
        </li>
      </ul>
    </section>
    <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 grid">
      <ul class="grid-lod effect-2" id="grid">
        <li>
          <figure class="effect-oscar"> <img src="images/home-images/zhaoanqi.jpg" alt="" class="img-responsive"/>
            <figcaption>
              <h2>Zhao Anqi - <span>Alex</span></h2>
              <p><ruby class="ruby-test">她说:</ruby></p>
              <p>
                <ruby>我以前的英文名字是Kingsley，因为我想成为王一样的男人。但是，后来我发现，有些词是不能作为名字来用的，也因此被好朋友嘲笑。现在我的英文名字是Alex,我很喜欢。</ruby>
							</p>
            </figcaption>
          </figure>
        </li>
      </ul>
    </section>
    <div class="clearfix"></div>
  </div>
</main>
<!-- footer -->
<footer role="footer"> 
  <!-- nav -->
  <nav role="footer-nav">
    <ul>
      <li><a href="index.html" title="Work">
        <ruby>首页</ruby>
        </a></li>
      <li><a href="contact.html" title="Contact">
        <ruby>联系我们</ruby>
        </a></li>
    </ul>
  </nav>
  <!-- nav -->
  <ul role="social-icons">
    <li><a href="#"><i class="fa fa-weibo" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-wechat" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-tencent-weibo" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-qq" aria-hidden="true"></i></a></li>
  </ul>
</footer>
<?php
// Include header and footer
include 'includes/footer.php';
?>



