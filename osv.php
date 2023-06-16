<!-- header start -->
<?php 
	include 'header.php';
	?>
	<!-- header end -->
  <div class="jumbotron">
    <h1 class="display-3">OS Information</h1>
    <hr class="my-2">
    <div class="container text-center">
    <?php
        $osName = php_uname('s');
        $osVersion = php_uname('r');
        $osArchitecture = php_uname('m');

        echo "<p><strong>Operating System:</strong> $osName</p>";
        echo "<p><strong>Version:</strong> $osVersion</p>";
        echo "<p><strong>Architecture:</strong> $osArchitecture</p>";
        ?>
        </div>
  </div>
  <!-- overview start-->
  
  <!-- end -->
<div class="container" style="padding:20px;">
  <h2>Operating System Overview</h2>
  Summary view of at least three devices available on the site.
Include links to the description page of your chosen operating system.
Include links to the individual device view for each device.
  <p><strong>Summary:</strong> Description of the <strong>Operating System</strong> All three Devices</p>
  <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
        Summary information about Device 1. Android 
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-parent="#accordion">
        <div class="card-body">
          Operating System: Android <br>
          Version: 5.0 and Above <br>
          <strong>Description: </strong><br> Selecting android to browse this application will be best choice to operating this application. However it is windows base applicaton but all the users requirement has been embeded appropriately.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        Summary information about Device 1. Windows
      </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
        Operating System: Windows <br>
          Version: 10.0 and Above <br>
          <strong>Description: </strong><br> For the best use of this application is windows platfrom. Because overall development environment has been done in windows. So, it is windows base applicaton but all the users requirement has been embeded appropriately.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
        Summary information about Device 1. IOS
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
        Operating System: IOS <br>
          Version: 8.0 and Above <br>
          <strong>Description: </strong><br> For the best use of this application is windows platfrom. But it is web base application and you can use this application simply in IOS too. All the testing has been done to provide best user requirement and user experinces.
        </div>
      </div>
    </div>
  </div>
</div>

