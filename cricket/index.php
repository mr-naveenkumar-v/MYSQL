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
                <label for="name">NAME:</label>
                <input type="text" id="name" name="name" >
                <br>
                <label for="skills">SKILLS:</label>
                <input type="text" id="skills" name="skills" >
                <br>
                <label for="runs">RUNS:</label>
                <input type="number" id="runs" name="runs" >
                <br>
                <button>submit</button>
            </form>
            </div>
            </div>
        </body>
        </html>