//scroll for taskit

const html = document.documentElement;
const canvas = document.getElementById("hydantoin");
const context = canvas.getContext("2d");

const hydantoinCanvas = document.getElementById("taskit");
const hydantoinContext = canvas.getContext("2d");

const frameCount = 100;
const currentFrame = index => (
  `http://www.srikantv.com/assets/HydantoinFrames/hydantoinFrames${index.toString().padStart(3, '0')}.jpg`
)

const currentFrame1 = index => (
  `http://www.srikantv.com/assets/TaskitFrames/taskitFrames${index.toString().padStart(3, '0')}.jpg`
)

const preloadImages = () => {
  for (let i = 1; i < frameCount; i++) {
    const img = new Image();
    img.src = currentFrame(i);
  }
};

const preloadImages1 = () => {
  for (let i = 1; i < frameCount; i++) {
    const img = new Image();
    img.src = currentFrame1(i);
  }
};

const img = new Image()
img.src = currentFrame(1);
canvas.width=1500;
canvas.height=1154;
img.onload=function(){
  context.drawImage(img, 0, 0);
}

const himg = new Image()
himg.src = currentFrame1(1);
hydantoinCanvas.width=1500;
hydantoinCanvas.height=1154;
himg.onload=function(){
  hydantoinContext.drawImage(img, 0, 0);
}

const updateImage = index => {
  img.src = currentFrame(index);
  context.drawImage(img, 0, 0);
}

const updateImage1 = index => {
  himg.src = currentFrame1(index);
  hydantoinContext.drawImage(himg, 0, 0);
}

window.addEventListener('scroll', () => {  
  const scrollTop = html.scrollTop;
  const maxScrollTop = html.scrollHeight - window.innerHeight;
  const scrollFraction = scrollTop / maxScrollTop;
  const frameIndex = Math.min(
    frameCount - 1,
    Math.ceil(scrollFraction * frameCount)
  );
  requestAnimationFrame(() => updateImage1(frameIndex + 1))
  requestAnimationFrame(() => updateImage(frameIndex + 1))
});

preloadImages();
preloadImages1();

