<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <title></title>
   <meta name="description" content="" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <link rel="stylesheet" href="../assets/css/bootstrap.4.4.min.css" />

   <style>
      /* html,
      body {
         background-color: #F0F0F0;
      } */
      /* .scaler {
         position: absolute;
         background-color: blue;
         width: 80%;
         height: 300px;
         transform: skew(5deg, 8deg);
      } */
   </style>
</head>

<body>
   <!--[if lt IE 7]>
      <p class="browsehappy">
        You are using an <strong>outdated</strong> browser. Please
        <a href="#">upgrade your browser</a> to improve your experience.
      </p>
    <![endif]-->
   <?php
   include_once "../../views/partials/header.php";
   ?>
   <main>
      <div class="card text-white bg-primary">
         <img class="card-img-top" src="holder.js/100px180/" alt="">
         <div class="card-body">
            <h4 class="card-title" style="text-align: center;">Add A Blog Post</h4>
         </div>
      </div>
      <div class="container">
         <div class="scaler">

         </div>
         <div class="row d-flex">
            <div class="col-xs-1-12 col-sm-12 col-md-8 col-lg-8 mx-auto " style="max-width:800px;">
               <div class="card border-primary " style="margin-top:50px; border-radius: 8px; ">
                  <div class="card-body" style="border-radius: 8px;">
                     <h4 class="card-title">Title</h4>
                     <form action="" method="post">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="form-group">
                                 <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId" style="border-radius: 10px; background:#dcecf4; height: 3.3rem; border:0">

                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="form-group">
                                 <div class="form-group">
                                    <label for="">Blog Post</label>
                                    <textarea class="form-control border-primary" name="" id="" rows="5" style="border-radius: 10px; background:#dcecf4; border:0"></textarea>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <button type="button" name="" id="" class="btn btn-primary float-right" btn-lg btn-block">
                           Submit Post
                        </button>
                     </form>
                  </div>
               </div>
            </div>
         </div>


      </div>
   </main>
   <script src="../assets/js/jquery.min.js" />
   <script src="../assets/js/bootstrap.min.js" />
  </body>

</html>