
    <div class="menubar">
        <ul>
        <li><a href="http://portfolio.test/">HoofdPagina</a></li>
        <li><a href="{{route('postCreate')}}">Create Portfolio</a></li>
        <li><a href="http://portfolio.test/post/">Overzicht Portfolio</a></li>

        @if (Auth::check())
            <li><a href="http://portfolio.test/uitloggen">uitloggen</a></li> 
            @else 
            <li><a href="http://portfolio.test/login">inloggen</a></li>  
        @endif

        </ul>

        @if (Auth::check())
        <div class="loggedinuser">
            Welkom {{Auth::user()->name}}
        </div>
        @endif
    </div>

<style>

body{
background-color: rgb(0, 0, 0); 
font-family: 'Righteous', cursive;
margin: 10px;
background-repeat: no-repeat;
/* overflow: hidden; */
}
.menubar{
margin: -11px;
position: sticky; top: 0;
width: auto;
background-color: rgb(9, 9, 9);
padding-top: 1px;
padding-bottom: 5px;
margin-bottom: 10px;
border-bottom: 1px solid rgb(255, 255, 255);
display:flex;
justify-content:space-between;


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

.loggedinuser {
color: rgb(255, 255, 255);
margin: 20px;
position: sticky; top: 0;

background-color: rgb(9, 9, 9);
padding-top: 1px;
padding-bottom: 5px;
margin-bottom: 10px;
display:flex;
justify-content:space-between;
}

::-webkit-scrollbar {
  width: 1px;
  height: 1px;
}
::-webkit-scrollbar-track {
  background: #000000; 
}
    </style>