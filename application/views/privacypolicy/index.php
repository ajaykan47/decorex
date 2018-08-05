<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?> 
                <div class="content">
                    <div class="container">
                         <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <ul class="breadcrumb">
                            <li><a href="<?php echo base_url();?>">Home</a></li>
                            <li class="active"><?php if(!empty($Privacycontent[0]->head_title)){echo $Privacycontent[0]->head_title;}?></li>
                        </ul>
                    </div>
                </div>
                    </div>
                </div>
        <!--banner-->

        <main class="main">  
            <div class="container about-top">
                <div class="row sec-mar flx-element">
                    <div class="col-md-12 col-sm-12 abt-left">
                        
                       <?php if(!empty($Privacycontent[0]->head_descr)){echo $Privacycontent[0]->head_descr;}?>
                    </div>
                    <!--left-->

                    
                </div>    
            </div>
            <!--about top-->
            
        </main>
        <!--main-->
 