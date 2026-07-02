<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Page Not Found</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {
      line-height: 1.2;
      margin: 0;
    }    
html {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
  width: 100%;
  background-color: #f0f0f0;
}

body {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin: 0;
  padding: 2em;
  text-align: center;
}

h1 {
  color: #555;
  font-size: 3em;
  font-weight: 400;
  margin-bottom: 0.5em;
  animation-name: shake;
  animation-duration: 1s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
}

p {
  color: #888;
  font-size: 1.5em;
  margin: 0;
}

@keyframes shake {
  0% {
    transform: rotate(0deg);
  }
  10% {
    transform: rotate(10deg);
  }
  20% {
    transform: rotate(-10deg);
  }
  30% {
    transform: rotate(10deg);
  }
  40% {
    transform: rotate(-10deg);
  }
  50% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(0deg);
  }
}

@media only screen and (max-width: 480px) {

  h1 {
    font-size: 2em;
  }

  p {
    font-size: 1em;
  }

}
  </style>
</head>
<body>
  <h1>Oops!</h1>
  <p>La pagina que buscaste no fue encontrada.</p>
</body>
</html>

<!-- IE needs 512+ bytes: https://docs.microsoft.com/archive/blogs/ieinternals/friendly-http-error-pages -->
