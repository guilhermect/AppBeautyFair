        <div class="container">
        
        
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd">
                            <h2>Basic Example</h2>
                            

                        </div>
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>Email Address</label>
                                <div class="nk-int-st">
                                    <input type="text"  class="form-control input-sm" placeholder="Enter Email"  name="id" id="user_id">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Password</label>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control input-sm" placeholder="Password" name="user_name" id="user_name" >
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-example-int mg-t-15">
                            <button class="btn btn-success notika-btn-success" type="submit" value="Save" onclick="save_user();">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
    

            <!--<table>
                <tr>
                <td>Id: </td>
                <td><input type="text" name="id" id="user_id" /></td>
                </tr>
                <tr>
                <td>User Name: </td>
                <td><input type="text" name="user_name" id="user_name" /></td>
                </tr>
                <tr>
                <td colspan="2">
                    <input type="button" value="Save" onclick="save_user();" />
                    <input type="button" value="Update" onclick="update_user();" />
                    <input type="button" value="Delete" onclick="delete_user();" />
                </td>
                </tr>
                </table>
                
                <h3>Users List</h3>
                
                <table id="tbl_users_list" border="1">
                <tr>
                <td>#ID</td>
                <td>NAME</td>
                </tr>
            </table>-->
        </div> 

        <script>
 
            var tblUsers = document.getElementById('tbl_users_list');
            var database = firebase.database().ref('users/');
            var rowIndex = 1;
            
            databaseRef.once('value', function(snapshot) {
                snapshot.forEach(function(childSnapshot) {
                    var childKey = childSnapshot.key;
                    var childData = childSnapshot.val();
            
                    var row = tblUsers.insertRow(rowIndex);
                    var cellId = row.insertCell(0);
                    var cellName = row.insertCell(1);
                    cellId.appendChild(document.createTextNode(childKey));
                    cellName.appendChild(document.createTextNode(childData.user_name));
            
                    rowIndex = rowIndex + 1;
                });
            });
   
            function save_user(){
                var user_name = document.getElementById('user_name').value;
        
                var uid = firebase.database().ref().child('users').push().key;
        
                var data = {
                    user_id: uid,
                    user_name: user_name
                }
        
                var updates = {};
                    updates['/users/' + uid] = data;
                    firebase.database().ref().update(updates);
        
                    alert('The user is created successfully!');
                    reload_page();
            }

    
  
            function reload_page(){
                    window.location.reload();
            }
  
        </script>