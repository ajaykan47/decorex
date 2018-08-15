<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?> 
                <div class="content">
                    <div class="container">
                         <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <ul class="breadcrumb">
                            <li><a href="<?php echo base_url();?>">Home</a></li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
                </div>
                    </div>
                </div>
        <!--banner-->

        <main class="main">  
            <div class="container about-top">
                <div class="row sec-mar flx-element">
                    <div class="col-md-8 col-sm-8 abt-left">
                        <h2><?php if(!empty($Aboutcontent[0]->page_title)){echo $Aboutcontent[0]->page_title;}?></h2>
                        <?php if(!empty($Aboutcontent[0]->full_descr)){echo $Aboutcontent[0]->full_descr;}?>
                    </div>
                    <!--left-->

                    <div class="col-md-4 col-sm-4">
                        <?php if(!empty($Aboutcontent[0]->filename)){?>
                            <figure><img src="<?php echo base_url('uploads/page_img/');?><?php if(!empty($Aboutcontent[0]->filename)){echo $Aboutcontent[0]->filename;}?>" alt="<?php echo  $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $Aboutcontent[0]->filename); ?>"></figure>
                       <?php }?>
                    </div>
                </div>    
            </div>
            <!--about top-->

            <div class="bg-soft-gray about-mid sec-padding ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="content-hold">
                                <h2><?php if(!empty($AboutStory[0]->head_title)){echo $AboutStory[0]->head_title;}?></h2>
                                <?php if(!empty($AboutStory[0]->head_descr)){echo $AboutStory[0]->head_descr;}?>
                            </div>
                            <!--content hold-->

                            <div class="count-up-wrp">
                                <?php foreach($Aboutcount as $Aboutcountvalue):
                                ?>
                                <div>
                                    <h2 class="color-brand bm-0"><span class="count"><?php if(!empty($Aboutcountvalue->counting)){echo $Aboutcountvalue->counting;}?></span><?php if(!empty($Aboutcountvalue->icon_class)){echo $Aboutcountvalue->icon_class;}?></h2>
                                    <?php if(!empty($Aboutcountvalue->name)){echo $Aboutcountvalue->name;}?>
                                </div>
                                <?php endforeach ;?>
                                
                            </div>
                            <!--counter wrap-->
                        </div>
                    </div>    
                </div>
            </div>
            <!--about mid-->

            
        </main>
        <!--main-->
 
        