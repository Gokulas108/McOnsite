<h2 class="font-weight-bold">Add Estimation :</h2>
<div ng-controller="scaffEstimate">
                          
<div class="parent-container d-flex">    
  
  <div class="container">
    <div class="row">
            <div class="col-md-6">
                
            <!--ROW-1-->
            <div class="form-row">
                <div class="col-md-12">
                  <label>Work Order No. : {{ newEstimate.WO }}</label>
                </div>
            </div>
            <hr>
              <!--ROW 2-->
              <div class="form-row">
                <div class="col-md-6">
                  <label for="validationServer01">Start Elevation</label>
                  <input type="number" ng-model="newEstimate.START_ELE" ng-change="calculateEstimation()" class="form-control" id="startElevation" placeholder="Edit" required="True">
                  <div class="valid-feedback">Available</div>
                  <div class="invalid-feedback">Work Order Already exists.</div>
                </div>
                <div class="col-md-6">
                  <label for="validationServer01">Confined ?</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                          <div class="custom-control custom-switch">
                            <input type="checkbox" ng-model="newEstimate.CONFINED" ng-change="calculateEstimation()" class="custom-control-input" id="customSwitch1">
                            <label class="custom-control-label" for="customSwitch1"></label>
                          </div> 
                      </div>
                    </div>
                    <input type="text" class="form-control" ng-value="newEstimate.CONFINED ? 'Yes' : 'No'" id="CONFINEDtab" disabled>
                  </div>
                  <div class="valid-feedback">Available</div>
                  <div class="invalid-feedback">Work Order Already exists.</div>
                </div>
              </div>
              
              <!--ROW 3-->
              <div class="form-row">
                <div class="col-md-4">
                  <label for="validationServer01">Length</label>
                  <input type="number" ng-model="newEstimate.LENGTH" ng-change="calculateEstimation()" class="form-control" id="Length" placeholder="Edit" required="True">
                  <div class="valid-feedback">Available</div>
                  <div class="invalid-feedback">Work Order Already exists.</div>
                </div>
                <div class="col-md-4">
                  <label for="validationServer01">Width</label>
                  <input type="number" ng-model="newEstimate.WIDTH" ng-change="calculateEstimation()" class="form-control" id="Width" placeholder="Edit" required="True">
                  <div class="valid-feedback">Available</div>
                  <div class="invalid-feedback">Work Order Already exists.</div>
                </div>
                <div class="col-md-4">
                  <label for="validationServer01">Height</label>
                  <input type="number" ng-model="newEstimate.HEIGHT" ng-change="calculateEstimation()" class="form-control" id="Height" placeholder="Edit" required="True">
                  <div class="valid-feedback">Available</div>
                  <div class="invalid-feedback">Work Order Already exists.</div>
                </div>
              </div>
              <hr>
      
              <!--ROW 4-->
              <div class="form-row">
                <div class="col-md-12">
                  <label for="validationServer01">No. of Decks</label>
                  <div class="valid-feedback">Available</div>
                  <div class="invalid-feedback">Work Order Already exists.</div>
                </div>
              </div>
      
              <!--ROW 5-->
              <div class="form-row">
                <div class="col-md-6">
                  <label style="float:right;">Upto 6m</label>
                  <div class="valid-feedback">Available</div>
                  <div class="invalid-feedback">Work Order Already exists.</div>
                </div>
                <div class="col-md-6">
                    <input type="number" ng-model="newEstimate.NPF0_6M" ng-change="calculateEstimation()" class="form-control" id="npf" placeholder="Edit" required="True">
                  <div class="valid-feedback">Available</div>
                  <div class="invalid-feedback">Work Order Already exists.</div>
                </div>
              </div>

              <!--ROW 5-->
              <div class="form-row">
                <div class="col-md-6">
                  <label style="float:right;">> 6m to 18m</label>
                  <div class="valid-feedback">Available</div>
                  <div class="invalid-feedback">Work Order Already exists.</div>
                </div>
                <div class="col-md-6">
                    <input type="number" ng-model="newEstimate.NPF6_18M" ng-change="calculateEstimation()" class="form-control" id="npf" placeholder="Edit" required="True">
                  <div class="valid-feedback">Available</div>
                  <div class="invalid-feedback">Work Order Already exists.</div>
                </div>
              </div>

              <!--ROW 5-->
              <div class="form-row">
                <div class="col-md-6">
                  <label style="float:right;">> 18m to 30m</label>
                  <div class="valid-feedback">Available</div>
                  <div class="invalid-feedback">Work Order Already exists.</div>
                </div>
                <div class="col-md-6">
                    <input type="number" ng-model="newEstimate.NPF18_30M" ng-change="calculateEstimation()" class="form-control" id="npf" placeholder="Edit" required="True">
                  <div class="valid-feedback">Available</div>
                  <div class="invalid-feedback">Work Order Already exists.</div>
                </div>
              </div>

              <!--ROW 5-->
              <div class="form-row">
                <div class="col-md-6">
                  <label style="float:right;">> 30m to 42m</label>
                  <div class="valid-feedback">Available</div>
                  <div class="invalid-feedback">Work Order Already exists.</div>
                </div>
                <div class="col-md-6">
                    <input type="number" ng-model="newEstimate.NPF30_42M" ng-change="calculateEstimation()" class="form-control" id="npf" placeholder="Edit" required="True">
                  <div class="valid-feedback">Available</div>
                  <div class="invalid-feedback">Work Order Already exists.</div>
                </div>
              </div>

              <!--ROW 5-->
              <div class="form-row">
                <div class="col-md-6">
                  <label style="float:right;">Above 42m</label>
                  <div class="valid-feedback">Available</div>
                  <div class="invalid-feedback">Work Order Already exists.</div>
                </div>
                <div class="col-md-6">
                    <input type="number" ng-model="newEstimate.NPF_42_100M" ng-change="calculateEstimation()" class="form-control" id="npf" placeholder="Edit" required="True">
                  <div class="valid-feedback">Available</div>
                  <div class="invalid-feedback">Work Order Already exists.</div>
                </div>
              </div>
              <hr>

              <!--ROW 6-->
              <div class="form-row">
                  <div class="col-md-12">
                    <label for="validationServer01">Task assigned to</label>
                    <input type="number" ng-model="newWorkOrder.WorkOrderNo" ng-change="CheckWorkOrderNo()" class="form-control" id="WorkOrderNo" placeholder="Edit" required="True">
                    <div class="valid-feedback">Available</div>
                    <div class="invalid-feedback">Work Order Already exists.</div>
                  </div>
                </div>
        
                <!--ROW 7-->
                <div class="form-row">
                  <div class="col-md-12">
                    <label for="validationServer01">Functional Location</label>
                    <input type="number" ng-model="newWorkOrder.WorkOrderNo" ng-change="CheckWorkOrderNo()" class="form-control" id="WorkOrderNo" placeholder="Edit" required="True">
                    <div class="valid-feedback">Available</div>
                    <div class="invalid-feedback">Work Order Already exists.</div>
                  </div>
                </div>
            </div>
            <div class="col-md-6">
              <!--ROW 1-->
              <div class="form-row">
                  <div class="col-md-12">
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Scaffolding Type</label>
                        <select id="inputState" class="form-control" ng-model="newEstimate.CAT_2" ng-change="calculateEstimation()">
                              <option selected>Choose...</option>
                              <option>INDEPENDENT</option>
                              <option>MOBILE TOWER</option>
                              <option>INDEPENDENT TOWER</option>
                              <option>BIRDCAGE</option>
                              <option>HANGING</option>
                              <option>CANTILEVER</option>
                              <option>LOAD BEARING</option>
                              <option>SPECIAL DESIGNED</option>
                            </select>
                      </div>
                    <div class="valid-feedback">Available</div>
                    <div class="invalid-feedback">Work Order Already exists.</div>
                  </div>
                </div>
          
              <!--ROW 2-->
              <div class="form-row">
                <div class="col-md-12">
                  <div class="form-group col-md-12">
                      <label for="inputEmail4">Material Type</label>
                      <select id="inputState" class="form-control" ng-model="newEstimate.CAT_1" ng-change="calculateEstimation()">
                            <option selected>Choose...</option>
                            <option>CONVENTIONAL</option>
                            <option>SYSTEM</option>
                          </select>
                    </div>
                  <div class="valid-feedback">Available</div>
                  <div class="invalid-feedback">Work Order Already exists.</div>
                </div>
              </div>
      
              <!--ROW 3-->
              <div class="form-row">
                <div class="col-md-12">
                  <div class="form-group col-md-12">
                      <label for="inputEmail4">Deck Type</label>
                      <select id="inputState" class="form-control" ng-model="newEstimate.CAT_3" ng-change="calculateEstimation()">
                            <option selected>Choose...</option>
                            <option>DECKING LVL</option>
                            <option>METAL DECKING</option>
                            <option>CANTILEVER</option>
                            <option>PLATFORM</option>
                            <option>BRIDGING SPAN</option>
                            <option>RAMP</option>
                            <option>SCAFFOLD</option>
                            <option>STAIRCASE</option>
                            <option>HARD BARRICADE</option>
                          </select>
                    </div>
                  <div class="valid-feedback">Available</div>
                  <div class="invalid-feedback">Work Order Already exists.</div>
                </div>
              </div>
              <hr>
              <!--ROW 4-->
              <div class="form-row">
                <div class="col-md-12">
                  <label for="validationServer01">Erection Date</label>
                  <input id="erectionDate" class="form-control" ng-model="newEstimate.ERE_DATE" ng-change="calculateEstimation()" name="erectionDate" type="text" placeholder="--Select a date--" data-uk-datepicker="{format:'DD-MM-YYYY'}" >
                  <div class="valid-feedback">Available</div>
                  <div class="invalid-feedback">Work Order Already exists.</div>
                </div>
              </div>
      
              <div class="form-row">
                  <div class="col-md-12">
                    <label for="validationServer01">Off-Hire Date</label>
                    <input id="offHireDate" class="form-control" ng-model="newEstimate.OFF_DATE" ng-change="calculateEstimation()" name="offHireDate" type="text" placeholder="--Select a date--" data-uk-datepicker="{format:'DD-MM-YYYY'}" >
                    <div class="valid-feedback">Available</div>
                    <div class="invalid-feedback">Work Order Already exists.</div>
                  </div>
                </div> 

              <!--ROW 5-->
              <div class="form-row">
                <div class="col-md-12">
                  <label for="validationServer01">Dismantle Date</label>
                  <input id="dismantleDate" class="form-control" ng-model="newEstimate.DIS_DATE" ng-change="calculateEstimation()" name="dismantleDate" type="text" placeholder="--Select a date--" data-uk-datepicker="{format:'DD-MM-YYYY'}" >
                  <div class="valid-feedback">Available</div>
                  <div class="invalid-feedback">Work Order Already exists.</div>
                </div>
              </div> 
              <hr>
      
              <!--ROW 8-->
              <div class="form-row">
                <div class="col-md-12">
                  <label for="validationServer01">Description</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                  <div class="valid-feedback">Available</div>
                  <div class="invalid-feedback">Work Order Already exists.</div>
                </div>
              </div>
            </div>
    </div>
    <hr>
    <div class="col-md-12 text-left">
        <button type="button" ng-If="!thisForm.TASK_ID" ng-click="addEstimation()" style="text-align: center" class="btn btn-dark btn-lg ">Add Estimation</button>
        <button type="button" ng-If="!thisForm.TASK_ID" style="text-align: center" class="btn btn-danger btn-lg ">Clear</button>
        <button type="button" ng-If="thisForm.TASK_ID && thisForm.IsEditMode " ng-click="updateEstimation()" style="text-align: center" class="btn btn-dark btn-lg ">Save Changes</button>
    </div>
    <hr ng-If="(thisForm.TASK_ID && thisForm.IsEditMode) || !thisForm.TASK_ID ">
  </div>

  <div class="container">
      <div class="col-md-12 text-right">
      <button type="button" id="editEstimation" ng-If="(thisForm.TASK_ID)&&(user.RL=='CONTRACTOR')" ng-click="editEstimation()" class="btn btn-outline-danger">{{thisForm.IsEditMode? "Done" : "Edit"}}</button>
      <button type="button" data-toggle="modal" ng-If="(thisForm.TASK_ID)" data-target="#attachmentModal" class="btn btn-outline-secondary">Add/View Attachments</button>

      <!-- MODAL FORM -->
      <div class="modal fade bd-example-modal-lg" id="attachmentModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Attachments</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <div class="modal-body">
              <table class="table table-sm text-left">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">FileName</th>
                    <th scope="col">Uploaded By</th>
                    <th scope="col" colspan="3"></th>
                  </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="x in Attachments">
                        <td>{{$index +1}}</td>
                        <td>{{ x.FILENAME }}</td>
                        <td>{{ x.BY }}</td>
                        <td class="text-right"><a ng-click="downloadAttachment(x.ID)"  class="btn btn-sm btn-danger"><i style="font-size: 10px;" class="fas fa-download"></i></a>
                        </td>
                    </tr>
                </tbody>
              </table>
              <form id="AttachmentForm" action="Scaffolding/addAttachment.php" method="post" enctype="multipart/form-data">
                <input style="font-size:15px; float:right" type="file" id="documentfile" name="documentfile">
                <label style="float:right">Choose Document : </label><br>
                <input style="font-size:15px; float:right" type="file" id="imagefile" accept="image/*" name="imagefile">
                <label style="float:right">Choose Image : </label>
                <input style="float:left" type="submit" class="btn btn-dark btn " value="Upload Documents"/>
                <input style="float:left" type="hidden" name="Task_ID" ng-value="thisForm.TASK_ID"/>
                <!-- <input style="float:right" type="submit" class="btn btn-dark btn " value="Upload Pictures"/> -->
                <!-- <input type="file" accept="image/*" capture="environment"> -->
              </form>
            </div> 
          </div>
        </div>
      </div>


      <hr>
      </div>
      <div class="card w-100 text-white bg-dark sticky-top scroll">
          <div class="card-header">Calculation</div>
          <div class="card-body">
            <div class="form-row">
              <div class="col md-12">
                  <table class="table table-bordered table-striped table-dark table-sm text-right"> 
                    <thead>
                        <th>Category</th>
                        <th>Volume ( m<sup>3</sup> )</th>
                        <th>{{calculated[0].WIDTH ? "Area( m² )" : 'LM(m)'}}</th>
                    </thead>
                    <tbody >
                      <tr>
                        <td>Upto 6m</td>
                        <td>{{ calculated[0].QTY_STR0_6M }}</td>
                        <td>{{ calculated[0].QTY_BRD0_6M }}</td>
                      </tr>
                      <tr>
                        <td>> 6m to 18m</td>
                        <td>{{ calculated[0].QTY_STR6_18M }}</td>
                        <td>{{ calculated[0].QTY_BRD6_18M }}</td>
                      </tr>
                      <tr>
                        <td>> 18m to 30m</td>
                        <td>{{ calculated[0].QTY_STR18_30M }}</td>
                        <td>{{ calculated[0].QTY_BRD18_30M }}</td>
                      </tr>
                      <tr>
                        <td>> 30m to 42m</td>
                        <td>{{ calculated[0].QTY_STR30_42M }}</td>
                        <td>{{ calculated[0].QTY_BRD30_42M }}</td>
                      </tr>
                      <tr>
                        <td>Above 42m</td>
                        <td>{{ calculated[0].QTY_STR_42_100M }}</td>
                        <td>{{ calculated[0].QTY_BRD_42_100M }}</td>
                      </tr>
                    </tbody>  
                  </table> 
                </div>
            </div>
                <div class="form-row">
                    <div class="col md-12">
                        <table class="table table-dark table-sm"> 
                          <thead>
                              <th></th>
                              <th>Cost</th>
                              <th>Cost Code</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Erection (70%)</td>
                              <td>QAR {{ calculated[0].ERE_AMT_TOTAL }}</td>
                              <td>{{ calculated[0].ER_STR_COSTCODE }} &nbsp {{ calculated[0].ER_BRD_COSTCODE }}</td>
                            </tr>
                            <tr>
                              <td>Dismantle (30%)</td>
                              <td>QAR {{ calculated[0].DIS_AMT_TOTAL }}</td>
                              <td>{{ calculated[0].ER_STR_COSTCODE }} &nbsp {{ calculated[0].ER_BRD_COSTCODE }}</td>
                            </tr>
                            <tr>
                              <td>Hire</td>
                              <td>QAR {{ calculated[0].HIRE_AMT_TOTAL }}</td>
                              <td>{{ calculated[0].HIRE_STR_COSTCODE }} &nbsp {{ calculated[0].HIRE_BRD_COSTCODE }}</td>
                            </tr>
                            <tr>
                              <td colspan=3 style="font-style:italic;" class="text-right font-weight-bold">TOTAL COST : QAR {{ calculated[0].TOTAL_COST }} /-</td>
                            </tr>
                          </tbody>  
                        </table> 
                      </div>
                </div>
                <!-- <div class="form-row">
                <div class="col md-12 text-right">
                    <label for="validationServer01">TOTAL COST : QAR {{ calculated[0].TOTAL_COST }}  </label>
                  </div>
          </div> -->
        </div>
    </div>
</div>
</div>



<!-- <div class="card text-white bg-dark sticky-top">
    <div class="card-header">Calculation</div>
    <div class="card-body">
        <div class="col md-6">
          <table class="table table-bordered table-striped table-dark"> 
            <thead>
                <th>Category</th>
                <th>Volume</th>
                <th>Area</th>
            </thead>
            <tbody>
              <tr>
                <td>Upto 6m</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>> 6m to 18m</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>> 18m to 30m</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>>30m to 42m</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>Above 42m</td>
                <td></td>
                <td></td>
              </tr>
            </tbody>  
          </table> 
        </div>   

  </div>
</div> -->