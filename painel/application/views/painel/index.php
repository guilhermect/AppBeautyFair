        <div class="container">
        
        
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd">
                            <h2>Basic Example</h2>
                            

                        </div>
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>ID</label>
                                <div class="nk-int-st">
                                    <input type="text"  class="form-control input-sm" placeholder=""  name="id" id="user_id">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Name</label>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control input-sm" placeholder="" name="user_name" id="user_name" >
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-example-int mg-t-15">
                            <button class="btn btn-success" type="submit" value="Save" onclick="save_user();">Submit</button>
                            <button type="submit" class="btn btn-warning" value="Update" onclick="update_user();">Update</button>
                            <button type="submit" value="Delete" class="btn btn-danger " onclick="delete_user();">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
    
            
            <br>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h3>Users List</h3>
                            <div class="table-responsive">
                                <table id="data-table-basic" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>NAME</th>
                                        </tr>
                                    </thead>
                                    
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
                                       
        </div> 

        <script>
 
        var tblUsers = document.getElementById('data-table-basic');
        var databaseRef = firebase.database().ref('users/');
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
        
        function update_user(){
        var user_name = document.getElementById('user_name').value;
        var user_id = document.getElementById('user_id').value;

        var data = {
        user_id: user_id,
        user_name: user_name
        }
        
        var updates = {};
        updates['/users/' + user_id] = data;
        firebase.database().ref().update(updates);
        
        alert('The user is updated successfully!');
        
        reload_page();
        }
        
        function delete_user(){
        var user_id = document.getElementById('user_id').value;
        
        firebase.database().ref().child('/users/' + user_id).remove();
        alert('The user is deleted successfully!');
        reload_page();
        }
        
        function reload_page(){
        window.location.reload();
        }
 
</script>
