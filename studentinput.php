         
                 <div class="border">
                     <h3 style="text-align:center;color: #0c4da2; font-weight: 600;">PROJECT SUBMISSION WINDOW</h3>
                   
                     <div class="border" id="studentpreview">
                      <?php 
                         
                         $id = " ";
                         $ccode = " ";
                         
                         function assign($a){ ?>
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
                                              <form method="post" name="Projectinfo"> 
                                                     <div class="form-group">
                                                    <input class="form-control"  id="Ccode" name="Ccode" placeholder="Code[sec]" type="text" value="<?php echo $a ?>" required/>
                                                     </div>
                                            <!-- end of Child panel-->
                                                <!-- Title -->
                                                     <div class="form-group">
                                                    <input class="form-control"  id="Title" name="Title" placeholder="Project Title" type="text" value="" required/>

                                                     </div>

                                             <!-- end of Child panel--> 
                                                <!-- Group -->
                                                     <div class="form-group">
                                                    <input class="form-control"  id="Ids" name="Ids" placeholder="ID(s)" type="text" value="" required/>

                                                     </div>  

                                                <div class="form-group">
                                                <button type="submit" class="btn btn-block btn-primary p-lg-left-right" onclick="projectInfo()"> Submit </button>
                                                </div>
                                              </form>
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
                                                  <form method="post" name="Proposalinfo"> 
                                                         <div class="form-group">
                                                        <input class="form-control"  id="Ccode" name="Ccode" placeholder="Code[sec]" type="text" value="<?php echo $a ?>" required/>
                                                         </div>                   
                                                      <div class="form-group">
                                                     <input class="form-control" id="Ideas" name="Ideas" placeholder="Project Ideas" value="" required>
                                                    </div> 
                                                    <div class="form-group">
                                                     <input class="form-control" id="Tags" name="Tags" placeholder="Project Tags" value="" required/>
                                                    </div> 

                                                    <div class="form-group">
                                                    <button type="submit" class="btn btn-block btn-primary p-lg-left-right" onclick="proposalInfo()"> Submit </button>
                                                    </div>
                                                  </form>
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
                                             <form method="post"> 
                                                    <div class="form-group">
                                                    <input class="form-control"  id="Ccode" name="Ccode" placeholder="Code[sec]" type="text" value="<?php echo $a ?>" required/>
                                                     </div>
                                                <div class="form-group">
                                                <label class="control-label">Project prototype</label>
                                                <!--check if problem found-->
                                                <input id="Prototype" name="Prototype" type="file" multiple class="file-loading">
                                                <script>
                                                $(document).on('ready', function() {
                                                    $("#Prototype").fileinput({
                                                        uploadUrl: '/file',
                                                        maxFilePreviewSize: 10240
                                                    });
                                                });
                                                </script>
                                                </div>
                                                <div class="form-group">
                                                <button type="submit" class="btn btn-block btn-primary p-lg-left-right"> Submit </button>
                                                </div>
                                              </form>
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
                                             <form  method="post">  
                                                <div class="form-group">
                                                    <input class="form-control"  id="Ccode" name="Ccode" placeholder="Code[sec]" type="text" value="<?php echo $a ?>" required/>
                                                </div>
                                                <div class="form-group">
                                                <label class="control-label">Submit Code</label>
                                                <input id="code" name="Prototype" type="file" multiple class="file-loading">
                                                <script>
                                                $(document).on('ready', function() {
                                                    $("#Prototype").fileinput({
                                                        uploadUrl: '/file-upload-batch/2',
                                                        maxFilePreviewSize: 10240
                                                    });
                                                });
                                                </script>
                                                </div>
                                                <div class="form-group">
                                                <button type="submit" class="btn btn-block btn-primary p-lg-left-right"> Submit </button>
                                                </div>
                                              </form>  
                                            </div>
                                      <!-- **************************************************** -->
                                    </div>
                                </div>
                            </div>
                            </div>      
                           </div>   
                       <?php     }
                         

                         
                         if(isset($_REQUEST['Ccode'])){ $_SESSION['ccode'] = $_REQUEST['Ccode']; assign($_SESSION['ccode']); }
                        // if(isset($_REQUEST['ID'])){  $id = $_REQUEST['ID']; preview($id,$_SESSION['ccode']); }
                         
                        ?> 
                     </div>
                <!-- end of panel -->

            </div>
