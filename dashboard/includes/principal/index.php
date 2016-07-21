
<div class="row text-center pad-top">
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        <div class="div-square">
            <a data-toggle="modal" data-target="#myModal1" href="#">
                <i class="fa fa-table fa-5x"></i>
                <h4>Principal</h4> 
            </a>
            <div class="modal fade" id="myModal1" role="dialog" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog"  role ="document" >
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button onclick="add()" type="button" class="add" data-toggle="modal" data-target="#prinModal">+</button>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><center>Principal</center></h4>
                        </div>
                        <div class="modal-body ">
                            <table id='principaltb' class="display table" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>DESCRIPTION</th>
                                <th>STATUS</th>
                                <th></th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>          
            </div>    
            <div onshow="setPrinForm()" class="modal fade" id="prinModal" role="dialog" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog"  role ="document" >
                <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                            <h4 class="modal-title">Principal</h4>
                        </div>
                        <div class="modal-body ">
                            <form method="post" action="#">
                                <!--<label for="prin_id">Id:</label>-->
                                <input type="hidden" name="prin_id" class="form-control" id="prin_id">
                                <input type="hidden" name="type" class="form-control" id="type">
                                <input type="hidden" name="category" class="form-control" id="category">
                                <label for="prin_name">Name:</label>
                                <input type='text' name="prin_name" class="form-control" id="prin_name"></input> 
                                <label for="prin_desc">Description:</label>
                                <textarea style="resize:none" name="prin_desc" class="form-control" id="prin_desc"></textarea> 
                                <label for="prin_status">Status:</label>
                                <input type='radio' name="prin_status" class="form-control" id="prin_status_1" value="1">Available  </input> 
                                <input type='radio' name="prin_status" class="form-control" id="prin_status_0" value="0">Not Available  </input>
                                <br/><br/>
                                <input type="button" id="submit" class ="btn btn-success" data-dismiss="modal" value="UPDATE" />
                                <input id="back" type="button" class="btn btn-danger" data-dismiss="modal" value="CANCEL">
                                <!--<input type="RESET" class ="btn btn-danger" VALUE="RESET">-->
                            </form>
                        </div>
                        <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" language="javascript">
    var prin_id = 0;
    var type = 0;
    var prin_name = '';
    var prin_desc = '';
    var prin_status = 0;
    var category = 0;
    var row = 0;

    //$('#principaltb').dataTable( {
    // "aProcessing": true,
    // "aServerSide": true,
    //"ajax": "Get/getPrincipal.php",
    //} );

    function updatePrin(id, name, desc, status) {

        prin_id = id;
        type = 1;
        prin_name = name;
        prin_desc = desc;
        prin_status = status;
        category = 0;

        document.getElementById("prin_update").value = "UPDATE";
    }

    function setPrinForm(){
        //alert(prin_id.toString());
        //document.getElementById("prin_id").disabled = false;
        document.getElementById("prin_id").value = (prin_id === null) ? 0 : prin_id.toString();
        document.getElementById("category").value = category.toString();
        document.getElementById("type").value = type.toString();
        document.getElementById("prin_name").value = prin_name.toString();
        document.getElementById("prin_desc").textContent = prin_desc.toString();
        //document.getElementById("prin_status").value = prin_status.toString();
       // document.getElementById("prin_id").disabled = true;
       if(prin_status !== null){
            if(prin_status.toString() === "0"){
                document.getElementById("prin_status_0").checked = 1;
            } else if(prin_status.toString() === "1") {
                document.getElementById("prin_status_1").checked = 1;
            }
        }
    }

    function add() {
        prin_id = null;
        type = 0;
        prin_name = '';
        prin_desc = '';
        prin_status = 1;
        category = 0;
        document.getElementById("prin_id").value = (prin_id === null) ? 0 : prin_id.toString();
        document.getElementById("category").value = category.toString();
        document.getElementById("type").value = type.toString();
        document.getElementById("prin_name").value = prin_name.toString();
        document.getElementById("prin_desc").value = prin_desc.toString();
        document.getElementById("prin_status_1").checked = true;
    }
    
    $('#submit').click(function()
        {
            prin_id = document.getElementById("prin_id").value;
            categoy = document.getElementById("category").value;
            type = document.getElementById("type").value;
            prin_name = document.getElementById("prin_name").value;
            prin_desc = document.getElementById("prin_desc").value;
            if(document.getElementById("prin_status_0").checked === true) {
                prin_status = 0;
            }
            else {
                prin_status = 1;
            }
            
            $.ajax({
                url: '../DAL/dashboard/saveData.php',
                type:'POST',
                data:
                {
                    type: type,
                    category: category,
                    prin_id: prin_id,
                    prin_name: prin_name,
                    prin_desc: prin_desc,
                    prin_status: prin_status
                },
                success: function(msg)
                {
                    prinTable._fnAjaxUpdate();
                    $("#back").click();
                    add();
                }               
            });
            
        });
        /* within ready event of pageload */
        var prinTable = $('#principaltb').dataTable( {
                            "processing": true,
                            "serverSide": true,
                            "ajax": "../DAL/dashboard/getPrincipal.php"
                        } );
</script>