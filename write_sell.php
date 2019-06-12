<head>
  <?php
    include "base.php";
    $major = $_GET['major'];
  ?>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Yeon+Sung&display=swap" rel="stylesheet">
  <!------ Include the above in your HEAD tag ---------->
  <style>
  /* layout.css Style */
  .upload-drop-zone {
    width: 500px;
    height: 200px;
    border-width: 2px;
    margin-bottom: 20px;

  }

  /* skin.css Style*/
  .upload-drop-zone {
    color: #ccc;
    border-style: dashed;
    border-color: #ccc;
    line-height: 200px;
    text-align: center;
  }
  .upload-drop-zone.drop {
    color: #222;
    border-color: #222;

  }



  .image-preview-input {
      position: relative;
      overflow: hidden;
      margin: 0px;
      color: #333;
      background-color: #fff;
      border-color: #ccc;
  }
  .image-preview-input input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
  }
  .image-preview-input-title {
      margin-left:2px;
  }
  .center{
    width:100%;
    margin: 10px 0 10px 0;
  }
  .contentstyle{
    margin-left:10px;
  }
  .changewidth{
    width : 60%;
    float : left;
    padding-bottom:10px;
  }
  .fontheight{
    padding-top: 10px;
  }
  .fontstyleP{
    font-family: 'Yeon Sung', cursive;
    font-size: 20px;
  }
  .makecenter{
    margin:0 auto;
    text-align: center;
  }
  .writebg{
    /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#f2f5f6+0,e3eaed+37,c8d7dc+100;Grey+3D+%234 */
    background: rgb(242,245,246); /* Old browsers */
    background: -moz-linear-gradient(top,  rgba(242,245,246,1) 0%, rgba(227,234,237,1) 37%, rgba(200,215,220,1) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top,  rgba(242,245,246,1) 0%,rgba(227,234,237,1) 37%,rgba(200,215,220,1) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom,  rgba(242,245,246,1) 0%,rgba(227,234,237,1) 37%,rgba(200,215,220,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f2f5f6', endColorstr='#c8d7dc',GradientType=0 ); /* IE6-9 */

  }
  </style>
</head>
<body class="writebg">
  <section >
    <div class="container"> <br />
      <div class="row">
    	  <div class="col-md-12">
			    <div class="panel panel-default">
				    <div class="panel-heading makecenter"><strong><p class="fontstyleP">Upload files</p></strong> <small> </small></div>
				      <div class="panel-body">
                <form enctype="multipart/form-data" name="write_buy" method="POST" action='write_sell_db.php?major=<?php echo"$major"; ?>'>
                  <div class="input-group image-preview center">
                    <input type="file" name ="myfile">
                    <div class="upload-drop-zone center " id="drop-zone">
                      <p class="fontstyleP"> view </p>
                    </div>
                    <br>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label col-form-label-lg fontheight"><p class="fontstyleP">제목</p></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control changewidth"  name ="title">
                    </div>
                  </div>
                  <br> <br> <br> <br>
                  <div class="form-group">
                    <label for="exampleFormControlInput1"  class="col-sm-2 col-form-label col-form-label-lg fontheight"><p class="fontstyleP">책 이름</p></label>
                    <div class="col-sm-10">
                      <input type="text" class ="form-control changewidth" name ="name">
                    </div>
                  </div>
                  <br> <br> <br>
                  <div class="form-group">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label col-form-label-lg fontheight"><p class="fontstyleP">희망가격</p></label>
                    <div class="col-sm-10">
                    <input type="text" class ="form-control changewidth"  name ="hopePrice">
                  </div>
                  <br> <br> <br>
                  <div class="form-group">
                    <label for="exampleFormControlSelect2" class="col-sm-2 col-form-label col-form-label-lg fontheight"><p class="fontstyleP">전공</p></label>
                    <select multiple class="form-control contentstyle" name="catagory">
                      <option value="컴퓨터공학부">컴퓨터공학부</option>
                      <option value="컴퓨터공학부">전기전자통신공학부</option>
                      <option value="컴퓨터공학부">메카트로닉스공학부</option>
                      <option value="컴퓨터공학부">에너지신소재화학공학부</option>
                      <option value="컴퓨터공학부">건축공학부</option>
                      <option value="컴퓨터공학부">기계공학부</option>
                      <option value="컴퓨터공학부">디자인공학부</option>
                      <option value="컴퓨터공학부">산업경영학부</option>
                      <option value="컴퓨터공학부">HRD교양</option>
                      <option value="컴퓨터공학부">일반교양</option>
                      <option value="컴퓨터공학부">자격증 및 기타</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label col-form-label-lg fontheight"><p class="fontstyleP">내용</p></label>
                    <textarea class="form-control contentstyle" rows="5" type="textarea" name="contents"></textarea>
                  </div>
                  <div class="makecenter">
                    <?php
                      echo "<button type='submit' class='btn btn-labeled btn-primary'  onClick='location.href=";
                      echo '"board_sell_home.php?major=';
                      echo "$major";
                      echo '"';
                      echo "'> <span class='btn-label'><i class='glyphicon glyphicon-upload'></i> </span>Upload</button>";
                    ?>
                  </div>
                </form>
              </div>
            </div>
				  </div>
			  </div>
		  </div>
    </div>
	</section>
</body>


<!-- /container -->
