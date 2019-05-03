var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var dx = 3,
    dy = 3,
    score = 0
var ball = {
    x: 20,
    y: 20,
    radius: 20,

}
var ball2 = {
    x: 480,
    y: 20,
    radius: 30,

}

var paddle = {
    x: 0,
    y: canvas.height - 10,
    width: 100,
    height: 10,
    speed: 20,
    isMovingLeft: false,
    isMovingRight: false,
}
var isgameover = false;
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
function drawBall(x, y, radius) {
    context.beginPath()
    context.arc(x, y, radius, 0, 2 * Math.PI);
    context.fillStyle = 'yellow';
    context.fill();
    context.closePath()
}
function drawPaddle() {
    context.beginPath();
    context.rect(paddle.x, paddle.y, paddle.width, paddle.height);
    context.fillStyle = 'yellow';
    context.fill();
    context.closePath();
}
function drawScore() {
    context.beginPath();
    context.font = '20px yellow'
    context.fillStyle = 'yellow';
    context.fillText("SCORE: " + score, 20, 20);
    context.closePath();
}
function vaCham_ball(x, y, radius) {
    if (x < radius || x > canvas.width - radius) {
        dx = -dx
    }
    if (y < radius) {
        dy = -dy
    }
}
function vacham_paddle(x, y, radius) {
    if (x + radius >= paddle.x &&
        x + radius <= paddle.x + paddle.width &&
        y + radius >= canvas.height - paddle.height) {
        dy = -dy;
        score++
    }
}
// function update_ballPosition(x,y) {
//     x += dx;
//     y += dy;
// }
function update_paddlePosition() {
    if (paddle.isMovingLeft) {
        paddle.x -= paddle.speed
    } else if (paddle.isMovingRight) {
        paddle.x += paddle.speed
    }
    if (paddle.x < 0) {
        paddle.x = 0
    } else if (paddle.x > canvas.width - paddle.width) {
        paddle.x = canvas.width - paddle.width
    }

}
function gameover(y, radius) {
    if (y > canvas.height - radius) {
        isgameover = true
    }
}
function newGame() {
    location.reload()
};


function start() {
    if (!isgameover) {
        context.clearRect(0, 0, canvas.width, canvas.height);
        drawBall(ball.x, ball.y, ball.radius)

        drawPaddle();
        drawScore();
        vaCham_ball(ball.x, ball.y, ball.radius)


        vacham_paddle(ball.x, ball.y, ball.radius)

        update_paddlePosition()
        ball.x += dx;
        ball.y += dy;

        gameover(ball.y, ball.radius)
        // drawBall(ball2.x, ball2.y, ball2.radius)
        // vaCham_ball(ball2.x, ball2.y, ball2.radius)
        // vacham_paddle(ball2.x, ball2.y, ball2.radius)
        // ball2.x += dx;
        // ball2.y += dy;

        // gameover(ball2.y, ball2.radius)

        requestAnimationFrame(start);
    } else {
        console.log('GAME OVER')
    }
}
start()

// function start2() {
//     if (!isgameover) {
//         context.clearRect(0, 0, canvas.width, canvas.height);
//         drawBall(ball2.x, ball2.y, ball2.radius)

//         drawPaddle();
//         drawScore();
//         vaCham_ball(ball2.x, ball2.y, ball2.radius)


//         vacham_paddle(ball2.x, ball2.y, ball2.radius)

//         update_paddlePosition()
//         ball2.x += dx;
//         ball2.y += dy;

//         gameover(ball2.y, ball2.radius)
       

//         requestAnimationFrame(start2);
//     } else {
//         console.log('GAME OVER')
//     }
// }
// start2()

