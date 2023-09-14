<!DOCTYPE html>

<head>
    <title>registreer account</title>
</head>

<body>
    <!-- menubar -->
    <div class="menubar">
        <ul>
            <li><a href="{{ route('login') }}">Login &nbsp</a>om door tegaan of maak een account aan</li>
        </ul>
    </div>
    <!-- Loginsysteem, this only gets the inputs -->
    <div class="loginpos">
        <div class="loginrect">

            {{-- @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach --}}
            <form method="post" autocomplete="off">
                @csrf
                <h2>Registreren</h2>
                <input type="text" name="name" id="username" placeholder="voer gebruikersnaam in" require><br>
                <input type="password" name="password" id="password" placeholder="voer wachtwoord in"require><br>
                <input type="password" name="password_confirmation" id="password_comfirmation" placeholder="herhaal wachtwoord"require><br>
                <input type="text" name="gender" id="gender" placeholder="voer gender in"require><br>
                <input type="date" name="age" id="age" placeholder="voer uw geboortedatum in"require><br>
                <input type="email" name="email" id="email" placeholder="JohnJoe@email.com"require><br>
                <input type="text" name="phonenumber" id="phonenumber" placeholder="voer telefoonnummer in"
                    require><br>
                <input type="submit" name="btnsubmit" value="registeer en login"><br>
            </form>
        </div>
    </div>
</body>

</html>













<style>
body{
    background-color: rgb(69, 59, 59);
    font-family: 'Righteous', cursive;
    margin: 10px;
    background-repeat: no-repeat;
    overflow: hidden;
}
.menubar{
    margin: -10px;
    position: sticky; top: 0;
    width: auto;
    background-color: rgb(9, 9, 9);
    padding-top: 1px;
    padding-bottom: 5px;
    margin-bottom: 10px;
    border-bottom: 1px solid rgb(255, 255, 255)
    

}
.flex-container{
    display: flex;
    flex-direction: column;
    position: sticky; top: 0%;
}
#main{
    transition: margin-left .5s;
}
.menubar ul{
    list-style-type: none;
    overflow: hidden;
}
.menubar li {
    float: left;
    color: rgb(255, 255, 255);
    display: block;
    text-align: center;
    text-decoration: none;
    padding-left: 10px;
    padding-right: 10px;
}
.menubar li a{
    font-family: 'Righteous', cursive;
    color: rgb(255, 255, 255);
    float: left;
    display: block;
    text-align: center;
    text-decoration: none;
    padding: 1px;
    transition: 400ms;
}
.menubar li a:hover{
    background-color: rgba(255, 255, 255, 1.0);
    color: black;
    border-radius: 5px;
    transition: 400ms;
    transform: scale(1.15);
}

.loginpos{
    display: flex;
    height: 90vh;
    justify-content: center;
    align-items: center

}
.loginrect{
    color: rgb(160, 162, 165);
    text-align: center;
    float: center;
    border-style: solid;
    border-color: rgb(0, 0, 0);
    border-radius: 8px;
    width: 500px;
    height: 350px;
    background-color: rgb(54, 57, 63);
    padding: 20px;

}
.loginrect input{
    color: white;
    background-color: rgba(0, 0, 0, 0.527);
    border: none;
    transition: 400ms;

}
.loginrect input:hover{
    background-color: rgba(255, 255, 255, 1.0);
    color: black;
    border-radius: 5px;
    transition: 400ms;
    transform: scale(1.15);
}

.loginrect input::placeholder{
    color: white;
}
.loginrect input:hover::placeholder{
    color: rgb(0, 0, 0);
    transition: 400ms;
}


iframe{
    border-radius: 10px;
    padding: 10px;
    background-color: rgba(98, 98, 98, 0.8);
    border: 2px solid rgb(0, 0, 0);   
    width: 565px;
    height: 650px;
    margin-bottom: 20px;
}


.menubar li input{
    color: white;
    font-weight: 600;
    font-family: 'Righteous', cursive;
    border:none;
    background-color: rgba(0, 0, 0, 0.0);
    transition: 400ms;
}

.menubar li input:hover{
    background-color: rgba(255, 255, 255, 1.0);
    color: black;
    border-radius: 5px;
    transition: 400ms;
    transform: scale(1.15);
}


input{
    font-family: 'Righteous', cursive;
    font-size: medium;
}
</style>
