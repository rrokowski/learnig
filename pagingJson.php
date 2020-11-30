<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>pagingJSON z mysql</title>
        <meta name="description" content="#"/>
        <meta name="keywords" content="#"/>
        
        <link rel='stylesheet' href='https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css'><link rel="stylesheet" href="./style.css">
        
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Faker/3.1.0/faker.min.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js'></script>
        
    </head>
    
    <body>
        <div id="container">
            <table id="table">
                <thead>
                    <tr>
                        <th>ID</th> <th>Name</th> <th>e-mail</th>
                    </tr>
                </thead>
            
                <tbody>
                </tbody>
                
            </table>
        </div>
        
        <script>
            
        $(document).ready(function loadUsers() {
            let xhr = new XMLHttpRequest();

            // OPEN - call type, url/file, sync/async
            xhr.open('GET', "lista.php", true);

            //SEND
            xhr.send(); 

            xhr.onload = function(){
                let users = JSON.parse(this.response);
                console.log(users);
                
                for (let i = 0; i < users.length; i++) {
                    $('#table').append('<tr><td>'+users[i].ID+'</td><td>'+users[i].name+'</td><td>'+users[i].email+'</td></tr>'); 
                };
                
                $('#table').DataTable( {
                    "lengthChange": false,
                });
            };
        });    
        </script>
    </body>
</html>