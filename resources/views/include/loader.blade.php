<div class="loader" id="load_screen">
  <div class="logo">
    <div class="white"></div>
    <div class="orange"></div>
    <div class="red"></div>
  </div>
  <p>Loading ...</p>
</div>

<style>
    div.loader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #fff;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  z-index: 100;
}
div.loader p {
  font-family: "Open sans", sans-serif;
  margin: 1em 0 0 0;
  font-size: 16px;
}

div.logo {
  width: 100px;
  height: 100px;
  box-sizing: border-box;
  position: relative;
  background-color: white;
}
div.logo::before, div.logo::after {
  z-index: 1;
  box-sizing: border-box;
  content: "";
  position: absolute;
  border: 4px solid transparent;
  width: 0;
  height: 0;
  animation-direction: alternate;
  animation-timing-function: linear;
}
div.logo::before {
  top: 0;
  left: 0;
  animation: border-before 1.5s infinite;
  animation-direction: alternate;
}
div.logo::after {
  bottom: 0;
  right: 0;
  animation: border-after 1.5s infinite;
  animation-direction: alternate;
}
div.logo > div {
  position: absolute;
  opacity: 0;
}
div.logo div.white {
  border-left: 4px solid black;
  top: 0;
  bottom: 0;
  right: 0;
  width: 0;
  animation: white 1.5s infinite;
  animation-direction: alternate;
}
div.logo div.orange {
  border-top: 4px solid black;
  left: 0;
  bottom: 0;
  right: 0;
  height: 0;
  background-color: #F3B93F;
  animation: orange 1.5s infinite;
  animation-direction: alternate;
}
div.logo div.red {
  border-right: 4px solid black;
  top: 0;
  bottom: 0;
  left: 0;
  width: 0;
  background-color: #EA5664;
  animation: red 1.5s infinite;
  animation-direction: alternate;
}

@keyframes border-before {
  0% {
    width: 0;
    height: 0;
    border-top-color: black;
    border-right-color: transparent;
  }
  12.49% {
    border-right-color: transparent;
  }
  12.5% {
    height: 0;
    width: 100%;
    border-top-color: black;
    border-right-color: black;
  }
  25%, 100% {
    width: 100%;
    height: 100%;
    border-top-color: black;
    border-right-color: black;
  }
}
@keyframes border-after {
  0%, 24.99% {
    width: 0;
    height: 0;
    border-left-color: transparent;
    border-bottom-color: transparent;
  }
  25% {
    width: 0;
    height: 0;
    border-left-color: transparent;
    border-bottom-color: black;
  }
  37.49% {
    border-left-color: transparent;
    border-bottom-color: black;
  }
  37.5% {
    height: 0;
    width: 100%;
    border-left-color: black;
    border-bottom-color: black;
  }
  50%, 100% {
    width: 100%;
    height: 100%;
    border-left-color: black;
    border-bottom-color: black;
  }
}
@keyframes red {
  0%, 50% {
    width: 0;
    opacity: 0;
  }
  50.01% {
    opacity: 1;
  }
  65%, 100% {
    opacity: 1;
    width: 27%;
  }
}
@keyframes orange {
  0%, 65% {
    height: 0;
    opacity: 0;
  }
  65.01% {
    opacity: 1;
  }
  80%, 100% {
    opacity: 1;
    height: 50%;
  }
}
@keyframes white {
  0%, 75% {
    width: 0;
    opacity: 0;
  }
  75.01% {
    opacity: 1;
  }
  90%, 100% {
    opacity: 1;
    width: 23%;
  }
}
</style>