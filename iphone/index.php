<DOCTYPE html>
    <html>
        <head>
            <title>My First Web Page</title>
            <style>
                body {
                    background-color: #6998;
                    margin:0%;
                    padding:0%;
                
                    
                }
                form{
                    color: #000000;
                    border:2px solid white;
                    max-height:500px;
                    max-width:500px;                
                }
               label{
                font-size:35px;
               }
                .container{
                    display: flex;
                    justify-content: center;
                    align-items:center;
                    height:100vh;
                    
                }
                .center {
            padding: 20px;
          
        }
        
        button{
            background-color: red;
            color: #ffffff;
            text-align:center;
            padding:10px;
            border-radius:10px;
            
        
        }
        form button{
            margin-left:40%;
        }
       
            </style>
        </head>
        <body>
        <div class="container">
            <div class="center">
            <form action="insert.php" method="POST">
                <label for="model">model:</label>
                <input type="text" id="model" name="model" >
                <br>
                <label for="Gp">Gp:</label>
                <input type="text" id="Gp" name="Gp" >
                <br>
                <label for="price">price:</label>
                <input type="text" id="price" name="price" >
                <br>
                <button>submit</button>
            </form>
            </div>
            </div>
        </body>
        </html>