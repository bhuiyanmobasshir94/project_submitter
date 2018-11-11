    
         
            <div class="col-md-9 col-sm-9 col-xs-9 navbar-default">
              <div class="row">
                 <div class="border">
                     <h3 style="text-align:center;color: #0c4da2; font-weight: 600;">PREVIEW WINDOW</h3>
                   
                     <div class="border" id="teacherpreview">
                      <?php 
                         
                         $id = " ";
                         $ccode = " ";
                         
                         function assign($a){
    
                       $sql = "SELECT ID FROM projects WHERE Coursecode ='$a'";

                            $row = json_decode(getJSONFromDB($sql));

                            for ($i=0;$i<sizeof($row);$i++){
                              ?>  
                                <input type="button" class="btn btn-block btn-primary p-lg-left-right" onclick="huda(this.value)" value="<?php echo $row[$i]->ID ?>">
                        <?php }
                               
                            }
                         
                        function preview($a,$b){
       
                            $sql = "SELECT ID, Member, Title, Coursecode, IDs, Tags, Ideas, Prototypelink, Codelink, Prototypedate, Proposaldate, Submissiondate FROM projects WHERE ID ='$a' AND Coursecode = '$b'";

                            $row = json_decode(getJSONFromDB($sql));

                            for ($i=0;$i<sizeof($row);$i++){
                                ?>
                                
                                <div class="border" id="preview-window">
                                    <div class="panel-group wrap" id="bs-collapse" style="margin-bottom: 0px;">
                                 <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#bs-collapse" href="#six">
                                    Project Information </a></h4> 
                                </div>
                                <div id="six" class="panel-collapse collapse">
                                    <div class="panel-body">
                                         <!-- **************************************************** -->
                                         <div class="border preview">
                                              <div class="border"> 
                                                 <h3> Project Title: <?php echo $row[$i]->Title ?></h3><hr/>
                                                 <h5> Course Code: <?php echo $row[$i]->Coursecode ?></h5><hr/>
                                                 <h5> Member: <?php echo $row[$i]->Member ?></h5><hr/>
                                                 <h5> Submitted By:<?php echo $row[$i]->ID ?></h5><hr/>
                                                 <h5> Group ID's:<?php echo $row[$i]->IDs ?></h5>
                                              </div>
                                                  <div class="border"> 
                                                    <div class="row">
                                                       <div class="col-md-5"></div>
                                                         <div class="col-md-7">
                                                            <div class="row" style="margin-bottom: -10px !important;">
                                                                <div class="col-md-8 ">
                                                                   <div class="form-group">
                                                                    <input  class="form-control" style=" height: 43px !important;" id="Marks" name="Marks" placeholder="Marks" type="text" value="" required/>
                                                                   </div>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <button type="submit" style="margin-left: -26px !important;" class="btn btn-block btn-primary p-lg-left-right" onclick="submitMarks()"> Confirm </button>
                                                                </div>
                                                            </div>
                                                         </div>
                                                    </div>
                                                  </div>
                                            </div>
                                      <!-- **************************************************** -->
                                    </div>
                                </div>
                            </div>

                              <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                     <a data-toggle="collapse" data-parent="#bs-collapse" href="#seven">Project Proposal</a></h4>
                                </div>
                                <div id="seven" class="panel-collapse collapse">
                                    <div class="panel-body">
                                   <!-- **************************************************** -->
                                         <div class="border preview">
                                              <div class="border"> 
                                                 <h5> Tags: <?php echo $row[$i]->Tags ?></h5><hr/>
                                                 <h5> Ideas: <?php echo $row[$i]->Ideas ?></h5><hr/>
                                                 <h5> Proposal Submission Date:<?php echo $row[$i]->Proposaldate ?></h5>
                                              </div>
                                                  <div class="border"> 
                                                    <div class="row">
                                                       <div class="col-md-5"></div>
                                                         <div class="col-md-7">
                                                            <div class="row" style="margin-bottom: -10px !important;">
                                                                <div class="col-md-8 ">
                                                                   <div class="form-group">
                                                                    <input  class="form-control" style=" height: 43px !important;" id="Proposalcomments" name="Proposalcomments" placeholder="Comment about this" type="text" value="" required/>
                                                                   </div>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <button type="submit" style="margin-left: -26px !important;" class="btn btn-block btn-primary p-lg-left-right" onclick=""> Confirm </button>
                                                                </div>
                                                            </div>
                                                         </div>
                                                    </div>
                                                  </div>
                                            </div>
                                      <!-- **************************************************** -->
                                    </div>
                                </div>
                            </div>
                              <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                     <a data-toggle="collapse" data-parent="#bs-collapse" href="#eight">Project Prototype</a></h4>
                                </div>
                                <div id="eight" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    <!-- **************************************************** -->
                                         <div class="border preview">
                                              <div class="border"> 

                                              </div>
                                                  <div class="border"> 
                                                    <div class="row">
                                                       <div class="col-md-5"></div>
                                                         <div class="col-md-7">
                                                            <div class="row" style="margin-bottom: -10px !important;">
                                                                <div class="col-md-8 ">
                                                                   <div class="form-group">
                                                                    <input  class="form-control" style=" height: 43px !important;" id="Marks" name="Marks" placeholder="Comment about this" type="text" value="" required/>
                                                                   </div>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <button type="submit" style="margin-left: -26px !important;" class="btn btn-block btn-primary p-lg-left-right" onclick=""> Confirm </button>
                                                                </div>
                                                            </div>
                                                         </div>
                                                    </div>
                                                  </div>
                                            </div>
                                      <!-- **************************************************** -->
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                     <a data-toggle="collapse" data-parent="#bs-collapse" href="#nine">Project Submission</a></h4>
                                </div>
                                <div id="nine" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    <!-- **************************************************** -->
                                         <div class="border preview">
                                              <div class="border"> 

                                              </div>
                                                  <div class="border"> 
                                                    <div class="row">
                                                       <div class="col-md-5"></div>
                                                         <div class="col-md-7">
                                                            <div class="row" style="margin-bottom: -10px !important;">
                                                                <div class="col-md-8 ">
                                                                   <div class="form-group">
                                                                    <input  class="form-control" style=" height: 43px !important;" id="Marks" name="Marks" placeholder="Comment about this" type="text" value="" required/>
                                                                   </div>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <button type="submit" style="margin-left: -26px !important;" class="btn btn-block btn-primary p-lg-left-right" onclick=""> Confirm </button>
                                                                </div>
                                                            </div>
                                                         </div>
                                                    </div>
                                                  </div>
                                            </div>
                                      <!-- **************************************************** -->
                                    </div>
                                </div>
                            </div>
                            </div>      
                           </div>
                       <?php  }
                            }
                         
                         if(isset($_REQUEST['Ccode'])){ $_SESSION['ccode'] = $_REQUEST['Ccode']; assign($_SESSION['ccode']); }
                         if(isset($_REQUEST['ID'])){  $id = $_REQUEST['ID']; preview($id,$_SESSION['ccode']); }
                         
                        ?> 
                     </div>
                <!-- end of panel -->

            </div>
                 </div>
            </div>