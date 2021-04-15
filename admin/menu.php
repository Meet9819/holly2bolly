<nav class="navbar navbar-default main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-one" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand nav-brand-custom" href="?id=1">Dashboard</a>
        </div>
        <div id="navbar-one" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-custom">
            <?php include 'inc_connection.php'; ?>
    
         <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registration (General) - <?php echo getcount_cat('General'); ?><span class="caret"></span></a>
        <ul class="dropdown-menu">
           <li><a href="?id=4&form=Artist&cat=General">Artist (<?php echo getcount('Artist','General'); ?>)</a></li>
           <li><a href="?id=4&form=Art Director&cat=General">Art Director (<?php echo getcount('Art Director','General'); ?>)</a></li>
           <li><a href="?id=4&form=Assistant Director&cat=General">Assistant Director (<?php echo getcount('Assistant Director','General'); ?>)</a></li>
           <li><a href="?id=4&form=Cameraman&cat=General">Camera Man (<?php echo getcount('Cameraman','General'); ?>)</a></li>
           <li><a href="?id=4&form=Casting Director&cat=General">Casting Director (<?php echo getcount('Casting Director','General'); ?>)</a></li>
           <li><a href="?id=4&form=Choreographer&cat=General">Choreographer (<?php echo getcount('Choreographer','General'); ?>)</a></li>
           <li><a href="?id=4&form=Director&cat=General">Director (<?php echo getcount('Director','General'); ?>)</a></li>
           <li><a href="?id=4&form=Dress Designer&cat=General">Dress Designer (<?php echo getcount('Dress Designer','General'); ?>)</a></li>
           <li><a href="?id=4&form=Dubbing Artist&cat=General">Dubbing Artist (<?php echo getcount('Dubbing Artist','General'); ?>)</a></li>
           <li><a href="?id=4&form=Editor&cat=General">Editor (<?php echo getcount('Editor','General'); ?>)</a></li>
           <li><a href="?id=4&form=Executive Producer&cat=General">Executive Producer (<?php echo getcount('Executive Producer','General'); ?>)</a></li>
           <li><a href="?id=4&form=Fight Master&cat=General">Fight Master (<?php echo getcount('Fight Master','General'); ?>)</a></li>
           <li><a href="?id=4&form=Hair Dresser&cat=General">Hair Dresser (<?php echo getcount('Hair Dresser','General'); ?>)</a></li>
           <li><a href="?id=4&form=Light Man&cat=General">Light Man (<?php echo getcount('Light Man','General'); ?>)</a></li>
           <li><a href="?id=4&form=Musician&cat=General">Musician (<?php echo getcount('Musician','General'); ?>)</a></li>
           <li><a href="?id=4&form=Music Director&cat=General">Music Director (<?php echo getcount('Music Director','General'); ?>)</a></li>
           <li><a href="?id=4&form=Makeup Man&cat=General">Makeup Man (<?php echo getcount('Makeup Man','General'); ?>)</a></li>
           <li><a href="?id=4&form=Producer&cat=General">Producer(<?php echo getcount('Producer','General'); ?>)</a></li>
           <li><a href="?id=4&form=Singer&cat=General">Singer(<?php echo getcount('Singer','General'); ?>)</a></li>
           <li><a href="?id=4&form=Spot Boy&cat=General">Spot Boy(<?php echo getcount('Spot Boy','General'); ?>)</a></li>
           <li><a href="?id=4&form=Technician&cat=General">Technician(<?php echo getcount('Technician','General'); ?>)</a></li>
           <li><a href="?id=4&form=Writer&cat=General">Writer(<?php echo getcount('Writer','General'); ?>)</a></li>
           <li><a href="?id=4&form=Others&cat=General">Others(<?php echo getcount('Others','General'); ?>)</a></li>
        </ul>
    </li>
         
         <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registration (Silver) - <?php echo getcount_cat('Silver'); ?><span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="?id=4&form=Artist&cat=Silver">Artist (<?php echo getcount('Artist','Silver'); ?>)</a></li>
           <li><a href="?id=4&form=Art Director&cat=Silver">Art Director (<?php echo getcount('Art Director','Silver'); ?>)</a></li>
           <li><a href="?id=4&form=Assistant Director&cat=Silver">Assistant Director (<?php echo getcount('Assistant Director','Silver'); ?>)</a></li>
           <li><a href="?id=4&form=Cameraman&cat=Silver">Camera Man (<?php echo getcount('Cameraman','Silver'); ?>)</a></li>
           <li><a href="?id=4&form=Casting Director&cat=Silver">Casting Director (<?php echo getcount('Casting Director','Silver'); ?>)</a></li>
           <li><a href="?id=4&form=Choreographer&cat=Silver">Choreographer (<?php echo getcount('Choreographer','Silver'); ?>)</a></li>
           <li><a href="?id=4&form=Director&cat=Silver">Director (<?php echo getcount('Director','Silver'); ?>)</a></li>
           <li><a href="?id=4&form=Dress Designer&cat=Silver">Dress Designer (<?php echo getcount('Dress Designer','Silver'); ?>)</a></li>
           <li><a href="?id=4&form=Dubbing Artist&cat=Silver">Dubbing Artist (<?php echo getcount('Dubbing Artist','Silver'); ?>)</a></li>
           <li><a href="?id=4&form=Editor&cat=Silver">Editor (<?php echo getcount('Editor','Silver'); ?>)</a></li>
           <li><a href="?id=4&form=Executive Producer&cat=Silver">Executive Producer (<?php echo getcount('Executive Producer','Silver'); ?>)</a></li>
           <li><a href="?id=4&form=Fight Master&cat=Silver">Fight Master (<?php echo getcount('Fight Master','Silver'); ?>)</a></li>
           <li><a href="?id=4&form=Hair Dresser&cat=Silver">Hair Dresser (<?php echo getcount('Hair Dresser','Silver'); ?>)</a></li>
           <li><a href="?id=4&form=Light Man&cat=Silver">Light Man (<?php echo getcount('Light Man','Silver'); ?>)</a></li>
           <li><a href="?id=4&form=Musician&cat=Silver">Musician (<?php echo getcount('Musician','Silver'); ?>)</a></li>
           <li><a href="?id=4&form=Music Director&cat=Silver">Music Director (<?php echo getcount('Music Director','Silver'); ?>)</a></li>
           <li><a href="?id=4&form=Makeup Man&cat=Silver">Makeup Man (<?php echo getcount('Makeup Man','Silver'); ?>)</a></li>
           <li><a href="?id=4&form=Producer&cat=Silver">Producer(<?php echo getcount('Producer','Silver'); ?>)</a></li>
           <li><a href="?id=4&form=Singer&cat=Silver">Singer(<?php echo getcount('Singer','Silver'); ?>)</a></li>
           <li><a href="?id=4&form=Spot Boy&cat=Silver">Spot Boy(<?php echo getcount('Spot Boy','Silver'); ?>)</a></li>
           <li><a href="?id=4&form=Technician&cat=Silver">Technician(<?php echo getcount('Technician','Silver'); ?>)</a></li>
           <li><a href="?id=4&form=Writer&cat=Silver">Writer(<?php echo getcount('Writer','Silver'); ?>)</a></li>
           <li><a href="?id=4&form=Others&cat=Silver">Others(<?php echo getcount('Others','Silver'); ?>)</a></li>



        </ul>
    </li>
        
         <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registration (Gold) - <?php echo getcount_cat('Gold'); ?><span class="caret"></span></a>
        <ul class="dropdown-menu">           
            <li><a href="?id=4&form=Artist&cat=Gold">Artist (<?php echo getcount('Artist','Gold'); ?>)</a></li>
           <li><a href="?id=4&form=Art Director&cat=Gold">Art Director (<?php echo getcount('Art Director','Gold'); ?>)</a></li>
           <li><a href="?id=4&form=Assistant Director&cat=Gold">Assistant Director (<?php echo getcount('Assistant Director','Gold'); ?>)</a></li>
           <li><a href="?id=4&form=Cameraman&cat=Gold">Camera Man (<?php echo getcount('Cameraman','Gold'); ?>)</a></li>
           <li><a href="?id=4&form=Casting Director&cat=Gold">Casting Director (<?php echo getcount('Casting Director','Gold'); ?>)</a></li>
           <li><a href="?id=4&form=Choreographer&cat=Gold">Choreographer (<?php echo getcount('Choreographer','Gold'); ?>)</a></li>
           <li><a href="?id=4&form=Director&cat=Gold">Director (<?php echo getcount('Director','Gold'); ?>)</a></li>
           <li><a href="?id=4&form=Dress Designer&cat=Gold">Dress Designer (<?php echo getcount('Dress Designer','Gold'); ?>)</a></li>
           <li><a href="?id=4&form=Dubbing Artist&cat=Gold">Dubbing Artist (<?php echo getcount('Dubbing Artist','Gold'); ?>)</a></li>
           <li><a href="?id=4&form=Editor&cat=Gold">Editor (<?php echo getcount('Editor','Gold'); ?>)</a></li>
           <li><a href="?id=4&form=Executive Producer&cat=Gold">Executive Producer (<?php echo getcount('Executive Producer','Gold'); ?>)</a></li>
           <li><a href="?id=4&form=Fight Master&cat=Gold">Fight Master (<?php echo getcount('Fight Master','Gold'); ?>)</a></li>
           <li><a href="?id=4&form=Hair Dresser&cat=Gold">Hair Dresser (<?php echo getcount('Hair Dresser','Gold'); ?>)</a></li>
           <li><a href="?id=4&form=Light Man&cat=Gold">Light Man (<?php echo getcount('Light Man','Gold'); ?>)</a></li>
           <li><a href="?id=4&form=Musician&cat=Gold">Musician (<?php echo getcount('Musician','Gold'); ?>)</a></li>
           <li><a href="?id=4&form=Music Director&cat=Gold">Music Director (<?php echo getcount('Music Director','Gold'); ?>)</a></li>
           <li><a href="?id=4&form=Makeup Man&cat=Gold">Makeup Man (<?php echo getcount('Makeup Man','Gold'); ?>)</a></li>
           <li><a href="?id=4&form=Producer&cat=Gold">Producer(<?php echo getcount('Producer','Gold'); ?>)</a></li>
           <li><a href="?id=4&form=Singer&cat=Gold">Singer(<?php echo getcount('Singer','Gold'); ?>)</a></li>
           <li><a href="?id=4&form=Spot Boy&cat=Gold">Spot Boy(<?php echo getcount('Spot Boy','Gold'); ?>)</a></li>
           <li><a href="?id=4&form=Technician&cat=Gold">Technician(<?php echo getcount('Technician','Gold'); ?>)</a></li>
           <li><a href="?id=4&form=Writer&cat=Gold">Writer(<?php echo getcount('Writer','Gold'); ?>)</a></li>
           <li><a href="?id=4&form=Others&cat=Gold">Others(<?php echo getcount('Others','Gold'); ?>)</a></li>

        </ul>
    </li>
 
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registration (Platinum) - <?php echo getcount_cat('Platinum'); ?><span class="caret"></span></a>
        <ul class="dropdown-menu">                   
            <li><a href="?id=4&form=Artist&cat=Platinum">Artist (<?php echo getcount('Artist','Platinum'); ?>)</a></li>
           <li><a href="?id=4&form=Art Director&cat=Platinum">Art Director (<?php echo getcount('Art Director','Platinum'); ?>)</a></li>
           <li><a href="?id=4&form=Assistant Director&cat=Platinum">Assistant Director (<?php echo getcount('Assistant Director','Platinum'); ?>)</a></li>
           <li><a href="?id=4&form=Cameraman&cat=Platinum">Camera Man (<?php echo getcount('Cameraman','Platinum'); ?>)</a></li>
           <li><a href="?id=4&form=Casting Director&cat=Platinum">Casting Director (<?php echo getcount('Casting Director','Platinum'); ?>)</a></li>
           <li><a href="?id=4&form=Choreographer&cat=Platinum">Choreographer (<?php echo getcount('Choreographer','Platinum'); ?>)</a></li>
           <li><a href="?id=4&form=Director&cat=Platinum">Director (<?php echo getcount('Director','Platinum'); ?>)</a></li>
           <li><a href="?id=4&form=Dress Designer&cat=Platinum">Dress Designer (<?php echo getcount('Dress Designer','Platinum'); ?>)</a></li>
           <li><a href="?id=4&form=Dubbing Artist&cat=Platinum">Dubbing Artist (<?php echo getcount('Dubbing Artist','Platinum'); ?>)</a></li>
           <li><a href="?id=4&form=Editor&cat=Platinum">Editor (<?php echo getcount('Editor','Platinum'); ?>)</a></li>
           <li><a href="?id=4&form=Executive Producer&cat=Platinum">Executive Producer (<?php echo getcount('Executive Producer','Platinum'); ?>)</a></li>
           <li><a href="?id=4&form=Fight Master&cat=Platinum">Fight Master (<?php echo getcount('Fight Master','Platinum'); ?>)</a></li>
           <li><a href="?id=4&form=Hair Dresser&cat=Platinum">Hair Dresser (<?php echo getcount('Hair Dresser','Platinum');?>)</a></li>                       
           <li><a href="?id=4&form=Light Man&cat=Platinum">Light Man (<?php echo getcount('Light Man','Platinum'); ?>)</a></li>
           <li><a href="?id=4&form=Musician&cat=Platinum">Musician (<?php echo getcount('Musician','Platinum'); ?>)</a></li>
           <li><a href="?id=4&form=Music Director&cat=Platinum">Music Director (<?php echo getcount('Music Director','Platinum'); ?>)</a></li>
           <li><a href="?id=4&form=Makeup Man&cat=Platinum">Makeup Man (<?php echo getcount('Makeup Man','Platinum'); ?>)</a></li>
           <li><a href="?id=4&form=Producer&cat=Platinum">Producer(<?php echo getcount('Producer','Platinum'); ?>)</a></li>
           <li><a href="?id=4&form=Singer&cat=Platinum">Singer(<?php echo getcount('Singer','Platinum'); ?>)</a></li>
           <li><a href="?id=4&form=Spot Boy&cat=Platinum">Spot Boy(<?php echo getcount('Spot Boy','Platinum'); ?>)</a></li>
           <li><a href="?id=4&form=Technician&cat=Platinum">Technician(<?php echo getcount('Technician','Platinum'); ?>)</a></li>
           <li><a href="?id=4&form=Writer&cat=Platinum">Writer(<?php echo getcount('Writer','Platinum'); ?>)</a></li>
           <li><a href="?id=4&form=Others&cat=Platinum">Others(<?php echo getcount('Others','Platinum'); ?>)</a></li>
        </ul>
    </li>                
         
          </ul>
        </div>
      </div>
    </nav>





