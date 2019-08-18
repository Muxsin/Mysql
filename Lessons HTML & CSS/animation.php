<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Title</title>
    <script>
    function myFunction() {
        document.getElementById("demo").innerHTML = "Hello JavaScript!";
        document.getElementById("demo").style.fontSize = "25px";
    }
    function backFunction(){
        document.getElementById("demo").innerHTML = "A Paragraph!";
        document.getElementById("demo").style.fontSize = "20px";
    }
    </script>
</head>
<body>

    <h1>My Web Page</h1>
    <p id="demo">A Paragraph</p>
    <button type="button" onclick="myFunction()">Try it</button>
    <button type="button" onclick="backFunction()">Back</button>
    <p style="text-align: center;"><img src="Me.jpg" alt="" style="width: 400px;"></p>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh 
    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad 
    minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut 
    aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in 
    vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis 
    at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril 
    delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta 
    nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer 
    possim assum. Nam liber tempor cum soluta nobis eleifend option congue nihil 
    imperdiet doming id quod mazim placerat facer possim assum.</p>

</body>
</html>
