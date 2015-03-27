<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class='container'>
    <div class='row'><div class='col-md-12'><br></div></div>
    <div class='row'>  
      <div class='col-md-12'>
        <div class="panel panel-default">
          <div class="panel-heading">
            <a href="snapshot.php" class="btn btn-info margin-left-15" role="button">Back</a>
            <span class="title pad-left-15">Jennifer Ash's Snapshot</span>
          </div>
          <div class="panel-body">
            <div class='row'>
              <div class='col-md-12'>
                  <span class='title bold'>Upgrade Eligibility</span>
              </div>
            </div>
              <table class="table margin-top-15">
                <thead class='bold'>
                  <tr>
                    <td class='col-md-2'>Contract Ends</td>
                    <td class='col-md-2'>CTN</td>
                    <td class='col-md-2'>Standard</td>
                    <td class='col-md-2'>Early</td>
                    <td class='col-md-2'>Installment</td>
                    <td class='col-md-2'>Shared</td>
                  </tr>
                </thead>
                <tbody>
                <tr>
                    <td>03/20/2015</td>
                    <td>231-620-0919</td>
                    <td>
                        <span class='glyphicon glyphicon-remove font-red'>
                        </span><span class='sub-title bold'> 08/28/2015</span><br>
                        <span class='text lighter'>This line is not eligible for an upgrade due to a recent upgrade and/or activation.  An upgrade amy be available on 8/28/2015.</span>
                    </td>
                     <td>
                        <span class='glyphicon glyphicon-ok font-green'>
                        </span><span class='sub-title bold'></span><br>
                        <span class='text lighter'>This line is early upgrade eligible.  This line may be eligible for greater discount on 08/28/2015.</span>
                    </td>
                    <td>
                        <span class='glyphicon glyphicon-ok font-green'>
                        </span><span class='sub-title bold'></span><br>
                        <span class='text lighter'>This line is installment upgrade eligible.</span>
                    </td>
                    <td>
                        <span class='glyphicon glyphicon-remove font-red'>
                        </span><span class='sub-title bold'></span><br>
                        <span class='text lighter'>This line is ineligible for a shared upgrade due to no upgrade eligible lines on the account.</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            
              </div>
            </div>
              
           </div>
          </div>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>