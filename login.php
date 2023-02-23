<!DOCTYPE html>

<head>
    <title>
        Login
    </title>

    <script>
        let id = (id) => document.getElementById(id);
        let classes = (classes) => document.getElementsByClassName(classes);
        let username = id("username"),
        email = id("email"),
        password = id("password"),
        form = id("form"),
        errorMsg = classes("error"),

        form.addEventListener("submit", (e) => {
        e.preventDefault();

        engine(username, 0, "Username cannot be blank");
        engine(email, 1, "Email cannot be blank");
        engine(password, 2, "Password cannot be blank");
        });

        let engine = (id, serial, message) => {
        if (id.value.trim() === "") {
            errorMsg[serial].innerHTML = message;
            id.style.border = "2px solid red";

        } else {
            errorMsg[serial].innerHTML = "";
            id.style.border = "2px solid green";
        }
        };
    </script>
    <style>
         .error {
            color: red;
            font-size: 14.5px;
            margin-top: 5px;
        }
        form{
            width: 50%;
            margin: 0px auto;
            padding: 20px;
            margin-top: 20px;
            border: 2px solid gray;
            background-color: white;
            border-radius: 10px 10px 10px 10px;
        }
        .input-group{
            margin: 10px 0px 10px 0px;
        }
        .input-group label{
            display: block;
            text-align: left;
            margin: 3px;
        }
        .input-group input{
            height: 40px;
            width: 100%;
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 5px;
        }
        .input-group button{
            padding: 10px;
            font-size: 15px;
            color: white;
            background-color: blue;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    
<form class="form" id="form">
    <div class="input-group">
        <label>User Name</label>
        <input type="text" id="username">
        
    </div>
    <div class="error"></div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" id="email">
        <div class="error"></div>
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" id="password">
        <div class="error"></div>
    </div>
    <div class="input-group">
        <button type="submit" id="submit">Login</button>
    </div>
    
    </form>
</body>