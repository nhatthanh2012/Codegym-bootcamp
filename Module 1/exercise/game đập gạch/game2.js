var canvas= document.getElementById('canvas');
var context = canvas.getContext('2d');
var ball ={
    x: 20,
    y: 20,
    radius:20,
    dx : 3,
    dy : 3,
    score : 0,
}
var paddle = {
    x : 0,
    y : canvas.height-10,
    width : 80,
    height : 10,
    speed: 5,
    isMovingLeft: false,
    isMovingRight : false,
}
var isgameover= false;
document.addEventListener('keyup', function (event) {
    console.log('KEY UP');
    console.log(event);
    if (event.keyCode == 37) {
        paddle.isMovingLeft = false;
    }
    else if (event.keyCode == 39) {
        paddle.isMovingRight = false;
    }
});

document.addEventListener('keydown', function (event) {
    console.log('KEY DOWN');
    console.log(event);
    if (event.keyCode == 37) {
        paddle.isMovingLeft = true;
    }
    else if (event.keyCode == 39) {
        paddle.isMovingRight = true;
    }
});
function drawBall() {
    context.beginPath()
    context.arc(ball.x, ball.y, ball.radius, 0, 2 * Math.PI);
    context.fillStyle = 'yellow';
    context.fill();
    context.closePath()
}
function drawPaddle(){
    context.beginPath();
    context.rect(paddle.x, paddle.y, paddle.width, paddle.height);
    context.fillStyle= 'yellow';
    context.fill();
    context.closePath();
}
function drawScore(){
    context.beginPath();
    context.font = '20px yellow'
    context.fillStyle = 'yellow';
    context.fillText("SCORE: "+ball.score, 20,20);
    context.closePath();
}
function vaCham_ball(){
    if(ball.x<ball.radius ||ball.x>canvas.width-ball.radius){
        ball.dx= -ball.dx
    }
    if(ball.y<ball.radius){
        ball.dy = -ball.dy
    }
}
function vacham_paddle(){
if(ball.x+ball.radius >=paddle.x &&
    ball.x +ball.radius<=paddle.x+paddle.width && 
    ball.y +ball.radius>=canvas.height-paddle.height){        
    ball.dy= -ball.dy;
    ball.score++
}
}
function update_ballPosition() {
    ball.x += ball.dx;
    ball.y += ball.dy;
}
function update_paddlePosition(){
    if(paddle.isMovingLeft){
        paddle.x -= paddle.speed
    }else if (paddle.isMovingRight){
        paddle.x += paddle.speed
    }
    if(paddle.x<0) {
        paddle.x=0
    } else if (paddle.x>canvas.width-paddle.width) {
        paddle.x = canvas.width-paddle.width
    }
    
}
function gameover(){
if(ball.y>canvas.height-ball.radius){
            isgameover=true
    }
}
function newGame(){
    location.reload()
};


function start(){
    if(!isgameover) {
        context.clearRect(0,0,canvas.width, canvas.height);
        drawBall();
        drawPaddle();
        drawScore();
        vaCham_ball();
        vacham_paddle();
        update_paddlePosition()
        update_ballPosition()
        gameover()        
        requestAnimationFrame(start);
    } else{
        console.log('GAME OVER')
    }
}
start()

