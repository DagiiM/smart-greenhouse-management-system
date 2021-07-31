<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<title>{{config('app.name')}}</title>
</head>
<body>
<div class="container" style="padding-top:20px">

  <h4 style="text-align:center">
    <img alt="loading" src="{{asset('../img/loader.gif')}}"/>
    Let's Register Our System
  </h4>

  <div class="card" style="margin:2%;font-size:10px">

    <div class="card-body">
            <form method="post" action="{{route('systems.store')}}" enctype="multipart/form-data" style="width:100%;text-align:center">
                <div class="row">
                  <div class="col">
                        <input  class="form-control col-lg-12 col-md-12" style="margin-bottom:5px;width:100%;text-align:center" type="text" name="application_name" placeholder="Application Name" required>
                        </div>
                        <div class="col">
                        <input  class="form-control col-lg-12 col-md-12" style="margin-bottom:5px;width:100%;text-align:center" type="text" name="vision" placeholder="vision" required>
                      </div>
                       </div>
                       <div class="row">
                         <div class="col">
                        <input class="form-control col-lg-12 col-md-12" style="margin-bottom:5px;width:100%;text-align:center" type="text" name="mission" placeholder="mission" required>
                      </div>
                      <div class="col">
                        <input  class="form-control col-lg-12 col-md-12" style="margin-bottom:5px;width:100%;text-align:center" type="text" name="values" placeholder="values" required>
                      </div>
                       </div>

                        <input  class="form-control col-lg-12 col-md-12" style="margin-bottom:5px;width:100%;text-align:center" type="text" name="description" placeholder="description" required>
                                            <div class="col">
                          <input  class="form-control col-lg-12 col-md-12" style="margin-bottom:5px;width:100%;text-align:center" type="email" name="email" placeholder="Enter System Email" required>
                        </div>
                         </div>

                         </div>

                        <button type="submit" class="btn btn-primary" style="width:100%">
                            Continue
                            <svg class="w-6 h-6" height="30px" width="30px" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </button>

                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            </form> <!-- /form -->
          </div>
        </div>
        </div> <!-- ./container -->
      </body>
</html>
