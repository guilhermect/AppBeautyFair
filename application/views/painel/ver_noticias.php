        <div class="container">
        
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h3>Users List</h3>
                            <div class="table-responsive">
                                <table id="table" class="table table-striped">
                                    <thead class="thead-dark">
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
 
        var tblUsers = document.getElementById('table');
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
        
        
 
</script>
