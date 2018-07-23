
<!DOCTYPE HTML>
<html>
<head>
<title>Belame</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->
<link href="css/dashboard.css" rel="stylesheet">
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<script src="js/jquery-1.11.1.min.js"></script>
<!--start-smoth-scrolling-->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- //fonts -->
</head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('/test') }}"><h1><img src="images/pop.png" alt="" /></h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<div class="top-search">
				<form class="navbar-form navbar-right">
					<input type="text" class="form-control" placeholder="Search...">
					<input type="submit" value=" ">
				</form>
			</div>  
			<div class="header-top-right">
				<div class="file">
					<a href="{{ url('/upload') }}">Upload</a>
				</div>	
				<div class="signin">
					<a href="{{ route('logout') }}"
					onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                    </form>
					
				</div>
				
				<div class="clearfix"> </div>
			</div>
        </div>
		<div class="clearfix"> </div>
      </div>
    </nav>
		<!-- upload -->
		<div class="upload">
			<!-- container -->
			<div class="container">

			<!-- 	<div class="new-file">
			        <form id="new-file-form" action="#" method="#" @submit.prevent="submitForm">
			            <div class="field is-grouped">
			                <p class="control is-expanded">
			                    <input class="input" type="text" name="name" placeholder="File name" v-model="fileName" required>
			                </p>
			                <div class="file is-info has-name">
			                    <label class="file-label">
			                        <input class="file-input" type="file" ref="file" name="file" @change="addFile()">
			                        <span class="file-cta">
			                            <span class="file-icon">
			                                <i class="fa fa-upload"></i>
			                            </span>
			                            <span class="file-label">
			                                Upload new file
			                            </span>
			                        </span>
			                        <span class="file-name" v-if="attachment.name" v-html="attachment.name"></span>
			                    </label>
			                </div>
			                <p class="control">
			                    <button type="submit" class="button is-primary">
			                        Add new file
			                    </button>
			                </p>
			            </div>
			        </form>
			    </div> -->

		        <div class="row justify-content-center">
		            <div class="card">
		                <div class="card-header"></div>
		 
		                <div class="card-body">
		                    @if ($message = Session::get('success'))
		 
		                        <div class="alert alert-success alert-block">
		 
		                            <button type="button" class="close" data-dismiss="alert">×</button>
		 
		                            <strong>{{ $message }}</strong>
		 
		                        </div>
		 
		                    @endif
		 
		                    @if (count($errors) > 0)
		                        <div class="alert alert-danger">
		                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
		                            <ul>
		                                @foreach ($errors->all() as $error)
		                                    <li>{{ $error }}</li>
		                                @endforeach
		                            </ul>
		                        </div>
		                    @endif
		                    <!-- <form action="{{url('/store')}}" method="post">
								@csrf
								<div class="form-group">
									<label for="title">Title</label>
									<input type="text" name="title" id="title" class="form-control">
								</div>
							</form> -->
		                        <form action="/upload" method="post" enctype="multipart/form-data">
		                            @csrf
		                            <div class="form-group">
		                                <input type="file" class="form-control-file" name="fileToUpload" id="exampleInputFile" aria-describedby="fileHelp">
		                                <small id="fileHelp" class="form-text text-muted">Please upload a valid video file. Size of video should not be more than 200MB.</small>
		                            </div>
		                            <button type="submit" class="btn btn-primary">choose</button>
		                        </form>
		                </div>
		            </div>
		        </div>
		    </div>


			<!-- //container -->
		</div>
		<!-- //upload -->

			<!-- footer -->
			<!-- //footer -->
		<div class="clearfix"> </div>
	<div class="drop-menu">
		<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Regular link</a></li>
		  <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Disabled link</a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another link</a></li>
		</ul>
	</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  </body>
</html>