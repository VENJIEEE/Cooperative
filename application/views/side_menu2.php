<div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
		<?php
				$location = $this->uri->segment(1); 
			?>
      <br>
        <span class="glyphicon glyphicon-user"></span>
        <h1 style="color:white;" > &nbsp <?php $user=$this->session->userdata('username'); echo $user; ?></h1>
      <div>
        <?php 
        foreach ($customer as $row)
        {   
            echo '<label style="color:white;" > &nbsp&nbsp&nbsp&nbsp Name: '.$row->first_name.' '.$row->last_name.'</label> ';
            echo '<br><label style="color:white;">&nbsp&nbsp&nbsp&nbsp Email: '.$row->email.'</label>';
        }
        ?>
      </div>
	 <!--#############################################dash################################################################################################-->
        <li class="nav-item " data-toggle="tooltip" data-placement="right" title="Dashboard" >
          <a class="nav-link " href="<?php echo base_url() ?>pos_con/pos">
            <i class="fa fa-table"></i><span class="nav-link-text">Buy Now</span>
          </a>
        </li>

        <li class="nav-item <?php if ($location === 'dash') {echo 'active-link';}?>" data-toggle="tooltip" data-placement="right" title="Dashboard" >
          <a class="nav-link <?php if ($location === 'dash') {echo 'active-text';}?>" href="<?php echo base_url() ?>pages2/dash">
            <i class="fa fa-table"></i><span class="nav-link-text">My Purchases</span>
          </a>
        </li>

				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="logout">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
		
		  
		 
		</li>
      </ul>
		
	
 
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
         
	    </li>
		
	   </ul>
    </div>
  </nav>
  
  