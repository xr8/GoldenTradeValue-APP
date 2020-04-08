<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>PideBoletos.com/ user/ check</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->

  </head>
  <body class="text-center">
    
    <div class="container">
	    <div class="row">
    	    <div class="col-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-radius: 16px;">
                        <div class="well profile col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                <figure>
                                     <img src="https://via.placeholder.com/150" alt="" class="img-circle" style="width:150px;" id="user-img">
                                </figure>
                                <h5 style="text-align:center;" class="text-uppercase"><strong id="user-name"><?php echo $user['Firstname']." ".$user['Secondname'];?></strong></h5>
                                <p style="text-align:center;font-size: smaller;" id="user-frid">FBT000000213 </p>
                                <p style="text-align:center;font-size: smaller;overflow-wrap: break-word;" id="user-email">arunkumarperumal8791@gmail.com </p>
                                <p style="text-align:center;font-size: smaller;"><strong>A/C status: </strong><span class="tags" id="user-status">Active</span></p>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 divider text-center"></div>
                                <p style="text-align:center;font-size: smaller;"><strong>Job role</strong></p>
                                <p style="text-align:center;font-size: smaller;" id="user-role">Software Engineer</p>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 divider text-center"></div>
                                    <div class="col-lg-6 left" style="text-align:center;overflow-wrap: break-word;">
                                        <h4><p style="text-align: center;"><strong id="user-globe-rank">245 </strong></p></h4>           
                                        <p><small class="label label-success">Global Ranking</small></p>
                                        <!--<button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Follow </button>-->
                                    </div>
                                    <div class=" col-lg-6 left" style="text-align:center;overflow-wrap: break-word;">
                                        <h4><p style="text-align: center;"><strong id="user-college-rank">245 </strong></p></h4>                   
                                        <p> <small class="label label-warning">College Ranking</small></p>
                                        <!-- <button class="btn btn-info btn-block"><span class="fa fa-user"></span> View Profile </button>-->
                                    </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>    
            </div>
	    </div>
    </div>

    <div class="container">
        <div class="row">
        <div class="col-12">
                <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
                <h6 class="mt-5 mb-3 text-muted"><?php echo $sha1; ?></h6>
            </div>
        </div>
    </div>    

</body>
</html>
