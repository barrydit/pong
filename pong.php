<!DOCTYPE html>
<html>
<head>
<style>

</style>
</head>

<body>
<canvas id="canvas" width="500" height="170" style="border: 1px solid #cccccc;">Canvas not supported</canvas>

<script>
const canvas = document.getElementById("canvas");
const context = canvas.getContext("2d");

var x =  0;
var y = 75;

var a = 100;
var b = 10;

var c = 100;
var d = 480;

var speed = 5,
    speed_paddle = 1;

// window.webkitRequestAnimationFrame
function animate() {
    reqAnimFrame = window.mozRequestAnimationFrame    ||
                window.requestAnimationFrame ||
                window.msRequestAnimationFrame     ||
                window.oRequestAnimationFrame
                ;
    reqAnimFrame(animate);
    x += speed;
    //y += speed;
    if(x <= 0 || x >= 475){
        speed = -speed;
    }
    if(y <= -10 || y >= 165){
        speed = -speed;
        
    }
    draw();
    draw_paddle();
}

function draw() {
    context.clearRect(0, 0, 500, 170);
    context.fillStyle = "#000";
    context.fillRect(250, 15, 3, 40);
    context.fillStyle = "#000";
    context.fillRect(250, 65, 3, 40);
    context.fillStyle = "#000";
    context.fillRect(250, 115, 3, 40);
    context.fillStyle = "#ff00ff"; // ccc
    context.fillRect(x, y, 25, 25);
}

function animate_paddle() {
    reqAnimFrame_paddle = window.mozRequestAnimationFrame ||
                window.requestAnimationFrame ||
                window.msRequestAnimationFrame ||
                window.oRequestAnimationFrame
                ;
    reqAnimFrame_paddle(animate_paddle);
/*
    b += speed;
    //y += speed;
    if(b <= 0 || b >= 475){
        speed = -speed;
    }
    if(a <= -10 || a >= 165){
        speed = -speed;
        
    }
*/
    //draw();
    draw_paddle();
}

function draw_paddle() {
    //context.clearRect(0, 0, 500, 170);
    context.fillStyle = "#9600ff";
    context.fillRect(b, a, 10, 40);
    context.fillStyle = "#2300ff";
    context.fillRect(d, c, 10, 40);
}

animate();
//animate_paddle();

document.addEventListener('keydown', function(event) {
    if(event.keyCode == 37) {
        //alert('Left was pressed');
        c -= 10;
        speed_paddle = 1;
    } else if(event.keyCode == 38) {
        //alert('Up was pressed');
        a -= 10;
        speed_paddle = 1;
    } else if(event.keyCode == 39) {
        //alert('Right was pressed');
        c += 10;
    } else if(event.keyCode == 40) {
        //alert('Down was pressed');
        //if(a <= 0 || a >= 150){
          a += 10;
        //}
        speed_paddle = 1;
    } 

    animate_paddle();
    //animate();
});
</script>
</body>
</html>