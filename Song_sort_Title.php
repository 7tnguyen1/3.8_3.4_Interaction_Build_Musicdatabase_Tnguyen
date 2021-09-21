body{
	margin:0;
	padding:0;
	background:white;
	overflow: scroll;
	overflow-x: hidden;	
}

.grid-container{
	display: grid;
	grid-template-columns: 15% 10% 75%;
	grid-template-rows: auto auto auto auto auto;
	height: 100vh;
}

.img_1{
	grid-column-start: 1;
	grid-column-end: span 4;
	height:300px;
	background:red;
}

.img_1 img{
	display:block;
	margin-left:auto;
	margin-right:auto;
	height:300px;
	width:100%;
}

.footer{
	background-color: white;
	grid-column-end: span 4;
	padding-top:25px;
	text-align: center;
	color:black;
	height:50px;
}

.navigation{
	box-sizing: border-box;
	grid-column-start: 1;
	grid-column-end: span 4;
	margin-top:-10px;
	height:60px;
	background-color:red;
}


nav{
	width:100%;
	background:white;
	overflow:auto;
	position: static;
	
}


ul{
	padding:0;
	margin:0 0 0 150px;
	list-style: none;
}

li{
	float:right;
}


nav a{
	display:block;
	width:100px;
	padding: 20px 15px;
	text-decoration:none;
	font-family:Arial;
	color:black;
	text-align: center;
}

nav a:hover{
	background:purple;
	transition:0.5s;
}

.content_1{
	background-color: white;
	grid-column-start: 1;
	grid-column-end: span 4;
	z-index: 2;	
	height: 100px;
	border: 2px solid red;
}


.content_2{
	grid-column-start: 1;
	grid-column-end: span 1;
	background-color: white;
	z-index: 2;
	height:604px;
	border: 2px solid red;
}


.content_3{
	grid-column-start: 2;
	grid-column-end: span 4;
	background-color:white;
	z-index: 2;
	height:600px;		
}

.content_3{
	width: 100%;
	display: grid;
    grid-gap: 2%;
	grid-template-columns: 2% 12% 12% 12% 12% 12% 12%;
    grid-template-rows: 26px;
	padding-top: 4px;
	padding-left:5%;
	overflow:scroll;	
	overflow-x:scroll;
	overflow-x: hidden;	
}

h1{
	text-align:center;
}
